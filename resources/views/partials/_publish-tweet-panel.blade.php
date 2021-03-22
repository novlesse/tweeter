<div class="border border-blue-400 rounded-lg py-6 px-8 mb-8">
    <form method="POST" action="/tweets">
        @csrf
        <textarea
            name="body"
            class="w-full outline-none"
            placeholder="Hello world."
        ></textarea>

        <hr class="my-4" />

        <footer class="flex justify-between">
            <img
                src="{{ auth()->user()->avatar }}"
                alt="avatar"
                class="rounded-full mr-2"
                width="50"
                height="50"
            /> 
            <button
                type="submit"
                class="bg-blue-400 rounded-lg shadow p-2 text-white"
            >
                Tweeter
            </button>
        </footer>
    </form>

    @error('body')
        <p class="text-red-500 text-sm mt-3">{{ $message }}</p>
    @enderror
</div>