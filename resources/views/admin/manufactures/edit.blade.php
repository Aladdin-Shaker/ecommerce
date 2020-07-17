@extends('admin.index')

@section('content')

<div class="card">
    <div class="card-header">
        <h3 class="card-title">{!! $title !!}</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        {!! Form::open(['url' => aurl('manufactures/'. $manufacture->id),
        'method' => 'put', 'files' => true]) !!}

        <div class="form-group">
            {!! Form::label('name_ar',
            trans('admin.name_ar')) !!}
            {!! Form::text('name_ar', $manufacture->name_ar,
            ['class' =>
            'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('name_en',
            trans('admin.name_en')) !!}
            {!! Form::text('name_en', $manufacture->name_en,
            ['class' =>
            'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('email',
            trans('admin.email')) !!}
            {!! Form::email('email', $manufacture->email,
            ['class' =>
            'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('mobile',
            trans('admin.mobile')) !!}
            {!! Form::number('mobile', $manufacture->mobile,
            ['class' =>
            'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('facebook',
            trans('admin.facebook')) !!}
            {!! Form::text('facebook', $manufacture->facebook,
            ['class' =>
            'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('twitter',
            trans('admin.twitter')) !!}
            {!! Form::text('twitter', $manufacture->twitter,
            ['class' =>
            'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('website',
            trans('admin.website')) !!}
            {!! Form::text('website', $manufacture->website,
            ['class' =>
            'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('contact_name',
            trans('admin.contact_name')) !!}
            {!! Form::text('contact_name', $manufacture->contact_name,
            ['class' =>
            'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('address',
            trans('admin.address')) !!}
            {!! Form::text('address', $manufacture->address,
            ['class' =>
            'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('latitude',
            trans('admin.latitude')) !!}
            {!! Form::text('latitude', $manufacture->latitude,
            ['class' =>
            'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('longitude',
            trans('admin.longitude')) !!}
            {!! Form::text('longitude', $manufacture->longitude,
            ['class' =>
            'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('icon', trans('admin.icon')) !!}
            {!! Form::file('icon', ['class'
            =>
            'form-control']) !!}
            @if (!empty($manufacture->icon))
            <img src="{{Storage::url($manufacture->icon)}}" height="100px"
                width="100px" />
            @endif
        </div>


        {!! Form::submit(trans('admin.save'), ['class' => 'btn
        btn-primary']) !!}
        {!! Form::close() !!}
    </div>
    <!-- /.card-body -->
</div>

@endsection
