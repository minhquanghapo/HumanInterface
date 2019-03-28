@extends('HI_03.layouts.master')

@section('content')
	<main>
		<div class="header-video">
			<div id="hero_video">
				<div class="content">
					<h3>Find schedules!</h3>
					<form method="post" action="{{ route('grid-list') }}">
						@csrf
						<div id="custom-search-input">
							<div class="input-group">
								<input type="text" class=" search-query" placeholder="">
								<input type="submit" class="btn_search" value="Search">
							</div>
							<ul>
								<li>
									<input type="radio" id="phone_number" name="radio_search" value="phone_number" checked>
									<label for="phone_number">Phone number</label>
								</li>
								<li>
									<input type="radio" id="email" name="radio_search" value="email">
									<label for="email">Email</label>
								</li>
								<li>
									<input type="radio" id="code" name="radio_search" value="code">
									<label for="code">Code</label>
								</li>
							</ul>
						</div>
					</form>
				</div>
			</div>
			<img src="{{ asset('HI_03/img/video_fix.png') }}" alt="" class="header-video--media" data-video-src="{{ asset('HI_03/video/intro') }}" data-teaser-source="{{ asset('HI_03/video/intro') }}" data-provider="" data-video-width="1920" data-video-height="750">
		</div>
		<!-- /Header video -->
		

	</main>
@endsection

@section('SPECIFIC SCRIPTS')
	<!-- SPECIFIC SCRIPTS -->
	<script src="{{ asset('HI_03/js/video_header.js') }}"></script>
	<script>
		'use strict';
		HeaderVideo.init({
			container: $('.header-video'),
			header: $('.header-video--media'),
			videoTrigger: $("#video-trigger"),
			autoPlayVideo: true
		});
	</script>
@endsection