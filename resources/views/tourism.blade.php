@extends('layouts.header')

@section('content')
<br>
<br>
<br>
<br>
			<main class="content">
				<div class="fullwidth-block">
					<div class="container">

						<div class="filterable-items">
                            @foreach($tourisms as $tourism)
							<div class="filterable-item {{$tourism->type}}">
								<article class="offer-item">
									<figure class="featured-image">

									<img  class="w-full md:w-72 block rounded"  src="{{ asset('storage/'.$tourism->image)}}" alt="">	</figure>
                                    <h2 class="entry-title"><a href="#">{{$tourism->name }}</a></h2>
									<div class="price">
                                    <a href="{{route('demo.all',$tourism->id)}}" class="button">{{__('header.Photo Gallery')}}</a>
									</div>
								</article>
							</div>
                            @endforeach
						</div>
                    </div>
				</div>


			</main> <!-- .content -->


        @stop
