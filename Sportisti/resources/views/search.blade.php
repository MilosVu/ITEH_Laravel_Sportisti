<x-layout>
    <x-slot name='title'>
        Repreznetacije
    </x-slot>
    <div class='text-center'>
        <h1>Pretraga reprezentacija</h1>
    </div>
    <div class='row mt-2 text-center'>
        <div class='col-12'>
            <select class='form-control' id="political_party">
                <option value="0">Izaberite zemlju</option>
                @foreach($zemlje as $zemlja)
                <option value="{{$zemlja->id}}">{{$zemlja->naziv}}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class='row mt-2'>
        <div hidden id='content' class='col-12'>
            <table class='table'>
                <thead>
                    <tr>
                        <th>Ime</th>
                        <th>Prezime</th>
                        <th>Pol</th>
                        <th>Sport</th>
                        <th>Starost</th>
                        <th>Zemlja</th>
                    </tr>
                </thead>
                <tbody id='sportisti'>


                </tbody>
            </table>

        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
   
</x-layout>