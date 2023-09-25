@extends('layouts.site')
<style>
    @media (max-width:412px) {
        .topMain-logo {
            position: absolute;
            top: 17% !important;
            right: 35%;
            color: black;
        }

        .additionalFuntions {
            position: absolute;
            top: 24% !important;
            right: 3%;
        }

        .infografika_content {
            grid-template-columns: none;
        }
    }
</style>

@section('content')
    <div class="mainContent withImage">
        <div class="imageHeader" style="padding-bottom: 0px;">
            <div class="container">
                <h1 class="pageTitle text-dark">@lang('words.infoGraph')</h1>
                <nav aria-label="breadcrumb">
                    <ol id="w5" class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('index') }}">@lang('words.asosiy')</a></li>
                        <li class="breadcrumb-item " aria-current="page">@lang('words.infoGraph')</li>
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
                                    <img src="allstyle/image/InfoGrafika-1.jpg" onclick="showImageOverlay(this)">
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
                                    <img src="allstyle/image/InfoGrafika-2.jpg" onclick="showImageOverlay(this)">
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
                                    <img src="allstyle/image/InfoGrafika-3.jpg" onclick="showImageOverlay(this)">
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

<script>
    function showImageOverlay(clickedImage) {
        var imageSrc = clickedImage.src;
        var overlay = document.createElement('div');
        overlay.id = 'imageOverlay';
        overlay.style.position = 'fixed';
        overlay.style.top = '0';
        overlay.style.left = '0';
        overlay.style.width = '100%';
        overlay.style.height = '100%';
        overlay.style.backgroundColor = 'rgba(0, 0, 0, 0.8)';
        overlay.style.display = 'flex';
        overlay.style.justifyContent = 'center';
        overlay.style.alignItems = 'center';
        overlay.style.zIndex = '9999';

        var image = new Image();
        image.src = imageSrc;
        image.style.maxWidth = '90%';
        image.style.maxHeight = '90%';

        overlay.appendChild(image);
        document.body.appendChild(overlay);

        overlay.addEventListener('click', function() {
            document.body.removeChild(overlay);
        });
    }
</script>
