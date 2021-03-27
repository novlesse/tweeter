<div class="flex p-5 justify-between {{ $loop->last ? '' : 'border-b border-b-gray-300' }}">
    <div class="flex mr-2 flex-shrink-1">
        <a href="{{ route('profile', $tweet->user) }}">
            <img
                src="{{ $tweet->user->avatar }}"
                alt="avatar"
                class="rounded-full h-12 w-12 mr-2"
            />
        </a>
   
        <div class="ml-2">
            <h5 class="font-bold mb-2">
                <a href="{{ route('profile', $tweet->user) }}">
                    {{ $tweet->user->username }}
                </a>
            </h5>

            <p class="text-sm mb-3">
                {{ $tweet->body }}
            </p> 

            <x-like-dislike :tweet="$tweet"/>
        </div>
    </div>
    <p class="text-sm text-gray-400 flex-shrink-0">
        {{ $tweet->created_at->diffForHumans() }}
    </p>
</div>
