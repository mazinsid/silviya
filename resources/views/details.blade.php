@extends('layouts.header')

@section('content')
    <br>
    <br>
    <main class="content">
        <div class="fullwidth-block">
            <div class="container">
                <div class="row">
                    <div class="col-md-7 wow fadeInLeft">
                        @foreach($offers as $offer)
                        <h2 class="section-title">{{$offer->name}}</h2>
                        <figure>
                            <img src="{{ asset('storage/'.$offer->image)}}" alt="">
                        </figure>

                            <p>{{$offer->node}}</p>
                    </div>
                    @endforeach
                    <div class="col-md-4 col-md-push-1 wow fadeInRight">
                        <h2 class="section-title">Principle</h2>
                        @foreach($details as $detail)
                        <p  class="boxed-link">{{$detail->title}}</p>
                        <p>{{$detail->description}}</p>
                        @endforeach
                    </div>
                </div>
                <div class="col-md-4 wow fadeInLeft">
                    <h4>Company Name</h4>
                    <ul class="list-fa">
                        <li><i class="fa fa-map-marker"></i> 983 Avenue Street, New York</li>
                        <li><i class="fa fa-phone"></i> +03934343453</li>
                        <li><i class="fa fa-envelope"></i>contact@companyname.com</li>
                    </ul>

                    <form action="{{route('orders.store')}}" method="POST" class="contact-form">
                        @csrf
                        <input type="text" name="name" placeholder="Your Name...">
                        <input type="email" name="email" placeholder="Email">
                        <input type="text" name="country" placeholder="Country">
                        <input type="tel" name="phone" placeholder="phone">
                        <input type="date" name="start" placeholder="start">
                        @foreach($offers as $offer)
                        <input type="hidden" name="offer_id" value="{{$offer->id}}">
                        @endforeach
                        <textarea name="node" placeholder="Message..."></textarea>
                        <input type="submit" class="button" value="Send Message">
                    </form>
                </div>
            </div>

        </div>
    </main> <!-- .content -->


@stop
