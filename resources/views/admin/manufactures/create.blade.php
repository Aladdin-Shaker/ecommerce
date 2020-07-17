@extends('admin.index')

@section('content')

<div class="card">
    <div class="card-header">
        <h3 class="card-title">{!! $title !!}</h3>
    </div>

    <!-- /.card-header -->
    <div class="card-body">
        {!! Form::open(['url' => aurl('manufactures'), 'files' => true])
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
            {!! Form::label('email',
            trans('admin.email')) !!}
            {!! Form::email('email', old('email'),
            ['class' =>
            'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('mobile',
            trans('admin.mobile')) !!}
            {!! Form::number('mobile', old('mobile'),
            ['class' =>
            'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('facebook',
            trans('admin.facebook')) !!}
            {!! Form::text('facebook', old('facebook'),
            ['class' =>
            'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('twitter',
            trans('admin.twitter')) !!}
            {!! Form::text('twitter', old('twitter'),
            ['class' =>
            'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('website',
            trans('admin.website')) !!}
            {!! Form::text('website', old('website'),
            ['class' =>
            'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('contact_name',
            trans('admin.contact_name')) !!}
            {!! Form::text('contact_name', old('contact_name'),
            ['class' =>
            'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('address',
            trans('admin.address')) !!}
            {!! Form::text('address', old('address'),
            ['class' =>
            'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('lat',
            trans('admin.latitude')) !!}
            {!! Form::text('lat', old('lat'),
            ['class' =>
            'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('lng',
            trans('admin.longitude')) !!}
            {!! Form::text('lng', old('lng'),
            ['class' =>
            'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('icon', trans('admin.icon')) !!}
            {!! Form::file('icon', ['class'
            =>
            'form-control']) !!}
        </div>

        {!! Form::submit(trans('admin.create_manufacture'), ['class' =>
        'btn
        btn-primary']) !!}
        {!! Form::close() !!}
    </div>
    <!-- /.card-body -->
</div>

@endsection
