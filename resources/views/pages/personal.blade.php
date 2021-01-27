@extends('layouts.homeApp')

@section('content')
<div class="container-fluid">
<div class="row mt-3">
   <div class="col-md-2">
        <div class="card">
          
              <div class="text-center border-dark rounded m-2" style="border-style: solid">
              <img class="img-fluid m-1 rounded" src="{{ url('images/prof.jpg') }}" style="height: 150px;width: 95%">
              </div>
          
           <div class="text-center d-flex justify-content-center">
              <div class="btn btn-primary btn-block btn-sm m-1 col-6 rounded" data-toggle="modal" data-target="#profileModal"><i class="fa fa-camera pr-1"></i>Camera</div>
           </div>
        </div>
   </div>
   <div class="col-md-10">
      <div class="card">
         <div class="card-header">
            <h6>PERSONAL INFORMATION</h6>
         </div>
         <div class="card-body">
           <form action="">
      <div class="row">
       <div class="col-md-6">
       <div class="form-group">
    <label for="formGroupExampleInput">First Name</label>
    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Anord">
  </div>
       </div>
       <div class="col-md-6">      <div class="form-group">
    <label for="formGroupExampleInput">Last Name</label>
    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Patrick">
  </div></div>
      </div>

      
      <div class="row">
       <div class="col-md-6">
       <div class="form-group">
    <label for="formGroupExampleInput">Last Name</label>
    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="john">
  </div>
       </div>
       <div class="col-md-6">   
       <label for="inputState">Nationality</label>
      <select class="form-control">
        <option selected>Tanzania</option>
        <option>Kenya</option>
        <option>China</option>
        <option>Usa</option>

        </select>
  </div>
      </div>


      <div class="row">
       <div class="col-md-6">
       <div class="form-group">
    <label for="formGroupExampleInput">Previous Name</label>
    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Greyson">
  </div>
       </div>
       <div class="col-md-6">   
       <label for="inputState">Gender</label>
      <select class="form-control">
        <option selected>Select Gender</option>
        <option>Male</option>
        <option>Female</option>

        </select>
  </div>
      </div>


      <div class="row">
       <div class="col-md-6">
       <div class="form-group">
    <label for="formGroupExampleInput">Martial Status</label>
    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Single">
  </div>
       </div>
       <div class="col-md-6">   
       <label for="inputState">Date of Birth</label>
    <div class="row">
      <div class="col-md-4">
      <select class="form-control">
        <option selected>day</option>
        <option>8</option>
        <option>9</option>

        </select>
      </div>
      <div class="col-md-4">
      <select class="form-control">
        <option selected>month</option>
        <option>3</option>
        <option>4</option>

        </select>
      </div>
      <div class="col-md-4">
      <select class="form-control">
        <option selected>year</option>
        <option>1998</option>
        <option>2000</option>

        </select>
      </div>
    </div>
  </div>
      </div>

   

      <div class="row">
       <div class="col-md-6">
       <div class="form-group">
    <label for="formGroupExampleInput">Place of Birth</label>
    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Singida">
  </div>
       </div>
      
      </div>


   

           </form>
         </div>
         <div class="card-footer text-center">
               <div class="btn btn-sm btn-lg btn-outline-primary pr-5 pl-5"><i class="fa fa-save"></i> Update</div>
         </div>
      </div>
   </div>
</div>  

<!--Profile Modal -->
<div class="modal fade" id="profileModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
     
      <div class="modal-body">
      <div class="text-center border-dark rounded m-2" style="border-style: solid">
              <img class="img-fluid m-1 rounded" src="{{ url('images/prof.jpg') }}" name="picture" id="picture" style="height: 300px;width: 90%">
              </div>

              <div class="row">
              <div class="col-12">
              <p class="text-center text-danger">
                  Acceptable formats are gif,jpg,png,bmp and should not exceed width/height 300/300 pixel size and 500KB 
              </p>
              <form>
  <div class="form-group">
    <input type="file" class="form-control-file border" id="exampleFormControlFile1">
  </div>
</form>
              </div>
              </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-danger" data-dismiss="modal"><i class="fa fa-times-circle pr-2"></i> Close</button>
        <button type="button" class="btn btn-outline-primary"><i class="fa fa-upload pr-2"></i> Uploads</button>
      </div>
    </div>
  </div>
</div>
</div>
@endsection
