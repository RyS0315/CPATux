<?php

    class EventDisplayer{
        protected $db;//Sets the Database -- Allows for queries in this class
        
        protected $event;//Array will key eventid, and values of event

        protected $column;

        Public function __construct($db){
            $this->db = $db;
        }

        function displayEvents($filter){
            $this->getEventInfo($filter['week']);
            $this->buildColumns();
            $this->buildTable();
        }

        function getEventInfo($week){
            $startrange = date('Y-m-d H:i:s', strtotime("$week -0 months -7 days -0 years"));
            $endrange = date('Y-m-d H:i:s', strtotime("$week +1 days"));
            $query = "SELECT * 
                      FROM EVENTS 
                      WHERE eventDate > '$startrange' 
                      AND eventDate < '$endrange'";
            $eventinfo = $this->db->fetchQuery($query);
            foreach($eventinfo as $i){
                $this->event[$i['groupID']]['date'] = date("M-d-Y", strtotime($i['eventDate']));
                $this->event[$i['groupID']]['name'] = $i['group_name'];
                $this->event[$i['groupID']]['lead'] = $this->getLeadName($i['leadID']);
                $this->event[$i['groupID']]['type'] = $i['groupType'];
                $this->event[$i['groupID']]['id'] = $i['groupID'];
            }
            // print_ary($this->event);
        }

        function getLeadName($id){
            $query = "SELECT first_name, last_name
                      FROM Customers
                      WHERE custId = $id";
            $result = $this->db->fetchQuery($query);
            return $result[0]['first_name'] ." ". $result[0]['last_name'];
        }

        function buildColumns(){
            foreach($this->event as $i){
                $this->column['EventID'][] = $i['id'];
                $this->column['Event-Name'][] = $i['name'];
                $this->column['Event-Type'][] = $i['type'];
                $this->column['Event-Date'][] = $i['date'];
                $this->column['Event-Leader'][] = $i['lead'];
            }
        }

        function buildTable(){
            $keys = array_keys($this->column);
            foreach($keys as $i){
                $key[] = str_replace("-", " ", $i);
            }
            $itr = 0;
            echo"<div class='table'>";
            foreach($this->column as $i){
                echo "<div class='table-column ".$keys[$itr]."'>
                    <div class='column-header'>
                    <p>".$key[$itr]."</p>
                    </div>"; 
                    $num = 0;
                    foreach($i as $value){
                        echo"
                            <div class='column-value' 
                                 id=".$keys[$itr]."--".$this->column['EventID'][$num]." 
                                 onClick='openEvent(this)'>
                                <p>".$value."</p>   
                            </div>
                        ";
                        $num += 1;
                    }
                echo"</div>";
                $itr += 1;
            }
            echo"<form method='post' action='viewEvent.php'>";
            foreach($this->column['EventID'] as $i){
                echo"<button class='hidden' name='eventid' type='submit' id='event-button--".$i."' value='".$i."'></button>";
            }
            echo"</form>";
            echo "</div>";
        }
    }
?>