<x-app>
        <div class="bg-gray-100 rounded-xl p-6">
            <h3 class="tracking-wide font-medium text-3xl mb-6">Explore Page</h3>
    
            @foreach ($users as $user)
            <div class="flex items-center mb-6">
                <img src="{{ $user->avatar }}"
                    alt="avatar"
                    class="w-14 h-14 rounded-full mr-4"
                    >
    
                <a href="{{ route('profile', $user) }}">
                    <h4 class="font-bold hover:text-blue-400">{{ '@' . $user->username }}</h4>
                </a>
            </div>
            @endforeach
    
            {{ $users->links('pagination::tailwind') }}
        </div>
</x-app>