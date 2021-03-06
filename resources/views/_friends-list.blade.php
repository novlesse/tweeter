<div class="bg-blue-50 rounded-xl p-6">
    <h3 class="font-bold text-xl mb-4">Following</h3>
    
    <ul class="text-center">
        @forelse (current_user()->follows as $user)    
        <li class="my-3">
            <div>
                <a href="{{ route('profile', $user) }}" class="flex items-center text-sm">
                    <img
                        src="{{ $user->avatar }}"
                        alt="avatar"
                        class="rounded-full h-12 w-12 mr-2"
                    />
                    {{ $user->username }}
                </a>
            </div>
        </li>
        
        @empty
        <li>Not following anyone.</li>
        @endforelse
    </ul>
</div>