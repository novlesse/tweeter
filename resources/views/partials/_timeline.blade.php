<div class="rounded-xl bg-gray-50 p-2">
    @forelse($tweets as $tweet)
        @include('partials._tweet')

    @empty
    <div class="flex items-center h-10 p-4">
        <p class="text-gray-400 text-sm">There are currently has no chirps.</p>
    </div>
    @endforelse

    <div class="px-6">
        {{ $tweets->links('pagination::tailwind') }}
    </div>
</div>
