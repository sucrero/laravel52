@extends('layouts.web')

@section('content')

<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
        <div class="item active">
            <img src="slider/slider1.jpg" alt="">
            <div class="carousel-caption">
                <!--<h3>Titulo 1</h3>-->
                <p>Descripcion 1</p>
            </div>
        </div>
        <div class="item">
            <img src="slider/slider2.jpg" alt="">
            <div class="carousel-caption">
                <!--<h3>Titulo 2</h3>-->
                <p>Descripcion 2</p>
            </div>
        </div>
        <div class="item">
            <img src="slider/slider3.jpg" alt="">
            <div class="carousel-caption">
                <!--<h3>Titulo 3</h3>-->
                <p>Descripcion 3</p>
            </div>
        </div>
    </div>

    <!-- Controls -->
    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>






<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Welcome</div>

                <div class="panel-body">
                    Your Application's Landing Page.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
