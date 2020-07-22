@push('scripts')
<script>
    $('.datepicker').datepicker({
        rtl: '{{ session('lang') == 'ar'?true:false }}',
        language: '{{ session('lang') }}',
        format: 'yyyy-mm-dd',
        autoclose: false,
        clearBtn: true,
        toggleActive: true,
        todayHighlight: true,
        todayBtn: true
    });

    $(document).on('change', '.status', function() {
        var status =  $('.status option:selected').val();
        if(status == 'refused'){
            $('.reason').removeClass('d-none');
        }
        else {
            $('.reason').addClass('d-none');
        }
    });
</script>
@endpush

<div class="tab-pane fade" id="product_setting" role="tabpanel"
    aria-labelledby="product_setting">
    <h4 class="mt-3 mb-3">{{ trans('admin.product_setting') }}</h4>
    <div class="row">


        <div class="form-group col-lg-3 col-md-3 col-sm-12 col-xs-12">
            {!! Form::label('price',trans('admin.price')) !!}
            {!! Form::text('price', $product->price, ['class' =>
            'form-control', 'placeholder' => trans('admin.price')]) !!}
        </div>

        <div class="form-group col-lg-3 col-md-3 col-sm-12 col-xs-12">
            {!! Form::label('end_at',trans('admin.stock')) !!}
            {!! Form::text('stock', $product->stock, ['class' =>
            'form-control', 'placeholder' => trans('admin.stock')]) !!}
        </div>

        <div class="form-group col-lg-3 col-md-3 col-sm-12 col-xs-12">
            {!! Form::label('start_at',trans('admin.start_at')) !!}
            {!! Form::text('start_at', $product->start_at, ['class' =>
            'form-control datepicker', 'placeholder' =>
            trans('admin.start_at')]) !!}
        </div>

        <div class="form-group col-lg-3 col-md-3 col-sm-12 col-xs-12">
            {!! Form::label('end_at',trans('admin.end_at')) !!}
            {!! Form::text('end_at', $product->end_at, ['class' =>
            'form-control datepicker', 'placeholder' =>
            trans('admin.end_at')]) !!}
        </div>

        <div class="clearfix"></div>
        <hr />

        <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
            {!! Form::label('price_offer',trans('admin.price_offer')) !!}
            {!! Form::text('price_offer', $product->price_offer, ['class'
            =>
            'form-control', 'placeholder' => trans('admin.price_offer')])
            !!}
        </div>

        <div class="form-group col-lg-6 col-md-6 col-sm-12 col-xs-12">
            {!! Form::label('start_offer_at',trans('admin.start_offer_at'))
            !!}
            {!! Form::text('start_offer_at', $product->start_offer_at,
            ['class'
            =>
            'form-control datepicker', 'placeholder' =>
            trans('admin.start_offer_at')])
            !!}
        </div>

        <div class="form-group col-lg-6 col-md-6 col-sm-12">
            {!! Form::label('end_offer_at',trans('admin.end_offer_at')) !!}
            {!! Form::text('end_offer_at', $product->end_offer_at, ['class'
            =>
            'form-control datepicker', 'placeholder' =>
            trans('admin.end_offer_at')])
            !!}
        </div>

        <div class="clearfix"></div>
        <hr />

        <div class="form-group col-lg-12 col-md-12 col-sm-12 status">
            {!! Form::label('status',trans('admin.status')) !!}
            {!! Form::select('status',['pending' => trans('admin.pending'),
            'refused' => trans('admin.refused'), 'active' =>
            trans('admin.active')] ,$product->status, ['class'
            =>
            'form-control ', 'placeholder' => trans('admin.status')]) !!}
        </div>

        <div
            class="form-group col-lg-12 col-md-12 col-sm-12 reason {{ $product->status != 'refused' ? 'd-none' : '' }}">
            {!! Form::label('reason',trans('admin.refused_reason')) !!}
            {!! Form::textarea('reason' ,$product->reason, ['class'
            =>
            'form-control', 'placeholder' =>
            trans('admin.refused_reason')])
            !!}
        </div>

    </div>
</div>
