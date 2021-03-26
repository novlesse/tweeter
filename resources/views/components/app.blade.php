<x-master>
    <div style="h-auto">
        <section class="px-8 pb-8">
            <main class="container mx-auto">
                <div class="lg:flex lg:justify-between">
                    @if (auth()->check())
                    <div class="lg:w-1/6">
                        @include('_sidebar-links')
                    </div>
                    @endif
                    
                    <div class="lg:flex-1 lg:mx-10">
                        {{ $slot }}
                    </div>
    
                    @if (auth()->check())
    
                    <div class="lg:w-1/6 overflow-y-scroll h-auto">
                        @include('_friends-list')
                    </div>
                    @endif
                </div>
            </main>
        </section>
    </div>
</x-master>