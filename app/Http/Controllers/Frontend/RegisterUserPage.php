<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\house_owners;
use App\Models\users;
use App\Models\Tenants;

class RegisterUserPage extends Controller
{
    public function index(){
        
        return view('frontend.register_owner');
    }
   public function tenant(){
        return view('frontend.register_tenant');
   }
   public function register_owner(Request $request){

        // validate the user data also matching password and confirm password
        $request->validate([
            'ownername' => 'required',
            'ownerfname' => 'required',
            'ownercnic' => 'required | unique:house_owners,cnic',
            'owneraddr' => 'required',
            'ownerphone' => 'required',
            'owneremail' => 'required | email | unique:house_owners,email',
            'ownerpassword' => 'required',
            'ownercpassword' => 'required | same:ownerpassword',
        ]);
        // // insert the data into users table and house owners table
        $user = new users;
        $user->name = $request->ownername;
        $user->email = $request->owneremail;
        $user->password = bcrypt($request->ownerpassword);
        $user->role = 'owner';
        $user->save();
        $owner = new house_owners;
        $owner->owner_name = $request->ownername;
        $owner->fname = $request->ownerfname;
        $owner->cnic = $request->ownercnic;
        $owner->address = $request->owneraddr;
        $owner->phone = $request->ownerphone;
        $owner->email = $request->owneremail;
        $owner->password = $request->ownerpassword;
        $owner->user_id = $user->id;
        $owner->save();
         return redirect('/house_owner');
   }
   public function register_tenant(Request $request){
        // validate the user data also matching password and confirm password
        $tenant = new Tenants;
        $request->validate([
            'tenantname' => 'required',
            'tenantfname' => 'required',
            'tenantcnic' => 'required | unique:tenants,cnic',
            'tenantaddr' => 'required',
            'tenantphone' => 'required',
            'tenantemail' => 'required | email | unique:tenants,email',
            'tenantpassword' => 'required',
            'tenantcpassword' => 'required | same:tenantpassword',
        ]);
        // // insert the data into users table and tenants table
        $user = new users;
        $user->name = $request->tenantname;
        $user->email = $request->tenantemail;
        $user->password = bcrypt($request->tenantpassword);
        $user->role = 'tenant';
        $user->save();
        $tenant = new Tenants;
        $tenant->tenant_name = $request->tenantname;
        $tenant->fname = $request->tenantfname;
        $tenant->cnic = $request->tenantcnic;
        $tenant->address = $request->tenantaddr;
        $tenant->phone = $request->tenantphone;
        $tenant->email = $request->tenantemail;
        $tenant->password = $request->tenantpassword;
        $tenant->user_id = $user->id;
        $tenant->save();
         return redirect('/tenant');

   }
}
