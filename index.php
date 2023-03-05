<?php 
// Initialize the session
session_start();
 
// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
  header("location: home.php");
  exit;
}


?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Fonts Roboto-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

	<!-- angular js -->
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular-route.js"></script>	
    <style>
      body {
        margin: 0%;
        padding: 0%;
        font-family: 'Roboto', sans-serif;
      }

      h4 {
        font-family: 'Product Sans Medium', sans-serif;
        letter-spacing: 1px;
      }

      #txt {
        letter-spacing: 0.5px;
      }


      .form-control:focus {
        border-color: #0d6efd;
        box-shadow: inset 0 1px 1px rgb(0 0 0 / 8%), 0 0 8px rgb(13 110 253 / 46%);
      }

      @media only screen and (max-width: 767px) {
        body {
          background-color: lightblue;
        }

        #hide {
          display: none;
        }
      }
    </style>
    <title>Sign up</title>
  </head>
  <body class="bg-light">

    <div class="container mt-5 p-0 m-auto border rounded shadow-sm p-3 mb-5 bg-body rounded rounded-3" style="width:795px;">
      <div class="row p-5 ">
        <div class="col-md-7 ps-3 pe-3">
          <img src="https://www.freepnglogos.com/uploads/google-logo-png/google-logo-png-google-sva-scholarship-20.png" class="rounded mb-2" alt="..." style="height:30px; margin-left:-5px;">
          <div class="row">
            <h4 class="mb-3 mt-1 " style="margin-left: -4px;" class="text-muted">Welcome to</h4>
            <div class="col p-2 m-0 ms-1">
              <h1 class="mb-2">G - Messanger</h1>
			  <span class="text-muted">Create your G - Messanger Account Now</span>
            </div>

            <div class="row p-0 m-0">
              <span class="mt-3 mb-1">
                <small class="text-muted">G - Messenger is a proprietary instant messaging app and platform developed by Stark Verma</small>
              </span>
			 
            </div>
            <br />
            <div class="row mt-4 p-0 m-0">
             <a href="./login.php" class="text-decoration-none">
				<button type="button" class=" btn btn-primary fw-normal text-end"> Log In Now</button></a>
			</div>
              <div class="col d-flex justify-content-end p-0 m-0 me-2">
            </div>
          </div>
        </div>
        <div class="col-md-5 p-0 m-0 d-flex align-items-center">
          <div class="align-items-center" id="hide">
            <img src="assets/images/imgg12.png" class="rounded mx-auto d-block" alt="..." style="height:260px; transform: rotateY(180deg);">
            <br />
            <p class="text-center ps-4 pe-4 text-muted" style="margin-top:-18px;">One account. All of Google working for you.</p>
          </div>
        </div>
      </div>
    </div>
    <p class="text-center text-muted">Crafted with love by <a href="https://starkverma.blogspot.com/" class="text-decoration-none">Stark Vemra</a>
    </p>
    <p class="text-center text-muted">Github: <a href="https://github.com/starkverma111" class="text-decoration-none">starkverma111</a>
    </p>

  </body>
</html>

