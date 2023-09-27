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
                <h1 class="pageTitle text-dark">@lang('words.teachers')</h1>
                <nav aria-label="breadcrumb">
                    <ol id="w5" class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('index') }}">@lang('words.asosiy')</a></li>
                        <li class="breadcrumb-item " aria-current="page">@lang('words.teachers')</li>
                    </ol>
                </nav>
            </div>

            </header>
            <!-- Header End -->


            <!-- Main section Start -->
            <main>
                <section>
                    <div class="teachers">
                        <!-- oliy toifali oqtuvchilar -->
                        <div class="container deputy_director">
                            <h1 class="teachers__title mini mb-4">@lang('words.oliyMalumHodim')</h1>
                            <div class="row">
                                @foreach ($oliyToifa as $oliyT)
                                    <div class="col-lg-4 col-md-3 col-sm-6">
                                        <a href="{{ route('teacherDetail', $oliyT->id) }}" class="deputy_director-main">
                                            <img src="/teachers/images/{{ $oliyT->image }}" width="90%" height="500px"
                                                alt="Zam Director">
                                            <div class="deputy_director-details">
                                                <h1>{{ $oliyT->name_uz }}</h1>
                                                <span>{{ $oliyT->specialist_uz }}</span>
                                            </div>
                                        </a>

                                    </div>
                                @endforeach
                            </div>
                        </div>
                        </a>
                    </div>

                    <!-- Birinchi toifali oqtuvchilar -->
                    <div class="container deputy_director">
                        <h1 class="teachers__title mini mb-4">@lang('words.birnchiMalumHodim')</h1>
                        <div class="row">
                            @foreach ($brnciToifa as $firstToifa)
                                <div class="col-lg-4 col-md-3 col-sm-6">
                                    <a href="{{ route('teacherDetail', $firstToifa->id) }}" class="deputy_director-main">
                                        <img src="/teachers/images/{{ $firstToifa->image }}" width="90%" height="500px"
                                            alt="Zam Director">
                                        <div class="deputy_director-details">
                                            <h1>{{ $firstToifa->name_uz }}</h1>
                                            <span>{{ $firstToifa->specialist_uz }}</span>
                                        </div>
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <!-- Ikkinchi toifali oqtuvchilar -->
                    <div class="container deputy_director">
                        <h1 class="teachers__title mini mb-4">@lang('words.ikinciToifaliHodim')</h1>
                        <div class="row">
                            @foreach ($ikinciToifa as $secondToifa)
                                <div class="col-lg-4 col-md-3 col-sm-6">
                                    <a href="{{ route('teacherDetail', $secondToifa->id) }}" class="deputy_director-main">
                                        <img src="/teachers/images/{{ $secondToifa->image }}" width="90%" height="500px"
                                            alt="Zam Director">
                                        <div class="deputy_director-details">
                                            <h1>{{ $secondToifa->name_uz }}</h1>
                                            <span>{{ $secondToifa->specialist_uz }}</span>
                                        </div>
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <!-- Mutaxasis toifali oqtuvchilar -->
                    <div class="container deputy_director">
                        <h1 class="teachers__title mini mb-4">@lang('words.mutaxasisToifaliHodim')</h1>
                        <div class="row">
                            @foreach ($mutaxasisToifa as $mutaxasisToifa)
                                <div class="col-lg-4 col-md-3 col-sm-6">
                                    <a href="{{ route('teacherDetail', $mutaxasisToifa->id) }}"
                                        class="deputy_director-main">
                                        <img src="/teachers/images/{{ $mutaxasisToifa->image }}" width="90%"
                                            height="500px" alt="Zam Director">
                                        <div class="deputy_director-details">
                                            <h1>{{ $mutaxasisToifa->name_uz }}</h1>
                                            <span>{{ $mutaxasisToifa->specialist_uz }}</span>
                                        </div>
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div>
        </div>
        </section>
        </main>
        <!-- Main section End -->
    @endsection
