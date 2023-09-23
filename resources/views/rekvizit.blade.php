@extends('layouts.site')

<style>
    @media (max-width:412px) {
        .topMain-logo {
            position: absolute;
            top: 14%;
            right: 35%;
            color: black;
        }

        .additionalFuntions {
            position: absolute;
            top: 24%;
            right: 3%;
        }
    }
</style>



@section('content')
    <!-- Image Header Start-->
    <div class="mainContent withImage">
        <div class="imageHeader" style="padding-bottom: 0px;">
            <div class="container">
                <h1 class="pageTitle text-dark">Rekvizitlar</h1>
                <nav aria-label="breadcrumb">
                    <ol id="w5" class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Asosiy</a></li>
                        <li class="breadcrumb-item " aria-current="page">Rekvizitlar</li>
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
                <div class="page_content mb-5 mt-5"><b></b>
                    <p></p>
                    <p><strong>Federal byudjet daromadiga mablag' o'tkazish uchun Bosh daromad ma'muri sifatida
                            Vazirlikning rekvizitlari:</strong></p>

                    <p>Qabul qiluvchi: mintaqalararo operatsion UFK (O'zbekiston Respublikasi&nbsp; Xalq ta'limi
                        vazirligi)</p>

                    <p>INN: 9710062939</p>

                    <p>KPP: 771001001</p>

                    <p>Bank nomi: Aloqabank, Toshkent</p>

                    <p>BIK: 24501901</p>

                    <p>Hisob 3100643000000019500</p>
                    <p></p>
                </div>
            </div>
        </section>
    </main>
    <!-- Main section End -->
@endsection
