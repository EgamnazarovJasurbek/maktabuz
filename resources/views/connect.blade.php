@extends('layouts.site')
@section('content')
    <!-- Image Header Start-->
    <div class="mainContent withImage">
        <div class="imageHeader" style="padding-bottom: 0px;">
            <div class="container">
                <h1 class="pageTitle text-dark">@lang('words.connect')</h1>
                <nav aria-label="breadcrumb">
                    <ol id="w5" class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('index') }}">@lang('words.asosiy')</a></li>
                        <li class="breadcrumb-item " aria-current="page">@lang('words.connect')</li>
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
            <div class="connect">
                <div class="container">
                    <!--Map Section Start  -->
                    <div class="mapArea">
                        <div class="row">
                            <div class="col-12 mt-4">
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
                                            <button type="submit"
                                                class="contact_btn text-center">@lang('words.send')</button>
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
                </div>
            </div>
        </section>
    </main>
    <!-- Main section End -->
@endsection
