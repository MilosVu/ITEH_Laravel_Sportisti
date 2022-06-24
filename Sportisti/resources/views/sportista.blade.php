<x-layout>
    <x-slot name='title'>
        Sportista
    </x-slot>

    <div class="main">
        <h2>Izmena sportiste</h2>
        <div class="card">
            <div class="card-body">
                <i class="fa fa-pen fa-xs edit"></i>
                <form action="/sportisti/{{$sportista->id}}/edit" method="post">
                @csrf
                    <table>
                        <tbody>
                            <tr>
                                <td>Id</td>
                                <td><input type="text" class='form-control' name='ime' disabled value='{{$sportista->id}}'></td>
                            </tr>
                            <tr>
                                <td>Ime</td>
                                <td><input type="text" class='form-control' name='ime' value='{{$sportista->ime}}'></td>
                            </tr>
                            <tr>
                                <td>Prezime</td>
                                <td><input type="text" class='form-control' name='prezime'  value='{{$sportista->prezime}}'></td>
                            </tr>
                            <tr>
                                <td>Starost</td>
                                <td><input type="text" class='form-control' name='starost' value='{{$sportista->starost}}'></td>
                            </tr>
                            <tr>
                                <td>Pol</td>
                                <td>
                                    <select class='form-control' name="pol">
                                        <option value="1">Muski</option>
                                        <option value="0">Zenski</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Zemlja</td>
                                <td>
                                    <select class='form-control' name="zemlja_id">
                                        @foreach($zemlje as $zemlja)
                                        <option value="{{$zemlja->id}}">{{$zemlja->naziv}}</option>
                                        @endforeach
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Sport</td>
                                <td>
                                    <select class='form-control' name="sport_id">
                                        @foreach($sportovi as $sport)
                                        <option value="{{$sport->id}}">{{$sport->naziv}}</option>
                                        @endforeach
                                    </select>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <button class='btn btn-primary form-control mt-2'>Sacuvaj izmene</button>
                </form>
            </div>
        </div>

    </div>

</x-layout>

<style>
    .main {
        margin-top: 2%;
        margin-left: 29%;
        font-size: 28px;
        padding: 0 10px;
        width: 58%;
    }

    .main h2 {
        color: #333;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        font-size: 24px;
        margin-bottom: 10px;
    }

    .main .card {
        background-color: #fff;
        border-radius: 18px;
        box-shadow: 1px 1px 8px 0 grey;
        height: auto;
        margin-bottom: 20px;
        padding: 20px 0 20px 50px;
    }

    .main .card table {
        border: none;
        font-size: 16px;
        height: 270px;
        width: 80%;
    }

    .edit {
        position: absolute;
        color: #e7e7e8;
        right: 14%;
    }

    /* End */
</style>