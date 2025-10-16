<div
    x-data="paymentForm()"
    x-init="initStripe('{{ $clientSecret }}')"
>
    <div id="payment-element"></div>

    <button
        id="submit"
        @click="handleSubmit"
        class="mt-4 w-full bg-blue-600 text-white font-bold py-2 px-4 rounded hover:bg-blue-700 disabled:opacity-50"
        :disabled="processing"
    >
        <span x-show="!processing">Pay Now</span>
        <span x-show="processing">Processing...</span>
    </button>

    <div id="payment-message" class="mt-2 text-red-500 text-sm" x-text="message"></div>

    <script src="https://js.stripe.com/v3/"></script>

    <script>
        function paymentForm() {
            return {
                stripe: null,
                elements: null,
                processing: false,
                message: '',
                initStripe(clientSecret) {
                    this.stripe = Stripe('{{ config('services.stripe.key') }}'); // Your publishable key

                    this.elements = this.stripe.elements({
                        clientSecret
                    });

                    const paymentElement = this.elements.create("payment");
                    paymentElement.mount("#payment-element");
                },
                async handleSubmit() {
                    this.processing = true;

                    const { error } = await this.stripe.confirmPayment({
                        elements: this.elements,
                        confirmParams: {
                            // Make sure to change this to your payment completion page
                            return_url: `${window.location.origin}`,
                        },
                    });

                    // This will only be reached if an immediate error occurs
                    if (error.type === "card_error" || error.type === "validation_error") {
                        this.message = error.message;
                    } else {
                        this.message = "An unexpected error occurred.";
                    }

                    this.processing = false;
                }
            }
        }
    </script>
</div>