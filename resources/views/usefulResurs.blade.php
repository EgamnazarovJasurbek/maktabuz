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

        .projectsList {
            grid-template-columns: unset;
        }

        .projectsList .item,
        .projectsList a.item {
            padding: 40px 0;
        }
    }
</style>

@section('content')
    <!-- Image Header Start-->
    <div class="mainContent withImage">
        <div class="imageHeader" style="padding-bottom: 0px;">
            <div class="container">
                <h1 class="pageTitle text-dark">@lang('words.usefulResurs')</h1>
                <nav aria-label="breadcrumb">
                    <ol id="w5" class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('index') }}">@lang('words.asosiy')</a></li>
                        <li class="breadcrumb-item " aria-current="page">@lang('words.usefulResurs')</li>
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
            <div class="useful-links">
                <div class="container">

                    <div class="projectsList">
                        @foreach ($resources as $resource)
                            <a class="item" href="{{ route('usefulResursDetail', $resource->id) }}">
                                <img alt="logo" src="{{ asset('resources/images/' . $resource->image) }}">
                                <div class="description">
                                    <h1>{{ $resource['name_' . \App::getLocale()] }}</h1>
                                    <h3>{{ $resource['body_' . \App::getLocale()] }}
                                    </h3>
                                </div>
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!-- Main section End -->
@endsection
