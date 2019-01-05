@extends('style.index')

@section('content')



    <div id="fh5co-team">
        <div class="container">
            <div class="row animate-box row-pb-md">
                <div class="col-md-8 col-md-offset-2 text-left fh5co-heading">
                    <span>{{$title}}</span>
                    <h2>Meet Our Staff</h2>
                    <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
                </div>
            </div>
            <div class="row">
                @foreach($data as $pro)
                <div class="col-md-4 col-sm-4 animate-box" data-animate-effect="fadeIn">
                    <div class="fh5co-staff">
                        <img src="{{\Illuminate\Support\Facades\Storage::url($pro->photo)}}" alt="Free HTML5 Templates by gettemplates.co">
                        <h3>{{$pro->name}}</h3>
                        <strong class="role">{{$title}}</strong>
                        <p>{{$pro->description}}</p>
                        <ul class="fh5co-social-icons">
                            <li><a href="{{$pro->facebook}}"><i class="icon-facebook"></i></a></li>
                            <li><a href="{{$pro->tweeter}}"><i class="icon-twitter"></i></a></li>
                            <li><a href="{{$pro->git}}"><i class="icon-github"></i></a></li>
                        </ul>
                    </div>
                </div>

                @endforeach


            </div>
        </div>
    </div>




    <div id="fh5co-started">
        <div class="container">
            <div class="row animate-box">
                <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                    <span>Let's work together</span>
                    <h2>Try Free Trial Product </h2>
                    <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
                    <p><a  href="{{url('/products')}}" class="btn btn-default">Get In Touch</a></p>
                </div>
            </div>
        </div>
    </div>



@endsection