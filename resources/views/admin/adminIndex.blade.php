@extends('layouts.admin_layout')
@section('content')
@include('eror_info.eror_info')
<a href="{{ route ('adminCreate')}}" class="butt">New Post</a>

		<div class="container-fluid mt-5">
			<h2 class="blazingJob" >Blazing jobs</h2>
		</div>


        <div class="container-fluid pt-3">
            <div class="row  styleblog ">
                <div class="col-12 text-center styleh1">>{{ $post->title }} </div>
                <p>{{ $post->content }}</p>
                    <div class="container mt-0"style="text-align:center">
                        <a href="{{ route('adminEdit', ['id'=> $post->id ]) }}">Edit</a> |
                        <a href="{{ route('adminDelete', ['id'=>  $post->id ]) }}">Delete</a>
                    </div>
                </div>
            </div>
			<div class="container-fluid pt-3">
				<div class="row  styleblog ">
					<div class="col-12 text-center styleh2">Senior Resident - Neonatology</div>
					<p class="text-center"><br>
						JOB DESCRIPTION OF Senior Resident - (Paediatrics & Neonatology)
						Qualification: Post Graduation in Diploma/Degree
						Reporting to: Head- Medical Services
						Job Duties:
						To take detail history. Put initial treatment order.
						To take the rounds of all the patients. To track the investigation results. Check all the vitals of the patients. To see the progress of the patient. Inform the consultant.
                        <br></p>
                        <div class="container mt-0"style="text-align:center">
                            <a href="{{ route('adminEdit', ['id'=> $post->id ]) }}">Edit</a> |
                            <a href="{{ route('adminDelete', ['id'=>  $post->id ]) }}">Delete</a>
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
                            <a href="{{ route('adminEdit', ['id'=> $post->id ]) }}">Edit</a> |
                            <a href="{{ route('adminDelete', ['id'=>  $post->id ]) }}">Delete</a>
                        </p>
						</div>
					</div>
				</div>
@endsection
