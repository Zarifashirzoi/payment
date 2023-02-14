@extends('layouts.shared.app')
@section('title')
   New Payment
@endsection
@section('content')
   <div class="relative px-6 lg:px-8 bg-white text-black py-8">
      @if ($message = Session::get('success'))
      <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" role="alert">
         <span class="font-medium">Success message!</span> {{ $message }}
      </div>
      @endif
      <div class="mx-auto max-w-7xl px-4">
         <div class="mx-auto max-w-2xl lg:max-w-none">
            <div class="mt-6 space-y-12 lg:grid lg:grid-cols-2 lg:gap-x-6 lg:space-y-0">
               <div class="group relative">
                  <form method="post" action="{{ url('order/store') }}">
                     @csrf
                     <div class="my-8">
                        <span class="text-xl">Enter Your Payment Details
                        </span>
                     </div>
                     
                     <!-- Name of Card input -->
                     <div class="mb-6 pt-3">
                        <label>Name on Card</label>
                     <input
                        type="text"
                        name="name_on_card"
                        class="form-control bg-indigo-900 text-white block w-full px-4 py-2 text-xl font-normal bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:bg-indigo-900 text-white focus:border-blue-600 focus:outline-none"
                        placeholder="Name on Card"
                     />
                     <input type="hidden" name="product_id" value="{{ $product->id }}">
                        @if($errors->has('name_on_card'))
                           <div class="text-red-500">{{ $errors->first('name_on_card') }}</div>
                        @endif
                     </div>
         
                     <!-- Card Number input -->
                     <div class="mb-6">
                        <label>Card Number</label>
                        <input
                           type="text"
                           name="card_number"
                           class="form-control block w-full px-4 py-2 text-xl font-normal text-white bg-indigo-900 text-white text-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:bg-indigo-900 focus:border-blue-600 focus:outline-none"
                           placeholder="Card Number"
                        />
                        @if($errors->has('card_number'))
                           <div class="text-red-500">{{ $errors->first('card_number') }}</div>
                        @endif
                     </div>
         
                     <div class="flex justify-between items-center">
                        <!-- Exp Date -->
                        <div class="mb-6">
                           <label>Exp Date</label>
                           <input
                              type="date"
                              name="exp_date"
                              class="form-control bg-indigo-900 text-white block w-full px-4 py-2 text-xl font-normal bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:bg-indigo-900 text-white focus:border-blue-600 focus:outline-none"
                              placeholder="Exp Date"
                           />
                           @if($errors->has('exp_date'))
                              <div class="text-red-500">{{ $errors->first('exp_date') }}</div>
                           @endif
                        </div>
            
                        <!-- CVV -->
                        <div class="mb-6">
                           <label>CVV</label>
                           <input
                              type="text"
                              name="cvv"
                              class="form-control block w-full px-4 py-2 text-xl font-normal text-white bg-indigo-900 text-white text-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:bg-indigo-900 focus:border-blue-600 focus:outline-none"
                              placeholder="CVV"
                           />
                           @if($errors->has('cvv'))
                              <div class="text-red-500">{{ $errors->first('cvv') }}</div>
                           @endif
                        </div>
                     </div>
                     
            
                     <!-- Street Address -->
                     <div class="mb-6">
                        <label>Street Address</label>
                        <input
                           type="text"
                           name="street_address"
                           class="form-control block w-full px-4 py-2 text-xl font-normal text-white bg-indigo-900 text-white text-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:bg-indigo-900 focus:border-blue-600 focus:outline-none"
                           placeholder="Street Address"
                        />
                        @if($errors->has('street_address'))
                           <div class="text-red-500">{{ $errors->first('street_address') }}</div>
                        @endif
                     </div>

                     <!-- Apt, Unit,suite, etc. (Optional) -->
                     <div class="mb-6">
                        <label>Apt, Unit, Suit</label>
                        <input
                           name="unit"
                           type="text"
                           class="form-control block w-full px-4 py-2 text-xl font-normal text-white bg-indigo-900 text-white text-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:bg-indigo-900 focus:border-blue-600 focus:outline-none"
                           placeholder="Apt, Unit,suite, etc. (Optional)"
                        />
                        @if($errors->has('unit'))
                           <div class="text-red-500">{{ $errors->first('unit') }}</div>
                        @endif
                     </div>

                     <div class="mb-6">
                        <label>Country</label>
                        <select
                              name="country_id"
                              class="form-control block w-full px-4 py-2 text-xl font-normal text-white bg-indigo-900 text-white text-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:bg-indigo-900 focus:border-blue-600 focus:outline-none"
                           >
                           
                           <option value="">Select Country</option>
                           @foreach ($countries as $country)
                           <option value="{{ $country->id }}">{{ $country->name }}</option>
                           @endforeach
                           
                        </select>
                        @if($errors->has('firstname'))
                           <div class="text-red-500">{{ $errors->first('firstname') }}</div>
                        @endif
                     </div>
         
                     <div class="flex justify-between items-center mb-6">
                        <!-- City -->
                        <div class="mb-6">
                           <label>City</label>
                           <input
                              type="text"
                              name="city"
                              class="form-control bg-indigo-900 text-white block w-full px-4 py-2 text-xl font-normal bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:bg-indigo-900 text-white focus:border-blue-600 focus:outline-none"
                              placeholder="City"
                           />
                           @if($errors->has('city'))
                              <div class="text-red-500">{{ $errors->first('city') }}</div>
                           @endif
                        </div>
            
                        <!-- State -->
                        <div class="mb-6">
                           <label>State</label>
                           <input
                              type="text"
                              name="state"
                              class="form-control block w-full px-4 py-2 text-xl font-normal text-white bg-indigo-900 text-white text-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:bg-indigo-900 focus:border-blue-600 focus:outline-none"
                              placeholder="State"
                           />
                           @if($errors->has('state'))
                              <div class="text-red-500">{{ $errors->first('state') }}</div>
                           @endif
                        </div>
                        <!-- Zip Code -->
                        <div class="mb-6">
                           <label>Zip Code</label>
                           <input
                              type="text"
                              name="zip_code"
                              class="form-control block w-full px-4 py-2 text-xl font-normal text-white bg-indigo-900 text-white text-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:bg-indigo-900 focus:border-blue-600 focus:outline-none"
                              placeholder="Zip Code"
                           />
                           @if($errors->has('zip_code'))
                              <div class="text-red-500">{{ $errors->first('zip_code') }}</div>
                           @endif
                        </div>
                     </div>

                     <div class="mb-6">
                        <input
                        type="checkbox"
                        name="save_card"
                        class="rounded border-gray-dark w-4 h-4 bg-indigo-900 text-white shadow-sm focus:border-blue-dark focus:ring focus:ring-blue-dark focus:ring-opacity-50"
                        />
                        <label class="ml-4">Save this Card</label>
                     </div>
                     <div class="flex justify-between items-center ">
                        <!-- Exp Date -->
                        <div class="">
                           <label>Total Price</label>
                        </div>
            
                        <!-- CVV -->
                        <div class="">
                           <label>{{ $product->price }}$</label>
                        </div>
                     </div>
                     <!-- Card Number input -->
                     <div class="mb-6">
                        <button
                        type="submit"
                        class="inline-block px-7 w-full py-3  bg-indigo-900 text-white font-medium text-sm leading-snug uppercase rounded shadow-md hover:bg-indigo-900 hover:shadow-lg focus:bg-indigo-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out"
                     >
                        Complete Your Order
                     </button>
                     </div>
                     
                  </form>
               </div>
               <div class="group relative">
                  <div class="bg-gray-900 mt-32">
                     <div class="mx-auto max-w-7xl py-12 px-6 lg:px-8">
                        <div class="space-y-12">
                           <ul class="space-y-4 sm:grid sm:grid-cols-2 sm:gap-6 sm:space-y-0 lg:grid-cols-1 lg:gap-8">
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
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
@endsection
           
    