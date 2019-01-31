@if(\Illuminate\Support\Facades\Session::get('Admin') == "Admin")
    admin
@else
    not admin
@endif