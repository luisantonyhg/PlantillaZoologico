@extends('layouts.plantilla')

@section('img-logo')

<a href="#" id="logo"><img src="{{asset('assets/images/logo-page.jpg')}}" alt="" /></a>
    
@endsection

@section('contenido')

<div id="content">
    <div id="zoo">
        <h1>The Zoo</h1>
        <h3>We Have Free Templates for Everyone</h3>
        <p>Our website templates are created with inspiration, checked for quality and originality and
            meticulously sliced and coded. What’s more, they’re absolutely free! You can do a lot with them. You
            can modify them. You can use them to design websites for clients, so long as you agree with the
            Terms of Use. You can even remove all our links if you want to.</p>
        <h3>We Have More Templates for You</h3>
        <p>Looking for more templates? Just browse through all our Free Website Templates and find what you’re
            looking for. But if you don’t find any website template you can use, you can try our Free Web Design
            service and tell us all about it. Maybe you’re looking for something different, something special.
            And we love the challenge of doing something different and something special.</p>
        <h3>Be Part of Our Community</h3>
        <p>If you’re experiencing issues and concerns about this website template, join the discussion on our
            Forum and meet other people in the community who share the same interests with you.</p>
        <h3>Template details</h3>
        <h4>Version 4</h4>
        <h4>Website Template details, discussion and updates for this Zoo Template. Website Template design by
            Free Website Templates.</h4>
        <h4>Please feel free to remove some or all the text and links of this page and replace it with your own
            About content.</h4>
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