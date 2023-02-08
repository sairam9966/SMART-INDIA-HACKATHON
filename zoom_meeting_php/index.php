<?php
session_start();
$page = 'meeting';
?>

<?php include 'C:\xampp\htdocs\asiim\tbiregister\links.php';
?>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" >

    <link rel="stylesheet" href="style.css">
    <script type="text/javascript" src="script.js"></script>
   
    <title>Sign Up</title>
    <style>
      *{
        font-family:"cursive";
				
      }
      </style>
   
  </head>
  <body style="background-color:#031d37">
  <h1 class="text-center text-light" > VIRTUAL MEET</h1>
  <p class="text-light text-center">CONNECT WITH STUDENTS</p>

  
     <div class="flex">
     <form class="row g-3 m-3  mt-0 p-3  hi  shadow-lg rounded container" method="post" action="" style="background-color:#9ec5fe">
<div class="card  text-white m-0 p-0 text-center" style="background-color:#031d37">
    <div class="card-body p-2 "><h5>Enter Meet Details</h5></div>
  </div>
  <div class="col-md-12">
    <label for="validationServer01" class="form-label" >Date of Meet</label>
    <?php 
    date_default_timezone_set('Asia/Kolkata');
   $present=date("Y-m-d h:i:sa" );
   echo $present;
   ?>
    <input type="datetime-local" class="form-control" min="$present"  id="validationServer01" name="date" required>
  
  </div>
  <!-- <div class="col-md-12">
    <label for="validationServer01" class="form-label" >STARTING TIME</label>
    <input type="time"  class="form-control" id="validationServer01" name="time" required>
   
  </div> -->
  
  <div class="col-md-12">
    <label for="validationServer02" class="form-label">Duration of the meet</label>
    <input type="text" class="form-control " id="validationServer02"  name="time" required>
  
  </div>

  
  
  

  <div class="text-center">
   <input type="submit" class="btn  mt-4  text-light" name="submit" Value="Submit" style="background-color: #031d37">
   </div>
</form>
</div>
         
     
  </body>
</html>

   


<?php
include('config.php');
include('api.php');
$arr['topic']='Test by Web troopers';
$arr['date']=$_POST['date'];
$arr['duration']=$_POST['time'];
?>
<?php

if (isset($_POST['submit'])) {
  $result=createMeeting($arr);
  if(isset($result->id)){

    $_SESSION['link']="<a href='".$result->join_url."'>".$result->join_url."</a>";
   
    // header("location:final.php");
   header("location:http://localhost/asiim/tbiregister/index.php");

  }
  // }else{
  //   echo '<pre>';
  //   print_r($result);
  // }
  // ini_set('display_errors', 0);
  // ini_set('display_startup_errors', 0);
  // error_reporting(0);

}
?>
