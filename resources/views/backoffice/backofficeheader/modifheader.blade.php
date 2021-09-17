
@extends('templateback')

@section('content')
    <h1 class="text-center"  style="margin: 150px"> BACK OFFICE | Heeader</h1>


    
    <section style="width: 100%; display:flex; flex-direction:column;  align-items:center; " >

        <!-- Navigation-->
<nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand" href="#page-top">Start Bootstrap </a>
        <button class="navbar-toggler text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            {{$data1[0]->btn1}}
            <i class="{{$data1[0]->btn2}}"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#portfolio">{{$data1[0]->btn3}}</a></li>
                <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#about">{{$data1[0]->btn4}}</a></li>
                <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#contact">{{$data1[0]->btn5}}</a></li>
            </ul>
        </div>
    </div>
</nav>
<!-- Masthead-->
<header class="masthead bg-primary text-white text-center">
    <div class="container d-flex align-items-center flex-column">
        <!-- Masthead Avatar Image-->
        <img class="masthead-avatar mb-5" src="{{asset('img/'.$data1[0]->img1)}}" alt="..." />
        <!-- Masthead Heading-->
        <h1 class="masthead-heading text-uppercase mb-0">{{$data1[0]->btn6}}</h1>
        <!-- Icon Divider-->
        <div class="divider-custom divider-light">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
            <div class="divider-custom-line"></div>
        </div>
        <!-- Masthead Subheading-->
        <p class="masthead-subheading font-weight-light mb-0">{{$data1[0]->btn7}}</p>
    </div>
</header>
        <div class="m-3 d-flex">
            <a href="/dashboard" class="text-center" style="width:250px;  background-color: rgb(126, 123, 123); padding: 20px; color:white; margin:auto">Retours vers Backoffice Home</a>
        <a class="text-center" href="{{route('headers.edit',$data1[0]->id)}} " style="width:200px;  background-color: rgb(70, 199, 98); padding: 20px; color:white;" >Edit</a>
        </div>
    
@endsection



