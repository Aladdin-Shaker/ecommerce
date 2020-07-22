<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo e(!empty($title) ? $title : trans('admin.adminPanel')); ?>

    </title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet"
        href="<?php echo e(url('/design/adminlte/plugins/fontawesome-free/css/all.min.css')); ?>">
    <!-- Ionicons -->
    <link rel="stylesheet"
        href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet"
        href="<?php echo e(url('/design/adminlte/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')); ?>">
    <!-- iCheck -->
    <link rel="stylesheet"
        href="<?php echo e(url('/design/adminlte/plugins/icheck-bootstrap/icheck-bootstrap.min.css')); ?>">
    <!-- JQVMap -->
    <link rel="stylesheet"
        href="<?php echo e(url('/design/adminlte/plugins/jqvmap/jqvmap.min.css')); ?>">
    <!-- Theme style -->
    <?php if(direction() == 'ltr'): ?>
    <link rel="stylesheet"
        href="<?php echo e(url('/design/adminlte/dist/css/adminlte.min.css')); ?>">
    <?php else: ?>
    <link rel="stylesheet"
        href="<?php echo e(url('/design/adminlte/dist/css/rtl/adminlte.min.css')); ?>">
    <!-- bootstrap rtl -->
    <link rel="stylesheet"
        href="<?php echo e(url('/design/adminlte/dist/css/rtl/bootstrap-rtl.min.css')); ?>">
    <!-- template rtl version -->
    <link rel="stylesheet"
        href="<?php echo e(url('/design/adminlte/dist/css/rtl/custom-style.css')); ?>">
    <!-- Google Font: Source Sans Pro -->
    <link
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700"
        rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet"
        href="<?php echo e(url('/design/adminlte/dist/css/rtl/font-awesome/css/font-awesome.min.css')); ?>">
    <?php endif; ?>
    <!-- overlayScrollbars -->
    <link rel="stylesheet"
        href="<?php echo e(url('/design/adminlte/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')); ?>">
    <!-- Daterange picker -->
    <link rel="stylesheet"
        href="<?php echo e(url('/design/adminlte/plugins/daterangepicker/daterangepicker.css')); ?>">
    <!-- summernote -->
    <link rel="stylesheet"
        href="<?php echo e(url('/design/adminlte/plugins/summernote/summernote-bs4.min.css')); ?>">
    <!-- DataTables -->
    <link rel="stylesheet"
        href="<?php echo e(url('/design/adminlte/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')); ?>">
    <link rel="stylesheet"
        href="<?php echo e(url('/design/adminlte/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')); ?>">
    <!-- jsTree -->
    <link rel="stylesheet"
        href="<?php echo e(url('/design/adminlte/jstree/themes/default/style.css')); ?>">
    
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
    
    <link
        href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css"
        rel="stylesheet" />
</head>
<?php /**PATH /home/sniper/Desktop/ecommerc project/Ecommerce/Ecommerce/resources/views/admin/layouts/header.blade.php ENDPATH**/ ?>