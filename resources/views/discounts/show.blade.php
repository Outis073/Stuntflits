@props(['discount'])
<x-base-layout>
    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm dark:bg-gray-800 sm:rounded-lg">
                <x-discount-card :discount="$discount" />

                <div class="flex justify-end py-2 px-2">

                    <a href="{{ route('discounts.edit', ['discount' => $discount->id]) }}"
                        class="ml-3 inline-flex items-center rounded-md border border-gray-300 bg-white px-4 py-2 text-xs font-semibold uppercase tracking-widest text-gray-700 shadow-sm transition duration-150 ease-in-out hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 disabled:opacity-25 dark:border-gray-500 dark:bg-gray-800 dark:text-gray-300 dark:hover:bg-gray-700 dark:focus:ring-offset-gray-800">
                        {{ __('Edit') }}
                    </a>

                    <form method="POST" action="{{ route('discounts.destroy', $discount) }}">
                        @csrf
                        @method('DELETE')
                        <button
                            class="ml-3 inline-flex items-center rounded-md border border-transparent bg-red-600 px-4 py-2 text-xs font-semibold uppercase tracking-widest text-white transition duration-150 ease-in-out hover:bg-red-500 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 active:bg-red-700 dark:focus:ring-offset-gray-800">
                            {{ __('Delete') }}
                        </button>
                    </form>
                </div>

            </div>
        </div>
    </div>
</x-base-layout>
