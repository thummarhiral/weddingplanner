@extends('layouts.front')
@section('title', 'About Us')
@section('content')
<!-- inner banner -->
<div class="inner_banner layer" id="home">
    <div class="container">
        <div class="agileinfo-inner">
            <h2 class="text-center text-white">
                About Us
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
        <li class="breadcrumb-item active" aria-current="page">About Us</li>
    </ol>
</nav>
<!-- //breadcrumbs -->

<!-- welcome -->
<section class="welcome py-5" id="welcome">
	<div class="container py-md-5">
		<h3 class="heading text-capitalize text-center mb-lg-5 mb-4"> we will plan every detail of your wedding </h3>
		<div class="row welcome-grids">
			<div class="col-lg-4 mb-lg-0 mb-5">
				<h4 class="left-heading">Our Weddings Story</h4>
				<p class="mb-3">Imagine waking up to a job that lifts you up and transports you to a different world. A world populated with a billion heartfelt feelings and stories etched ceremoniously in magic, love and joie de vivre. Perfect with its Disney like happy endings, sworn vows and the promises of forever. This is their world. The TWS World. The Wedding Story is a Mumbai based photography team.</p>

                <p class="mb-3"> They document handpicked elements and moments that are packed with love, to render your wedding film as illustrious as a contemporary cinematic record. The footage is edited meticulously to provide you with an everlasting treasured testament of your dream story. They believe that marriages are a promise of forever, synonymous to "...and they lived happily ever after." We are here to encapsulate your "happily ever after" and to whittle a truncated version into 24fps a little more magically than you ever imagined. TWS, for images you will want to share and for images you will want to treasure!</p>
				
				<!-- <div class="welcome-button mt-4">
					<a href="#">Read More</a>
				</div> -->
			</div>
			<div class="col-lg-4 col-sm-6">
				<div class="image1 mb-4">
				<h4>Hair / Makeup</h4>
					<p class="mt-3">The Makeup Collective, set-up by award-winning artist Jasmine Ringo, is an elite hair and makeup service based in Atlanta, Georgia. It provides an extensive array of styles for brides of all tones and skin types in the US and globally. Getting makeup-ready for the wedding day can be stressful</P>
				</div>
				<div class="image1">
				<h4>Venue & Catering</h4>
					<p class="mt-3">Couples who prefer an intimate wedding with a close-knit group of friends, held at informal venues such as a backyard, garden, or barn.
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

<!-- /stats -->
<section class="stats_test">
	<div class="wthree-different-dot1 py-5">
	<div class="container py-3">
		<h3 class="heading text-capitalize mb-lg-5 mb-4"> Quotes </h3>
		<div class="row">
			<div class="col-12 text-center inner_stat_wthree_agileits">
				<div class="row px-sm-0 px-3">
					<h4 class="text-white">Pleae add here good quotes regarding marriage event</h4>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- //stats -->

<!-- about -->
<section class="about py-5">
	<div class="container py-sm-3">
		<h3 class="heading text-capitalize mb-lg-5 mb-4"> Who We Are</h3>
		<div class="row about-grids">
			<div class="col-lg-6">
				<h4>We are committed to service excellence and quality on wedding & events</h4>
				<p class="mb-3">Sed gravida dignissim magna idesn molestie. Nulla congue, ex init dictu lacinia, nislen est posuere nulla,
				nec egestas leo miid sed lorem. Maecenas sem nulla. Maecenas risus enim, pharetra accumsan nulla vitae, mollis hendrerit orci.
				Pellentesque nec purus eurts tortor molestie fringilla ut sit amet mauris. Maecenas mattis eleifend lacus non condimentum. Elit
				Donec fringilla nisi risus.</p>
				<p>Sed gravida dignissim magna idesn molestie. Nulla congue, ex init dictu lacinia, nislen est posuere nulla,
				nec egestas leo mid.</p>
			</div>
			<div class="col-lg-6 mt-lg-0 mt-5">
				<img src="images/who.jpg" alt="" class="img-fluid"/>
			</div>
		</div>
	</div>
</section>
<!-- //about -->

<!-- contact query -->
<section class="query">
	<div class="wthree-different-dot1 py-5">
		<div class="container py-sm-3">
			<div class="row query-grids">
				<div class="col-lg-5">
					<h4 class="mb-3">Find Your Style</h4>
					<p class="mb-3">Sed gravida dignissim magna idesn molestie. Nulla congue, ex init dictu lacinia, nislen est posuere nulla,
					nec egestas leo miid sed lorem. Maecenas sem nulla. Maecenas risus enim, pharetra accumsan nulla vitae, mollis hendrerit orci.
					Pellentesque nec purus eurts tortor molestie fringilla ut sit amet mauris. Maecenas mattis eleifend lacus non condimentum.</p>
					<a href="{{ url('contact') }}">Contact and Inquiry </a>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- //contact query -->
@endsection