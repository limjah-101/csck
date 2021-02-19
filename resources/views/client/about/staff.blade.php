@extends('client.layouts.main')

@section('content')
    <div class="container py-5">
        <div class="row">
            <div class="col-xl-8">
                <div class="row mb-4">
                    {{ Breadcrumbs::render('staff') }}
                </div>

                <div class="row"> 
                    @foreach($contents as $content) 
                        <h3 class="mb-4">{{$content->title}}</h3>                     
                        <p class="mb-4">{{ $content->body }}</p>
                        
                        <p>{{ $content->listItem1 ?? '' }}</p> 
                    @endforeach                     
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
        <div class="row">
            <div class="col-xl-12 px-xl-0 mt-xl">                                                                          
                <h3>Le Bureau</h3> 
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
            
            <div class="col-xl-12 px-xl-0 mt-xl mb-xl">                                                                          
                <h3>Les Animateurs</h3> 
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

