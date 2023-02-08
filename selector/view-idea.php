<?php
include("./selector-home-header.php");
include("./functions.php");
$page = 'view-idea';
include("./selector-sidenav.php");
?>


<div class="album py-5" style="height: 90vh;">
    <div class="container">

        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

            
        <?php getStudentIdeas();  ?>


        </div>
        <nav class="mt-5">
            <ul class="pagination pagination justify-content-center">
                <?php 

                    $per_page = 6;
                    $con = mysqli_connect("localhost", "root", "", "sih");

                    $get_student_ideas_count = " select * from student_ideas ";
                    $get_student_ideas_count_query = mysqli_query($con,$get_student_ideas_count);
                    $count = mysqli_num_rows($get_student_ideas_count_query);

                    $total_page = ceil($count/$per_page);
                    if($total_page>1){
                        for($i=1;$i<=$total_page;$i++){
                            ?> <li class="page-item ms-3 <?php if(isset($_GET["page"])){ if($_GET["page"]==$i) echo " active";} elseif($i==1) echo " active"; ?> "><a class="page-link" style="    width: 3rem;
                            height: 3rem;
                            text-align: center;
                            font-size: 1.5rem;
                            font-weight: 600;" href="?page=<?php echo $i; ?>"> <?php echo $i; ?>  </a></li> <?php
                        }
                    }

                ?>
            </ul>
        </nav>
    </div>
</div>


<?php include("./selector-home-footer.php"); ?>
