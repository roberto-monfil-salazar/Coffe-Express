@extends('layouts.admin')

@section('contenido')
<style>
    .imagen {
        align-content: center;
    }
</style>
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
        <div class="item active">
            <div align="center">
                <img src="/img/logo.png" width="900" alt="New York" >
                <div class="carousel-caption">
                    <p style="color: black; font-size: larger; size: 18px; ">¡Nos encanta el café grande!</p>
                </div>
            </div>
        </div>

        <div class="item">
           <div align="center">
           <img src="/img/caf.jpg"  width="800" alt="Chicago">
            <div class="carousel-caption">
                <p style="color: black; font-size: larger; size: 18px; ">Sabor y Calidad!</p>
            </div>
           </div>
        </div>
        <div class="item">
           <div align="center">
           <img src="/img/tipo.jpg" alt="Chicago">
            <div class="carousel-caption">
                <p style="color: white; font-size: larger; size: 18px; ">Del cafe de sus ojos, prefiero un capuchino</p>
                <a type="submit" class="btn btn-facebook" href="https://www.facebook.com/Monse.Carmen6"> Monse</a>
            </div>
           </div>
        </div>
    </div>
    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
@endsection
