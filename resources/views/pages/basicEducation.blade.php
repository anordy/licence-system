@extends('layouts.homeApp')

@section('content')
<div class="container-fluid">
<div class="row mt-3">
  <div class="col-12">
    <div class="alert alert-danger p-2">
      <ul>
        <li>Add your Basic information(O-level,A-level)</li>
      </ul>
    </div>
  </div>
</div>
<div class="card mt-2">
<div class="card-header">
  <div class="row">
     <h6 class="col-md-10 card-title text-uppercase">Basic  Education</h6>
      <div class="col-md-2 btn btn-sm btn-outline-info" data-toggle="modal" data-target="#basicModal"><i class="fa fa-plus-circle pr-2"></i>ADD BASIC EDUCATION</div>
  </div>

  <div class="card-body">
  <table class="table table-sm table-bordered">
  <thead>
    <tr>
      <th scope="col">S/N</th>
      <th scope="col">Level</th>
      <th scope="col">Country</th>
      <th scope="col">School</th>
      <th scope="col">index No.</th>
      <th scope="col">Study Duration</th>
      <th scope="col">Score</th>
      <th scope="col">Status</th>
      <th scope="col">Action</th>


    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>O-level</td>
      <td>Tanzania United Republic</td>
      <td>Pugu Secondary School</td>
      <td>S0397/0007/2014</td>
      <td>From: 2011 To: 2014</td>
      <td>Merit</td>
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
  

  <!-- Basic Modal -->
<div class="modal fade" id="basicModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
     <div class="modal-header">
      <h5 class="modal-title text-center">Basic Education</h5>
     </div>
      <div class="modal-body">
      <form action="">
      <div class="row">
      <div class="col-md-6">   
       <label for="inputState">Level</label>
      <select class="form-control">
        <option selected>O-level</option>
        <option>A-level</option>
      

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

      <div class="row mt-3">
       <div class="col-md-6">
       <div class="form-group">
    <label for="formGroupExampleInput">First School</label>
    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
  </div>
       </div>
       <div class="col-md-6">      <div class="form-group">
    <label for="formGroupExampleInput">Index No</label>
    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="eg S1234/5678/2011">
  </div></div>
      </div>


      <div class="row">
       <div class="col-md-6">
       <label for="inputState">Study Duration</label>
    <div class="row">
      <div class="col-md-6">
      <select class="form-control">
        <option selected>Start Year</option>
        <option>2021</option>
        <option>2020</option>
        <option>2019</option>

        </select>
      </div>
      <div class="col-md-6">
      <select class="form-control">
        <option selected>End year</option>
        <option>2010</option>
        <option>2009</option>

        </select>
      </div>
    </div>
       </div>
       <div class="col-md-6">   
       <label for="inputState">Results System</label>
    <div class="row">
      <div class="col-md-6">
      <select class="form-control">
        <option selected>Select Results</option>
        <option>Division System</option>
        <option>Merit System</option>

        </select>
      </div>
      <div class="col-md-6">
      <select class="form-control">
        <option selected>Select Results</option>
        <option>Division System</option>

        </select>
      </div>
    </div>
  </div>
      </div>
   

           </form>
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
