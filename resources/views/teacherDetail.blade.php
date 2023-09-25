@extends('layouts.site')
<style>
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
                            <img alt="image" src="/teachers/images/{{ $teachers->image }}" height="450px">
                        </div>

                        <div class="description">
                            <h1 class="staffTitle">{{ $teachers->name_uz  }}</h1>

                            <h2>{{ $teachers->specialist_uz }}</h2>

                            <div class="contactInfo">
                                <div>
                                    <i class="far fa-clock"></i>
                                    <span>{{ $teachers->class_time_uz  }}</span>
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



                            <div class="collapseBox">
                                <a data-toggle="collapse" href="#collapseExample" role="button">Biografiya</a>

                                <div class="collapse" id="collapseExample">
                                    <div class="item">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iste a,
                                        earum commodi accusantium officiis id.</div>
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