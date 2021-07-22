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
    <div class="container py-5">
        <div class="row">
            <div class="col-xl-8">
                                                                                   
                <div class="row">  
                    <div class="col-xl-12 px-xl-0">
                        @if($contents->count() > 0)
                            @foreach($contents as $content)
                                <h2>{{ $content->title }} </h2>  
                                <h3 class="text-warning mb-5"> {{$content->subtitle1}}</h3>
                            
                                <img src="{{ asset('/assets/dragonladies.jpg') }}" alt="" class="rounded mb-4 w-100" style="object-fit: cover; max-height: 300px">                   
                            
                                <p class="text-justify">{{ $content->body }}</p>
                                <br>
                                <p class="text-justify">{{ $content->listItem1 }}</p>
                                <br>
                            @endforeach
                            <a href="#!"> > Rejoindre le groupe</a>
                        @endif
                    </div>                                                        
                </div>
            </div>                                                                                                                                                                     
        </div>
        
    </div>
@endsection

