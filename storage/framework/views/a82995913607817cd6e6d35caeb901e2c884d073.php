<!-- Button trigger modal -->
<button type="button" class="btn btn-danger" data-toggle="modal"
    data-target="#exampleModal">
    <i class="fa fa-trash"></i>
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
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
            <?php echo Form::open(['route' => ['malls.destroy', $id],
            'method'
            =>
            'delete']); ?>

            <div class="modal-body">
                <?php echo e(trans('admin.delete_this', ['name' => session('lang') === 'ar' ? $name_ar : $ame_en])); ?>

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
<?php /**PATH /home/sniper/Desktop/ecommerc project/Ecommerce/Ecommerce/resources/views/admin/malls/btn/delete.blade.php ENDPATH**/ ?>