
<style>

td:nth-last-child(1){ background-color: rgb(0, 255, 21);}
td:nth-last-child(2){ background-color: rgb(0, 255, 21);}
td:nth-last-child(3){ background-color: rgb(0, 255, 21);}
td:nth-last-child(4){ background-color: rgb(0, 255, 21);}
td:nth-last-child(5){ background-color: rgb(0, 255, 21);}
td:nth-last-child(6){ background-color: rgb(0, 255, 21);}
td:nth-last-child(7){ background-color: rgb(0, 255, 21);}
td:nth-last-child(8){ background-color: rgb(0, 255, 21);}


td:nth-child(1){background-color: rgb(255, 33, 33) ; padding:0px 9px;}

a{
    color:white;
    text-decoration: none;
    width: 17px;
    height: 15px;
    padding: 3px 34px;
    background: red;
    letter-spacing: 1px;
    background-color: #9c27b0;
    transition: 0.1s;
    font-size: 14px;
}
a:hover{
    background: #ff9800;
    color:white;
}
td {
    border: 1px solid black;
    text-align: center;
    margin: -3px !important;
}
</style>
<?php
//database connect

$host = "localhost";
$user ="student";
$password = "student@2021";
$database = "mysite";
 $connect =  mysqli_connect($host, $user, $password, $database);




?>