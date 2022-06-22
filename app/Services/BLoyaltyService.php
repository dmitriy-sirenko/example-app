<?php

namespace App\Services;

use App\Contracts\Loyalty\LoyaltyService;

class BLoyaltyService implements LoyaltyService {

    public function calcDiscount($price)
    {
        return $price * 0.5;
    }
}
