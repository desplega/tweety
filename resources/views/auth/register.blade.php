<x-master>
    <div class="container mx-auto flex justify-center">
        <div class="px-12 py-8 bg-gray-200 border border-gray-300 rounded-lg">
            <div class="col-md-8">

                <div class="font-bold text-lg mb-4">{{ __('Register') }}</div>

                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="mb-6">
                        <label for="username"
                            class="block mb-2 uppercase font-bold text-xs text-gray-700">{{ __('Username') }}</label>

                        <input id="username" type="text" class="border border-gray-400 p-2 w-full" name="username"
                            value="{{ old('username') }}" required autocomplete="username" autofocus>

                        @error('username')
                            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-6">
                        <label for="name"
                            class="block mb-2 uppercase font-bold text-xs text-gray-700">{{ __('Name') }}</label>

                        <input id="name" type="text" class="border border-gray-400 p-2 w-full" name="name"
                            value="{{ old('name') }}" required autocomplete="name" autofocus>

                        @error('name')
                            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-6">
                        <label for="email"
                            class="block mb-2 uppercase font-bold text-xs text-gray-700">{{ __('EMail') }}</label>

                        <input id="email" type="email" class="border border-gray-400 p-2 w-full" name="email"
                            value="{{ old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-6">
                        <label for="password"
                            class="block mb-2 uppercase font-bold text-xs text-gray-700">{{ __('Password') }}</label>

                        <input id="password" type="password" class="border border-gray-400 p-2 w-full" name="password"
                            value="{{ old('password') }}" required autocomplete="password" autofocus>

                        @error('password')
                            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-6">
                        <label for="password-confirm"
                            class="block mb-2 uppercase font-bold text-xs text-gray-700">{{ __('Confirm password') }}</label>

                        <input id="password-confirm" type="password" class="border border-gray-400 p-2 w-full"
                            name="password-confirm" value="{{ old('password-confirm') }}" required
                            autocomplete="password-confirm" autofocus>

                        @error('password-confirm')
                            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <button type="submit" class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500 mr-2">
                            {{ __('Register') }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-master>
