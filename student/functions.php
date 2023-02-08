<?php

$con = mysqli_connect("localhost", "root", "", "sih");

function getStudentIdeas()
{

    global $con;
    $user_email = $_SESSION['useremail'];
    
    $per_page = 6;
    if(isset($_GET["page"])){
        $page = $_GET["page"];
    }
    else{
        $page = 1;
    }
    $start_from = ($page-1) * $per_page;

    $get_student_idea = " select * from student_ideas where email='$user_email' limit $start_from,$per_page ";
    $user_ideas = mysqli_query($con, $get_student_idea);

    $get_student_ideas_count = " select * from student_ideas where email='$user_email' ";
    $get_student_ideas_count_query = mysqli_query($con,$get_student_ideas_count);

    $count = mysqli_num_rows($get_student_ideas_count_query);

    if ($count == 0) {
        ?>
         <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script>
            swal({
                title: "OOPS!",
                text: "You dont have any ideas to view",
                icon: "warning",
                closeOnClickOutside: false,
                button: "Submit idea",
                dangerMode: true
            })
            .then(function(){
                window.location.href = "submit-idea.php";
            });
        </script>
        <?php
    } 
    else {

        while ($idea = mysqli_fetch_array($user_ideas)) {

            $idea_sector = $idea["sector"];
            $id = $idea["id"];
            $idea_date = $idea["date"];
            $idea_title = $idea["title"];
            $idea_thumbnail = $idea["image1"];
            $idea_desc = $idea["solution"];

            echo "<a class='text-reset text-decoration-none' href='../student-lander/index.php?id=$id' target='_blank'>
                <div class='col'>
                    <div class='card shadow-sm'>
                        <img class='bd-placeholder-img card-img-top' width='100% 'height='225 'focusable='true'src='$idea_thumbnail'>
                        <div class='card-body'>
                            <h2 class='card-title'>$idea_title</h2>
                            <p class='card-text'>" . strtolower(substr($idea_desc, 0, 100)) . "...."  . "</p>
                            <div class='d-flex justify-content-between align-items-center'>
                                <div>
                                    <button type='button' class='btn mb-2 mb-md-0 btn-secondary btn-block btn-round' disabled>$idea_sector</button>s
                                </div>
                                <small class='text-muted'>$idea_date</small>
                            </div>
                        </div>
                    </div>
                </div>";
        }

         

        
    }
}



?>