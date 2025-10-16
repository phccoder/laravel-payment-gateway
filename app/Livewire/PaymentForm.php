<?php

namespace App\Livewire;

use Livewire\Component;

class PaymentForm extends Component
{
    public $clientSecret;

    public function mount($clientSecret)
    {
        $this->clientSecret = $clientSecret;
    }

    public function render()
    {
        return view('livewire.payment-form');
    }
}
