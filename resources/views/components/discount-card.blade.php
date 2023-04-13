<div
    class="duration-250 flex scale-100 rounded-lg bg-white from-gray-700/50 via-transparent p-6 shadow-2xl shadow-gray-500/20 transition-all focus:outline focus:outline-2 focus:outline-red-500 motion-safe:hover:scale-[1.01] dark:bg-gray-800/50 dark:bg-gradient-to-bl dark:shadow-none dark:ring-1 dark:ring-inset dark:ring-white/5">
    <div>
        <div class="flex h-16 w-16 items-center justify-center rounded-full bg-red-50 dark:bg-red-800/20">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                class="h-7 w-7 stroke-red-500">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
            </svg>
        </div>

        <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">{{ $discount->title }}</h2>

        <p class="mt-4 text-sm leading-relaxed text-gray-500 dark:text-gray-400">
            {{ $discount->description }}
        </p>
    </div>

    <a href="google.nl" class="self-center"> <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
            stroke-width="1.5" class="mx-6 h-6 w-6 shrink-0 self-center stroke-red-500">
            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
        </svg>
    </a>
</div>
