@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Productos
                    @can('products.create')
                        <a href="{{route('products.create')}}" class="btn btn-primary btn-sm float-right">Crear</a>
                    @endcan
                </div>

                <div class="card-body">
                    <table class="table table-striped table-hover table-bordered">
                        <thead>
                            <tr>
                                <th width="10px">ID</th>
                                <th>Nombre</th>
                                <th colspan="3">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($products as $product)
                            <tr>
                                <td>{{$product->id}}</td>
                                <td>{{$product->name}}</td>
                                <td class="btn btn-group btn-group-toggle">
                                    @can('products.show')
                                    <a href="{{route('products.show', $product->id)}}" class="btn btn-sm btn-info"><i class="fas fa-eye"></i></a>
                                    @endcan

                                    @can('products.edit')
                                    <a href="{{route('products.edit', $product->id)}}" class="btn btn-sm btn-warning"><i class="fas fa-pencil-alt"></i></a>
                                    @endcan

                                    @can('products.destroy')
                                        {!!Form::open(['route' => ['products.destroy', $product->id], 'method' => 'DELETE']) !!}
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
                    {{ $products->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
