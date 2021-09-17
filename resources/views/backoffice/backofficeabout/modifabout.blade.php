
@extends('templateback')

@section('content')
    <h1 class="text-center"  style="margin: 150px"> BACK OFFICE | About</h1>

    <!-- About Section-->
<section class="page-section bg-primary text-white mb-0" id="about">
    <div class="container">
        <!-- About Section Heading-->
        <h2 class="page-section-heading text-center text-uppercase text-white"> ABOUT</h2>
        <!-- Icon Divider-->
        <div class="divider-custom divider-light">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="{{$data3[0]->btn1}}"></i></div>
            <div class="divider-custom-line"></div>
        </div>
        <!-- About Section Content-->
        <div class="row">
            <div class="col-lg-4 ms-auto"><p class="lead">{{$data3[0]->btn2}}</p></div>
            <div class="col-lg-4 me-auto"><p class="lead">{{$data3[0]->btn3}}</p></div>
        </div>
        <!-- About Section Button-->
        <div class="text-center mt-4">
            <a class="btn btn-xl btn-outline-light" href="https://startbootstrap.com/theme/freelancer/">
                <i class="fas fa-download me-2"></i>
                {{$data3[0]->btn4}}
            </a>
        </div>
    </div>
</section>


        <div class="m-3 d-flex">
            <a href="/dashboard" class="text-center" style="width:250px;  background-color: rgb(126, 123, 123); padding: 20px; color:white; margin:auto">Retours vers Backoffice Home</a>
        <a class="text-center" href="{{route('abouts.edit',$data3[0]->id)}} " style="width:200px;  background-color: rgb(70, 199, 98); padding: 20px; color:white;" >Edit</a>
        </div>
    
@endsection



