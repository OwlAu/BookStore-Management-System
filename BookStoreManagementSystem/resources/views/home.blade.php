@extends('layouts.app')
<style>
    .carousel-inner img {
        width: 100%;
        height: 100%;
    }
</style>
@section('content')
<div class="container">
    <h2>Discover all the hottest items!</h2>
    <div id="demo" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ul class="carousel-indicators">
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>
            <li data-target="#demo" data-slide-to="2"></li>
        </ul>

        <!-- The slideshow -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://i.ibb.co/mDZbKMW/Kimetsu-no-Yaiba.jpg" alt="Los Angeles">
            </div>
            <div class="carousel-item">
                <img src="https://i.ibb.co/fDpdLxY/wp5967958.jpg" alt="Chicago">
            </div>
            <div class="carousel-item">
                <img src="https://i.ibb.co/DChJtTt/manga-plus-featured-887x581.jpg" alt="New York">
            </div>
        </div>

        <!-- Left and right controls -->
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>

    </div>
</div>
@endsection