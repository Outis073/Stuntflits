<x-base-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('Discounts') }}
        </h2>
    </x-slot>

    <div class="mx-auto max-w-7xl p-6 lg:p-8">
        <div class="flex justify-center">
            <h1 class="text-white">Test</h1>
        </div>

        <div class="mt-16">
            <div class="grid grid-cols-1 gap-6 lg:gap-8">

                @unless (count($discounts) == 0)

                    @foreach ($discounts as $discount)
                        <x-discount-card :discount="$discount" />
                    @endforeach
                @else
                    <p>Geen aanbiedingen gevonden</p>
                @endunless


            </div>
        </div>

    </div>

    <div class="mt-6 p-4">
        {{ $discounts->links() }}
    </div>
</x-base-layout>
