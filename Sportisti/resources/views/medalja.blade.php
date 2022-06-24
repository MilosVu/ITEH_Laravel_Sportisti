<x-layout>
    <x-slot name='title'>
        Sportista
    </x-slot>

    <div class="main">
        <h2>Dodavanje medalje</h2>
        <div class="card">
            <div class="card-body">
                <i class="fa fa-pen fa-xs edit"></i>
                <form action="/sportisti/{id}/dodaj-medalju" method="post">
                @csrf
                    <table>
                        <tbody>
                            <tr>
                                <td>Ime</td>
                                <td>{{$sportista->ime}}</td>
                            </tr>
                            <tr>
                                <td>Prezime</td>
                                <td>{{$sportista->prezime}}</td>
                            </tr>
                            <tr>
                                <td>Starost</td>
                                <td>{{$sportista->starost}}</td>
                            </tr>
                            <tr>
                                <td>Pol</td>
                                <td>{{$sportista->pol}}</td>
                            </tr>
                            <tr>
                                <td>Zemlja</td>
                                <td>{{$sportista->zemlja->naziv}}</td>
                            </tr>
                            <tr>
                                <td>Sport</td>
                                <td>{{$sportista->sport->naziv}}</td>
                            </tr>
                            <hr />
                            <tr>
                                <td>Sportista Id</td>
                                <td><input type="text" class='form-control' name='sportista_id' value="{{$sportista->id}}" readonly></td>
                            </tr>
                            <tr>
                                <td>Takmicenje</td>
                                <td><input type="text" class='form-control' name='takmicenje'></td>
                            </tr>
                            <tr>
                                <td>Godina</td>
                                <td><input type="text" class='form-control' name='godina'></td>
                            </tr>
                        </tbody>
                    </table>
                    <button class='btn btn-primary form-control mt-2'>Dodaj odlicje</button>
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