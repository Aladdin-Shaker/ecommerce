@extends('admin.index')

@section('content')

<div class="card">
    <div class="card-header">
        <h3 class="card-title">{!! $title !!}</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        {!! Form::open(['url' => aurl('cities')]) !!}
        <div class="form-group">
            {!! Form::label('city_name_ar',
            trans('admin.city_name_ar')) !!}
            {!! Form::text('city_name_ar', old('city_name_ar'),
            ['class' => 'form-control'] ) !!}
        </div>
        <div class="form-group">
            {!! Form::label('city_name_en',
            trans('admin.city_name_en')) !!}
            {!! Form::text('city_name_en', old('city_name_en'),
            ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('country_id', trans('admin.country')) !!}
            {!!
            Form::select('country_id',App\Model\Country::pluck('country_name_'.session('lang'),'id')
            ,old('country_id'),
            ['class' => 'form-control']) !!}
        </div>
        {!! Form::submit(trans('admin.create_city'), ['class' => 'btn
        btn-primary']) !!}
        {!! Form::close() !!}
    </div>
    <!-- /.card-body -->
</div>

@endsection
