@extends('admin.layouts.main')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="container">
                <h2>Ajouter un article</h2>

                @if ($message = Session::get('success'))
                    <div class="alert alert-success alert-block mb-5">
                        <button type="button" class="close" data-dismiss="alert">×</button>    
                        <strong>{{ $message }}</strong>
                    </div>
                @endif
                
                <div class="jumbotron mt-4">
                    <form action="{{ route('article.create') }}" method="POST">
                        @csrf
                        <input type="hidden" name="page_id" value="{{ $page->id ?? '' }}">

                        <div class="form-row mb-4">
                            <div class="form-group col-4">
                                <label for="title">Titre</label>
                                <input type="text" class="form-control @error('title') border-danger @enderror" name="title" placeholder="Titre de la page...">                
                                @error('title')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group col-4">
                                <label for="subtitle1">Sous titre</label>
                                <input type="text" class="form-control @error('subtitle1') border-danger @enderror" name="subtitle1" placeholder="sous titre1 ...">
                                @error('subtitle1')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group col-4">
                                <label for="subtitle2">Sous titre</label>
                                <input type="text" class="form-control @error('subtitle2') border-danger @enderror" name="subtitle2" placeholder="sous titre2 ...">
                                @error('subtitle2')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>                        
                        </div>


                       
                        
                        <div class="form-row mb-4">                        
                            <div class="form-group col-3">
                                <label for="listItem1">Paragraphe 1</label>
                                <input type="text" class="form-control @error('listItem1') border-danger @enderror" name="listItem1" placeholder="">
                                @error('listItem1')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group col-3">
                                <label for="listItem2">Paragraphe 2</label>
                                <input type="text" class="form-control @error('listItem2') border-danger @enderror" name="listItem2" placeholder="">
                                @error('listItem2')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group col-3">
                                <label for="listItem3">Paragraphe 3</label>
                                <input type="text" class="form-control @error('listItem3') border-danger @enderror" name="listItem3" placeholder="">
                                @error('listItem3')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group col-3">
                                <label for="listItem4">Paragraphe 4</label>
                                <input type="text" class="form-control @error('listItem4') border-danger @enderror" name="listItem4" placeholder="">
                                @error('listItem4')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group mb-4">
                            <label for="body">Contenu</label>
                            <textarea name="body" cols="30" rows="5" class="form-control @error('body') border-danger @enderror"></textarea>
                            @error('body')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        
                        
                        <div class="form-group col-3">
                            <label for="price">Prix de la licence</label>
                            <input type="text" class="form-control @error('price') border-danger @enderror" name="price">
                            @error('price')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" name="is_active">
                            <label class="form-check-label">Activer</label>
                        </div>
                        
                        
                        <div class="mt-4">
                            <button type="submit" name="article_create" class="btn btn-primary">Ajouter <i class="fas fa-check"></i> </button> 
                            <a href="{{ route('page.show', $page) }}" class="btn btn-primary"><i class="fa fa-times"></i> Annuler</a>                           
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
