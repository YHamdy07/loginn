<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main Page</title>

    <!--bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    
    <style>
        a{
            font-size: 16px;
            font-weight: 600;
            color: #fff;
        }
        .mynav{
            font-size:13px;
        }

        .mobileR i, .socialI i{
            color: #7200cc;
        }

        @media  screen and (max-width:540px){
            .mobieR{
                text-align: center;
            }
        }


    </style>

</head>
<body>

    <div class= "mynav vorder-bottem py-2 bg-light">
        <div class="container">
            <div class="row">
                <div class="mobileR col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                    <span class="d-done d-lg-inline-block d-md-inlineblock d-sm-inline-bolck d-xs-none me-3"><i class="fa-solid fa-envelope"></i><strong> info@AkhbarElyoum.com</strong></span>
                    <span class="me-3"><i class="fa-solid fa-phone"></i><strong> 02-01234567890</strong></span>

                </div>
                <div class="socialI col-lg-6 col-md-6 col-sm-12 col-xs-12 d-done d-lg-inline-block d-md-inlineblock d-sm-inline-bolck d-xs-none text-end">
                 <span><a href='#'><i class="fa-brands fa-facebook me-2"></i></a></span>
                 <span><a href='#'><i class="fa-brands fa-square-instagram me-2"></i></a></span> 
                 <span><a href='#'><i class="fa-brands fa-youtube me-2"></i></a></span>  
                 <span><a href='#'><i class="fa-brands fa-whatsapp me-2"></i></a></span>                
                </div>
            </div>
        </div>
    </div>

    <!--NavBar -->
    <nav class="navbar navbar-expand-lg sticky-top navbar-dark bg-dark bg-dark p-3 shadow-sm">
        <div class="container">
            <a class="navbar-band" href="#"><img src="logo3.png" height="35" alt="akhbarLogo" style="pedding-left: 20px;"></a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a href="" class="nav-link mx-2 active">Home</a>
                    </li> 
                    <li class="nav-item">   
                        <a href="" class="nav-link mx-2">About Academy</a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link mx-2">faculties</a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link mx-2">Student</a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link mx-2">Contact Us</a>                        
                    </li>
                    <li class="nav-item">
                        <a href="changepass.php" class="nav-link mx-2">Change Password</a>                        
                    </li>
                </ul>

                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a href="logout.php" class="nav-link mx-2"><i class="fa-solid fa-user me-3"></i><strong>Logout</strong></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <br>
    <h1>WELCOME STUDENT</h1>

</body>
</html>