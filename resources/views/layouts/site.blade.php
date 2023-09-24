<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Basic -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>Asosiy</title>

    <!-- Bootstrap core css -->
    <link rel="stylesheet" href="{{ asset('allStyle/css/bootstrap.css') }}">

    <!-- Animate css -->
    <link rel="stylesheet" href="{{ asset('allStyle/css/animate.css') }}">
    <!-- Font awesome style -->
    <link rel="stylesheet" href="/allStyle/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css">


    <!-- Custom style for this template -->
    <link rel="stylesheet" href="{{ asset('allStyle/css/style.css') }}">
    <!-- Responsive Style -->
    <link rel="stylesheet" href="{{ asset('allStyle/css/style.css') }}">
</head>

<body>
    <!-- Header Start -->
    <header>
        <div class="bannerBox">
            <!-- Header Nav Start -->
            <div class="headerBar">
                <div class="topMainMenu">
                    <a href="{{ route('index') }}" class="topMain-logo">
                        <img src="/allStyle/image/Gerb.png" alt="" width="8%">
                        <p>329-sonli umumta'lim maktabi </p>
                    </a>
                    <ul>
                        <li>
                            <a href="https://vacancy.argos.uz/">Bosh ish orinlari</a>
                        </li>
                        <li>
                            <a href="{{ route('schoolRules') }}">Maktab qonun-qoidalar</a>
                        </li>
                        <li>
                            <a href="{{ route('faqs') }}">Tez-tez beriladigan savollar </a>
                        </li>
                        <li>
                            <a href="{{ route('stateSymbols') }}">Davlat ramzlari</a>
                        </li>
                    </ul>
                    <div class="additionalFuntions">
                        <a href="#" class="eye"><i class="fa-regular fa-eye text-white me-2"></i></a>
                        <a href="#" class="searchBtn text-white">|
                            <i class="fa-solid fa-magnifying-glass text-white mb-3 ms-2"></i>
                        </a>
                    </div>
                </div>
                <div class="container">
                    <div class="headerMenuBox">
                        <div class="bigMenuBtn">
                            <button type="button" class="borderedBtn">
                                <div class="menuBars"></div>
                            </button>
                            <!-- Click bolganda Brauzer Ong tomondan chiqadi -->
                            <div class="overlay">
                                <div class="container">
                                    <div class="topLogoGerb">
                                        <img src="/allStyle/image/Gerb.png" alt="Logo" width="13%">
                                    </div>
                                    <div class="listMenu">
                                        <ul>
                                            <li><a href="#">Maktab haqida</a>
                                                <ul>
                                                    <li><a href="{{ route('schoolTasks') }}">Maktab vazifalari</a></li>
                                                    <li><a href="{{ route('leaderShip') }}">Rahbariyat</a></li>
                                                    <li><a href="{{ route('teacher') }}">O'qituvchilar</a></li>
                                                    <li><a href="{{ route('rekvizit') }}">Rekvizitlar</a></li>
                                                </ul>
                                            <li><a href="{{ route('educations') }}">Ta'lim</a>
                                                <ul>
                                                    <li><a href="{{ route('educations') }}">1-smena</a></li>
                                                    <li><a href="{{ route('educations') }}">2-smena</a></li>
                                                    <li><a href="{{ route('educations') }}">Qo'shimcha darslar </a>
                                                    </li>
                                                    <li><a href="{{ route('educations') }}">Sport to'garaklar</a></li>
                                                </ul>
                                            <li class="overlay_li-social"><a href="{{ route('schoolNews') }}">Axborot
                                                    markazi</a>
                                                <ul>
                                                    <li><a href="{{ route('schoolNews') }}">Maktab yangiliklari</a>
                                                    </li>
                                                    <li><a href="{{ route('gallery') }}">Galeriya</a></li>
                                                    <li><a href="{{ route('infoGrafika') }}">Infografika</a></li>
                                                </ul>
                                        </ul>
                                        <ul class="simple">
                                            <li><a href="{{ route('usefulResurs') }}">Foydali resurslar</a></li>
                                            <li><a href="{{ route('connections') }}">Bogʻlanish</a></li>
                                        </ul>
                                    </div>
                                    <div class="topMainMenu2">
                                        <ul>
                                            <li><a href="https://vacancy.argos.uz/">Bo'sh ish o‘rinlari</a></li>
                                            <li><a href="{{ route('schoolRules') }}">Maktab qonun-qoidalari</a></li>
                                            <li><a href="{{ route('faqs') }}">Tez-tez beriladigan savollar</a></li>
                                            <li><a href="{{ route('stateSymbols') }}">Davlat ramzlari</a></li>
                                        </ul>
                                    </div>
                                </div>

                            </div>
                            <!-- Click bolganda Brauzer Ong tomondan chiqadi -->
                        </div>
                        <div class="mainMenuBox">
                            <div class="menuList">

                                <!--  -->
                                <div class="menuLine"></div>
                                <!--  -->
                                <div class="bottomMainMenu">
                                    <ul class="menu">
                                        <li>
                                            <a href="" class="">@lang('words.maktabHaqida')</a>
                                            <ul class="menu_ul-li">
                                                <li>
                                                    <a href="{{ route('schoolTasks') }}">Maktab vazifalari</a>
                                                </li>
                                                <hr>
                                                <li>
                                                    <a href="{{ route('leaderShip') }}">Rahbariyat</a>
                                                </li>
                                                <hr>
                                                <li>
                                                    <a href="{{ route('teacher') }}">O'qituvchilar</a>
                                                </li>
                                                <hr>
                                                <li>
                                                    <a href="{{ route('rekvizit') }}">Rekvizitlar</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="{{ route('educations') }}">Ta'lim </a>
                                            <ul class="menu_ul-li">
                                                <li>
                                                    <a href="{{ route('educations') }}">1-smena</a>
                                                </li>
                                                <hr>
                                                <li>
                                                    <a href="{{ route('educations') }}">2-smena</a>
                                                </li>
                                                <hr>
                                                <li>
                                                    <a href="{{ route('educations') }}">Qo'shimcha darslar</a>
                                                </li>
                                                <hr>
                                                <li>
                                                    <a href="{{ route('educations') }}">Sport to'garaklari</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="{{ route('usefulResurs') }}">Foydali resurslar </a>
                                        </li>
                                        <li>
                                            <a href="{{ route('schoolNews') }}">Axborot markazi </a>
                                            <ul class="menu_ul-li">
                                                <li>
                                                    <a href="{{ route('schoolNews') }}">Maktab yangiliklari</a>
                                                </li>
                                                <hr>
                                                <li>
                                                    <a href="{{ route('gallery') }}">Galeriya</a>
                                                </li>
                                                <hr>
                                                <li>
                                                    <a href="{{ route('infoGrafika') }}">Infografika</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="{{ route('connections') }}">Boglanish </a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- Search Start-->
                                <form id="w2" class="mainSearchForm" action="{{ route('search') }}"
                                    method="get">
                                    <div class="input-group">
                                        <input type="text" id="mainSearch" class="form-control"
                                            placeholder="Izlash" name="ContentSearch">

                                        <div class="input-group-prepend">
                                            <button class="btn __searchBtn closeBtn" type="button">
                                                <i class="fas fa-times"></i>
                                            </button>
                                        </div>
                                    </div>

                                </form>
                                <!-- Search End-->


                                <div class="dropdown langBar">
                                    <button class="borderedBtn" type="button" data-toggle="dropdown">{{ \App::getLocale() }}</button>
                                    <div id="" class="dropdown-menu-right dropdown-menu">
                                        <li><a class="active" href="/lang/uz">O'zbekcha</a></li>
                                        <li><a class="" href="/lang/Ўз">Ўзбекча</a></li>
                                        <li><a class="" href="/lang/ru">Русский</a></li>    
                                        <li><a class="" href="/lang/en">English</a></li>
                                        
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Header Nav End -->
            @yield('content')

            <!-- Footer Start  -->
            <footer>
                <div class="footer">
                    <div class="container">
                        <div class="row">
                            <ul class="footer_menu">
                                <li>
                                    <a href="https://vacancy.argos.uz/">Bo'sh ish o'rinlari</a>
                                </li>
                                <li>
                                    <a href="{{ route('schoolRules') }}">Maktab qonun qoidalari</a>
                                </li>
                                <li>
                                    <a href="{{ route('faqs') }}">Tez-tez beriladigan savollar</a>
                                </li>
                                <li>
                                    <a href="{{ route('stateSymbols') }}">Davlat ramzlari</a>
                                </li>
                            </ul>
                        </div>
                        <div class="footer_contact-left">
                            <a href="#">
                                <i class="fab fa-instagram"></i>
                                <span>@329_maktab</span>
                            </a>
                            <a href="#">
                                <i class="fas fa-envelope"></i>
                                <span>info@maktab.uz</span>
                            </a>
                        </div>
                        <div class="footer_contact-right">
                            <a href="#">
                                <i class="fab fa-facebook-f"></i>
                                <span>@329_maktab</span>
                            </a>
                            <a href="#">
                                <i class="fab fa-telegram-plane"></i>
                                <span>@239_maktab</span>
                            </a>
                        </div>
                        <div class="footer_logo">
                            <span>
                                <img src="/allStyle/image/Gerb.png" alt="Logo" width="20%">
                            </span>
                            <a href="">
                                329-sonli Umumta'lim maktabi
                                <i>Toshkent, Yangihayot tumani</i>
                            </a>
                        </div>


                        <a href="#" class="it_live-logo">
                            <img src="/allStyle/image/It live logo for red-04-04.png" alt="IT_Live"
                                class="it_live-img">
                        </a>
                        <span class="year_text">
                            © 2020-2023 Barcha huquqlar himoyalangan
                        </span>
                    </div>
                </div>
            </footer>
            <!-- Footer End -->

</body>

<!-- Js -->
<script src="/allStyle/js/bootstrap.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
<script src="/allStyle/js/tilt.jquery.js"></script>
<script src="/allStyle/js/wow.min.js"></script>

<!-- Js -->





<script>
    // Wow Js
    new WOW().init();

    $(document).ready(function() {
        $(".searchBtn").click(function(e) {
            e.preventDefault();
            $(".mainSearchForm").toggleClass("active");
        });
        // Slider useful Link
        $('.slider').slick({
            infinite: true,
            slidesToShow: 5,
            slidesToScroll: 4,
            dots: true,
            autoplay: true,
        });
        // Slider btns
        var prevButton = document.querySelector('.slick-prev');
        var nextButton = document.querySelector('.slick-next');

        prevButton.addEventListener('click', function() {
            prevButton.style.backgroundColor = '#2a3fcc'; // Fon rangini qizil qilish
        });

        nextButton.addEventListener('click', function() {
            nextButton.style.backgroundColor = '#2a3fcc'; // Fon rangini qizil qilish
        });


        // Search Bnts open close
        $(".closeBtn").click(function(e) {
            e.preventDefault();
            $(".mainSearchForm").removeClass("active");
        });

        // Sahifa yuklanda matnni olish
        window.addEventListener("load", function() {
            // Local Storage yoki cookie dan matnni olish
            var savedText = localStorage.getItem(
                "searchText"); // yoki cookie dan olish uchun kerakli kod

            // Matnni inputga qo'yish
            if (savedText) {
                document.getElementById("mainSearch").value = savedText;
            }
        });
        // Search End






        // Js tilt
        $('.js-tilt').tilt({
            scale: 1.2
        })

    });

    // Menu 3 lines Overlay add Active
    const bigMenuBtn = document.querySelector('.bigMenuBtn');
    const overlay = document.querySelector('.overlay');

    bigMenuBtn.addEventListener('click', function() {
        this.classList.toggle('active');
        overlay.classList.toggle('active');
        document.body.classList.toggle('no-scroll');
    });


    // Dropdown Language
    document.addEventListener("DOMContentLoaded", function() {
        const dropdownButton = document.querySelector(".dropdown .borderedBtn");
        const dropdownMenu = document.querySelector(".dropdown-menu-right");
        const dropdownItems = document.querySelectorAll(".dropdown-item");

        // Add click event listener to the dropdown button
        dropdownButton.addEventListener("click", function() {
            // Toggle the dropdown menu
            dropdownMenu.classList.toggle("show");
        });

        // Add click event listeners to the dropdown items
        dropdownItems.forEach(function(item) {
            item.addEventListener("click", function(event) {
                // Prevent the default link behavior
                event.preventDefault();

                // Remove the "active" class from all dropdown items
                dropdownItems.forEach(function(item) {
                    item.classList.remove("active");
                });

                // Add the "active" class to the clicked item
                this.classList.add("active");

                // Get the href attribute of the clicked item
                const href = this.getAttribute("href");

                // Extract the first two characters from the href as the language code
                const languageCode = href.slice(1, 3); // Extract characters at index 1 and 2

                // Update the dropdown button text with the selected language code
                dropdownButton.textContent = languageCode;

                // Close the dropdown menu
                dropdownMenu.classList.remove("show");
            });
        });
    });
</script>

</html>
