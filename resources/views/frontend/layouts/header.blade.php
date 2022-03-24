<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Classic - Responsive Bootstrap 4.0 Template</title>
    <!-- load stylesheets -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400">  
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css') }}">                                      
    <link rel="stylesheet" href="{{ asset('frontend/css/templatemo-style.css') }} ">
</head>

    <body>
        <div class="tm-header">
            <div class="container-fluid">
                <div class="tm-header-inner">
                    <a href="#" class="navbar-brand tm-site-name">Classic</a>
                    
                    <!-- navbar -->
                    <nav class="navbar tm-main-nav">

                        <button class="navbar-toggler hidden-md-up" type="button" data-toggle="collapse" data-target="#tmNavbar">
                            &#9776;
                        </button>
                        
                        <div class="collapse navbar-toggleable-sm" id="tmNavbar">
                            <ul class="nav navbar-nav">
                                @foreach ($menuItems as $slug=>$title)
                                <li class="nav-item {{ request()->segment(1)==$slug ? 'active' : ''}} ">
                                    <a href="{{ route('front.pages',$slug) }}" class="nav-link">{{ $title }}</a>
                                </li>
                                @endforeach
                            </ul>                        
                        </div>
                        
                    </nav>  

                </div>                                  
            </div>            
        </div>