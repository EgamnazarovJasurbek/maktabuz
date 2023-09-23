@extends('layouts.site')

<style>
    @media (max-width:412px) {
        .topMain-logo {
            position: absolute;
            top: 18%;
            right: 35%;
            color: black;
        }

        .additionalFuntions {
            position: absolute;
            top: 24%;
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
                <h1 class="pageTitle text-dark">Yangiliklar</h1>
                <nav aria-label="breadcrumb">
                    <ol id="w5" class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Asosiy</a></li>
                        <li class="breadcrumb-item " aria-current="page">Yangiliklar</li>
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
            <div class="schoolNews">
                <div class="container">
                    <div class="navigationTabs">
                        <a href="" class="active" data-tab="tab1">
                            <i class="fas fa-newspaper"></i> Yangiliklar
                        </a>
                        <a href="" class="" data-tab="tab2">
                            <i class="fas fa-bullhorn"></i> E'lonlar
                        </a>
                    </div>

                    <div class="tab-content">
                        <!-- Content for Yangiliklar tab -->
                        <div class="tab-pane fade active show" id="tab1">
                            <div class="imageCardBoxes">
                                <div class="row">
                                    <div class="col-xl-4 col-lg-4 col-md-6">
                                        <a href="">
                                            <div class="imageBox">
                                                <img alt="image" src="allStyle/image/It live logo for red-04-04.png">
                                            </div>
                                            <h1>Rossiya universitetlarida taʼlim olmoqchimisiz? Unda koʻrgazmaga
                                                marhamat!
                                            </h1>
                                            <span>04 Oktabr 2021</span>
                                        </a>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6">
                                        <a href="">
                                            <div class="imageBox">
                                                <img alt="image" src="allStyle/image/It live logo for red-04-04.png">
                                            </div>
                                            <h1>Rossiya universitetlarida taʼlim olmoqchimisiz? Unda koʻrgazmaga
                                                marhamat!
                                            </h1>
                                            <span>04 Oktabr 2021</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Content for E'lonlar tab -->
                        <div class="tab-pane fade" id="tab2">
                            <div class="imageCardBoxes">
                                <div class="row">
                                    <div class="col-xl-4 col-lg-4 col-md-6">
                                        <a href="">
                                            <div class="imageBox">
                                                <img alt="image" src="allStyle/image/It live logo for red-04-04.png">
                                            </div>
                                            <h1>Rossiya universitetlarida taʼlim olmoqchimisiz? Unda koʻrgazmaga
                                                marhamat!
                                            </h1>
                                            <span>04 Oktabr 2021</span>
                                        </a>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6">
                                        <a href="">
                                            <div class="imageBox">
                                                <img alt="image" src="allStyle/image/It live logo for red-04-04.png">
                                            </div>
                                            <h1>Rossiya universitetlarida taʼlim olmoqchimisiz? Unda koʻrgazmaga
                                                marhamat!
                                            </h1>
                                            <span>04 Oktabr 2021</span>
                                        </a>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6">
                                        <a href="">
                                            <div class="imageBox">
                                                <img alt="image" src="allStyle/image/It live logo for red-04-04.png">
                                            </div>
                                            <h1>Rossiya universitetlarida taʼlim olmoqchimisiz? Unda koʻrgazmaga
                                                marhamat!
                                            </h1>
                                            <span>04 Oktabr 2021</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    </main>
    <!-- Main section End -->
@endsection


<script src="allStyle/js/bootstrap.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Get all tab links inside the navigationTabs div
        const tabLinks = document.querySelectorAll(".navigationTabs a");

        // Get all tab panes
        const tabPanes = document.querySelectorAll(".tab-content .tab-pane");

        // Add click event listeners to the tab links
        tabLinks.forEach(function(tabLink) {
            tabLink.addEventListener("click", function(event) {
                event.preventDefault();

                // Remove the 'active' class from all tab links and tab panes
                tabLinks.forEach(function(link) {
                    link.classList.remove("active");
                });
                tabPanes.forEach(function(pane) {
                    pane.classList.remove("active", "show");
                });

                // Add the 'active' class to the clicked tab link and corresponding tab pane
                const targetTabId = this.getAttribute("data-tab");
                const targetTabPane = document.getElementById(targetTabId);

                if (targetTabPane) {
                    this.classList.add("active");
                    targetTabPane.classList.add("active", "show");
                }
            });
        });
    });
</script>
