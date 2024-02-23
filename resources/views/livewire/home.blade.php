<div class="w-full">
    <header>
    </header>

    <main class="grid gap-8 lg:grid-cols-12 md:mt-10">
        <aside class="lg:col-span-8 border overflow-hidden h-[1000px]">
            {{-- stories --}}
            <section>
                <ul class="flex items-center gap-2 overflow-x-auto scrollbar-hide">
                    @for ($i = 0; $i < 20; $i++)
                        <li class="flex flex-col justify-center w-20 gap-1 p-2">
                            <x-avatar story src="https://source.unsplash.com/500x500?face-{{ $i }}" class="h-14 w-14" />

                            <p class="text-xs font-medium truncate">{{ fake()->name }}</p>
                        </li>
                    @endfor
                </ul>
            </section>
        </aside>

        <aside class="hidden p-4 border lg:col-span-4 lg:block">
            <div class="flex items-center gap-2">
                <x-avatar src="https://source.unsplash.com/500x500?face" class="w-12 h-12" />
                
                <h4 class="font-medium">{{ fake()->name }}</h4>
            </div>
            
            {{-- suggestions --}}
            <section class="mt-4">
                <h4 class="font-bold text-gray-700/95">Suggestions for you</h4>

                <ul class="my-2 space-y-3">
                    <li class="flex items-center gap-3">
                        <x-avatar src="https://source.unsplash.com/500x500?face" class="w-12 h-12" />

                        <div class="grid w-full grid-cols-7 gap-2">
                            <div class="col-span-5">
                                <h5 class="text-sm font-semibold truncate">{{ fake()->name }}</h5>

                                <p class="text-xs truncate">Follow by {{ fake()->name }}</p>
                            </div>
                            
                            <div class="flex justify-end col-span-2 text-right">
                                <button class="ml-auto text-sm font-bold text-blue-500">Follow</button>
                            </div>
                        </div>
                    </li>
                </ul>
            </section>

            {{-- links --}}
            <section class="mt-5">
                <ol class="flex flex-wrap gap-2">
                    <li class="text-xs font-medium text-gray-800/90">
                        <a href="" class="hover:underline">About</a>
                    </li>
                </ol>
            </section>
        </aside>
    </main>
</div>
