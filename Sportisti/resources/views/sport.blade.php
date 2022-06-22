<x-layout>
    <x-slot name='title'>
    Edit sport
    </x-slot>
    <div class='row mt-2 text-center'>
        <h1>Edit {{$sport->naziv}}</h1>
    </div>
    <div class='row mt-2'>
    <div class='col-8'>
    <form action="/sportovi/{{$sport->id}}" method="post">
        @csrf
        <label >ID</label>
        <input type="text" class='form-control' disabled value='{{$sport->id}}'>
        <label >Naziv</label>
        <input type="text" name='naziv' class='form-control' value='{{$sport->naziv}}'>
        <button class='form control btn btn-success mt-4'>Update</button>
    </form>
    </div>
    </div>
</x-layout>
