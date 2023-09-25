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
                        <h1 class="teachers__title mini mb-4">Oliy toifali o'qituvchilar</h1>
                        <div class="row">
                            {{-- @foreach ($teachers as $teacher)
                            <div class="col-lg-4 col-md-3 col-sm-6">
                                <a href="#" class="deputy_director-main">
                                    <img src="teachers/images/{{ $teacher->image }}" width="90%" alt="Zam Director">
                                    <div class="deputy_director-details">
                                        <h1>{{ $teacher->name_uz }}</h1>
                                        <span>{{ $teacher->specialist_uz }}</span>
                                    </div>
                                </a>
                            </div>
                            @endforeach --}}
                          
                            {{-- <div class="col-lg-4 col-md-3 col-sm-6">
                                <a href="#" class="deputy_director-main">
                                    <img src="allStyle/image/Teachers.jpg" width="90%" alt="Zam Director">
                                    <div class="deputy_director-details">
                                        <h1><b>Rustamov</b><br>Rustam<br>Rustamovich</h1>
                                        <span>M'anaviyatchi</span>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-4 col-md-3 col-sm-6">
                                <a href="#" class="deputy_director-main">
                                    <img src="allStyle/image/Teachers.jpg" width="90%" alt="Zam Director">
                                    <div class="deputy_director-details">
                                        <h1><b>Rustamov</b><br>Rustam<br>Rustamovich</h1>
                                        <span>Bo'lim boshlig'i</span>
                                    </div>
                                </a>
                            </div> --}}
        </div>
    </div>
    <!-- Image Header End -->

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
                        <div class="col-lg-4 col-md-3 col-sm-6">
                            <a href="#" class="deputy_director-main">
                                <img src="allStyle/image/Teachers.jpg" width="90%" alt="Zam Director">
                                <div class="deputy_director-details">
                                    <h1><b>Rustamov</b><br>Rustam<br>Rustamovich</h1>
                                    <span>Zam direktor</span>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-4 col-md-3 col-sm-6">
                            <a href="#" class="deputy_director-main">
                                <img src="allStyle/image/Teachers.jpg" width="90%" alt="Zam Director">
                                <div class="deputy_director-details">
                                    <h1><b>Rustamov</b><br>Rustam<br>Rustamovich</h1>
                                    <span>M'anaviyatchi</span>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-4 col-md-3 col-sm-6">
                            <a href="#" class="deputy_director-main">
                                <img src="allStyle/image/Teachers.jpg" width="90%" alt="Zam Director">
                                <div class="deputy_director-details">
                                    <h1><b>Rustamov</b><br>Rustam<br>Rustamovich</h1>
                                    <span>Bo'lim boshlig'i</span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Birinchi toifali oqtuvchilar -->
                <div class="container deputy_director">
                    <h1 class="teachers__title mini mb-4">@lang('words.birnchiMalumHodim')</h1>
                    <div class="row">
                        <div class="col-lg-4 col-md-3 col-sm-6">
                            <a href="#" class="deputy_director-main">
                                <img src="allStyle/image/Teachers.jpg" width="90%" alt="Zam Director">
                                <div class="deputy_director-details">
                                    <h1><b>Rustamov</b><br>Rustam<br>Rustamovich</h1>
                                    <span>Zam direktor</span>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-4 col-md-3 col-sm-6">
                            <a href="#" class="deputy_director-main">
                                <img src="allStyle/image/Teachers.jpg" width="90%" alt="Zam Director">
                                <div class="deputy_director-details">
                                    <h1><b>Rustamov</b><br>Rustam<br>Rustamovich</h1>
                                    <span>M'anaviyatchi</span>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-4 col-md-3 col-sm-6">
                            <a href="#" class="deputy_director-main">
                                <img src="allStyle/image/Teachers.jpg" width="90%" alt="Zam Director">
                                <div class="deputy_director-details">
                                    <h1><b>Rustamov</b><br>Rustam<br>Rustamovich</h1>
                                    <span>Bo'lim boshlig'i</span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Ikkinchi toifali oqtuvchilar -->
                <div class="container deputy_director">
                    <h1 class="teachers__title mini mb-4">@lang('words.ikinciToifaliHodim')</h1>
                    <div class="row">
                        <div class="col-lg-4 col-md-3 col-sm-6">
                            <a href="#" class="deputy_director-main">
                                <img src="allStyle/image/Teachers.jpg" width="90%" alt="Zam Director">
                                <div class="deputy_director-details">
                                    <h1><b>Rustamov</b><br>Rustam<br>Rustamovich</h1>
                                    <span>Zam direktor</span>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-4 col-md-3 col-sm-6">
                            <a href="#" class="deputy_director-main">
                                <img src="allStyle/image/Teachers.jpg" width="90%" alt="Zam Director">
                                <div class="deputy_director-details">
                                    <h1><b>Rustamov</b><br>Rustam<br>Rustamovich</h1>
                                    <span>M'anaviyatchi</span>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-4 col-md-3 col-sm-6">
                            <a href="#" class="deputy_director-main">
                                <img src="allStyle/image/Teachers.jpg" width="90%" alt="Zam Director">
                                <div class="deputy_director-details">
                                    <h1><b>Rustamov</b><br>Rustam<br>Rustamovich</h1>
                                    <span>Bo'lim boshlig'i</span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Mutaxasis toifali oqtuvchilar -->
                <div class="container deputy_director">
                    <h1 class="teachers__title mini mb-4">@lang('words.mutaxasisToifaliHodim')</h1>
                    <div class="row">
                        <div class="col-lg-4 col-md-3 col-sm-6">
                            <a href="#" class="deputy_director-main">
                                <img src="allStyle/image/Teachers.jpg" width="90%" alt="Zam Director">
                                <div class="deputy_director-details">
                                    <h1><b>Rustamov</b><br>Rustam<br>Rustamovich</h1>
                                    <span>Zam direktor</span>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-4 col-md-3 col-sm-6">
                            <a href="#" class="deputy_director-main">
                                <img src="allStyle/image/Teachers.jpg" width="90%" alt="Zam Director">
                                <div class="deputy_director-details">
                                    <h1><b>Rustamov</b><br>Rustam<br>Rustamovich</h1>
                                    <span>M'anaviyatchi</span>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-4 col-md-3 col-sm-6">
                            <a href="#" class="deputy_director-main">
                                <img src="allStyle/image/Teachers.jpg" width="90%" alt="Zam Director">
                                <div class="deputy_director-details">
                                    <h1><b>Rustamov</b><br>Rustam<br>Rustamovich</h1>
                                    <span>Bo'lim boshlig'i</span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!-- Main section End -->
@endsection
