<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

include 'components/wishlist_cart.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>home</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
   
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
   <script src="https://cdn.tailwindcss.com"></script>

</head>
<body style="background:white">
   
<?php include 'components/user_header.php'; ?>

<div class="isolate bg-white">
         <div class="absolute inset-x-0 top-[-10rem] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[-20rem]">
            <svg class="relative left-[calc(50%-11rem)] -z-10 h-[21.1875rem] max-w-none -translate-x-1/2 rotate-[30deg] sm:left-[calc(50%-30rem)] sm:h-[42.375rem]" viewBox="0 0 1155 678" fill="none" xmlns="http://www.w3.org/2000/svg">
               <path fill="url(#45de2b6b-92d5-4d68-a6a0-9b9b2abad533)" fill-opacity=".3" d="M317.219 518.975L203.852 678 0 438.341l317.219 80.634 204.172-286.402c1.307 132.337 45.083 346.658 209.733 145.248C936.936 126.058 882.053-94.234 1031.02 41.331c119.18 108.451 130.68 295.337 121.53 375.223L855 299l21.173 362.054-558.954-142.079z" />
               <defs>
                  <linearGradient id="45de2b6b-92d5-4d68-a6a0-9b9b2abad533" x1="1155.49" x2="-78.208" y1=".177" y2="474.645" gradientUnits="userSpaceOnUse">
                     <stop stop-color="#9089FC"></stop>
                     <stop offset="1" stop-color="#FF80B5"></stop>
                  </linearGradient>
               </defs>
            </svg>
         </div>
         <main>
            <div class="">
               <div class="mx-auto max-w-7xl px-4">
                  <div class="mx-auto max-w-2xl lg:max-w-none">
                     <div class="mt-6 space-y-12 lg:grid lg:grid-cols-2 lg:gap-x-6 lg:space-y-0">
                        <div class="group relative">
                           <p class="text-base text-3xl font-semibold text-indigo-900 pt-4">
                              Buy any digital
                              <br>
                              accessory or books
                           </p>
                           <p class="pt-4 text-sm text-indigo-600">
                              Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde illum mollitia inventore voluptas eos magnam maiores sunt rem fugiat odio commodi facere tenetur pariatur, repudiandae, minima animi consequatur perspiciatis atque suscipit? Doloremque quisquam perspiciatis est. Suscipit dicta cumque earum sequi.
                           </p>
                           <div class="py-8">
                              <span class="py-4 px-8 border border-indigo-800 rounded cursor-pointer">View More</span>
                           </div>
                        </div>
                        <div class="group relative">
                           <div class="float-right">
                              <img src="computer.png" class="h-64" alt="Wood  with porcelain mug, leather journal, brass pen, leather key ring, and a houseplant." class="h-full w-full object-cover object-center">
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="relative px-6 lg:px-8 bg-indigo-900 text-white py-8" style="background:#1D3557;">
               <div class="mx-auto max-w-7xl px-4">
                  <div class="mx-auto max-w-2xl lg:max-w-none">
                     <div class="mt-6 space-y-12 lg:grid lg:grid-cols-4 lg:gap-x-6 lg:space-y-0">
                        <div class="group relative">
                           <div class="text-center">
                              <img src="product.png" alt="Wood  with porcelain mug, leather journal, brass pen, leather key ring, and a houseplant." class="h-full w-full object-cover object-center">
                           </div>
                        </div>
                        <div class="group relative">
                           <div class="text-center">
                              <img src="product.png" alt="Wood  with porcelain mug, leather journal, brass pen, leather key ring, and a houseplant." class="h-full w-full object-cover object-center">
                           </div>
                        </div>
                        <div class="group relative">
                           <div class="text-center">
                              <img src="product.png" alt="Wood  with porcelain mug, leather journal, brass pen, leather key ring, and a houseplant." class="h-full w-full object-cover object-center">
                           </div>
                        </div>
                        <div class="group relative">
                           <div class="text-center">
                              <img src="product.png" alt="Wood  with porcelain mug, leather journal, brass pen, leather key ring, and a houseplant." class="h-full w-full object-cover object-center">
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="relative px-6 lg:px-8 bg-white text-black py-8">
               <div class="mx-auto max-w-7xl px-4">
                  <div class="mx-auto max-w-2xl lg:max-w-none">
                     <div class="mt-6 space-y-12 lg:grid lg:grid-cols-2 lg:gap-x-6 lg:space-y-0">
                        <div class="group relative">
                           <p class="text-base text-3xl font-semibold text-indigo-900 pt-4">
                              About Yaganchiz
                           </p>
                           <p class="pt-4 text-sm text-indigo-600">
                              Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde illum mollitia inventore voluptas eos magnam maiores sunt rem fugiat odio commodi facere tenetur pariatur, repudiandae, minima animi consequatur perspiciatis atque suscipit? Doloremque quisquam perspiciatis est. Suscipit dicta cumque earum sequi.
                           </p>
                        </div>
                        <div class="group relative">
                           <div class="float-right">
                              <img src="yaganchiz.png" class="h-64" alt="Wood  with porcelain mug, leather journal, brass pen, leather key ring, and a houseplant." class="h-full w-full object-cover object-center">
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </main>
      </div>
      <?php include 'components/footer.php'; ?>

</body>
</html>