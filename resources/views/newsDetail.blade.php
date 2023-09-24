@extends('layouts.site')

<style>
    @media (max-width:412px) {
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

        .navigationTabs {
            grid-template-columns: unset;
            margin: 0;
        }

        .navigationTabs a {
            margin: 20px 0;
        }

    }
</style>


@section('content')
    <!-- Image Header Start-->
    <div class="mainContent withImage">
        <div class="imageHeader" style="padding-bottom: 0px;">
            <div class="container">
                <h1 class="pageTitle text-dark">@lang('words.news') @lang('words.more')</h1>
                <nav aria-label="breadcrumb">
                    <ol id="w5" class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('index') }}">@lang('words.asosiy')</a></li>
                        <li class="breadcrumb-item " aria-current="page">@lang('words.news') @lang('words.more')</li>
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
            <div class="news__detail">
                <div class="container">
                    <div class="headerArea">
                        <div class="row">
                            <div class="col-lg-6 col-md-12 col-sm-12">
                                <div class="titleBox">
                                    <h1>Pensiya yoshida bo‘lgan pedagog kadrlarning mavjud malaka toifalari saqlanib
                                        qolinishi va unga mos ravishda oylik maoshlari to‘lanishi yuzasidan rasmiy
                                        ma’lumot</h1>
                                    <span>12 Февраль 2021</span>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-12">
                                <div class="titleBox_img">
                                    <img alt="image" src="allStyle/image/329-maktab.jpg" width="70%">
                                </div>
                            </div>
                        </div>



                    </div>
                    <div class="news__detail-text">
                        <div class="row">
                            <div class="col-12 text-justify fw-medium">
                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolores velit nisi aperiam.
                                    Amet tempore voluptatum culpa necessitatibus dignissimos unde labore voluptatem illo
                                    quos sunt, voluptas placeat dolorum nulla. Facilis alias obcaecati, laboriosam autem
                                    eos porro aspernatur minima inventore quis deserunt iure neque omnis nihil.
                                    Provident delectus repellendus consectetur. Consectetur, deleniti dolores culpa
                                    voluptatibus maiores, quas, pariatur veniam tenetur totam obcaecati ab at?
                                    Doloremque praesentium rem maiores eveniet quis quia eum obcaecati! Ullam et
                                    officiis nobis ipsam voluptates vel, magnam dicta dolor maiores mollitia saepe,
                                    pariatur, nesciunt ducimus numquam recusandae omnis perferendis autem veritatis
                                    laboriosam? Tempora at totam nihil distinctio sint. Lorem ipsum dolor sit, amet
                                    consectetur adipisicing elit. Laboriosam, repudiandae nostrum. Explicabo minima
                                    similique commodi id ipsa quod natus laboriosam quas non facilis eos perspiciatis
                                    soluta, deleniti nihil saepe quis.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!-- Main section End -->
@endsection
