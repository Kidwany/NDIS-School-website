@if(count($errors) > 0)
    <div class="container-fluid">
        <div class="alert alert-danger" style="background-color: #f66e84">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    </div>
@endif



@if(Session::has('created'))
    <div class="alert alert-success">
        <h6>{{session('created')}}</h6>
    </div>
@endif
