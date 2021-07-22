<div class="col-xl-3 offset-xl-1 border-left mt-xl mt-lg-3 d-sm-none d-md-block">
    <div class=""  style="min-height: 150px;">
        <h6 class="text-uppercase">Quoi de neuf au CSCK</h6>
        <hr>
    </div>
    <div>
        <div class="row justify-content-between align-items-center px-3">
            <h6 class="text-uppercase">Activités à venir </h6>
            <a href=""><i class="fas fa-exclamation-circle fa-lg text-warning"></i></a> 
        </div>
        <hr>
        @forelse(\App\Event::where(['is_active' => true, 'is_alert' => true])->get() as $event)
            <p class="card-body text-light bg-warning rounded font-weight-bold shadow mb-3">{{ $event->body }}.</p>
        @empty
            <p>Pas d'évènement à venir</p>
        @endforelse
    </div>
</div>