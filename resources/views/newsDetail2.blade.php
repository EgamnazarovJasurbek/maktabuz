@extends('layouts.site')

<style>
    @media (max-width:412px) {
        .topMain-logo {
            position: absolute;
            top: 18% !important;
            right: 35%;
            color: black;
        }

        .additionalFuntions {
            position: absolute;
            top: 24% !important;
            right: 3%;
        }

        .navigationTabs {
            grid-template-columns: unset;
            margin: 0;
        }

        .navigationTabs a {
            margin: 20px 0;
        }

    }
</style>


@section('content')
    <!-- Image Header Start-->
    <div class="mainContent withImage">
        <div class="imageHeader" style="padding-bottom: 0px;">
            <div class="container">
                <h1 class="pageTitle text-dark">@lang('words.news') @lang('words.more')</h1>
                <nav aria-label="breadcrumb">
                    <ol id="w5" class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('index') }}">@lang('words.asosiy')</a></li>
                        <li class="breadcrumb-item " aria-current="page">@lang('words.news') @lang('words.more')</li>
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
            <div class="news__detail">
                <div class="container">
                    <div class="headerArea">
                        <div class="row">
                            <div class="col-lg-6 col-md-12 col-sm-12">
                                <div class="titleBox">
                                    <h1>{{ $annoouncement->title_1_uz }}</h1>
                                    <span> {{ $annoouncement->created_at->format(' d.M.Y')}} </span>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-12">
                                <div class="titleBox_img">
                                    <img alt="image" src="/Elon/images/{{ $annoouncement->image }}" width="70%">
                                </div>
                            </div>
                        </div>



                    </div>
                    <div class="news__detail-text">
                        <div class="row">
                            <div class="col-12 text-justify fw-medium">
                                <p>{{ $annoouncement->body_uz }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!-- Main section End -->
@endsection
