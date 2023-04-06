<?php
if ($Date > 31 || $Month > 12) { ?>
    <script type="text/javascript">
        alert("วันที่หรือเดือนที่คุณกรอกนั้นไม่มีในปฎิทิน:<?php echo  $rs; ?>");
        history.go(-1);
    </script>
<?php } else { ?>
    <script type="text/javascript">
        alert("วันที่ที่คุณกรอกนั้นไม่มีในเดือน:<?php echo  $Month; ?>ปี:<?php echo $Year; ?>");
        history.go(-1);
    </script>
<?php } ?>
