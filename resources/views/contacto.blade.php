@extends('layouts.plantilla')

@section('img-logo')

<a href="#" id="logo"><img src="{{asset('assets/images/logo-page.jpg')}}" alt="" /></a>

@endsection

@section('contenido')

<div id="content">
    <div id="contact">
        <h1>Contact Information</h1>
        <h4>Location :</h4>
        <p>This website template has been designed by Free Website Templates for you, for free. You can replace
            all this text with your own text.</p>
        <h4>Ticketing Office :</h4>
        <p>285 067-39 282 or 5282 9273 999</p>
        <h4>Office Phone Number :</h4>
        <p>285 067-39 282 or 5282 9273 999</p>
        <h4>Customer Service :</h4>
        <p>285 067-39 282 or 5282 9273 999</p>
        <h4>Email :</h4>
        <p></p>
        <a href="#" id="facebook">Facebook</a> <a href="#" id="twitter">Twitter</a>
        <form action="#">
            <h3>Subscribe to our</h3>
            <h2>NEWSLETTER</h2>
            <input type="text" value="your email here..."
                onBlur="this.value=!this.value?'your email here...':this.value;" onFocus="this.select()"
                onClick="this.value='';" />
        </form>
    </div>
    <div class="featured">
        <h2>Meet our Animals</h2>
        <ul>
        <li class="first"> <a href="#"><img src="{{asset('assets/images/penguin.jpg')}}" alt="" /></a> <a href="#">Duis
                    laoreet</a> </li>
        <li> <a href="#"><img src="{{asset('assets/images/elephant.jpg')}}" alt="" /></a> <a href="#">Curabitur</a> </li>
        <li> <a href="#"><img src="{{asset('assets/images/owl.jpg')}}" alt="" /></a> <a href="#">Adipiscing</a> </li>
        <li> <a href="#"><img src="{{asset('assets/images/butterfly.jpg')}}" alt="" /></a> <a href="#">Sed Volutpat</a> </li>
        <li> <a href="#"><img src="{{asset('assets/images/turtle.jpg')}}" alt="" /></a> <a href="#">Nulla lobortis</a> </li>
        <li> <a href="#"><img src="{{asset('assets/images/snake.jpg')}}" alt="" /></a> <a href="#">Suspendisse</a> </li>
        <li> <a href="#"><img src="{{asset('assets/images/gorilla.jpg')}}" alt="" /></a> <a href="#">Tincidunt</a> </li>
        <li class="last"> <a href="#"><img src="{{asset('assets/images/button-view-gallery2.jpg')}}" alt="" /></a> <a href="#">View
                    Gallery</a> </li>
        </ul>
    </div>
</div>
    
@endsection