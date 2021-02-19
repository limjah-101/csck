@extends('client.layouts.main')

@section('content')
    <div class="container py-5">
        <div class="row">
            <div class="col-xl-8">
                <div class="row mb-4">
                    {{ Breadcrumbs::render('dragon_ladies') }}
                </div>
                                                                   
                <div class="row">  
                    <div class="col-xl-12 px-xl-0">
                        @if($contents->count() > 0)
                            @foreach($contents as $content)
                                <h3 class="mb-4">{{ $content->title }} <span class="h4 text-success text-normal">{{$content->subtitle1}}</span></h3>  
                            
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

