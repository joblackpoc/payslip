<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=divice-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
    <title>Pay Slip </title>
</head>

<body>  
<center> <h3>สำนักงานสาธารณสุขจังหวัดชุมพร <br/>รายงานการจ่ายเงินเดือน </h3></center>

<center>   
    <table class="table-striped table-bordered table-hover">
        
        <thead>
        <th>&nbsp;ชื่อ&nbsp;</th>
        <th>&nbsp;นามสกุล&nbsp;</th>
        <th>&nbsp;รายรับ&nbsp;</th>
        <th>&nbsp;รายจ่าย&nbsp;</th>
        <th>&nbsp;รับสุทธิ&nbsp;</th>
        <th>&nbsp;วันที่ข้อมูล&nbsp;</th>
        </thead>
        
        <tbody>
            <?php foreach ($news as $n) : ?>
        <tr>
        <td><?=$n['prename'];?><?=$n['fname'];?></td>  
        <td><?=$n['lname'];?></td>
        <td align="right">&nbsp;<?= number_format($n(['revenue_sum'])/100,2,'.',',');?>&nbsp;</td>
        <td align="right">&nbsp;<?= number_format($n(['pay_sum'])/100,2,'.',',');?>&nbsp;</td>
        <td align="right">&nbsp;<?= number_format($n(['net'])/100,2,'.',',');?>&nbsp;</td>
        <td align="right">&nbsp;<?= $n['d_update'];?>&nbsp;</td>
        </tr>
        </tbody>
        <?php endforeach ?>
    </table>
</center>   

<?php $this->load->view('footer');?>