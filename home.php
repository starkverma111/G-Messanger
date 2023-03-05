<?php 
// Turn off error reporting
error_reporting(0);


// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}


$miy = $_SESSION["id"];

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Google Fonts Roboto-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <!-- angular js -->
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular-route.js"></script>
	
	<!--you can not delete jquery  -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

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

      /* width */
      ::-webkit-scrollbar {
        width: 10px;
      }

      /* Track */
      ::-webkit-scrollbar-track {
        background: #f1f1f1;
      }

      /* Handle */
      ::-webkit-scrollbar-thumb {
        background: #BEBEBE;
      }

      /* Handle on hover */
      ::-webkit-scrollbar-thumb:hover {
        background: #A8A8A8;
      }

      #bbs {
        -ms-transform: rotate(40deg);
        /* IE 9 */
        transform: rotate(40deg);
      }

      .form-control:focus {
        border-color: #cccccc;
        -webkit-box-shadow: none;
        box-shadow: none;
      }

      input {
        text-indent: 10px;
      }
    </style>
    <title>Home</title>
  </head>
  
   <!-- *******************************
				ng- app in a body
	 ************************************************-->	
<body class="bg-light" ng-app="myApp">
 
    <div class="container mt-5 p-0 m-auto border rounded shadow-sm p-3 mb-5 bg-body rounded rounded-3" style="width:1100px;">
      <div class="row p-0 " style="margin-top: -8px;">
        <div class="col-md-4 mb-2 p-0 m-0 border-end border-3 border-light ">
          <div class=" d-flex border-bottom border-3 border-light p-0 m-0 ms-1 me-1 ">
            <div class="p-2">
              <img src="https://mir-s3-cdn-cf.behance.net/project_modules/max_1200/d2abd662597191.5a9589b09ddf5.jpg" 
			  class="rounded" style="height:60px;" onclick="location.href = './home.php';" >
            </div>
            <div class="me-auto p-2 ">
              <span id="c" class="text-capitalize">{{aname}}</span>
              <br>
              <span id="status"class="text-break">Live a Life with us</span>
            </div>
            <div class="p-2 d-flex align-items-start">
              <button class="border-0 btn-light " type="button" id="mes2" data-bs-toggle="modal" data-bs-target="#exampleModal" style="background-color:#fff;">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-app-indicator" viewBox="0 0 16 16">
                  <path d="M5.5 2A3.5 3.5 0 0 0 2 5.5v5A3.5 3.5 0 0 0 5.5 14h5a3.5 3.5 0 0 0 3.5-3.5V8a.5.5 0 0 1 1 0v2.5a4.5 4.5 0 0 1-4.5 4.5h-5A4.5 4.5 0 0 1 1 10.5v-5A4.5 4.5 0 0 1 5.5 1H8a.5.5 0 0 1 0 1H5.5z"></path>
                  <path d="M16 3a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"></path>
                </svg>
              </button> &nbsp;&nbsp;
             



			 <button class="border-0 btn-light " type="button" id="mes" ng-controller="gomain"
			  style="background-color:#fff;" data-bs-toggle="modal" data-bs-target="#exampleModalp" 
			 ng-click="go('/main')"
			  
			> 
			  
			  
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-gear-fill" viewBox="0 0 16 16">
                  <path d="M9.405 1.05c-.413-1.4-2.397-1.4-2.81 0l-.1.34a1.464 1.464 0 0 1-2.105.872l-.31-.17c-1.283-.698-2.686.705-1.987 1.987l.169.311c.446.82.023 1.841-.872 2.105l-.34.1c-1.4.413-1.4 2.397 0 2.81l.34.1a1.464 1.464 0 0 1 .872 2.105l-.17.31c-.698 1.283.705 2.686 1.987 1.987l.311-.169a1.464 1.464 0 0 1 2.105.872l.1.34c.413 1.4 2.397 1.4 2.81 0l.1-.34a1.464 1.464 0 0 1 2.105-.872l.31.17c1.283.698 2.686-.705 1.987-1.987l-.169-.311a1.464 1.464 0 0 1 .872-2.105l.34-.1c1.4-.413 1.4-2.397 0-2.81l-.34-.1a1.464 1.464 0 0 1-.872-2.105l.17-.31c.698-1.283-.705-2.686-1.987-1.987l-.311.169a1.464 1.464 0 0 1-2.105-.872l-.1-.34zM8 10.93a2.929 2.929 0 1 1 0-5.86 2.929 2.929 0 0 1 0 5.858z" />
                </svg>
              </button>&nbsp;&nbsp; 
			  
			  
			  <div class="btn-group dropstart">
                <button type="button" class="border-0 btn-light" data-bs-toggle="dropdown" aria-expanded="false" style="background-color:#fff;">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-three-dots-vertical" viewBox="0 0 16 16">
                    <path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"></path>
                  </svg>
                </button>
                <ul class="dropdown-menu">
                  <li>
                    <a class="dropdown-item" style="cursor: pointer;" onclick="location.href = './verify_logout.php';">Logout</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
<div ng-controller="All_users">         
		 <div class="p-2 ms-2 me-4 mb-1 mt-2">
            <input type="text" class="form-control p-2 ps-2" style="border-radius:50px;" placeholder="Search" ng-model="test" />
          </div>
          <div class="overflow-auto ms-2 me-2" style="height:560px;">
  
 <!-- *******************************
				All register users show here
	 ************************************************-->			
	
		  <div ng-repeat="x in names | filter:test">
		  <a href="#" ng-click="selectInfo(x.id, x.fname, x.lname, x.pic, x.status)" class="text-decoration-none text-dark">
<div class=" d-flex border-bottom me-2">
							<div class="p-2" id="gi" >
							  <img ng-src="{{x.pic}}" class="rounded-circle border border-3" 
							  style="width:60px; height:60px; object-fit: cover;" 
							 data-bs-toggle="modal" data-bs-target="#getimage" />
							</div>
							<div class="me-auto p-2 ">
							  <span id="name" class="fw-bold text-capitalize"  >{{x.fname}} {{x.lname}}</span>
							  <br>
							  <span class="text-muted text-lowercase" style="font-size:14px;">{{x.email}}</span>
							</div>
							<div class="p-2 me-2 d-flex align-items-center text-muted">
							  <span style="font-size:12px;">18:08 PM</span>
							</div>
						  </div>
					</a>
						
		 </div>
		
	</div>
	
</div>
        </div>
        <div class="col-md-8 p-0 m-0">
          <div class=" d-flex border-bottom border-3 border-light">
            <div class="p-2">
              <img ng-src="{{gt_pic}}" src="https://mir-s3-cdn-cf.behance.net/project_modules/max_1200/d2abd662597191.5a9589b09ddf5.jpg" class="rounded-circle border border-4" style="height:60px; width:60px; object-fit: cover;"/>
            </div>
            <div class="me-auto p-2 ">
             <span id="set_name" class="text-capitalize"></span> 
			  <span class="text-capitalize fw-bold">{{gt_fname}} {{gt_lname}} </span>
			 
              <br>
              <span id="status">{{gt_status}}</span>
            </div>
			
            <div class="p-2 d-flex align-items-start">
              <div class="btn-group dropstart">
                <button type="button" class="border-0 btn-light" data-bs-toggle="dropdown" aria-expanded="false" style="background-color:#fff;">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-three-dots-vertical" viewBox="0 0 16 16">
                    <path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"></path>
                  </svg>
                </button>
				
                <ul class="dropdown-menu">
                  <li>
                    <a class="dropdown-item" href="#">Report</a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="#" >Block</a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="#"ng-controller="A_delete_chat" ng-click="delete_chat()">Clear chat</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <br />
		  
		  
		  
		  
		 
  <div class="overflow-auto ms-2 me-2" style="height:530px;" id="srl">
  
 
  
 <!-- *******************************
				All the chat show here
	 ************************************************-->

<div ng-controller="ppo">
<p id="hideimg">  <img src="./assets/images/icon.jpg" class="rounded mx-auto d-block mt-5"  style="height: 400px;"/> </p>

	<div id="tableee" > </div>
</div>
</div>
        
		
		 <div ng-controller="messagess">  
		 
		 <div class="d-flex  mt-3 m-0 border ms-2 me-2" style=" border-radius: 50px 15px 15px 50px;" ng-hide="hideMe" >
            <div class="d-flex flex-fill p-2">
              <input type="text" class="form-control p-3 border-0 rounded" placeholder="Type a message" ng-model="set_message" />
            </div>
            <div class="ms-auto me-3 m-0 d-flex align-items-center" >
              
			  <button type="button" class="btn btn-lg" ng-click="send_btn(x.id)">
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-send" viewBox="0 0 16 16" id="bbs">
                  <path d="M15.854.146a.5.5 0 0 1 .11.54l-5.819 14.547a.75.75 0 0 1-1.329.124l-3.178-4.995L.643 7.184a.75.75 0 0 1 .124-1.33L15.314.037a.5.5 0 0 1 .54.11ZM6.636 10.07l2.761 4.338L14.13 2.576 6.636 10.07Zm6.787-8.201L1.591 6.602l4.339 2.76 7.494-7.493Z" />
                </svg>
              </button>  
			</div>
			  
			  
            </div>
        </div>
        
		
		
		</div>
      </div>
    </div>
    <p class="text-center text-muted">Crafted with love by <a href="https://starkverma.blogspot.com/" class="text-decoration-none">Stark Vemra</a>
    </p>
    <p class="text-center text-muted">Github: <a href="https://github.com/starkverma111" class="text-decoration-none">starkverma111</a>
    </p>
    </div>
	
	
   <!-- *******************************
				boostrap 5 status model box here
	 ************************************************-->	
    <!-- start -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">All User Status</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="d-flex flex-row bd-highlight mb-3">
              <div class="d-flex p-0 m-auto">
                <img src="https://i.pravatar.cc/1500" id="newpic" style="width:400px; height:400px; border-radius:5px;">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
	
	
  <!-- *******************************
				boostrap 5 admin settings model box here
	 ************************************************-->			
	
    <!-- Modal -->
    <div class="modal fade" id="exampleModalp" data-bs-backdrop="static" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" >
      <div class="modal-dialog modal-xl" >
        <div class="modal-content border-0" style="background-color:transparent;">
          <div class="container mt-5 p-0 m-auto border rounded shadow-sm p-3 mb-5 bg-body rounded rounded-3">
            <div class="row p-0 " style="margin-top: -8px;">
              <div class="col-md-4  p-0 m-0 border-end border-3 border-light ">
                <div class=" d-flex border-bottom border-3 border-light p-0 m-0 ms-1 me-1 ">
                  <div class="p-2">
                    <img src="https://mir-s3-cdn-cf.behance.net/project_modules/max_1200/d2abd662597191.5a9589b09ddf5.jpg" class="rounded" style="height:60px;">
                  </div>
                  <div class="me-auto p-2 ">
                    <span id="name">Hey Dear</span>
                    <br>
                    <span id="status">Let's do Some changes</span>
                  </div>
                  <div class="p-2 d-flex align-items-start">
                    <div class="btn-group dropstart">
                      <button type="button" class="border-0 btn-light" data-bs-toggle="dropdown" aria-expanded="false" style="background-color:#fff;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-three-dots-vertical" viewBox="0 0 16 16">
                          <path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"></path>
                        </svg>
                      </button>
                    </div>
                  </div>
                </div>
                <div class="p-2 ms-2 me-2 mb-1 mt-2 bg-light">
                 
				 <!-- this controller for show user data -->
                  <div ng-controller="admin_data">
				  
					<img ng-src="{{apic}}" style="height:200px; width:200px; border-radius:50%;  object-fit: cover;" class="mx-auto d-block mb-3 mt-2" />
                    <h5 class="text-center text-capitalize" ng-bind="aname"></h5>
                    <p class="text-muted text-center text-break" ng-bind="astatus"></p>
                    <p class="text-muted text-center mb- border" ng-bind="aemail"></p>
                  </div>
				   <!-- this controller for show user data -->
				  
                  <ul class="text-capitalize text-decoration-none text-left text-center border border-5 rounded p-0 m-0 ms-4 me-4 mb-5" style="list-style-type: none; background-color:#fff;">
                    <li>
                      <a class="dropdown-item mb-2" href="#!pic">Pic</a>
                    </li>
                    <li>
                      <a class="dropdown-item mb-2" href="#!status">Status</a>
                    </li>
                    <li>
                      <a class="dropdown-item mb-2" href="#!details">Update Details</a>
                    </li>
                    <li>
                      <a class="dropdown-item mb-2" href="#!password">Change Password</a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="col-md-8 p-0 m-0">
                <div class=" d-flex border-bottom border-3 border-light">
                  <div class="p-2">
                    <img src="https://mir-s3-cdn-cf.behance.net/project_modules/max_1200/d2abd662597191.5a9589b09ddf5.jpg" class="rounded-circle" style="height:60px;">
                  </div>
                  <div class="me-auto p-2 align-self-center ">
                    <span id="name">Settings</span>
                  </div>
                  <div class="p-2 d-flex align-items-start">
                    <div class="btn-group dropstart">
                      <button type="button" class="border-0 btn-light fs-3 ps-2 pe-2 rounded btn-close" 
					  data-bs-dismiss="modal" aria-label="Close"
					  ng-controller="goback"  ng-click="gon('/')"
					  
					  ></button>
                    </div>
                  </div>
                </div>
                
				<!-- ALl Div Views Show Here  -->
                <div ng-view="" class="ng-scope"></div>
				<!-- ALl Div Views Show Here  -->
              
			  </div>
            </div>
          </div>
        </div>
      </div>
    </div>

	 <!-- Model end -->

<!-- Modal box for image show in big screen  -->
<div class="modal fade" id="getimage" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header border-0">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      
        <img ng-src="{{gt_pic}}" 
		style="width:400px; height=400px;"  class="rounded mx-auto d-block mb-5" id="bbb" />
     

    </div>
  </div>
</div>









	
	
  </body>
</html>


<!-- ALl Angular js Here with modules..  -->

<script>
  /* ------------------
   Routing start here
  ------------------------ */  
  //Routing  Here...
  var app = angular.module("myApp", ["ngRoute"]);
  app.config(function($routeProvider) {
    $routeProvider.when("/pic", {
      templateUrl: "views/pic.php"
    }).when("/status", {
      templateUrl: "views/status.php"
    }).when("/details", {
      templateUrl: "views/details.php"
    }).when("/password", {
      templateUrl: "views/password.php"
    }).when("/main", {
      templateUrl: "views/main.php"
    })
  });


  /* ------------------
   url change on model box here
  --------------------------------  */  
//this function for button pop up window main page
  app.controller('gomain', function($scope, $location) {
			$scope.go = function ( path ) {
				  $location.path( path );
				}
  });
    
 //this function for popup close remove angular url..
  app.controller('goback', function($scope, $location) {
			$scope.gon = function ( path ) {
				  $location.path( path );
				}
  }); 


  /* ------------------
   get all admin details here
  ----------------------- */  
//this function for Admin data display from php file...
  app.controller('admin_data', function($rootScope, $http, $timeout, $interval) {
	  
	    $rootScope.hideMe = true;
	  
    $interval(function() {
      $http.get("get_admin_details.php").then(function(response) {
        var da = response.data;
        var a = da[0].fname;
        var b = da[0].lname;
        var c = a + " " + b;
		//set all admin data with main id.....
		$rootScope.admin_id = da[0].id;
        $rootScope.aname = c;
        $rootScope.aemail = da[0].email;
        $rootScope.apic = da[0].pic;
        $rootScope.astatus = da[0].status;
      });
    }, 300);
  });


  /* ------------------
   change password here
  ------------------------ */  
  //this function for change password...	
  app.controller("A_change_password", function($scope, $http, $timeout) {
    $scope.email = $scope.aemail;
	
    $scope.changepw = function() {
      $http.post("verify_changepw.php", {
        'email': $scope.email, //$scope.fname GET DATA FROM YOUR HTML FORM
        'npassword': $scope.npassword, //$scope.fname GET DATA FROM YOUR HTML FORM
        'vpassword': $scope.vpassword //$scope.fname GET DATA FROM YOUR HTML FORM
		
      }).then(function(response) {
        $scope.showw = response.data.message;
        $scope.npassword = null;
        $scope.vpassword = null;
        $timeout(function() {
          $scope.showw = "";
        }, 2000);
      }, function(error) {
        alert("Sorry! Data Couldn't be inserted!");
      });
    }
	
// Set the default value of inputType
	$scope.inputType = 'password';
  
// Hide & show password function
  $scope.showpw = function(){
    if ($scope.inputType == 'password')
      $scope.inputType = 'text';
    else
      $scope.inputType = 'password';
  }
  
 // Hide & show password function
  $scope.resetform = function(){
    $scope.npassword=null;
	 $scope.vpassword=null;
  }	
	

});


  /* ------------------
   update admin details here
  ------------------------ */  

  //this function for Update admin Details...	
  app.controller("A_update_details", function($scope, $http, $timeout) {
    $scope.email = $scope.aemail;
    $scope.changeDetails = function() {
      $http.post("verify_update_details.php", {
        'fnamee': $scope.fnamee, //$scope.fname GET DATA FROM YOUR HTML FORM
        'lnamee': $scope.lnamee, //$scope.fname GET DATA FROM YOUR HTML FORM
        'email': $scope.email, //$scope.fname GET DATA FROM YOUR HTML FORM
        'ck_password': $scope.ck_password //$scope.fname GET DATA FROM YOUR HTML FORM
      }).then(function(response) {
        //var mess = response.data.message;
        $scope.showe = response.data.message;
        $scope.fnamee = null;
        $scope.lnamee = null;
        $scope.ck_password = null;
        $timeout(function() {
          $scope.showe = "";
        }, 2000);
      }, function(error) {
        alert("Sorry! Data Couldn't be inserted!");
      });
    }
	

	
// Set the default value of inputType
	$scope.inputType = 'password';
  
// Hide & show password function
  $scope.showpw = function(){
    if ($scope.inputType == 'password')
      $scope.inputType = 'text';
    else
      $scope.inputType = 'password';
  }
  
 // Hide & show password function
  $scope.resetForm = function(){
    $scope.fnamee=null;
	 $scope.lnamee=null;
	 $scope.ck_password=null;
  }	
	
});

  /* ------------------
   Set & update Status here
  ----------------------------- */  
  //this function for Set Status...	
  app.controller("A_status", function($scope, $http, $timeout) {	
    $scope.statuss = function() {
      $http.post("verify_status.php", {
        'email': $scope.aemail, //$scope.fname GET DATA FROM YOUR HTML FORM
        'status': $scope.astatus //$scope.fname GET DATA FROM YOUR HTML FORM
      }).then(function(response) {
        //var mess = response.data.message;
        $scope.showee = response.data.message;
        $timeout(function() {
          $scope.showee = "";
        }, 2000);
      }, function(error) {
        alert("Sorry! Data Couldn't be inserted!");
      });
    }
  });


  /* ------------------
   delete chat here..
  ------------------------ */  
 //this function for Set delete chatttttt... but ony yours...	
  app.controller("A_delete_chat", function($scope, $http, $timeout) {
 
    $scope.delete_chat = function() {
		//console.log($scope.admin_id);
		//console.log($scope.gt_id);
      $http.post("verify_delete_chat.php", {
        'admin_id': $scope.admin_id, //$scope.fname GET DATA FROM YOUR HTML FORM
        'frnd_id': $scope.gt_id //$scope.fname GET DATA FROM YOUR HTML FORM
      }).then(function(response) {
       // console.log(response.data.message);
       

      }, function(error) {
        alert("Sorry! Data Couldn't be inserted!");
      });  
    }
  });  
   
  
  
 
  /* ------------------
   set profile pic here..
  ------------------------ */  
 //this function for Set pic...	 you need to work on zoom pic
  app.controller('A_uploadpic', ['$scope', '$http','$timeout', function($scope, $http, $timeout) {
    $scope.upload = function() {
      var fd = new FormData();
      var files = document.getElementById('file').files[0];
      fd.append('file', files);
      // AJAX request
      $http({
        method: 'post',
        url: 'verify_upload.php',
        data: fd,
        headers: {
          'Content-Type': undefined
        },
      }).then(function successCallback(response) {
        // Store response data
        //console.log(response.data.message);
        $scope.showeep = response.data.message;
        document.getElementById("file").value = "";
		  $timeout(function() {
          $scope.showeep = "";
        }, 2000);
       
      });

	  
    }
  }]);
  
  

  
 
  /* ------------------
   send message here
  ------------------------ */   
  //this function for send messageeeeeeee...	
  app.controller("messagess", function($scope, $http, $timeout) {
	  
	
	
    $scope.send_btn = function() {		
		//console.log($scope.admin_id);
		//console.log($scope.gt_id);
		
	$http.post("insert.php", {
		
        'admin_id': $scope.admin_id, //$scope.fname GET DATA FROM YOUR HTML FORM
        'frnd_id': $scope.gt_id, //$scope.fname GET DATA FROM YOUR HTML FORM
        'message': $scope.set_message

      }).then(function(response) {
 
		//console.log(response.data);
        $scope.set_message = null;
				
//after mess null chat load again				
							var miy = $scope.admin_id;
							var fid = $scope.gt_id;
					
					$http.get("daata.php").then(function (responses) {
						var substr = responses.data;
								$("#tableee").empty();
						 angular.forEach(substr, function (val, key) {
						
							if(val.sender == miy && val.receiver == fid || val.sender == fid && val.receiver == miy ){
									if(val.sender == miy ){
										$('#tableee').append(` <div class="d-flex flex-row mb-3 p-3 rounded me-2" style="margin-left:300px; background-color: #efefefb8;"> ${val.message} </div> ` );
											}
										else{
											$('#tableee').append(` <div class="d-flex flex-row mb-3 bg-light p-3 rounded" style="margin-right:300px;"> ${val.message} </div> `);
										}	
							}							
					});  
					 
				}); 

      }, function(error) {
        alert("Sorry! Data Couldn't be inserted!");
      });
		
    }
 }); 
 </script>
 
<script>

  /* ------------------
   all users list here
  ------------------------ */  
  
//this function for display data from php file...			
		 app.controller('All_users', function($rootScope, $http, $timeout, $scope) {
 

  $http.get("get_register_users.php").then(function (response) {
	  //console.log(response);
	  $rootScope.names = response.data;
	  //console.log($rootScope.names);
	  
  });
  
   
  
  //this function for display on click chat
	$scope.selectInfo = function (id,fname,lname,pic,status) {
		
		 $rootScope.hideMe = false;
		
		$rootScope.gt_id = id;
		$rootScope.gt_fname = fname;
		$rootScope.gt_lname = lname;
		$rootScope.gt_pic = pic;
		$rootScope.gt_status = status;
		$("#tableee").empty();
		$("#hideimg").empty();		
	}			   
});


  /* ------------------
   chat module / refresh chat..
  ------------------------------------- */  
app.controller('ppo', function($scope, $http, $interval) {
 var increaseCounter = function () { 
						
//getting sender or reciver values
							var miy = $scope.admin_id;
							var fid = $scope.gt_id;
				
//making request to DB
					$http.get("daata.php").then(function (responses) {
						var substr = responses.data;
						$("#tableee").empty();
						 angular.forEach(substr, function (val, key) {
							if(val.sender == miy && val.receiver == fid || val.sender == fid && val.receiver == miy ){
									if(val.sender == miy ){
										$('#tableee').append(` <div class="d-flex flex-row mb-3 p-3 rounded me-2" style="margin-left:300px; background-color: #efefefb8;"> ${val.message} </div> ` );
											}
										else{
											$('#tableee').append(` <div class="d-flex flex-row mb-3 bg-light p-3 rounded" style="margin-right:300px;"> ${val.message} </div> `);
										}	
							}
					});  			
				}); 	 
	}
	 $interval(increaseCounter, 700); 
});
</script>