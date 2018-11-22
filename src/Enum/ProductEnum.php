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

    public static function getMinFourFields(): array
    {
        return [
            'fishDish_4',
            'meatDish_4',
            'gourmet_4'
        ];
    }
}
