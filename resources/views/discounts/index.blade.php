<x-base-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('Discounts') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm dark:bg-gray-800 sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("Man man man") }}
                </div>
            </div>
        </div>
    </div>

    <div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4">

        @unless(count($discounts) == 0)
       
        @foreach($discounts as $discount)
        <x-discount-card :discount="$discount" />
        @endforeach

        @else
        <p>Geen aanbiedingen gevonden</p>
        @endunless 

    </div>

    <div class="mt-6 p-4">
        {{$discounts->links()}}
    </div>
</x-base-layout>
