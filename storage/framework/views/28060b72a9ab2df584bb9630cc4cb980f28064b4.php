<?php $__env->startSection('content'); ?>

<?php $__env->startPush('scripts'); ?>

<!-- Modal -->
<div class="modal fade" id="delete_modal_dep" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">
                    <?php echo e(trans('admin.delete')); ?>

                </h5>
                <button type="button" class="close" data-dismiss="modal"
                    aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?php echo Form::open(['url' => '', 'id' => 'form_delete_dep'
            ,'method' => 'delete']); ?>

            <div class="modal-body">
                <h4><?php echo e(trans('admin.ask_delete_dep')); ?> <span
                        id="span_delete_dep"></span> </h4>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary  ml-2"
                    data-dismiss="modal"><?php echo e(trans('admin.close')); ?></button>
                <?php echo Form::submit(trans('admin.yes'), ['class' => 'btn
                btn-danger']); ?>

            </div>
            <?php echo Form::close(); ?>

        </div>
    </div>
</div>


<script type="text/javascript">
    $(document).ready(function() {
        $('#jstree').jstree({
            "core" : {
                "themes" : {
                              "variant" : "large"
                            },
                'data' : <?php echo load_dep(); ?>

            },
            "checkbox" : {
                "keep_selected_style" : false
            },
            "plugins" : [ "wholerow" ]
            });
    });

    $('#jstree').on('changed.jstree', function(e, data) {
        // extract the data changed
        var i,j,r=[];
        var name = [];
        for(i=0, j=data.selected.length; i<j; i++)
        {
            r.push(data.instance.get_node(data.selected[i]).id);
            name.push(data.instance.get_node(data.selected[i]).text);
        }
        $('#form_delete_dep').attr('action', '<?php echo e(aurl('departments')); ?>/' + r.join(', '));
        $('#span_delete_dep').text(name.join(', '));

        if(r.join(', ') != '')
        {
            $('.showbtn_control').removeClass('d-none');
            $('.edit_dep').attr('href', '<?php echo e(aurl('departments')); ?>/' + r.join(', ') + '/edit');
        }
        else{
            $('.showbtn_control').addClass('d-none');

        }
    });
</script>
<?php $__env->stopPush(); ?>

<div class="card">
    <div class="card-header">
        <h3 class="card-title"><?php echo $title; ?></h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <a href=""
            class="btn btn-info edit_dep showbtn_control d-none mb-3">
            <?php echo e(trans('admin.edit')); ?> </a>

        <a href=""
            class="btn btn-danger delete_dep showbtn_control d-none mb-3"
            data-target="#delete_modal_dep" data-toggle="modal">
            <?php echo e(trans('admin.delete')); ?> </a>

        <div id="jstree"></div>
    </div>
    <!-- /.card-body -->
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/sniper/Desktop/ecommerc project/Ecommerce/Ecommerce/resources/views/admin/departments/index.blade.php ENDPATH**/ ?>