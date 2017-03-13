@extends('layouts.app')

@section('content')
		<!-- end of latest projects section -->
	<div class="container">
		<!-- start of who am i section -->
		<div class="aboutme section" id="about-me">
			<h2>Who Am I<div class="title-bar">&nbsp;</div></h2>
			<div class="aboutme-desc">
				<span>
					I am a freelance UX/UI designer in Southeast Asia. I like to give my clients a valuable work and would never compromise quality to just get things done. I put a lot of effort to make my product efficient in the best way possible. I am advancing my skills in every project I got to further meet my client's needs. I never settle to things I am comfortable with, every client is different therefore every client needs different solutions.
				</span>
			</div>
		</div>
		<!-- end of who am I section -->

	</div>
		<div class="my-services section">
			<div class="container">
				<h2>My Services<div class="title-bar">&nbsp;</div></h2>
				<div class="row services">
					<div class="col-md-4">
					<div itemscope itemtype="http://schema.org/Product" class="services-box">
						<h3 itemprop="name">User Experience Design</h3>
						<p itemprop="description">
							Easy to use websites/apps can lead users know exactly what your services or business is all about. 
						</p>
					</div>
					</div>
					<div itemscope itemtype="http://schema.org/Product" class="col-md-4">
					<div class="services-box">
						<h3 itemprop="name">Web Design and Development</h3>
						<p itemprop="description">
							Good Web design will keep your viewers stay longer in your website and explore more about your business. Who wants to look to an ugly website right?
						</p>
					</div>
					</div>
					<div itemscope itemtype="http://schema.org/Product" class="col-md-4">
					<div class="services-box">
						<h3 itemprop="name">User Interface Design</h3>
						<p itemprop="description">
							Want to make your app look cool and engaging? Nobody wants to use an app that is not appealing to the eyes. 
						</p>
					</div>
					</div>
				</div>
			</div>
		</div>

		<div class="section how-i-work">
			<div class="container">
			<div class="row">
			<div class="col-md-7"></div>
			<div class="col-md-5">
				<h3>How I Work<div class="title-bar">&nbsp;</div></h3>

				<ul class="steps">
					<li>		
						<span class="circle">1</span>
						<span class="steps-text">Tell me the blueprints of the idea</span>
					</li>
					<li>		
						<span class="circle">2</span>
						<span class="steps-text">I will examine the idea carefully</span>
					</li>
					<li>		
						<span class="circle">3</span>
						<span class="steps-text">I’ll suggest solutions</span>
					</li>
					<li>		
						<span class="circle">4</span>
						<span class="steps-text">Definition of Agreement</span>
					</li>
					<li>		
						<span class="circle">5</span>
						<span class="steps-text">Design</span>
					</li>
					<li>		
						<span class="circle">6</span>
						<span class="steps-text">Development</span>
					</li>
					<li>		
						<span class="circle">7</span>
						<span class="steps-text">Test-drive</span>
					</li>
					<li>		
						<span class="circle">8</span>
						<span class="steps-text">Launch!</span>
					</li>
				</ul>
				</div>
			</div>
			</div>
		</div>

@endsection