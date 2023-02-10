<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>@yield('title', 'Home Page')</title>
      <script src="https://cdn.tailwindcss.com"></script>
      <link rel="icon" href="{{ asset('images/small-logo.png') }}">
      <style>
         .margin-top {
            margin-top: 0px !important;
         }
      </style>
   </head>
   <body>

      <!-- Header -->
      <header class="relative z-50 w-full flex-none text-sm font-semibold leading-6 text-slate-900">
         <nav aria-label="Global" class="mx-auto max-w-container px-4 sm:px-6 lg:px-8">
            <div class="relative flex items-center py-[2.125rem]">
               <a class="mr-auto flex-none text-slate-900" href="/">
               <img src="{{ asset('images/small-logo.png') }}" class="h-16">
               </a>
               <div class="hidden lg:flex lg:items-center">
                  <a href="/home">Home</a>
                  <a class="ml-8" href="/new-arrival">New Arrival</a>
                  <a class="ml-8" href="/about-us">About Us</a>
                  <a class="ml-8" href="/settings">Settings</a>
                  @if(auth()->user())
                  <a class="ml-8" href="/logout">Logout</a>

                  <a class="ml-8 " href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-user').submit();">
                    Logout
                  </a>

                  <form id="logout-user" class="hidden" action="{{ route('logout') }}" method="POST">
                     @csrf
                  </form>
                  @else
                  
                  <a class="ml-8" href="/login">Login</a>
                  @endif
               </div>
               <button type="button" class="-my-1 ml-8 flex h-8 w-8 items-center justify-center rounded-lg">
                  <span class="sr-only">Search components</span>
                  <svg fill="none" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 fill-gray-900 hover:fill-gray-900">
                     <path d="M20.47 21.53a.75.75 0 1 0 1.06-1.06l-1.06 1.06Zm-9.97-4.28a6.75 6.75 0 0 1-6.75-6.75h-1.5a8.25 8.25 0 0 0 8.25 8.25v-1.5ZM3.75 10.5a6.75 6.75 0 0 1 6.75-6.75v-1.5a8.25 8.25 0 0 0-8.25 8.25h1.5Zm6.75-6.75a6.75 6.75 0 0 1 6.75 6.75h1.5a8.25 8.25 0 0 0-8.25-8.25v1.5Zm11.03 16.72-5.196-5.197-1.061 1.06 5.197 5.197 1.06-1.06Zm-4.28-9.97c0 1.864-.755 3.55-1.977 4.773l1.06 1.06A8.226 8.226 0 0 0 18.75 10.5h-1.5Zm-1.977 4.773A6.727 6.727 0 0 1 10.5 17.25v1.5a8.226 8.226 0 0 0 5.834-2.416l-1.061-1.061Z"></path>
                  </svg>
               </button>
               <button type="button" class="-my-1 ml-2 flex h-8 w-8 items-center justify-center rounded-lg">
                  <span class="sr-only">Search components</span>
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                     <path stroke-linecap="round" stroke-linejoin="round" d="M20.893 13.393l-1.135-1.135a2.252 2.252 0 01-.421-.585l-1.08-2.16a.414.414 0 00-.663-.107.827.827 0 01-.812.21l-1.273-.363a.89.89 0 00-.738 1.595l.587.39c.59.395.674 1.23.172 1.732l-.2.2c-.212.212-.33.498-.33.796v.41c0 .409-.11.809-.32 1.158l-1.315 2.191a2.11 2.11 0 01-1.81 1.025 1.055 1.055 0 01-1.055-1.055v-1.172c0-.92-.56-1.747-1.414-2.089l-.655-.261a2.25 2.25 0 01-1.383-2.46l.007-.042a2.25 2.25 0 01.29-.787l.09-.15a2.25 2.25 0 012.37-1.048l1.178.236a1.125 1.125 0 001.302-.795l.208-.73a1.125 1.125 0 00-.578-1.315l-.665-.332-.091.091a2.25 2.25 0 01-1.591.659h-.18c-.249 0-.487.1-.662.274a.931.931 0 01-1.458-1.137l1.411-2.353a2.25 2.25 0 00.286-.76m11.928 9.869A9 9 0 008.965 3.525m11.928 9.868A9 9 0 118.965 3.525" />
                  </svg>
               </button>
               <button type="button" class="-my-1 ml-2 flex h-8 w-8 items-center justify-center rounded-lg">
                  <span class="sr-only">Search components</span>
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                     <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 3v11.25A2.25 2.25 0 006 16.5h2.25M3.75 3h-1.5m1.5 0h16.5m0 0h1.5m-1.5 0v11.25A2.25 2.25 0 0118 16.5h-2.25m-7.5 0h7.5m-7.5 0l-1 3m8.5-3l1 3m0 0l.5 1.5m-.5-1.5h-9.5m0 0l-.5 1.5M9 11.25v1.5M12 9v3.75m3-6v6" />
                  </svg>
               </button>
            </div>
         </nav>
      </header>