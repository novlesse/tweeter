<x-app>
        <header class="mb-8 relative">
            {{-- <img
                src="/images/"
                alt="banner"
                class="mb-2"
            /> --}}
            <div class="relative">
                {{-- TEMP BANNER --}}
                <div class="bg-gradient-to-r from-blue-300 to-red-200 rounded-xl" style="height: 240px"></div>
                <img
                    src="{{ $user->avatar }}"
                    alt=""
                    class="rounded-full h-40 w-40 mr-2 absolute border-4 border-white bottom-0 transform -translate-x-1/2 translate-y-1/2"
                    style="left: 50%"
                />    
            </div>

            <div class="flex justify-between items-center mt-2 mb-6">
                <div class="max-w-md">
                    <h2 class="font-bold text-3xl mt-2">{{ $user->name }}</h2>
                    <p class="text-gray-400">Joined {{ $user->created_at->diffForHumans() }}</p>
                    <div class="flex mt-1">
                        <p class="text-sm font-medium">Chirps {{ $user->tweets()->count() }}</p>
                        <p class="text-sm font-medium mx-1">|</p>
                        <p class="text-sm font-medium">Following {{ $user->follows()->count() }}</p>
                    </div>
                </div>

                <div class="flex">
                    @can('edit', $user)
                        <a href="{{ $user->path('edit') }}" class="rounded-full py-2 px-4 bg-white border border-blue-400 text-blue-400 text-xs hover:bg-blue-400 hover:text-white">Edit Profile</a>
                    @endcan
                    
                    <x-follow-button :user="$user"/>
                </div>
            </div>

            <p class="text-sm">
                {{ $user->bio ?: 'No biography currently written.' }}
            </p>
        </header>

        @include('partials._timeline', [
            'tweets' => $tweets
        ])
</x-app>