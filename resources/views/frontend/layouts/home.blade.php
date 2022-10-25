
@extends('frontend.layouts.master')
@section('content')
    <!--header section-->

    <!--Marquee part-->
    <div class="container">
        <marquee behavior="scroll" direction="left">শুরু করছি আল্লাহর নামে যিনি পরম করুণাময়, অতি দয়ালু।</marquee>
    </div>


    <!----slider section--->

    @include('frontend.layouts.slider')


    <!--Contact us-->

    <section class="about_us">
        <div class="container">
            <strong >About Us</strong>
            <p style="text-align: justify">Islami Bank Foundation (IBF) is a social welfare oriented organization created by Islami Bank Bangladesh Limited for the uplift and emancipation of the helpless and downtrodden people of the society.</p>

        </div>
    </section>

    <!--Middle-->
    <section class="middle">
       <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <a href="#" class="card-link"><h3>Education</h3></a>

                    <p style="text-align: justify">If anyone travels on a road in search of knowledge, Allah will cause him to travel on one of the roads of Paradise.</p>
                    <p class="text-end">"Holy Prophet".</p>


                </div>

                <div class="col-md-4">
                    <a href="#" class="card-link"><h3>Health</h3></a>

                    <p style="text-align: justify">Seek your health fullness, for, besides the blessing of (unwavering) faith, man has not been granted a better gift"

                        Islami bank foundation established many health institutes all over the country.{{--<a href="#" class="card-link"> readmore</a>--}}</p>


                </div>

                <div class="col-md-4">
                    <a href="" class="card-link"><h3>Social Welfare</h3></a>

                    <p style="text-align: justify">Islami Bank Foundation do many Social Welfare Activities.
                        Some recent social welfare activities of Islami Bank Foundation are described here.</p>

                </div>

            </div>
       </div>

    </section>

    <!--Important LInk-->

    <section class="notice">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="card" style="color:whitesmoke;font-size: 20px;">
                        <div class="card-header">
                            Notice
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><a href="{{route('jakat')}}">Jakat</a> </li>

                        </ul>
                    </div>


                </div>

                <div class="col-md-4">
                    <div class="card" >
                        <div class="card-header" style="color:whitesmoke;font-size: 20px;">
                            News & Events
                        </div>
                        <ul><a href="{{route('gallary')}}">
                                <marquee behavior="scroll" direction="left">শুরু করছি আল্লাহর নামে যিনি পরম করুণাময়, অতি দয়ালু। </marquee> </a><br>
                        dddddddddddd
                        </ul>

                        <!-- Carousel wrapper -->

                        <!-- Carousel wrapper -->
                       {{-- <ul class="list-group list-group-flush">
                            <li class="list-group-item"><a href="{{route('hospital-info')}}">Hospital-Info</a> </li>
                            <li class="list-group-item"><a href="{{route('hospital-info')}}">Hospital-Info</a> </li>
                            <li class="list-group-item"><a href="{{route('hospital-info')}}">Hospital-Info</a> </li>
                            <li class="list-group-item"><a href="{{route('hospital-info')}}">Hospital-Info</a> </li>
                        </ul>--}}
                    </div>


                </div>

                <div class="col-md-4">
                    <div class="card" style="color:whitesmoke;font-size: 20px;">
                        <div class="card-header">
                            Links
                        </div>
                        <ul class="list-group list-group-flush" >
                            <li class="list-group-item"><a href="http://119.18.151.117:7073/ERP/login/auth/">HR</a></li>
                            <li class="list-group-item"><a href="http://119.18.151.65:8080/accounts">Accounts</a></li>
                            <li class="list-group-item"><a href="http://119.18.151.65:8082/PmisReport/">PMIS</a></li>
                            <li class="list-group-item"><a href="http://119.18.151.65:8081/leave">Leave</a></li>
                            <li class="list-group-item"><a href="http://119.18.151.65:8090/eProcurement/">eProcurement</a></li>
                            <li class="list-group-item"><a href="https://www.islamibankbd.com/">Islami Bank Bangladesh</a> </li>

                        </ul>
                    </div>


                </div>

            </div>
        </div>

    </section>
    <!--Footer Part-->

@endsection
