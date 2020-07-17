@extends('admin.index')

@section('content')

<div class="card">
    <div class="card-header">
        <h3 class="card-title">{!! $title !!}</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        {!! Form::open(['url' => aurl('shipping/'. $shipping->id),
        'method' => 'put', 'files' => true]) !!}

        <div class="form-group">
            {!! Form::label('name_ar',
            trans('admin.name_ar')) !!}
            {!! Form::text('name_ar', $shipping->name_ar,
            ['class' =>
            'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('name_en',
            trans('admin.name_en')) !!}
            {!! Form::text('name_en', $shipping->name_en,
            ['class' =>
            'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('user_id', trans('admin.owner_id'))
            !!}
            {!! Form::select('user_id', App\User::where('level',
            'company')->pluck('name', 'id'), $shipping->user_id,
            ['class' => 'form-control', 'placeholder' => '.....'],
            )
            !!}
        </div>
        <div class="form-group">
            {!! Form::label('latitude',
            trans('admin.latitude')) !!}
            {!! Form::text('latitude', $shipping->lat,
            ['class' =>
            'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('longitude',
            trans('admin.longitude')) !!}
            {!! Form::text('longitude', $shipping->lng,
            ['class' =>
            'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('icon', trans('admin.icon')) !!}
            {!! Form::file('icon', ['class'
            =>
            'form-control']) !!}
            @if (!empty($shipping->icon))
            <img src="{{Storage::url($shipping->icon)}}" height="100px"
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
