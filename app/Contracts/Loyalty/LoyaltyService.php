<?php

namespace App\Contracts\Loyalty;

interface LoyaltyService {
    public function calcDiscount($price);
}
