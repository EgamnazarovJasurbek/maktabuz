@extends('layouts.site')
@section('content')
    <!-- Big logo start -->
    @foreach ($schoolName as $name)
        <div class="bigBannerContent" style="background-image: url('/schoolName/images/{{ $name->image }}');">
            <div class="bannerContent">
                <div class="container-fluid">
                    <div class="row">
                        <div class="logoTextBox">
                            <div class="col-12"></div>
                            <h1 class="logoTextBox__title text-center">
                                <b>{{ $name->name_uz }}</b> <br>
                                {{ $name->city_uz }}
                            </h1>
                            <div class="quote text-center">
                                <p class="">"@lang('words.PrezidentText')"</p>
                                <span class="">@lang('words.Prezident')</span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    @endforeach
    </div>
    <!-- Big Logo end -->
    </div>
    </header>
    <!-- Header End -->


    <!-- Main Section Start -->
    <main>
        <section>
            <div class="container">
                <!-- Service List Start  -->
                <div class="mainServicesList">
                    <a href="#">
                        <div class="icon">
                            <img alt="icon" src="allStyle/image/oquvchi.png" width="45%" style="margin-left: 60px;">
                        </div>
                        <h1>@lang('words.forPeoples')</h1>
                        <div class="description">
                            <p>@lang('words.1jadval')</p>
                            <p>@lang('words.2jadval')</p>
                            <p>@lang('words.4jadval')</p>
                            <p>@lang('words.8jadval')</p>
                        </div>

                        <button type="button">@lang('words.more')</button>
                    </a>
                    <a href="#">
                        <div class="icon">
                            <img alt="icon" src="allStyle/image/Ota-ona.png" width="45%" style="margin-left: 75px;">
                        </div>
                        <h1>@lang('words.forParents')</h1>
                        <div class="description">

                        </div>

                        <button type="button">@lang('words.more')</button>
                    </a>
                    <a href="#">
                        <div class="icon">
                            <img alt="icon" src="allStyle/image/oqtuvchi.png" width="45%" style="margin-left: 80px;">
                        </div>
                        <h1>@lang('words.forTeachers')</h1>
                        <div class="description">

                        </div>

                        <button type="button">@lang('words.more')</button>
                    </a>
                </div>
                <!-- Service List End -->


                <!-- School Info Start  -->
                <div class="row">
                    <h1 class="text-center text-uppercase mt-5 title">@lang('words.qisqachaMaktabHaqida')</h1>
                    @foreach ($sliders as $slider)
                        <div class="col-lg-3 col-md-6">
                            <div class="school_info" data-tilt data-tilt-scale="1.1">
                                <h2>{{ $slider->number }}</h2>
                                <p>{{ $slider->title_uz }}</p>
                            </div>
                        </div>
                    @endforeach

                </div>
                <!-- School Info End -->


                <hr class="sections__line">
                <!-- Online School Come Start -->
                <div class="onlineSchool">
                    <div class="row">
                        <div class="col-lg-6 col-md-12 text-md-center d-md-inline-block d-flex align-items-center wow fadeInLeft"
                            data-wow-duration=".9s" data-wow-delay=".6s">
                            <div class="onlineSchool__info ">
                                <h1>@lang('words.onlineSchoolText')
                                </h1>
                                <p>@lang('words.onlineSchoolParagraph')</p>
                                <button class="btns" type="button">@lang('words.more')</button>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 wow fadeInRight" data-wow-duration=".9s" data-wow-delay=".6s">
                            <div class="onlineSchool__img">
                                <img src="allStyle/image/onlineSchool2.png" width="75%" alt="OnlineSchool">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Online School Come End -->

                <hr class="sections__line">

                <!-- Section News Start -->
                <div class="news">
                    <div class="row mb-4">
                        @foreach ($news as $new)
                            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-duration=".9s" data-wow-delay=".6s">
                                <a href="{{ route('newsDetail') }}">
                                    <div class="imageBox">
                                        <img alt="image" src="news/images/{{ $new->image }}" width="170px">
                                    </div>
                                    <h1>{{ $new->title_1_uz }}</h1>
                                    <span>{{ $new->created_at->format(' d.M.Y') }}</span>
                                </a>
                            </div>
                        @endforeach
                    </div>

                </div>
                <!-- Section News End -->

                <hr class="sections__line mt-0">

                <!--Map Section Start  -->
                <div class="mapArea">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 mt-4">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d6131044.44664104!2d64.608575!3d41.381166!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38b20750bb92946b%3A0x54012c9057e544c8!2s11-%20umumiy%20o%CA%BBrta%20ta%CA%BClim%20maktabi!5e0!3m2!1sru!2s!4v1694608189347!5m2!1sru!2s"
                                width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
                <!--Map Section End  -->

                <hr class="sections__line mt-5">

                <!-- Contact Section Start -->
                <div class="contact">
                    <h1 class="text-center text-uppercase mb-5 title title_map">@lang('words.contactUs')</h1>
                    @if (session('success'))
                        <div class="alert alert-success text-center">
                            {{ session('success') }}
                        </div>
                    @endif
                    <div class="row">
                        <div class="col-lg-7 col-md-12">
                            <form action="{{ route('admin.contact.store') }}" method="POST">
                                @csrf
                                <div class="row contact_row1 text-sm-center">
                                    <div class="col-lg-6 col-md-12 ">
                                        <input type="text" placeholder="@lang('words.IFSH')" name="name" required>
                                    </div>
                                    <div class="col-lg-6 col-md-12 ">
                                        <input type="email" placeholder="@lang('words.ePochta')" name="email" required>
                                    </div>
                                </div>
                                <div class="row contact_row2 text-sm-center">
                                    <div class="col-lg-6 col-md-12">
                                        <input type="text" value="+998" placeholder="Telefon" name="phone"
                                            required>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <input type="text" placeholder="@lang('words.subject')" name="mavzu" required>
                                    </div>
                                </div>
                                <div class="row contact_row3">
                                    <div class="col-12">
                                        <input type="text" placeholder="@lang('words.message')" name="message" required>
                                        <button type="submit" class="contact_btn text-center">@lang('words.send')</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-lg-5 col-md-12">
                            <h2 class="mb-3 contact__title">329-sonli umumta’lim maktabi</h2>

                            <table id="w9" class="table table-striped table-bordered detail-view">
                                @foreach ($connections as $connection)
                                    <tbody>
                                        <tr>
                                            <th>Mudir:</th>
                                            <td>{{ $connection->name }}</td>
                                        </tr>
                                        <tr>
                                            <th>Telefon:</th>
                                            <td>{{ $connection->phone }}</td>
                                        </tr>
                                        <tr>
                                            <th>Faks:</th>
                                            <td>{{ $connection->faks }}</td>
                                        </tr>
                                        <tr>
                                            <th>Instagram:</th>
                                            <td>{{ $connection->instagram }}</td>
                                        </tr>
                                        <tr>
                                            <th>Telegram:</th>
                                            <td>{{ $connection->telegram }}</td>
                                        </tr>
                                    </tbody>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
                <!-- Contact Section End -->

                <hr class="sections__line mt-5">

                <!-- Useful Links Start -->
                <div class="usefulLinks">
                    <div class="container">
                        <h1 class="mb-5">@lang('words.usefulLinks')</h1>
                        <div class="slider">
                            <a href="">
                                <div class="slider_content">
                                    <img src="allStyle/image/gerb_slider.jpg" width="10%" alt="Image 1">
                                    <h1>O'zbekiston respulikasi davlat maktabi 1</h1>
                                </div>
                            </a>
                            <a href="">
                                <div class="slider_content">
                                    <img src="allStyle/image/Oliy majlis.jpg" width="10%" alt="Image 1">
                                    <h1>O'zbekiston Respublikasi hukumat portali</h1>
                                </div>
                            </a>
                            <a href="">
                                <div class="slider_content">
                                    <img src="allStyle/image/mygovUz.jpg" width="10%" alt="Image 1">
                                    <h1>Yagona interaktiv davlat xizmatlari</h1>
                                </div>
                            </a>
                            <a href="">
                                <div class="slider_content">
                                    <img src="allStyle/image/gerb_slider.jpg" width="10%" alt="Image 1">
                                    <h1>O'zbekiston respulikasi davlat maktabi 1</h1>
                                </div>
                            </a>
                            <a href="">
                                <div class="slider_content">
                                    <img src="allStyle/image/gerb_slider.jpg" width="10%" alt="Image 1">
                                    <h1>O'zbekiston respulikasi davlat maktabi 1</h1>
                                </div>
                            </a>
                            <a href="">
                                <div class="slider_content">
                                    <img src="allStyle/image/gerb_slider.jpg" width="10%" alt="Image 1">
                                    <h1>O'zbekiston respulikasi Prezidentining virtual portali</h1>
                                </div>
                            </a>
                            <a href="">
                                <div class="slider_content">
                                    <img src="allStyle/image/mygovUz.jpg" width="10%" alt="Image 1">
                                    <h1>Respulika Bolalar kutubxonasi</h1>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Useful Links End -->

            </div>
        </section>
    </main>
    <!-- Main Section End -->
@endsection
