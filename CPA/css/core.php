<?php
header("Content-type: text/css; charset: UTF-8");

$theme = [
    'Light'=>['background'=>'#e9e9ef',
              'text'=>'#ffffff',
              'boxcolor'=>'#000040',
              'link'=>'#a8a8a8',
              'feed'=>'#ffffff',
              'menuborder'=>'#000040',
              'boldcolor'=>'#000000',
              'buttoncolor'=>'#121299',
              'buttonhover'=>'#020288',
              'commentbox'=>'#fbfbfb']
            ];
$chosen='Light';
$backgroundcolor = $theme[$chosen]['background'];
$boxcolor = $theme[$chosen]['boxcolor'];
$textcolor = $theme[$chosen]['text'];
$linkcolor = $theme[$chosen]['link'];
$feedcolor = $theme[$chosen]['feed'];
$menuborder = $theme[$chosen]['menuborder'];
$boldcolor = $theme[$chosen]['boldcolor'];
$buttoncolor = $theme[$chosen]['buttoncolor'];
$buttonhover = $theme[$chosen]['buttonhover'];
$commentcolor = $theme[$chosen]['commentbox'];

?>

/*************** COMMON ******************/
    html{
        font-size:16px;
        letter-spacing:1px;
    }

    body{
        margin:0px; 
        height:100%;
        width:100%;
    }
    
    ::placeholder{
        color:rgba(0,0,0,.4);
    }

    p{
        color:#000000;
        margin-block-start: 0px;
        margin-block-end: 0em;
        margin-inline-start: 0px;
        margin-inline-end: 0px;
        font-family: 'bodoni FLF';

    }

    h1{
        margin-block-start: 0px;
        margin-block-end: 0em;
        margin-inline-start: 0px;
        margin-inline-end: 0px;
        font-family: 'cooper Hewitt';

    }

    input{
        margin-bottom:10px;
        width:50%;
        height:35px;
        border-color:rgb(0,0,0,.15);
        border-radius:5px;
        text-indent: 5px;
        font-size:16px;
    }

    input:focus{
        outline:none;
    }

    select{
        margin-bottom:10px;
        width:70%;
        height:35px;
        border-color:rgb(0,0,0,.15);
        border-radius:5px;
        text-indent: 5px; 
    }

    textarea {
        resize: none;
        overflow: hidden;
        min-height: 35px;
        width:95%;
        border-color:#1DA1F2;
        font-size:16px;
        border-radius:7px;
        text-indent: 5px;
    }

    form {
        margin-bottom: 0em;
    }

    textarea:focus{
        outline: none;
    }

    .error{
        color:#b31b1b;
    }

    a{
        text-decoration: none;
    }

    a:hover{
        text-decoration: none;
    }

    ul{
        padding:0px;
        display: flex;
    }

    #header-profile-menu-list{
        display:block;
    }

    li{
        list-style-type:none;
    }

    .hidden{
        display:none !important;
    }

    .logo-box{
        width:20%;
    }

    .logo{
        height:46px;
        width:46px;
        border-radius:50%;
        border-color:<?php echo $boxcolor ?>;
    }

    .logo-li{
        transform: translateY(-29%);
        margin:auto;
    }

    .inputfile {
        width: 0.1px;
        height: 0.1px;
        opacity: 0;
        overflow: hidden;
        position: absolute;
        z-index: -1;
    }

    label{
        width:auto;
        height:auto;
        padding:7px;
        border-radius:100px;
        border-style:solid;
        border-width:1px;
        border-color:<?php echo $boldcolor?>;
        background-color:<?php echo $buttoncolor?>;
        display:inline-block;
    }

    label:hover{
        cursor:pointer;
        background-color:<?php echo $buttonhover ?>;
    }

    .overlay{
        position:fixed;
        height:100%;
        width:100%;
        background-color:rgba(0,0,0,.6);
        z-index:99;
        overflow-y:auto;
        padding-bottom:50px;
    }

    .close{
        height:30px;
        width:30px;
        position:absolute;
        right:25px;
        top:10px;
    }

    .close:hover{
        cursor:pointer;
    }

    .page-body{
        z-index:100;
        padding-top:50px;
        padding-bottom:25px;
        height:100%;
    }

    .page-head{
        margin-bottom:30px;
        background-color:<?php echo $backgroundcolor ?>;
        padding-left:75px;
        padding-right:75px;
        z-index:1;
        display:inline-flex;
        width:calc(100% - 150px);
        height:60px;
        padding-bottom:10px;
        padding-top:10px;
        border-bottom-style:solid;
        border-bottom-width:1px;
        border-bottom-color:<?php echo $boxcolor ?>;
    }

    .page-title{
        font-size:40px;
        color:#000022;
        margin:auto;
        white-space:nowrap;
    }

    .sub-page-body{
        opacity:0.95;
        width:70%;
        min-height:75%;
        margin:auto;
        padding-top:25px;
        padding-right:50px;
        padding-left:50px;
        border-radius:5px;
        background-color:<?php echo $backgroundcolor ?>;
        border-style:solid;
        border-width:1px;
        border-color:<?php echo $boxcolor ?>;
        margin-bottom:30px;
    }

    .sub-page-body h1{
        font-size:26px;
    }

    .button{
        width:auto;
        padding-top:5px;
        padding-bottom:5px;
        padding-right:10px;
        padding-left:10px;
        border-radius:100px;
        border-style:solid;
        border-width:1px;
        border-color:<?php echo $boldcolor?>;
        background-color:<?php echo $buttoncolor?>;
        color:#ffffff;
        font-size:20px;
        margin:auto;
        white-space:nowrap;
    }

    .button:hover{
        cursor:pointer;
        background-color:<?php echo $buttonhover ?>;
    }

    .background-imgs{
        position:fixed;
        height:100%;
        width:100%;
        display:inline-flex;
        z-index:-5;
    }

    .background-img-right{
        min-height:100%;
        width:50%;
        overflow:hidden;
        filter:blur(2px);
    }

    .background-img-left{
        min-height:100%;
        width:50%;
        overflow:hidden;
        filter:blur(2px);
    }
/*************** HEADER ******************/
    .header{
        height:50px;
        width:100%;
        border-bottom-style:solid;
        border-bottom-width:1px;
        border-bottom-color:rgba(0,0,0,.5);
        background-color:<?php echo $boxcolor ?>;
        position:fixed;
        z-index:50;
    }

    .header-title{
        font-size:18px;
        font-family:'Palatino';
        color:#ffffff;
        padding-right:10px;
        white-space:nowrap;
        letter-spacing:2px;
    }
    
    .header-box{
        width:95%;
        margin:auto;
        display:flex;
        height:calc(100% - 16px);
    }

    .header-link-box{
        width:50%;
    }
    
    .header-link>a{
        color:<?php echo $textcolor ?>;
        text-decoration:none;
        font-size:18px;
        text-align: center;
        display:inline-block;
        height:100%;
        width: calc(100% + 40px);
        transform: translateX(-20px);
    }
    
    .header-link{
        width:auto;
        padding-right:20px;
        padding-left:20px;
        height:calc(100% - 2px);
        transition: .5s ease-in;
        white-space:nowrap;
    }
    
    .header-link:hover{
        border-bottom-style:solid;
        border-bottom-color: <?php echo $linkcolor ?>;
        border-bottom-width:3px;
    }
    
    .active{
        border-bottom-style:solid;
        border-bottom-width:3px;
        border-bottom-color: <?php echo $linkcolor?>;
    }
    
    .active a{
        color:<?php echo $linkcolor ?>;
    }
    
    .header-link:hover a{
        color:<?php echo $linkcolor?>;
    }

    .header-profile-pic{
        width:40%;
        transform: translateY(-35%);
    }

    #header-profile-pic-link:hover{
        cursor:pointer;
        border-width:3px;
        border-color:<?php echo $linkcolor ?>;
    }

    #header-profile-pic-link{
        margin-left:50%;
        margin-top:-13px;
    }

    .index-profile-pic{
        border-radius: 50%;
        height: 45px;
        width: 45px;
        border-color: <?php echo $boxcolor?>;
        color: #fff;
        margin:auto;
    }

    .index-profile-pic:hover{
    }

    #header-profile-menu{
        height:auto;
        width:200px;
        position:fixed;
        margin-top:50px;
        margin-left:73%;
        background-color:<?php echo $feedcolor?>;
        border-radius:5px;
        border-color:<?php echo $menuborder ?>;
        border-width:1px;
        border-style:solid;
    }


    .header-profile-menu-name{
        display:block;
        height:calc(25% - 10px);
        width:100%;
        padding-top:10px;
        margin-block-start: 0em;
        margin-block-end: 0em;
        border-bottom-color:<?php echo $menuborder ?>;
        border-bottom-width:1px;
        border-bottom-style:solid;
    }
    
    .header-profile-menu-name:hover{
        background-color:<?php echo $backgroundcolor ?>;
    }
    
    .header-profile-menu-name-name>a{
        color:<?php echo $boldcolor ?>;
        font-weight:bold;
        text-decoration:none;
        font-size:22px;
        display:inline-block;
        height:100%;
        width:100%;
        padding-left:10px;
        width:calc(100% - 10px);
    }
    
    .header-profile-menu-name-name{
        height:40%;
    }
    
    .header-profile-menu-name-username{
        height:60%;
    }
    
    .header-profile-menu-name-username>a{
        padding-bottom:10px;
        color:<?php echo $textcolor ?>;
        text-decoration:none;
        font-size:16px;
        padding-left:20px;
        width:calc(100% - 20px);
        display:inline-block;
        height:100%;
    }

    .header-profile-menu-settings{
        display:block;
        height:auto;
        margin-block-start: 0em;
        margin-block-end: 0em;
        border-bottom-color:<?php echo $menuborder ?>;
        border-bottom-width:1px;
        border-bottom-style:solid;
    }

    .header-profile-menu-list-item:hover{
        background-color:<?php echo $backgroundcolor?>;
    }

    .header-profile-menu-list-item>a{
        color:<?php echo $textcolor ?>;
        text-decoration:none;
        font-size:16px;
        padding-left:10px;
        width:calc(100% - 10px);
        display:inline-block;
        padding-top:10px;
        height:calc(100% - 10px);
    }

    .header-profile-menu-list-item{
        height:40px;
    }

    .header-profile-menu-logout{
        display:block;
        height:auto;
        margin-block-start: 0em;
        margin-block-end: 0em;
    }

    #sort-compose{
        margin-left:3%;
        margin-top:-6px;
    }
/*************** EVENTS ******************/
    #createEvent{
        margin-left:40%;
    }


    #searchevents{
        width:30%;
        margin-left:20px;
        margin:auto;
    }

    .event-box{
        width:47%;
        margin:auto;
        background-color:<?php echo $backgroundcolor ?>;
        margin-top:150px;
        border-radius:5px;
        padding:20px;
        border-style:solid;
        border-color:#000000;
        border-width:1px;
        margin-bottom:100px;
    }

    .new-event-title{
        font-size:30px;
        color:#000000;
    }

    .event-box-breadcrumbs{
        display:flex;
        padding-top:15px;
        padding-bottom:10px;
        border-bottom-style:solid;
        border-bottom-width:1px;
        border-bottom-color:#000000;
    }

    .breadcrumb{
        margin-right:15px;
        font-size:20px;
        color:#777777;
        font-weight:bold;
    }

    .bc-visible{
        color:<?php echo $buttoncolor ?>;
    }

    .bc-complete{
        color:#000000;
    }

    .bc-complete:hover{
        cursor:pointer;
    }

    .event-content{
        width:90%;
        margin:auto;
        padding-top:25px;
        padding-bottom:25px;
        border-bottom-style:solid;
        border-bottom-width:1px;
        border-bottom-color:#000000;
    }

    #name-input{
        margin-top:10px;
        width:100%;
    }

    #date-input{
        margin-top:10px;
        width:30%;
    }

    .event-content-title{
        display:inline-block;
    }

    .content-title-desc{
        color:#000000;
        font-size:16px;
        display:inline-block;
        padding-left:5px;
    }

    .event-box-submit{
        padding-top:25px;
        display:inline-flex;
        width:90%;
        margin:auto;
    }


    #nextDesc{
        
    }

    .event-style-sale{
        display:inline-block;
        color:#000000;
        font-size:16px;
        margin-right:25px;
    }

    .name-input{
        display:inline-block;
        width:32%;
        margin:auto;
        margin-right:10px;
        margin-left:0px;
    }

    .party-member{
        display:flex;
        padding-top:10px;
    }

    .add-party-member{
        display:inline-block;
        margin:auto;
        margin-right:20px;
        margin-left:0px;
        height:20px;
        width:20px;
    }

    .add-party-member:hover{
        cursor:pointer;
    }
    
    .party-member-desc{
        font-size:18px;
        color:#222222;
        padding-right:10px;
        text-transform:Capitalize;
    }

    .error-msg{
        color:ff0000;
        display:block;
        margin:auto;
        margin-left:0px;
    }

    .drop-party-member{
        display:inline-block;
        margin:auto;
        margin-right:20px;
        margin-left:0px;
        height:20px;
        width:20px;
    }

    .drop-party-member:hover{
        cursor:pointer;
    }
/*************** CUSTOMER ************/
    #createCustomer{
        margin-left:50%;
    }
/*************** TABLE *******************/
    .table-container{
        width:97%;
        margin:auto;
        overflow-x:auto;
    }

    .table{
        display:inline-flex;
        width:auto;
        border-style:solid;
        border-radius:5px;
        border-width:1px;
        border-color:#000000;
        margin-top:25px;
    }

    .table-column{
        width:auto;
        border-right-style:solid;
        border-right-radius:5px;
        border-right-width:1px;
        border-right-color:#000000;
    }

    .column-header{
        background-color:<?php echo $buttoncolor ?>;
        white-space:nowrap;

    }

    .column-header p{
        max-height:30px;
        padding-left:15px;
        padding-right:30px;
        font-size:20px;
        color:#ffffff;
        padding-top:15px;
        padding-bottom:15px;
        text-transform:Capitalize;
    }

    .column-value{
        border-top-style:solid;
        border-top-width:1px;
        border-top-color:#000000;
    }

    .column-value:hover{
        background-color:#cccccc;
        cursor:pointer;
    }

    .column-value p{
        padding-left:15px;
        padding-right:30px;
        font-size:16px;
        padding-top:15px;
        padding-bottom:15px;
    }

    .EventID{
        width:auto;
    }

    .Event-Leader{
        border-right-style:none;
    }

