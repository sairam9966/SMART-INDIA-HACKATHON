<?php include("./selector-home-header.php"); ?>
<?php include("../includes/dbcon.inc.php"); ?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css">

<?php $page = 'select-idea';
include("./selector-sidenav.php"); ?>

<div class="container">
    <form method="POST" class="d-flex justify-content-center align-content-center mt-5">
        <input type="submit" name="grade" class="btn btn-success" value="Grade">
    </form>
    <div class="album py-5" style="height: 90vh;">
        <div class="container">

            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

                <?php

                if (isset($_POST["grade"])) {
                    $selector =  $_SESSION["selecusername"];
                    $getUser = "select * from selectors where name='$selector' ";
                    $getDetails = mysqli_query($con, $getUser);
                    $getTbi = mysqli_fetch_array($getDetails)["tbi"];

                    $filterbyGrade = "select * from student_ideas where tbi='$getTbi' order by total_marks desc";
                    $filterbyGradeQuery = mysqli_query($con, $filterbyGrade);

                    while ($idea = mysqli_fetch_array($filterbyGradeQuery)) {

                        $idea_sector = $idea["sector"];
                        $id = $idea["id"];
                        $idea_date = $idea["date"];
                        $idea_title = $idea["title"];
                        $idea_thumbnail = '../student/' . $idea["image1"];
                        $idea_desc = $idea["solution"];
                        $total = $idea['total_marks'];

                        echo "<a class='text-reset text-decoration-none' href='../selector-lander/index.php?id=$id' target='_blank'>
                     <div class='col'>
                         <div class='card shadow-sm'>
                             <img class='bd-placeholder-img card-img-top' width='100% 'height='225 'focusable='true'src='$idea_thumbnail'>
                             <div class='card-body'>
                                 <h2 class='card-title'>$idea_title</h2>
                                 <p class='card-text'>" . strtolower(substr($idea_desc, 0, 100)) . "...."  . "</p>
                                 <div class='d-flex justify-content-between align-items-center'>
                                     <div>
                                         <button type='button' class='btn mb-2 mb-md-0 btn-secondary btn-block btn-round' disabled>$idea_sector</button>                                
                                     </div>
                                     ";
                        if ($idea["total_marks"] != "ok") echo "<button class='btn mb-2 mb-md-0 btn-secondary btn-block btn-round' disabled style='font-size: 25px;font-weight:600;'>Marks: $total</button>";
                        echo "<small class='text-muted'>$idea_date</small>
                                 </div>
                             </div>
                         </div>
                     </div>";
                    }
                }


                ?>
            </div>
        </div>
    </div>
</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<?php include("./selector-home-footer.php"); ?>