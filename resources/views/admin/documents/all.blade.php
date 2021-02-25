@extends('admin.layouts.main')

@section('content')
    <div class="container py-5">
        <div class="row justify-content-between align-items-center">            
            <h2>Mes Documents</h2>
            <a href="{{ route('document.create') }}" class="btn btn-primary"><i class="fas fa-plus"></i> Ajouter une document</a>
        </div> 
        
        <div class="row">
            <div class="col-md-8">  
            @if ($message = Session::get('success') || $message = Session::get('error'))
                <div class="alert alert-success alert-dismissible fade show" role="alert"">
                    <strong>{{ $message }}</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
          @endif          
                @foreach(\App\FileUpload::all() as $file)
                    <p>{{ $file->title }}</p>
                    <a href="{{ route('document.download', $file) }}">Téléchager</a>
                @endforeach
            </div>
        </div>        
    </div>
@endsection
