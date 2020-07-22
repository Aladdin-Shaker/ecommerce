<?php $__env->startPush('scripts'); ?>

<link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.1/min/dropzone.min.css">
<script
    src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.1/min/dropzone.min.js">
</script>

<script>
    // Disable auto discover for all elements:
Dropzone.autoDiscover = false;
    $(document).ready(function() {

        // another images upload
        $('#dropzonefileupload').dropzone({
            url: "<?php echo e(aurl('upload/image/'. $product->id)); ?>",
            paramName: 'file', // The name that will be used to transfer the file
            maxFilesize: 2, // 2 MB
            uploadMultiple: false,
            maxFiles: 15,
            acceptedFiles: 'image/*',
            dictxDefaultMessage: '<?php echo e(trans('admin.dictDefaultMessage')); ?>',
            dictRemoveFile: '<?php echo e(trans('admin.delete')); ?>',
            params: {
                _token : '<?php echo e(csrf_token()); ?>'
            },
            addRemoveLinks: true,
            removedfile: function(file) {
                $.ajax({
                    dataType: 'json',
                    type: 'post',
                    data: {_token: '<?php echo e(csrf_token()); ?>', id: file.fid},
                    url: '<?php echo e(aurl('delete/image')); ?>' // delete another files
                });

                var fmock;
                return (fmock = file.previewElement) != null ? fmock.parentNode.removeChild(file.previewElement) : void 0;
            },
            init: function(){
                <?php $__currentLoopData = $product->files()->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $file): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    var mock = {
                        fid: '<?php echo e($file->id); ?>',
                        name: '<?php echo e($file->name); ?>',
                        size: '<?php echo e($file->size); ?>',
                        type: '<?php echo e($file->mime_type); ?>'
                    };
                    this.emit('addedfile', mock);
                    this.options.thumbnail.call(this,mock, '<?php echo e(url('storage/' . $file->full_file )); ?>');
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                this.on('sendding', function(file,xhr,formData){
                    formData.append('fid', '');
                    file.fid = '';
                });

                 this.on('success', function(file,response){
                    file.fid = response.id;
                });
            }
        });

    });

    // main image upload
    Dropzone.autoDiscover = false;
    $(document).ready(function() {
        $('#mainPhoto').dropzone({
            url: "<?php echo e(aurl('update/image/'. $product->id)); ?>",
            paramName: 'file', // The name that will be used to transfer the file
            maxFilesize: 2, // 2 MB
            uploadMultiple: false,
            maxFiles: 1,
            acceptedFiles: 'image/*',
            dictxDefaultMessage: '<?php echo e(trans('admin.dictDefaultMessage')); ?>',
            dictRemoveFile: '<?php echo e(trans('admin.delete')); ?>',
            params: {
                _token : '<?php echo e(csrf_token()); ?>'
            },
            addRemoveLinks: true,
            removedfile: function(file) {
                $.ajax({
                    dataType: 'json',
                    type: 'post',
                    data: {_token: '<?php echo e(csrf_token()); ?>', id: file.fid},
                    url: '<?php echo e(aurl('delete/product/image/' . $product->id)); ?>' // delete main photo
                });

                var fmock;
                return (fmock = file.previewElement) != null ? fmock.parentNode.removeChild(file.previewElement) : void 0;
            },
            init: function(){
                <?php if(!empty($product->photo)): ?>
                    var mock = { name: '<?php echo e($product->title); ?>', size: '', type: ''};
                    // this.addedfile.call(this,mock);
                    this.emit('addedfile', mock);
                    this.options.thumbnail.call(this,mock, '<?php echo e(url('storage/'. $product->photo )); ?>');
                <?php endif; ?>

                this.on('sendding', function(file,xhr,formData){
                    formData.append('fid', '');
                    file.fid = '';
                });

                 this.on('success', function(file,response){
                    file.fid = response.id;
                });
            }
        });

    });

</script>

<?php $__env->stopPush(); ?>

<div class="tab-pane fade" id="product_media" role="tabpanel"
    aria-labelledby="product_media">
    <h4><?php echo e(trans('admin.product_media')); ?></h4>
    
    <center>
        <h4><?php echo e(trans('admin.product_main_photo')); ?></h4>
    </center>
    <div class="dropzone" id="mainPhoto"></div>
    <hr>
    
    <center>
        <h4><?php echo e(trans('admin.product_photos')); ?></h4>
    </center>
    <div class="dropzone" id="dropzonefileupload"></div>
</div>
<?php /**PATH /home/sniper/Desktop/ecommerc project/Ecommerce/Ecommerce/resources/views/admin/products/tabs/product_media.blade.php ENDPATH**/ ?>