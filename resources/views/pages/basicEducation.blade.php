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
  @if(count($basics) > 0)
  @foreach($basics as $basic)
    <tr>
      <th scope="row">{{ $basic->id }}</th>
      <td>{{ $basic->level }}</td>
      <td>{{ $basic->country }}</td>
      <td>{{ $basic->school }}</td>
      <td>{{ $basic->index_no }}</td>
      <td>From: {{ $basic->start_year }} To: {{ $basic->end_year }}</td>
      <td>{{ $basic->results_grade }}</td>
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
   @endforeach
     @else 
        <tr class="text-center">
        <td>No available data</td>
        </tr>
      @endif
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
  <form action="{{ url('/postBasic') }}"
   @csrf
      <div class="modal-body">
      <div class="row">
      <div class="col-md-6">   
       <label for="inputState">Level</label>
      <select class="form-control" name="level">
        <option selected>select level</option>
        <option value="O-level">O-level</option>
        <option value="A-level">A-level</option>
      </select>
  </div>
       <div class="col-md-6">   
       <label for="inputState">Study Country</label>
      <select class="form-control" name="country">
      <option selected>--Select Study Country--</option>
      @foreach($countries as $country)
        <option value="{{$country->country_name}}">{{$country->country_name}}</option>
      @endforeach 

        </select>
  </div>
      </div>

      <div class="row mt-3">
       <div class="col-md-6">
       <div class="form-group">
    <label for="formGroupExampleInput">First School</label>
    <input type="text" class="form-control" name="school" placeholder="">
  </div>
       </div>
       <div class="col-md-6">      <div class="form-group">
    <label for="formGroupExampleInput">Index No</label>
    <input type="text" class="form-control" name="index_no" placeholder="eg S1234/5678/2011">
  </div></div>
      </div>


      <div class="row">
       <div class="col-md-6">
       <label for="inputState">Study Duration</label>
    <div class="row">
      <div class="col-md-6">
      <select class="form-control" name="start_year">
        <option selected>Start Year</option>
        <option value="2017">2017</option>
        <option value="2016">2016</option>
        <option value="2015">2015</option>
        <option value="2014">2014</option>
        <option value="2013">2013</option>


        </select>
      </div>
      <div class="col-md-6">
      <select class="form-control" name="end_year">
        <option selected>End year</option>
        <option value="2021">2021</option>
        <option value="2020">2020</option>
        <option value="2019">2019</option>
        <option value="2017">2017</option>
        <option value="2016">2016</option>
        <option value="2015">2015</option>
        <option value="2014">2014</option>
      </select>
      </div>
    </div>
       </div>
       <div class="col-md-6">   
       <label for="inputState">Results System</label>
    <div class="row">
      <div class="col-md-6">
      <select class="form-control" name="results_system">
        <option  selected>-- Results System --</option>
        @foreach($results as $result)
        <option value="{{ $result->results_name }}">{{ $result->results_name }}</option>
        @endforeach
        </select>
      </div>
      <div class="col-md-6">
      <select class="form-control" name="results_grade">
      <option  selected>-- Select Results --</option>
      @if($result->results_name === 'division_system')
      @foreach($grades as $grade)
        <option value="{{ $grade->division_system }}">{{ $grade->division_system }}</option>
      @endforeach
      @else
      @foreach($grades as $grade)
        <option value="{{ $grade->division_system }}">{{ $grade->merits_system }}</option>
      @endforeach
      @endif
        </select>
      </div>
    </div>
  </div>
      </div>
   

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-danger" data-dismiss="modal"><i class="fa fa-times-circle pr-2"></i> Close</button>
        <button type="submit" class="btn btn-outline-primary"><i class="fa fa-upload pr-2"></i>Save</button>
      </div>
      </form>
    </div>
  </div>
</div>
</div>
@endsection
