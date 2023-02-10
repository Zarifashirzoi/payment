@extends('layouts.shared.app')
@section('content')
   <!-- Banner -->
   @if($banner)
   <div class="mx-auto max-w-7xl px-4">
      <div class="mx-auto max-w-2xl lg:max-w-none">
         <div class="flex flex-col lg:flex-row items-center justify-between landing space-y-8 lg:space-y-0 text-center lg:text-left">
            <div class="space-y-8 max-w-2xl xl:max-w-2xl">
               <p class="text-base text-3xl font-semibold text-gray-800 pt-4">
                  @php 
                     $bannerName = explode('digital', $banner->name);
                  @endphp
                  {{ $bannerName[0] }} digital
                  <br>
                  {{ $bannerName[1] }}
               </p>
               <p class="pt-4 text-sm text-gray-600">
                  {{ $banner->description}}
               </p>
               <div class="py-8">
                  <span class="py-4 px-8 border border-indigo-800 rounded cursor-pointer">View More</span>
               </div>
            </div>
            <div class="group relative">
               <div class="float-right">
                  <img src="{{ asset($banner->image) }}" class="h-64" alt="Wood  with porcelain mug, leather journal, brass pen, leather key ring, and a houseplant." class="h-full w-full object-cover object-center">
               </div>
            </div>
         </div>
      </div>
   </div>
   @endif

   <!-- Product List -->
   <div class="bg-gray-900">
      <div class="mx-auto max-w-7xl py-12 px-6 lg:px-8 lg:py-24">
         <div class="space-y-12">
            <ul class="space-y-4 sm:grid sm:grid-cols-2 sm:gap-6 sm:space-y-0 lg:grid-cols-4 lg:gap-8">
               @foreach($products as $product)
               <li class="rounded-lg bg-white pb-10 text-center xl:text-left">
                  <div class="space-y-6 xl:space-y-10">
                     <img class="" src="{{ $product->image }}" alt="{{ $product->name }}">
                     <div class="space-y-2 xl:flex xl:items-center xl:justify-between px-2 margin-top">
                        <div class="space-y-1 text-lg font-medium leading-6">
                           <a href="{{ url('product-payment/'.$product->id) }}">
                              <h3 class="text-gray-800">{{ $product->name }}</h3>
                           </a>
                        </div>

                        <div class="flex text-gray-800 text-lx justify-center space-x-5">
                           {{ $product->price }}$
                        </div>
                     </div>
                     <p class="px-2 pt-3 text-left text-gray-800 margin-top">
                        {{ substr_replace($product->description, "", 150) }}
                     </p>
                     <div class="space-y-2 xl:flex xl:items-center xl:justify-between px-2">
                        <div class="space-y-1 text-lg font-medium leading-6">
                           <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-gray-800">
                              <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                           </svg>

                        </div>

                        <div class="flex text-gray-800 text-lx justify-center space-x-5 margin-top">
                           @for($i = 1; $i <= $product->ranking; $i++)
                           <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                              <path fill-rule="evenodd" d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z" clip-rule="evenodd" />
                           </svg>
                           @endfor
                           @for($i = 1; $i < (6-$product->ranking); $i++)
                           <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                              <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z" />
                           </svg>
                           @endfor
                        </div>
                     </div>
                  </div>
                  
               </li>
               @endforeach
              
            </ul>
         </div>
      </div>
   </div>
 
   <!-- About Yaganchiz -->
   @if($about)
   <div class="mx-auto max-w-7xl px-4">
      <div class="mx-auto max-w-2xl lg:max-w-none">
         <div class="flex flex-col lg:flex-row items-center justify-between landing space-y-8 lg:space-y-0 text-center lg:text-left">
            <div class="space-y-8 max-w-2xl xl:max-w-2xl">
               <p class="text-base text-3xl font-semibold text-gray-800 pt-4">
                  {{ $about->name }}
               </p>
               <p class="pt-4 text-sm text-gray-600">
                  {{ $about->description }}
               </p>
            </div>
            <div class="group relative">
               <div class="float-right">
               <img src="{{ asset($about->image) }}" class="h-64" alt="Wood  with porcelain mug, leather journal, brass pen, leather key ring, and a houseplant." class="h-full w-full object-cover object-center">
               </div>
            </div>
         </div>
      </div>
   </div>
   @endif
 
   <!-- Testimonials -->
   <div class="bg-gray-900 pt-4">
      <div class="">
      <h1 class="text-4xl text-white text-center">Testimonials</h1>
      <div class="mx-auto max-w-7xl py-12 px-6 lg:px-8 lg:py-24 mx:2 ">
         <div class="space-y-12">
            <ul class="space-y-4 sm:grid sm:grid-cols-2 sm:gap-6 sm:space-y-0 lg:grid-cols-2 lg:gap-8">
               @foreach($testimonials as $testimonial)
               <li class="rounded-lg bg-white pb-10 text-left xl:text-left mx-2 lg:mx-16">
                  <div class="space-y-6 xl:space-y-10">
                     <div class="mt-6 flex items-center px-2">
                        <div class="flex-shrink-0">
                        <a href="#">
                           <span class="sr-only">{{ $testimonial->user->name }}</span>
                           <img class="h-10 w-10 rounded-full" src="{{ $testimonial->user->image }}" alt="">
                        </a>
                        </div>
                        <div class="ml-3">
                        <p class="text-sm font-medium text-gray-900">
                           <a href="#" class="hover:underline">{{ $testimonial->user->name }}</a>
                        </p>
                        <div class="flex space-x-1 text-sm text-gray-500">
                           <time datetime="2020-02-12">{{ $testimonial->created_at->format("F d, Y") }}</time>
                        </div>
                        </div>
                     </div>
                     <div class="px-2">
                        <q class="text-base text-3xl font-semibold text-gray-800 pt-4">Highly Recommented</q>
                        <p class="pt-4 text-md text-gray-700">
                          {{ $testimonial->description }}
                        </p>
                        <p class="mt-4 text-gray-700">
                           <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 inline ">
                              <path fill-rule="evenodd" d="M11.47 4.72a.75.75 0 011.06 0l7.5 7.5a.75.75 0 11-1.06 1.06L12 6.31l-6.97 6.97a.75.75 0 01-1.06-1.06l7.5-7.5zm.53 7.59l-6.97 6.97a.75.75 0 01-1.06-1.06l7.5-7.5a.75.75 0 011.06 0l7.5 7.5a.75.75 0 11-1.06 1.06L12 12.31z" clip-rule="evenodd" />
                           </svg>
                           <span class="mr-4 text-sm">{{ $testimonial->comments}}</span>

                           <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 inline">
                           <path fill-rule="evenodd" d="M4.125 3C3.089 3 2.25 3.84 2.25 4.875V18a3 3 0 003 3h15a3 3 0 01-3-3V4.875C17.25 3.839 16.41 3 15.375 3H4.125zM12 9.75a.75.75 0 000 1.5h1.5a.75.75 0 000-1.5H12zm-.75-2.25a.75.75 0 01.75-.75h1.5a.75.75 0 010 1.5H12a.75.75 0 01-.75-.75zM6 12.75a.75.75 0 000 1.5h7.5a.75.75 0 000-1.5H6zm-.75 3.75a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5H6a.75.75 0 01-.75-.75zM6 6.75a.75.75 0 00-.75.75v3c0 .414.336.75.75.75h3a.75.75 0 00.75-.75v-3A.75.75 0 009 6.75H6z" clip-rule="evenodd" />
                           <path d="M18.75 6.75h1.875c.621 0 1.125.504 1.125 1.125V18a1.5 1.5 0 01-3 0V6.75z" />
                           </svg>
                        </p>
                     </div>
                  </div>
               </li>
               @endforeach
            </ul>
         </div>
      </div>
      <hr>
      </div>
   </div>
@endsection