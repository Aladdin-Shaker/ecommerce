@extends('admin.index')

@section('content')

@push('scripts')
<script type="text/javascript">
    $(document).ready(function() {
        $('#jstree').jstree({
            "core" : {"themes" : { "variant" : "large"},'data' : {!! load_dep(old('department_id')) !!} },
            "checkbox" : { "keep_selected_style" : false },
            "plugins" : ["wholerow"]
        });
    });
    $('#jstree').on('changed.jstree', function(e, data) {
        // extract the data changed
        var i,j,r=[];
        for(i=0, j=data.selected.length; i<j; i++)
        {
            r.push(data.instance.get_node(data.selected[i]).id);
        }
        $('.department_id').val(r.join(', '));
    });
</script>
@endpush

<div class="card">
    <div class="card-header">
        <h3 class="card-title">{!! $title !!}</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        {!! Form::open(['url' => aurl('sizes')]) !!}
        <div class="form-group">
            {!! Form::label('name_ar',
            trans('admin.name_ar')) !!}
            {!! Form::text('name_ar', old('name_ar'),
            ['class' =>
            'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('name_en',
            trans('admin.name_en')) !!}
            {!! Form::text('name_en', old('name_en'),
            ['class' =>
            'form-control']) !!}
        </div>

        <div class="clearfix"></div>
        <div id="jstree"></div>
        <input type="hidden" name="department_id" class="department_id"
            value="{{old('department_id')}}">

        <div class="form-group">
            {!! Form::label('is_public',
            trans('admin.is_public')) !!}
            {!! Form::select('is_public',['yes' => trans('admin.yes'),
            'no' => trans('admin.no')] ,old('is_public'),
            ['class' =>
            'form-control']) !!}
        </div>
        {!! Form::submit(trans('admin.create_size'), ['class' => 'btn
        btn-primary']) !!}
        {!! Form::close() !!}
    </div>
    <!-- /.card-body -->
</div>

@endsection
