@extends('layouts.base')
@section('content')
    <div class="creation">
        <div class="mb-10">
            <a class="bouttonAfficher" href="{{ route('roles.index') }}"> Listes des roles </a>
        </div>
        <hr class="horizontal-row">

        <form action=" {{ route('roles.store') }} " method="post">
            @csrf
            <div class="mb-2">
                <strong>Créer un nouveau role</strong>
            </div>

            <div class=" groupe ">
                <label for="">Nom</label>
                <input type="text" name="name" placeholder="nom">
            </div>

            <div>
                <strong class="mb-2">Assigner des Permissions:</strong>
                <div class="box">
                    @foreach($permission as $value)
                        <input type="checkbox" name="permission[]" value="{{ $value->id }}" class="name">
                        <h3>{{ $value->name }}</h3>
                    @endforeach
                </div>
            </div>

            <div>
                <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mt-4 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Soumettre</button>
            </div>
        </form>
    </div>
@endsection
