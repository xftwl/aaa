<?php
header("content-type: text/xml");

$number = $_REQUEST["PhoneNumber"];

$callerId = "+815031597071";
?>
<Response>
    <Dial callerId="<?php echo $callerId ?>">
        <Number><?php echo $number;?></Number>
    </Dial>
</Response>
