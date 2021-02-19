@extends('admin.layouts.main')

@section('content')

    <div class="row py-5">
        <div class="col-md-12">
            <div class="container">
                <h2><span class="badge badge-primary text-capitalize">{{ $article ? $article->page->title : ''}}</span></h2>

                @if ($message = Session::get('success'))
                    <div class="alert alert-success alert-block mb-5">
                        <button type="button" class="close" data-dismiss="alert">×</button>    
                        <strong>{{ $message }}</strong>
                    </div>
                @endif
                <!-- <div class="jumbotron mt-5"> -->
                    <form action="{{ route('article.edit',$article) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <input type="hidden" name="page_id" value="{{ $article->page_id ?? '' }}">

                        <div class="form-row my-5 card-body rounded shadow p-3">
                            <div class="form-group col-4">
                                <label class="font-weight-bold mb-3" for="title">Titre</label>
                                <input type="text" class="form-control @error('title') border-danger @enderror" name="title" value="{{ $article->title }}">           
                                @error('title')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            
                            <div class="form-group col-4">
                                <label class="font-weight-bold mb-3" for="subtitle1">Sous titre 1</label>
                                <input type="text" class="form-control @error('subtitle1') border-danger @enderror" name="subtitle1" value="{{ $article->subtitle1 }}">
                                @error('subtitle1')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                                                
                            <div class="form-group col-4">
                                <label class="font-weight-bold mb-3" for="subtitle2">Sous titre 2</label>
                                <input type="text" class="form-control @error('subtitle2') border-danger @enderror" name="subtitle2" value="{{ $article->subtitle2 }}">
                                @error('subtitle2')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>                                                    
                        </div>

                                                                      
                        <div class="form-group card-body rounded shadow p-3 mb-5">
                            <label class="font-weight-bold mb-3" for="body">Contenu</label>
                            <textarea name="body" cols="30" rows="10" class="form-control @error('body') border-danger @enderror">{{ $article->body }}</textarea>
                            @error('body')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        
                        <div class="form-group mb-4 card-body rounded shadow p-3 mb-5">
                            <label class="font-weight-bold mb-3" for="listItem1">Paragraph 1</label>
                            <textarea name="listItem1" cols="30" rows="5" class="form-control @error('listItem1') border-danger @enderror">{{ $article->listItem1 }}</textarea>
                            @error('listItem1')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                                                
                        <div class="form-group mb-4 card-body rounded shadow p-3 mb-5">
                            <label class="font-weight-bold mb-3" for="listItem2">Paragraph 2</label>
                            <textarea name="listItem2" cols="30" rows="5" class="form-control @error('listItem2') border-danger @enderror">{{ $article->listItem2 }}</textarea>
                            @error('listItem2')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                                                                        
                        <div class="form-group mb-4 card-body rounded shadow p-3 mb-5">
                            <label class="font-weight-bold mb-3" for="listItem3">Paragraph 3</label>
                            <textarea name="listItem3" cols="30" rows="5" class="form-control @error('listItem3') border-danger @enderror">{{ $article->listItem3 }}</textarea>
                            @error('listItem3')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                             
                        <div class="d-flex justify-content-between p-3 shadow rounded">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" name="is_active" {{ $article->is_active ? 'checked' : '' }}>
                                <label class="form-check-label font-weight-bold">Activer</label>
                            </div>
                            @if($article->page->title === 'contact')
                                <div class="form-group">
                                    <label class="font-weight-bold mb-3" for="price">Prix de la licence</label>
                                    <input type="text" class="form-control @error('price') border-danger @enderror" name="price" value="{{ $article->price }}">
                                    @error('price')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            @endif                                                           
                        </div>
                                                
                        <div class="mt-4">
                            <button type="submit" name="article_edit" class="btn btn-primary"><i class="fas fa-check"></i>  Modifier </button> 
                            <a href="{{route('page.show', $article->page->id)}}" class="btn btn-primary"><i class="fa fa-times"></i> Annuler</a>                           
                        </div>
                    </form>
                <!-- </div> -->
            </div>
        </div>
    </div>

@endsection
