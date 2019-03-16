@extends('layouts.front')
@section('title', 'Services')
@section('content')
<!-- inner banner -->
    <div class="inner_banner layer" id="home">
        <div class="container">
            <div class="agileinfo-inner">
                <h2 class="text-center text-white">
                    Services 
                </h2>
            </div>
        </div>
    </div>
    <!-- //inner banner -->
    <!-- breadcrumbs -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{ url('/') }}">Home</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">Services</li>
        </ol>
    </nav>
    <!-- //breadcrumbs -->

	
<!-- services -->
<section class="services py-5">
	<div class="container py-sm-3">
		<h3 class="heading text-capitalize mb-lg-5 mb-4"> Our Services  </h3>
		<div class="row service-grids">
			<div class="col-lg-3 col-sm-6">
				<div class="service-grid1">
					<span class="fa fa-globe"></span>
					<h4 class="my-3">Weddings</h4>
					<p>Discover beautiful bridal fashion and jewellery designers, hair and make-up artists, wedding photographers, florists, venues, planners and more when you visit A Most Curious.</p>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6 ">
				<div class="service-grid1">
					<span class="fa fa-book"></span>
					<h4 class="my-3">Parties</h4>
					<p>A party is a gathering of people who have been invited by a host for the purposes of socializing, ... Contents. 1 Description; 2 Types of parties. 2.1 Birthday party; 2.2 Surprise party; 2.3 Dinner party; 2.4 Garden party; 2.5 Cocktail party; 2.6 Tea .</p>				
				</div>
			</div>
			<div class="col-lg-3 col-sm-6">
				<div class="service-grid1">
					<span class="fa fa-diamond"></span>
					<h4 class="my-3">Entertainment</h4>
					<p>Entertaining Your Wedding Guests: 36 Awesome Ideas They'll Love. Magicians. There are few things more entertaining than magic. Caricaturist. Give guests a wonderful keepsake of your wedding by hiring a caricaturist. Fire Performers. Bouncy Castles. Retro Arcade. Photo Booths. Magic Mirror Photo Booths. Singing Waiters.</p>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6">
				<div class="service-grid1">
					<span class="fa fa-book"></span>
					<h4 class="my-3">Celebrations</h4>
					<p>Every anniversary is a milestone. Wedding anniversaries are celebrated in many different ways. People around the world find that doing something special on .</p>				
				</div>
			</div>
			<div class="col-lg-3 col-sm-6 mt-lg-5">
				<div class="service-grid1">
					<span class="fa fa-globe"></span>
					<h4 class="my-3">Events</h4>
					<p>An event is something that happens, especially when it is unusual or important. You can use events to describe all the things that are happening in a particular .</p>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6 mt-lg-mt-5">
				<div class="service-grid1">
					<span class="fa fa-book"></span>
					<h4 class="my-3">Catering</h4>
					<p>Cuisine on Cue offer a large range of services from formal to casual catering; for any corporate event, private event or wedding. In addition to catering, we can.</p>				
				</div>
			</div>
			<div class="col-lg-3 col-sm-6 mt-lg-mt-5">
				<div class="service-grid1">
					<span class="fa fa-diamond"></span>
					<h4 class="my-3">Makeup</h4>
					<p>The Makeup Collective, set-up by award-winning artist Jasmine Ringo, is an elite hair and makeup service based in Atlanta, Georgia. It provides an extensive array of styles for brides of all tones and skin types in the US and globally. Getting makeup-ready for the wedding day can be stressful.</p>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6 mt-lg-mt-5">
				<div class="service-grid1">
					<span class="fa fa-book"></span>
					<h4 class="my-3">photo / Video</h4>
					<p>Tired of hanging your wedding photos in basic frames? We’ve compiled some creative ways to cherish your photos, and significant other, for a lifetime. Formal poses can be wonderful, but a little imagination will take your engagement photos to the next level. Be inspired by these innovative photo shoots.</p>				
				</div>
			</div>
		</div>
	</div>
</section>
<!-- //services -->


<!-- IMAGES -->
<section class="images pb-5">
	<div class="container-fluid py-md-5">
		<div class="row">
			<div class="col-lg-2 col-md-4 col-sm-6  bg-img1">
				<h4>Perfect Planning</h4>
			</div>
			<div class="col-lg-2 col-md-4 col-sm-6 bg-img2">
				<h4>Wedding Ceremony</h4>
			</div>
			<div class="col-lg-2 col-md-4 col-sm-6 bg-img3">
				<h4>Entertainment Program</h4>
			</div>
			<div class="col-lg-2 col-md-4 col-sm-6 bg-img4">
				<h4>Engagement Ceremony</h4>
			</div>
			<div class="col-lg-2 col-md-4 col-sm-6 bg-img5">
				<h4>Birthday Celebrations</h4>
			</div>
			<div class="col-lg-2 col-md-4 col-sm-6 bg-img6">
				<h4>Anniversary Events</h4>
			</div>
		</div>
	</div>
</section>
<!-- IMAGES -->


<!-- Clients -->

<!--// Clients -->
@endsection