@include('layouts.app')


<div class="flex flex-col justify-center items-center h-screen bg-gray-100">
    <div class="w-full max-w-md bg-white shadow-md rounded-md p-8">
        <h2 class="text-3xl mb-4 font-bold text-gray-800">{{ __('Login') }}</h2>
        
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="mb-4">
                <label for="email" class="block text-gray-700 font-bold mb-2">{{ __('Email') }}</label>
                <input id="email" type="email" class="form-input w-full @error('email') border-red-500 @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                @error('email')
                <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-4">
                <label for="password" class="block text-gray-700 font-bold mb-2">{{ __('Password') }}</label>
                <input id="password" type="password" class="form-input w-full @error('password') border-red-500 @enderror" name="password" required autocomplete="current-password">
                @error('password')
                <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-4">
                <div class="flex items-center">
                    <input class="form-checkbox" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                    <label class="text-gray-700 ml-2" for="remember">
                        {{ __('Remember Me') }}
                    </label>
                </div>
            </div>

            <div>
                <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600">
                    {{ __('Login') }}
                </button>

                @if (Route::has('password.request'))
                <a class="ml-2 text-sm text-blue-500 hover:text-blue-700" href="{{ route('password.request') }}">
                    {{ __('Forgot Your Password?') }}
                </a>
                @endif
            </div>
        </form>
    </div>
</div>

