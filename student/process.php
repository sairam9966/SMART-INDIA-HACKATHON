<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<?php
session_start();
include("../includes/dbcon.inc.php");



$ideaTitle = mysqli_real_escape_string($con,$_POST["idea-title"]);
$ideaSec = mysqli_real_escape_string($con,$_POST["idea-sector"]);
$ideaProb = mysqli_real_escape_string($con,$_POST["idea-problem"]);
$ideaSol = mysqli_real_escape_string($con,$_POST["idea-solution"]);
$ideaTech = mysqli_real_escape_string($con,$_POST["idea-tech-desc"]);
$ideaSubTitle = mysqli_real_escape_string($con,$_POST["idea-sub-title"]);
$ideaDesc = mysqli_real_escape_string($con,$_POST["idea-short-desc"]);

$q1 = mysqli_real_escape_string($con,$_POST["q1"]);
$q2 = mysqli_real_escape_string($con,$_POST["q2"]);
$q3 = mysqli_real_escape_string($con,$_POST["q3"]);
$q4 = mysqli_real_escape_string($con,$_POST["q4"]);
$q5 = mysqli_real_escape_string($con,$_POST["q5"]);
$q6 = mysqli_real_escape_string($con,$_POST["q6"]);
$q7 = mysqli_real_escape_string($con,$_POST["q7"]);
$q8 = mysqli_real_escape_string($con,$_POST["q8"]);
$q9 = mysqli_real_escape_string($con,$_POST["q9"]);
$q10 = mysqli_real_escape_string($con,$_POST["q10"]);

$email = $_SESSION["useremail"];
$name = $_SESSION["username"];
$usertbi = $_SESSION["usertbi"];

echo '<pre>';
print_r($_FILES);

$ideaFile = $_FILES["idea-file"];
$ideaImg1 = $_FILES["idea-image1"];
$ideaImg2 = $_FILES["idea-image2"];
$ideaImg3 = $_FILES["idea-image3"];

$filename = $ideaFile['name'];
$filepath = $ideaFile['tmp_name'];
$fileerror = $ideaFile['error'];

$img1name = $ideaImg1['name'];
$img1path = $ideaImg1['tmp_name'];
$img1error = $ideaImg1['error'];

$img2name = $ideaImg2['name'];
$img2path = $ideaImg2['tmp_name'];
$img2error = $ideaImg2['error'];

$img3name = $ideaImg3['name'];
$img3path = $ideaImg3['tmp_name'];
$img3error = $ideaImg3['error'];

if ($fileerror == 0 && $img1error == 0 && $img2error == 0 && $img3error == 0) {

    $curdir = getcwd();
    if (!file_exists($curdir."/uploads/ideas/".$email."/".$ideaTitle)) 
        mkdir($curdir."/uploads/ideas/".$email."/".$ideaTitle, 0770, true);

    $destfilepath = 'uploads/ideas/' . $email . "/" .$ideaTitle . '/' . $filename;
    move_uploaded_file($filepath, $destfilepath);

    $destimg1path = 'uploads/ideas/' . $email . "/" .$ideaTitle . '/' . $img1name;
    move_uploaded_file($img1path, $destimg1path);

    $destimg2path = 'uploads/ideas/' . $email . "/" .$ideaTitle . '/' . $img2name;
    move_uploaded_file($img2path, $destimg2path);

    $destimg3path = 'uploads/ideas/' . $email . "/" .$ideaTitle . '/' . $img3name;
    move_uploaded_file($img3path, $destimg3path);



    $insertidea = " insert into student_ideas(sector,tbi,date,title,sub_title,short_desc,email,username,file,image1,image2,image3,problem,solution,tech_desc,q1,q2,q3,q4,q5,q6,q7,q8,q9,q10,m1,m2,m3,m4,m5,m6,m7,m8,m9,m10,total_marks,status) values('$ideaSec','$usertbi',NOW(),'$ideaTitle','$ideaSubTitle','$ideaDesc','$email','$name','$destfilepath','$destimg1path','$destimg2path','$destimg3path','$ideaProb','$ideaSol','$ideaTech','$q1','$q2','$q3','$q4','$q5','$q6','$q7','$q8','$q9','$q10','ok','ok','ok','ok','ok','ok','ok','ok','ok','ok','ok','active') ";
    // $insertidea = " insert into student_ideas(sector,category,date,title,email,username,file,image1,image2,image3,problem,solution,tech_desc,m_1,m_2,m_3,total_marks) values('$ideaSec','$ideaCat',NOW(),'$ideaTitle','$email','$name','$destfilepath','$destimg1path','$destimg2path','$destimg3path','$ideaProb','$ideaSol','$ideaTech','ok','ok','ok','ok') ";
    $insertideaQuery = mysqli_query($con, $insertidea);

    

    if ($insertideaQuery) {

        ?> 
        <script>
            swal({
                title: "Good Job!",
                text: "Idea Added Successfully",
                icon: "success"
            })
            .then(function(){
                window.location.href = "view-idea.php";
            });
        </script>
        <?php
    } 
    else {
        ?>
        <script>
            swal({
                title: "Error!!",
                text: "Something Went Wrong",
                icon: "error"
            })
            .then(function(){
                window.location.href = "submit-idea.php";
            });
        </script>
        <?php
    }
} 
else {
    ?>
    <script>
        swal({
            title: "Error!!",
            text: "Unable to process the document",
            icon: "error"
        })
        .then(function(){
            window.location.href = "submit-idea.php";
        });
    </script>
    <?php
}



?>