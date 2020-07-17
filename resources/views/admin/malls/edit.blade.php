@extends('admin.index')

@section('content')

<div class="card">
    <div class="card-header">
        <h3 class="card-title">{!! $title !!}</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        {!! Form::open(['url' => aurl('malls/'. $mall->id),
        'method' => 'put', 'files' => true]) !!}

        <div class="form-group">
            {!! Form::label('name_ar',
            trans('admin.name_ar')) !!}
            {!! Form::text('name_ar', $mall->name_ar,
            ['class' =>
            'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('name_en',
            trans('admin.name_en')) !!}
            {!! Form::text('name_en', $mall->name_en,
            ['class' =>
            'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('email',
            trans('admin.email')) !!}
            {!! Form::email('email', $mall->email,
            ['class' =>
            'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('mobile',
            trans('admin.mobile')) !!}
            {!! Form::number('mobile', $mall->mobile,
            ['class' =>
            'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('facebook',
            trans('admin.facebook')) !!}
            {!! Form::text('facebook', $mall->facebook,
            ['class' =>
            'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('twitter',
            trans('admin.twitter')) !!}
            {!! Form::text('twitter', $mall->twitter,
            ['class' =>
            'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('website',
            trans('admin.website')) !!}
            {!! Form::text('website', $mall->website,
            ['class' =>
            'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('contact_name',
            trans('admin.contact_name')) !!}
            {!! Form::text('contact_name', $mall->contact_name_mall,
            ['class' =>
            'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('country_id', trans('admin.country')) !!}
            {!!
            Form::select('country_id',App\Model\Country::pluck('country_name_'.session('lang'),'id')
            ,$mall->country_id,
            ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('address',
            trans('admin.address')) !!}
            {!! Form::text('address', $mall->address,
            ['class' =>
            'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('latitude',
            trans('admin.latitude')) !!}
            {!! Form::text('latitude', $mall->latitude,
            ['class' =>
            'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('longitude',
            trans('admin.longitude')) !!}
            {!! Form::text('longitude', $mall->longitude,
            ['class' =>
            'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('icon', trans('admin.icon')) !!}
            {!! Form::file('icon', ['class'
            =>
            'form-control']) !!}
            @if (!empty($mall->icon))
            <img src="{{Storage::url($mall->icon)}}" height="100px"
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
