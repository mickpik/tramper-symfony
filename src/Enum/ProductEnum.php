<?php

namespace App\Enum;

class ProductEnum
{
    public static function getPrices(): array
    {
        return [
            'fishSoup_1' => 7.95,
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
            'fishSoup_1' => 'Vissoep, 0,5 liter',
            'fishSoup_05' => 'Vissoep, 1,0 liter',
            'lobsterSoup' => 'Kreeftensoe, 0,5 liter',
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
            'Za 20 april - Agrimarkt Goes (8.00 - 17.00)' => 'za_agri',
            'Za 20 april - Standplaats Heinkenszand (8.00 - 12.00)' => 'za_hkz',
            'Za 20 april - Wemeldinge haven (14.00 - 17.00)' => 'za_wml',
            'Za 20 april - Smokkelhoekweg 11, Kapelle (16.00 - 17.00)' => 'za_smk',
            'Zo 21 april - Smokkelhoekweg 11, Kapelle (12.00 - 13.00)' => 'zo_smk',
            'Ma 22 april - Smokkelhoekweg 11, Kapelle (12.00 - 13.00)' => 'ma_smk'
        ];
    }
}
