@extends('layouts.site')

<style>
    @media (max-width:412px) {
        .topMain-logo {
            position: absolute;
            top: 17% !important;
            right: 35%;
            color: black;
        }

        .additionalFuntions {
            position: absolute;
            top: 24% !important;
            right: 3%;
        }
    }
</style>

@section('content')
    <!-- Image Header Start-->
    <div class="mainContent withImage">
        <div class="imageHeader" style="padding-bottom: 0px;">
            <div class="container">
                <h1 class="pageTitle text-dark">@lang('words.search')</h1>
                <nav aria-label="breadcrumb">
                    <ol id="w5" class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('index') }}">@lang('words.asosiy')</a></li>
                        <li class="breadcrumb-item " aria-current="page">@lang('words.search')</li>
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
            <div class="search">
                <!-- Search Topilmaganda -->
                <div class="container">
                    <div class="emptyBox"><i class="fas fa-search"></i>
                        <p>@lang('words.searchNull')</p>
                    </div>


                    <!-- Search Topilganda👇 -->
                    <div class="imageCardBoxes">
                        <div class="row">
                            <div class="col-xl-4 col-lg-4 col-md-6">
                                <a href="">
                                    <div class="imageBox">
                                        <img alt="image" src="allStyle/image/It live logo for red-04-04.png">
                                    </div>
                                    <h1>Rossiya universitetlarida taʼlim olmoqchimisiz? Unda koʻrgazmaga
                                        marhamat!
                                    </h1>
                                    <span>04 Oktabr 2021</span>
                                </a>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6">
                                <a href="">
                                    <div class="imageBox">
                                        <img alt="image" src="allStyle/image/It live logo for red-04-04.png">
                                    </div>
                                    <h1>Rossiya universitetlarida taʼlim olmoqchimisiz? Unda koʻrgazmaga
                                        marhamat!
                                    </h1>
                                    <span>04 Oktabr 2021</span>
                                </a>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6">
                                <a href="">
                                    <div class="imageBox">
                                        <img alt="image" src="allStyle/image/It live logo for red-04-04.png">
                                    </div>
                                    <h1>Rossiya universitetlarida taʼlim olmoqchimisiz? Unda koʻrgazmaga
                                        marhamat!
                                    </h1>
                                    <span>04 Oktabr 2021</span>
                                </a>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </section>
    </main>
    <!-- Main section End -->
@endsection
