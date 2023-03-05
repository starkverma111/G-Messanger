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
    <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
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
  <body class="bg-light">
    <div class="container mt-5 p-0 m-auto border rounded shadow-sm p-3 mb-5 bg-body rounded rounded-3" style="width:1100px;">
      <div class="row p-0 " style="margin-top: -8px;">
        <div class="col-md-4 mb-2 p-0 m-0 border-end border-3 border-light ">
          
		  
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
            <img src="https://avatars.githubusercontent.com/u/74152066?v=4" style="height:200px; width:200px; border-radius:50%;" class="mx-auto d-block mb-3 mt-2"/>
          <h5 class="text-center">Sachin Verma</h5>
		 <p class="text-muted text-center ">Use with Niyander's Security </p>
		         
				 <ul class="text-capitalize text-decoration-none text-left text-center border p-0 m-0 ms-4 me-4" style="list-style-type: none;">
                  <li >
                    <a class="dropdown-item mb-2" href="#">Upload Pic</a>
                  </li>
                  <li>
                    <a class="dropdown-item mb-2" href="#">Update Status</a>
                  </li>
                  <li>
                    <a class="dropdown-item mb-2" href="#">Linked device</a>
                  </li>
                  <li>
                    <a class="dropdown-item mb-2" href="#">Update Profile</a>
                  </li>
                  <li>
                    <a class="dropdown-item mb-2" href="#">Change Password</a>
                  </li>
                  <li>
                    <a class="dropdown-item mb-2" href="#">Refar & Earn</a>
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
                <button type="button" class="border-0 btn-light fs-3 ps-2 pe-2 rounded" data-bs-toggle="dropdown" aria-expanded="false" >
				x
                </button>

              </div>
            </div>

          </div>
        


          <div class="row ps-5 pe-5 pt-1 ms-5 me-5">
            <h4 class="mb-3 mt-2 " style="margin-left: -4px;">Update your Account</h4>
            <div class="col p-2 m-0">
              <label for="exampleInputEmail1" class="form-label">First name</label>
              <input type="text" class="form-control p-2" id="fname" ng-model="fname">
            </div>
            <div class="col p-2 m-0">
              <label for="exampleInputEmail1" class="form-label">Last Name</label>
              <input type="text" class="form-control p-2" id="lname" ng-model="lname">
            </div>
            <div class="p-2">
              <label for="exampleInputPassword1" class="form-label">Email address</label>
              <input type="email" class="form-control p-2" id="email" ng-model="email">
            </div>
            <div class="row p-0 m-0">
              <div class="col p-2 m-0">
                <label for="exampleInputEmail1" class="form-label">Enter you Password to update details</label>
                <input type="password" class="form-control p-2" id="password" ng-model="password">
              </div>

			  
              <span class="mt-1 mb-1">
                <small class="text-muted">Use 8 or more characters with a mix of letters, numbers & symbols</small>
              </span>
			  <p ng-bind="heading" class="text-danger"></p>
              <div class="form-check p-0 m-0  mt-2 mb-1">
                <input class="form-check-input ms-2" type="checkbox" value="" id="flexCheckDefault" onclick="myFunction();">
                <label class="form-check-label ps-3" for="flexCheckDefault"> Show password</label>
              </div>
            </div>
			

			
            <br />
            <div class="row mt-4 p-0 m-0">
              <div class="col text-primary fw-bold d-flex align-items-center " id="txt"><a href="./login.php" class="text-decoration-none">Reset</a></div>
              <div class="col d-flex justify-content-end p-0 m-0 me-2">
                <button type="button" class=" btn btn-primary fw-normal text-end" id="btn" ng-click="register()">Update Details</button>
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

  </body>
</html>