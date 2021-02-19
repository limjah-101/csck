@extends('admin.layouts.main')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"><h2>Modifier la page <span>{{ $page->title }}</span> </h2></div>
                    <div class="card-body">
                        <form action="{{ route('page.edit', $page) }}" method="POST">
                            @csrf
                            @method('put')
                            <div class="form-group">
                                <label for="title">Titre</label>
                                <input type="text" class="form-control" name="title" value="{{ $page->title }}">  
                                @error('title')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror         
                            </div>

                            <div class="form-group">
                                <label for="links">Liens</label>
                                <input type="text" class="form-control" name="links" value="{{ $page->links }}">
                                @error('links')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="url">Url</label>
                                <input type="text" class="form-control" name="url" value="{{ $page->url }}">
                                @error('url')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="">Contenu</label>
                                <textarea name="body" cols="30" rows="10" class="form-control">{{ $page->body }}</textarea>
                                @error('body')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>


                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" name="is_active" {{ $page->is_active ? 'checked' : '' }}>
                                <label class="form-check-label">Activer</label>
                            </div>

                            <div class="mt-4">
                                <button type="submit" name="page_edit" class="btn btn-primary mr-3"> <i class="fas fa-check"></i> Modifier</button>
                                <a href="{{ route('page.all') }}" class="btn btn-primary"><i class="fa fa-times"></i> Annuler</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection