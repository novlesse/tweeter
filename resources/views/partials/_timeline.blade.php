<div class="rounded-lg bg-white mb-4">
    @forelse($tweets as $tweet)
        @include('partials._tweet')

    @empty
    <div>
        <p class="text-gray-400 text-sm">There are currently has no chirps.</p>
    </div>
    @endforelse
</div>
