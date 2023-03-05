<div ng-controller="A_status"> 	

          <div class="row ps-5 pe-5 pt-1 ms-5 me-5">
            <h4 class="mb-3 mt-2 " style="margin-left: -4px;">Set & Update Status</h4>

            <div class="p-2">
              <small class="text-muted">Write Some unique Status</small>
              <input type="text" class="form-control p-2" ng-model="astatus" maxlength="120" />

            </div>
			  <p ng-bind="showee" class="text-danger"></p>
            <div class="row mt-4 p-0 m-0">
              <div class="col text-primary fw-bold d-flex align-items-center " id="txt">
			  
              <div class="col d-flex justify-content-end p-0 m-0 me-2">
                <button type="button" class=" btn btn-primary fw-normal text-end" ng-click="statuss()">Set Status</button>
              </div>
            </div>
          </div>
		  
</div>