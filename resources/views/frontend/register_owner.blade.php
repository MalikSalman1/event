@extends('frontend.layouts.main')
@section('content')
<div class="main-panel">        
        <div class="content-wrapper">
          <div class="row">
            
            <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h3 class=" text-center">Register House Owner</h3>
                  <!-- error in blade template -->
                  @if ($errors->any())
                  <div class="alert alert-danger">
                    <ul>
                      @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                      @endforeach
                    </ul>
                  </div>
                  @endif
                  <p class="card-description text-center">
                    Here you can register a new House Owner
                  </p>
                  <form class="forms-sample" action="{{url('/register_owner')}}" method="post">
                    @csrf
                  <div class="form-group">
                    <label for="ownername">Name</label>
                      <input type="text" class="form-control" name="ownername" id="ownername" placeholder="eg: Muhammad Ali">
                    </div>
                    <div class="form-group">
                    <label for="ownerfname">Father Name</label>
                      <input type="text" class="form-control" name="ownerfname" id="ownerfname" placeholder="eg: Muhammad Ali">
                    </div>
                    <div class="form-group">
                    <label for="ownercnic">CNIC Number</label>
                      <input type="text" class="form-control" name="ownercnic" id="ownercnic" placeholder="eg: 55555-5555555-5">
                    </div>
                    <div class="form-group">
                    <label for="owneraddr">Permanent CNIC Address</label>
                      <input type="text" class="form-control" name="owneraddr" id="owneraddr" placeholder="eg: A57/23 Lalarukh - WahCantt">
                    </div>
                    <div class="form-group">
                      <label for="ownerphone">Phone Number</label>
                      <input type="text" class="form-control" name="ownerphone" id="ownerphone" placeholder="eg: 0311-2221113">
                    </div>
                    <div class="form-group">
                      <label for="owneremail">Email address</label>
                      <input type="email" class="form-control" id="owneremail" name="owneremail" placeholder="Email">
                    </div>
                    
                    
                    <div class="form-group">
                      <label for="ownerpassword">Password</label>
                      <input type="password" class="form-control" name="ownerpassword" id="ownerpassword" placeholder="Password">
                      
                    </div>
                    <div class="form-group">
                      
                      <input type="password" class="form-control" name="ownercpassword" id="ownercpassword" placeholder="Confirm Password">
                      
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