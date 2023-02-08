<?php include("./functions.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
    <link rel="stylesheet" href="./test.css">
    <title>Document</title>
</head>

<body>


    <div class="album py-5 bg-light">
        <div class="container">

            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                <div class="col">
                    <div class="card shadow-sm">
                        <img class="bd-placeholder-img card-img-top" width="100%" height="225" focusable="true" src="https://www.w3schools.com/howto/img_forest.jpg" alt="">
                        <div class="card-body">
                            <h2 class="card-title">Hello World!</h2>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <button type="button" class="btn mb-2 mb-md-0 btn-secondary btn-block btn-round" disabled>Agriculture</button>
                                    <button type="button" class="btn mb-2 mb-md-0 btn-secondary btn-block btn-round" disabled>AI/ML</button>                       
                                </div>
                                <small class="text-muted">9 mins</small>
                            </div>
                        </div>
                    </div>
                </div>

                <?php getStudentIdeas() ?>
                
            </div>
        </div>
    </div>




    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
</body>

</html>