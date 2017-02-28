@extends('layouts.app')

@section('content')
		<!-- end of latest projects section -->
		<div style="background-image: url('/img/contact-bg.jpg'); background-size: cover;">
		<div class="container">
			<div class="section" id="about-me" style="width: 30%; padding-top: 2%;">
				<h2>Contact<div class="title-bar">&nbsp;</div></h2>
				<form action="/sendmail" method="POST">
                <div style="margin-bottom:10%;">Want to make your game-changing idea come to life? Contact me!</div>
                    {{csrf_field()}}
                    <input required type="text" name="name" autocomplete="off" class="form-control" placeholder="Name">
                    <input required type="email" name="email" autocomplete="off" class="form-control" placeholder="Email">
                    <textarea required name="msg" class="form-control" placeholder="Message" rows="3" style="max-width: 100% !important;"></textarea>
                    <button class="btn btn-block contact" type="submit">Send</button>
                </form> 
			</div>
		</div>
	
	</div>
		
@endsection