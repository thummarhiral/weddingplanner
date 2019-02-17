@extends('layouts.front')
@section('title', 'Events')
@section('content')
<!-- inner banner -->
    <div class="inner_banner layer" id="home">
        <div class="container">
            <div class="agileinfo-inner">
                <h2 class="text-center text-white">
                    Recent Events
                </h2>
            </div>
        </div>
    </div>
    <!-- //inner banner -->
    <!-- breadcrumbs -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="index.html">Home</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">Events</li>
        </ol>
    </nav>
    <!-- //breadcrumbs -->

<!-- Recent Events -->
<section class="Recent Events py-5">
	<div class="container py-sm-3">
		<h3 class="heading text-capitalize mb-lg-5 mb-4"> Recent Events</span> </h3>
		<div class="row course-grids">
			<div class="col-lg-4 col-md-6">
				<div class="card">
				  <img class="card-img-top" src="images/who.jpg" alt="Card image cap">
				  <div class="card-body">
					<h5 class="card-title">Wedding Ceremony</h5>
					<p class="card-text mb-3">Aenean tristique, duiid sedet blandit elt ultricies, ligula elit interd ures elit turpis, at bibendum lib dolor sedet lib blandit interd ures elit.....</p>
				  </div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 mt-md-0 mt-5">
				<div class="card">
				  <img class="card-img-top" src="images/bg.jpg" alt="Card image cap">
				  <div class="card-body">
					<h5 class="card-title">Event Celebration</h5>
					<p class="card-text mb-3">Aenean tristique, duiid sedet blandit elt ultricies, ligula elit interd ures elit turpis, at bibendum lib dolor sedet lib blandit interd ures elit.....</p>
				  </div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 mt-lg-0 mt-5">
				<div class="card">
				  <img class="card-img-top" src="images/who.jpg" alt="Card image cap">
				  <div class="card-body">
					<h5 class="card-title">Birthday Party</h5>
					<p class="card-text mb-3">Aenean tristique, duiid sedet blandit elt ultricies, ligula elit interd ures elit turpis, at bibendum lib dolor sedet lib blandit interd ures elit....</p>
				  </div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 mt-5">
				<div class="card">
				  <img class="card-img-top" src="images/bg.jpg" alt="Card image cap">
				  <div class="card-body">
					<h5 class="card-title">Anniversary Event</h5>
					<p class="card-text mb-3">Aenean tristique, duiid sedet blandit elt ultricies, ligula elit interd ures elit turpis, at bibendum lib dolor sedet lib blandit interd ures elit....</p>
				  </div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 mt-5">
				<div class="card">
				  <img class="card-img-top" src="images/who.jpg" alt="Card image cap">
				  <div class="card-body">
					<h5 class="card-title">Wedding Organizer</h5>
					<p class="card-text mb-3">Aenean tristique, duiid sedet blandit elt ultricies, ligula elit interd ures elit turpis, at bibendum lib dolor sedet lib blandit interd ures elit....</p>
				  </div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 mt-5">
				<div class="card">
				  <img class="card-img-top" src="images/bg.jpg" alt="Card image cap">
				  <div class="card-body">
					<h5 class="card-title">Birthday Party</h5>
					<p class="card-text mb-3">Aenean tristique, duiid sedet blandit elt ultricies, ligula elit interd ures elit turpis, at bibendum lib dolor sedet lib blandit interd ures elit....</p>
				  </div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Recent Events -->
@endsection
