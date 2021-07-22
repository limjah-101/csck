@extends('client.layouts.main')

@section('content')
 <!--section hero-->
    <section  id="main-hero" >
        <div class="container">
            <div class="row justify-content-center align-items-center">               
                <div class="breadcrumbs">
                        {{ Breadcrumbs::render('join') }}
                    </div>
                </div>
            </div>            
        </div>
    </section><!--end section hero-->
    
    <div class="section py-5">
        <div class="container">
            <div class="row">
                <div class="col-xl-8">
                    
                    <!--purchase-->                                                  
                    <div class="row">  
                        <h2 class="mb-3">Adhérer au club</h2>                     
                        <p >L’inscription à CHALON SUR SAÔNE CANOË KAYAK – CSCK, vaut acceptation du règlement intérieur. <a href="#"> > voir le document</a></p>
                        <p>L’adhérent s’engage à lire à respecter le code du pratiquant et la charte Eco-pagayeur. <a href="#"> > voir le document</a></p>
                        <p>L’adhérent s’engage à respecter le dit règlement et les différentes chartes. <a href="#"> > voir les document</a></p>                                    
                    </div><!--end_purchase--> 
    
                    <div class="row mt-4">                    
                        <div class="col-md-12 px-0">
                            <h6 class="font-weight-bold">DOCUMENTS À FOURNIRS</h6>
                            <hr class="mt-0 mb-3">
                            <div class="card-body bg-light">
                                <p class="my-1"><i class="fas fa-chevron-right text-warning mr-1"></i>Une photo d’identité</p>
                                <p class="my-1"><i class="fas fa-chevron-right text-warning mr-1"></i>La fiche d'inscription dûment remplie et signée </p>
                                <p class="my-1"><i class="fas fa-chevron-right text-warning mr-1"></i>Un Certificat médical autorisant le sport en eau calme et vive, loisir et compétition</p>
                                <p class="my-1"><i class="fas fa-chevron-right text-warning mr-1"></i>Attestation de prise de connaissance des conditions d’assurance dûment remplie</p>
                                <p class="my-1"><i class="fas fa-chevron-right text-warning mr-1"></i>Fiche de liaison sanitaire dûment remplie</p>
                                <p class="my-1"><i class="fas fa-chevron-right text-warning mr-1"></i>1 enveloppe libellée votre adresse et timbrée</p>
                                <p class="my-1"><i class="fas fa-chevron-right text-warning mr-1"></i>Votre règlement</p>
                            </div>
                            <div class="d-inline-flex align-items-center mt-3 text-info">
                                <i class="fas fa-exclamation-circle fa-2x mr-3"></i>
                                <p class="m-0 font-italic"> L’INSCRIPTION NE SERA DÉFINITIVE QUE LORSQUE LE DOSSIER SERA COMPLET</p>
                            </div>
                        </div>                    
                    </div>                      
                    <!--renew-->
                    <div class="row mt-5">  
                        <h2 class="mb-3">Renouvelé ma licence</h2>                     
                        <p>
                            Vous souhaitez renouveler votre adhésion. Veuillez trouver la liste des documents à fournir ci-dessous.
                        </p>            
                    </div>
                    <div class="row mt-4">                    
                        <div class="col-md-12 px-0">
                            <h6 class="font-weight-bold">DOCUMENTS À FOURNIRS</h6>
                            <hr class="mt-0 mb-3">
                            <div class="card-body bg-light">
                                <p class="my-0"><i class="fas fa-chevron-right text-warning mr-1"></i>Une photo d’identité</p>
                                <p class="my-0"><i class="fas fa-chevron-right text-warning mr-1"></i>Un questionnaire <a href="#">" QS - SPORT "</a>avec son attestation à compléter préalablement</p>                                               
                            </div>
                        </div>                    
                    </div><!--end_renew-->                                         
                </div>
                
                <!--aside-->                     
                @include('client.partials.events')
                <!--end_aside-->
            </div>                     
        </div>
    </div>

    <!---pricing-->
    <section class="my-5">
        <div class="container">
            <div class="row mb-3">  
               <h2 class="">License saison {{date("Y")}}</h2>                                        
           </div>
           <div class="row justify-content-around pb-5">
               <div class="card  pricing shadow-sm py-3 bg-transparent mb-5 mb-lg-0" style="min-width: 450px; min-height:350px">
                   <div class="card-body">
                       <div class="row align-items-center px-3 mb-2 text-warning">
                           <i class="fas fa-address-card fa-2x"></i>
                           <h3 class=" my-0 ml-4 text-capitalize text-warning">jeunes</h3>
                       </div>
                       <h6 class="text-secondary">Poussin | Benjamin | Minime | Cadet</h6>
                       
                       <h6 class="text-dark display-3 my-5">75&euro;</h6>
   
                       <p><i class="fas fa-check fa-lg text-dark mr-3"></i>Cotisation club</p>
                       <p><i class="fas fa-check fa-lg text-dark mr-3"></i>Licence FFCK</p>
                       <p><i class="fas fa-check fa-lg text-dark mr-3"></i>Assurance de base</p>
                       
                       <div class="text-center mt-5 mb-3">
                           <button class="btn btn-outline-warning btn-block btn-lg">ADHÉRER</button>
                       </div>
                   </div>
               </div>
               <div class="card pricing shadow-sm py-3 bg-warning" style="min-width: 450px; min-height:350px">
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
        </div>
    </section>

    <!---download_files-->
    <section class="my-5">
        <div class="container">
            <div class="row">
               <div class="col-xl-8 px-xl-0">
                   <div class="row mx-0 justify-content-between align-items-center">
                       <h2 class="">Télécharger les documents</h2>
                       <small class="text-secondary font-italic"><i class="fas fa-exclamation-circle fa-lg text-info"></i> Fichiers en format PDF</small>  
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
    </section>
@endsection

