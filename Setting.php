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
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Settings</title>

   
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
.myrow{
background:#1D3557;

}
</style>
</head>
<body>
   
   
<?php include 'components/user_header.php'; ?>
<div class="row myrow">
    <div class="col-12 d-flex justify-content-center p-5">
    <h1 class="h1 text-white p-5">Settings</h1>
    </div>
    <div class="col-12 d-flex justify-content-center" >
        <img class="my-6"src="backend/images/settings.jpg" width="300" height="200" alt="">
    </div>
</div>

<div class="row">
    <div class="col-5 text-right mt-5"><h3 class="h2"> <i class="fas fa-pen-to-square mr-1hea"></i>Edit account</h3></div>
    <div class="col-2"></div>
    <div class="col-5 text-left mt-5"><h3 class="h2"><i class="fas fa-bell mr-1"></i>Notification</h3></div>
    <div class="col-5 text-right mt-5"><h3 class="h2"><i class="fas fa-right-from-bracket mr-1"></i><a href="logout.php">Logout</a></h3></div>
    <div class="col-2"></div>
    <div class="col-5 text-left mt-5"><h3 class="h2"><i class="fas fa-trash-can mr-1"></i>Delete account</h3></div>
    <br><br><br><br><br><br>
</div>

<?php include 'components/footer.php'; ?>



</body>
</html>