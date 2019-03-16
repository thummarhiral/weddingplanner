@extends('layouts.front')
@section('content')
<!-- banner -->
<section class="banner layer" id="home">
	<div class="container">
		<div class="banner-text">
			<div class="slider-info mb-4">
				<div class="banner-heading">
					<h3>
						Your wedding adventure starts here
					</h3>
				</div>
				<a href="{{ url('contact-us') }}"> Plan Your Wedding</a>
			</div>
			<!-- To bottom button-->
			<div class="thim-click-to-bottom">
				<div class="rotate">
					<a href="#welcome" class="scroll">
						<span class="fa fa-angle-double-down"></span>
					</a>
				</div>
			</div>
			<!-- //To bottom button-->

		</div>
	</div>
</section>
<!-- //banner -->

<!-- welcome -->
<section class="welcome py-5" id="welcome">
	<div class="container py-md-5">
		<h3 class="heading text-capitalize text-center mb-lg-5 mb-4"> we will plan every detail of your wedding </h3>
		<div class="row welcome-grids">
			<div class="col-lg-4 mb-lg-0 mb-5">
				<h4 class="left-heading">Our Weddings Story</h4>
				<p class="mb-3">Imagine waking up to a job that lifts you up and transports you to a different world. A world populated with a billion heartfelt feelings and stories etched ceremoniously in magic, love and joie de vivre. Perfect with its Disney like happy endings, sworn vows and the promises of forever. This is their world. The TWS World. The Wedding Story is a Mumbai based photography team.</p>
                 
                
                <p class="mb-3"> They document handpicked elements and moments that are packed with love, to render your wedding film as illustrious as a contemporary cinematic record. The footage is edited meticulously to provide you with an everlasting treasured testament of your dream story. They believe that marriages are a promise of forever, synonymous to "...and they lived happily ever after." We are here to encapsulate your "happily ever after" and to whittle a truncated version into 24fps a little more magically than you ever imagined. TWS, for images you will want to share and for images you will want to treasure!</p>
				<div class="welcome-button mt-4">
					<a href="{{ url('about-us') }}">Read More</a>
				</div>
			</div>
			<div class="col-lg-4 col-sm-6">
				<div class="image1 mb-4">
				<h4>Hair / Makeup</h4>
					<p class="mt-3">The Makeup Collective, set-up by award-winning artist Jasmine Ringo, is an elite hair and makeup service based in Atlanta, Georgia. It provides an extensive array of styles for brides of all tones and skin types in the US and globally. Getting makeup-ready for the wedding day can be stressful </P>
				</div>
				<div class="image1">
				<h4>Venue & Catering</h4>
					<p class="mt-3"> Couples who prefer an intimate wedding with a close-knit group of friends, held at informal venues such as a backyard, garden, or barn.
					Food preparation, event schedule to keep the wedding enjoyable, and a comfortable space.</P>
				</div>
			</div>
			<div class="col-lg-4 col-sm-6 mt-sm-0 mt-4">
				<div class="image1 mb-4">
				<h4>Photo / Video </h4>
					<p class="mt-3">Tired of hanging your wedding photos in basic frames? We’ve compiled some creative ways to cherish your photos, and significant other, for a lifetime.
					Formal poses can be wonderful, but a little imagination will take your engagement photos to the next level. Be inspired by these innovative photo shoots.</P>
				</div>
				<div class="image1">
				<h4>Flowers & Music</h4>
					<p class="mt-3">Browse the most beautiful wedding flowers to get inspired for your own big day. We have the best ideas for your wedding bouquet, corsages, boutonnieres.
						
					Find the latest Wedding Music articles, see the gorgeous pictures and get wedding ideas from the top wedding authority, all on Brides.</P>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- welcome -->

<!-- IMAGES -->
<section class="images">
	<div class="container-fluid">
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

<!-- services -->
<section class="services py-5">
	<div class="container py-md-5">
		<h3 class="heading text-capitalize mb-lg-5 mb-4"> Our Services </h3>
		<div class="row service-grids">
			<div class="col-lg-3 col-sm-6">
				<div class="service-grid1">
					<span class="fa fa-globe"></span>
					<h4 class="my-3">Weddings</h4>
					<p>Now your budget is in the bag, you know what you’ve got to spend on your ceremony and reception space. It’s time to get.</p>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6 mt-sm-0 mt-sm-4 mt-4" >
				<div class="service-grid1">
					<span class="fa fa-book"></span>
					<h4 class="my-3">Parties</h4>
					<p>A party is a gathering of people who have been invited by a host for the purposes of socializing, ... Contents. 1 Description; 2 Types of parties. 2.1 Birthday party; 2.2 Surprise party; 2.3 Dinner party; 2.4 Garden party; 2.5 Cocktail party; 2.6 Tea .</p>				
				</div>
			</div>
			<div class="col-lg-3 col-sm-6 mt-lg-0 mt-sm-4 mt-4">
				<div class="service-grid1">
					<span class="fa fa-diamond"></span>
					<h4 class="my-3">Entertainment</h4>
					<p> Entertaining Your Wedding Guests: 36 Awesome Ideas They'll Love. Magicians. There are few things more entertaining than magic. Caricaturist. Give guests a wonderful keepsake of your wedding by hiring a caricaturist. Fire Performers. Bouncy Castles. Retro Arcade. Photo Booths. Magic Mirror Photo Booths. Singing Waiters.</p>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6 mt-lg-0 mt-sm-4 mt-4">
				<div class="service-grid1">
					<span class="fa fa-book"></span>
					<h4 class="my-3">Celebrations</h4>
					<p>Every anniversary is a milestone. Wedding anniversaries are celebrated in many different ways. People around the world find that doing something special on .</p>				
				</div>
			</div>
			<div class="ser-button mt-4">
				<a href="{{ url('services') }}">Explore all services</a>
			</div>
		</div>
	</div>
</section>
<!-- //services -->
@endsection