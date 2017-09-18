<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>สสจ.ชุมพร::slip</title>
<style type="text/css">
<!--
.style1 {color: #000000;
	font-weight: bold;
	font-size: 24px;
}
.style2 {font-size: 18px;
	font-weight: bold;
}
.style3 {font-size: 20px}
.style4 {font-size: 18px}
.style5 {color: #FF0000}
-->
</style>
</head>

<body>
<table width="71%" height="940" border="1" align="center" cellpadding="0" cellspacing="0" bordercolor="#000000">
    <!-- code start-->
    <?php 
                 if(count($news)==0)
                 {
                     echo '<table align="center" class="table-striped table-bordered table-hover border="1">
                             <tr>
                             <td colspan="6">&nbsp;&nbsp; - - - - - - - no data - - - - - - - &nbsp;&nbsp;</td>
                             </tr>
                             </table>';    
                 }else{
                 foreach ($news as $n) : ?>
  <tr>
    <td width="0" height="0" align="center" valign="middle">
    <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td width="32" rowspan="5"><div align="center"></div></td>
        <td width="291" rowspan="5"><div align="center"><img src="<?php echo base_url();?>payslipxxx/logossj.jpg" alt="" width="134" height="137" hspace="0" vspace="0" /></div></td>
        <td colspan="6">&nbsp;</td>
      </tr>
      <tr>
        <td height="28" colspan="6" align="center" valign="middle"><div align="center" class="style1">
            <div align="left" class="style3">
              <div align="left">ใบรับรองการจ่ายเงินเดือนและเงินอื่น ๆ</div>
            </div>
        </div></td>
      </tr>
      <tr>
        <td height="51" colspan="6"><div align="center" class="style2">
            <div align="left"></div>
        </div>
            <div align="left"><span class="style4"> สำนักงานสาธารณสุขจังหวัดชุมพร</span></div></td>
      </tr>
      <tr>
        <td height="0" colspan="6">&nbsp;</td>
      </tr>
      <tr>
        <td height="0" colspan="6">&nbsp;</td>
      </tr>
      <tr>
        <td><div align="center"></div></td>
        <td height="28">ประจำเดือน กรกฎาคม พ.ศ.2560</td>
        <td width="63">&nbsp;</td>
        <td width="44">&nbsp;</td>
        <td colspan="2" align="left">&nbsp;โอนเข้าวันที่ <?= substr($n['d_update'],0,2).'-'.substr($n['d_update'],2,2).'-'.substr($n['d_update'],4,4);?></td>
        <td width="64">&nbsp;</td>
        <td width="52" height="0" nowrap="nowrap">&nbsp;</td>
      </tr>
      <tr>
        <td><div align="center"></div></td>
        <td height="28"><?= $n['prename']; ?><?= $n['fname']; ?>&nbsp;<?= $n['lname']; ?></td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td colspan="3" align="left"><?= $n['bank'];?>&nbsp;<?= $n['branch'];?>&nbsp;</td>
        <td width="52" height="0" nowrap="nowrap">&nbsp;</td>
      </tr>
      <tr>
        <td><div align="center"></div></td>
        <td colspan="3" height="28">หน่วยงาน ++</td>
        <td colspan="2">&nbsp;</td>
        <td>&nbsp;</td>
        <td width="52" height="0" nowrap="nowrap">&nbsp;</td>
      </tr>
      <tr>
        <td height="29"><div align="center"></div></td>
        <td colspan="3"><div align="center"><strong>รายการรับ</strong></div></td>
        <td colspan="4"><div align="center"><strong>รายการหัก</strong></div></td>
      </tr>
      <tr>
        <td><div align="right">1.</div></td>
        <td align="left">&nbsp;เงินเดือน/ค่าจ้าง/ค่าตอบแทน</td>
        <td align="right">&nbsp;<?= number_format(($n['revenue'])/100,2,'.',',');?></td>
        <td>&nbsp;บาท</td>
        <td width="41"><div align="right">1.</div></td>
        <td width="159" align='left'>&nbsp;ภาษีเงินได้</td>
        <td align='right'><?= number_format(($n['tax'])/100,2,'.',',');?></td>
        <td width="52" height="0" nowrap="nowrap">&nbsp;บาท</td>
      </tr>
      <tr>
        <td><div align="right">2.</div></td>
        <td align="left">&nbsp;ตกเบิกเงินเดือน/ค่าจ้าง/ค่าตอบแทน</td>
        <td align='right'><?= number_format(($n['Reimbursement'])/100,2,'.',',');?></td>
        <td>&nbsp;บาท</td>
        <td><div align="right">2.</div></td>
        <td align='left'>&nbsp;สะสม กบข./กสจ./ปกส. </td>
        <td align='right'><?= number_format(($n['gpf'])/100,2,'.',',');?></td>
        <td width="52" height="0" nowrap="nowrap">&nbsp;บาท</td>
      </tr>
      <tr>
        <td><div align="right">3.</div></td>
        <td align='left'>&nbsp;เงินประจำตำแหน่ง</td>
        <td align='right'><?= number_format(($n['Professional_values'])/100,2,'.',',');?></td>
        <td>&nbsp;บาท</td>
        <td><div align="right">3.</div></td>
        <td align='left'>&nbsp;สะสมส่วนเพิ่ม กบข. </td>
        <td align='right'(36)>0.00</td>
        <td width="52" height="0" nowrap="nowrap">&nbsp;บาท</td>
      </tr>
      <tr>
        <td><div align="right">4.</div></td>
        <td align='left'>&nbsp;ตกเบิกเงินประจำตำแหน่ง </td>
        <td align='right'><?= number_format(($n['Professional_fees'])/100,2,'.',',');?></td>
        <td>&nbsp;บาท</td>
        <td><div align="right">4.</div></td>
        <td align='left'>&nbsp;ฌกส.</td>
        <td align='right'(42)>0.00</td>
        <td width="52" height="0" nowrap="nowrap">&nbsp;บาท</td>
      </tr>
      <tr>
        <td><div align="right">5.</div></td>
        <td align='left'>&nbsp;เงินเทียบเท่าประจำตำแหน่ง</td>
        <td align='right'><?= number_format(($n['tk88'])/100,2,'.',',');?></td>
        <td>&nbsp;บาท</td>
        <td><div align="right">5.</div></td>
        <td align='left'>&nbsp;ธ.อาคารสงเคราะห์</td>
        <td align='right'><?= number_format(($n['Home_loan'])/100,2,'.',',');?></td>
        <td width="52" height="0" nowrap="nowrap">&nbsp;บาท</td>
      </tr>
      <tr>
        <td><div align="right">6.</div></td>
        <td align='left'>&nbsp;ตกเบิกเงินเทียบเท่าประจำตำแหน่ง</td>
        <td align='right'><?= number_format(($n['tk88_togbork'])/100,2,'.',',');?></td>
        <td>&nbsp;บาท</td>
        <td><div align="right">6.</div></td>
        <td align='left'>&nbsp;เงินประกันชีวิต</td>
        <td align='right'(54)>0.00</td>
        <td width="52" height="0" nowrap="nowrap">&nbsp;บาท</td>
      </tr>
      <tr>
        <td><div align="right">7.</div></td>
        <td align='left'>&nbsp;เงินค่าตอบแทนระดับ 8</td>
        <td align='right'(57)>0.00</td>
        <td>&nbsp;บาท</td>
        <td><div align="right">7.</div></td>
        <td align='left'>&nbsp;ค่าสาธารณูปโภค</td>
        <td align='right'(60)>0.00</td>
        <td width="52" height="0" nowrap="nowrap">&nbsp;บาท</td>
      </tr>
      <tr>
        <td><div align="right">8.</div></td>
        <td align='left'>&nbsp;ตกเบิกเงินค่าตอบแทนระดับ 8</td>
        <td align='right'(63)>0.00</td>
        <td>&nbsp;บาท</td>
        <td><div align="right">8.</div></td>
        <td align='left'>&nbsp;ธ.ออมสิน</td>
        <td align='right'(66)>0.00</td>
        <td width="52" height="0" nowrap="nowrap">&nbsp;บาท</td>
      </tr>
      <tr>
        <td><div align="right">9.</div></td>
        <td align='left'>&nbsp;เงินค่าตอบแทนพิเศษเงินเดือนเต็มขั้น</td>
        <td align='right'(69)>0.00</td>
        <td>&nbsp;บาท</td>
        <td><div align="right">9.</div></td>
        <td align='left'>&nbsp;สหกรณ์ออมทรัพย์</td>
        <td align='right'><?= number_format(($n['cooperative'])/100,2,'.',',');?></td>
        <td width="52" height="0" nowrap="nowrap">&nbsp;บาท</td>
      </tr>
      <tr>
        <td><div align="right">10.</div></td>
        <td align='left'>&nbsp;ตกเบิกค่าตอบแทนพิเศษเงินเดือนเต็มขั้น</td>
        <td align='right'(75)>0.00</td>
        <td>&nbsp;บาท</td>
        <td><div align="right">10.</div></td>
        <td align='left'>&nbsp;ธ.กรุงไทย</td>
        <td align='right'(78)>0.00</td>
        <td width="52" height="0" nowrap="nowrap">&nbsp;บาท</td>
      </tr>
      <tr>
        <td><div align="right">11.</div></td>
        <td align='left'>&nbsp;ค่าครองชีพชั่วคราว</td>
        <td align='right'(81)>0.00</td>
        <td>&nbsp;บาท</td>
        <td><div align="right">11.</div></td>
        <td align='left'>&nbsp;หนี้สินอื่น ๆ</td>
        <td align='right'><?= number_format(($n['other2'])/100,2,'.',',');?></td>
        <td width="52" height="0" nowrap="nowrap">&nbsp;บาท</td>
      </tr>
      <tr>
        <td height="22"><div align="right">12.</div></td>
        <td align='left'>&nbsp;ตกเบิกค่าครองชีพชั่วคราว</td>
        <td align='right'(87)>0.00</td>
        <td>&nbsp;บาท</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td width="52" height="0" nowrap="nowrap">&nbsp;</td>
      </tr>
      <tr>
        <td><div align="center">&nbsp;</div></td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td width="52" height="0" nowrap="nowrap">&nbsp;</td>
      </tr>
      <tr>
        <td><div align="center">&nbsp;</div></td>
        <td>รวมรับทั้งหมด</td>
        <td align='right'><?= number_format(($n['revenue_sum'])/100,2,'.',',');?></td>
        <td>&nbsp;บาท</td>
        <td>&nbsp;</td>
        <td>รวมหักทั้งหมด</td>
        <td align='right'><?= number_format(($n['pay_sum'])/100,2,'.',',');?></td>
        <td width="52" height="0" nowrap="nowrap">&nbsp;บาท</td>
      </tr>
      <tr>
        <td><div align="center">&nbsp;</div></td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td width="52" height="0" nowrap="nowrap">&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td width="52" height="0" nowrap="nowrap">&nbsp;</td>
      </tr>
      <tr>
        <td><div align="center">&nbsp;</div></td>
        <td>รับสุทธิ</td>
        <td><?= number_format(($n['net'])/100,2,'.',',');?></td>
        <td>&nbsp;บาท</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td width="52" height="0" nowrap="nowrap">&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td width="52" height="0" nowrap="nowrap">&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td colspan="4">&nbsp;</td>
        <td>&nbsp;</td>
        <td height="0" nowrap="nowrap">&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td colspan="4"><div align="center">รับรองการจ่ายเงินเดือน</div></td>
        <td>&nbsp;</td>
        <td height="35" nowrap="nowrap">&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td colspan="4">&nbsp;</td>
        <td>&nbsp;</td>
        <td height="0" nowrap="nowrap">&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td colspan="4">&nbsp;..............<img src="<?php echo base_url();?>payslipxxx/lysen1.jpg" width="53" height="39" hspace="0" vspace="0" />.............</td>
        <td>&nbsp;</td>
        <td height="0" nowrap="nowrap">&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td colspan="4">(นางสุดาพร  แสงจันทร์) </td>
        <td>&nbsp;</td>
        <td width="52" height="26" nowrap="nowrap">&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td colspan="4">&nbsp;</td>
        <td>&nbsp;</td>
        <td height="0" nowrap="nowrap">&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td colspan="4">&nbsp;</td>
        <td>&nbsp;</td>
        <td height="0" nowrap="nowrap">&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td colspan="4">&nbsp;</td>
        <td>&nbsp;</td>
        <td height="0" nowrap="nowrap">&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td height="28"><span class="style5">หมายเหตุ</span></td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td height="0" nowrap="nowrap">&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td height="20" colspan="2" align="left"><span class="style5">1.&nbsp;กรุณาตรวจสอบ &nbsp;หากไม่ถูกต้องโปรดทักท้วงทันที</span></td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td height="0" nowrap="nowrap">&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td height="20" colspan="4" align="left"><span class="style5">2.&nbsp;เอกสารฉบับนี้สามารถใช้ประกอบกับเอกสารที่ทางราชการออกให้</span><span class="style5"></span></td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td height="0" nowrap="nowrap">&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td height="20" colspan="5" align="left"><span class="style5">3.&nbsp;หากพบข้อมูลไม่ถูกต้อง กรุณาติดต่องานการเงิน กลุ่มงานบริหาร</span><span class="style5">&nbsp;โทร. 0-7751-1040 &nbsp;ต่อ 110 </span></td>
        <td>&nbsp;</td>
        <td height="0" nowrap="nowrap">&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td width="52" height="0" nowrap="nowrap"><p>&nbsp;</p></td>
      </tr>
    </table>
    </td>
  </tr>
  <?php endforeach ?>
  <?php } ?>
</table>
</body>
</html>
