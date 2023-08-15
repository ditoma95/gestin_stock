@section('content')
    <div class="creation">
        <h2>Editer un employé</h2>
        <hr class="horizontal-row">
        <form action=" {{ route('users.store') }} " method="post">
            @method('PUT')
            @csrf

            {{-- {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!} --}}
            {{-- {!! Form::text('email', null, array('placeholder' => 'Email','class' => 'form-control')) !!} --}}
            {{-- {!! Form::password('password', array('placeholder' => 'Password','class' => 'form-control')) !!} --}}
            {{-- {!! Form::password('confirm-password', array('placeholder' => 'Confirm Password','class' => 'form-control')) !!} --}}

            <div>
                <div class="groupe">
                    <label for="">Nom : </label>
                    <input type="text" placeholder="nom" name="name">
                </div>

                <div class="groupe">
                    <label for="">Email : </label>
                    <input type="email" placeholder="email" name="email">
                </div>

                <div class="groupe">
                    <label for="">Password : </label>
                    <input type="password" placeholder="password" name="password">
                </div>

                <div class="groupe">
                    <label for="">Confirm Password:</label>
                    <input type="password" placeholder="confirm-password" name="confirm-password">
                </div>

                <div class="groupe">
                    <label for="">Role :</label>
                    {{-- {!! Form::select('roles[]', $roles,[], array('class' => 'form-control','multiple')) !!} --}}
                    <select name="" id="">
                        <option value=""></option>
                    </select>
                </div>

                <div>
                    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mt-4 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Soumettre</button>
                </div>
            </div>
        </form>
    </div>
@endsection
