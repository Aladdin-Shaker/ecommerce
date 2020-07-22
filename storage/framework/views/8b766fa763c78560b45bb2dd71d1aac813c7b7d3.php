<?php $__env->startSection('content'); ?>

<?php $__env->startPush('scripts'); ?>
<script type="text/javascript">
    $(document).ready(function() {
        $('#jstree').jstree({
            "core" : {"themes" : { "variant" : "large"},'data' : <?php echo load_dep($size->department_id); ?> },
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
<?php $__env->stopPush(); ?>

<div class="card">
    <div class="card-header">
        <h3 class="card-title"><?php echo $title; ?></h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <?php echo Form::open(['url' => aurl('sizes/'. $size->id), 'method' =>
        'put']); ?>


        <div class="form-group">
            <?php echo Form::label('name_ar',
            trans('admin.name_ar')); ?>

            <?php echo Form::text('name_ar', $size->name_ar,
            ['class' =>
            'form-control']); ?>

        </div>
        <div class="form-group">
            <?php echo Form::label('name_en',
            trans('admin.name_en')); ?>

            <?php echo Form::text('name_en',$size->name_en,
            ['class' =>
            'form-control']); ?>

        </div>

        <div class="clearfix"></div>
        <div id="jstree"></div>
        <input type="hidden" name="department_id" class="department_id"
            value="<?php echo e($size->department_id); ?>">

        <div class="form-group">
            <?php echo Form::label('is_public',
            trans('admin.is_public')); ?>

            <?php echo Form::select('is_public', ['yes' => trans('admin.yes'),
            'no' => trans('admin.no')],$size->is_public,
            ['class' =>
            'form-control']); ?>

        </div>
        <?php echo Form::submit(trans('admin.save'), ['class' => 'btn
        btn-primary']); ?>

        <?php echo Form::close(); ?>

    </div>
    <!-- /.card-body -->
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/sniper/Desktop/ecommerc project/Ecommerce/Ecommerce/resources/views/admin/sizes/edit.blade.php ENDPATH**/ ?>