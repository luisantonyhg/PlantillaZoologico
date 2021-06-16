@extends('layouts.plantilla')

@section('img-logo')

<a href="#" id="logo"><img src="{{asset('assets/images/logo-page.jpg')}}" alt="" /></a>

@endsection

@section('contenido')
<div id="content">
    <div id="gallery">
        <h1>Meet our Animals</h1>
        <ul>
            <li>
            <div><a href="#"><img src="{{asset('assets/images/gallery-lion.jpg')}}" alt="" /></a></div>
                <a href="#">Morbi Suscipit</a>
            </li>
            <li>
            <div><a href="#"><img src="{{asset('assets/images/gallery-turtle.jpg')}}" alt="" /></a></div>
                <a href="#">Donec Augue</a>
            </li>
            <li>
            <div><a href="#"><img src="{{asset('assets/images/gallery-elephant.jpg')}}" alt="" /></a></div>
                <a href="#">Rhoncus Rutrum</a>
            </li>
            <li>
            <div><a href="#"><img src="{{asset('assets/images/gallery-penguin.jpg')}}" alt="" /></a></div>
                <a href="#">Donec Lacus</a>
            </li>
            <li>
            <div><a href="#"><img src="{{asset('assets/images/gallery-dolphin.jpg')}}" alt="" /></a></div>
                <a href="#">Vestibulum Libero</a>
            </li>
            <li>
            <div><a href="#"><img src="{{asset('assets/images/gallery-buterfly.jpg')}}" alt="" /></a></div>
                <a href="#">Integer Libero</a>
            </li>
            <li>
            <div><a href="#"><img src="{{asset('assets/images/gallery-gorilla.jpg')}}" alt="" /></a></div>
                <a href="#">Malesuada Lacinia</a>
            </li>
            <li>
            <div><a href="#"><img src="{{asset('assets/images/gallery-owl.jpg')}}" alt="" /></a></div>
                <a href="#">Praesent Odio</a>
            </li>
            <li>
            <div><a href="#"><img src="{{asset('assets/images/gallery-blue-butterfly.jpg')}}" alt="" /></a></div>
                <a href="#">Pulvinar Ultrices</a>
            </li>
        </ul>
    </div>
</div>
    
@endsection