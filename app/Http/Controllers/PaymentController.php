<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stripe\PaymentIntent;

class PaymentController extends Controller
{
    public function show()
    {
        // Set your secret key.
        \Stripe\Stripe::setApiKey(config('services.stripe.secret'));

        // Create a PaymentIntent with amount and currency
        $intent = PaymentIntent::create([
            'amount' => 1099, // amount in cents, e.g., $10.99
            'currency' => 'usd',
            'automatic_payment_methods' => [
                'enabled' => true,
            ],
        ]);

        return view('payment.show', [
            'clientSecret' => $intent->client_secret,
        ]);
    }
}
