@extends('admin.index')

@section('content')

<div class="card">
    <div class="card-header">
        <h3 class="card-title">{!! $title !!}</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        {!! Form::open(['id' => 'form_data', 'url' =>
        aurl('cities/destroy/all'), 'method' => 'delete']) !!}
        {!! $dataTable->table([
        'class' => 'table table-bordered table-striped'
        ], true) !!}
        {!! Form::close() !!}
    </div>
    <!-- /.card-body -->
</div>


{{-- delete modal --}}
<!-- The Modal -->
<div class="modal" id="deleteAll_modal">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">{{ trans('admin.delete') }}</h4>
                <button type="button" class="close"
                    data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <div class="empty_records d-none">
                    <h6> {{ trans('admin.plase_check_some_records') }}
                    </h6>
                </div>
                <div class="not_empty_records d-none">
                    <h6> {{ trans('admin.ask_delete_item') }} <span
                            class="record_count">5</span> </h6>
                </div>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <div class="empty_records d-none">
                    <button type="button" class="btn btn-default "
                        data-dismiss="modal">{{ trans('admin.close') }}</button>
                </div>
                <div class="not_empty_records d-none">
                    <button type="button" class="btn btn-default "
                        data-dismiss="modal">{{ trans('admin.no') }}</button>
                    <input type="submit" name="del_all"
                        value="{{trans('admin.yes')}}"
                        class="btn btn-danger del_all mr-2">
                </div>
            </div>

        </div>
    </div>
</div>

@push('scripts')
<script>
    delete_all()
</script>
{!! $dataTable->scripts() !!}
@endpush
@endsection
