<x-app-layout>
    <div class="py-12">
        <div class="max-w-2xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                <h2 class="text-2xl font-bold mb-4">Make a Payment</h2>

                @livewire('payment-form', ['clientSecret' => $clientSecret])

            </div>
        </div>
    </div>
</x-app-layout>