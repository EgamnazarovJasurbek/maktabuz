@extends('layouts.site')
<style>
    @media (max-width:412px) {
        .topMain-logo {
            position: absolute;
            top: 14%;
            right: 35%;
            color: black;
        }

        .additionalFuntions {
            position: absolute;
            top: 24%;
            right: 3%;
        }

        .mainLeader {
            display: inline-block;
            width: 0;
        }

        .mainLeader .details {
            padding: 38px 0;
        }

        .mainLeader .details h1 {
            font-size: 27px;
            padding-left: 2px;
            margin-bottom: 25px;
        }

        .mainLeader .details span {
            padding-left: 2px;
        }

        .mainLeader .details span::after {
            top: -25%;
            left: 71%;
        }

        .deputy_director {
            margin-top: 67px;
            padding-left: 94px;
        }

        .mainLeader img {
            margin-left: 52px;
        }

        .mainLeader .details h1 {
            font-size: 27px;
            padding-left: 52px;
            margin-bottom: 25px;
        }

        .mainLeader .details span {
            padding-left: 52px;
        }
    }

    @media (max-width:375px) {
        .mainLeader {
            display: inline-block;
            width: 0;
        }

        .mainLeader .details {
            padding: 38px 0;
        }

        .mainLeader img {
            margin-left: 52px;
        }

        .mainLeader .details h1 {
            font-size: 27px;
            padding-left: 52px;
            margin-bottom: 25px;
        }

        .mainLeader .details span {
            padding-left: 52px;
        }

        .mainLeader .details span::after {
            top: -25%;
            left: 71%;
        }

        .deputy_director {
            margin-top: 67px;
            padding-left: 94px;
        }
    }
</style>
@section('content')
          <!-- Image Header Start-->
          <div class="mainContent withImage">
            <div class="imageHeader" style="padding-bottom: 0px;">
                <div class="container">
                    <h1 class="pageTitle text-dark">Rahbariyat</h1>
                    <nav aria-label="breadcrumb">
                        <ol id="w5" class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Asosiy</a></li>
                            <li class="breadcrumb-item " aria-current="page">Rahbariyat</li>
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

            <!-- Direktor -->
            <div class="container">
                <a href="leaderShipDetail.html" class="mainLeader">
                    <img alt="Director" src="allStyle/image/Director.jpg">
                    <div class="details">
                        <h1><b>Aripova</b><br>Umida<br>Djangirovna</h1>
                        <span>Maktab direktori</span>
                    </div>
                </a>
            </div>

            <hr class="sections__line">

            <!-- ZAM Direktors -->
            <div class="container deputy_director">
                <div class="row">
                    <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                        <a href="leaderShipDetail.html" class="deputy_director-main">
                            <img src="allStyle/image/Director.jpg" width="60%" alt="Zam Director">
                            <div class="deputy_director-details">
                                <h1><b>Aripova</b><br>Umida<br>Djangirovna</h1>
                                <span>Zam direktor</span>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                        <a href="leaderShipDetail.html" class="deputy_director-main">
                            <img src="allStyle/image/Director.jpg" width="60%" alt="Zam Director">
                            <div class="deputy_director-details">
                                <h1><b>Aripova</b><br>Umida<br>Djangirovna</h1>
                                <span>M'anaviyatchi</span>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                        <a href="leaderShipDetail.html" class="deputy_director-main">
                            <img src="allStyle/image/Director.jpg" width="60%" alt="Zam Director">
                            <div class="deputy_director-details">
                                <h1><b>Aripova</b><br>Umida<br>Djangirovna</h1>
                                <span>Bo'lim boshlig'i</span>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                        <a href="leaderShipDetail.html" class="deputy_director-main">
                            <img src="allStyle/image/Director.jpg" width="60%" alt="Zam Director">
                            <div class="deputy_director-details">
                                <h1><b>Aripova</b><br>Umida<br>Djangirovna</h1>
                                <span>Yoshlar yetakchisi</span>
                            </div>
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