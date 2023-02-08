<?php

session_start();
if (!isset($_SESSION["selecusername"])) {
  header("location:../index.php");
}
include("../includes/dbcon.inc.php");

if (isset($_GET["id"])) {

  $pid = $_GET["id"];


  $get_idea = " select * from student_ideas where id='$pid' ";
  $get_idea_query = mysqli_query($con, $get_idea);

  $idea_details = mysqli_fetch_array($get_idea_query);

  $email = $idea_details["email"];


  $get_user = " select * from students where email='$email' ";
  $get_user_query = mysqli_query($con, $get_user);

  $stud = mysqli_fetch_array($get_user_query);

?>
  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
    <link rel="stylesheet" href="style.css" />
    <title><?php echo $idea_details["title"]; ?></title>
  </head>

  <body>


    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" style="font-size:1.5rem;" href="#">Innovative Ideas</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav  mx-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active ms-5" aria-current="page" style="font-size:1.3rem;" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link ms-5" style="font-size:1.3rem;" href="#">About ASIIM</a>
            </li>
            <li class="nav-item">
              <a class="nav-link ms-5" style="font-size:1.3rem;" href="#">Gallery</a>
            </li>
            <li class="nav-item">
              <a class="nav-link ms-5" style="font-size:1.3rem;" href="#">Contact Us</a>
            </li>
          </ul>
          <div>
            <a class="btn  btn-outline-danger btn-md" href="../student/student-logout.php" style="color:white;font-size:1.2rem;" type="button">Logout</a>
          </div>
        </div>
      </div>
    </nav>


    <?php



    $name = $stud["name"];
    $phone = $stud["phone"];
    $state = $stud["state"];
    $city = $stud["city"];
    $clg = $stud["clg"];

    $sector = $idea_details["sector"];

    $getQues = " select * from questions where category='$sector' ";
    $getQuesQuery = mysqli_query($con,$getQues);
    $questions = mysqli_fetch_array($getQuesQuery);

    $title = $idea_details["title"];
    $sub_title = $idea_details["sub_title"];
    $short_desc = $idea_details["short_desc"];
    $username = $idea_details["username"];
    $problem = $idea_details["problem"];
    $solution = $idea_details["solution"];
    $tech_desc = $idea_details["tech_desc"];

      $q1 = $idea_details["q1"];
      $q2 = $idea_details["q2"];
      $q3 = $idea_details["q3"];
      $q4 = $idea_details["q4"];
      $q5 = $idea_details["q5"];
      $q6 = $idea_details["q6"];
      $q7 = $idea_details["q7"];
      $q8 = $idea_details["q8"];
      $q9 = $idea_details["q9"];
      $q10 = $idea_details["q10"];

      $total = $idea_details["total_marks"];

    $file = '../student/' . $idea_details["file"];
    $image1 = '../student/' . $idea_details["image1"];
    $image2 = '../student/' . $idea_details["image2"];
    $image3 = '../student/' . $idea_details["image3"];



    ?>
    <div class="container mt-3 mb-5">
      <div class="row">
        <div class="col">
          <div class="row banner-data" style="background-color: #fbfbfb;">
            <div class="col-lg-7">
              <div class="banner-img-content">
                <img class="img-fluid" src=" <?php echo $image1; ?> " />
              </div>
            </div>
            <div class="col-lg-5">
              <div class="banner-metadata">
                <div class="fs-1 idea-title mt-3"><?php echo $title; ?></div>
                <div class="fs-5 idea-short-desc mt-2">
                  <?php echo $sub_title; ?>
                </div>
                <p class="fs-5 idea-desc mt-4">
                  <?php echo $short_desc; ?>
                </p>
                <div class="row">
                  <div class="category-btns col">
                    <button class="btn btn-round btn-block btn-transparent" disabled>
                      <?php echo $sector; ?>
                    </button>
                  </div>
                </div>
                <ul class="nav meta-list">
                  <li><i class="fas fa-heart"></i></li>
                  <li><i class="fas fa-comment"></i></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="page-meta-data mt-3">
            <div class="row">
              <div class="col-lg-8">
                <div class="meta-txt">
                  <div class="mt-2">Problem</div>
                  <p class="mt-1"><?php echo $problem; ?></p>
                  <div class="mt-4">Solution</div>
                  <p class="mt-1"><?php echo $solution; ?></p>
                  <div class="mt-4">Technology</div>
                  <p class="mt-1"><?php echo $tech_desc; ?></p>
                  <div class="mt-4">Idea ppt</div>
                  <div class="view-file">
                    <a href=" <?php echo $file; ?> " target="_blank" class="btn btn-round btn-secondary btn-block btn-transparent">
                      <i class="fas fa-file-alt"></i><span class="ms-3">View File</span>
                    </a>
                  </div>
                  <div class="idea-images">
                    <div class="mt-2 gallery-head">Gallery</div>
                    <section class="gallery">
                      <div class="container-lg">
                        <div class="row gy-3 row-cols-1 row-cols-sm-2 row-cols-md-3">
                          <div class="col">
                            <img src="<?php echo $image1; ?>" alt="">
                          </div>
                          <div class="col">
                            <img src="<?php echo $image2; ?>" alt="">
                          </div>
                          <div class="col">
                            <img src="<?php echo $image3; ?>" alt="">
                          </div>
                        </div>
                      </div>
                    </section>
                  </div>
                </div>
              </div>
              <div class="student-details-div col-lg-4">
                <div class="student-details p-4">
                  <div class="row">
                    <div class="col-sm-3">
                      <p class="mb-0">Name</p>
                    </div>
                    <div class="col-sm-9">
                      <p class="mb-0"><?php echo $name; ?></p>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <p class="mb-0">Email</p>
                    </div>
                    <div class="col-sm-9">
                      <p class="mb-0" style="font-size: 1.1rem;color: black;"><?php echo $email; ?></p>
                      </p>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <p class="mb-0">College</p>
                    </div>
                    <div class="col-sm-9">
                      <p class="mb-0"><?php echo $clg; ?></p>
                      </p>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <p class="mb-0">Phone</p>
                    </div>
                    <div class="col-sm-9">
                      <p class="mb-0"><?php echo $phone; ?></p>
                      </p>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <p class="mb-0">State</p>
                    </div>
                    <div class="col-sm-9">
                      <p class="mb-0"><?php echo $state; ?></p>
                      </p>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <p class="mb-0">City</p>
                    </div>
                    <div class="col-sm-9">
                      <p class="mb-0"><?php echo $city; ?></p>
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div>
            <div class="mt-4 mb-3 gallery-head">Your answers</div>
            <div style="font-size:30px;font-weight:500;">Round 1 Grades: <?php echo $total; ?></div>
            <form action="" method="POST">
              <div class="row">
                <div style="margin-top: 30px; margin-left:30px">
                  <div class="question">1. Will this business/start-up meet a need or solve a problem?</div>
                  <blockquote>
                    <p class="blockquote-text">
                    <?php echo $q1; ?>
                    </p>
                    <?php if($total=="ok") echo " <div style='margin-top: 1rem;'>
                      <label for='m1' style='font-weight: 700;font-size: 20px;margin-right: 10px;'>Enter marks :</label>
                      <input type='number' name='m1' id='m1' min='0' max='10' required />
                    </div>"; ?>
                    
                  </blockquote>
                </div>
                <div class="mt-4 col-12" style="margin-top: 30px; margin-left:30px">
                  <div class="question">2. Is this the right time and place for this business?</div>
                  <blockquote>
                    <p class="blockquote-text">
                    <?php echo $q2; ?>
                    </p>
                    <?php if($total=="ok") echo " <div style='margin-top: 1rem;'>
                      <label for='m2' style='font-weight: 700;font-size: 20px;margin-right: 10px;'>Enter marks :</label>
                      <input type='number' name='m2' id='m2' min='0' max='10' required /> 
                    </div>"; ?>
                  </blockquote>
                </div>
                <div class="mt-4 col-12" style="margin-top: 30px; margin-left:30px">
                  <div class="question">3. What limitations will you encounter with this business idea?</div>
                  <blockquote>
                    <p class="blockquote-text">
                    <?php echo $q3; ?>
                    </p>
                    <?php if($total=="ok") echo " <div style='margin-top: 1rem;'>
                      <label for='m3' style='font-weight: 700;font-size: 20px;margin-right: 10px;'>Enter marks :</label>
                      <input type='number' name='m3' id='m3' min='0' max='10' required />
                    </div>"; ?>
                  </blockquote>
                </div>
                <div class="mt-4 col-12" style="margin-top: 30px; margin-left:30px">
                  <div class="question">4. Are there other businesses already doing what you want to do?</div>
                  <blockquote>
                    <p class="blockquote-text">
                    <?php echo $q4; ?>
                    </p>
                    <?php if($total=="ok") echo " <div style='margin-top: 1rem;'>
                      <label for='m4' style='font-weight: 700;font-size: 20px;margin-right: 10px;'>Enter marks :</label>
                      <input type='number' name='m4' id='m4' min='0' max='10' required />
                    </div>"; ?>
                  </blockquote>
                </div>
                <div class="mt-4 col-12" style="margin-top: 30px; margin-left:30px">
                  <div class="question">5. Have you analysed the market segment of your sector?</div>
                  <blockquote>
                    <p class="blockquote-text">
                    <?php echo $q5; ?>
                    </p>
                    <?php if($total=="ok") echo " <div style='margin-top: 1rem;'>
                      <label for='m5' style='font-weight: 700;font-size: 20px;margin-right: 10px;'>Enter marks :</label>
                      <input type='number' name='m5' id='m5' min='0' max='10' required />  
                    </div>"; ?>
                  </blockquote>
                </div>
                <div class="mt-4 col-12" style="margin-top: 30px; margin-left:30px">
                  <div class="question"><?php echo '6. '.$questions["q1"]; ?></div>
                  <blockquote>
                    <p class="blockquote-text">
                    <?php echo $q6; ?>
                    </p>
                    <?php if($total=="ok") echo " <div style='margin-top: 1rem;'>
                      <label for='m6' style='font-weight: 700;font-size: 20px;margin-right: 10px;'>Enter marks :</label>
                      <input type='number' name='m6' id='m6' min='0' max='10' required />  
                    </div>"; ?>
                  </blockquote>
                </div>
                <div class="mt-4 col-12" style="margin-top: 30px; margin-left:30px">
                  <div class="question"><?php echo '7. '.$questions["q2"]; ?></div>
                  <blockquote>
                    <p class="blockquote-text">
                    <?php echo $q7; ?>
                    </p>
                    <?php if($total=="ok") echo " <div style='margin-top: 1rem;'>
                      <label for='m7' style='font-weight: 700;font-size: 20px;margin-right: 10px;'>Enter marks :</label>
                      <input type='number' name='m7' id='m7' min='0' max='10' required />
                    </div>"; ?>
                  </blockquote>
                </div>
                <div class="mt-4 col-12" style="margin-top: 30px; margin-left:30px">
                  <div class="question"><?php echo '8. '.$questions["q3"]; ?></div>
                  <blockquote>
                    <p class="blockquote-text">
                    <?php echo $q8; ?>
                    </p>
                    <?php if($total=="ok") echo " <div style='margin-top: 1rem;'>
                      <label for='m8' style='font-weight: 700;font-size: 20px;margin-right: 10px;'>Enter marks :</label>
                      <input type='number' name='m8' id='m8' min='0' max='10' required />
                    </div>"; ?>
                  </blockquote>
                </div>
                <div class="mt-4 col-12" style="margin-top: 30px; margin-left:30px">
                  <div class="question"><?php echo '9. '.$questions["q4"]; ?></div>
                  <blockquote>
                    <p class="blockquote-text">
                    <?php echo $q9; ?>
                    </p>
                    <?php if($total=="ok") echo " <div style='margin-top: 1rem;'>
                      <label for='m9' style='font-weight: 700;font-size: 20px;margin-right: 10px;'>Enter marks :</label>
                      <input type='number' name='m9' id='m9' min='0' max='10' required />
                    </div>"; ?>
                  </blockquote>
                </div>
                <div class="mt-4 col-12" style="margin-top: 30px; margin-left:30px">
                  <div class="question"><?php echo '10. '.$questions["q5"]; ?></div>
                  <blockquote>
                    <p class="blockquote-text">
                    <?php echo $q10; ?>
                    </p>
                    <?php if($total=="ok") echo " <div style='margin-top: 1rem;'>
                      <label for='m10' style='font-weight: 700;font-size: 20px;margin-right: 10px;'>Enter marks :</label>
                      <input type='number' name='m10' id='m10' min='0' max='10' required />
                    </div>"; ?>
                  </blockquote>
                </div>
                <div class="row">
                  <div class="col d-flex justify-content-center align-content-center mt-5">
                    <?php if($total=="ok") echo "<input type='submit' name='awardGrades' class='btn btn-success btn-lg' value='Award grades'>"; ?> 
                  </div>
                </div>
              </div>
            </form>

            <?php 

              if(isset($_POST["awardGrades"])){

                  $marks1 = $_POST["m1"];
                  $marks2 = $_POST["m2"];
                  $marks3 = $_POST["m3"];
                  $marks4 = $_POST["m4"];
                  $marks5 = $_POST["m5"];
                  $marks6 = $_POST["m6"];
                  $marks7 = $_POST["m7"];
                  $marks8 = $_POST["m8"];
                  $marks9 = $_POST["m9"];
                  $marks10 = $_POST["m10"];
                  $total = $marks1 + $marks2 + $marks3 + $marks4 + $marks5 + $marks6 + $marks7 + $marks8 + $marks9 + $marks10; 
                  $grade = " update student_ideas set m1='$marks1',m2='$marks2',m3='$marks3',m4='$marks4',m5='$marks5',m6='$marks6',m7='$marks8',m9='$marks9',m10='$marks10',total_marks='$total' where id='$pid' ";
                  $gradeQuery = mysqli_query($con,$grade);

              }


              ?>
            
          </div>
        </div>
      </div>
    </div>
  <?php

} 
else {
  header("location:../selector/view-idea.php");
  ?> 
    <script>
      window.close();
    </script> 
  <?php
            
}
?>


  

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js"></script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  </body>

  </html>