<h3 class="font-bold text-xl mb-4 p-2">Following</h3>

<ul class="px-2">
    @forelse (auth()->user()->follows as $user)    
    <li class="my-3">
        <div>
            <a href="{{ route('profile', $user) }}" class="flex items-center text-sm">
                <img
                    src="{{ $user->avatar }}"
                    alt=""
                    class="rounded-full mr-2"
                    width="40"
                    height="40"
                />
                {{ $user->name }}
            </a>
        </div>
    </li>
    @empty
        <li>Not following anyone.</li>
    @endforelse
</ul>