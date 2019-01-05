@extends('style.index')

@section('content')



    <div id="fh5co-contact">
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-md-push-1 animate-box">

                    <div class="fh5co-contact-info">
                        <h3>Contact Information</h3>
                        <ul>
                            <li class="address">EL Tahreer-Tema-Sohag-Egypt, <br> </li>
                            <li class="phone"><a href="tel://01123739538">+2 01123739538</a></li>
                            <li class="email"><a href="mailto:ahmedmashhor500@gmail.com">ahmedmashhor500@gmail.com</a></li>
                        </ul>
                    </div>

                </div>
                <div class="col-md-6 animate-box">
                    <h3>Get In Touch</h3>
                    <form action="{{url('send/message/contact')}}" method="post">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <div class="row form-group">
                            <div class="col-md-6">
                                <label for="fname">First Name</label>
                                <input type="text" name="first_name" id="fname" class="form-control" placeholder="Your firstname">
                            </div>
                            <div class="col-md-6">
                                <label for="lname">Last Name</label>
                                <input type="text" name="last_name" id="lname" class="form-control" placeholder="Your lastname">
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-md-12">
                                <label for="email">Email</label>
                                <input type="email" name="email" id="email" class="form-control" placeholder="Your email address">
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-md-12">
                                <label for="subject">Subject</label>
                                <input type="text" name="subject" id="subject" class="form-control" placeholder="Your subject of this message">
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-md-12">
                                <label for="message">Message</label>
                                <textarea name="message" id="message" cols="30" rows="10" class="form-control" placeholder="Say something about us"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Send Message" class="btn btn-lg btn-primary">
                        </div>

                    </form>
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