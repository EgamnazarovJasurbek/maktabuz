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
    }
</style>
@section('content')
          <!-- Image Header Start-->
          <div class="mainContent withImage">
            <div class="imageHeader" style="padding-bottom: 0px;">
                <div class="container">
                    <h1 class="pageTitle text-dark">Maktab Galereyasi</h1>
                    <nav aria-label="breadcrumb">
                        <ol id="w5" class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Asosiy</a></li>
                            <li class="breadcrumb-item " aria-current="page">Maktab Galereyasi</li>
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
        <div class="schoolGallery">
            <div class="container">
                <h1 class="gallery_title">Maktab Galereyasi</h1>
                <div class="row">
                    <div class="col-12 mb-2">
                        <img src="allStyle/image/329-maktab.jpg" alt="Img" width="100%" height="90%">
                    </div>
                    <div class="col-12 mb-2">
                        <img src="allStyle/image/ImgChidlrens.jpg" alt="Img" width="100%" height="90%">
                    </div>
                    <div class="col-12 mb-2">
                        <img src="allStyle/image/img_zoom.jpg" alt="Img" width="100%" height="90%">
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<!-- Main section End -->

@endsection