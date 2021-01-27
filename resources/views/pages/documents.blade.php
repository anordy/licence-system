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
     <h6 class="col-md-10 card-title text-uppercase">Document Management</h6>
      <div class="col-md-2 btn btn-sm btn-outline-info"><i class="fa fa-upload pr-2"></i>Upload</div>
  </div>

  <div class="card-body">
  <table class="table table-sm table-bordered">
  <thead>
    <tr>
      <th scope="col">S/N</th>
      <th scope="col">Document Name</th>
      <th scope="col">Preview</th>
      <th scope="col">Status</th>
      <th scope="col">Action</th>
     


    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Birth Certificate</td>
      <td><div class="btn btn-sm btn-outline-warning m-1"><i class="fa fa-eye pr-2"></i>Preview</div>
</td>
      <td><div class="badge badge-info info-weight-lighter">Not verified</div></td>
      <td>
    <div class="row">
      <div class="col">
      <div class="btn btn-xs btn-outline-info m-1"><i class="fa fa-edit"></i></div>
      </div>
    </div>
      </td>


    </tr>
   
  </tbody>
</table>
  </div>
 </div>
</div>
  
</div>
@endsection
