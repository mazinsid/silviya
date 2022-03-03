@extends('layouts.header')

@section('content')
<main class="content">
				<div class="slider">
					<ul class="slides">
						<li data-background="dummy/slide-1.jpg">
							<div class="container">
								<div class="slide-caption col-md-4">
									<h2 class="slide-title">{{__('header.Historical Sites')}}</h2>
										<p>{{__('header.Historical Sites debitis')}}</p>
									</div>
							</div>
						</li>
						<li data-background="dummy/slide-2.jpg">
							<div class="container">
								<div class="slide-caption col-md-4">
									<h2 class="slide-title">{{__('header.Red Sea beaches')}}</h2>
									<p>
									{{__('header.Red Sea beaches debitis')}}
									</p>
									</div>
							</div>
						</li>
						<li data-background="dummy/slide-3.jpg">
							<div class="container">
								<div class="slide-caption col-md-4">
									<h2 class="slide-title">{{__('header.natural views')}}</h2>
									<p>{{__('header.natural views deteile')}}</p>
									</div>
							</div>
						</li>
					</ul>
					<div class="flexslider-controls">
						<div class="container">
							<ol class="flex-control-nav">
								<li><a>1</a></li>
								<li><a>2</a></li>
								<li><a>3</a></li>
							</ol>
						</div>
					</div>
				</div>

				<div class="fullwidth-block features-section">
					<div class="container">
						<div class="row">
							<div class="col-md-3 col-sm-6 col-xs-12">
								<div class="feature left-icon wow fadeInLeft" data-wow-delay=".3s">
									<i class="icon-ticket"></i>
									<h3 class="feature-title">Class aptent taciti</h3>
									<p>Laborum expedita fugiat et quas quia! Odio dignissimos beatae aspernatur in vero culpa excepturi consequatur!</p>
								</div>
							</div>
							<div class="col-md-3 col-sm-6 col-xs-12">
								<div class="feature left-icon wow fadeInLeft">
									<i class="icon-plane"></i>
									<h3 class="feature-title">Class aptent taciti</h3>
									<p>Lectetur recusandae quasi repellendus accusamus ipsa sed quibusdam officia aspernatur natus itaque, asperiores impedit numquam dolorum.</p>
								</div>
							</div>
							<div class="col-md-3 col-sm-6 col-xs-12">
								<div class="feature left-icon wow fadeInRight">
									<i class="icon-jetski"></i>
									<h3 class="feature-title">Class aptent taciti</h3>
									<p>L culpa ex dolorum ipsa, maxime soluta repudiandae officia corrupti. Doloribus iste voluptatibus nostrum?</p>
								</div>
							</div>
							<div class="col-md-3 col-sm-6 col-xs-12">
								<div class="feature left-icon wow fadeInRight" data-wow-delay=".3s">
									<i class="icon-shuttelcock"></i>
									<h3 class="feature-title">Class aptent taciti</h3>
									<p>Lam sit, facere dicta libero ipsa. Repellat deleniti dignissimos, excepturi minima voluptatibus mollitia adipisci iusto.</p>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="fullwidth-block offers-section" data-bg-color="#f1f1f1">
					<div class="container text-center">

						<h2 class="section-title">{{__('header.The newest offers')}}</h2>
						<div class="row">
                            @foreach($offers as $offer)
							<div class="col-md-3 col-sm-6 col-xs-12">
								<article class="offer wow bounceIn">
									<figure class="featured-image"><img src="{{ asset('storage/'.$offer->image)}}" alt=""></figure>
									<h2 class="entry-title"><a href="">{{$offer->name}}</a></h2>
                                    <h2 class="danger">${{$offer->price}}</h2>
									<a href="{{route('OfferDetails',$offer->id)}}" class="button">{{__('header.details')}}</a>
								</article>
							</div>
                            @endforeach
						</div>
					</div>
				</div>

				<div class="fullwidth-block testimonial-section text-center">
					<div class="container">
						<h2 class="section-title">{{__('header.Some tourist attractions')}}</h2>
						<div class="row">
                            @foreach($tourisms as $tourism)
							<div class="col-md-3 col-sm-6 col-xs-12">
								<div class="testimonial wow fadeInUp">
									<figure class="offer wow bounceIn"><img src="{{ asset('storage/'.$tourism->image)}}" alt=""></figure>
									<blockquote class="testimonial-body">
                                        <cite>{{$tourism->name}}</cite>
                                        <a href="{{route('demo.all',$tourism->id)}}" class="button">{{__('header.Photo Gallery')}}</a>
                                    </blockquote>
								</div>
							</div>
                            @endforeach
						</div>
					</div>
				</div>
			</main> <!-- .content -->
@stop
