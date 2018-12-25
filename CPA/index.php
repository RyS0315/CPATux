<?php
    include 'config/dbconfig.php';
    include 'config/permissions.php';
    include 'config/functions.php';
    include 'Classes/createHeader.php';

$menus = [
    [
        'name'=>'Home',
        'link'=>'index.php',
        'active'=>'active'
    ],
    [
        'name'=>'Orders',
        'link'=>'Orders.php',
        'active'=>''
    ],
    [
        'name'=>'Customers',
        'link'=>'Customers.php',
        'active'=>''
    ],
    [
        'name'=>'Events',
        'link'=>'Events.php',
        'active'=>''
    ]
];

    $css[] = ["src"=>"css/core.php","type"=>"css"];
    $title = "CPA-Tuxedo";
    $header = new Header($db, $menus, $title, $css);
    $header->displayHeader();

?>

<section class='page-body'>
    <div class='page-head'>
        <h1 class='page-title'>Home</h1>
        <div id='createEvent' class='button' onclick='ShowNewEvent()'> Add New Event</div>
        <input type='text' placeholder='Search Events' name='events' id='searchevents'>
    </div>
    <div class='sub-page-body'>
        <h1 class='sub-page-title'>This Week's Outfits</h1>
    </div>
</section>

<script src ='js/setBackground.js'></script>
