<x-base-layout>

    <div class="py-12">
        <div class="mx-auto max-w-7xl space-y-6 bg-white py-6 shadow dark:bg-gray-800 sm:px-6 lg:px-8">
            <form method="POST" action="{{ route('discounts.store') }}" class="mt-6 space-y-6"
                enctype="multipart/form-data">
                @csrf

                <!-- Title -->
                <div>
                    <x-input-label for="title" :value="__('Title')" />
                    <x-text-input id="title" class="mt-1 block w-full" type="text" name="title"
                        placeholder="Title" required autofocus autocomplete="title" />
                    <x-input-error :messages="$errors->get('title')" class="mt-2" />
                </div>

                <!-- Description -->
                <div>
                    <x-input-label for="description" :value="__('Description')" />
                    <textarea id="description"
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 dark:focus:border-indigo-600 dark:focus:ring-indigo-600"
                        type="text" rows="4" cols="50" name="description" placeholder="Description" required autofocus
                        autocomplete="description"></textarea>
                    <x-input-error :messages="$errors->get('description')" class="mt-2" />
                </div>

                <!-- Image -->
                <div>
                    <x-input-label for="image" :value="__('Image')" />
                    <input id="image"
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 dark:focus:border-indigo-600 dark:focus:ring-indigo-600"
                        type="file" name="image" required autofocus autocomplete="image" />
                    <x-input-error :messages="$errors->get('image')" class="mt-2" />
                </div>

                <!-- Old Price -->
                <div>
                    <x-input-label for="old_price" :value="__('Old Price')" />
                    <x-text-input id="old_price" class="mt-1" type="text" name="old_price" placeholder="Old Price"
                        required autofocus autocomplete="old_price" />
                    <x-input-error :messages="$errors->get('old_price')" class="mt-2" />
                </div>

                <!-- New Price -->
                <div>
                    <x-input-label for="new_price" :value="__('New Price')" />
                    <x-text-input id="new_price" class="mt-1" type="text" name="new_price" placeholder="New Price"
                        required autofocus autocomplete="new_price" />
                    <x-input-error :messages="$errors->get('new_price')" class="mt-2" />
                </div>

                <!-- Url -->
                <div class="mt-4">
                    <x-input-label for="url" :value="__('Url')" />
                    <x-text-input id="url" class="mt-1 block w-full" type="url" name="url"
                        placeholder="Url" required autofocus autocomplete="url" />
                    <x-input-error :messages="$errors->get('url')" class="mt-2" />
                </div>

                <div class="columns-2">
                    <!-- Start Date -->
                    <div class="mt-4">
                        <x-input-label for="start_date" :value="__('Start Date')" />
                        <x-text-input id="start_date" class="mt-1" type="date" name="start_date" required autofocus
                            autocomplete="start_date" />
                        <x-input-error :messages="$errors->get('start_date')" class="mt-2" />
                    </div>

                    <!-- End Date -->
                    <div class="mt-4">
                        <x-input-label for="end_date" :value="__('End Date')" />
                        <x-text-input id="end_date" class="mt-1" type="date" name="end_date" required autofocus
                            autocomplete="end_date" />
                        <x-input-error :messages="$errors->get('end_date')" class="mt-2" />
                    </div>
                </div>

                <div class="mt-4 flex items-center justify-end">
                    <x-primary-button class="ml-4">
                        {{ __('Create') }}
                    </x-primary-button>
                </div>
            </form>
        </div>
    </div>
</x-base-layout>
