</head>

<body>

    <div class="main-container d-flex">
        <div class="sidebar" id="side-nav">
            <div class="header-box px-2 pt-3 d-flex justify-content-center">
                <h1 class="fs-4"><!--<span class="bg-white text-dark rounded shadow px-2 me-2"></span>--><span class="text-white fs-3">Innovative Ideas</span></h1>
                <button class="btn d-md-none d-block ms-2 close-btn px-1 py-0 text-white"><i class="far fa-stream"></i></button>
            </div>
            <hr class="h-color mx-2">
            <ul class="list-unstyled px-2  d-flex flex-column justify-content-center">
                <li class="mt-4 <?php if($page == 'view-idea'){echo 'active';} ?> "><a href="view-idea.php" class="text-decoration-none px-3 ms-4 py-2 fs-5 d-block d-flex  align-items-center"><i class="fas fa-eye me-2"></i>View Idea</a></li>
                <li class="mt-4 <?php if($page == 'select-idea'){echo 'active';} ?>"><a href="select-idea.php" class="text-decoration-none px-3 ms-4 py-2 fs-5 d-block d-flex  align-items-center"><i class="far fa-upload me-2"></i>Grade Idea</a></li>
                <li class="mt-4"><a href="#" class="text-decoration-none px-3 ms-4 py-2 fs-5 d-block d-flex  align-items-center">
                        <span><i class="fal fa-comment me-2"></i>Messages</span>
                    </a>
                </li>
                <li class="mt-4 <?php if($page == 'meeting'){echo 'active';} ?>"><a href="../zoom_meeting_php/index.php" class="text-decoration-none px-3 ms-4 py-2 fs-5 d-block d-flex  align-items-center"><i class="far fa-video me-2"></i>Meeting</a></li>
            </ul>
            <hr class="h-color mx-2">
            <ul class="list-unstyled px-2">
                <li class="mt-4"><a href="selector-logout.php" class="text-decoration-none px-3 ms-4 py-2 fs-5 d-block d-flex  align-items-center"><i class="far fa-sign-out me-2"></i>Logout</a></li>
            </ul>
        </div>
        <div class="content">
            <nav class="navbar navbar-expand-md bg-light">
                <div class="container-fluid">
                    <div class="d-flex justify-conteent-between d-md-none d-block">
                        <a class="navbar-brand fs-4" href="#">Innovative Ideas</a>
                        <button class="btn px-1 open-btn"><i class="fal fa-stream"></i></button>
                    </div>
                    
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-between" id="navbarSupportedContent">
                    <div> <h2>Welcome <?php echo $_SESSION["selecusername"]; ?> </h2> </div>    
                        <ul class="navbar-nav mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Profile</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="selector-logout.php">Logout</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            