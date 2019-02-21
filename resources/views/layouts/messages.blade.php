@if(count($errors) > 0)
    <div class="w-100">
        <div class="alert alert-danger" style="background-color: #f66e84">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    </div>
@endif



@if(Session::has('create'))
    <div class="alert alert-success">
        <h6>{{session('create')}}</h6>
    </div>
@endif
