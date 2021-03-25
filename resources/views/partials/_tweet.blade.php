<div class="flex p-5 {{ $loop->last ? '' : 'border-b border-b-gray-300' }}">
    <div class="mr-2 flex-shrink-0">
        <a href="{{ route('profile', $tweet->user) }}">
            <img
                src="{{ $tweet->user->avatar }}"
                alt="avatar"
                class="rounded-full h-12 w-12 mr-2"
            />
        </a>
    </div>
    <div>
        <h5 class="font-bold mb-2">
            <a href="{{ route('profile', $tweet->user) }}">
                {{ $tweet->user->username }}
            </a>
        </h5>
        <p class="text-sm">
            {{ $tweet->body }}
        </p>
    </div>
</div>
