<div class=" tab-pane fade show active" id="pills-selec-login" role="tabpanel" aria-labelledby="tab-login">
    <form action="<?php echo htmlentities($_SERVER['PHP_SELF']) ?>" method="POST" enctype="multipart/form-data" novalidate class="needs-validation" style="display: flex; justify-content:center;">

        <div class=" w-50">
            <!-- Email input -->
            <div class="mb-4">
                <label class="form-label" for="selecloginName" style="font-size: 1.3rem;color: black;">Email *</label>
                <input type="email" name="selecloginEmail" id="selecloginName" class="form-control" required />
                <div class="invalid-feedback">
                    Invalid email
                </div>
            </div>

            <!-- Password input -->
            <div class="mb-4">
                <label class="form-label" for="selecloginPassword" style="font-size: 1.3rem;color: black;">Password *</label>
                <input type="password" name="selecloginPassword" pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" id="selecloginPassword" class="form-control" required />
                <div class="invalid-feedback">
                    Password must contain upperCase, lowerCase, number/specialchar and min 8 chars
                </div>
            </div>

            <!-- 2 column grid layout -->
            <div class="row mb-4">
                <div class="col-md-6 d-flex justify-content-center">
                    <!-- Checkbox -->
                    <div class="form-check mb-3 mb-md-0">
                        <input class="form-check-input" type="checkbox" value="" id="selecloginCheck" checked />
                        <label class="form-check-label" for="selecloginCheck"> Remember me </label>
                    </div>
                </div>

                <div class="col-md-6 d-flex justify-content-center">
                    <!-- Simple link -->
                    <a href="#!">Forgot password?</a>
                </div>
            </div>

            <!-- Submit button -->
            <button type="submit" name="selecLogin" class="btn btn-primary btn-block mb-4" style="background: linear-gradient(90deg, rgba(55,59,68,1) 0%, rgba(66,134,244,1) 100%); font-size:1.5rem;">Login</button>

            <!-- Register buttons -->
            <div class="text-center">
                <p>Not a member? Register</p>
            </div>
        </div>


    </form>
</div>

<?php 

include("./includes/dbcon.inc.php");

if(isset($_POST["selecLogin"])){
    $selecloginEmail = mysqli_real_escape_string($con, $_POST["selecloginEmail"]);
    $selecloginPassword = mysqli_real_escape_string($con, $_POST["selecloginPassword"]);

    $email_search = " select * from selectors where email='$selecloginEmail' ";
    $emailQuery = mysqli_query($con,$email_search);
    $emailExist = mysqli_num_rows($emailQuery);

    if($emailExist){
        $selecDetails = mysqli_fetch_array($emailQuery);

        $selecDBPwd = $selecDetails["pwd"];
        $_SESSION["selecusername"] = $selecDetails["name"];
        $_SESSION["selecuseremail"] = $selecDetails["email"];
        $pwdVerifiy = password_verify($selecloginPassword,$selecDBPwd);

        if($pwdVerifiy){
            $selecStatus = $selecDetails["status"];
            if($selecStatus == "active"){
                ?>
                <script>
                    location.replace("./selector/view-idea.php");
                </script>
                <?php
            }
            else{
                
                ?>
                <script>
                    swal("Documents Under Verification!", "You can login after your documents are verified", "warning");
                </script>
                <?php
            }
        }
        else{
            ?>
                <script>swal("Invalid Credentials!", "Invalid password", "warning");</script>
            <?php
        }

    }
    else{
        ?>
            <script>
                swal("Account doesnt exist!", "Create your account", "warning");
            </script>
        <?php
    }
}


?>