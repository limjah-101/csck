@extends('client.layouts.main')

@section('content')
    <div class="container py-5">
        <div class="row">
            <div class="col-xl-8">
                <div class="row mb-4">
                    {{ Breadcrumbs::render('join') }}
                </div>
                <!--purchase-->                                                  
                <div class="row">  
                    <h3 class="mb-4">Adhérer au club</h3>                     
                    <p >
                        Vous souhaitez adhérer au CSCK. L’inscription au CSCK Chalon-sur-Saône 
                        se fait exclusivement en ligne depuis cette page. Ceci permet une meilleure gestion, 
                        une simplification et une plus grande réactivité. Nous espérons que vous apprécierez et 
                        nous comptons sur vos observations pour l’améliorer.
                    </p>                      
                </div><!--end_purchase--> 

                <div class="row mt-4">                    
                    <div class="col-md-12 px-0">
                        <h6>DOCUMENTS À FOURNIRS</h6>
                        <hr>
                        <p><i class="fas fa-check-circle fa-lg text-success mr-3"></i>Une photo d’identité</p>
                        <p><i class="fas fa-check-circle fa-lg text-success mr-3"></i>La fiche d'inscription</p>
                        <p><i class="fas fa-check-circle fa-lg text-success mr-3"></i>Un certificat médical [ voir Modalités certificat médical <a href="#">ici ]</a></p>                                               
                    </div>                    
                </div>                      
                <!--renew-->
                <div class="row mt-xl">  
                    <h3 class="mb-4">Renouvelé ma licence</h3>                     
                    <p>
                        Vous souhaitez renouveler votre adhésion. Veuillez trouver la liste des documents à fournir ci-dessous.
                    </p>            
                </div>
                <div class="row mt-4">                    
                    <div class="col-md-12 px-0">
                        <h6>DOCUMENTS À FOURNIRS</h6>
                        <hr>
                        <p><i class="fas fa-check-circle fa-lg text-success mr-3"></i>Une photo d’identité</p>
                        <p><i class="fas fa-check-circle fa-lg text-success mr-3"></i>Un questionnaire <a href="#">" QS - SPORT "</a>avec son attestation à compléter préalablement</p>                                               
                    </div>                    
                </div><!--end_renew-->                                         
            </div>
            
            <!--aside-->
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
            </div><!--end_aside-->
        </div>

        <!---pricing-->
        <div class="row mt-xl mb-5">  
            <h3 class="">Tarifs saison {{date("Y")}}</h3>                                        
        </div>

        <div class="row mb-xl justify-content-around">
            <div class="card  pricing shadow-sm py-3 bg-light mb-5 mb-lg-0" style="min-width: 450px; min-height:350px">
                <div class="card-body">
                    <div class="row align-items-center px-3 mb-2 text-success">
                        <i class="fas fa-address-card fa-2x"></i>
                        <h3 class=" my-0 ml-4 text-capitalize">jeunes</h3>
                    </div>
                    <h6 class="text-secondary">Poussin | Benjamin | Minime | Cadet</h6>
                    
                    <h6 class="text-dark display-3 my-5">75&euro;</h6>

                    <p><i class="fas fa-check fa-lg text-dark mr-3"></i>Cotisation club</p>
                    <p><i class="fas fa-check fa-lg text-dark mr-3"></i>Licence FFCK</p>
                    <p><i class="fas fa-check fa-lg text-dark mr-3"></i>Assurance de base</p>
                    
                    <div class="text-center mt-5 mb-3">
                        <button class="btn btn-outline-success btn-block btn-lg">ADHÉRER</button>
                    </div>
                </div>
            </div>
            <div class="card pricing shadow-sm py-3 bg-success" style="min-width: 450px; min-height:350px">
                <div class="card-body">
                    <div class="row align-items-center px-3 mb-2 text-light">
                        <i class="fas fa-address-card fa-2x"></i>
                        <h3 class=" my-0 ml-4 text-capitalize text-light">adultes</h3>
                    </div>
                    <h6 class="text-light">Junior | Senior | Vétéran</h6>
                    
                    <h6 class="text-light display-3 my-5">85&euro;</h6>

                    <p class="text-light"><i class="fas fa-check fa-lg mr-3"></i>Cotisation club</p>
                    <p class="text-light"><i class="fas fa-check fa-lg mr-3"></i>Licence FFCK</p>
                    <p class="text-light"><i class="fas fa-check fa-lg mr-3"></i>Assurance de base</p>
                    
                    <div class="text-center mt-5 mb-3">
                        <button class="btn btn-outline-light btn-block btn-lg">ADHÉRER</button>
                    </div>
                </div>
            </div>
           
        </div><!---end_pricing-->

        <!---download_files-->
        <div class="row mb-xl">
            <div class="col-xl-8 px-xl-0">
                <div class="row mx-0 justify-content-between align-items-center">
                    <h3 class="">Télécharger les documents</h3>
                    <small class="text-secondary font-italic"><i class="fas fa-exclamation-circle fa-lg text-success"></i> Fichiers en format PDF</small>  
                </div>
                <hr>
                <div class="row mt-5 justify-content-around">                        
                    <a href="https://www.ffck.org/" target="_blank" class="mb-4 card-file rounded">
                        <div class="card-body shadow-sm text-center rounded" style="width:200px; height: 150px">
                            <i class="fas fa-file-pdf fa-2x mb-3"></i>
                            <p class="text-sm">Fiche d'incription</p>
                        </div>
                    </a>
                    
                    <a href="https://www.ffck.org/" target="_blank" class="mb-4 card-file rounded">
                        <div class="card-body shadow-sm text-center rounded" style="width:200px; height: 150px">
                            <i class="fas fa-file-pdf fa-2x mb-3"></i>
                            <p class="text-sm">Fiche sanitaire de liaison</p>
                        </div>
                    </a>

                    <a href="https://www.ffck.org/" target="_blank" class="mb-4 card-file rounded">
                        <div class="card-body shadow-sm text-center rounded" style="width:200px; height: 150px">
                            <i class="fas fa-file-pdf fa-2x mb-3"></i>
                            <p class="text-sm">Contrat d'assurance licence permanente</p>
                        </div>
                    </a>

                    <a href="https://www.ffck.org/" target="_blank" class="mb-4 card-file rounded">
                        <div class="card-body shadow-sm text-center rounded" style="width:200px; height: 150px">
                            <i class="fas fa-file-pdf fa-2x mb-3"></i>
                            <p class="text-sm">Questionnaire QS - SPORT</p>
                        </div>
                    </a>

                    <a href="https://www.ffck.org/" target="_blank" class="mb-4 card-file rounded">
                        <div class="card-body shadow-sm text-center rounded" style="width:200px; height: 150px">
                            <i class="fas fa-file-pdf fa-2x mb-3"></i>
                            <p class="text-sm">Certificat médical</p>
                        </div>
                    </a>

                    <a href="https://www.ffck.org/" target="_blank" class="mb-4 card-file rounded">
                        <div class="card-body shadow-sm text-center rounded" style="width:200px; height: 150px">
                            <i class="fas fa-file-pdf fa-2x mb-3"></i>
                            <p class="text-sm">Explication Certificat médical</p>
                        </div>
                    </a>
                </div>

            </div>
        </div><!---end_download_files-->

    </div>
@endsection

