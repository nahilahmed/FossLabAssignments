@extends('master')

@section('title')
Sign Up | D'Lite
@endsection
<head>
<link rel='stylesheet' href={{URL::to('src/css/signup1.css')}}>
</head>
@section('body')
<div class="container text-center">

  <h2>SIGNUP</h2>
<br>
<form action="{{route('postsignup')}}" method="post">
    <div class="group">
      <label>First Name</label><br>
      <input type="text" name="fname"required>
      <span class="highlight"></span>
      <span class="bar"></span>
    </div>




 <div class="group">
      <label>Last Name</label><br>
      <input type="text" name="lname"required>
      <span class="highlight"></span>
      <span class="bar"></span>
    </div>

      <div class="group">
      <label>Email</label><br>
      <input type="text" name="email"required>
      <span class="highlight"></span>
      <span class="bar"></span>
    </div>
@if($Error == "Wrong Password")
      <div>Wrong Password</div>
      @endif
    <div class="group">
      <label>Password</label><br>
      <input type="password" name="password"required>
      <span class="highlight"></span>
      <span class="bar"></span>
    </div>

    <div class="group">
      <label>Confirm Password</label><br>
      <input type="password" name="cpassword"required>
      <span class="highlight"></span>
      <span class="bar"></span>
    </div>

    <div class="group">
    <label>DOB</label><br>
     <input type="Date" name="dob"required>
      <span class="highlight"></span>
      <span class="bar"></span>
    </div>

    <div class="group">
      <label>Mobile No</label><br>
      <input type="text" name="Mobile" required>
      <span class="highlight"></span>
      <span class="bar"></span>
    </div>

    <div class="group">
    <input type='hidden' name='_token' value='{{Session::token()}}'>
    <br><br>
      <button type="Submit" class="btn btn-primary">Submit</button>
    </div>
</form>
</div>


@endsection
