@extends('style.index')

@section('content')



    <div id="fh5co-project">
        <div class="container">
            <div class="row row-pb-md">
                <div class="col-md-8 col-md-offset-2 text-left fh5co-heading  animate-box">
                    <span>Want Some Cool Stuff</span>
                    <h2>{{$title}}</h2>
                    <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
                </div>
            </div>

            <div class="row">

                @foreach($products as $product)
                <div class="col-md-4 col-sm-6 fh5co-project animate-box" data-animate-effect="fadeIn">
                    <a href="#"><img src="{{\Storage::url($product->photo)}}" alt="Free HTML5 Website Template by gettemplates.co" class="img-responsive">
                        <div class="fh5co-copy">
                            <h3>{{$product->title}}</h3>
                            <p>Desktop</p>
                        </div>
                    </a>
                </div>

                @endforeach

                <div class="col-md-12 text-center">
                    <nav aria-label="Page navigation">

                           {!! $products->render() !!}

                    </nav>
                </div>

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