@extends('layouts.app')

@section('content')
    <div class="container mx-auto">
        <div class="flex flex-wrap justify-center">
            <div class="w-full max-w-sm">
                <div class="flex flex-col break-words rounded border border-2 bg-white shadow-md">

                    <div class="text-black-700 mb-0 bg-gray-200 py-3 px-6 font-semibold">
                        {{ __('Login') }}
                    </div>

                    <form class="w-full p-6" method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="mb-6 flex flex-wrap">
                            <label for="email" class="text-black-700 mb-2 block text-sm font-bold">
                                {{ __('E-Mail Address') }}:
                            </label>

                            <input id="email" type="email"
                                class="@error('email') border-red-500 @enderror form-input w-full" name="email"
                                value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                                <p class="mt-4 text-xs italic text-red-500">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>

                        <div class="mb-6 flex flex-wrap">
                            <label for="password" class="text-black-700 mb-2 block text-sm font-bold">
                                {{ __('Password') }}:
                            </label>

                            <input id="password" type="password"
                                class="@error('password') border-red-500 @enderror form-input w-full" name="password"
                                required>

                            @error('password')
                                <p class="mt-4 text-xs italic text-red-500">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>

                        <div class="mb-6 flex">
                            <label class="text-black-700 inline-flex items-center text-sm" for="remember">
                                <input type="checkbox" name="remember" id="remember" class="form-checkbox"
                                    {{ old('remember') ? 'checked' : '' }}>
                                <span class="ml-2">{{ __('Remember Me') }}</span>
                            </label>
                        </div>

                        <div class="flex flex-wrap items-center">
                            <button type="submit"
                                class="hover:bg-grey-700 text-black-100 focus:shadow-outline rounded bg-gray-200 py-2 px-4 font-bold focus:outline-none">
                                {{ __('Login') }}
                            </button>

                            @if (Route::has('register'))
                                <p class="text-black-700 mt-8 -mb-4 w-full text-center text-xs">
                                    {{ __("Don't have an account?") }}
                                    <a class="text-blue-500 no-underline hover:text-blue-700"
                                        href="{{ route('register') }}">
                                        {{ __('Register') }}
                                    </a>
                                </p>
                            @endif
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection
