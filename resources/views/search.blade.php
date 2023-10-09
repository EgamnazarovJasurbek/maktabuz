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


                    @if (count($news) > 0)
                        <h2 class="news__title"><span>{{ $key }}</span> so'zi bo'yicha qidiruv natijalar:
                            <b>{{ count($news) }}</b></h2>
                    @else
                        <h1 class="error">Kechirasiz, xatolik yuz berdi, <span>{{ $key }}</span> Sahifasi <br>
                            topilmadi</h1>
                        <button type="button" class="btn load-more-btn"><a href="{{ route('index') }}"
                                class="error_btn"></a></button>
                    @endif

                    <!-- Search Topilganda👇 -->
                    <div class="imageCardBoxes">
                        <div class="row">
                            @foreach ($news as $new)
                                <div class="col-xl-4 col-lg-4 col-md-6">
                                    <a href="{{ route('detailNew', $new->id) }}">
                                        <div class="imageBox">
                                            <img alt="image" src="{{ asset('news/images/' . $new->image ) }}">  
                                        </div>
                                        <h1>{{ $new['title_' . \App::getLocale()] }}
                                        </h1>
                                        <span>{{ $new->created_at->format(' d.M.Y') }}</span>
                                    </a>
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
