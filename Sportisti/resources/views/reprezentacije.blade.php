<x-layout>
    <x-slot name='title'>
        Repreznetacije
    </x-slot>
    <div class='text-center'>
        <h1>Pretraga reprezentacija</h1>
    </div>
    <div class='row mt-2 text-center'>
        <div class='col-12'>
            <select class='form-control' id="zemlje">
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
                        <th>Ime i prezime</th>
                        <th>Pol</th>
                        <th>Starost</th>
                        <th>Sport</th>
                        <th>Zemlja</th>
                    </tr>
                </thead>
                <tbody id='reprezentacija'>


                </tbody>
            </table>

        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>


    <script>
        let reprezentativci = [];
        $(document).ready(function() {

            $('#zemlje').change(function() {

                $.getJSON('http://127.0.0.1:8000/api/reprezentacije/' + $('#zemlje').val(), function(data) {

                    console.log(data["reprezentacija"]);
                    console.log(data["reprezentacija"]);
                    console.log( data["reprezentacija"][0]);
                    console.log(typeof data["reprezentacija"][0]);
                    
                    console.log( data["reprezentacija"].length);

                    // if (data["reprezentacija"] = "") alert("Nema sportista za unetu zemlju");

                    $('#content').attr('hidden', false);
                    // $('#reprezentacija').html('');

                    let out = "";
                    for (let i = 0; i < data["reprezentacija"].length; i++) {

                        out += "<tr>";

                        out += '<td>' + data["reprezentacija"][i].ime + ' ' + data["reprezentacija"][i].prezime + '</td>';
                        out += '<td>' + (data["reprezentacija"][i].pol == 1?"M" : "Z") + '</td>';
                        out += '<td>' + data["reprezentacija"][i].starost + '</td>';
                        out += '<td>' + data["reprezentacija"][i].sport.naziv + '</td>';
                        out += '<td>' + data["reprezentacija"][i].zemlja.naziv + '</td>';
                        
                        out += "</tr>";
                    }

                    console.log(out);

                    document.getElementById("reprezentacija").innerHTML = out;


                
                });

            })
        })
    </script>

</x-layout>