<?php
session_start();

$msg="";
include('config.php');

if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $code = $_POST['code'];
    $newpassword = $_POST['newpassword'];
    $confirmpassword = $_POST['confirmpassword'];

    $sql="SELECT * FROM tbl_user WHERE username='{$username}' AND code='{$code}'";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);

    if($num != 1){                             //notfound
        $msg = "<div class='alert alert-info'> No such Username or code found</div>";
    }
    else{
        if($newpassword != $confirmpassword){
            $msg = "<div class='alert alert-danger'> Password do not match</div>";
        }
        else{
            while ($row = mysqli_fetch_assoc($result)){
                $id = $row['id'];
            }
            $sql_password_f ="UPDATE tbl_user SET password = '$newpassword' WHERE id = '$id'";
            $sql_password_change_f_q = mysqli_query($conn,$sql_password_f);
            $msg = "<div class='alert alert-success'> Password has been changed successfully <a href= 'login.php'>Click Here</a>to continue login</div>";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>

    <!--CSS FILE-->
    <link rel="stylesheet" href="register.css" class="style">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <style>
        .col-sm-12{
            padding-bottom: 20px;
        }
        .btn{
            padding: 12px 60px 12px 60px;
            border-radius: 23px !important;
            border: none !important;
        }
    </style>

</head>
<body>
    
    <section>
        <div class="box-top">
            <img class= "logo" src="logo3.png" alt="">
            <h5>Forgot Password</h5>
            <?php echo $msg ;?>
        </div>
        <hr>

        <form class="form" method="post" action="">  
        <div class="row justify-content-center">
                <div class="col-sm-12">
                    <label for="username" class="control-label">Username*</label>
                    <input type="text" class="form-control" name="username" placeholder="Enter Username">
                </div>
            </div>                  
            <div class="row justify-content-center">
                <div class="col-sm-12">
                    <label for="code" class="control-label">Enter Verfication Code*</label>
                    <input type="text" class="form-control" name="code" placeholder="Enter Code" required>
                </div>
            </div>
            
            <div class="row justify-content-center">
                <div class="col-sm-12">
                    <label for="newpassword" class="control-label">New Password*</label>
                    <input type="password" class="form-control" name="newpassword" placeholder="Enter New Password" required>
                </div>
            </div>
            
            <div class="row justify-content-center">
                <div class="col-sm-12">
                    <label for="confirmpassword" class="control-label">Confirm Password*</label>
                    <input type="password" class="form-control" name="confirmpassword" placeholder="Confirm Password">
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-sm-12">
                   <button type="submit" class="btn btn-warning shadow" name="submit" value="submit">Forgot Password</button>
                </div>
            </div> 
        </form>
        <hr>
        <div class="col float-start">
            <p>Have an account! <a href="login.php">Login</a></p>
        </div>
        <div class="col float-end">
           <a href="main.php" style = "background-color: transparent;">Home</a>
        </div>
    </section>
</body>
</html>