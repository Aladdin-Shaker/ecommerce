@extends('admin.index')

@section('content')

<div class="card">
    <div class="card-header">
        <h3 class="card-title">{!! $title !!}</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        {!! Form::open(['url' => aurl('countries'), 'files' => true]) !!}
        <div class="form-group">
            {!! Form::label('country_name_ar',
            trans('admin.country_name_ar')) !!}
            {!! Form::text('country_name_ar', old('country_name_ar'),
            ['class' =>
            'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('country_name_en',
            trans('admin.country_name_en')) !!}
            {!! Form::text('country_name_en', old('country_name_en'),
            ['class' =>
            'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('mob',
            trans('admin.mob')) !!}
            {!! Form::text('mob', old('mob'),
            ['class' =>
            'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('code',
            trans('admin.country_code')) !!}
            {!! Form::text('code', old('country_code'),
            ['class' =>
            'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('logo', trans('admin.country_flag')) !!}
            {!! Form::file('logo', ['class'
            =>
            'form-control']) !!}
        </div>

        {!! Form::submit(trans('admin.create_country'), ['class' => 'btn
        btn-primary']) !!}
        {!! Form::close() !!}
    </div>
    <!-- /.card-body -->
</div>

@endsection
