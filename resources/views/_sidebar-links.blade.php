<ul class="fixed">
    <li class="hover:text-blue-400">
        <a
            class="font-medium text-lg mb-4 block"
            href="{{ route('home') }}"
        >Home</a>
    </li>
    <li class="hover:text-blue-400">
        <a
            class="font-medium text-lg mb-4 block"
            href="/explore"
        >Explore</a>
    </li>

    <li class="hover:text-blue-400">
        <a
            class="font-medium text-lg mb-4 block"
            href="{{ route('profile', auth()->user()) }}"
        >Profile</a>
    </li>
</ul>