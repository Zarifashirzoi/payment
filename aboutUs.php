
<?php


include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};


?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
   <script src="https://cdn.tailwindcss.com"></script>
   <link name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
	
   <title>About US</title>
</head>
<body>
<?php include 'components/user_header.php'; ?>
	<section class="container">
<div class="row">
   <div class="col-6" style="text-align:center;">
<br><br>
<h1 class="fs-1"><b>About Us</b></h1>
<br>			
<div class=" text-left"> 
					<p class="fs-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					
				
					
				</div> 
   </div>
   <div class="col-2"></div>
   <div class="col-4">
      
				<div class="image-section text-center">
					<img src="Yaganchiz.png">
             
				</div>
   </div>
</div>

	</section>
<?php include 'components/footer.php'; ?>
</body>
</html>