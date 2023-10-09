@extends('layouts.site')
<style>
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

    @media (max-width:375px) {
        .tasksListWithTicks {
            grid-template-columns: none;
        }

        .ourMissionBig .content {
            width: 0;
        }

        .greenTitle {
            font-size: 40px;
        }

        .content p {
            display: none;
        }

        .ourMissionBig {
            background-position: center;
        }
    }
</style>
@section('content')
    
            <!-- Image Header Start-->
            <div class="mainContent withImage">
                <div class="imageHeader" style="padding-bottom: 0px;">
                    <div class="container">
                        <h1 class="pageTitle text-dark">@lang('words.maktabVazifalar')</h1>
                        <nav aria-label="breadcrumb">
                            <ol id="w5" class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('index') }}">@lang('words.asosiy')</a></li>
                                <li class="breadcrumb-item " aria-current="page">@lang('words.maktabVazifalar')</li>
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
            <div class="container">
                <div class="mainQuoteBox">
                    <div></div>
                    <div class="quoteBox">
                        <p>"@lang('words.PrezidentText')"</p>
                        <span>@lang('words.Prezident')</span>
                    </div>
                </div>
            </div>

            <div class="ourMissionBig">
                <div class="container">
                    <div class="content">
                        <h1 class="greenTitle">@lang('words.bizniVazifa')</h1>
                        <p>@lang('words.bizniVazifa2')</p>
                    </div>
                </div>
            </div>

            <div class="container">
                <h1 class="greenTitle center">@lang('words.funksiyaVazifa')</h1>
                <p class="text-center">@lang('words.xalqTalimi'):</p>

                <ul class="tasksListWithTicks">
                    @foreach ($tasks as $task)
                    <li>{{ $task['body_' . \App::getLocale()] }}</li>
                    @endforeach
                </ul>
            </div>
        </section>
    </main>
    <!-- Main section End -->

   
@endsection



