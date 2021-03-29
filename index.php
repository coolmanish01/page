<?php
require_once 'detect.php';
$detect = new Mobile_Detect;
// Any mobile device (phones or tablets).
if ( $detect->isMobile() ) {
header ("Location: mobile.html");
}
else {
header ("Location: desktop.html");
}