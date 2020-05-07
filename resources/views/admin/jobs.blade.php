@extends('layouts.master')
@section('content')
<div>
	@include('extra.carousel')
</div>
<div class="container-fluid mt-4">
	<h2 class="blazingJobs">Blazing jobs</h2>
</div>
<br>
<div class="container-fluid pt-3">
	<div class="row  styleblog ">
		<div class="col-12 text-center styleh1">>{{ $post->title }} </div>
		<p>{{ $post->content }}</p>

            <div class="container mt-0"style="text-align:center">
                <a href="{{ route('blogPost', ['id'=> $post->id]) }}">More </a>
            </div>
        </div>
    </div>

	<div class="container-fluid pt-3">
		<div class="row styleblog">
			<div class="col-12 text-center styleh2">Senior Resident - Neonatology</div>
			<p class="text-center"><br>
				JOB DESCRIPTION OF Senior Resident - (Paediatrics & Neonatology)
				Qualification: Post Graduation in Diploma/Degree
				Reporting to: Head- Medical Services
				Job Duties:
				To take detail history. Put initial treatment order.
                To take the rounds of all the patients. To track the investigation results. Check all the vitals of the patients. To see the progress of the patient. Inform the consultant. <br></p>
                <div class="container mt-0"style="text-align:center">
                    <a href="...">More </a>
                </div>
			</div>
		</div>
		<div class="container-fluid pt-3">
			<div class="row  styleblog ">
				<div class="col-12 text-center styleh3">Java Developer - Product Development</div>
				<p class="text-center"><br>
					The International School of Moscow is looking for an exceptional Director of Admissions and Marketing capable to create and support outstanding customer service practices and act as an ambassador for the school through external outreach.
					- The International School of Moscow is looking for an exceptional Director of Admissions and Marketing capable to create and support outstanding customer service practices and act as an ambassador for the school through external outreach.
					- Strong leadership skills and proven ability to manage a team to achieve and succeed desired outcomes
                    <br></p>
                    <div class="container mt-0"style="text-align:center">
                        <a href="...">More </a>
                    </div>
				</div>
			</div>
@endsection
