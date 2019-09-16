@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Roles
                    @can('roles.create')
                        <a href="{{route('roles.create')}}" class="btn btn-primary btn-sm float-right">Crear</a>
                    @endcan
                </div>

                <div class="card-body">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th width="10px">ID</th>
                                <th>Nombre</th>
                                <th colspan="3">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($roles as $role)
                            <tr>
                                <td>{{$role->id}}</td>
                                <td>{{$role->name}}</td>
                                <td class="btn btn-group">
                                    @can('roles.show')
                                    <a href="{{route('roles.show', $role->id)}}" class="btn btn-sm btn-info"><i class="fas fa-eye"></i></a>
                                    @endcan

                                    @can('roles.edit')
                                    <a href="{{route('roles.edit', $role->id)}}" class="btn btn-sm btn-warning"><i class="fas fa-pencil-alt"></i></a>
                                    @endcan

                                    @can('roles.destroy')
                                        {!!Form::open(['route' => ['roles.destroy', $role->id], 'method' => 'DELETE']) !!}
                                            <button class="btn btn-sm btn-danger">
                                                <i class="fas fa-trash-alt"></i>
                                            </button>
                                        {!! Form::close()!!}
                                    @endcan
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $roles->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
