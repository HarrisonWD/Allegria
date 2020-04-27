@extends('layouts.app')

@section('content')
    <div class="home-nav">
        <div class="row">
            <a href="menu" class="col sm-3 card">
                <img src="img/menu.png" class="card-img-top" alt="Menu" >
                <h5 class="card-title">Menu</h5>
            </a>
            <a href="reserve" class="col sm-3 card">
                <img src="img/reserve.jpg" class="card-img-top" alt="Reserve" >
                <h5 class="card-title">Reserve</h5>
            </a>
            <a href="find" class="col sm-3 card">
                <img src="img/location.png" class="card-img-top" alt="Find Us">
                <h5 class="card-title">Find Us</h5>
            </a>
            <a href="offers" class="col sm-3 card">
                <img src="img/offers.png" class="card-img-top" alt="Offers">
                <h5 class="card-title">Offers</h5>
            </a>
        </div>
        <div class="row">
            <a href="bar" class="col sm-3 card">
                <img src="img/drinks.png" class="card-img-top" alt="Bar">
                <h5 class="card-title">Bar</h5>
            </a>
            <a href="events" class="col sm-3 card">
                <img src="img/calendar.png" class="card-img-top" alt="Events">
                <h5 class="card-title">Events</h5>
            </a>
            <a href="facebook" class="col sm-3 card">
                <img src="img/facebook.png" class="card-img-top" alt="Facebook">
                <h5 class="card-title">Facebook</h5>
            </a>
            <a href="contact" class="col sm-3 card">
                <img src="img/contact.png" class="card-img-top" alt="Contact Us">
                <h5 class="card-title">Contact Us</h5>
            </a>
        </div>
    </div>
@endsection
