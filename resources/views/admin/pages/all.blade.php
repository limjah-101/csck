@extends('admin.layouts.main')
    
@section('content')
    <div class="container">
        <div class="row justify-content-between align-items-center">            
            <h2>Pages activées</h2>
            <a href="{{ route('page.create') }}" class="btn btn-primary"><i class="fas fa-plus"></i> Ajouter une page</a>
        </div>   

        
        <div class="row mt-5"> 
            <div class="col-8 px-0">
                @forelse($activePages as $page)
                    
                    <div class="card-body shadow-sm rounded mb-5">
                        <div class="d-flex justify-content-between align-items-center mb-3">   
                            <h5 class="font-weight-bold text-uppercase">{{ $page->title }}</h5>
                            <a class=""  href="{{ route('page.toggleActive', $page) }}" title="Désactiver la page"><i class="fas fa-power-off fa-lg"></i></a>
                        </div>
                        
                        <div class="mx-0 d-flex justify-content-between align-items-center">
                            <div></div>
                            <div class="px-2 rounded  shadow">
                                <a class="text-info"  href="{{ route('page.show', $page) }}" title="Plus de détails"><i class="fas fa-eye"></i></a>
                                <a class="text-info ml-2"  href="{{ route('page.edit', $page) }}" title="Modifier le contenu"><i class="fas fa-edit"></i></a>
                                <a class="text-info ml-2"  href="{{ route('page.delete', $page) }}" title="Supprimer la page"><i class="fas fa-trash-alt"></i></a>
                            </div>
                        </div>
                    </div>
                    
                @empty                                    
                    <div class="jumbotron text-center w-100">
                        <p>Pas de page activée</p>
                    </div>                    
                @endforelse            
            </div>           
        </div>

        <div class="row mt-5">            
            <h2>Pages non activées</h2>
        </div> 

        <div class="row mt-5">            
                @forelse($unActivePages as $page)
                    <div class="card mr-5 mb-5 rounded" style="min-width: 250px; min-height: 250px">
                        <div class="card-body">
                        <div class="d-flex justify-content-between">
                                <h5 class="card-title text-info font-weight-bold text-uppercase">{{ $page->title }}</h5>
                                <a class=""  href="{{ route('page.toggleActive', $page) }}" title="Activer la page"><i class="fas fa-check-circle fa-lg"></i></a>
                            </div>
                        </div>
                        <div class="card-footer bg-transparent mx-0 d-flex justify-content-between">
                            <a class="btn btn-sm btn-primary"  href="{{ route('page.edit', $page) }}" title="Modifier le contenu"><i class="fas fa-edit"></i> Modifier</a>
                            <div class="">
                                <a class=""  href="{{ route('page.show', $page) }}" title="Plus de détails"><i class="fas fa-eye"></i></a>
                                <a class="text-danger"  href="{{ route('page.delete', $page) }}" title="Supprimer la page"><i class="fas fa-trash-alt"></i></a>
                            </div>
                        </div>
                    </div>
                    @empty
                    <div class="jumbotron text-center w-100">
                        <p>Pas de page désactivée</p>
                    </div>
                @endforelse            
        </div>

    </div>
@endsection