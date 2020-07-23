@extends('admin.index')

@section('content')

<link
    href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css"
    rel="stylesheet" />
@push('scripts')
<script
    src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js">
</script>

<script>
    $(document).ready(function() {

        // select2
        $('.js-example-basic-single').select2();

        // save and continue
        $(document).on('click', '.save_and_continue', function() {
            var formData = $('#product_form').serialize();
            $.ajax({
                url: '{{ aurl('products/' . $product->id) }}',
                dataType: 'json',
                type: 'post',
                data: formData,
                beforeSend: function() {
                    $('.spinner_save_continue').removeClass('d-none');
                    $('.valiadate_message').html('');
                    $('.error_message').addClass('d-none');
                    $('.success_message').html('').addClass('d-none');
                },
                success: function(data) {
                   if(data.status == true){
                        $('.spinner_save_continue').addClass('d-none');
                        $('.success_message').html('<h2>' + data.message + '</h2>').removeClass('d-none');
                   }
                },
                error(response) {
                    $('.spinner_save_continue').addClass('d-none');

                    varr = error_list = '';
                  //   console.log(response.errors);
                    $.each(response.responseJSON.errors, function(index, value) {
                        error_list += '<li>' + value + '</li>';
                    });

                    $('.validate_message').html(error_list);
                    $('.error_message').removeClass('d-none');
                },
            });
            return false;
        });

        // copy product
        $(document).on('click', '.product_copy', function() {
            $.ajax({
                url: '{{ aurl('products/copy/' . $product->id) }}',
                dataType: 'json',
                type: 'POST',
                data: {_token: '{{ csrf_token() }}'},
                beforeSend: function() {
                    $('.spinner_copy').removeClass('d-none');
                    $('.valiadate_message').html('');
                    $('.error_message').addClass('d-none');
                    $('.success_message').html('').addClass('d-none');
                },
                success: function(data) {
                   if(data.status == true){
                        $('.spinner_spinner_copy').addClass('d-none');
                        $('.success_message').html('<h2>' + data.message + '</h2>').removeClass('d-none');
                   }
                   setTimeout(function() {
                       window.location.href = '{{ aurl('products') }}/' + data.id + '/edit';
                   }, 3000);
                },
                error(response) {
                    $('.spinner_spinner_copy').addClass('d-none');

                    varr = error_list = '';
                    $.each(response.responseJSON.errors, function(index, value) {
                        error_list += '<li>' + value + '</li>';
                    });

                    $('.validate_message').html(error_list);
                    $('.error_message').removeClass('d-none');
                },
            });
            return false;
        });
    });
</script>
@endpush

<div class="card">
    <div class="card-header">
        <h3 class="card-title">{!! $title !!}</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        {!! Form::open(['url' => aurl('products'), 'method' => 'put',
        'files' => true, 'id' => 'product_form']) !!}

        {{-- error message --}}
        <div class="error_message alert alert-danger d-none" role="alert">
            <ul class="validate_message">

            </ul>
        </div>

        {{-- success message --}}
        <div class="success_message alert alert-success d-none"
            role="alert">
        </div>

        {{-- buttons --}}
        <div class="mb-3">
            <a href="#" class="btn btn-primary">{{ trans('admin.save') }}<i
                    class="far fa-save m-1"></i></a>
            <a href="#"
                class="btn btn-success save_and_continue">{{ trans('admin.save_continue') }}
                <i class="far fa-share-square  m-1"></i>
                <i
                    class="fa fa-spin fa-spinner spinner_save_continue d-none"></i>
            </a>
            <a href="#"
                class="btn btn-info product_copy">{{ trans('admin.copy') }}<i
                    class="far fa-copy m-1"></i><i
                    class="fa fa-spin fa-spinner spinner_copy d-none"></i></a>
            <a href="#" class="btn btn-danger" data-toggle="modal"
                data-target="#exampleModal2">{{ trans('admin.delete') }}<i
                    class="fas fa-trash  m-1"></i></a>
        </div>
        <hr>

        {{-- nav tabs --}}
        <ul class="nav nav-tabs mb-3" id="myTab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="product_info-tab"
                    data-toggle="tab" href="#product_info" role="tab"
                    aria-controls="product_info"
                    aria-selected="true">{{ trans('admin.product_info') }}
                    <i class="fas fa-info"></i></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" id="department-tab" data-toggle="tab"
                    href="#department" role="tab"
                    aria-controls="department-piece"
                    aria-selected="false">{{ trans('admin.department') }}
                    <i class="fas fa-puzzle-piece"></i></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" id="product_setting-tab"
                    data-toggle="tab" href="#product_setting" role="tab"
                    aria-controls="product_setting"
                    aria-selected="false">{{ trans('admin.product_setting') }}
                    <i class="fas fa-cogs"></i></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" id="product_media-tab"
                    data-toggle="tab" href="#product_media" role="tab"
                    aria-controls="product_media"
                    aria-selected="false">{{ trans('admin.product_media') }}
                    <i class="fas fa-photo-video"></i></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" id="product_shipping_info-tab"
                    data-toggle="tab" href="#product_shipping_info"
                    role="tab" aria-controls="product_shipping_info"
                    aria-selected="false">{{ trans('admin.product_shipping_info') }}
                    <i class="fas fa-truck"></i></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" id="product_more_info-tab"
                    data-toggle="tab" href="#product_more_info" role="tab"
                    aria-controls="product_more_info"
                    aria-selected="false">{{ trans('admin.product_more_info') }}
                    <i class="fas fa-info-circle"></i>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" id="product_related-tab"
                    data-toggle="tab" href="#product_related" role="tab"
                    aria-controls="product_related"
                    aria-selected="false">{{ trans('admin.product_related') }}
                    <i class="fas fa-list"></i>
                </a>
            </li>
        </ul>

        {{-- tabs content --}}
        <div class="tab-content mb-3`" id="myTabContent">
            @include('admin.products.tabs.product_info')
            @include('admin.products.tabs.department')
            @include('admin.products.tabs.product_setting')
            @include('admin.products.tabs.product_media')
            @include('admin.products.tabs.product_shipping_info')
            @include('admin.products.tabs.product_more_info')
            @include('admin.products.tabs.product_related')
        </div>

        {{-- buttons --}}
        <div class="mb-3 mt-3">
            <a href="#" class="btn btn-primary">{{ trans('admin.save') }}<i
                    class="far fa-save m-1"></i></a>
            <a href="#"
                class="btn btn-success save_and_continue">{{ trans('admin.save_continue') }}
                <i class="far fa-share-square  m-1"></i>
                <i
                    class="fa fa-spin fa-spinner spinner_save_continue d-none"></i>
            </a>
            <a href="#"
                class="btn btn-info product_copy">{{ trans('admin.copy') }}<i
                    class="far fa-copy  m-1"></i><i
                    class="fa fa-spin fa-spinner spinner_copy d-none"></i></a>
            <a href="#" class="btn btn-danger" data-toggle="modal"
                data-target="#exampleModal2">{{ trans('admin.delete') }}<i
                    class="fas fa-trash  m-1"></i></a>
        </div>
        <hr>
        {!! Form::close() !!}
    </div>
    <!-- /.card-body -->
</div>


<!-- Modal -->
<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">
                    {{ trans('admin.delete') }}
                </h5>
                <button type="button" class="close" data-dismiss="modal"
                    aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            {!! Form::open(['route' => ['products.destroy', $product->id],
            'method'
            =>
            'delete']) !!}
            <div class="modal-body">
                {{ trans('admin.delete_this', ['name' =>  $title]) }}
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary  ml-2"
                    data-dismiss="modal">{{ trans('admin.close') }}</button>
                {!! Form::submit(trans('admin.yes'), ['class' => 'btn
                btn-danger']) !!}
            </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>


@endsection
