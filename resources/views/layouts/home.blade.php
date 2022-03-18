<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1,minimum-scale=1">
    <title>HTML & CSS</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha256-eZrrJcwDc/3uDhsdt61sL2oOBY362qM3lon1gyExkL0=" crossorigin="anonymous" />
    <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>
<body>
  <header>
    <nav class="navbar navbar-expand-md navbar-li bg-purple fixed-top" id="navbar">
      <a class="navbar-brand" href="#">#</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
          <span class="navbar-toggler-icon"></span>
      </button>
      <div class=" collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item ml-8 active text-right">
            <a class="nav-link" href="dashboard.html">Dashboard <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item text-right">
            <a class="nav-link" href="roleinfo.html">Role Info</a>
          </li>
        </ul>
        <ul class="navbar-nav">
          <li class="nav-item dropdown text-right">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <img src="user.png" alt="img" class="rounded-circle" height="22px" width="22px">
            </a>
            <div class="dropdown-menu dropdown-menu-right float-right" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="#"><i class="fa fa-sign-out" aria-hidden="true"></i>Logout</a>
            </div>
          </li>
        </ul>
      </div>
    </nav>
  </header>

  <div class="container-fluid">
    <div class="row">
      <div class="col-2 col-s-5 col-m-3" >
          <div class="sidebar-container" id="sidebar" >
              <div class="sidebar-logo">
                <a href="">
                <span>Home</span>
                </a>
                <a href="" id="togglesidebar">            
                  <i class="fa fa-bars float-right" id="toggle-icon" aria-hidden="true"></i>         
                </a>
              </div>
              <ul class="sidebar-navigation">
                <li>
                  <a href="home.html">
                    <i class="fa fa-home" aria-hidden="true"></i><span>Home</span> 
                  </a>
                </li>
                <li>
                  <a href="user.html">
                    <i class="fa fa-user" aria-hidden="true"></i><span>Users</span>
                    
                  </a>
                </li>
              </ul>
          </div>
      </div>

      @yield('content')

      <div class="col-10 col-s-7 col-m-9">
        <div class="row justify-content-center mt-6">      
          <div class="col-s-7 col-m-6 col-8 mt-4">
            <div class="jumbotron jumbotron-fluid">
              <div class="container">
                <h1 class="display-4 text-center">Welcome to dashboard</h1>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  <script>
    $('#togglesidebar').on('click', function(e){
      e.preventDefault();
      $('#content').toggleClass('content');
      $('#sidebar').toggleClass('sidebar-collapse-container');
      $('#navbar').toggleClass('navbar-collapse-navbar');
      $('#toggle-icon').toggleClass('fa-bars fa-times')
    });
  </script>
</body>
</html>