@push('scripts')
<script>
    $(document).ready(function() {

    var dataSelected = [
        @foreach(App\Model\Country::all() as $country)
        {
            "text" : "{{ $country->{'country_name_'.lang()} }}",
            "children": [
                @foreach ($country->malls()->get() as $mall)
                {
                    "id": "{{$mall->id}}",
                    "text": "{{ $mall->{'name_' . lang()} }}",
                    "selected": '{{ checkMall($mall->id, $product->id) }}',
                },
                @endforeach
            ],
        },
        @endforeach
    ];

     $('.malls_select2').select2({
        data: dataSelected,
        width: '100%',
        theme: "classic",
        placeholder: '{{ trans('admin.select_mall_or_more') }}',
     });
    });
</script>
@endpush


<div class="tab-pane fade" id="product_shipping_info" role="tabpanel"
    aria-labelledby="product_shipping_info">
    <h4>{{ trans('admin.product_shipping_info') }}</h4>

    <div class="weight_size">
        <center>
            <h5>{{ trans('admin.please_select_department') }}</h5>
        </center>
    </div>

    <div class="row color_trade_manu_data d-none">
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
            <div class="form-group">
                {!! Form::label('color_id', trans('admin.color_id')) !!}
                {!!
                Form::select('color_id',\App\Model\Color::pluck('name_'.
                lang(), 'id'),
                $product->color_id, ['class' => 'form-control',
                'placeholder' => trans('admin.color_without')]) !!}
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
            <div class="form-group">
                {!! Form::label('trade_id', trans('admin.trade_id')) !!}
                {!!
                Form::select('trade_id',\App\Model\TradeMarks::pluck('name_'.
                lang(), 'id'),
                $product->trade_id, ['class' => 'form-control',
                'placeholder' => trans('admin.select_trade')]) !!}
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
            <div class="form-group">
                {!! Form::label('manu_id', trans('admin.manu_id')) !!}
                {!!
                Form::select('manu_id',\App\Model\Manufacture::pluck('name_'.
                lang(), 'id'),
                $product->manu_id, ['class' => 'form-control',
                'placeholder' => trans('admin.select_manu')]) !!}
            </div>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="form-group">
                {!! Form::label('malls', trans('admin.malls')) !!}
                <select class="malls_select2" name="mall[]"
                    multiple="multiple"> </select>
            </div>
        </div>
    </div>
</div>
