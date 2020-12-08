<div wire:ignore.self>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">PUNTO DE VENTA</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarColor01">
            <ul class="navbar-nav mr-auto">
                @isset($salesBox)
                    @php
                        $date = \Carbon\Carbon::parse($salesBox->opened_at)->locale('es');
                    @endphp

                    <li class="nav-item active">
                        Caja abierta: <strong class="text-primary">{{ $date->translatedFormat('j/m/Y - g:i a') }}</strong>
                    </li>
                @endisset
            </ul>
            <form wire:submit.prevent="search()" class="form-inline">
                <input wire:model.lazy="search" class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-info my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>
</div>
