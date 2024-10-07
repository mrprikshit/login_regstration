<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WCS || Home</title>
    <link rel="stylesheet" href="stylesheets/style.css">
    <link rel="stylesheet" href="stylesheets/responsive.css">
    <!-- link the icons file -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- link the bootstrap cdn -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">WCS</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Dropdown
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                    </li>
                </ul>
                <button class="p-1 btn btn-outline-success rounded-1" type="submit" data-bs-toggle="modal"
                    data-bs-target="#exampleModal2"><i class="bi bi-box-arrow-in-right"></i> Login</button>
                <button class="ms-2 px-1 p-1 btn btn-outline-primary rounded-1" type="submit" data-bs-toggle="modal"
                    data-bs-target="#exampleModal"><i class="bi bi-person-fill"></i> Registration</button>
            </div>
        </div>
        <!-- Rigistration Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Register now</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="action.php" method="POST" enctype="multipart/form-data">
                            <input class="form-control mb-2" name="name" type="text" placeholder="Name"
                                aria-label="default input example">
                            <input class="form-control mb-2" name="email" type="text" placeholder="Email"
                                aria-label="default input example">
                            <input class="form-control mb-2" name="password" type="password" placeholder="Password"
                                aria-label="default input example">
                            <input class="form-control mb-2" name="mobile" type="text" placeholder="Phone no."
                                aria-label="default input example">
                            <div class="mb-3">
                                <label for="formFile" class="form-label">Picture</label>
                                <input class="form-control" name="pic" type="file" id="formFile">
                            </div>
                            <button type="submit" class="btn btn-primary">Register Now</button>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <p><b>Note:- </b>Enter your correct information</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Login Modal -->
        <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Login now</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="login.php" method="POST">
                            <input class="form-control mb-2" name="logemail" type="email" placeholder="Email"
                                aria-label="default input example">
                            <input class="form-control mb-2" name="logpassword" type="password" placeholder="Password"
                                aria-label="default input example">
                            <button type="submit" class="btn btn-primary">Login</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <!-- header end -->
    <!-- main start -->
    <!-- link the bootstrap sctipt file -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>
