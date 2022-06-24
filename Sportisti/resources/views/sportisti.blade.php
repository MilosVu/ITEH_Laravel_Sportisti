<x-layout>
    <x-slot name='title'>
        Sportisti
    </x-slot>

    <div class="py-5">
        <div class="container">
            <div class="row">
                @for ($i = 0; $i < count($sportisti); $i++) 
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-block">
                            <img src="https://countryflagsapi.com/png/{{$sportisti[$i]->zemlja->naziv}}" style="width: 150px;" />
                            <div style="padding-left: 20px;">

                                <h4 class="card-title">{{$sportisti[$i]->ime}} {{$sportisti[$i]->prezime}}</h4>
                                <h6 class="card-subtitle text-muted">Pol: {{$sportisti[$i]->pol==1?'M':'Z'}}</h6>
                                <p class="card-text p-y-1">Zemlja: {{$sportisti[$i]->zemlja->naziv}}<br />Sport: {{$sportisti[$i]->sport->naziv}}<br />Starost: {{$sportisti[$i]->starost}} godina</p>

                                

                                @if( count($sportisti[$i]->medalje) > 0 )
                                <p class="card-text p-y-1">Medalje: <br /> 
                                @endif

                                @for ($j = 0; $j < count($sportisti[$i]->medalje); $j++)
                                    Takmicenje: {{$sportisti[$i]->medalje[$j]->takmicenje}}, {{$sportisti[$i]->medalje[$j]->godina}}. godine<br />
                                @endfor

                                @if( count($sportisti[$i]->medalje) > 0 )
                                </p> 
                                @endif

                                <a href="/sportisti/{{$sportisti[$i]->id}}/edit" class="card-link">Izmeni</a>
                                <a href="/sportisti/{{$sportisti[$i]->id}}/dodaj-medalju" class="card-link">Dodaj medalju</a>
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


    <div class='col-4'>
        <h3>Kreiraj novog sportistu</h3>
        <form action="/sportisti" method="post">
            @csrf
            <label>Ime</label>
            <input type="text" class='form-control' name='ime'>
            <label>Prezime</label>
            <input type="text" class='form-control' name='prezime'>
            <label>Starost</label>
            <input type="text" class='form-control' name='starost'>
            <label>Pol</label>
            <select class='form-control' name="pol">
                <option value="1">Muski</option>
                <option value="0">Zenski</option>
            </select>
            <label>Zemlja</label>
            <select class='form-control' name="zemlja_id">
                @foreach($zemlje as $zemlja)
                <option value="{{$zemlja->id}}">{{$zemlja->naziv}}</option>
                @endforeach
            </select>
            <label>Sport</label>
            <select class='form-control' name="sport_id">
                @foreach($sportovi as $sport)
                <option value="{{$sport->id}}">{{$sport->naziv}}</option>
                @endforeach
            </select>
            <button class='btn btn-primary form-control mt-2'>Kreiraj</button>
        </form>
    </div>


    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script>
    <script src="https://pingendo.com/assets/bootstrap/bootstrap-4.0.0-alpha.6.min.js"></script>
</x-layout>