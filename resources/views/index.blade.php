@extends('layouts.app')

@section('content')
@if(Auth::user())<div class="container">
<h1>Logged in</h1>
</div>
@else
		<!-- latest project section -->
		<div class="latest-works section">
			<div class="container">
				<h2><span class="bold">LATEST</span> WORKS</h2>
				<div class="row">
					<div class="col-md-4 project-container">
						<div class="thumbnail">
							<img src="/img/homepage2.jpg">
						</div>
						<div class="desc-container">
							<div class="description">
								<span class="title"><!-- <img src="/img/perocom-logo.png"> -->Perocom Auto Pte Ltd</span>
								Perocom Auto Pte Ltd wants to revamp their site from their old templated design.
							
							<a class="pull-right success btn disabled" href="javascript:">Details coming soon >></a>
							</div>
						</div>

					</div>
					<div class="col-md-4 project-container">
						<div class="thumbnail">
							<img src="/img/home-page-2nd-concept.jpg">
						</div>
						<div class="desc-container">
							<div class="description">
								<span class="title"><!-- <img src="/img/little.png"> -->Little Montessori Preschool</span>
								Little Monessori preschool wants to revamp their website to a more fun, playful and creative design.

							<a class="pull-right success btn disabled" href="javascript:">Details coming soon >></a>
							</div>
						</div>
					</div>
					<div class="col-md-4 project-container">
						<div class="thumbnail">
							<img src="/img/home.jpg">
						</div>
						<div class="desc-container">
							<div class="description">
								<span class="title"><!-- <img src="/img/ftl-logo.png"> -->Freelance Training London</span>
								Freelancer Training London required me to do a wordpress design that will suit his business.

							<a class="pull-right success btn disabled" href="javascript:">Details coming soon >></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- end of latest projects section -->
		<div class="container">
		<!-- start of who am i section -->
		<div class="aboutme section">
			<div class="profile">
				<img src="/img/resize.jpg" alt="mark anthony valencia">
			</div>
			<h2><span class="bold">ABOUT</span> ME</h2>
			<div class="aboutme-desc">
				<span>
					My name is Mark Anthony Valencia and I am a web designer from the Philippines specialized in website design and development. I have been in the field for 2 years and I love what I am doing since.
				
				</span>
			</div>
		</div>
		<!-- end of who am I section -->

	</div>
		<div class="my-services section">
			<div class="container">
				<h2> <span class="bold">SERVICES</span></h2>
				<div class="row services">
					<div class="col-md-3">
						<img src="/img/desktop.png">
						<h4>WEB DESIGN</h4>
					</div>
					<div class="col-md-3">
						<img class="services" src="/img/print.png">
						<h4>PRINT DESIGN</h4>
					</div>
					<div class="col-md-3">
						<img class="services" src="/img/ui.png">
						<h4>UI/UX DESIGN</h4>
					</div>
					<div class="col-md-3">
						<img class="services" src="/img/code.png">
						<h4>WEB DEV</h4>
					</div>
				</div>
			</div>
		</div>
@endif
@endsection