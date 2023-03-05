	

 <div ng-controller="A_uploadpic">
      
    <div class="row ps-5 pe-5 pt-1 ms-5 me-5">
            <h4 class="mb-3 mt-2 " style="margin-left: -4px;">Set & Update Status</h4>

				 <div class="mb-3">
				  <label for="formFile" class="form-label">Set a Cute Profile Pic</label>
				  <input class="form-control" type="file" name='file' id='file'>
				</div>
				  
	<p ng-bind="showeep" class="text-danger"></p>
			  
         <div class="row mt-4 p-0 m-0">
              <div class="col text-primary fw-bold d-flex align-items-center " id="txt">
			  
              <div class="col d-flex justify-content-end p-0 m-0 me-2">
                <button type="button" class=" btn btn-primary fw-normal text-end" value='Upload' id='upload' ng-click='upload()' >Upload Pic</button>
              </div>
            </div>
          </div>
   
   
 </div>
		  
