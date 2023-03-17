@extends('frontend.layouts.main')
@section('content')
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="row">
                <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                  <h3 class="font-weight-bold">Welcome Salman Khan</h3>
                  <h6 class="font-weight-normal mb-0">All systems are running smoothly!<span class="text-primary"></span></h6>
                </div>
              </div>
            </div>
          </div>
          <div class="row" style="display: flex; align-items: center;">
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card tale-bg">
                <div class="card-people mt-auto">
                  <img src="https://i.ytimg.com/vi/MvukssFtVsg/maxresdefault.jpg" alt="people">
                </div>
              </div>
            </div>
            <div class="col-md-6 grid-margin transparent">
              <div class="row">
                <div class="col-md-6 mb-4 stretch-card transparent">
                  <div class="card card-tale">
                    <div class="card-body">
                      <p class="mb-4">Vacant Houses</p>
                      <p class="fs-30 mb-2">4006</p>
                      
                    </div>
                  </div>
                </div>
                <div class="col-md-6 mb-4 stretch-card transparent">
                  <div class="card card-dark-blue">
                    <div class="card-body">
                      <p class="mb-4">House Owners</p>
                      <p class="fs-30 mb-2">{{$house_owners}}</p>
                   
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 mb-4 mb-lg-0 stretch-card transparent">
                  <div class="card card-light-blue">
                    <div class="card-body">
                      <p class="mb-4">Tenants</p>
                      <!-- show tenants compact from controller -->
                      <p class="fs-30 mb-2">{{$tenants}}</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 mb-4 mb-lg-0 stretch-card transparent">
                  <div class="card card-light-danger">
                    <div class="card-body">
                      <p class="mb-4">Pending Requests</p>
                      <p class="fs-30 mb-2">34040</p>
                     
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
         
         
        </div>
        <!-- content-wrapper ends -->
@endsection