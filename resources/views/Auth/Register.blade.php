@include('layouts.app')


<div class="flex flex-col justify-center items-center h-screen bg-gray-100">
    <div class="w-full max-w-md bg-white shadow-md rounded-md p-8">
        <h2 class="text-3xl mb-4 font-bold text-gray-800">{{ __('Register') }}</h2>
       
       
       
        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="mb-4">
                <label for="name" class="block text-gray-700 font-bold mb-2">{{ __('Name') }}</label>
                <input id="name" type="text" class="form-input w-full @error('name') border-red-500 @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                @error('name')
                <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-4">
                <label for="email" class="block text-gray-700 font-bold mb-2">{{ __('Email') }}</label>
                <input id="email" type="email" class="form-input w-full @error('email') border-red-500 @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                @error('email')
                <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-4">
                <label for="password" class="block text-gray-700 font-bold mb-2">{{ __('Password') }}</label>
                <input id="password" type="password" class="form-input w-full @error('password') border-red-500 @enderror" name="password" required autocomplete="new-password">
                @error('password')
                <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-4">
                <label for="password-confirm" class="block text-gray-700 font-bold mb-2">{{ __('Confirm Password') }}</label>
                <input id="password-confirm" type="password" class="form-input w-full" name="password_confirmation" required autocomplete="new-password">
            </div>

            <div>
                <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600">
                    {{ __('Register') }}
                </button>
            </div>
        </form>
    </div>
</div>

