@extends('admin.layouts.main')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h2>Modifier l'évènement</h2></div>
                <div class="card-body">
                    <form action="{{ route('event.edit', $event) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="title">Titre</label>
                            <input type="text" class="form-control @error('title') border-danger @enderror" name="title" value="{{ $event->title }}">                
                            @error('title')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="subtitle">Sous titre</label>
                            <input type="text" class="form-control @error('subtitle') border-danger @enderror" name="subtitle" value="{{ $event->subtitle }}">
                            @error('subtitle')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        
                        <div class="form-group">
                            <label for="">Contenu</label>
                            <textarea name="body" cols="30" rows="10" class="form-control @error('body') border-danger @enderror">
                                {{ $event->body }}
                            </textarea>
                            @error('body')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" name="is_alert" {{ $event->is_alert ? 'checked' : '' }}>
                            <label class="form-check-label">Alert</label>
                        </div>

                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" name="is_active" {{ $event->is_alert ? 'checked' : '' }}>
                            <label class="form-check-label">Activer</label>
                        </div>
                        
                        <div class="mt-4">
                            <button type="submit" name="event_edit" class="btn btn-primary">Ajouter <i class="fas fa-check"></i> </button>
                            <a href="{{ route('event.all') }}" class="btn btn-primary"><i class="fa fa-times"></i> Annuler</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
