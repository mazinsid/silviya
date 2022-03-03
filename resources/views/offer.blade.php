@extends('layouts.header')

@section('content')
<br>
<br>
<br>
<br>
			<main class="content">
				<div class="fullwidth-block">
					<div class="container">
						<div class="filter-links filterable-nav">
							<select class="mobile-filter">
								<option value="*">Show all</option>
                                @foreach($offers as $offer)
								<option value="{{$offer->type}}">{{$offer->type}}</option>
                                @endforeach
							</select>
							<a href="#" class=" current wow fadeInRight" data-filter="*">{{__('header.Show all')}}</a>
                            @foreach($offers as $offer)
							<a href="#" class="wow fadeInRight" data-wow-delay=".6s" data-filter=".{{$offer->type}}">{{$offer->type}}</a>
                            @endforeach
						</div>
						<div class="filterable-items">
                            @foreach($offers as $offer)
							<div class="filterable-item {{$offer->type}}">
								<article class="offer-item">
									<figure class="featured-image">
									<img src="{{ asset('storage/'.$offer->image)}}" alt="">	</figure>
									<h2 class="entry-title"><a href="#">{{$offer->name }}</a></h2>
									<div class="price">
										<strong>{{$offer->price}}</strong>
                                    </div>
                                    <a href="{{route('OfferDetails',$offer->id)}}" class="button">{{__('header.details')}}</a>
								</article>
							</div>
                            @endforeach
						</div>

					</div>

				</div>


			</main> <!-- .content -->


        @stop
