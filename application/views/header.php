<!DOCTYPE HTML>
<html>
<head>
  <title>Pay Slip</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
  <meta charset="utf-8">
  <meta name="viewport" content="width=divice-width, initial-scale=1">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="">
  <meta name="author" content="">
  <!-- Bootstrap Core CSS -->
  <link href="<?php echo base_url();?>bus/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom CSS -->
  <link href="<?php echo base_url();?>bus/css/business-casual.css" rel="stylesheet">
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">
  <script src="https//ajax.googleapis.com/ajax/lips/jquery/3.1.0/jquery.min.js"></script>
</head>
<body>
    <div class="brand">ระบบรายงานการจ่ายเงินเดือน</div>
    <div class="address-bar">สำนักงานสาธารณสุขจังหวัดชุมพร เลขที่ 259 ถ.ปรมินทรมรรคา ต.ท่าตะเภา อ.เมืองชุมพร จ.ชุมพร 86000</div>

    <!-- Navigation -->
    <nav class="navbar navbar-default" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">0</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- navbar-brand is hidden on larger screens, but visible when the menu is collapsed -->
                <a class="navbar-brand" href="index.html">รายงานการจ่ายเงินเดือน</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="<?php echo base_url('main/enter');?>">หน้าหลัก</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('main/print_pdf');?>">รายงาน</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('main/changepassword');?>">เปลี่ยนรหัสผ่าน</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('main/contact');?>">ติดต่อเรา</a>
						<li>
                        <a href="<?php echo base_url('main/logout');?>">ออกจากระบบ</a>
                    </li>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
