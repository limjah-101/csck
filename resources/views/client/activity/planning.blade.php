@extends('client.layouts.main')

@section('content')
    <div class="container py-5">
        <div class="row">
            <div class="col-xl-8">
                <div class="row mb-4">
                    {{ Breadcrumbs::render('planning') }}
                </div>

                <div class="row"> 
                    <h3 class="mb-4">Les Séance de navigations</h3>                  
                </div>
                     
            </div>
            <!-- aside -->
            <div class="col-xl-3 offset-xl-1 border-left mt-xl mt-lg-3">
                <div class=""  style="min-height: 150px;">
                    <h6 class="text-uppercase">Quoi de neuf au CSCK</h6>
                    <hr>
                </div>


                <div>
                    <div class="row justify-content-between align-items-center px-3">
                        <h6 class="text-uppercase">Activités à venir </h6>
                        <a href=""><i class="fas fa-exclamation-circle fa-lg text-success"></i></a> 
                    </div>
                    <hr>
                    <p class="card-body text-light bg-success rounded font-weight-bold shadow">Assemblé Générale le 27 Février 2021 à 18h en visio.</p>
                </div>
            </div><!-- end_aside -->
        </div>
       
        
    </div>
@endsection

