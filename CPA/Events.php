<?php
    include 'config/dbconfig.php';
    include 'config/permissions.php';
    include 'config/functions.php';
    include 'Classes/createHeader.php';
    include 'Classes/UpcomingEvents.php';

$menus = [
    [
        'name'=>'Home',
        'link'=>'index.php',
        'active'=>''
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
        'active'=>'active'
    ],
    [
        'name'=>'Out of Town Measurments',
        'link'=>'https://www.weebly.com/home/form/509606888309098280',
        'active'=>''
    ]
];

    $css[] = ["src"=>"css/core.php","type"=>"css"];
    $title = "CPA-Events";
    $header = new Header($db, $menus, $title, $css);
    $header->displayHeader();

    include 'event-prompt.php';

    $week = isset($_POST['filterweek']) ? $_POST['filterweek'] : date('M-d-Y');
    $displaydate = isset($_POST['filterweek']) ? "Week of" . $_POST['filterweek'] : "This Week";
    $event = new eventDisplayer($db);
    $filter['week'] = $week;
?>


<section class='page-body' >
    <div class='page-head'>
        <h1 class='page-title'>Events</h1>
        <div id='createEvent' class='button' onclick='ShowNewEvent()'> Add New Event</div>
        <input type='text' placeholder='Search Events' name='events' id='searchevents'>
    </div>
    <div class='sub-page-body'>
        <div class='table-container'>
            <h1 class='sub-page-title'>Events For <?php echo $displaydate ?></h1>
            <?php $event->displayEvents($filter) ?>
        </div>
    </div>
</section>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="js/events.js"></script>
<script src ='js/setBackground.js'></script>
