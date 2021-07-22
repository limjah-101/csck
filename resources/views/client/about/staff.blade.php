@extends('client.layouts.main')

@section('content')
 <!--section hero-->
 <section  id="main-hero" >
        <div class="container">
            <div class="row justify-content-center align-items-center">               
                <div class="breadcrumbs">
                        {{ Breadcrumbs::render('staff') }}
                    </div>
                </div> 
            </div>            
        </div>
    </section><!--end section hero-->
    
    <div class="container py-5">
        <div class="row">
            <div class="col-xl-8">               
                <div class="row"> 
                    @foreach($contents as $content) 
                        <h2 class="mb-4">{{$content->title}}</h2>                     
                        <p class="mb-4">{{ $content->body }}</p>
                        
                        <p>{{ $content->listItem1 ?? '' }}</p> 
                    @endforeach                     
                </div>
                     
            </div>
            <!--aside-->                     
            @include('client.partials.events')
            <!--end_aside-->
        </div>
        <div class="row">
            <div class="col-xl-12 px-xl-0 mt-5">                                                                          
                <h2>Le Bureau</h2> 
                <hr>                                                                                          
                <div class="row mt-5 justify-content-center justify-content-lg-around">                    
                    <div class="card text-center bg-transparent border-0" style="width: 250px; ">                       
                        <div class="card-body">
                            <img width="120px" class="rounded-circle mb-3" alt="100x100" src="https://mdbootstrap.com/img/Photos/Avatars/img%20(31).jpg">                           
                            <p class="card-text text-justify">
                                Some quick example text to build on the card title and make up the bulk of the
                                card's content.
                            </p>                            
                            <h5 class="card-title mt-3">Christophe.M</h5>
                            <h6 class="card-text">Président</h6>                           
                        </div>                              
                    </div>

                    <div class="card text-center bg-transparent border-0" style="width: 250px; ">                       
                        <div class="card-body">
                            <img width="120px" class="rounded-circle mb-3" alt="100x100" src="https://mdbootstrap.com/img/Photos/Avatars/img%20(31).jpg">                           
                            <p class="card-text text-justify">
                                Some quick example text to build on the card title and make up the bulk of the
                                card's content.
                            </p>                            
                            <h5 class="card-title mt-3">Franck.S</h5>
                            <h6 class="card-text">Trésorier</h6>  
                        </div>                              
                    </div>   

                    <div class="card text-center bg-transparent border-0" style="width: 250px; ">                       
                        <div class="card-body">
                            <img width="120px" class="rounded-circle mb-3" alt="100x100" src="https://mdbootstrap.com/img/Photos/Avatars/img%20(31).jpg">                           
                            <p class="card-text text-justify">
                                Some quick example text to build on the card title and make up the bulk of the
                                card's content.
                            </p>                            
                            <h5 class="card-title mt-3">Albert.D</h5>
                            <h6 class="card-text">Secrétariat</h6>  
                        </div>                              
                    </div>                 
                </div>                                                                                                                                   
            </div>  
            
            <div class="col-xl-12 px-xl-0 my-5">                                                                          
                <h2>Les Animateurs</h2> 
                <hr>                                                                                          
                <div class="row mt-5 justify-content-center justify-content-lg-around">                    
                    <div class="card text-center bg-transparent border-0" style="width: 250px; ">                       
                        <div class="card-body">
                            <img width="120px" class="rounded-circle mb-3" alt="100x100" src="https://mdbootstrap.com/img/Photos/Avatars/img%20(31).jpg">                           
                            <p class="card-text text-justify">
                                Some quick example text to build on the card title and make up the bulk of the
                                card's content.
                            </p>                            
                            <h5 class="card-title mt-3">Christophe.M</h5>
                            <h6 class="card-text">Président</h6>                           
                        </div>                              
                    </div>

                    <div class="card text-center bg-transparent border-0" style="width: 250px; ">                       
                        <div class="card-body">
                            <img width="120px" class="rounded-circle mb-3" alt="100x100" src="https://mdbootstrap.com/img/Photos/Avatars/img%20(31).jpg">                           
                            <p class="card-text text-justify">
                                Some quick example text to build on the card title and make up the bulk of the
                                card's content.
                            </p>                            
                            <h5 class="card-title mt-3">Franck.S</h5>
                            <h6 class="card-text">Trésorier</h6>  
                        </div>                              
                    </div>   

                    <div class="card text-center bg-transparent border-0" style="width: 250px; ">                       
                        <div class="card-body">
                            <img width="120px" class="rounded-circle mb-3" alt="100x100" src="https://mdbootstrap.com/img/Photos/Avatars/img%20(31).jpg">                           
                            <p class="card-text text-justify">
                                Some quick example text to build on the card title and make up the bulk of the
                                card's content.
                            </p>                            
                            <h5 class="card-title mt-3">Albert.D</h5>
                            <h6 class="card-text">Secrétariat</h6>  
                        </div>                              
                    </div>                 
                </div>                                                                                                                                   
            </div>
        </div>
        
    </div>
@endsection

