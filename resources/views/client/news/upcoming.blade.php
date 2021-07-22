@extends('client.layouts.main')

@section('content')
 <!--section hero-->
 <section  id="main-hero" >
        <div class="container">
            <div class="row justify-content-center align-items-center">               
                <div class="breadcrumbs">
                        {{ Breadcrumbs::render('news') }}
                    </div>
                </div>
            </div>            
        </div>
    </section><!--end section hero-->
    <div class="container py-5">
        <div class="row">
            <div class="col-xl-8">
                

                <div class="row"> 
                    <h3 class="mb-4">Évènements à venir</h3>                  
                </div>
                     
            </div>
            <!--aside-->                     
            @include('client.partials.events')
            <!--end_aside-->
        </div>
       
        
    </div>
@endsection

