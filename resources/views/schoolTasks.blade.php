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
                        <h1 class="pageTitle text-dark">Maktab vazifalari</h1>
                        <nav aria-label="breadcrumb">
                            <ol id="w5" class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Asosiy</a></li>
                                <li class="breadcrumb-item " aria-current="page">Maktab vazifalari</li>
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
                        <p>"Yangi O‘zbekiston – maktab ostonasidan boshlanadi"</p>
                        <span>Shavkat Mirziyoyev</span>
                    </div>
                </div>
            </div>

            <div class="ourMissionBig">
                <div class="container">
                    <div class="content">
                        <h1 class="greenTitle">Bizning vazifamiz</h1>
                        <p>Umumiy o'rta va maktabdan tashqari ta'lim sohasida davlat siyosatini ishlab chiqish va amalga
                            oshirish.</p>
                    </div>
                </div>
            </div>

            <div class="container">
                <h1 class="greenTitle center">Funksiya va vazifalar</h1>
                <p class="text-center">O'zbekiston Respublikasi Xalq ta'limi<br>vazirligining asosiy vazifalari va
                    faoliyat yo'nalishlari (VMQ №146):</p>

                <ul class="tasksListWithTicks">
                    <li>umumiy o'rta va maktabdan tashqari ta'lim sohasida yagona davlat siyosatini ishlab chiqish va
                        amalga oshirish, o'quvchilarning ma'naviy, axloqiy, intellektual va jismoniy rivojlanish
                        darajasini yanada oshirish;</li>
                    <li>umumiy o'rta ta'limning davlat ta'lim standartlari va maktabdan tashqari ta'limga qo'yiladigan
                        davlat talablariga muvofiq umumiy ta'lim muassasalari faoliyatini uslubiy boshqarishni amalga
                        oshirish;</li>
                    <li>o'qituvchi kasbining maqomi va obro'sini oshirish, ta'lim muassasalari xodimlarini, shuningdek,
                        xalq ta'limi tizimi xodimlarini moddiy va ijtimoiy qo'llab -quvvatlash, ularning samarali
                        ishlashi uchun munosib sharoitlar yaratish;</li>
                    <li>umumiy o'rta va maktabdan tashqari ta'lim sohasida yagona davlat siyosatini ishlab chiqish va
                        amalga oshirish, o'quvchilarning ma'naviy, axloqiy, intellektual va jismoniy rivojlanish
                        darajasini yanada oshirish;</li>
                    <li>ta'lim muassasalarida chet tillarini o'qitish samaradorligini ta'minlashga qaratilgan kompleks
                        chora -tadbirlarni amalga oshirish;</li>
                    <li>o'quv jarayoniga o'quvchilarning ta'limiy, psixologik va jismoniy stressini optimallashtirishni
                        hisobga olgan holda, ta'limning innovatsion shakllarini, zamonaviy pedagogik va axborot
                        texnologiyalarini, kasbiy yo'naltirish, o'qitish va o'qitishning samarali usullarini joriy
                        etish;</li>
                </ul>
            </div>
        </section>
    </main>
    <!-- Main section End -->

   
@endsection



