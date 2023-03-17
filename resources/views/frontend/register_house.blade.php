@extends('frontend.layouts.main')
@section('content')
<div class="main-panel">        
        <div class="content-wrapper">
          <div class="row">
            
            <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h3 class=" text-center">Register New House</h3>
                  <p class="card-description text-center">
                    Here you can register a new House
                  </p>
                  @if ($errors->any())
                  <div class="alert alert-danger">
                    <ul>
                      @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                      @endforeach
                    </ul>
                  </div>
                  @endif
                  <form class="forms-sample" action="{{url('/register_tenant')}}" method="POST">
                    @csrf
                  <div class="form-group">
                    <label for="sector">Sector</label>
                      <input type="text" class="form-control" name="sector" id="sector" placeholder="eg: Sector A">
                    </div>
                    <div class="form-group">
                    <label for="streat">Streat Number</label>
                      <input type="number" class="form-control" name="streat" id="streat">
                    </div>
                    <div class="form-group">
                    <label for="housenumber">House Number</label>
                      <input type="number" class="form-control" name="housenumber" id="housenumber">
                    </div>
                    <div class="form-group">
                    <label for="ownername">Owner Name</label>
                      <!-- select box to fetch owners name from database -->
                      <select class="form-control" name="ownername" id="ownername">
                        <option value="0">Select Owner</option>
                        @foreach($owners as $owner)
                        <option value="{{$owner->id}}">{{$owner->ownername}}</option>
                        @endforeach
                    </div>
                    <div class="form-group">
                      <label for="ownercnic">Owner CNIC</label>
                      <!-- select box to fetch cnic of the selected owner -->
                      <select class="form-control" name="ownercnic" id="ownercnic">
                        <option value="0">Select Owner</option>
                        <option value="{{$owner->id}}">{{$owner->ownercnic}}</option>
                    </div>
                    
                    
                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    <button class="btn btn-light">Cancel</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
        
        <!-- partial -->
     
        <!-- content-wrapper ends -->
    @endsection