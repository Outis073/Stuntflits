<x-base-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('Discounts') }}
        </h2>
    </x-slot>

    <div class="mx-auto grid max-w-7xl grid-flow-col gap-4 p-6 lg:p-8">
        <div class="col-span-4">
            <div class="mt-12">
                <div class="grid grid-cols-1 gap-4 lg:gap-6">

                    @unless (count($discounts) == 0)

                        @foreach ($discounts as $discount)
                            <x-discount-card :discount="$discount" />
                        @endforeach
                    @else
                        <p>Geen aanbiedingen gevonden</p>
                    @endunless


                </div>
            </div>
            <div class="mt-6 p-4">
                {{ $discounts->links() }}
            </div>
        </div>
        <div class="col-span-1">
            Grid 2
        </div>

    </div>
</x-base-layout>
