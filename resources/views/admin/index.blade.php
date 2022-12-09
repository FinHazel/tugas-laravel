<!doctype html>
<html lang="en">
  <head>
  	<title>@yield('Judul')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="{{asset('css1/style.css')}}">
  </head>
  <body>
		
		<div class="wrapper d-flex align-items-stretch">
			<nav id="sidebar" class="order-last" class="img" style="background-image: url(images/bg_1.jpg);">
				<div class="custom-menu">
					<button type="button" id="sidebarCollapse" class="btn btn-primary">
	        </button>
        </div>
        <div class="">
		  		<h1><a href="index.html" class="logo">Kenitic <span>Blog Agency</span></a></h1>
	        <ul class="list-unstyled components mb-5">
	          <li class="active">
	            <a href="/"><span class="fa fa-home mr-3"></span> Home</a>
	          </li>
	          <li>
	              <a href="/apple"><span class="fa fa-user mr-3"></span> Apple</a>
	          </li>
	          <li>
              <a href="/samsung"><span class="fa fa-sticky-note mr-3"></span> Samsung</a>
	          </li>
	          <li>
              <a class="dropdown-item fa fa-user" href="{{ route('logout') }}"
			                            onclick="event.preventDefault();
										        document.getElementById('logout-form').submit();">
												{{ __('Logout') }}
											</a>
											<form id="logout-form" action="{{ route('logout') }}" method="POST" style="di">
										@csrf
									</form>
	          </li>
	          <li>
              <a href="#"><span class="fa fa-paper-plane mr-3"></span> Contacts</a>
	          </li>
	        </ul>

	        <div class="mb-5 px-4">
						<h3 class="h6 mb-3">Subscribe for newsletter</h3>
						<form action="#" class="subscribe-form">
	            <div class="form-group d-flex">
	            	<div class="icon"><span class="icon-paper-plane"></span></div>
	              <input type="text" class="form-control" placeholder="Enter Email Address">
	            </div>
	          </form>
					</div>

	        <div class="footer px-4">
	        	<p>
						  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib.com</a>
						</p>
	        </div>

	      </div>

    	</nav>

        <!-- Page Content  -->
      <div id="content" class="p-4 p-md-5 pt-5">
        @yield('Content')
      </div>
		</div>

    <script src="{{asset('js1/jquery.min.js')}}"></script>
    <script src="{{asset('js1/popper.js')}}"></script>
    <script src="{{asset('js1/bootstrap.min.js')}}"></script>
    <script src="{{asset('js1/main.js')}}"></script>
  </body>
</html>