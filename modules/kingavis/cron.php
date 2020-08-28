<?php 

include(dirname(__FILE__).'/../../config/config.inc.php');
include(dirname(__FILE__).'/../../init.php');

$kingavis = Module::getInstanceByName('kingavis');
// step 1
$kingavis->traceHistoryOrders();
// step 2
$kingavis->sendOrdersToKingAvis();
// step 3
$kingavis->authorizeSendReview();

echo 'OK';

?>