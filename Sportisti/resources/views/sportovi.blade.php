<x-layout>
    <x-slot name='title'>
        Sportisti
    </x-slot>
    <div class='row mt-2'>
        <div class='col-8'>
            <table class='table'>
                <thead>
                    <tr>
                        <th>Naziv sporta</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($sportovi as $sport)
                    <tr>
                        <td><a href="/sportovi/{{$sport->id}}/edit">{{$sport->naziv}}</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div class='row mt-2'>
        <div class='col-4'>
            <h3>Kreiraj novi sport</h3>
            <form action="/sportovi">
                @method('PUT')
                @csrf
                <label>Naziv</label>
                <input type="text" class='form-control' name='naziv'>
                <button class='btn btn-primary form-control mt-2'>Kreiraj</button>
            </form>
        </div>
    </div>
</x-layout>