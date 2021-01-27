
@extends('layouts.homeApp')

@section('content')
<div class="container-fluid">
<div class="row mt-3">
  <div class="col-12">
    <div class="alert alert-danger p-2">
      <ul>
        <li>Add your Professional Education information(Certificate, Diploma ,Barchelor etc)</li>
        <li>Add Baschelor Education as your current education</li>

      </ul>
    </div>
  </div>
</div>
<div class="card mt-2">
<div class="card-header">
  <div class="row">
     <h6 class="col-md-10 card-title text-uppercase">Professional  Education</h6>
      <div class="col-md-2 btn btn-sm btn-outline-info" data-toggle="modal" data-target="#professionalModal"><i class="fa fa-plus-circle pr-2"></i>ADD BASIC EDUCATION</div>
  </div>

  <div class="card-body">
  <table class="table table-sm table-bordered">
  <thead>
    <tr>
      <th scope="col">S/N</th>
      <th scope="col">Award</th>
      <th scope="col">Country</th>
      <th scope="col">Reg No</th>
      <th scope="col">Nacte No.</th>
      <th scope="col">Institution</th>
      <th scope="col">Course</th>
      <th scope="col">Training Length</th>
      <th scope="col">Current</th>
      <th scope="col">Status</th>
      <th scope="col">Action</th>



    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Degree</td>
      <td>Tanzania United Republic</td>
      <td>2017-04-01594</td>UR6S1/EMNS/20/
      <td>N</td>
      <td>Universty Of Dar es salaam</td></td>
      <td>Bsc With Computer Science</td>
      <td>From: 2011 To: 2014</td>
      <td><div class="badge badge-success info-weight-lighter">Yes</div></td>
      <td><div class="badge badge-info info-weight-lighter">Not verified</div></td>
      <td>
    <div class="row">
      <div class="col">
      <div class="btn btn-xs btn-outline-info m-1"><i class="fa fa-edit"></i></div>
      <div class="btn btn-xs btn-outline-danger m-1"><i class="fa fa-trash"></i></div>
      </div>
    </div>
      </td>


    </tr>
   
  </tbody>
</table>
  </div>
 </div>
</div>
  
  <!--professional Modal -->
<div class="modal fade" id="professionalModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
     <div class="modal-header">
      <h5 class="modal-title text-center">Profesional Education</h5>
     </div>
      <div class="modal-body">
      <form action="">
      <div class="row mb-2">
      <div class="col-md-6">   
       <label for="inputState">Education Level</label>
      <select class="form-control">
        <option selected>--select Level--</option>
        <option>Certificate</option>
        <option>Diploma</option>


        </select>
  </div>
       <div class="col-md-6">   
       <label for="inputState">Study Country</label>
      <select class="form-control">
        <option selected>Tanzania, United Republic</option>
        <option>Kenya</option>
        <option>China</option>
        <option>Usa</option>

        </select>
  </div>
      </div>

      <div class="row mb-2">
      <div class="col-md-6">   
       <label for="inputState">Institution Name </label>
      <select class="form-control">
      <option selected>--select institution--</option>
        <option>Aga Khan Universty</option>
        <option>Udsm</option>
      

        </select>
  </div>
       <div class="col-md-6">   
       <label for="inputState">Program Name</label>
      <select class="form-control">
        <option selected>--select Program--</option>
        <option>Bsc With Computer</option>
        <option>Accountant</option>

        </select>
  </div>
      </div>

      <div class="row mb-2">
      <div class="col-md-6">   
       <label for="inputState">Is the current Level Education?</label>
      <select class="form-control">
      <option selected>--select--</option>
        <option>Aga Khan Universty</option>
        <option>Udsm</option>
      

        </select>
  </div>
  <div class="col-md-6">
       <div class="form-group">
    <label for="formGroupExampleInput">Registration Number</label>
    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Universty/Institution Registration Number">
  </div>
       </div>

</div>
   
<div class="row">
      <div class="col-md-6">   
       <label for="inputState">Are you under NACTE? </label>
      <select class="form-control">
      <option selected>--select--</option>
        <option>Aga Khan Universty</option>
        <option>Udsm</option>
      

        </select>
  </div>


</div>   
      </div>

      <div class="card m-3">
       <div class="card-header">
         <div class="card-title">Duration/Length of Training</div>
       </div>
       <div class="card-body">
         

      <div class="row">
       <div class="col-md-6">
       <label for="inputState">From <span class="font-italics text-sm">(Start Month and Year)</span></label>
    <div class="row">
      <div class="col-md-6">
      <select class="form-control">
        <option selected>--select Month--</option>
        <option>8</option>
        <option>9</option>
        <option>2</option>

        </select>
      </div>
      <div class="col-md-6">
      <select class="form-control">
        <option selected>--select year--</option>
        <option>2010</option>
        <option>2009</option>

        </select>
      </div>
    </div>
       </div>
       <div class="col-md-6">   
       <label for="inputState">To <span class="text-sm">(End month and year)</span></label>
    <div class="row">
      <div class="col-md-6">
      <select class="form-control">
        <option selected>--Select Month--</option>
        <option>3</option>
        <option>2</option>

        </select>
      </div>
      <div class="col-md-6">
      <select class="form-control">
        <option selected>--select Year--</option>
        <option>2021</option>
        <option>2020</option>


        </select>
      </div>
    </div>
  </div>
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
</form>
</div>
@endsection
