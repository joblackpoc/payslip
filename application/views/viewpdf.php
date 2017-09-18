<!DOCTYPE HTML>
<html>

<body>
<center>
    <h2>ระบบรายงานการจ่ายเงินเดือนข้าราชการ</h2>
    <h2>สำนักงานสาธารณสุขจังหวัดชุมพร</h2>

    <table align='center'>
        <thead>
        <tr>
            <th>ID_CARD</th>
            <th>Prename</th>
            <th>Fname</th>
            <th>Lname</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($news as $n) : ?>
        <tr>
            <td><?= $n['id_card']; ?></td>
            <td><?= $n['prename']; ?></td>
            <td><?= $n['fname'];?></td>
            <td><?= $n['lname'];?></td>        
            </td>
        </tr>
        </tbody>
        <?php endforeach ?>
    </table>
</div>
</center>
<br/><br/>
<center>
    <p>© Copyright - 2017 กลุ่มงานยุทธศาสตร์ เทคโนโลยีสารสนเทศ สาธารณสุขจังหวัดชุมพร</p>
</center>
</body>

</html>