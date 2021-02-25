@extends('client.layouts.main')

@section('content')
    <div class="container py-5">
        <div class="row">
            <div class="col-xl-8">
                <div class="row mb-4">
                    {{ Breadcrumbs::render('presentation') }}
                </div>
             
                @foreach($contents as $content)                                                    
                    <div class="row">  
                        <div class="col-xl-12 px-xl-0 mb-xl">
                            <h3 class="mb-4">{{ $content->title }}</h3>
                            @if(!is_null($content->image) && $content->image !== 'google_map')
                                <img src="{{ asset('/assets/bck.jpg') }}" alt="" class="rounded w-100 mb-4" style="object-fit: cover; max-height: 300px">                   
                            @elseif($content->image === 'google_map')
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2731.9962591332446!2d4.863359951696595!3d46.78467807903649!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47f2fcb40076a729%3A0x9e4f16a9aa488e10!2sClub%20de%20cano%C3%AB%20kayak%20de%20Chalon%20sur%20Sa%C3%B4ne!5e0!3m2!1sen!2sfr!4v1613687239541!5m2!1sen!2sfr" 
                                    width="100%" 
                                    height="300" 
                                    frameborder="0" 
                                    style="border:0;" 
                                    allowfullscreen="" 
                                    aria-hidden="false" 
                                    tabindex="0"
                                    class="mb-3"
                                    >
                                </iframe>                                   
                            @endif
                            <p class="text-justify">{{ $content->body }}</p>
                        </div>                                                        
                    </div>
                    <!-- <div class="row mt-xl">  
                        <div class="col-xl-12 px-xl-0">
                            <h3 class="mb-3">Nos locaux</h3>                     
                            <p>Situé au 1 rue d'Amsterdam, nos locaux sont proche du centre ville, du Colisée et du Parc des Expositions.</p>                                               
                            <p class="mb-2 text-dark mt-5"><i class="fas fa-map-marked-alt fa-lg text-success mr-3"></i> 1 Rue d'Amsterdam</p>
                            <p class="mb-2 text-dark"><i class="fas fa-city fa-lg text-success mr-3"></i>71000 Chalon-sur-Saône</p>
                            <a class="mb-2 text-dark" href="tel:00 33 6 77 02 16 09"><p><i class="fas fa-phone-alt fa-lg text-success mr-4"></i>06 77 02 16 09</p></a>
                            <p class="mb-2 text-dark"><i class="fas fa-envelope fa-lg text-success mr-3"></i> chalonsursaonecanoekayak@yahoo.fr</p>
                            <a href="{{ route('contact') }}" class="mt-5 text-sm"> > Nous contacter</a>
                        </div>                                                       
                    </div> -->                                       
                @endforeach
            </div>
            
            <!--aside-->                     
            @include('client.partials.events')
            <!--end_aside-->
        </div>

        <div class="row mt-xl mb-xl">  
            <div class="col-xl-12 px-xl-0">
                <h3 class="">Nos partenaires</h3>                                      
                <hr>
                <div class="row mt-5 justify-content-around">                        
                    <a href="https://www.ffck.org/" target="_blank" class="mb-4">
                        <img src="{{ asset('/assets/partenaires/ffck.jpeg') }}" class="rounded" alt="" height="120px" width="150px">
                    </a>
                    <a href="#" class="mb-4">
                        <img src="{{ asset('/assets/partenaires/ffck.jpeg') }}" class="rounded" alt="" height="120px" width="150px">
                    </a>
                    <a href="#" class="mb-4">
                        <img src="{{ asset('/assets/partenaires/ffck.jpeg') }}" class="rounded" alt="" height="120px" width="150px">
                    </a>
                    <a href="#" class="mb-4">
                        <img src="{{ asset('/assets/partenaires/ffck.jpeg') }}" class="rounded" alt="" height="120px" width="150px">
                    </a>                                                                                   
                </div>

            </div>
        </div>  
        
    </div>
@endsection

