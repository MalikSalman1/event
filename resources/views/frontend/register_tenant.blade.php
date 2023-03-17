@extends('frontend.layouts.main')
@section('content')
<div class="main-panel">        
        <div class="content-wrapper">
          <div class="row">
            
            <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h3 class=" text-center">Register Tenant</h3>
                  <p class="card-description text-center">
                    Here you can register a new Tenant
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
                    <label for="tenantname">Name</label>
                      <input type="text" class="form-control" name="tenantname" id="tenantname" placeholder="eg: Muhammad Ali">
                    </div>
                    <div class="form-group">
                    <label for="tenantfname">Father Name</label>
                      <input type="text" class="form-control" name="tenantfname" id="tenantfname" placeholder="eg: Muhammad Ali">
                    </div>
                    <div class="form-group">
                    <label for="tenantcnic">CNIC Number</label>
                      <input type="text" class="form-control" name="tenantcnic" id="tenantcnic" placeholder="eg: 55555-5555555-5">
                    </div>
                    <div class="form-group">
                    <label for="tenantaddr">Permanent CNIC Address</label>
                      <input type="text" class="form-control" name="tenantaddr" id="tenantaddr" placeholder="eg: A57/23 Lalarukh - WahCantt">
                    </div>
                    <div class="form-group">
                      <label for="tenantphone">Phone Number</label>
                      <input type="text" class="form-control" name="tenantphone" id="tenantphone" placeholder="eg: 0311-2221113">
                    </div>
                    <div class="form-group">
                      <label for="tenantemail">Email address</label>
                      <input type="email" class="form-control" id="tenantemail" name="tenantemail" placeholder="Email">
                    </div>
                    
                    
                    <div class="form-group">
                      <label for="tenantpassword">Password</label>
                      <input type="password" class="form-control" name="tenantpassword" id="tenantpassword" placeholder="Password">
                      
                    </div>
                    <div class="form-group">
                      
                      <input type="password" class="form-control" name="tenantcpassword" id="tenantcpassword" placeholder="Confirm Password">
                      
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