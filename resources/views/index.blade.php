@extends('layout.app')
@section('tittle',"home")

@section('style')
<style type="text/css">
  body{
    font-family: 'Varela Round', sans-serif;

  }
  #con{
      margin-top: 80px;
    }
  .baner{
    width: 100%;
    height: 150px;
    
    position: absolute;
    top: 0;
  }
  .form-control {
    box-shadow: none;
    border-radius: 4px;
  }
  .form-control:focus {
    border-color: #f08373;
    box-shadow: 0 0 8px rgba(0,0,0,0.1);
  }
  .navbar-header.col {
    padding: 0 !important;
  } 
  .navbar {
    background:#FFF;
    margin: 10px;
    margin-top: 20px;
    padding-left: 16px;
    padding-right: 16px;
    border-bottom: 1px solid #dfe3e8;
    border-radius: 0;
    position: sticky;
    top: 0;
  }
  .navbar .navbar-brand, .navbar .navbar-brand:hover, .navbar .navbar-brand:focus {
    padding-left: 0;
    font-size: 20px;
    padding-right: 50px;
  }
  .navbar .navbar-brand b {
    font-weight: bold;
    color: #eb5844;   
  }
  .navbar ul.nav li a {
    color: #888;
  }
  .navbar ul.nav li a:hover, .navbar ul.nav li a:focus {
    color: #f08373 !important;
  }
  .navbar ul.nav li.active > a, .navbar ul.nav li.open > a {
    color: #eb5844 !important;
    background: transparent !important;
  }
  .search-box {
    width: 100%;
        position: relative;
    } 
    .search-box input {   
    border-color: #dfe3e8;        
    box-shadow: none
    }
  .search-box input, .search-box .btn {
    min-height: 38px;
    border-radius: 2px;
  }
  .search-box .input-group-btn .btn {
    border-color: #eb5844;
    background: #eb5844;
    outline: none;
  }
  .navbar .nav-item i {
    font-size: 18px;
    line-height: 16px;
  }
  .navbar .navbar-right .dropdown-toggle::after {
    display: none;
  }
   

  .navbar .dropdown-menu {
    border-radius: 1px;
    border-color: #e5e5e5;
    box-shadow: 0 2px 8px rgba(0,0,0,.05);
  }
  .navbar .dropdown-menu li a {
    padding: 6px 20px;
  }
  .navbar .navbar-right .dropdown-menu {
    width: 400px;
    padding: 20px;
    left: auto;
    right: 0;
        font-size: 14px;
  }
  .hide {
    display: none !important;
  }

  
  @media (max-width: 768px){

    .navbar .navbar-right .dropdown-menu {
      width: 100%;
      background: transparent;
      padding: 10px 20px;
      
      position: absolute;
      top: -10px;
      left: 15px;

    }
    .navbar .input-group {
      width: 100%;

    }
    #con{
      margin-top: 320px;
      z-index: -5;
    }
    .baner
    {
      height: 390px;
      background: url("/images/back1.jpg");
    }
    

    
    
  }
  #logincol{
    background-image: linear-gradient(-45deg,#EC9F05,#FF4E00);
    padding-top: 140px;
    line-height: 30px;
    height: 600px;
    color: white;
    font-family: arial;

  }
  #logincon{
    height: 600px;
    background: white;
  }
  #btn_3{
    display: block;
    width: 210px;
    border-radius: 15px;
    border:1px solid white;
    text-decoration: none;
    color: white;
    transition: 0.4s;
  }
  #btn_3:hover{
    background: white;
    color: #EC9F05;

  }
  #btn_4{
    display: block;
    width: 100%;
    border-radius: 25px;
    background-image: linear-gradient(-45deg,#EC9F05,#FF4E00);
    border:none;
    outline: none;
    text-decoration: none;
    color: white;
    transition: 0.4s;
  }
  #btn_4:focus{
     background-image: linear-gradient(-45deg,#FF4E00,#EC9F05);
  }
  .login_part_form_iner{
    padding-top: 140px;
    line-height: 40px;
    height: 600px;
  
    font-family: arial;
  }
  .form-control{
    border:none;
    outline: none;
    border-bottom: 2px solid #757575;
    color: white;
    background: transparent;

  }
  .form-control:focus{
    border-bottom: 1px solid #757575;
  }
  .pad15{
    
  
  display: inline-block;
  margin: auto;
  border-radius: 10px;
  position: relative;
  text-align: center;
  padding: 5px;
  box-shadow: -1px 15px 30px -12px black;
  z-index: 20;
  }
  .item{
    padding-top: 40px;
  padding-bottom: 40px;

  
 =

  }
  .card{
    position: relative;
    width: 17rem;
  height: 230px;
  margin-bottom: 35px;
  background-color:rgb(66,66,66);
  color: white;
  border-radius: 10px;
  border-top-left-radius: $border-radius-size;
  border-top-right-radius: $border-radius-size;
  padding-top: 5px;
  margin-bottom: 20px;
  }
  .card-body{
     background-color: rgb(66,66,66);
     padding-bottom: 5px;

     border-radius: 10px;
  }
  
</style>
@endsection

@section('script')
<script type="text/javascript">
  $(document).ready(function(){
    var dropdown = $(".navbar-right .dropdown");
    var toogleBtn = $(".navbar-right .dropdown-toggle");
    
    // Toggle search and close icon for search dropdown
    dropdown.on("show.bs.dropdown", function(e){
      toogleBtn.toggleClass("hide");
    });
    dropdown.on("hide.bs.dropdown", function(e){
      toogleBtn.addClass("hide");
      toogleBtn.first().removeClass("hide");
    });
  });
 function loginshow()
  { var x=document.getElementById('log');

     x.style.display="block";
    


  }
  function loginhide()
  { var x=document.getElementById('log');

     x.style.display="none";
    
     

  }
  

</script>
<link rel="stylesheet" type="text/css" href="/css/itemslider.css">
<script type="text/javascript" src="/js/itemjs.js"></script>
@endsection


 @section('nav-bar')
  @include('items.navbar')
  @endsection
  @section('main')



 <br><br><br><br><br>

<!-- image slider........-->
<div class="container" id="con">
 
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="/images/slider1.png" alt="Los Angeles" style="width:100%;">
      </div>

      <div class="item">
        <img src="/images/slider2.jpg" alt="Chicago" style="width:100%;">
      </div>
    
      <div class="item">
        <img src="/images/slider3.jpg" alt="New york" style="width:100%;">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
@foreach($data as $row)
<div class="cate" style="padding-bottom: 10px; margin-top: 10px;">
  <h3  style=" display: block; width: 100%; height: 45px; padding: 10px; background: url('/images/catbak.png'); background-repeat: no-repeat; color: white; padding-left: 30px; letter-spacing: 5px; "><b>{{$row['name']}}s</b></h3>

  <!-- iteam slider-->
  
  <div class="container">
  <div class="row">
    <div class="MultiCarousel" data-items="1,3,5,6" data-slide="1" id="MultiCarousel"  data-interval="1000">
            <div class="MultiCarousel-inner">
              @foreach($indata as $rowdata)
  @if($row->name==$rowdata->category)
  
                <div class="item">
                    <div class="pad15">
                        <div class="card"  >
  <img class="card-img-top" name="image" style="max-width: 100%; max-height: 45%;" src="/shirts/{{$rowdata->image}}"  alt="Card image cap">
  <div class="card-body">
    <h3 class="card-title" name="name">{{$rowdata->name}}</h3>
    <p class="card-text" name="description">{{$rowdata->description}}</p>
   
    <h5><span style="color: rgb(211,47,47);">Price:</span>{{$rowdata->price}}Rs.</h5>
    <a class="btn btn-success" href="cartfun{{$rowdata->id}}">Add to cart</a>
    
  </div>
</div>

                    </div>
                </div>
              
@endif
@endforeach
                
            </div>
            <button class="btn btn-primary leftLst"><</button>
            <button class="btn btn-primary rightLst">></button>
        </div>
  </div>
</div>
@endforeach
<!-- login-->
<div class="container-fluid" id="log" style="position: absolute; top: 0%;z-index:40;  display: block; background: rgb(0,0,0,0.7); width: 100%; height: 300%; padding: 30px; ">
  <center>
  <div class="container" style=" background: white; ">
    
    
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6" id="logincol">
                    <div class="login_part_text text-center">
                        <div class="login_part_text_iner">

                            <h2>New to our Shop?</h2>
                            <p>There are advances being made in science and technology
                                everyday, and a good example of this is the</p>
                                <center>
                            <a href="regist"  id="btn_3">Create an Account</a>
                            </center>


                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="login_part_form">
                        <div class="login_part_form_iner" >
                        <a  onclick="loginhide()" class="btn btn-sm btn-danger" style="position: absolute; top: 4%; left: 3%">
                            <span class="glyphicon glyphicon-remove"></span> </a>
                            <h3 style="line-height: 35px; color: #9E9E9E;font-family: arial; margin-bottom: 50px;" >Welcome Back ! <br>
                                Please Sign in now</h3>
                            <form class="row contact_form" action="#" method="post" novalidate="novalidate">
                                <div class="col-md-12 form-group p_star">
                                    <input type="text" class="form-control" id="name" name="name" value=""
                                        placeholder="Username" style="color: #9E9E9E; ">
                                </div>
                                <div class="col-md-12 form-group p_star">
                                    <input type="password" class="form-control" id="password" name="password" 
                                    value="" placeholder="Password" style="color: #9E9E9E; ">
                                </div>
                                <div class="col-md-12 form-group">
                                    <div class="creat_account d-flex align-items-center">
                                        <input type="checkbox" id="f-option" name="selector" style="outline: none;border:none; background: #9E9E9E;">
                                        <label for="f-option" style="color: #9E9E9E;">Remember me</label>
                                    </div>
                                    <button type="submit" value="submit"  id="btn_4">
                                    <span class="glyphicon glyphicon-log-in"></span> LOG IN
                                    </button>
                                    <a class="lost_pass" href="#" style="text-decoration: none; 
                                    color: #9E9E9E; float: right;">forget password?</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
      
   </center>

  
</div>

@endsection                                                                                    