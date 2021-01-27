@extends('layouts.homeApp')

@section('content')
<div class="container-fluid">
<div class="row mt-3">
   <div class="col-md-12">
      <div class="card">
         <div class="card-header">
            <h6>  CONTACT DETAILS</h6>
         </div>
         <div class="card-body">
           <form action="">
      <div class="row">
       <div class="col-md-6">
       <div class="form-group">
    <label for="formGroupExampleInput">National Id Number(NIDA)</label>
    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="03595314520592055252495">
  </div>
       </div>
       <div class="col-md-6">  
           <div class="form-group">
    <label for="formGroupExampleInput">Phone Number</label>
    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="0716423485">
  </div>
  </div>
      </div>

      
      <div class="row">
       <div class="col-md-6">
       <div class="form-group">
    <label for="formGroupExampleInput">Address</label>
    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="box 04">
  </div>
       </div>
       <div class="col-md-6">   
       <label for="inputState">Region/City</label>
      <select class="form-control">
        <option selected>Dar es Salaam</option>
        <option>Dodoma</option>
        <option>Singida</option>
        <option>Morogoro</option>

        </select>
  </div>
      </div>


      <div class="row">
       <div class="col-md-6">
       <label for="inputState">Council/District</label>
      <select class="form-control">
        <option selected>Temeke</option>
        <option>Ubungo</option>
        <option>Kinondoni</option>
        <option>Ilala</option>

        </select>
       </div>
       <div class="col-md-6">   
       <div class="form-group">
    <label for="formGroupExampleInput">Ward</label>
    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Sinza">
  </div>
  </div>
      </div>


      <div class="row">
       <div class="col-md-6">
       <div class="form-group">
    <label for="formGroupExampleInput">Street/Village</label>
    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Mori">
  </div>
       </div>
   </div>
    </div>
 

        
         <div class="card-footer text-center">
               <div class="btn btn-sm btn-lg btn-outline-primary pr-2 pl-2"><i class="fa fa-edit"></i> Update Information</div>
         </div>
      </div>
   </div>
           </form>
</div> 
</div> 
@endsection
