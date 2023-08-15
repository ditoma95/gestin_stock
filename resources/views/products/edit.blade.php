@extends('layouts.base')
@section('content')
    <div class="row">
        <div>
            <div>
                <h2>Edit Product</h2>
            </div>
            <div>
                <a href="{{ route('products.index') }}"> Back </a>
            </div>
        </div>
    </div>


    <form action="{{ route('products.update',$product->id) }}" method="POST">
    	@csrf
        @method('PUT')

        <div class="row">
		    <div>
		        <div class="form-group">
		            <strong>Name:</strong>
		            <input type="text" name="name" value="{{ $product->name }}" >
		        </div>
		    </div>
		    <div>
		        <div class="form-group">
		            <strong>Detail:</strong>
		            <textarea class="form-control" name="detail">{{ $product->detail }}</textarea>
		        </div>
		    </div>
		    <div>
		      <button type="submit">Submit</button>
		    </div>
		</div>
    </form>
@endsection

