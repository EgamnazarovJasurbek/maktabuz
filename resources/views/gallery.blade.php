@extends('layouts.site')

<style>
     @media (max-width:480px) {
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

    @media (max-width: 375px) {
        .topMain-logo {
            position: absolute;
            top: 14% !important;
            right: 35%;
            color: black;
        }

        .additionalFuntions {
            position: absolute;
            top: 26% !important;
            right: 3%;
        }
    }
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

    @media (max-width: 375px) {
        .topMain-logo {
            position: absolute;
            top: 14% !important;
            right: 35%;
            color: black;
        }

        .additionalFuntions {
            position: absolute;
            top: 26% !important;
            right: 3%;
        }
    }
</style>

@section('content')
    <!-- Image Header Start-->
    <div class="mainContent withImage">
        <div class="imageHeader" style="padding-bottom: 0px;">
            <div class="container">
                <h1 class="pageTitle text-dark">@lang('words.schoolGallery')</h1>
                <nav aria-label="breadcrumb">
                    <ol id="w5" class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('index') }}">@lang('words.asosiy')</a></li>
                        <li class="breadcrumb-item " aria-current="page">@lang('words.schoolGallery')</li>
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
            <div class="schoolGallery">
                <div class="container">
                    <h1 class="gallery_title">@lang('words.schoolGallery')</h1>
                    <div class="row">
                        @foreach ($galleries as $gallery)
                            <div class="col-12 mb-2">
                                <img src="{{ asset('galleries/images/' . $gallery->image) }}" alt="Img" width="100%"  
                                    height="90%">
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!-- Main section End -->
@endsection
