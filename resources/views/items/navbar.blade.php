<nav class="navbar navbar-default navbar-expand-lg navbar-light">
  <div class="navbar-header d-flex col">
    <a class="navbar-brand" href="#">Brand<b>Name</b></a>     
    <button id="btnto" type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle navbar-toggler ml-auto">
      <span class="navbar-toggler-icon" style="background: #FF5722"></span>
      <span class="icon-bar" style="background: #FF5722"></span>
      <span class="icon-bar" style="background: #FF5722"></span>
      <span class="icon-bar" style="background: #FF5722"ss></span>
    </button>
  </div>
  <!-- Collection of nav links, forms, and other content for toggling -->
  <div id="navbarCollapse" class="collapse navbar-collapse justify-content-start">
    <ul class="nav navbar-nav">
      <li class="nav-item"><a href="#" class="nav-link">Home</a></li>
      <li class="nav-item"><a href=".cate" class="nav-link">Shop</a></li>      
      <li class="nav-item">  <a  class="nav-item" href="showcart">View cart </a></li>   
      
      
      <li class="nav-item active"><a href="billview" class="nav-link">Bill</a></li>
      
       <li class="nav-item">
        <a href="#log" onclick="loginshow()" id="logbtn" class=" nav-link btn btn-sm btn-warning"><span class="glyphicon glyphicon-log-in"></span> login</a>
      </li>
    </ul>   
    <ul class="nav navbar-nav navbar-right ml-auto">      
      <li class="nav-item dropdown">
        <a data-toggle="dropdown" id="ser" class="nav-link dropdown-toggle" href="#"><i class="fa fa-search"></i></a>
        <a data-toggle="dropdown" class="nav-link dropdown-toggle hide" href="#"><i class="fa fa-close"></i></a>
        <ul class="dropdown-menu">
          <li>
                        <form>
                            <div class="input-group search-box">                
                                <input type="text" id="search" style="color: #9E9E9E;" class="form-control" placeholder="Search here...">
                <span class="input-group-btn">
                  <button type="button" class="btn btn-primary"><i class="fa fa-search"></i></button>
                </span>
                            </div>
                        </form>                        
          </li>
        </ul>
      </li>
      
      
    </ul>
    
  </div>
</nav>