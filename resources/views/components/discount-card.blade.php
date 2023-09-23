<div
    class="duration-250 flex max-h-52 scale-100 rounded-lg bg-white from-gray-700/50 via-transparent p-2 shadow-2xl shadow-gray-500/20 transition-all focus:outline focus:outline-2 focus:outline-red-500 motion-safe:hover:scale-[1.01] dark:bg-gray-800/50 dark:bg-gradient-to-bl dark:shadow-none dark:ring-1 dark:ring-inset dark:ring-white/5">

    @if (!empty($discount->image) && file_exists(public_path('storage/' . $discount->image)))
        <img class="w-32 md:w-48 lg:w-60" src="{{ asset('storage/' . $discount->image) }}" alt="discount image"
            title="" style="max-width: 200px">
    @else
        <img class="w-54 aspect-square object-cover" src="{{ asset('/storage/uploads/default.jpg') }}" alt="discount image"
            title="" style="max-width: 200px">
    @endif

    <div class="flex flex-col justify-between p-4 leading-normal">
        <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">{{ $discount->title }}</h2>

        <p class="mt-4 text-sm leading-relaxed text-gray-500 dark:text-gray-400">
            {{ $discount->description }}
        </p>

        <div class="flex items-center justify-between">
            <span class="text-3xl font-bold text-gray-900 dark:text-white">€ {{ $discount->new_price }}</span>
            <a href="/discounts/{{ $discount->id }}" class="self-center"> <svg xmlns="http://www.w3.org/2000/svg"
                    fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    class="mx-6 h-6 w-6 shrink-0 self-center stroke-red-500">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                </svg>
            </a>
        </div>
    </div>
</div>
