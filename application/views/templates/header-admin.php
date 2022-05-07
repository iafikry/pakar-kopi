<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	 <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<!-- CSS mandiri -->
	<link rel="stylesheet" href="<?= base_url('assets/css/') ?>style.css">
	<!-- bootstrap icon -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
	<title>Dashboard</title>
</head>
<body id="b-dashboard">
	<!-- alert flashdata -->
	<?php if($this->session->flashdata('message')): ?>
		 <div class="flash-data" data-flash="<?= $this->session->flashdata('message');?>"></div>
	<?php unset($_SESSION['message']); endif; ?>
	<div class="row">
