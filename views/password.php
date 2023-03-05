<div ng-controller="A_change_password"> 	

          <div class="row ps-5 pe-5 pt-1 ms-5 me-5">
            <h4 class="mb-3 mt-2 " style="margin-left: -4px;">Change Password</h4>

            <div class="p-2">
              <label for="exampleInputPassword1" class="form-label">Email address</label>
              <input type="text" class="form-control p-2 border-0" ng-model="email" disabled />

            </div>
             <h5 class="mb-3 mt-2 " style="margin-left: -4px;">Enter New Password</h5>
			<div class="row p-0 m-0">
              <div class="col p-2 m-0">
                <label for="exampleInputEmail1" class="form-label">New Password</label>
                <input type="{{inputType}}" class="form-control p-2" ng-model="npassword">
              </div>
			  
			                <div class="col p-2 m-0">
                <label for="exampleInputEmail1" class="form-label">Confirm Password</label>
                <input type="{{inputType}}" class="form-control p-2" ng-model="vpassword">
              </div>

			  
              <span class=" mb-1">
                <small class="text-muted">Use 8 or more characters with a mix of letters, numbers & symbols</small>
              </span>
			  <p ng-bind="showw" class="text-danger"></p>
             <div class="form-check p-0 m-0  mt-2 mb-1">
                <input class="form-check-input ms-2" type="checkbox" value="" id="flexCheckDefault" ng-click="showpw()">
                <label class="form-check-label ps-3" for="flexCheckDefault"> Show password</label>
              </div> 
            </div>
			

			
            <br />
            <div class="row mt-4 p-0 m-0">
              <div class="col text-primary fw-bold d-flex align-items-center " id="txt">
			  <button type="button" class="btn btn-link text-decoration-none" ng-click="resetform()">Reset</button></div>
              <div class="col d-flex justify-content-end p-0 m-0 me-2">
                <button type="button" class=" btn btn-danger fw-normal text-end" ng-click="changepw()">Change Password</button>
              </div>
            </div>
          </div>
		  
</div>