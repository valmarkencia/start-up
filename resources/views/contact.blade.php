@extends('layouts.app')

@section('content')
		<!-- end of latest projects section -->
		<div style="background-image: url('/img/contact-bg.jpg'); background-size: cover;">
		<div class="container">
			<div class="section contact-page" id="about-me">
				<h2>Contact<div class="title-bar">&nbsp;</div></h2>
				 @if (session('sent-mail'))
				 <div>
                    {{ session('sent-mail') }}
                </div>
				 @elseif(session('error'))
				 <div>
                    {{ session('error') }}
                </div>
				 @else
				<form action="/sendmail" method="POST">
                <div style="margin-bottom:10%;">Want to make your game-changing idea come to life? Work with me!</div>
                    {{csrf_field()}}
                    <input required type="text" name="name" class="form-control" placeholder="Name">
                    <input required type="email" name="email" class="form-control" placeholder="Email">
                    <textarea required name="msg" class="form-control" placeholder="Message" rows="3" style="max-width: 100% !important;"></textarea>
                    <button class="btn btn-block contact" type="submit">Send</button>
                </form>
                @endif 
			</div>
		</div>
	
	</div>
		
@endsection