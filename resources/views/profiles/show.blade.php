<x-app>
    <header class="mb-6 relative">
        {{-- <img
            src="/images/"
            alt="banner"
            class="mb-2"
        /> --}}
        <div class="relative">
            <div class="bg-gradient-to-r from-blue-300 to-red-200 rounded-lg" style="height: 240px"></div>
            <img
                src="{{ $user->avatar }}"1
                alt=""
                class="rounded-full h-36 w-36 mr-2 absolute border border-gray-300 bottom-0 transform -translate-x-1/2 translate-y-1/2"
                style="left: 50%"
            />    
        </div>

        <div class="flex justify-between items-center mt-2 mb-6">
            <div>
                <h2 class="font-bold text-2xl">{{ $user->name }}</h2>
                <p class="text-gray-400">Joined {{ $user->created_at->diffForHumans() }}</p>
            </div>

            <div class="flex">
                @can('edit', $user)
                    <a href="{{ $user->path('edit') }}" class="rounded-full border border-gray-300 py-2 px-4 text-black text-xs hover:bg-gray-100">Edit Profile</a>
                @endcan
                
                <x-follow-button :user="$user"/>
            </div>
        </div>

        <p class="text-sm">
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Culpa impedit adipisci harum accusamus ea aut neque tempore atque, placeat tenetur at possimus eos nihil rem dolorum dolor iste esse non?
        </p>
    </header>

    @include('partials._timeline', [
        'tweets' => $user->tweets
    ])
</x-app>