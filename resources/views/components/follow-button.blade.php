<form method="POST" action="/profiles/{{ $user->name }}/follow">
    @csrf
    
    <button 
        type="submit" 
        class="bg-blue-400 rounded-full shadow py-2 px-4 text-white text-xs ml-2 hover:bg-blue-300">
        {{ auth()->user()->following($user) ? 'Unfollow' : 'Follow' }}
    </button>
</form>