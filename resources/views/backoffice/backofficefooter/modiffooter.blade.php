
@extends('templateback')

@section('content')
    <h1 class="text-center"  style="margin: 150px"> BACK OFFICE | Footer</h1>

    <!-- Footer-->
   <footer class="footer text-center">
    <div class="container">
        <div class="row">
            <!-- Footer Location-->
            <div class="col-lg-4 mb-5 mb-lg-0">
                <h4 class="text-uppercase mb-4">{{$data5[0]->btn1}}</h4>
                <p class="lead mb-0">
                    {{$data5[0]->btn2}}
                    <br />
                    {{$data5[0]->btn3}}
                </p>
            </div>
            
            <!-- Footer Social Icons-->
            <div class="col-lg-4 mb-5 mb-lg-0">
                <h4 class="text-uppercase mb-4">{{$data5[0]->btn4}}</h4>
                <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-facebook-f"></i></a>
                <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-twitter"></i></a>
                <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-linkedin-in"></i></a>
                <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-dribbble"></i></a>
            </div>

            <!-- Footer About Text-->

            <div class="col-lg-4">
                <h4 class="text-uppercase mb-4">{{$data5[0]->btn5}}</h4>
                <p class="lead mb-0">
                    {{$data5[0]->btn6}}
                    <a href="http://startbootstrap.com">{{$data5[0]->btn7}}</a>
                    .
                </p>
            </div>
        </div>
    </div>
</footer>
<!-- Copyright Section-->
<div class="copyright py-4 text-center text-white">
    <div class="container"><small>{{$data5[0]->btn8}} &copy; {{$data5[0]->btn9}}</small></div>
</div>

    
    
        <div class="m-3 d-flex">
            <a href="/dashboard" class="text-center" style="width:250px;  background-color: rgb(126, 123, 123); padding: 20px; color:white; margin:auto">Retours vers Backoffice Home</a>
        <a class="text-center" href="{{route('footers.edit',$data5[0]->id)}} " style="width:200px;  background-color: rgb(70, 199, 98); padding: 20px; color:white;" >Edit</a>
        </div>
    
@endsection



