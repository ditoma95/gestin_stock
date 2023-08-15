@extends('layouts.base')
@section('content')
    <div class="creation">
        <div class="mb-6">
            @can('product-create')
            <a  class="bouttonAfficher" href="{{ route('products.create') }}"> Create New Product </a>
            @endcan
        </div>

        <hr class="horizontal-row">
        <div class="flex items-center gap-6 mt-8 flex-wrap relative ">
            @foreach ($products as $product)
                <div class="bg-white w-[15rem] h-[20rem] rounded-lg">
                    <div class="bg-red-950 w-full h-[12rem] object-cover overflow-hidden">
                        <img class="w-full h-full" src="" alt="">
                    </div>

                    <div class="p-3">
                        <h1 class="text-center">{{ $product->name }} </h1>

                        <div class="text">
                            {{ $product->detail }}
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        {{ $products->links() }}
    </div>

	        {{-- <td>
                <form action="{{ route('products.destroy',$product->id) }}" method="POST">
                    <a class="btn btn-info" href="{{ route('products.show',$product->id) }}">Show</a>
                    @can('product-edit')
                    <a class="btn btn-primary" href="{{ route('products.edit',$product->id) }}">Edit</a>
                    @endcan


                    @csrf
                    @method('DELETE')
                    @can('product-delete')
                    <button type="submit">Delete</button>
                    @endcan
                </form>
	        </td> --}}
	    </tr>



@endsection
