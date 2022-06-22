<x-layout>
    <x-slot name='title'>
        Sportisti
    </x-slot>

    <div class="py-5">
        <div class="container">
            <div class="row">
                @for ($i = 0; $i < count($sportisti); $i++) <div class="col-md-4">
                    <div class="card">
                        <div class="card-block">
                            <img src="https://countryflagsapi.com/png/{{$sportisti[$i]->zemlja->naziv}}" style="width: 150px;" />
                            <div style="padding-left: 20px;">

                                <h4 class="card-title">{{$sportisti[$i]->ime}} {{$sportisti[$i]->prezime}}</h4>
                                <h6 class="card-subtitle text-muted">Pol: {{$sportisti[$i]->pol==1?'M':'Z'}}</h6>
                                <p class="card-text p-y-1">Specijalnost: Atletika<br />Starost: {{$sportisti[$i]->starost}} godina</p>
                                <a href="/sportisti/{{$sportisti[$i]->id}}" class="card-link">Izmeni</a>
                                <a href="/sportisti/{{$sportisti[$i]->id}}/delete" class="card-link">Obrisi</a>
                            </div>
                        </div>
                    </div>
            </div>
            @if( $i % 3 == 2 )
        </div><br>
        <div class="row">
            @endif
            @endfor
        </div><br>
    </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script>
    <script src="https://pingendo.com/assets/bootstrap/bootstrap-4.0.0-alpha.6.min.js"></script>
</x-layout>