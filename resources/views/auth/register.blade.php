<x-app>
    <div class="mx-96 bg-gray-50 rounded-lg border">
        <h1 class="bg-gray-100 tracking-wide font-medium text-3xl text-gray-500 py-4 px-6 border-b">{{ __('Register') }}</h1>
        <form method="POST" action="{{ route('register') }}" class="p-10">
            @csrf
            <div class="block">
                <label for="name" class="text-gray-500 text-sm">{{ __('Name') }}</label>
                <div class="mb-4 mt-1">
                    <input id="name" type="text" class="form-input mt-1 block w-full rounded py-2 px-4 border @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="block">
                <label for="email" class="text-gray-500 text-sm">{{ __('E-Mail Address') }}</label>
                <div class="mb-4 mt-1">
                    <input id="email" type="email" class="form-input mt-1 block w-full rounded py-2 px-4 border @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="block">
                <label for="password" class="text-gray-500 text-sm">{{ __('Password') }}</label>
                <div class="mb-4 mt-1">
                    <input id="password" type="password" class="form-input mt-1 block w-full rounded py-2 px-4 border @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="block">
                <label for="password-confirm" class="text-gray-500 text-sm">{{ __('Confirm Password') }}</label>
                <div class="mb-4 mt-1">
                    <input id="password-confirm" type="password" class="form-input mt-1 block w-full rounded py-2 px-4 border" name="password_confirmation" required autocomplete="new-password">
                </div>
            </div>

            <hr class="my-6"/>

            <div class="flex flex-row-reverse">
                <button type="submit" class="rounded-md bg-blue-400 text-white py-2 px-4 mr-2 hover:bg-blue-300">
                    {{ __('Submit') }}
                </button>
            </div>
        </form>
    </div>
</x-app>

