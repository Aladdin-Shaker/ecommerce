@extends('admin.index')

@section('content')

<div class="card">
    <div class="card-header">
        <h3 class="card-title">{!! $title !!}</h3>
    </div>

    <!-- /.card-header -->
    <div class="card-body">
        {!! Form::open(['url' => aurl('shipping'), 'files' => true])
        !!}
        <div class="form-group">
            {!! Form::label('name_ar',
            trans('admin.name_ar')) !!}
            {!! Form::text('name_ar', old('name_ar'),
            ['class' =>
            'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('name_en',
            trans('admin.name_en')) !!}
            {!! Form::text('name_en', old('name_en'),
            ['class' =>
            'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('user_id', trans('admin.owner_id'))
            !!}
            {!! Form::select('user_id', App\User::where('level',
            'company')->pluck('name', 'id'), old('user_id'),
            ['class' => 'form-control', 'placeholder' => '.....'],
            )
            !!}
        </div>
        <div class="form-group">
            {!! Form::label('latitude',
            trans('admin.latitude')) !!}
            {!! Form::text('latitude', old('lat'),
            ['class' =>
            'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('longitude',
            trans('admin.longitude')) !!}
            {!! Form::text('longitude', old('lng'),
            ['class' =>
            'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('icon', trans('admin.icon')) !!}
            {!! Form::file('icon', ['class'
            =>
            'form-control']) !!}
        </div>

        {!! Form::submit(trans('admin.create_shipping'), ['class' =>
        'btn
        btn-primary']) !!}
        {!! Form::close() !!}
    </div>
    <!-- /.card-body -->
</div>

@endsection
