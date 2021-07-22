@extends('client.layouts.main')

@section('content')
 <!--section hero-->
 <section  id="main-hero" >
        <div class="container">
            <div class="row justify-content-center align-items-center">               
                <div class="breadcrumbs">
                        {{ Breadcrumbs::render('loan') }}
                    </div>
                </div>
            </div>            
        </div>
    </section><!--end section hero-->
    

    <section class="py-5">
        <div class="container">
            <div class="row"> 
                <h2 class="mb-4">Nos préstations</h2>                  
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="paddle-school__img"></div>
                </div>
                <div class="col-md-6">
                    <div class="paddle-school__content">

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

