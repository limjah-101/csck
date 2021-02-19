@extends('admin.layouts.main')

@section('content')
<div class="container py-5">
   
    <div class="row justify-content-between align-items-center"> 
        <div>
            <h2><span class="badge badge-primary text-capitalize">{{ $page->title }}</span></h2>                      
        </div>           
        <a href="{{ route('article.show', $page->id) }}" class="btn btn-primary"><i class="fas fa-plus"></i> Ajouter un article</a>
    </div>

    <div class="row">
        <div class="col-12">
            @if ($message = Session::get('success'))
                <div class="alert alert-success alert-block my-5">
                    <button type="button" class="close" data-dismiss="alert">×</button>    
                    <strong>{{ $message }}</strong>
                </div>
            @endif 
        </div>
    </div>

    <div class="row mt-5 mx-0"> 
        <div class="col-12">
            <h3>Les articles activés</h3>
        </div>       
        @forelse($activeArticles as $article)          
            <div class="jumbotron py-3 w-100 mt-3 bg-transparent shadow">

                <h5>{{ $article->title }}</h5>
                <p>{{ $article->body }}</p><br>
                <p>{{ $article->listItem1 }}</p>

                <div class="d-inline-flex justify-content-around w-25 align-items-center mt-5 float-right">
                    <a href="{{ route('article.edit', $article) }}" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i> Modifier</a>
                    <a href="{{ route('article.toggleActive', $article) }}" class="btn btn-sm btn-success">{{ $article->is_active ? 'désactivé' : 'activé' }}</a>
                    <a href="{{ route('article.delete', $article) }}" class="btn btn-sm btn-danger"><i class="fas fa-trash-alt"></i> supprimer</a>
                </div>
            </div>            
        @empty                                    
            <div class="jumbotron text-center w-100">
                <p>Pas d'article activé</p>
            </div>                    
        @endforelse
    </div>

    <div class="row mt-5 mx-0"> 
        <div class="col-12">
            <h3>Les articles Désactivées</h3>
        </div>       
        @forelse($unActivatedArticles as $article)          
            <div class="jumbotron py-3 w-100 mt-3">

                <h5>{{ $article->title }}</h5>
                <p>{{ $article->body }}</p><br>
                <p>{{ $article->listItem1 }}</p>

                <div class="d-inline-flex justify-content-around w-25 align-items-center mt-5 float-right">
                    <a href="{{ route('article.edit', $article) }}" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i> Modifier</a>
                    <a href="{{ route('article.toggleActive', $article) }}" class="btn btn-sm btn-success">{{ $article->is_active ? 'désactivé' : 'activé' }}</a>
                    <a href="{{ route('article.delete', $article) }}" class="btn btn-sm btn-danger"><i class="fas fa-trash-alt"></i> supprimé</a>
                </div>
            </div>            
        @empty                                    
            <div class="jumbotron text-center w-100 mt-3">
                <p>Pas d'article désactivé</p>
            </div>                    
        @endforelse
    </div>
</div>
@endsection
