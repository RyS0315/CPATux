<?php
    include '../config/dbconfig.php';
    include '../config/permissions.php';
    include '../config/functions.php';

    print_ary($_POST);

    $eventid  = createEvent();
    $custids = createCustomers();
    linkCustomerToEvent($eventid, $custids);
?>