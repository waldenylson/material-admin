@extends('material::index')
@section('content')
<div class="content">
   <div class="container-fluid">
      <div class="row">
         <div class="col-md-8">
            <div class="card">
               <div class="card-header card-header-primary mb-3">
                  <h4 class="card-title">Edit Profile</h4>
                  <p class="card-category">Change your profile</p>
               </div>
               <div class="card-body">
                  @if ($errors->any())
                  <div class="alert alert-danger mb-5">
                     <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                     <i class="material-icons">close</i>
                     </button>
                     <span>
                        <b> Error in validation form</b>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                     </span>
                  </div>
                  @endif
                  <form method="POST" action="{{route('material.profile.edit' , ['id' => $user->id])}}">
                     @csrf
                     @method('PUT')
                     <div class="row">
                        <div class="col-md-5">
                           <div class="form-group">
                              <label class="bmd-label-floating">Username</label>
                              <input name="name" type="text" value="{{$user->name}}" class="form-control">
                           </div>
                        </div>
                        <div class="col-md-7">
                           <div class="form-group">
                              <label class="bmd-label-floating">Email address</label>
                              <input name="email" type="email" value="{{$user->email}}"  class="form-control">
                           </div>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-md-6">
                           <div class="form-group">
                              <label class="bmd-label-floating">Password</label>
                              <input name="password" type="password" class="form-control">
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="form-group">
                              <label class="bmd-label-floating">Confirm Password</label>
                              <input name="password_confirmation" type="password" class="form-control">
                           </div>
                        </div>
                     </div>
                     <button type="submit" class="btn btn-primary pull-right">Update Profile</button>
                     <div class="clearfix"></div>
                  </form>
               </div>
            </div>
         </div>
         <div class="col-md-4">
            <div class="card card-profile">
               <div class="card-avatar">
                  <img class="img" src="{{asset('vendor/admin/assets/img/faces/user.png')}}" />
               </div>
               <div class="card-body">
                  <h4 class="card-title">{{$user->name}}</h4>
                  <p class="card-description">
                     {{$user->email}}
                  </p>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection
