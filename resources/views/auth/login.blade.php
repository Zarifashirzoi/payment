@extends('layouts.shared.app')
@section('title')
   Login
@endsection
@section('content')
    <div class="bg-gray-900">
        <div class="max-w-7xl mx-auto divide-y divide-slate-200 px-4 sm:px-6 md:px-8 dark:divide-slate-700">
            <div class="mx-auto max-w-7xl px-4 mb-48 pb-32">
                <div class="mx-auto max-w-2xl lg:max-w-none">
                    <div class="mt-6 space-y-12 text-white lg:grid lg:grid-cols-2 lg:gap-x-6 lg:space-y-0">
                        <div class="group relative">
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="my-8">
                                    <span>Account</span>
                                    <span class="mx-2">------------</span>
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="inline w-6 h-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                    </span>
                                    <span>Shipping</span>
                                    <span class="mx-2">------------</span>
                                    <span class="inline">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="inline w-6 h-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                    </span>
                                    <span>Payment</span>
                                </div>
                                
                                <h2 class="mb-4">Account Details</h2>
                                <!-- Email input -->
                                <div class="mb-6">
                                    <label>Email Address</label>
                                    <input
                                    type="email"
                                    class="form-control block w-full px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                    id="exampleFormControlInput2"
                                    placeholder="Email address"
                                    @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus
                                    />
                                    @error('email')
                                        <span role="alert">
                                            <strong class="text-red-600">{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                        
                                <!-- Password input -->
                                <div class="mb-6">
                                    <label>Password</label>
                                    <input
                                    type="password"
                                    class="form-control block w-full px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                    id="exampleFormControlInput2"
                                    placeholder="Password"
                                    @error('password') is-invalid @enderror" name="password" required autocomplete="current-password"
                                    />

                                    @error('password')
                                        <span role="alert">
                                            <strong class="text-red-600">{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                        
                                <div class="flex justify-between items-center mb-6">
                                    <div class="form-group form-check">
                                        <label class="form-check-label rounded-full bg-white p-2 inline-block text-gray-800" for="exampleCheck2">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-16 h-16 rounded-full">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 4.875c0-.621.504-1.125 1.125-1.125h4.5c.621 0 1.125.504 1.125 1.125v4.5c0 .621-.504 1.125-1.125 1.125h-4.5A1.125 1.125 0 013.75 9.375v-4.5zM3.75 14.625c0-.621.504-1.125 1.125-1.125h4.5c.621 0 1.125.504 1.125 1.125v4.5c0 .621-.504 1.125-1.125 1.125h-4.5a1.125 1.125 0 01-1.125-1.125v-4.5zM13.5 4.875c0-.621.504-1.125 1.125-1.125h4.5c.621 0 1.125.504 1.125 1.125v4.5c0 .621-.504 1.125-1.125 1.125h-4.5A1.125 1.125 0 0113.5 9.375v-4.5z" />
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 6.75h.75v.75h-.75v-.75zM6.75 16.5h.75v.75h-.75v-.75zM16.5 6.75h.75v.75h-.75v-.75zM13.5 13.5h.75v.75h-.75v-.75zM13.5 19.5h.75v.75h-.75v-.75zM19.5 13.5h.75v.75h-.75v-.75zM19.5 19.5h.75v.75h-.75v-.75zM16.5 16.5h.75v.75h-.75v-.75z" />
                                            </svg>
                                        </label>
                                    </div>
                                    <p class="text-sm font-semibold pt-1 mb-0">
                                        <a href="{{ url('register') }}" class=" hover:text-red-700 focus:text-red-700 transition duration-200 ease-in-out">
                                            Register for Account
                                        </a>
                                    </p>
                                    <button
                                        type="submit"
                                        class="inline-block px-7 py-3  bg-white text-black font-medium text-sm leading-snug uppercase rounded shadow-md hover:bg-white-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out"
                                    >
                                        Login
                                    </button>
                                </div>
                            </form>
                        </div>
                        <div class="group relative">
                        
                        </div>
                    </div>
                </div>
            </div>
            <hr>
        </div>
    </div>
@endsection
           
    