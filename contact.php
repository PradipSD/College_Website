
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

  <title>Deogiri College Aurangabad, Maharashtra</title>
</head>

<body>



<!-- Navbar -->

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <img style="margin-right: 10px;" src="https://mspmandal.in/img/msp-min.png" height="60px" width="75px">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul style="font-size: 18px;" class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="./index.html">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="https://www.mspmandal.in/">About MSP</a>
          </li>


          <li class="nav-item">
            <a class="nav-link" href="./contact.html">Contact Us</a>
          </li>
          
        </ul>






        <!-- Sign IN and Sign UP -->


        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-primary" type="submit">Search</button>
        </form>

        <!-- Sign Up modal -->
        <br>
        <button type="button" class="btn btn-primary up mx-2" data-bs-toggle="modal" data-bs-target="#signupModal">
          Sign Up
        </button>

        <!-- Modal -->
        <div class="modal fade" id="signupModal" tabindex="-1" aria-labelledby="signupModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="signupModalLabel">Create a new account</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                
              
            
                <form>
                  <div class="md-3">
                    <label for="validationCustom01" class="form-label"> Full Name</label>
                    <input type="text" class="form-control" id="validationCustom01" required>
                    <div class="valid-feedback">
                      Looks good!
                    </div>
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone
                      else.</div>
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1">
                  </div>
                  <div class="mb-3">
                    <label for="cexampleInputPassword1" class="form-label"> Confirm Password</label>
                    <input type="cpassword" class="form-control" id="cexampleInputPassword1">
                  </div>

                  <button type="submit" class="btn btn-primary">Submit</button>
                </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>

        <!-- Sign In modal -->
        <button type="button" class="btn btn-primary " data-bs-toggle="modal" data-bs-target="#signinModal">
          Sign In
        </button>

        <!-- Modal -->
        <div class="modal fade" id="signinModal" tabindex="-1" aria-labelledby="signinModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="signinModalLabel">Sign In your account</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <form>
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone
                      else.</div>
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1">
                  </div>

                  <button type="submit" class="btn btn-primary">Submit</button>
                </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

              </div>
            </div>
          </div>
        </div>


      </div>
    </div>
  </nav>


 


  <!-- Succesfull Message -->

    <h3 class="text-center" >form submitted sucessfully!</h3>







    <!-- Footer -->
    

    <div class="container" style="user-select: auto;">
      <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top"
        style="user-select: auto;">
        <div class="col-md-4 d-flex align-items-center" style="user-select: auto;">
          <a href="/" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1" style="user-select: auto;">
            <svg class="bi" width="30" height="24" style="user-select: auto;">
              <use xlink:href="#bootstrap" style="user-select: auto;"></use>
            </svg>
          </a>
          <span class="text-muted" style="user-select: auto;">© 2022-2023 Pradip Dound, DIEMS</span>
        </div>

        <ul class="nav col-md-4 justify-content-end list-unstyled d-flex" style="user-select: auto;">
          <li class="ms-3" style="user-select: auto;"><a class="text-muted" href="https://www.github.com/"
              style="user-select: auto;"><svg class="bi" width="24" height="24" style="user-select: auto;">
                <i class="bi bi-github"></i>
              </svg></a></li>
          <li class="ms-3" style="user-select: auto;"><a class="text-muted" href="https://www.instagram.com/"
              style="user-select: auto;"><svg class="bi" width="24" height="24" style="user-select: auto;">
                <i class="bi bi-instagram"></i>
              </svg></a></li>
          <li class="ms-3" style="user-select: auto;"><a class="text-muted" href="https://www.facebook.com/"
              style="user-select: auto;"><svg class="bi" width="24" height="24" style="user-select: auto;">
                <i class="bi bi-facebook"></i>
              </svg></a></li>
        </ul>
      </footer>
    </div>

  </div>
  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>







<!-- PHP Code -->


<?php

$fname  = '';
$lname  = '';
$email  = '';
$number = '';
$textarea   = '';


if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $fname      =  $_POST["fname"];
    $lname      =  $_POST["lname"];
    $email      =  $_POST["email"];
    $number     =  $_POST["number"];
    $textarea   =  $_POST["textarea"];
}

if(!empty($fname)||!empty($lname)||!empty($email)||!empty($number)||!empty($textarea)){

$con = mysqli_connect('localhost','id20329867_deogiridatabase','Pradipdound@2272002','id20329867_dietmsdb');

if($con)
{
    // echo "Connected succesfully!";

    $sql = "insert into `contacts`(fname,lname,email,number,textarea)values( '$fname','$lname','$email','$number','$textarea')";

    $result = mysqli_query($con,$sql);

    if($result)
    {
        // echo "Form is submitted succesfully!";
       
        // echo '<script>alert("form is submitted sucessfully!")</script>';

        echo '<script> if($result){ document.getElementById("show").style.display="block";}</script>';       
    }
    else
    {
        die(mysqli_error($con));
    }
    // header("Location: http://localhost/deogiri%20website/contact.html");

}
else
{
    die(mysqli_error($con));
}
}

?>