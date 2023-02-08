<?php 

include("../includes/dbcon.inc.php");
if(isset($_POST["category"])){
    $cat = $_POST["category"];
    $get = "select * from questions where category='$cat' ";
    $getQuery = mysqli_query($con,$get);

    $ques = mysqli_fetch_array($getQuery);

    echo " 
            <div class='mt-4 mb-4'>
                <label class='form-label' for='q1' style='font-size: 1.3rem;color: black;'>Will this business/start-up meet a need or solve a problem?*</label>
                <textarea class='form-control' name='q1' id='q1' rows='3' required></textarea>
            </div>
            <div class='mt-4 mb-4'>
                <label class='form-label' for='q2' style='font-size: 1.3rem;color: black;'>Is this the right time and place for this business? *</label>
                <textarea class='form-control' name='q2' id='q2' rows='3' required></textarea>
            </div>
            <div class='mt-4 mb-4'>
                <label class='form-label' for='q3' style='font-size: 1.3rem;color: black;'>What limitations will you encounter with this business idea? *</label>
                <textarea class='form-control' name='q3' id='q3' rows='3' required></textarea>
            </div>
            <div class='mt-4 mb-4'>
                <label class='form-label' for='q4' style='font-size: 1.3rem;color: black;'>Are there other businesses already doing what you want to do? *</label>
                <textarea class='form-control' name='q4' id='q4' rows='3' required></textarea>
            </div>
            <div class='mt-4 mb-4'>
                <label class='form-label' for='q5' style='font-size: 1.3rem;color: black;'>Have you analysed the market segment of your sector? *</label>
                <textarea class='form-control' name='q5' id='q5' rows='3' required></textarea>
            </div>
            <div class='mt-4 mb-4'>
                <label class='form-label' for='q6' style='font-size: 1.3rem;color: black;'>". $ques['q1'] ."*</label>
                <textarea class='form-control' name='q6' id='q6' rows='3' required></textarea>
            </div>
            <div class='mb-4'>
                <label class='form-label' for='q7'  style='font-size: 1.3rem;color: black;'>". $ques['q2'] ." *</label>
                <textarea class='form-control' name='q7' id='q7' rows='3' required></textarea>
            </div>
            <div class='mb-4'>
                <label class='form-label' for='q8' style='font-size: 1.3rem;color: black;'>". $ques['q3'] ." *</label>
                <textarea class='form-control' name='q8' id='q8' rows='3' required></textarea>
            </div>
            <div class='mb-4'>
                <label class='form-label' for='q9' style='font-size: 1.3rem;color: black;'>". $ques['q4'] ." *</label>
                <textarea class='form-control' name='q9' id='q9' rows='3' required></textarea>
            </div>
            <div class='mb-4'>
                <label class='form-label' for='q10' style='font-size: 1.3rem;color: black;'>". $ques['q5'] ." *</label>
                <textarea class='form-control' name='q10' id='q10' rows='3' required></textarea>
            </div> ";
}


?>