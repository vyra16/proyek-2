<nav class="bg-black shadow-sm sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-6 py-4 flex flex-wrap items-center justify-between gap-4">

        {{-- Logo --}}
        <a href="{{ route('home') }}"
           class="text-2xl font-bold"
           style="color: #E4B65D">
            Kanaya Organizer
        </a>

        {{-- Menu Navigasi --}}
        <div class="flex flex-wrap items-center gap-2 md:gap-4 text-sm font-medium">

            {{-- HOME --}}
            <a href="{{ route('home') }}"
               class="rounded-full px-4 py-2 transition-colors duration-300
               {{ request()->routeIs('home') ? 'bg-[#E4B65D]/15 text-[#E4B65D] ring-1 ring-[#E4B65D]' : 'text-white hover:text-[#E4B65D] hover:bg-white/10' }}">
                HOME
            </a>

            {{-- ABOUT US --}}
            <a href="{{ route('about') }}"
               class="rounded-full px-4 py-2 transition-colors duration-300
               {{ request()->routeIs('about') ? 'bg-[#E4B65D]/15 text-[#E4B65D] ring-1 ring-[#E4B65D]' : 'text-white hover:text-[#E4B65D] hover:bg-white/10' }}">
                ABOUT US
            </a>

            {{-- PRICELIST --}}
            <a href="{{ route('packages') }}"
               class="rounded-full px-4 py-2 transition-colors duration-300
               {{ request()->routeIs('packages') ? 'bg-[#E4B65D]/15 text-[#E4B65D] ring-1 ring-[#E4B65D]' : 'text-white hover:text-[#E4B65D] hover:bg-white/10' }}">
                PRICELIST
            </a>

            {{-- SERVICES --}}
            <a href="{{ route('services') }}"
               class="rounded-full px-4 py-2 transition-colors duration-300
               {{ request()->routeIs('services') ? 'bg-[#E4B65D]/15 text-[#E4B65D] ring-1 ring-[#E4B65D]' : 'text-white hover:text-[#E4B65D] hover:bg-white/10' }}">
                SERVICES
            </a>

            {{-- GALLERY --}}
            <a href="{{ route('gallery') }}"
               class="rounded-full px-4 py-2 transition-colors duration-300
               {{ request()->routeIs('gallery') ? 'bg-[#E4B65D]/15 text-[#E4B65D] ring-1 ring-[#E4B65D]' : 'text-white hover:text-[#E4B65D] hover:bg-white/10' }}">
                GALLERY
            </a>

            {{-- CONSULTATION --}}
            <a href="{{ route('review') }}"
               class="rounded-full px-4 py-2 transition-colors duration-300
               {{ request()->routeIs('review') ? 'bg-[#E4B65D]/15 text-[#E4B65D] ring-1 ring-[#E4B65D]' : 'text-white hover:text-[#E4B65D] hover:bg-white/10' }}">
                REVIEW
            </a>

            {{-- CONTACT --}}
            <a href="{{ route('contact') }}"
               class="rounded-full px-4 py-2 transition-colors duration-300
               {{ request()->routeIs('contact') ? 'bg-[#E4B65D]/15 text-[#E4B65D] ring-1 ring-[#E4B65D]' : 'text-white hover:text-[#E4B65D] hover:bg-white/10' }}">
                CONTACT
            </a>

        </div>
    </div>
</nav>