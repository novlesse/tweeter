<div class="border-2 border-gray-400 bg-white rounded-xl py-6 px-6 mb-6 hover:border-blue-400">
    <form method="POST" action="/tweets">
        @csrf
        <textarea
            name="body"
            class="w-full outline-none"
            placeholder="Type something here"
            required
        ></textarea>

        <hr class="mb-4" />
        
        <footer class="flex justify-between">
            <img
                src="{{ auth()->user()->avatar }}"
                alt="avatar"
                class="rounded-full h-12 w-12 mr-2"
            /> 
            <button
                type="submit"
                class="bg-blue-400 rounded-3xl shadow px-6 py-3 text-white shadow-sm focus:outline-none hover:bg-opacity-50"
            >
                Publish
            </button>
        </footer>
    </form>

    @error('body')
        <p class="text-red-500 text-sm mt-3">{{ $message }}</p>
    @enderror
</div>