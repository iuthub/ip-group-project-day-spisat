<nav class="navbar navbar-light bg-light">
	<a class="navbar-brand" href="#">
		<img src="images/logo.jpg" width="40" class="d-inline-block align-top" alt="">
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
           {{-- <li class="nav-item">
                <img src="images/logo.jpg" width="40" class="d-inline-block align-top" alt="">
            </li>--}}
			<li class="nav-item active p-2 ml-5 mr-5">
				<a class="nav-link" href="{{ route('jobsJobs') }}">Home</a>
			</li>
			<li class="nav-item dropdown p-2 ">
				<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Categories </a>
				<div class="dropdown-menu border-0" aria-labelledby="navbarDropdown">
					<a class="dropdown-item" href="IT.html">IT</a>
					<a class="dropdown-item" href="medicine.html">Medicine</a>
					<a class="dropdown-item" href="Education.html">Education</a>
				</div>
			</li>
			<li class="nav-item">
				<a class="nav-link p-3 ml-5 mr-5" href="{{ route('aboutPageAbout') }}">About</a>
			</li>
			<li class="nav-item">
				<a class="nav-link p-3  mr-5" href="contacts.html">Contact Us</a>
			</li>
			<li class="nav-item">
				<a class="nav-link p-3 mr-5" href="#">Log In</a>
			</li>

		</ul>
		<div class="float-right">
			<form class=" form-inline">
				<input class="form-control " type="search" placeholder="Search" aria-label="Search">
				<button class="btn btn-outline-success my-sm-0" type="submit">Search</button>
			</form>
		</div>
	</div>
</nav>
