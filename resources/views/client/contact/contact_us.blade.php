@extends('client.layouts.main')

@section('content')
     <!--section hero-->
     <section  id="main-hero" >
        <div class="container">
            <div class="row justify-content-center align-items-center">               
            <div class="breadcrumbs">
                        {{ Breadcrumbs::render('contact') }}
                    </div>
                </div>
            </div>            
        </div>
    </section><!--end section hero-->
    <div class="container py-5">
       
        <div class="row mb-5">
            <div class="col-10 px-0">
                <h2>Nous contacter</h2>
            </div>
        </div>
        
        <div class="row">             
            <div class="col-xl-12 px-0 rounded">             
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2731.9962591332446!2d4.863359951696595!3d46.78467807903649!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47f2fcb40076a729%3A0x9e4f16a9aa488e10!2sClub%20de%20cano%C3%AB%20kayak%20de%20Chalon%20sur%20Sa%C3%B4ne!5e0!3m2!1sen!2sfr!4v1613687239541!5m2!1sen!2sfr" width="100%" height="400" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>                                   
            </div>                                                                                                                                                                 
        </div>

        <div class="row mt-5 mb-5">            
            <h2 class="mb-5 text-underline">Laisser un message</h2>
        </div>

        <div class="row mb-xl">
            <div class="col-xl-4 mb-5 mb-md-0">
                <div class="card-body text-center bg-dark h-100 rounded contact-aside">
                    <img class="card-image mt-5" height="100px" src="{{ asset('/assets/logo-y.png') }}" alt="logo image chalon-sur-saône kayak canoê">
                    <p class="mb-2 text-warning mt-5"> example@email.com</p>
                    <a class="mb-2" href="tel:00 33 6 77 02 16 09"><p class="text-warning"> 06 77 02 16 09</p></a>                    
                    <p class="mb-2 text-warning"> 1 Rue d'Amsterdam</p>
                    <p class="mb-2 text-warning">71000 Chalon-sur-Saône</p>
                </div>
            </div>
            <div class="col-xl-7 offset-1 px-0">
                @if ($message = Session::get('success'))
                    <div class="alert bg-success my-5 shadow">
                        <button type="button" class="close" data-dismiss="alert">×</button>    
                        <strong class="text-light">{{ $message }}</strong>
                    </div>
                @endif
                <form action="{{ route('contact') }}" method="POST">
                    @csrf
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="Nom">Nom <span class="text-success">*</span></label>
                            <input name="name" type="text" class="form-control @error('name') border-danger @enderror"  value="{{ old('name') }}">
                            @error('name')
                                <div class="text-danger"><i class="fas fa-exclamation-circle"></i> {{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label for="prénom">Prénom</label>
                            <input name="last_name" type="text" class="form-control @error('last_name') border-danger @enderror"  value="{{ old('last_name') }}">
                            @error('last_name')
                                <div class="text-danger"><i class="fas fa-exclamation-circle"></i> {{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-row mt-5">
                        <div class="form-group col-md-6">
                            <label for="email">Adresse email <span class="text-success">*</span></label>
                            <input name="email" type="email" class="form-control @error('email') border-danger @enderror"  value="{{ old('email') }}">
                            @error('email')
                                <div class="text-danger"><i class="fas fa-exclamation-circle"></i> {{ $message }}</div>
                            @enderror
                        </div>
    
                        <div class="form-group col-md-6">
                            <label for="phone">Téléphone</label>
                            <input name="phone" type="text" class="form-control @error('phone') border-danger @enderror"  value="{{ old('phone') }}">
                            @error('phone')
                                <div class="text-danger"><i class="fas fa-exclamation-circle"></i> {{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group mt-5">
                        <label for="message">Votre message <span class="text-success">*</span></label>
                        <textarea name="message" class="form-control @error('message') border-danger @enderror" rows="5">{{ old('message') }}</textarea>
                        @error('message')
                                <div class="text-danger"><i class="fas fa-exclamation-circle"></i> {{ $message }}</div>
                            @enderror
                    </div>

                    <button type="submit" name="send_message" class="btn btn-warning  mt-4 float-right text-light font-weight-bold shadow">Envoyer</button>
                </form>  
            </div>                       
        </div>
        
    </div>
@endsection

<script>
    document.addEventListener("DOMContentLoaded", function(event) { 
        var scrollpos = localStorage.getItem('scrollpos');
        if (scrollpos) window.scrollTo(0, scrollpos);
    });

    window.onbeforeunload = function(e) {
        localStorage.setItem('scrollpos', window.scrollY);
    };
</script>

