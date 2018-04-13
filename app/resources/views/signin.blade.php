@extends('master')

@section('title')
Sign In | D'Lite
@endsection

@section('body')
 <h1 class="text-center">Sign In</h1>
 <br>
 <div class="row">
     <div class="col-md-4"></div>
     <div class="col-md-4">
     <form action="{{route('postsignin')}}" method="post">
       <div class="form-group">
         <label for="email">Your Email:</label>
         <input type="text" class="form-control" id="email" name="email">
       </div>
       <div class="form-group">
         <label for="password">Your Password:</label>
         <input type="password" class="form-control" id="password" name="password">
       </div>
       @if($Error=="Wrong password")
       <div class="alert alert-danger" role="alert">
          Wrong Password—Check it out!
       </div>
       @endif
       <input type='hidden' name='_token' value='{{Session::token()}}'>
       <button type="submit" class="btn btn-primary">Login</button>
     </form>
   </div>
   <div class="col-md-4"></div>
</div>
@endsection
