@extends('client.layouts.main')

@section('content')
 <!--section hero-->
 <section  id="main-hero" >
        <div class="container">
            <div class="row justify-content-center align-items-center">               
                <div class="breadcrumbs">
                        {{ Breadcrumbs::render('dragon_ladies') }}
                    </div>
                </div>
            </div>            
        </div>
</section><!--end section hero-->

    
<section class="py-5">
    <div class="container">
        <div class="row h-100 justify-content-between align-items-center">
            <div class="col-xl-4 mb-5 mb-xl-0">
                <h3 class="">Dragon boat</h3>
                <h6 class="text-grey_light sub_title">Santé, bien être par le sport.</h6>
                <p class="text-justify">Cette section ouverte en 2016 permet aux femmes atteintes d’un cancer de reprendre 
                    une activité sportive, dynamique et conviviale. Les Ladies se retrouvent tous les 
                    samedis à 9h15 pour naviguer sur la Saône, si le temps le permet. Quand le temps est défavorable à une 
                    bonne navigation elles se retrouvent pour une marche conviviale dans la joie et la bonne humeur en faisant varier les parcours.</p>
            </div>
            <div class="col-xl-6 offset-0 offset-xl-2">
                <div class="image_grid">
                    <div class="column">
                        <img src="{{ asset('assets/d_lady_boat.jpg') }}" alt="">
                        <img src="{{ asset('assets/d_lady_vertical.jpeg') }}" alt="">                        
                    </div>
                    <div class="column">
                        <img src="{{ asset('assets/d_lady_flower.jpeg') }}" alt="">                        
                        <img src="{{ asset('assets/d_lady_center.jpeg') }}" alt="">
                    </div>                  
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-5">
    <div class="container">
        <div class="row h-100 justify-content-between align-items-center">
        <div class="col-xl-6 mt-5 mt-xl-0 order-2 order-xl-1">
                <div class="image_grid">
                    <div class="column">
                        <img src="{{ asset('assets/oct_rose.jpg') }}" alt="">                        
                        <img src="{{ asset('assets/d_boat.jpg') }}" alt="">                                                
                    </div>
                    <div class="column">
                        <img src="{{ asset('assets/d_boat_v_team.jpg') }}" alt="">                        
                    </div>                  
                </div>
            </div>
            <div class="col-xl-4 offset-0 offset-xl-2 order-1 order-xl-2">
                <h3>Octobre rose</h3>
                <h6 class="text-grey_light sub_title">Ruban rose.</h6>
                <p class="text-justify">Chaque année en octobre, la campagne de lutte contre le cancer du sein organisée par 
                    l’association Ruban Rose propose de lutter contre le cancer du sein en informant, en dialoguant et en mobilisant. 
                    A Chalon-sur-Saône à cette occasion, une rencontre départementale est organisée sur la Saône 
                    (parcours Allériot- Marches du Port Villiers à Chalon). Cette rencontre mobilise pas moins de 100 kayakistes, tous vêtus de rose.
                </p>
                <a  class="mt-2" href="https://www.cancerdusein.org/octobre-rose/octobre-rose" aria-label="octobre rose" target="__blank">Plus d'infos</a>
            </div>           
        </div>
    </div>
</section>


@endsection

