<?php

namespace App\Controller;

use App\Enum\ProductEnum;
use App\Form\HolidayOrderType;
use App\Model\OrderRow;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\FormError;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    /**
     * @Route("/", name="index")
     * @param Request $request
     * @return Response
     */
    public function index(Request $request, \Swift_Mailer $mailer): Response
    {
        $form = $this->createForm(HolidayOrderType::class);

        $form->handleRequest($request);
        if ($form->isSubmitted()) {
            $error = null;

            foreach (ProductEnum::getMinFourFields() as $minFourField) {
                $field = $form->get($minFourField);
                $data = $field->getData();

                if (null !== $data && $data < 4) {
                    $formError = new FormError('U dient een waarde van minimaal 4 in te voeren');
                    $field->addError($formError);
                    $error = true;
                }
            }

            if ($form->isValid()) {
                $total = 0;
                $orderRows = [];
                foreach (ProductEnum::getPrices() as $field => $price) {
                    $data = $form->get($field)->getData();
                    if ($data !== null) {
                        $total += ($data * $price);
                        $orderRow = new OrderRow();
                        $orderRow->amount = $data;
                        $orderRow->price = $price;
                        $orderRow->name = ProductEnum::getNames()[$field];
                        $orderRows[] = $orderRow;
                    }
                }

                $pickupMoment = array_flip(ProductEnum::getPickupMoments())[$form->get('pickup')->getData()];

                $mailTos = [$form->get('email')->getData(), 'info@sjaaktramper.nl'];
                foreach ($mailTos as $mailTo) {
                    $message = (new \Swift_Message('Bestelling Successvol'))
                        ->setFrom('info@sjaaktramper.nl')
                        ->setTo($mailTo)
                        ->setBody(
                            $this->renderView(
                                'emails/order.html.twig',
                               [
                                   'total' => $total,
                                   'orderRows' => $orderRows,
                                   'pickupMoment' => $pickupMoment,
                                   'name' => $form->get('name')->getData(),
                                   'email' => $form->get('email')->getData(),
                                   'phone' => $form->get('phone')->getData(),
                                   'postal' => $form->get('postal')->getData(),
                                   'city' => $form->get('city')->getData(),
                                   'street' => $form->get('street')->getData(),
                                   'number' => $form->get('number')->getData()
                               ]
                            ),
                            'text/html'
                        );
                    $mailer->send($message);
                }

                if ($error === null) {
                    $this->addFlash(
                        'order',
                        'Uw bestelling is geplaatst. U krijgt per mail nogmaals bevestiging van u geplaatste bestelling.'
                    );

                    return $this->redirect($this->generateUrl('index') . '#feestdagen');
                }
            }
        }

        return $this->render(
            'index.html.twig',
            [
                'form' => $form->createView(),
            ]
        );
    }
}
