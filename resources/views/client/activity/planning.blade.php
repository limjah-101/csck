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
            <!--aside-->                     
            @include('client.partials.events')
            <!--end_aside-->
        </div>
       
        
    </div>
@endsection

