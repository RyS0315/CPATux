<?php

    class header{
        protected $db;//Sets the Database -- Allows for queries in this class

        protected $menus; 

        protected $title;

        protected $css;

        Public function __construct($db,$menus,$title,$css){
            $this->db = $db;
            $this->menus = $menus;
            $this->title = $title;
            $this->css = $css;
        }

        function displayHeader(){
            $this->createTitle();
                
            echo "<section class='header'>
                    <div class='header-box'>
                    <ul class='header-link-box'>
                    <a href='http://www.centralpatux.com/out-of-town-ushers.html'><p class='header-title'>- CPA TUXEDO -</p></a>";
            foreach($this->menus as $i){
                echo "<li class='header-link ".$i['active']."'>
                <a href='".$i['link']."'>".$i['name']."</a>
              </li>";
            }
            echo "</ul>";
            echo "</div>
            </section>";
        }

        function createTitle(){
            echo "<html>
                     <head>
                         <title>".$this->title."</title>
                         <link rel='shortcut icon' href='images/icons/favicon.png'>
                     </head>
                     <body>
                     <div class='background-imgs'>
                     <img id='background-img-left' class='background-img-left' src=''>
                     <img id='background-img-right' class='background-img-right' src=''>
                     </div>";
             $this->addcss();
             echo "<div id='overlay' class='overlay hidden'></div>";
         }
 
         function addcss(){
             foreach($this->css as $i){
                 echo "<link rel='stylesheet' type='text/css' href='".$i["src"]."'>";
                 continue;
             }
         }
    }


?>