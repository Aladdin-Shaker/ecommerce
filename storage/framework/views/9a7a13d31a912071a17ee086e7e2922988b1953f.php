<?php $__env->startSection('content'); ?>
<?php $__env->startPush('scripts'); ?>
<script type="text/javascript">
    $(document).ready(function() {
        $('#jstree').jstree({
            "core" : {"themes" : { "variant" : "large"},'data' : <?php echo load_dep($department->parent, $department->id); ?> },
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
        $('.parent_id').val(r.join(', '));
    });
</script>
<?php $__env->stopPush(); ?>
<div class="card">
    <div class="card-header">
        <h3 class="card-title"><?php echo $title; ?></h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <?php echo Form::open(['url' => aurl('departments/'.$department->id),
        'method' => 'put' ,'files' => true]); ?>

        <div class="form-group">
            <?php echo Form::label('dep_name_ar',
            trans('admin.dep_name_ar')); ?>

            <?php echo Form::text('dep_name_ar', $department->dep_name_ar,
            ['class' =>
            'form-control']); ?>

        </div>
        <div class="form-group">
            <?php echo Form::label('dep_name_en',
            trans('admin.dep_name_en')); ?>

            <?php echo Form::text('dep_name_en', $department->dep_name_en,
            ['class' =>
            'form-control']); ?>

        </div>

        <div class="clearfix"></div>
        <div id="jstree"></div>
        <input type="hidden" name="parent" class="parent_id"
            value="<?php echo e($department->parent); ?>">

        <div class="form-group">
            <?php echo Form::label('description',
            trans('admin.description')); ?>

            <?php echo Form::textarea('description', $department->description,
            ['class' =>
            'form-control']); ?>

        </div>
        <div class="form-group">
            <?php echo Form::label('keyword',
            trans('admin.keyword')); ?>

            <?php echo Form::textarea('keyword', $department->keyword,
            ['class' =>
            'form-control']); ?>

        </div>
        <div class="form-group">
            <?php echo Form::label('icon',trans('admin.icon')); ?>

            <?php echo Form::file('icon',['class' =>'form-control']); ?>

            <?php if(!empty($department->icon) &&
            Storage::has($department->icon)): ?>
            <img src="<?php echo e(Storage::url($department->icon)); ?>" height="100px"
                width="100px" />
            <?php endif; ?>
        </div>

        <?php echo Form::submit(trans('admin.edit_department'), ['class' => 'btn
        btn-primary']); ?>

        <?php echo Form::close(); ?>

    </div>
    <!-- /.card-body -->
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/sniper/Desktop/ecommerc project/Ecommerce/Ecommerce/resources/views/admin/departments/edit.blade.php ENDPATH**/ ?>