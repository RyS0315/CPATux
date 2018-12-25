<?php
    include 'config/dbconfig.php';
    include 'config/permissions.php';
    include 'config/functions.php';
    include 'Classes/createHeader.php';

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
            'active'=>''
        ]
    ];
    
        $css[] = ["src"=>"css/core.php","type"=>"css"];
        $title = "CPA-Tuxedo";
        $header = new Header($db, $menus, $title, $css);
        $header->displayHeader();

    $eventid = isset($_POST['eventid']) ? $_POST['eventid'] : '';
    if($eventid == ''){
        header('Location:Events.php');
    }

    $eventquery = "SELECT * FROM EVENTS WHERE groupID = $eventid";
    $eventinfo = $db->fetchQuery($eventquery);
?>

<section class='page-body' >
    <div class='page-head'>
        <h1 class='page-title'><?php echo $eventinfo[0]['group_name'] ?></h1>
        <div id='createEvent' class='button' onclick='ShowNewEvent()'> Add New Event</div>
        <input type='text' placeholder='Search Events' name='events' id='searchevents'>
    </div>
    <div class='sub-page-body'>
        <div class='table-container'>

        </div>
    </div>
</section>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="js/events.js"></script>
<script src ='js/setBackground.js'></script>