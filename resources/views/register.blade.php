@extends('layout.app')
@section('tittle',"Register")
@section('style')
<style type="text/css">
	body{
		background-size: cover;
	  overflow-x: hidden;

	}
	
	.row{
		position: relative;
		top: 150px;
		left: 20px;
	}
	#myVideo {
  position: fixed;
  overflow: hidden;
  right: 0;
  bottom: 0;
  z-index: -20;
  min-width: 100%; 
  min-height: 100%;
   -webkit-filter: grayscale(60%); /* Safari 6.0 - 9.0 */
  filter: grayscale(60%);
}
	.anim{
       animation: type 5s forwards ;
      
       animation-iteration-count: infinite ;
       overflow: hidden;
       white-space: nowrap;
       border-right: 1px solid black;
       width: 22.2ch;

	}
	@keyframes type{
		0%{
			width: 12.5ch;
		}
		70%{
			width: 22.2ch;

		}
	}

	input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

hr {
  border: 1px solid #f1f;
  margin-bottom: 25px;
}

/* Set a style for all buttons */
button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

button:hover {
  opacity:1;
}

/* Extra styles for the cancel button */
.cancelbtn {
  padding: 14px 20px;
  background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn, .signupbtn {
  float: left;
  width: 50%;
}

/* Add padding to container elements */
.container {
  padding: 16px;
  width: 600px;
  color: white;
  background:rgb(33,33,33,0.5);
  position: absolute;
  top: 0;
  left: 40%;
}

/* Clear floats */
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 768px) {
	body{
		overflow: auto;
	}
  .cancelbtn, .signupbtn {
     width: 100%;
  }#wr{
  	position: fixed;
  	top: 5px;
  	z-index: +20;

  }
  #write{
  	width: 60%;
  }
  .container{
  	position: absolute;
  	width: 90%;
  	top: 23%;
  	left: 3%;
  }

 
}
 #write{
  	padding: 16px;
  color: white;
  background:rgb(33,33,33,0.9);
  width: 300px;
  }
</style>
@endsection
@section('script')

@endsection
@section('main')
<video autoplay muted loop id="myVideo">
  <source src="/vedio/bacreg.mp4" type="video/mp4">
  Your browser does not support HTML5 video.
</video>
<div class="row align-items-center" id="wr">
	 <div class="col-lg-6 col-md-6" id="write">
	<h2>Lara <b style="color: rgb(211,47,47);">Shop</b></h2>
	<h4 class="anim">Easy way to do <span style="color:dodgerblue">SHOPPING</span></h4>
</div>
</div>
<!-- form-->
<form action="reg" method="post"  >
  <div class="container">
    <h1>Sign Up</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>
    
     <div class="col-md-12">
      <label><b>Name</b></label>
     <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

       @if ($errors->has('name'))
        <span class="help-block">
        <strong>{{ $errors->first('name') }}</strong>
         </span>
         @endif
        </div>
  
 
    <div class="col-md-12">
         <label><b>Email</b></label>
         <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

          @if ($errors->has('email'))
           <span class="help-block">
           <strong>{{ $errors->first('email') }}</strong>
           </span>
             @endif
        </div>

   <div class="col-md-12">
         <label><b>Password</b></label>
         <input id="password" type="password" class="form-control" name="password" value="{{ old('password') }}" required>

          @if ($errors->has('password'))
           <span class="help-block">
           <strong>{{ $errors->first('password') }}</strong>
           </span>
             @endif
        </div>
    <div class="col-md-12">
      <label><b>Confirm password</b></label>
       <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
      </div>
     <div class="col-md-12">
         <label><b>Contact</b></label>
         <input id="contact" type="text" class="form-control" name="contact" value="{{ old('contact') }}" required>

          @if ($errors->has('contact'))
           <span class="help-block">
           <strong>{{ $errors->first('contact') }}</strong>
           </span>
             @endif
        </div>
    <input type="hidden" name="_token" value="{{csrf_token()}}">
    <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

    <div class="clearfix">
      <button type="button" class="cancelbtn">Cancel</button>
      <button type="submit" class="signupbtn">Sign Up</button>
      
    </div>
  </div>
</form>
@endsection