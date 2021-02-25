@extends('admin.layouts.main')

@section('content')
    <div class="container py-5">
        <div class="row justify-content-between align-items-center mb-5">            
            <h2>Mes Documents</h2>
            <a href="{{ route('document.create') }}" class="btn btn-primary"><i class="fas fa-plus"></i> Ajouter une document</a>
        </div> 
        
        <div class="row">
            <div class="col-md-8">  
            @if ($message = Session::get('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert"">
                    <strong>{{ $message }}</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @elseif($message = Session::get('error'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert"">
                    <strong>{{ $message }}</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif          
                @forelse(\App\FileUpload::all() as $file)   
                    <div class="card-body w-100 shadow mb-3">
                        <p class="mb-2">{{ $file->title }}</p>
                        <div class="d-flex">
                            <h5><a class="badge badge-primary mr-2" href="{{ route('document.download', $file) }}">Téléchager</a></h5>
                            <!-- <a href="{{ route('document.delete', $file) }}">Supprimé</a> -->
                            <h5><a class="badge badge-danger" href="#" data-toggle="modal" data-target="#file-delete-{{ $file->id }}">Supprimer</a></h5>
                        </div>
                    </div>             

                    <!-- Modal -->
                    <div class="modal fade" id="file-delete-{{ $file->id }}" tabindex="-1" role="dialog"  aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                            <div class="modal-header border-bottom-0">                                
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body border-bottom-0 d-inline-flex align-items-center">
                                <i class="fas fa-exclamation-circle text-success fa-lg mr-3"></i> <p>Supprimer le fichier <span class="font-weight-bold text-success">{{ $file->title }}</span></p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                                <a  href="{{ route('document.delete', $file) }}" class="btn btn-success">Supprimé</a>
                            </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="card-body w-100 shadow text-center">
                        <p class="mb-2">Pas de document disponible</p>                        
                    </div>
                @endforelse
            </div>
        </div>       
    </div>
@endsection
