@extends('layouts.global')
@section('title') Create User @endsection
@section('content')

@if(session('status'))
    <div class="alert alert-success">
        {{session('status')}}
    </div>
@endif

<form enctype="multipart/form-data" class="bg-white shadow-sm p-3" action="{{route('users.store')}}" method="POST">
    @csrf
    
    <label for="name">Name</label>
    <input type="text" name="name" id="name" class="form-control {{$errors->first('name') ? "is-invalid" : ""}}" placeholder="Full Name" value="{{old('name')}}">
    <div class="invalid-feedback">
        {{$errors->first('name')}}
    </div>
    <br>

    <label for="username">Username</label>
    <input type="text" name="username" id="username" class="form-control {{$errors->first('username')? "is-invalid" : ""}}" placeholder="Username" value="{{old('username')}}">
    <div class="invalid-feedback">
            {{$errors->first('name')}}
    </div>
    <br>

    <label for="">Roles</label>
    <input type="checkbox" name="roles[]" id="ADMIN" value="ADMIN" class="form-control {{$errors->first('roles')? "is-invalid" : ""}}">
    <label for="ADMIN">Administrator</label>
    <input type="checkbox" name="roles[]" id="STAFF" value="STAFF" class="form-control {{$errors->first('roles')? "is-invalid" : ""}}">
    <label for="STAFF">Staff</label>
    <input type="checkbox" name="roles[]" id="CUSTOMER" value="CUSTOMER" class="form-control {{$errors->first('roles')? "is-invalid" : ""}}">
    <label for="CUSTOMER">Customer</label>
    <div class="invalid-feedback">
            {{$errors->first('roles')}}
    </div>
    <br>
    <br>

    <label for="phone">Phone number</label>
    <input type="text" name="phone" class="form-control {{$errors->first('phone')? "is-invalid" : ""}}" value="{{old('phone')}}">
    <div class="invalid-feedback">
            {{$errors->first('phone')}}
    </div>
    <br>

    <label for="address">Address</label>
    <textarea name="address" id="address" class="form-control {{$errors->first('address')? "is-invalid" : ""}}" value="{{old('address')}}"></textarea>
    <div class="invalid-feedback">
            {{$errors->first('phone')}}
    </div>
    <br>

    <label for="avatar">Avatar image</label>
    <br>
    <input id="avatar" name="avatar" type="file" class="form-control {{$errors->first('avatar')? "is-invalid" : ""}}" value="{{old('avatar')}}">
    <div class="invalid-feedback">
            {{$errors->first('avatar')}}
    </div>
    <hr class="my-3">
    
    <label for="email">Email</label>
    <input class="form-control {{$errors->first('email')? "is-invalid" : ""}}" value="{{old('email')}}" placeholder="user@mail.com" type="text" name="email" id="email"/>
    <div class="invalid-feedback">
            {{$errors->first('email')}}
    </div>
    <br>

    <label for="password">Password</label>
    <input class="form-control {{$errors->first('password')? "is-invalid" : ""}}" value="{{old('password')}}" placeholder="password" type="password" name="password" id="password"/>
    <div class="invalid-feedback">
            {{$errors->first('password')}}
    </div>
    <br>

    <label for="password_confirmation">Password Confirmation</label>
    <input class="form-control {{$errors->first('password_confirmation')? "is-invalid" : ""}}" value="{{old('password_confirmation')}}" placeholder="password confirmation" type="password" name="password_confirmation" id="password_confirmation"/>
    <div class="invalid-feedback">
            {{$errors->first('password_confirmation')}}
    </div>
    <br>
    

    <input class="btn btn-primary" type="submit" value="Save"/>
</form>

@endsection