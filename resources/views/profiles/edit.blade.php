<x-app>
    <h1 class="tracking-wide font-medium text-3xl mb-6">Edit Profile</h1>
    <form method="POST" action="{{ $user->path() }}" enctype="multipart/form-data">
        @csrf
        @method('PATCH')

        <div class="mb-6">
            <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="name">
                Name
            </label>

            <input class="form-input mt-1 block w-full rounded py-2 px-4 border text-gray-600"
                type="text"
                name="name"
                id="name"
                value={{ $user->name }}
                required
                >

            @error('name')
                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="username">
                Username
            </label>

            <input class="form-input mt-1 block w-full rounded py-2 px-4 border text-gray-600"
                type="text"
                name="username"
                id="username"
                value={{ $user->username }}
                required
                >

            @error('username')
                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="avatar">
                Avatar
            </label>
            
            <div class="flex items-center">
                <input class="form-input mt-1 block w-full rounded py-2 px-4 border text-gray-600"
                    type="file"
                    name="avatar"
                    id="avatar"
                    required
                    >

                    <img src="{{ $user->avatar }}"
                         alt="avatar"
                         class="rounded-full border h-12 w-12 ml-4"
                    >
            </div>

            {{-- <div class="flex justify-center mt-6">
                <img src="{{ $user->avatar }}"
                         alt="avatar"
                         class="rounded-full h-10 w-10"
                    >
            </div> --}}

            @error('avatar')
                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror            
        </div>

        <div class="mb-6">
            <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="email">
                Email
            </label>

            <input class="form-input mt-1 block w-full rounded py-2 px-4 border text-gray-600"
                type="email"
                name="email"
                id="email"
                value={{ $user->email }}
                required
                >

            @error('email')
                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="password">
                Password
            </label>

            <input class="form-input mt-1 block w-full rounded py-2 px-4 border text-gray-600"
                type="password"
                name="password"
                id="password"
                required
                >

            @error('password')
                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="password_confirmation">
                Password Confirmation
            </label>

            <input class="form-input mt-1 block w-full rounded py-2 px-4 border text-gray-600"
                type="password"
                name="password_confirmation"
                id="password_confirmation"
                required
                >

            @error('password_confirmation')
                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror
        </div>

        <div class="flex flex-row-reverse mb-6">
            <button type="submit"
                class="bg-blue-300 text-white rounded py-2 px-4 hover:bg-blue-200"
                >
                Submit
            </button>
        </div>
    </form>
</x-app>