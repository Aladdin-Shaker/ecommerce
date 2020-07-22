<?php $__env->startPush('scripts'); ?>
<script type="text/javascript">
    $(document).ready(function() {
        $('#jstree').jstree({
            "core" : {"themes" : { "variant" : "large"},'data' : <?php echo load_dep($product->department_id); ?> },
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
        var department = r.join(', ');
        $('.department_id').val(department);
        // send ajax request to change the weight and size accordding to changed department
        $.ajax({
            url: '<?php echo e(aurl('load/weight/size')); ?>',
            dataType: 'html',
            type: 'post',
            data: {_token: '<?php echo e(csrf_token()); ?>', dep_id: department, product_id: '<?php echo e($product->id); ?>'}, // send to request
            success: function(data) {
                $('.weight_size').html(data);
                $('.color_trade_manu_data').removeClass('d-none');
            }
        });
    });
</script>
<?php $__env->stopPush(); ?>

<div class="tab-pane fade" id="department" role="tabpanel"
    aria-labelledby="department">
    <h4 class="mt-3 mb-3"><?php echo e(trans('admin.department')); ?></h4>

    <div id="jstree"></div>
    <input type="hidden" name="department_id" class="department_id">

</div>
<?php /**PATH /home/sniper/Desktop/ecommerc project/Ecommerce/Ecommerce/resources/views/admin/products/tabs/department.blade.php ENDPATH**/ ?>