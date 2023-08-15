@extends('layouts.base')
@section('content')

    <div class="creation">
        <div>
            <div class="mb-10">
                @can('role-create')
                    <a class="bouttonAfficher" href="{{ route('roles.create') }}"> Crée un role </a>
                @endcan
            </div>
        </div>
        <hr class="horizontal-row">
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg mt-4">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Numéro
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Nom
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Afficher
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Editer
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($roles as $key => $role)
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{-- {{ index + 1 }} --}}
                                {{ $role->index }}
                            </th>
                            <td class="px-6 py-4">
                                {{ $role->name }}
                            </td>
                            <td class="px-6 py-4">
                                <a href="{{ route('roles.show',$role->id) }}">Afficher</a>
                            </td>

                            <td class="px-6 py-4">
                                @can('role-edit')
                                <a href="{{ route('roles.edit',$role->id) }}">Editer</a>
                                @endcan
                                @can('role-delete')
                                    {{-- {!! Form::open(['method' => 'DELETE','route' => ['roles.destroy', $role->id],'style'=>'display:inline']) !!}
                                        {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                                    {!! Form::close() !!} --}}
                                @endcan
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

{{-- {!! $roles->render() !!} --}}

@endsection
