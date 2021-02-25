@extends('admin.layouts.main')

@section('content')
<div class="container py-5">
   
    <div class="row justify-content-between align-items-center"> 
        <div>
            <h2><span class="badge badge-primary text-capitalize">mes évènements</span></h2>                      
        </div>           
        <a href="{{ route('event.create') }}" class="btn btn-primary"><i class="fas fa-plus"></i> Ajouter un évènement</a>
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
            <h3 class="text-uppercase">évènements activés</h3>
        </div>       
        @forelse($activeEvents as $event)          
            <div class="jumbotron py-3 w-100 mt-3 bg-transparent shadow">

                <h5 class="font-weight-bold text-capitalize">{{ $event->title }}</h5>
                <p class="text-capitalize">{{ $event->subtitle }}</p>
                <p>{{ $event->body }}</p><br>                

                <div class="d-flex justify-content-around w-25 align-items-center mt-5 float-right">
                    <a href="{{ route('event.edit', $event) }}" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i> Modifier</a>
                    <a href="{{ route('event.toggleActive', $event) }}" class="btn btn-sm btn-success">{{ $event->is_active ? 'désactivé' : 'activé' }}</a>
                    <a href="{{ route('event.delete', $event) }}" class="btn btn-sm btn-danger"><i class="fas fa-trash-alt"></i> supprimer</a>
                </div>
            </div>            
        @empty                                    
            <div class="jumbotron text-center w-100">
                <p>Pas d'évènement(s) activé(s)</p>
            </div>                    
        @endforelse
    </div>

    <div class="row mt-5 mx-0"> 
        <div class="col-12">
            <h3 class="text-uppercase">évènement désactivés</h3>
        </div>       
        @forelse($unActiveEvents as $event)          
            <div class="jumbotron py-3 w-100 mt-3">

                <h5 class="font-weight-bold text-capitalize">{{ $event->title }}</h5>
                <p class="font-weight-bold">{{ $event->subtitle }}</p>
                <p>{{ $event->body }}</p><br>                

                <div class="d-flex justify-content-around w-25 align-items-center mt-5 float-right">
                    <a href="{{ route('event.edit', $event) }}" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i> Modifier</a>
                    <a href="{{ route('event.toggleActive', $event) }}" class="btn btn-sm btn-success">{{ $event->is_active ? 'désactivé' : 'activé' }}</a>
                    <a href="{{ route('event.delete', $event) }}" class="btn btn-sm btn-danger"><i class="fas fa-trash-alt"></i> supprimer</a>
                </div>
            </div>            
        @empty                                    
            <div class="jumbotron text-center w-100 mt-3">
                <p>Tous vos évènements sont activés -_-</p>
            </div>                    
        @endforelse
    </div>
</div>
@endsection
