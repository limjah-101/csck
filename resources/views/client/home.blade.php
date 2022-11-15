@extends('client.layouts.main')

@section('content')

<!--section hero-->
<section id="home-hero">
    <div class="container">
        <div class="home">
            <h3 class="text-capitalize">chalon-sur-saône</h3>
            <h3>Canoë - Kayak</h3>
        </div>

        <div class="info_nav">
            <div class="info_nav-box">
                <i class="icofont-clock-time"></i>
                <p>Lun au Ven | 13h - 17h</p>
            </div>
            <div class="info_nav-box">
                    <i class="icofont-smart-phone"></i>
                <a href="tel:+33 769 32 92 71">+33 769 32 92 71</a>
            </div>
        </div>
    </div>
</section>
<!--end section hero-->


<!-- section about -->
<section class="section about">
    <div class="container">
        <div class="row">
            <div class="col-12 col-xl-6">
                <h2 class="sub-title mb-5">À propos</h2>
                <p class="text-justify">Le <span>Club Canoë-Kayak de Chalon-sur-Saône</span> est un club sportif avec une très large ouverture de public et de pratiques.
                    Un club complet qui couvre l’ensemble des sports de pagaies Rivière sportive, Randonnée, Mer, Descente, Pirogue, SUP.
                    Une présence sur l’ensemble des lieux de pratiques de la pagaie, eaux calmes, eaux vives, mer.
                </p>
            </div>

            <div class="col-4 offset-2 d-none d-xl-block">
                <img src="{{ asset('assets/blobs/circle_wave.svg') }}" alt="" class="about_svg">
            </div>
        </div>
    </div>
</section>
<!-- end section about -->


<!--section resume-->
<section class="section card-box">
    <div class="container">
        <div class="row mb-5">
            <div class="col-12">
                <h2 class="sub-title">Le club <span>c'est</span></h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 mb-5 mb-xl-0">
                <div class="resume-card" >
                    <div class="icon-wrapper">
                        <svg viewBox="0 0 500 500" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" id="blobSvg">
                            <path id="blob" d="M449.5,316Q431,382,369,403.5Q307,425,251,422Q195,419,127.5,403.5Q60,388,77,319Q94,250,89,189.5Q84,129,129.5,73.5Q175,18,236.5,60Q298,102,347,123Q396,144,432,197Q468,250,449.5,316Z"></path>
                        </svg>
                        <i class="icofont-group-students"></i>

                    </div>
                    <h5 class=" mt-5 mb-3 ">60 adhérents</h5>
                    <p class="card-text text-justify">Une population loisirs très dynamique. Des adhérents de tout âge, tous niveaux.
                        Une représentation féminine significative et en progression.
                    </p>
                </div>
            </div>


            <div class="col-lg-4 mb-5 mb-xl-0">
                <div class="resume-card" >
                    <div class="icon-wrapper">
                        <svg viewBox="0 0 500 500" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" id="blobSvg">
                            <path id="blob" d="M449.5,316Q431,382,369,403.5Q307,425,251,422Q195,419,127.5,403.5Q60,388,77,319Q94,250,89,189.5Q84,129,129.5,73.5Q175,18,236.5,60Q298,102,347,123Q396,144,432,197Q468,250,449.5,316Z"></path>
                        </svg>
                        <i class="icofont-padding"></i>

                    </div>
                    <h5 class=" mt-5 mb-3 ">30 sorties par an</h5>
                    <p class="card-text text-justify">Un calendrier annuel de sorties pour débutants et confirmés;
                            Des sorties sont prévues sur des rivières, des bassins d’eau vive ou sur le littoral.
                    </p>
                </div>
            </div>

            <div class="col-lg-4 mb-5 mb-xl-0">
                <div class="resume-card" >
                    <div class="icon-wrapper">
                        <svg viewBox="0 0 500 500" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" id="blobSvg">
                            <path id="blob" d="M449.5,316Q431,382,369,403.5Q307,425,251,422Q195,419,127.5,403.5Q60,388,77,319Q94,250,89,189.5Q84,129,129.5,73.5Q175,18,236.5,60Q298,102,347,123Q396,144,432,197Q468,250,449.5,316Z"></path>
                        </svg>
                        <i class="icofont-win-trophy"></i>
                    </div>
                    <h5 class=" mt-5 mb-3 ">Compétition</h5>
                    <p class="card-text text-justify">Un pôle compétition performant (SUP, Ocean Racing et Descente).
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!--end section resume-->



<!-- section activities -->
<section class="section activities">
    <div class="container">
        <div class="row">
            <div class="col-12 mb-5">
                <h2 class="sub-title">Nos activités</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <div class="activity_card mb-3">
                    <div class="header">
                        <img src="/images/school.jpg" alt="">
                    </div>
                    <div class="content">
                        <div class="description">
                            <h5>L'école de pagaie</h5>
                            <span><i class="icofont-canoe"></i></span>
                        </div>
                        <div class="action">
                            <a href="#">voir les détails</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="activity_card mb-3">
                    <div class="header">
                        <img src="/images/descente.jpg" alt="">
                    </div>
                    <div class="content">
                        <div class="description">
                            <h5>La descente</h5>
                            <span><i class="icofont-canoe"></i></span>
                        </div>
                        <div class="action">
                            <a href="#">voir les détails</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="activity_card mb-3">
                    <div class="header">
                        <img src="/images/rando.jpg" alt="">
                    </div>
                    <div class="content">
                        <div class="description">
                            <h5>La randonnée</h5>
                            <span><i class="icofont-canoe"></i></span>
                        </div>
                        <div class="action">
                            <a href="#">voir les détails</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-4">
        <div class="col-lg-4">
                <div class="activity_card mb-3">
                    <div class="header">
                        <img src="/images/eau-vive.jpg" alt="">
                    </div>
                    <div class="content">
                        <div class="description">
                            <h5>En eau vive</h5>
                            <span><i class="icofont-canoe"></i></span>
                        </div>
                        <div class="action">
                            <a href="#">voir les détails</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="activity_card mb-3">
                    <div class="header">
                        <img src="/images/mer.jpg" alt="">
                    </div>
                    <div class="content">
                        <div class="description">
                            <h5>En mer</h5>
                            <span><i class="icofont-canoe"></i></span>
                        </div>
                        <div class="action">
                            <a href="#">voir les détails</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="activity_card mb-3">
                    <div class="header">
                        <img src="/images/paddle.jpg" alt="">
                    </div>
                    <div class="content">
                        <div class="description">
                            <h5>Le stand-up paddle</h5>
                            <span><i class="icofont-canoe"></i></span>
                        </div>
                        <div class="action">
                            <a href="#">voir les détails</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--section adds-->
<section class="adds">
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-6 d-none d-xl-block"></div>
            <div class="col-12 col-xl-6 text-center">
                <h2 class="sub-title text-white text-xl-right">Prêt Pour De Nouvelles Aventures !</h2>
                <a href="#" class="btn btn-warning mt-3 float-xl-right">Rejoindre le club</a>
            </div>
        </div>
    </div>
</section>
<!--end section adds-->


<!--section news-->
<section class="news">
    <div class="container">
        <div class="row">
            <div class="col-12  mb-5">
                <h2 class="sub-title">À la une</h2>
            </div>
        </div>

            <div class="owl-carousel">

                <div class="owl-slide">
                    <div class="activity_card mb-3">
                    <div class="header">
                        <img src="/images/paddle.jpg" alt="">
                    </div>
                    <div class="content">
                        <div class="event_date mb-2">
                            <span class="badge badge-warning py-1">
                                Sept 2021
                            </span>
                        </div>
                        <div class="description">
                            <h5> Le stand-up paddle</h5>
                            <span><i class="icofont-canoe"></i></span>
                        </div>
                        <div class="action">
                            <a href="#">voir les détails</a>
                        </div>
                    </div>
                </div>
                </div>

                <div class="owl-slide">
                    <div class="activity_card mb-3">
                    <div class="header">
                        <img src="/images/paddle.jpg" alt="">
                    </div>
                    <div class="content">
                        <div class="event_date mb-2">
                            <span class="badge badge-warning py-1">
                                Sept 2021
                            </span>
                        </div>
                        <div class="description">
                            <h5> Le stand-up paddle</h5>
                            <span><i class="icofont-canoe"></i></span>
                        </div>
                        <div class="action">
                            <a href="#">voir les détails</a>
                        </div>
                    </div>
                </div>
                </div>

                <div class="owl-slide">
                    <div class="activity_card mb-3">
                    <div class="header">
                        <img src="/images/paddle.jpg" alt="">
                    </div>
                    <div class="content">
                        <div class="event_date mb-2">
                            <span class="badge badge-warning py-1">
                                Sept 2021
                            </span>
                        </div>
                        <div class="description">
                            <h5> Le stand-up paddle</h5>
                            <span><i class="icofont-canoe"></i></span>
                        </div>
                        <div class="action">
                            <a href="#">voir les détails</a>
                        </div>
                    </div>
                </div>
                </div>

                <div class="owl-slide">
                    <div class="activity_card mb-3">
                    <div class="header">
                        <img src="/images/paddle.jpg" alt="">
                    </div>
                    <div class="content">
                        <div class="event_date mb-2">
                            <span class="badge badge-warning py-1">
                                Sept 2021
                            </span>
                        </div>
                        <div class="description">
                            <h5> Le stand-up paddle</h5>
                            <span><i class="icofont-canoe"></i></span>
                        </div>
                        <div class="action">
                            <a href="#">voir les détails</a>
                        </div>
                    </div>
                </div>
                </div>

                <div class="owl-slide">
                    <div class="activity_card mb-3">
                    <div class="header">
                        <img src="/images/paddle.jpg" alt="">
                    </div>
                    <div class="content">
                        <div class="event_date mb-2">
                            <span class="badge badge-warning py-1">
                                Sept 2021
                            </span>
                        </div>
                        <div class="description">
                            <h5> Le stand-up paddle</h5>
                            <span><i class="icofont-canoe"></i></span>
                        </div>
                        <div class="action">
                            <a href="#">voir les détails</a>
                        </div>
                    </div>
                </div>
                </div>

            </div>


    </div>
</section>
<!--end section news-->

@endsection
@push('script')
<script>
    console.log("toto");
</script>
@endpush
