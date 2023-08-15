@extends('layouts.base')
@section('content')
    <div class="creation">
        <div>
            <div class="mb-10">
                <a class="bouttonAfficher" href="{{ route('products.index') }}"> Listes utilisateurs </a>
            </div>
        </div>
        <hr class="horizontal-row">
        <form action=" {{ route('products.store') }} " method="post" enctype="multipart/form-data">
            @csrf
            <div class="groupe">
                <label for="">Nom : </label>
                <input type="text" placeholder="nom" name="name">
            </div>

            <div class="groupe">
                <label for="">Details</label>
                <textarea class="form-control" style="height:150px" name="detail" placeholder="Detail"></textarea>
            </div>

            {{-- <div class="groupe">
                <label for="">Image</label>
                <div class="ims">
                    <img src="" alt="" class="img-product" id="file-preview">
                </div>
                <input type="file" name="image" accept="image/*" onchange="afficheImage(event)">
                @error('image')
                    <small> {{ $message }} </small>
                @enderror
            </div> --}}


            <div>
                <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mt-4 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Soumettre</button>
            </div>
        </form>
    </div>

    {{-- <script>
        function afficheImage(event){
            let entrer = event.target;
            let reader = new FileReader();
            reader.onload = function(){
                let dataUrl = reader.result;
                let output = document.getElementById('file-preview');
                output.src = dataUrl;
            };
            reader.readAsDataURL(entrer.files[0]);
        }
    </script> --}}
@endsection
