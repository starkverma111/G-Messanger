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
    <!-- Google Sas Fonts  heading -->

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
    <title>Log In</title>
  </head>
  <body class="bg-light" ng-app="myApp">
  <div ng-controller="Alogin">
    <div class="container mt-5 p-0 m-auto border rounded shadow-sm p-3 mb-5 bg-body rounded rounded-3" style="width:795px;">
      <div class="row p-5 ">
        <div class="col-md-7 ps-3 pe-3">
          <img src="https://www.freepnglogos.com/uploads/google-logo-png/google-logo-png-google-sva-scholarship-20.png" class="rounded mb-2" alt="..." style="height:30px; margin-left:-5px;">
          <div class="row">
            <h4 class="mb-3 mt-1 " style="margin-left: -4px;">Login your Google Account</h4>

            <div class="p-2">
              <label for="exampleInputPassword1" class="form-label">Email address</label>
              <input type="email" class="form-control p-2" id="email" ng-model="email">
            </div>
			<div class="col p-2 m-0">
                <label for="exampleInputEmail1" class="form-label">Password</label>
                <input type="{{inputType}}" class="form-control p-2" ng-model="password">
              </div>
            <div class="row p-0 m-0">

              <span class="mt-1 mb-1">
                <small class="text-muted">Use 8 or more characters with a mix of letters, numbers & symbols</small>
              </span>
				<p ng-bind="heading" class="text-danger"></p>
              <div class="form-check p-0 m-0  mt-2 mb-1">
                <input class="form-check-input ms-2" type="checkbox" value="" id="flexCheckDefault" ng-click="show();">
                <label class="form-check-label ps-3" for="flexCheckDefault"> Show password</label>
              </div>
            </div>
            <br />
            <div class="row mt-4 p-0 m-0">
              <div class="col text-primary fw-bold d-flex align-items-center " id="txt"> <a href="./signup.php" class="text-decoration-none">Sign up instead</a></div>
              <div class="col d-flex justify-content-end p-0 m-0 me-2">
                <button type="button" class=" btn btn-primary fw-normal text-end" id="btn" ng-click="login()">Log In</button>
              </div>
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

</div>
	
  </body>
</html>


<script>
 var app = angular.module("myApp", ["ngRoute"]);
 //this function for Login...	
		app.controller("Alogin", function($scope, $http, $timeout, $location, $window){ 
		$scope.login = function() {
				$http.post("verify_login.php", {
					'email': $scope.email, //$scope.email GET DATA FROM YOUR HTML FORM
					'password': $scope.password //$scope.password GET DATA FROM YOUR HTML FORM						

				}).then(function(response) {
					//console.log(response);
					//alert(response.data.message);
					$scope.email = null;  
					$scope.password = null;
					
						if(response.data.message=="Yes"){
							 $window.location.href = './home.php';
							
						}else{
							$scope.heading = response.data.message;
							$timeout(function () {
							   $scope.heading = "";
								}, 2000);	
						}

				}, function(error) {
					alert("Sorry! Data Couldn't be inserted!");
				});
			}


// Set the default value of inputType
	$scope.inputType = 'password';
  
// Hide & show password function
  $scope.show = function(){
    if ($scope.inputType == 'password')
      $scope.inputType = 'text';
    else
      $scope.inputType = 'password';
  }

 }); 
</script>