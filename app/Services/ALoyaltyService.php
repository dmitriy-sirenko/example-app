<?php

namespace App\Services;

use App\Contracts\Loyalty\LoyaltyService;

class ALoyaltyService implements LoyaltyService {

    public function calcDiscount($price)
    {
        return $price * 0.2;
    }
}
