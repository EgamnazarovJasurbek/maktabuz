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
                <h1 class="pageTitle text-dark">Foydali resurslar</h1>
                <nav aria-label="breadcrumb">
                    <ol id="w5" class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Asosiy</a></li>
                        <li class="breadcrumb-item " aria-current="page">Foydali resurslar</li>
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
                            <img alt="logo" src="allStyle/image/Useful-links-Detail.jpg">

                            <div class="description">
                                <h1 class="simpleTitle">Attestat.uzedu.uz</h1>

                                <p>Elektron shahodatnoma platformasi. Xalq ta’limi tizimidagi maktab bitiruvchilari
                                    to‘g‘risidagi ma’lumotlarni avtomatlashtirish maqsadida “Attestat”
                                    avtomatlashtirilgan axborot tizimi ishga tushirildi. Bugungi kunda jismoniy
                                    shaxsning shaxsiy identifikasiya raqami (JSHSHIR) bilan bog‘langan holda 1,7 mln.
                                    bitiruvchilarning shahodatnomalari raqamlashtirilgan.</p>

                                <table id="w0" class="table detail-view projectTable">
                                    <tbody>
                                        <tr>
                                            <th>Veb-sayt</th>
                                            <td><a href="https://attestat.uzedu.uz/"
                                                    target="_blank">https://attestat.uzedu.uz/</a></td>
                                        </tr>
                                        <tr>
                                            <th>Qo'shimcha ma'lumot</th>
                                            <td></td>
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
