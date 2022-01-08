<?php 
include 'functions.php'; 
if(isset($_POST['updatePollBtn'])){
    updatePoll();
};
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='assets/css/main.css'>
    <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
    <title>Poll: Dashboard</title>
</head>
<body>

<p>NATvigADER Poll Dashboard</p>

<form id="pollForm" method="post" action="dashboard.php" autocomplete="off" onsubmit="return validateMyForm();">
    <textarea id="pollQuestion" name="pollQuestion"></textarea>
    <br>
    <br>
    <input type="text" class="pollResponse" id="response1" name="response1" placeholder='Response 1' value="" onblur="if(this.placeholder==''){ this.placeholder='Response 1';}" onfocus="if(this.placeholder=='Response 1'){this.placeholder=''}"/>

    <br>
    <br>
    <input type="text" class="pollResponse" id="response2" name="response2" placeholder='Response 2' value="" onblur="if(this.placeholder==''){ this.placeholder='Response 2';}" onfocus="if(this.placeholder=='Response 2'){this.placeholder=''}">
    <br>
    <br>
    <input type="text" class="pollResponse" id="response3" name="response3" placeholder='Response 3' value="" onblur="if(this.placeholder==''){ this.placeholder='Response 3';}" onfocus="if(this.placeholder=='Response 3'){this.placeholder=''}">
    <br>
    <br>
    <input type="text" class="pollResponse" id="response4" name="response4" placeholder='Response 4' value="" onblur="if(this.placeholder==''){ this.placeholder='Response 4';}" onfocus="if(this.placeholder=='Response 4'){this.placeholder=''}">
    <br>
    <br>
    <input type="text" class="pollResponse" id="response5" name="response5" placeholder='Response 5' value="" onblur="if(this.placeholder==''){ this.placeholder='Response 5';}" onfocus="if(this.placeholder=='Response 5'){this.placeholder=''}">
    <br>
    <br>
    <input type="text" class="pollResponse" id="response6" name="response6" placeholder='Response 6' value="" onblur="if(this.placeholder==''){ this.placeholder='Response 6';}" onfocus="if(this.placeholder=='Response 6'){this.placeholder=''}">
    <br>
    <br>
    <input type="text" class="pollResponse" id="response7" name="response7" placeholder='Response 7' value="" onblur="if(this.placeholder==''){ this.placeholder='Response 7';}" onfocus="if(this.placeholder=='Response 7'){this.placeholder=''}">
    <br> 
    <br>   
    <input type="submit" value="Create Poll" name="updatePollBtn">
    <input type="submit" value="Delete Poll" name="deletePollBtn">
    <input type="submit" value="Update Poll" name="updatePollBtn"> 
</form> 
<script src='assets/js/main.js'></script>
</body>
</html>