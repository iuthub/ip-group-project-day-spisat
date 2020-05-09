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
           {{-- <li class="nav-item">
                <img src="images/logo.jpg" width="40" class="d-inline-block align-top" alt="">
            </li>--}}
			<li class="nav-item active p-2 ml-5 mr-5">
				<a class="nav-link" href="{{ route('jobJobs') }}">Home</a>
			</li>

			<li class="nav-item">
				<a class="nav-link p-3 ml-5 mr-5" href="{{ route('aboutPage') }}">About</a>

			</li>
			<li class="nav-item">
				<a class="nav-link p-3  mr-5" href="{{ route('Contact') }}">Contact Us</a>
			</li>

            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle p-3  mr-5" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                  Log Out <span class="caret"></span>
                </a>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </li>
		</ul>
	</div>
</nav>
