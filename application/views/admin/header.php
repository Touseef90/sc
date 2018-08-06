<?php
$id = 1;
$category = 'banquet';
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Shaadichain - Admin Panel</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/admin.css'); ?>">

    <!-- Custom styles for this template -->
    <link href="pricing.css" rel="stylesheet">
  </head>

  <body>

    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom box-shadow">
      <h5 class="my-0 mr-md-auto font-weight-normal">Shaadichain</h5>
      <nav class="my-2 my-md-0 mr-md-3">
        <a class="p-2 text-dark" href="<?php echo base_url('admin'); ?>">Year</a>
        <a class="p-2 text-dark" href="<?php echo base_url(); ?>">Book</a>
        <a class="p-2 text-dark" href="<?php echo base_url(); ?>">Messages</a>
        <a class="p-2 text-dark" href="<?php echo base_url('admin/manage/'.$category.'/'.$id); ?>">Manage</a>
      </nav>
      <a class="btn btn-outline-primary" href="#">Log Out</a>
    </div>
