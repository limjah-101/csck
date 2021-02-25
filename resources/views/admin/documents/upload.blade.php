@extends('admin.layouts.main')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-4">            
            <h2 class="mb-5">Ajouter un document</h2> 
            <!-- @if (count($errors) > 0)
            <div class="alert alert-danger alert-dismissible fade show" role="alert">                
                    @foreach ($errors->all() as $error)
                      <small>{{ $error }}</small>
                    @endforeach                
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
          @endif-->
            @if ($message = Session::get('error'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <p>{{ $message }}</p>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif
            <form action="{{ route('document.create') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="title">Nom du fichier</label>
                    <input type="text" class="form-control @error('title') border-danger @enderror" name="title" placeholder="Titre de la page...">                
                    @error('title')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror                            
                </div>

                <div class="form-group">
                    <input type="file" name="document" id="document" value="">
                    @error('document')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                
                <div class="mt-4">
                    <button type="submit" name="document_create" class="btn btn-primary">Ajouter <i class="fas fa-check"></i> </button>
                    <a href="{{ route('document.all') }}" class="btn btn-primary"><i class="fa fa-times"></i> Annuler</a>
                </div>
            </form>
        </div>
    </div>        
</div>
@endsection
