<?php $this->load->view("header_n");?>
 
<div class="container">
    <?php foreach ($news as $n) : ?>
        <center> <h3>สำนักงานสาธารณสุขจังหวัดชุมพร <br/>รายงานการจ่ายเงินเดือน </h3></center>
    <?php endforeach;?>    
<center>
    <div class="container">
        <form action="<?php echo site_url('home/search/');?>" method="post">
            <label>Fname : </label><input type="text" name="fname" />
            <label>Lname : </label><input type='text' name='lname'/>
            <input type="submit" name="btsearch" value="search" />
        </form>
    </div>
</center>    
<br/>
       <table align='center' class="table-striped table-bordered table-hover">
        <?php 
        if(count($news)==0)
        {
            echo '<table align="center" class="table-striped table-bordered table-hover">
                    <tr>
                    <td colspan="6">&nbsp;&nbsp; - - - - - - - no data - - - - - - - &nbsp;&nbsp;</td>
                    </tr>
                    </table>';    
        }else{
        foreach ($news as $n) : ?>
           
        <tr><td>&nbsp;ชื่อ สกุล&nbsp;</td>                <td >&nbsp;<?= $n['fname']; ?>&nbsp;<?= $n['lname']; ?>&nbsp;</td></tr>
        <tr><td>&nbsp;จังหวัด อำเภอ&nbsp;</td>                <td >&nbsp;<?= $n['Province']; ?>&nbsp;</td></tr>
        <tr><td>&nbsp;เลขประจำตัวประชาชน&nbsp;</td>          <td>&nbsp;<?= $n['id_card'];?>&nbsp;</td></tr>
        <tr><td>&nbsp;ธนาคาร&nbsp;</td>                     <td>&nbsp;<?= $n['bank'];?>&nbsp;</td></tr>
        <tr><td>&nbsp;สาขา&nbsp;</td>                       <td>&nbsp;<?= $n['branch'];?>&nbsp;</td></tr>
        <tr><td>&nbsp;เลขที่บัญชีธนาคาร&nbsp;</td>              <td>&nbsp;<?= $n['bank account']; ?>&nbsp;</td></tr>
        <tr><td>&nbsp;รายได้&nbsp;</td>                      <td align="right">&nbsp;<?= number_format(($n['revenue'])/100,2,'.',',');?>&nbsp;</td></tr>
        <tr><td>&nbsp;เงินเดือน(ตกเบิก)&nbsp;</td>             <td align="right">&nbsp;<?= number_format(($n['Reimbursement'])/100,2,'.',',');?>&nbsp;</td></tr>
        <tr><td>&nbsp;เงินปจต./วิชาชีพ/วิทยฐานะ&nbsp;</td>      <td align="right">&nbsp;<?= number_format(($n['Professional_values'])/100,2,'.',',');?>&nbsp;</td></tr>
        <tr><td>&nbsp;เงินปจต./วิชาชีพ/วิทยะฐานะ(ตกเบิก)&nbsp;</td><td align="right">&nbsp;<?= number_format(($n['Professional_fees'])/100,2,'.',',');?>&nbsp;</td></tr>
        <tr><td>&nbsp;ต.ข.ท.ปจต./ต.ข.8-8ว./ต.ด.ข.1-7&nbsp;</td><td align="right">&nbsp;<?= number_format(($n['tk88'])/100,2,'.',',');?>&nbsp;</td></tr>
        <tr><td>&nbsp;ต.ข.ท.ปจต./ต.ข.8-8ว./ต.ด.ข.1-7(ตกเบิก)&nbsp;</td><td align="right">&nbsp;<?= number_format(($n['tk88_togbork'])/100,2,'.',',');?>&nbsp;</td></tr>
        <tr><td>&nbsp;เงินช่วยเหลือบุตร&nbsp;</td>              <td align="right">&nbsp;<?= number_format(($n['Child_allowance'])/100,2,'.',',');?>&nbsp;</td></tr>
        <tr><td>&nbsp;เงิน พ.ส.ร/พ.ต.ก&nbsp;</td>            <td align="right">&nbsp;<?= number_format(($n['ptk'])/100,2,'.',',');?>&nbsp;</td></tr>
        <tr><td>&nbsp;เงินตอบแทนพิเศษ&nbsp;</td>              <td align="right">&nbsp;<?= number_format(($n['Extra_money'])/100,2,'.',',');?>&nbsp;</td></tr>
        <tr><td>&nbsp;อื่น ๆ&nbsp;</td>                       <td align="right">&nbsp;<?= number_format(($n['other'])/100,2,'.',',');?>&nbsp;</td></tr>
        <tr><td>&nbsp;รวมรับ&nbsp;</td>                      <td align="right">&nbsp;<?= number_format(($n['revenue_sum'])/100,2,'.',',');?>&nbsp;</td></tr>
        <tr><td>&nbsp;ภาษี&nbsp;</td>                        <td align="right">&nbsp;<?= number_format(($n['tax'])/100,2,'.',',');?>&nbsp;</td></tr>
        <tr><td>&nbsp;สหกรณ์ออมทรัพย์ สสจ.ชุมพร&nbsp;</td>      <td align="right">&nbsp;<?= number_format(($n['cooperative'])/100,2,'.',',');?>&nbsp;</td></tr>
        <tr><td>&nbsp;กองทุนบำเหน็จบำนาญข้าราชการ&nbsp;</td>   <td align="right">&nbsp;<?= number_format(($n['gpf'])/100,2,'.',',');?>&nbsp;</td></tr>
        <tr><td>&nbsp;เงินกู้เพื่อที่อยู่อาศัย&nbsp;</td>             <td align="right">&nbsp;<?= number_format(($n['Home_loan'])/100,2,'.',',');?>&nbsp;</td></tr>
        <tr><td>&nbsp;เงินกู้เพื่อการศึกษา&nbsp;</td>             <td align="right">&nbsp;<?= number_format(($n['Education_loan'])/100,2,'.',',');?>&nbsp;</td></tr>
        <tr><td>&nbsp;เงินกู้ยานพาหนะ&nbsp;</td>               <td align="right">&nbsp;<?= number_format(($n['Vehicle_loan'])/100,2,'.',',');?>&nbsp;</td></tr>
        <tr><td>&nbsp;ฌาปณกิจ&nbsp;</td>                     <td align="right">&nbsp;<?= number_format(($n['chapanakit'])/100,2,'.',',');?>&nbsp;</td></tr>
        <tr><td>&nbsp;เงินบำรุง/เงินทุน/กู้สวัสดิการ/สงเคราะห์&nbsp;</td> <td align="right">&nbsp;<?= number_format(($n['Welfare_loan'])/100,2,'.',',');?>&nbsp;</td></tr>
        <tr><td>&nbsp;เงินบำรุงเรียกคืน/ชดใช้ทางแพ่ง/อายัดเงิน&nbsp;</td><td align="right">&nbsp;<?= number_format(($n['Attach_money'])/100,2,'.',',');?>&nbsp;</td></tr>
        <tr><td>&nbsp;จ่ายอื่น ๆ&nbsp;</td>                    <td align="right">&nbsp;<?= number_format(($n['other2'])/100,2,'.',',');?>&nbsp;</td></tr>
        <tr><td>&nbsp;รวมจ่าย&nbsp;</td>                     <td align="right">&nbsp;<?= number_format(($n['pay_sum'])/100,2,'.',',');?>&nbsp;</td></tr>
        <tr><td>&nbsp;รับสุทธิ&nbsp;</td>                      <td align="right">&nbsp;<?= number_format(($n['net'])/100,2,'.',',');?>&nbsp;</td></tr>
        <tr><td>&nbsp;วันที่ข้อมูล&nbsp;</td>                    <td align="right">&nbsp;<?= $n['d_update'];?>&nbsp;</td></tr>
        <tr><td>&nbsp;วันที่ข้อมูล&nbsp;</td>                    <td align="right">&nbsp;<?= substr($n['d_update'],0,2).'-'.substr($n['d_update'],2,2).'-'.substr($n['d_update'],4,4);?>&nbsp;</td></tr>
        
            <?php endforeach ?>
        <?php } ?>
    </table>
    </div>

<?php $this->load->view("footer");?>
