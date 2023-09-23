@extends('layouts.site')
<style>
    @media (max-width:412px) {
        .topMain-logo {
            position: absolute;
            top: 17%;
            right: 35%;
            color: black;
        }

        .additionalFuntions {
            position: absolute;
            top: 24%;
            right: 3%;
        }
        .infografika_content{
            grid-template-columns: none;
        }
    }
</style>

@section('content')
<div class="mainContent withImage">
    <div class="imageHeader" style="padding-bottom: 0px;">
        <div class="container">
            <h1 class="pageTitle text-dark">Infografika</h1>
            <nav aria-label="breadcrumb">
                <ol id="w5" class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Asosiy</a></li>
                    <li class="breadcrumb-item " aria-current="page">Infografika</li>
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
<div class="infografika">
    <div class="container">
        <div class="infografika_content">
            <div class="item">
                <a href="#">
                    <div class="imageBox">
                        <img src="allstyle/image/InfoGrafika-1.jpg">
                    </div>
                    <div class="descriptionBox">
                        <h1>Axborot tizimlari va elektron resurslar</h1>
                        <span>30 Mart 2022</span>
                    </div>
                </a>
            </div>
            <div class="item">
                <a href="#">
                    <div class="imageBox">
                        <img src="allstyle/image/InfoGrafika-2.jpg">
                    </div>
                    <div class="descriptionBox">
                        <h1>Axborot tizimlari va elektron resurslar</h1>
                        <span>30 Mart 2022</span>
                    </div>
                </a>
            </div>
            <div class="item">
                <a href="#">
                    <div class="imageBox">
                        <img src="allstyle/image/InfoGrafika-3.jpg">
                    </div>
                    <div class="descriptionBox">
                        <h1>Axborot tizimlari va elektron resurslar</h1>
                        <span>30 Mart 2022</span>
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