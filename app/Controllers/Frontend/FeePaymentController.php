<?php

namespace App\Controllers\Frontend;

use App\Controllers\BaseController;

class FeePaymentController extends BaseController
{
    public function index()
    {
        return view('frontend/fee-payment');
    }
}
