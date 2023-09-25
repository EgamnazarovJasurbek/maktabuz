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
</style>



@section('content')
    <!-- Image Header Start-->
    <div class="mainContent withImage">
        <div class="imageHeader" style="padding-bottom: 0px;">
            <div class="container">
                <h1 class="pageTitle text-dark">@lang('words.rekvizit')</h1>
                <nav aria-label="breadcrumb">
                    <ol id="w5" class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('index') }}">@lang('words.asosiy')</a></li>
                        <li class="breadcrumb-item " aria-current="page">@lang('words.rekvizit')</li>
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
                @foreach ($requisites as $requisite)
                    <div class="page_content mb-5 mt-5"><b></b>
                        <p></p>
                        <p><strong>{{ $requisite->title_uz }}</strong></p>

                        <p>Qabul qiluvchi: {{ $requisite->recipient_uz }}</p>
                        <p>@lang('words.qabulQiluvci'): mintaqalararo operatsion UFK (O'zbekiston Respublikasi&nbsp; Xalq ta'limi
                            vazirligi)</p>

                        <p>INN: {{ $requisite->tin }}</p>

                        <p>KPP: {{ $requisite->checkpoint }}</p>

                        <p>Bank nomi: {{ $requisite->bank_name_uz }}</p>
                        <p>@lang('words.bankName'): Aloqabank, Toshkent</p>

                        <p>BIK: {{ $requisite->bic }}</p>

                        <p>Hisob: {{ $requisite->account }}</p>
                    </div>
                @endforeach

            </div>
        </section>
    </main>
    <!-- Main section End -->
@endsection
