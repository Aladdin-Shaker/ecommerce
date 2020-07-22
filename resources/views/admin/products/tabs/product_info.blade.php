<div class="tab-pane fade active show" id="product_info" role="tabpanel"
    aria-labelledby="product_info">
    <h4 class="mt-3 mb-3">{{ trans('admin.product_info') }}</h4>

    <div class="form-group">
        {!! Form::label('title',
        trans('admin.title')) !!}
        {!! Form::text('title', $product->title,
        ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('content',
        trans('admin.content')) !!}
        {!! Form::text('content', $product->content,
        ['class' => 'form-control']) !!}
    </div>

</div>
