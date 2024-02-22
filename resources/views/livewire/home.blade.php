<div class="w-full">
    <header>
    </header>

    <main class="grid gap-8 lg:grid-cols-12 md:mt-10">
        <aside class="lg:col-span-8 border overflow-hidden h-[1000px]">
            {{-- stories --}}
            <section>
                <ul class="flex items-center gap-2 overflow-x-auto">
                    @for ($i = 0; $i < 20; $i++)
                        <li class="flex flex-col justify-center w-20 gap-1 p-2">
                            <x-avatar src="https://source.unsplash.com/500x500?face-{{ $i }}" class="h-14 w-14" />

                            <p class="text-xs font-medium truncate">{{ fake()->name }}</p>
                        </li>
                    @endfor
                </ul>
            </section>
        </aside>

        {{-- suggestions --}}
        <aside class="hidden p-4 border lg:col-span-4 lg:block">
        </aside>
    </main>
</div>
