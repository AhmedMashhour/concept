<nav class="fh5co-nav" role="navigation">
    <div class="container">
        <div class="row">
            <div class="col-xs-2 text-left">
                <div id="fh5co-logo"><a href="{{url('/')}}">Concept<span>.</span></a></div>
            </div>
            <div class="col-xs-10 text-right menu-1">
                <ul>
                    <li class="{{active_user_nav('home')}}"><a href="{{url('/')}}">Home</a></li>
                    <li class="has-dropdown {{active_user_nav('services')}}" >
                        <a href="{{url('/services')}}">Services</a>
                        <ul class="dropdown">
                            <li><a href="{{url('/products/webdesign')}}">Web Design</a></li>
                            <li><a href="{{url('/products/ecommerce')}}">eCommerce</a></li>
                            <li><a href="{{url('/products/desktop')}}">desktop</a></li>
                            <li><a href="{{url('/products/android')}}">android</a></li>
                        </ul>
                    </li>

                    <li  class="{{active_user_nav('products')}}"><a href="{{url('/products')}}">Products</a></li>
                    <li class="{{active_user_nav('about')}}"><a href="{{url('/about')}}">About</a></li>
                    <li class="{{active_user_nav('contact')}}"><a href="{{url('/contact')}}">Contact</a></li>
                </ul>
            </div>
        </div>

    </div>
</nav>
<header id="fh5co-header" class="fh5co-cover" role="banner" style="background-image:url({{url('design/style/images/img_bg_1.jpg')}});" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-7 text-left">
                <div class="display-t">
                    <div class="display-tc animate-box" data-animate-effect="fadeInUp">
                        <h1 class="mb30">Let us build brands together shall we?</h1>
                        <p>
                            <a href="{{url('/products')}}" target="_blank" class="btn btn-primary">Get Started</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>