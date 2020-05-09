<nav class="navbar navbar-light bg-light">
	<a class="navbar-brand">
		<img src="{{asset('images/logo.jpg')}}" width="40" class="d-inline-block align-top" alt="">
	</a>
	<h6 class="jobs"> Jobs for all <br>
	Announcement board
	</h6>
</nav>
<nav class="navbar navbar-expand-sm navbar-custom sticky-top">
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCustom">
	<i class="fa fa-bars fa-lg py-1 text-white"></i>
	</button>
	<div class="navbar-collapse collapse" id="navbarCustom">
		<ul class="navbar-nav">
			<li class="nav-item active p-2 ml-5 mr-5">
				<a class="nav-link" href="{{ route('jobJobs') }}">Home</a>
			</li>

			<li class="nav-item">
				<a class="nav-link p-3 ml-5 mr-5" href="{{ route('aboutPage') }}">About</a>

			</li>
			<li class="nav-item">
				<a class="nav-link p-3  mr-5" href="{{ route('Contact') }}">Contact Us</a>
			</li>

                </div>
            </li>
		</ul>
	</div>
</nav>
