@extends('style.index')

@section('content')


    <div id="fh5co-project">
        <div class="container">
            <div class="row row-pb-md">
                <div class="col-md-8 col-md-offset-2 text-left fh5co-heading  animate-box">
                    <span>Want Some Cool Stuff</span>
                    <h2>Recent Products</h2>
                    <p>Our New Product Is Now Available Just Here.</p>
                </div>
            </div>

            <div class="row">

                @foreach($products as $product)
                    <div class="col-md-4 col-sm-6 fh5co-project animate-box" data-animate-effect="fadeIn">
                        <a href="#"><img src="{{\Storage::url($product->photo)}}" alt="" style="height: 300px;width: 359px" class="img-responsive">
                            <div class="fh5co-copy">
                                <h3>{{$product->title}}</h3>
                                <p>Desktop</p>
                            </div>
                        </a>
                    </div>

                @endforeach

        </div>

    </div>



    <div id="fh5co-services" class="fh5co-bg-section border-bottom">
        <div class="container">
            <div class="row row-pb-md">
                <div class="col-md-8 col-md-offset-2 text-left animate-box" data-animate-effect="fadeInUp">
                    <div class="fh5co-heading">
                        <span>We're expert</span>
                        <h2>What We Do</h2>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6 ">
                    <div class="feature-center animate-box" data-animate-effect="fadeInUp">
						<span class="icon">
							<i class="icon-eye"></i>
						</span>
                        <h3>Retina Ready</h3>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                        <p><a href="#">Learn more</a></p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 ">
                    <div class="feature-center animate-box" data-animate-effect="fadeInUp">
						<span class="icon">
							<i class="icon-command"></i>
						</span>
                        <h3>Fully Responsive</h3>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                        <p><a href="#">Learn more</a></p>
                    </div>
                </div>
                <div class="clearfix visible-sm-block"></div>
                <div class="col-md-4 col-sm-6 ">
                    <div class="feature-center animate-box" data-animate-effect="fadeInUp">
						<span class="icon">
							<i class="icon-power"></i>
						</span>
                        <h3>Web Starter</h3>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                        <p><a href="#">Learn more</a></p>
                    </div>
                </div>

                <div class="clearfix visible-md-block"></div>


            </div>
        </div>
    </div>


    <div id="fh5co-testimonial" class="fh5co-bg-section">
        <div class="container">
            <div class="row animate-box row-pb-md">
                <div class="col-md-8 col-md-offset-2 text-left fh5co-heading">
                    <span>You deserved happiness</span>
                    <h2>Happy Clients</h2>
                    <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 animate-box">
                    <div class="testimonial">
                        <blockquote>
                            <p>&ldquo;Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit. Eos cumque dicta adipisci architecto culpa amet.&rdquo;</p>
                            <p class="author"> <img src="{{url('design/style')}}/images/person1.jpg" alt="Free HTML5 Bootstrap Template by gettemplates.co"> <cite>&mdash; Mike Adam</cite></p>
                        </blockquote>
                    </div>

                    <div class="testimonial fh5co-selected">
                        <blockquote>
                            <p>&ldquo;Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius. Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit. Eos cumque dicta adipisci architecto culpa amet.&rdquo;</p>
                            <p class="author"><img src="{{url('design/style')}}/images/person2.jpg" alt="Free HTML5 Bootstrap Template by gettemplates.co"> <cite>&mdash; Eric Miller</cite></p>
                        </blockquote>
                    </div>
                </div>

                <div class="col-md-6 animate-box">
                    <div class="testimonial fh5co-selected">
                        <blockquote>
                            <p>&ldquo;Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius. Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit. Eos cumque dicta adipisci architecto culpa amet.&rdquo;</p>
                            <p class="author"><img src="{{url('design/style')}}/images/person3.jpg" alt="Free HTML5 Bootstrap Template by gettemplates.co"> <cite>&mdash; Eric Miller</cite></p>
                        </blockquote>
                    </div>

                    <div class="testimonial">
                        <blockquote>
                            <p>&ldquo;Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit. Eos cumque dicta adipisci architecto culpa amet.&rdquo;</p>
                            <p class="author"><img src="{{url('design/style')}}/images/person1.jpg" alt="Free HTML5 Bootstrap Template by gettemplates.co"> <cite>&mdash; Mike Adam</cite></p>
                        </blockquote>
                    </div>

                </div>



            </div>
        </div>
    </div>


    <div id="fh5co-counter">
        <div class="container">

            <div class="row animate-box" data-animate-effect="fadeInUp">
                <div class="col-md-8 col-md-offset-2 text-left fh5co-heading">
                    <span>Enjoy it</span>
                    <h2>Fun Facts</h2>
                    <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
                </div>
            </div>

            <div class="row">

                <div class="col-md-3 col-sm-6 animate-box" data-animate-effect="fadeInLeft">
                    <div class="feature-center">
						<span class="icon">
							<i class="ti-download"></i>
						</span>
                        <span class="counter"><span class="js-counter" data-from="0" data-to="15" data-speed="1500" data-refresh-interval="50">1</span>M+</span>
                        <span class="counter-label">Downloads</span>

                    </div>
                </div>
                <div class="col-md-3 col-sm-6 animate-box" data-animate-effect="fadeInLeft">
                    <div class="feature-center">
							<span class="icon">
								<i class="ti-face-smile"></i>
							</span>
                        <span class="counter"><span class="js-counter" data-from="0" data-to="120" data-speed="1500" data-refresh-interval="50">1</span>+</span>
                        <span class="counter-label">Happy Clients</span>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 animate-box" data-animate-effect="fadeInLeft">
                    <div class="feature-center">
							<span class="icon">
								<i class="ti-briefcase"></i>
							</span>
                        <span class="counter"><span class=" js-counter" data-from="0" data-to="90" data-speed="1500" data-refresh-interval="50">1</span>+</span>
                        <span class="counter-label">Projects Done</span>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 animate-box" data-animate-effect="fadeInLeft">
                    <div class="feature-center">
							<span class="icon">
								<i class="ti-time"></i>
							</span>
                        <span class="counter"><span class="js-counter" data-from="0" data-to="12" data-speed="1500" data-refresh-interval="50">1</span>K+</span>
                        <span class="counter-label">Hours Spent</span>

                    </div>
                </div>

            </div>
        </div>
    </div>

    <div id="fh5co-blog" class="fh5co-bg-section">
        <div class="container">
            <div class="row animate-box row-pb-md" data-animate-effect="fadeInUp">
                <div class="col-md-8 col-md-offset-2 text-left fh5co-heading">
                    <span>Thoughts &amp; Ideas</span>
                    <h2>Our Blog</h2>
                    <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-4 animate-box" data-animate-effect="fadeInUp">
                    <div class="fh5co-post">
                        <span class="fh5co-date">Sep. 12th</span>
                        <h3><a href="#">Web Design for the Future</a></h3>
                        <p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit. Eos cumque dicta adipisci architecto culpa amet.</p>
                        <p class="author"><img src="{{url('design/style')}}/images/person1.jpg" alt="Free HTML5 Bootstrap Template by gettemplates.co"> <cite> Mike Adam</cite></p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 animate-box" data-animate-effect="fadeInUp">
                    <div class="fh5co-post">
                        <span class="fh5co-date">Sep. 23rd</span>
                        <h3><a href="#">Web Design for the Future</a></h3>
                        <p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit. Eos cumque dicta adipisci architecto culpa amet.</p>
                        <p class="author"><img src="{{url('design/style')}}/images/person1.jpg" alt="Free HTML5 Bootstrap Template by gettemplates.co"> <cite> Mike Adam</cite></p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 animate-box" data-animate-effect="fadeInUp">
                    <div class="fh5co-post">
                        <span class="fh5co-date">Sep. 24th</span>
                        <h3><a href="#">Web Design for the Future</a></h3>
                        <p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit. Eos cumque dicta adipisci architecto culpa amet.</p>
                        <p class="author"><img src="{{url('design/style')}}/images/person1.jpg" alt="Free HTML5 Bootstrap Template by gettemplates.co"> <cite> Mike Adam</cite></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="fh5co-started">
        <div class="container">
            <div class="row animate-box">
                <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                    <span>Let's work together</span>
                    <h2>Try this template for free</h2>
                    <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
                    <p><button type="submit" class="btn btn-primary">Get In Touch</button></p>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection