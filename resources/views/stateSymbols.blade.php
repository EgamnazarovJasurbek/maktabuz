@extends('layouts.site')

<style>
       @media (max-width:480px) {
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
    }
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
    }
</style>


@section('content')
    <!-- Image Header Start-->
    <div class="mainContent withImage">
        <div class="imageHeader" style="padding-bottom: 0px;">
            <div class="container">
                <h1 class="pageTitle text-dark">@lang('words.davlatRamzlari')</h1>
                <nav aria-label="breadcrumb">
                    <ol id="w5" class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('index') }}">@lang('words.asosiy')</a></li>
                        <li class="breadcrumb-item " aria-current="page">@lang('words.davlatRamzlari')</li>
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
            <div class="state_sybmols">
                <div class="container">
                    <div class="sybmols">
                        <div class="row">
                            <!-- Gerb -->
                            <h2 style="text-transform: uppercase;">@lang('words.gerb')</h2>
                            <div class="col-12 text-center mt-5">
                                <img src="{{ asset('allStyle/image/Gerb.png') }}" alt="Img" width="20%">
                            </div>
                            <p style="font-size: 18px; font-weight: 400;">
                                <br> <br>@lang('words.gerbText')<br> <br>

                                @lang('words.gerbText2')
                            </p>
                            <!-- Bayrog' -->
                            <h2 style="text-transform: uppercase; margin-top: 50px;">@lang('words.flag')</h2>
                            <div class="col-12 text-center mt-5">
                                <img src="{{ asset('allStyle/image/Flag-uz.jpg') }}" alt="Img" width="30%">
                            </div>
                            <p style="font-size: 18px; font-weight: 400;">
                                <br> <br>@lang('words.flagText') <br> <br>

                                @lang('words.flagText2')
                            </p>
                            <!-- Madhiya -->
                            <h2 style="text-transform: uppercase; margin-top: 50px;">@lang('words.anthem')</h2>
                            <p style="font-size: 18px; font-weight: 400;">
                                <br> <br>
                                @lang('words.anthemText')<br> <br>

                                @lang('words.anthemText2')
                            </p>

                            <div class="col-lg-3 col-md-6 col-sm-12">
                                <b>@lang('words.anthemMusic') <br>
                                    @lang('words.anthemPoem') </b>
                                <br> <br>
                                <strong>....</strong> <br>
                                <p style="text-align: justify; word-spacing: 0px; font-weight: 500;">Serquyosh, hur
                                    o'lkam, elga baxt,
                                    najot,
                                    Sen o'zing do'stlarga yo'ldosh, mehribon!
                                    Yashnagay to abad ilmu fan, ijod,
                                    Shuhrating porlasin toki bor jahon!
                                    <br> <br>
                                    Naqorat: <br>
                                    Oltin bu vodiylar — jon O'zbekiston,
                                    Ajdodlar mardona ruhi senga yor!
                                    Ulug'xalq qudrati jo'sh urgan zamon,
                                    Olamni Mahliyo aylagan Diyor!
                                    <br> <br>
                                    Bag'ri keng o'zbekning o'chmas iymoni,
                                    Erkin, yosh avlodlar senga zo'r qanot!
                                    Istiqlol mash'ali, tinchlik posboni,
                                    Haqsevar, ona yurt, mangu bo'l obod!
                                    <br> <br>
                                    Naqorat: <br>
                                    Oltin bu vodiylar — jon O'zbekiston,
                                    Ajdodlar mardona ruhi senga yor!
                                    Ulug'xalq qudrati jo'sh urgan zamon,
                                    Olamni Mahliyo aylagan Diyor!
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!-- Main section End -->
@endsection
