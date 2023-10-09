@extends('layouts.site')

<style>
        @media (max-width:480px) {
        .topMain-logo {
            position: absolute;
            top: 19% !important;
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
                    <div class="pageView">
                        <div class="projectView">
                            <img alt="logo" src="{{ asset('resources/images/'. $resource->image) }}">

                            <div class="description">
                                <h1 class="simpleTitle">{{ $resource['name_' . \App::getLocale()] }}</h1>

                                <p>{{ $resource['body_' . \App::getLocale()] }}</p>

                                <table id="w0" class="table detail-view projectTable">
                                    <tbody>
                                        <tr>

                                            <th>Veb-sayt</th>
                                            <td><a href="#" target="_blank">{{ $resource->url }}</a></td>
                                        </tr> <br>
                                        <tr>
                                            <th>@lang('words.additionalInfo')</th>
                                            <th>{{ $resource['info_' . \App::getLocale()] }}</th>
                                        </tr>
                                       

                                    </tbody>
                                </table>
                            </div>
                        </div>


                        <div class="projectImages">
                        </div>


                    </div>
                </div>
            </div>
        </section>
    </main>
    <!-- Main section End -->
@endsection
