@if (count($errors->all()) > 0)
<div class="alert alert-danger">
    @foreach ($errors->all() as $error)
    <li>{{$error}}</li>
    @endforeach
</div>
@endif

@if (session()->has('success'))
<div class="alert alert-success">
    <h5>{{session('success')}}</h5>
</div>
@endif

@if (session()->has('danger'))
<div class="alert alert-danger">
    <h5>{{session('danger')}}</h5>
</div>
@endif
