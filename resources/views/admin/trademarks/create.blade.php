@extends('admin.index')

@section('content')

<div class="card">
    <div class="card-header">
        <h3 class="card-title">{!! $title !!}</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        {!! Form::open(['url' => aurl('trademarks'), 'files' => true]) !!}
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
            {!! Form::label('logo', trans('admin.logo')) !!}
            {!! Form::file('logo', ['class'
            =>
            'form-control']) !!}
        </div>

        {!! Form::submit(trans('admin.create_trademark'), ['class' => 'btn
        btn-primary']) !!}
        {!! Form::close() !!}
    </div>
    <!-- /.card-body -->
</div>

@endsection
