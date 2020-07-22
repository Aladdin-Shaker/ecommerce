<div class="row">
    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
        <div class="form-group">
            {!! Form::label('size_id', trans('admin.size_id')) !!}
            {!! Form::select('size_id', $sizes,$product->size_id,
            ['class'
            =>
            'form-control', 'placeholder' => trans('admin.size_id')]) !!}
        </div>
        <div class="form-group">
            {!! Form::label('size',trans('admin.size')) !!}
            {!! Form::text('size', $product->size,['class' =>
            'form-control',
            'placeholder' =>
            trans('admin.size')])
            !!}
        </div>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
        <div class="form-group">
            {!! Form::label('weight_id', trans('admin.weight_id')) !!}
            {!! Form::select('weight_id', $weights,$product->weight_id,
            ['class' =>
            'form-control', 'placeholder' => trans('admin.weight_id')]) !!}
        </div>
        <div class="form-group">
            {!! Form::label('weight',trans('admin.weight')) !!}
            {!! Form::text('weight', $product->weight,['class' =>
            'form-control',
            'placeholder' =>
            trans('admin.weight')])
            !!}
        </div>
    </div>
</div>
