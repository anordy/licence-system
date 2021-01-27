@extends('layouts.homeApp')

@section('content')
<div class="container-fluid">
   <div class="card mt-3">
   <div class="card-header">
     <h5 class="card-title text-uppercase">Declaration</h5>
   
   </div>
   <div class="card-body">
        <div class="row">
          <div class="col">
          <div class="form-check">
  <input
    class="form-check-input"
    type="checkbox"
    value=""
    id="flexCheckDefault"
  />
  <label class="form-check-label" for="flexCheckDefault">
    I certfy that to my knowledge the information provided is true and correct
  </label>
</div>
  
<p class="mt-2"> In case of any information is found to be false or untrue or misleading, Iam aware that i may be heldliable for it</p>
   <span class="text-danger">N.B</span>
   <p class="font-weight-bold">Ticking the box Will be taken as biding as your signature  </p>
          </div>
        </div>
     </div>

   </div>
</div>  
@endsection
