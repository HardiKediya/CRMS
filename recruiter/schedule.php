<?php
session_start();
include '../dbconnect.php';

if (!isset($_SESSION["recruiter"])) {
    header("location:recruiterLogin.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap Links -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="apple-touch-icon" href="/docs/5.2/assets/img/favicons/apple-touch-icon.png" sizes="180x180">




    <link rel="stylesheet" type="text/css" href="css/navbar.css">
    <script src="https://kit.fontawesome.com/a5bda29c88.js" crossorigin="anonymous"></script>

    <title>Schedule</title>
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar sticky-top navbar-expand-lg  navbar-light bg-white border-bottom p-3 shadow-sm rounded">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><img src="./img/logo.png" width="60%" height="auto" alt=""></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="recruiterDashboard.php">Dashboard</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link " href="rjob.php">Job</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="application.php">Application</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="schedule.php   ">Schedule</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">Logout</a>
                    </li>


                    <li class="nav-item">
                        <div class="profile_pic" style=" width: 50px;
    height: auto;">
                            <a class="nav-link" href="recruiterEditProfile.php" id="image-link">
                                <img src="Profile/<?php echo $_SESSION['recruiterProfilepic']; ?>" id="image-1" style="width: 40px; height: auto;" alt=""></a>
                            <a class="nav-link" href="recruiterEditProfile.php" id="edit_profile_button">Edit Profile</a>
                        </div>
                    </li>
                </ul>

            </div>
        </div>
    </nav>

    <style>
        .list {
            width: 100%;
            min-height: 20vh;
            /* background-color: rebeccapurple; */
            padding: 30px;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }

        .filte-section {
            width: 100%;
            height: auto;
            text-align: right;

        }
    </style>
    <!-- Main Content -->
    <div class="container" style="min-height: 75vh; padding: 30px;">
        <h3>List of Schedule</h3>
        <div class="row w-100 ">
            <div class="col-sm" style="padding-left: 32px;">
                <a class="btn btn-primary" href="scheduleForm.php" role="button">Add Schedule</a>
            </div>
            <div class="col-sm" style="padding-left: 400px;">
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search Schedule using Job Id" aria-label="Search">
                    <button class="btn btn-outline-primary" type="submit">Search</button>
                </form>
            </div>
        </div>
        <div class="list">

            <!-- Schedule Card  -->
            <div class="card" style="width: 30rem; min-height: 22rem; max-height: 22rem; margin-bottom: 10px;">
                <div class="card-body">
                    <h5 class="card-title">Schedule for Python</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Virtual Placement Schedule TCS</h6>
                    <p class="card-text">Test Process:- <br>Online Test ( Test link Provide in email just before 15 min ) <br>
                        Interview <br> Total Question: 34 <br>

                        Question Pattern – Attention to detail, Reasoning, OOPS, Pseudo Programming, Coding
                        <br>
                        Marks: 200
                        <br>
                        Thank you
                    </p>
                    <a href="#" class="card-link">Update schedule</a>
                    <a href="#" class="card-link">Delete schedule</a>
                </div>
            </div>

            <!-- Schedule Card  -->
            <div class="card" style="width: 30rem; min-height: 22rem; max-height: 22rem;">
                <div class="card-body">
                    <h5 class="card-title">Schedule for Python</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Virtual Placement Schedule TCS</h6>
                    <p class="card-text">Test Process:- <br>Online Test ( Test link Provide in email just before 15 min ) <br>
                        Interview <br> Total Question: 34 <br>

                        Question Pattern – Attention to detail, Reasoning, OOPS, Pseudo Programming, Coding
                        <br>
                        Marks: 200
                        <br>
                        Thank you
                    </p>
                    <a href="#" class="card-link">Update schedule</a>
                    <a href="#" class="card-link">Delete schedule</a>
                </div>
            </div>

            <!-- Schedule Card  -->
            <div class="card" style="width: 30rem; min-height: 22rem; max-height: 22rem;">
                <div class="card-body">
                    <h5 class="card-title">Schedule for Python</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Virtual Placement Schedule TCS</h6>
                    <p class="card-text">Test Process:- <br>Online Test ( Test link Provide in email just before 15 min ) <br>
                        Interview <br> Total Question: 34 <br>

                        Question Pattern – Attention to detail, Reasoning, OOPS, Pseudo Programming, Coding
                        <br>
                        Marks: 200
                        <br>
                        Thank you
                    </p>
                    <a href="#" class="card-link">Update schedule</a>
                    <a href="#" class="card-link">Delete schedule</a>
                </div>
            </div>




        </div>
    </div>


    <!-- footer -->
    <div class="container mt-5">
        <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
            <div class="col-md-4 d-flex align-items-center">
                <a href="/" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
                    <svg class="bi" width="30" height="24">
                        <use xlink:href="#bootstrap"></use>
                    </svg>
                </a>
                <span class="text-muted">© 2023, GUNI Placementcell.</span>
            </div>

            <ul class="nav col-md-4 justify-content-end list-unstyled d-flex ">
                <li class="ms-3"><a class="text-muted" href="#"><i class="fa-brands fa-twitter"></i></a></li>
                <li class="ms-3"><a class="text-muted" href="#"><i class="fa-brands fa-instagram"></i></a></li>
                <li class="ms-3"><a class="text-muted" href="#"><i class="fa-brands fa-facebook"></i></a></li>
            </ul>
        </footer>
    </div>


    <script src="../jquery/jquery-3.6.3.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
</body>

</html>