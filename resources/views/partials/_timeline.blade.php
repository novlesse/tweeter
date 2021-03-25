@forelse($tweets as $tweet)
    <div class="border border-gray-300 rounded-lg mb-2">
        @include('partials._tweet')
    </div>

    @empty
    <div>
        <hr class="my-4" />
        <p class="text-gray-400 text-sm">There are currently has no chirps.</p>
    </div>
@endforelse