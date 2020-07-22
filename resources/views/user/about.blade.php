@extends('layouts.frontend_layout2')
@section('title')
    NETRO COMPUTERS | About Us
@endsection
@section('category')
    About Us
@endsection
@section('content')



<div class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">

            <!-- section title -->
            <div class="col-md-12" style="padding-top: 25px;">
                <div class="section_title_container text-center">
                    <h3 class="section_title" style="text-transform: uppercase;"><strong>Welcome To Netro Computers</strong></h3>
                </div>
            </div>
        </div><br><br><br>
            <!-- /section title -->
            <div class="row">
                <div class="col-md-5">
                    <div class="aboutbox">
                        <img src="images/paul-calescu-KW3m50XRhjk-unsplash.jpg" alt="" class="aboutboximg img-fluid" style="height: 60vh;">
                    </div>
                </div>

                <div class="col-md-7 ">
                    <div class="aboutbox">
                    <p style="text-align: justify;">We, Netro Computers, warmly welcome you for our website. As a pioneer institute in the ICT sector in the area, we have completed ten years proud history in catering all computing needs of our valued customers. Our Head Office is situated in a strategically important and easily accessible location within the center of the Chilaw town with the aim of providing past and convenient service to you. We have another branch at Marawila which acts as the technical arm of the institute. Please be aware that apart from above two branches, at the moment, we don’t have any other places for conducting our business.</p>
                    <p style="text-align: justify;">As an innovative service provider in the ICT sector within the area concerned, our main objective is catering for all your ICT related requirements in reliable and speedy manner.  Our prime and foremost aim is providing reliable, quality and competitive service for our customers as the most precious asset of our company.</p>
                    <p style="text-align: justify;">We are very selective in choosing products among vast number of brand names with different quality standards in the open market. Owing to our prime consideration that is providing quality and reliable service for your maximum satisfaction. We are strongly determined to offer products selected only from globally renowned vendors in the sector such as Dell, HP etc. while maintaining competitive prices for the ultimate benefit of the customers.    </p>
                </div></div>
            </div>

    </div>
</div>

<div class="section" id="Services">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">

            <!-- section title -->
            <div class="col-md-12">
                <div class="section-title"><br> <br>
                    <center>
                        <h3 class="title">Services</h3>
                    </center>
                    
                </div>
            </div>
        </div>
            <!-- /section title -->

        <div class="row">
            <div class="col-md-3">
                <div class="serbox">
                    <img src="images/images.png" alt="" class="serimg img-fluid">
                </div>

                
                <div class="serbox-body">
                    <h4>DESKTOP,LAPTOP,TAB REPAIRE</h4><br>
                    {{-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque voluptas asperiores perspiciatis quia, ratione earum.</p> --}}

                </div>
            </div>
            <div class="col-md-3">
                <div class="serbox">
                    <img src="images/115-1153143_computer-repair-sharjah-computer-services-logo-free.png" alt="" class="serimg img-fluid">
                </div>
                <div class="serbox-body">
                    <h4>FAST ON SITE SERVICE</h4><br>
                    {{-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat in doloremque doloribus quibusdam atque quam!</p> --}}

                </div>
            </div>
            <div class="col-md-3">
                <div class="serbox">
                    <img src="images/printer-repair-concept-icon-in-outline-vector-31299911.png" alt="" class="serimg img-fluid">
                </div>
                <div class="serbox-body">
                    <h4>PRINTER REPAIRE</h4><br>
                    {{-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex itaque doloremque consectetur, mollitia quos laboriosam?</p> --}}

                </div>
            </div>
            <div class="col-md-3">
                <div class="serbox">
                    <img src="images/download.png" alt="" class="serimg img-fluid">
                </div>
                <div class="serbox-body">
                    <h4>NETWORK</h4><br>
                    {{-- <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Assumenda iure architecto quos ex, temporibus ad.</p> --}}

                </div>
            </div>
        </div>
    
    </div>
</div>


@include('inc.front.ourteam')

@endsection










