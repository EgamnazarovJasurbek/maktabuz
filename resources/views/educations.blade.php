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
                <h1 class="pageTitle text-dark">Ta'lim</h1>
                <nav aria-label="breadcrumb">
                    <ol id="w5" class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Asosiy</a></li>
                        <li class="breadcrumb-item " aria-current="page">Ta'lim</li>
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
                                    aria-selected="true">1-smena</a>
                            </li>

                            <li class="nav-item" role="presentation">
                                <a class="nav-link" data-toggle="tab" href="#tab2" role="tab"
                                    aria-selected="false">2-smena</a>
                            </li>

                            <li class="nav-item" role="presentation">
                                <a class="nav-link" data-toggle="tab" href="#tab3" role="tab"
                                    aria-selected="false">Qo‘shimcha darslar</a>
                            </li>

                            <li class="nav-item" role="presentation">
                                <a class="nav-link " data-toggle="tab" href="#tab4" role="tab"
                                    aria-selected="true">Sport to'garaklari</a>
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
                                            <img alt="icon" src="allStyle/image/book svg.jfif">
                                        </div>
                                        <span>1-sinf dars jadvali</span>
                                    </div>
                                    <span>1-sinf dars jadvali</span>
                                </a>
                                @endforeach
                               

                                {{-- <a href="#">
                                    <div>
                                        <div class="icon">
                                            <img alt="icon" src="allStyle/image/book svg.jfif">
                                        </div>
                                        <span>3-sinf dars jadvali</span>
                                    </div>
                                    <span>3-sinf dars jadvali</span>
                                </a>

                                <a href="#">
                                    <div>
                                        <div class="icon">
                                            <img alt="icon" src="allStyle/image/book svg.jfif">
                                        </div>
                                        <span>4-sinf dars jadvali</span>
                                    </div>
                                    <span>4-sinf dars jadvali</span>
                                </a>

                                <a href="#">
                                    <div>
                                        <div class="icon">
                                            <img alt="icon" src="allStyle/image/book svg.jfif">
                                        </div>
                                        <span>5-sinf dars jadvali</span>
                                    </div>
                                    <span>5-sinf dars jadvali</span>
                                </a>

                                <a href="#">
                                    <div>
                                        <div class="icon">
                                            <img alt="icon" src="allStyle/image/book svg.jfif">
                                        </div>
                                        <span>8-sinf dars jadvali</span>
                                    </div>
                                    <span>8-sinf dars jadvali</span>
                                </a>

                                <a href="#">
                                    <div>
                                        <div class="icon">
                                            <img alt="icon" src="allStyle/image/book svg.jfif">
                                        </div>
                                        <span>9-sinf dars jadvali</span>
                                    </div>
                                    <span>9-sinf dars jadvali</span>
                                </a>

                                <a href="#">
                                    <div>
                                        <div class="icon">
                                            <img alt="icon" src="allStyle/image/book svg.jfif">
                                        </div>
                                        <span>10-sinf dars jadvali</span>
                                    </div>
                                    <span>10-sinf dars jadvali</span>
                                </a>

                                <a href="#">
                                    <div>
                                        <div class="icon">
                                            <img alt="icon" src="allStyle/image/book svg.jfif">
                                        </div>
                                        <span>11-sinf dars jadvali</span>
                                    </div>
                                    <span>11-sinf dars jadvali</span>
                                </a> --}}

                                {{-- <a href="#">
                                    <div>
                                        <div class="icon">
                                            <img alt="icon" src="allStyle/image/book svg.jfif">
                                        </div>
                                        <span>Dars soatlari</span>
                                    </div>
                                    <span>Dars soatlari</span>
                                </a> --}}
                            </div>
                        </div>
                        <!-- 2  --  SMENA -->
                        <div class="tab-pane fade" id="tab2" role="tabpanel">
                            <div class="servicesList">
                                <a href="#">
                                    <div>
                                        <div class="icon">
                                            <img alt="icon" src="allStyle/image/book svg.jfif">
                                        </div>
                                        <span>2-sinf dars jadvali</span>
                                    </div>
                                    <span>2-sinf dars jadvali</span>
                                </a>

                                <a href="#">
                                    <div>
                                        <div class="icon">
                                            <img alt="icon" src="allStyle/image/book svg.jfif">
                                        </div>
                                        <span>6-sinf dars jadvali</span>
                                    </div>
                                    <span>6-sinf dars jadvali</span>
                                </a>

                                <a href="#">
                                    <div>
                                        <div class="icon">
                                            <img alt="icon" src="allStyle/image/book svg.jfif">
                                        </div>
                                        <span>7-sinf dars jadvali</span>
                                    </div>
                                    <span>7-sinf dars jadvali</span>
                                </a>

                                <a href="#">
                                    <div>
                                        <div class="icon">
                                            <img alt="icon" src="allStyle/image/book svg.jfif">
                                        </div>
                                        <span>Dars soatlari</span>
                                    </div>
                                    <span>Dars soatlari</span>
                                </a>
                            </div>
                        </div>
                        <!-- Qo'shimcha Darslar -->
                        <div class="tab-pane fade" id="tab3" role="tabpanel">
                            <div class="servicesList">
                                <a href="">
                                    <div>
                                        <div class="icon">
                                            <img alt="icon" src="allStyle/image/book svg.jfif">
                                        </div>
                                        <span>Hunarmandlar</span>
                                    </div>
                                    <span>Hunarmandlar</span>
                                </a>

                                <a href="#">
                                    <div>
                                        <div class="icon">
                                            <img alt="icon" src="allStyle/image/book svg.jfif">
                                        </div>
                                        <span>Sehrli qo'llar</span>
                                    </div>
                                    <span>Sehrli qo'llar</span>
                                </a>

                                <a href="#">
                                    <div>
                                        <div class="icon">
                                            <img alt="icon" src="allStyle/image/book svg.jfif">
                                        </div>
                                        <span>Mohir qo'llar</span>
                                    </div>
                                    <span>Mohir qo'llar</span>
                                </a>

                                <a href="#">
                                    <div>
                                        <div class="icon">
                                            <img alt="icon" src="allStyle/image/book svg.jfif">
                                        </div>
                                        <span>Dasturchilar</span>
                                    </div>
                                    <span>Dasturchilar</span>
                                </a>

                                <a href="#">
                                    <div>
                                        <div class="icon">
                                            <img alt="icon" src="allStyle/image/book svg.jfif">
                                        </div>
                                        <span>Matematiklar</span>
                                    </div>
                                    <span>Matematiklar</span>
                                </a>

                                <a href="#">
                                    <div>
                                        <div class="icon">
                                            <img alt="icon" src="allStyle/image/book svg.jfif">
                                        </div>
                                        <span>Yosh kimyogarlar </span>
                                    </div>
                                    <span>Yosh kimyogarlar</span>
                                </a>

                                <a href="#">
                                    <div>
                                        <div class="icon">
                                            <img alt="icon" src="allStyle/image/book svg.jfif">
                                        </div>
                                        <span>Yosh biolog</span>
                                    </div>
                                    <span>Yosh biolog</span>
                                </a>

                                <a href="#">
                                    <div>
                                        <div class="icon">
                                            <img alt="icon" src="allStyle/image/book svg.jfif">
                                        </div>
                                        <span>Al Xorazmiy avlodlari</span>
                                    </div>
                                    <span>Al Xorazmiy avlodlari </span>
                                </a>
                            </div>
                        </div>
                        <!-- Sport To'garaklari -->
                        <div class="tab-pane fade " id="tab4" role="tabpanel">
                            <div class="servicesList">
                                <a href="#">
                                    <div>
                                        <div class="icon">
                                            <img alt="icon" src="allStyle/image/book svg.jfif">
                                        </div>
                                        <span>Milliy Kurash </span>
                                    </div>
                                    <span>Milliy Kurash </span>
                                </a>

                                <a href="#">
                                    <div>
                                        <div class="icon">
                                            <img alt="icon" src="allStyle/image/book svg.jfif">
                                        </div>
                                        <span>Futbol</span>
                                    </div>
                                    <span>Futbol</span>
                                </a>

                                <a href="#">
                                    <div>
                                        <div class="icon">
                                            <img alt="icon" src="allStyle/image/book svg.jfif">
                                        </div>
                                        <span>Voleybol</span>
                                    </div>
                                    <span>Voleybol</span>
                                </a>

                                <a href="#">
                                    <div>
                                        <div class="icon">
                                            <img alt="icon" src="allStyle/image/book svg.jfif">
                                        </div>
                                        <span>Dzyudo</span>
                                    </div>
                                    <span>Dzyudo</span>
                                </a>

                                <a href="#">
                                    <div>
                                        <div class="icon">
                                            <img alt="icon" src="allStyle/image/book svg.jfif">
                                        </div>
                                        <span>Taekvando</span>
                                    </div>
                                    <span>Taekvando</span>
                                </a>

                                <a href="#">
                                    <div>
                                        <div class="icon">
                                            <img alt="icon" src="allStyle/image/book svg.jfif">
                                        </div>
                                        <span>Regbi</span>
                                    </div>
                                    <span>Regbi</span>
                                </a>

                                <a href="#">
                                    <div>
                                        <div class="icon">
                                            <img alt="icon" src="allStyle/image/book svg.jfif">
                                        </div>
                                        <span>Badiiy Gimnastika</span>
                                    </div>
                                    <span>Badiiy Gimnastika</span>
                                </a>

                                <a href="#">
                                    <div>
                                        <div class="icon">
                                            <img alt="icon" src="allStyle/image/book svg.jfif">
                                        </div>
                                        <span>Shaxmat</span>
                                    </div>
                                    <span>Shaxmat</span>
                                </a>

                                <a href="#">
                                    <div>
                                        <div class="icon">
                                            <img alt="icon" src="allStyle/image/book svg.jfif">
                                        </div>
                                        <span>Harakatli o'yinlar</span>
                                    </div>
                                    <span>Harakatli o'yinlar</span>
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


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
