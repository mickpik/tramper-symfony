<?php

namespace App\Enum;

class ProductEnum
{
    public static function getPrices(): array
    {
        return [
            'fishSoup_1' => 9.95,
            'fishSoup_05' => 4.95,
            'lobsterSoup' => 15.95,
            'fishDish' => 14.95,
            'fishDish_4' => 14.50,
            'meatDish' => 14.95,
            'meatDish_4' => 14.50,
            'gourmet' => 9.95,
            'gourmet_4' => 9.50,
        ];
    }

    public static function getNames(): array
    {
        return [
            'fishSoup_1' => 'Vissoep, 1,0 liter',
            'fishSoup_05' => 'Vissoep, 0,5 liter',
            'lobsterSoup' => 'Kreeftensoep, 1,0 liter',
            'fishDish' => 'Visschotel de luxe, per persoon',
            'fishDish_4' => 'Visschotel de luxe, per persoon',
            'meatDish' => 'Vleesschotel de luxe, per persoon',
            'meatDish_4' => 'Vleesschotel de luxe, per persoon',
            'gourmet' => 'Gourmetschotel, per persoon',
            'gourmet_4' => 'Gourmetschotel, per persoon',
        ];
    }

    public static function getMinFourFields(): array
    {
        return [
            'fishDish_4',
            'meatDish_4',
            'gourmet_4'
        ];
    }

    public static function getPickupMoments(): array
    {
        return [
            'Di 24 dec - Smokkelhoekweg 11, Kapelle (13.00 - 15.00)' => 'di_smokkelhoek',
            'Wo 25 dec - Smokkelhoekweg 11, Kapelle (12.00 - 13.00)' => 'wo_smokkelhoek',
            'Do 26 dec - Smokkelhoekweg 11, Kapelle (12.00 - 13.00)' => 'do_smokkelhoek',
            'Di 31 dec - Smokkelhoekweg 11, Kapelle (13.00 - 14.00)' => 'smokkelhoek_oudjaar'
        ];
    }
}
