<?php

require('backend/conn.php');

$sql = "select*from products";

$result = $conn->query($sql);

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};


?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   
   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
   <script src="https://cdn.tailwindcss.com"></script>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
   <style type="text/css">
.card {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
}

.card:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

.container {
  padding: 2px 16px;
}
p{
	font-size:18px;
}
.img-border{
  padding:12px;
border: 1px solid black;
}
</style>
</head>
<body>
   
   
<?php include 'components/user_header.php'; ?>

<section class="search-form">
   <form action="" method="post">
      <input type="text" name="search_box" placeholder="search here..." maxlength="100" class="box" required>
      <button type="submit" class="fas fa-search" name="search_btn"></button>
   </form>
</section>

<section>

		
			
<h1>Online-Shopping</h1>
<h2><b class="h1">Explore Yaganchiz</b></h2>
<br>
<div class="container row">
    <div class="col-3 "><img class="img-border" src="backend/images/Storm.jpg" alt=""></div>
    <div class="col-3  "><img class="img-border" src="backend/images/Bastard.jpg" alt=""></div>
    <div class="col-3 "><img class="img-border" src="backend/images/pot.jpg" alt=""></div>
    <div class="col-3 "><img class="img-border" src="backend/images/pot.jpg" alt=""></div>
</div>
<br><br><br>
<div class="row">

<?php while($row = $result->fetch_assoc()){ ?>
	<div class="col-3">
	<div class="card">
  <img src="backend/<?=$row['image']?>" alt="Avatar" style="width:100%">
  <div class="container">
    <h4><b>Name:<?=$row['name']?></b></h4> 
    <h4><b>Price:<?=$row['price']?></b></h4> 
	
    <h4>&#9733;&#9733;&#9733;&#9733;&#9733;</h4>

  </div>
</div>
	</div>

  <?php }?>
  </div>


	</section>

<?php include 'components/footer.php'; ?>



</body>
</html>