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
                <h1 class="pageTitle text-dark">@lang('words.tezSavollar')</h1>
                <nav aria-label="breadcrumb">
                    <ol id="w5" class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('index') }}">@lang('words.asosiy')</a></li>
                        <li class="breadcrumb-item " aria-current="page">@lang('words.tezSavollar')</li>
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
            <div class="faq">
                <div class="container">
                    <div class="collapse_Faq">
                        <div class="row">
                            @foreach ($faqs as $faq)
                                <div class="col-12" style="border: 1px solid #ece1e1; padding: 20px;">
                                    <a href="">{{ $faq['title_' . \App::getLocale()] }}</a>
                                    <p class="faq_answer">{{ $faq['body_' . \App::getLocale()] }}</p>
                                </div>
                            @endforeach
                        </div>
                    </div>



                </div>
            </div>
        </section>
    </main>
    <!-- Main section End -->
@endsection
