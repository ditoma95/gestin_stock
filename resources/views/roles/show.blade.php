@extends('layouts.base')
@section('content')
    <div class="creation">
        <div>
            <div>
                <div class="bouttonAfficher">
                    <a  href="{{ route('roles.index') }}"> Listes des roles </a>
                </div>
            </div>
            <div>
                <p class="mb-4 font-bold text-lg text-red-600">Role :
                    {{ $role->name }}
                </p>
            </div>
            <div>
                <p class="mb-4 font-bold text-xl text-blue-700 flex-wrap">Permissions :
                @if(!empty($rolePermissions))
                    @foreach($rolePermissions as $per)
                        <label>{{ $per->name }},</label>
                    @endforeach
                @endif
                </p>
            </div>
        </div>
    </div>
@endsection
