@extends('layouts.site')
<style>
     @media (max-width:480px) {
        .topMain-logo {
            position: absolute;
            top: 18% !important;
            right: 35% !;
            color: black;
        }

        .additionalFuntions {
            position: absolute;
            top: 25% !important;
            right: 3%;
        }

        .leaderInfo {
            display: block !important;
        }

        .leaderInfo .photo {
            width: 100% !important; 
            height: 72% !important;
            text-align: center !important;
        }

        .leaderInfo .photo img {
            width: 100% !important; 
        }
        .leaderInfo .description .staffTitle{
            margin-top: 65px !important;
            font-size: 22px !important;
        }
    
    }
    @media (max-width:412px) {
        .topMain-logo {
            position: absolute;
            top: 18% !important;
            right: 35% !;
            color: black;
        }

        .additionalFuntions {
            position: absolute;
            top: 25% !important;
            right: 3%;
        }

        .leaderInfo {
            display: block;
        }

        .leaderInfo .photo {
            width: 100%;
        }

        .leaderInfo .photo img {
            width: 100%;
            text-align: center;
        }

        .leaderInfo .description .staffTitle {
            font-size: 22px;
            margin: 62px 0;
            margin-bottom: 0;
            text-transform: uppercase;
        }

        .contactInfo span {
            font-size: 16px;
        }
    }

    @media (max-width:375px) {
        .topMain-logo {
            position: absolute;
            top: 13% !important;
            right: 35%;
            color: black;
        }

        .additionalFuntions {
            position: absolute;
            top: 25% !important;
            right: 3%;
        }

        .leaderInfo {
            display: block;
        }

        .leaderInfo .photo {
            width: 100%;
        }

        .leaderInfo .photo img {
            width: 100%;
            text-align: center;
        }

        .leaderInfo .description .staffTitle {
            font-size: 22px;
            margin: 17px 0;
            margin-bottom: 0;
            text-transform: uppercase;
        }

        .contactInfo span {
            font-size: 16px;
        }
    }
</style>

@section('content')
    <!-- Image Header Start-->
    <div class="mainContent withImage">
        <div class="imageHeader" style="padding-bottom: 0px;">
            <div class="container">
                <h1 class="pageTitle text-dark">@lang('words.teachers')</h1>
                <nav aria-label="breadcrumb">
                    <ol id="w5" class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('index') }}">@lang('words.asosiy')</a></li>
                        <li class="breadcrumb-item " aria-current="page">@lang('words.teachers')</li>
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
            <div class="leaderShip">

                <!-- Rahbariyat Detail -->
                <div class="container">
                    <div class="leaderInfo">
                        <div class="photo">
                            <img alt="image" src="{{ asset('teachers/images/'. $teachers->image) }}" height="500px">
                        </div>

                        <div class="description">
                            <h1 class="staffTitle">{{ $teachers['name_' . \App::getLocale()]  }}</h1>

                            <h2>{{ $teachers['specialist_' . \App::getLocale()] }}</h2>

                            <div class="contactInfo">
                                <div>
                                    <i class="far fa-clock"></i>
                                    <span>{{ $teachers['class_time_' . \App::getLocale()]  }}</span>
                                </div>

                                <div>
                                    <i class="fas fa-phone-alt"></i>
                                    <a href="tel:998 99 871 25 13">{{ $teachers->phone }}</a>
                                </div>

                                <div>
                                    <i class="far fa-envelope-open"></i>
                                    <a href="mailto:school329@xtv.uz">{{ $teachers->email }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <hr class="sections__line">


            </div>
            </div>
        </section>
    </main>
    <!-- Main section End -->
@endsection


<script src="allStyle/js/bootstrap.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
