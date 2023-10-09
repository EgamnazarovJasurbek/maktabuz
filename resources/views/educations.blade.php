@extends('layouts.site')
<style>
    @media (max-width:412px) {
        .topMain-logo {
            position: absolute;
            top: 14% !important;
            right: 35%;
            color: black;
        }

        .additionalFuntions {
            position: absolute;
            top: 24% !important;
            right: 3%;
        }

        .servicesList {
            grid-template-columns: unset;
        }

        .servicesList a {
            padding: 20px 0;
        }
    }
</style>


@section('content')
    <!-- Image Header Start-->
    <div class="mainContent withImage">
        <div class="imageHeader" style="padding-bottom: 0px;">
            <div class="container">
                <h1 class="pageTitle text-dark">@lang('words.education')</h1>
                <nav aria-label="breadcrumb">
                    <ol id="w5" class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('index') }}">@lang('words.asosiy')</a></li>
                        <li class="breadcrumb-item " aria-current="page">@lang('words.education')</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- Image Header End -->

    </div>
    </header>
    <!-- Header End -->

    <!-- Main section Start -->
    <main>
        <section>
            <div class="main_tabs" style="padding: 10px 0;">
                <div class="container">

                    <div class="serviceTabs">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">

                            <li class="nav-item" role="presentation">
                                <a class="nav-link show active" data-toggle="tab" href="#tab1" role="tab"
                                    aria-selected="true">1-@lang('words.smena')</a>
                            </li>

                            <li class="nav-item" role="presentation">
                                <a class="nav-link" data-toggle="tab" href="#tab2" role="tab"
                                    aria-selected="false">2-@lang('words.smena')</a>
                            </li>

                            <li class="nav-item" role="presentation">
                                <a class="nav-link" data-toggle="tab" href="#tab3" role="tab"
                                    aria-selected="false">@lang('words.qoshimchaDars')</a>
                            </li>

                            <li class="nav-item" role="presentation">
                                <a class="nav-link " data-toggle="tab" href="#tab4" role="tab"
                                    aria-selected="true">@lang('words.sportTogarak')</a>
                            </li>

                        </ul>
                    </div>
                    <div class="tab-content mt-5">

                        <!-- 1  --  SMENA -->
                        <div class="tab-pane fade active show" id="tab1" role="tabpanel">
                            <div class="servicesList">
                                 @foreach ($oneshifts as $oneshift)
                                <a href="{{ asset('oneshifts/file/' . $oneshift->image) }}">
                                    <div>
                                        <div class="icon">
                                            <img alt="icon" src="{{ asset('allStyle/image/book svg.jfif') }}">
                                        </div>
                                        <span>{{ $oneshift['name_' . \App::getLocale()] }}</span>
                                    </div>
                                    <span>{{ $oneshift['name_' . \App::getLocale()] }}</span>
                                </a>
                                @endforeach 

                            </div>
                        </div>


                        <!-- 2  --  SMENA -->
                        <div class="tab-pane fade" id="tab2" role="tabpanel">
                            <div class="servicesList">
                                @foreach ($twoshifts as $twoshift)
                                <a href="{{ asset('twoshifts/file/' . $twoshift->image) }}">
                                    <div>
                                        <div class="icon">
                                            <img alt="icon" src="{{ asset('allStyle/image/book svg.jfif') }}">
                                        </div>
                                        <span>{{ $twoshift['name_' . \App::getLocale()] }}</span>
                                    </div>
                                    <span>{{ $twoshift['name_' . \App::getLocale()] }}</span>
                                </a>
                                @endforeach  
                            </div>
                        </div>
                        <!-- Qo'shimcha Darslar -->
                        <div class="tab-pane fade" id="tab3" role="tabpanel">
                            <div class="servicesList">
                                @foreach ($educations as $education)
                                <a href="{{ route('educationDetails',$education->id) }}">
                                    <div>
                                        <div class="icon">
                                            <img alt="icon" src="{{ asset('lessons/images/' . $education->image) }}" width="90px">
                                        </div>
                                        <span>{{ $education['name_' . \App::getLocale()] }}</span>
                                    </div>
                                    <span>{{ $education['name_' . \App::getLocale()] }}</span>
                                </a>
                                @endforeach
                              

                                
                            </div>
                        </div>
                        <!-- Sport To'garaklari -->
                        <div class="tab-pane fade " id="tab4" role="tabpanel">
                            <div class="servicesList">
                                @foreach ($sports as $sport)
                                <a href="{{ route('educationDetails2',$sport->id) }}">
                                    <div>
                                        <div class="icon">
                                            <img alt="icon" src="{{ asset('sports/images/' . $sport->image) }}" width="90px">
                                        </div>
                                        <span>{{ $sport['name_' . \App::getLocale()] }} </span>
                                    </div>
                                    <span>{{ $sport['name_' . \App::getLocale()] }}</span>
                                </a>
                                @endforeach
                              

                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!-- Main section End -->
@endsection


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
