<x-app>
    <div class="mx-96 bg-gray-50 rounded-xl border">
        <h1 class="bg-gray-100 tracking-wide font-medium text-3xl text-gray-500 py-4 px-6 border-b">{{ __('Login') }}</h1>
        <form method="POST" action="{{ route('login') }}" class="p-10">
            @csrf
            <div class="block">
                <label for="email" class="text-gray-500 text-sm">{{ __('E-Mail Address') }}</label>
                <div class="mb-4 mt-1">
                    <input id="email" type="email" class="form-input mt-1 block w-full rounded py-2 px-4 border @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
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
                    <input id="password" type="password" class="form-input mt-1 block w-full rounded py-2 px-4 border @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="flex items-center">
                <input class="form-checkbox" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                <label class="text-gray-500 text-sm ml-2" for="remember">
                    {{ __('Remember Me') }}
                </label>
            </div>

            <hr class="my-6"/>

            <div class="flex flex-row-reverse items-center">
                <button type="submit" class="bg-blue-400 rounded-3xl shadow px-6 py-3 text-white shadow-sm ml-4 focus:outline-none hover:bg-opacity-50">
                    {{ __('Login') }}
                </button>
                @if (Route::has('password.request'))
                    <a class="text-gray-500 hover:text-red-400" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                @endif
            </div>
        </form>
    </div>
</x-app>
