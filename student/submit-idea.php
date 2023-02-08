<?php include("./student-home-header.php"); ?>

<link rel="stylesheet" href="./multistep/style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css">

<?php $page = 'submit-idea';
include("./student-sidenav.php"); ?>


<div class="dashboard-content px-3">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="text-center p-0 mb-2">
                <div class="card px-0 pt-1 pb-0 mt-3 mb-3">
                    <h2 id="heading">Submit your Innovative Idea</h2>
                    <form id="msform" method="POST" enctype="multipart/form-data" novalidate class="p-3 mt-0 was-validated">
                        <!-- progressbar -->
                        <ul id="progressbar" class="d-flex justify-content-center">
                            <li class="active" id="account"><strong>Basic Details</strong></li>
                            <li id="personal"><strong>Idea</strong></li>
                            <li id="payment"><strong>Image</strong></li>
                            <!-- <li id="confirm"><strong>Finish</strong></li> -->
                        </ul>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
                        </div> <br> <!-- fieldsets -->
                        <fieldset>
                            <div class="form-card">
                                <div class="row">
                                    <div class="col-7">
                                        <h2 class="fs-title">Tell us about your idea:</h2>
                                    </div>
                                    <div class="col-5">
                                        <h2 class="steps">Step 1 - 3</h2>
                                    </div>
                                </div>
                                <div>

                                    <div class="mt-4 mb-4">
                                        <label class="form-label" for="idea-title" style="font-size: 1.3rem;color: black;">Title of the idea/product *</label>
                                        <input type="text" name="idea-title" id="idea-title" pattern="^[a-zA-Z][a-zA-Z0-9-_\.\s]{2,25}$" class="form-control" required />
                                        <div class="invalid-feedback">
                                            Max length allowed is 25. Use alphanumeric and also - .
                                        </div>
                                    </div>

                                    <div class="mb-4">
                                        <label class="form-label" for="idea-sub-title" style="font-size: 1.3rem;color: black;">Subtitle *</label>
                                        <input type="text" name="idea-sub-title" id="idea-sub-title" class="form-control" required />
                                        <div class="invalid-feedback">
                                            Max length allowed is 25. Use alphanumeric and also - .
                                        </div>
                                    </div>

                                    <div class="mb-4">
                                        <label class="form-label" for="idea-short-desc" style="font-size: 1.3rem;color: black;">Short description *</label>
                                        <input type="text" name="idea-short-desc" id="idea-short-desc" class="form-control" required />
                                        <div class="invalid-feedback">
                                            Max length allowed is 25. Use alphanumeric and also - .
                                        </div>
                                    </div>

                                    <div class="mb-4">
                                        <label for="idea-sector" class="form-label" style="font-size: 1.3rem;color: black;">Primary sector of your innovation *</label>
                                        <select id="idea-sector" name="idea-sector" onchange="fetchQues(this.value)" class="form-select" required>
                                            <option selected disabled value="">Choose...</option>\
                                            <option value="Fintech">Fintech</option>
                                            <option value="Agriculture">Agriculture</option>
                                            <option value="HealthCare">HealthCare</option>
                                            <option value="Defence">Defence</option>
                                            <option value="Education">Education</option>
                                            <option value="Food Processing">Food Processing</option>
                                            <option value="Infrastructure">Infrastructure</option>
                                            <option value="Tourism">Tourism</option>
                                            <option value="Space">Space</option>
                                        </select>
                                        <div class="invalid-feedback">
                                            Select Sector
                                        </div>
                                    </div>

                                    <div class="mb-4">
                                        <label class="form-label" for="idea-problem" style="font-size: 1.3rem;color: black;">Problem*</label>
                                        <input type="text" name="idea-problem" id="idea-problem" class="form-control" required />
                                        <div class="invalid-feedback">
                                            Max length allowed is 25. Use alphanumeric and also - .
                                        </div>
                                    </div>

                                    <div class="mb-4">
                                        <label class="form-label" for="idea-solution" style="font-size: 1.3rem;color: black;">Solution *</label>
                                        <input type="text" name="idea-solution" id="idea-solution" class="form-control" required />
                                        <div class="invalid-feedback">
                                            Max length allowed is 25. Use alphanumeric and also - .
                                        </div>
                                    </div>

                                    <div class="mb-4">
                                        <label class="form-label" for="idea-tech-desc" style="font-size: 1.3rem;color: black;">Tech description *</label>
                                        <input type="text" name="idea-tech-desc" id="idea-tech-desc" class="form-control" required />
                                        <div class="invalid-feedback">
                                            Max length allowed is 25. Use alphanumeric and also - .
                                        </div>
                                    </div>

                                </div>


                            </div>
                            <input type="button" name="next" class="next action-button" value="Next" />
                        </fieldset>
                        <fieldset>
                            <div class="form-card">
                                <div class="row">
                                    <div class="col-7">
                                        <h2 class="fs-title">Questions :</h2>
                                    </div>
                                    <div class="col-5">
                                        <h2 class="steps">Step 2 - 3</h2>
                                    </div>
                                </div>
                                <div id="questionField">
                                    
                                </div>
                            </div> 
                            <input type="button" name="next" class="next action-button" value="Next" /> 
                            <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                        </fieldset>
                        <fieldset>
                            <div class="form-card">
                                <div class="row">
                                    <div class="col-7">
                                        <h2 class="fs-title">Image Upload:</h2>
                                    </div>
                                    <div class="col-5">
                                        <h2 class="steps">Step 3 - 3</h2>
                                    </div>
                                </div>
                                <div>
                                    <div class="mt-4 mb-4">
                                        <label for="idea-file" class="form-label" style="font-size: 1.3rem;color: black;">Idea ppt or pdf *</label>
                                        <input class="form-control" name="idea-file" type="file" id="idea-file" required>
                                    </div>
                                    <div class="mb-4">
                                        <label for="idea-image1" class="form-label" style="font-size: 1.3rem;color: black;">Image 1 *</label>
                                        <input class="form-control" name="idea-image1" type="file" id="idea-image1" required>
                                    </div>
                                    <div class="mb-4">
                                        <label for="idea-image2" class="form-label" style="font-size: 1.3rem;color: black;">Image 2 *</label>
                                        <input class="form-control" name="idea-image2" type="file" id="idea-image2" required>
                                    </div>
                                    <div class="mb-4">
                                        <label for="idea-image3" class="form-label" style="font-size: 1.3rem;color: black;">Image 3 *</label>
                                        <input class="form-control" name="idea-image3" type="file" id="idea-image3" required>
                                    </div>
                                </div>
                            </div>
                            <input type="submit" name="submit-idea" class="action-button" value="Submit" />
                            <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script type="text/javascript">
    function fetchQues(category){
        // $('#questionField').html("");
        $.ajax({
            type: 'post',
            url: 'ques.php',
            data: {category:category},
            success: function(data){
                $('#questionField').html(data);
            }
        })
    }
</script>
<script src="./multistep/script.js"></script>
<?php include("./student-home-footer.php"); ?>