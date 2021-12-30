<?php 
include 'functions.php'; 
if(isset($_POST['submitPollResponseBtn'])){
    submitPollResponse();
};
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update poll</title>

    <style>
      #pollForm div{
        margin-bottom:10px;
        cursor: pointer;
      }
      #pollForm div:hover{
        background-color:#eee;
      }
    </style>
</head>
<body>
    <!-- Values in form will have to be dynamic -->

<p id="pollQuestion">Please select your answer:</p>

<form action="index.php" method="post" name="pollForm" id="pollForm">
    
    <div id="pollResp1"><input type="radio"  name="poll_response" id="repo1" value="null">
    <label for="html" id="repo1Label">Yes</label></div>

    <div id="pollResp2"><input type="radio" name="poll_response" id="repo2" value="null">
    <label for="css" id="repo2Label">No</label></div>

    <div id="pollResp3"><input type="radio"  name="poll_response" id="repo3" value="null">
    <label for="javascript" id="repo3Label">Maybe</label></div>

    <div id="pollResp4"><input type="radio"  name="poll_response" id="repo4" value="null">
    <label for="javascript" id="repo4Label">Maybe</label></div>

    <div id="pollResp5"><input type="radio"  name="poll_response" id="repo5" value="null">
    <label for="javascript" id="repo5Label">Maybe</label></div>

    <div id="pollResp6"><input type="radio"  name="poll_response" id="repo6" value="null">
    <label for="javascript" id="repo6Label">Maybe</label></div>

    <div id="pollResp7"><input type="radio"  name="poll_response" id="repo7" value="null">
    <label for="javascript" id="repo7Label">Maybe</label></div>

    <br> 
    <br>   
    <input type="submit" value="Submit" name="submitPollResponseBtn">

</form>


<script>

  // Get JSON Poll Information
  var myChartData = [];

  var getPollData = fetch('data/pollInformation.json')
      .then((response) => {
          return response.json();
      })
      .then((pollJson) => {
        question = pollJson[0][1];
        firstResponse = pollJson[1][0];
        secondResponse = pollJson[2][0];
        thirdResponse = pollJson[3][0];
        fourthResponse = pollJson[4][0];
        fifthResponse = pollJson[5][0];
        sixthResponse = pollJson[6][0];
        seventhResponse = pollJson[7][0];
      });

  setTimeout(() => {
      document.getElementById("pollQuestion").innerHTML=question;

      if(firstResponse!=null){
        document.getElementById("repo1").value=firstResponse;
        document.getElementById("repo1Label").innerHTML=firstResponse;
      }else{
        document.getElementById("pollResp1").style.display="none";
      }

      if(secondResponse!=null){
        document.getElementById("repo2").value=secondResponse;
        document.getElementById("repo2Label").innerHTML=secondResponse;
      }else{
        document.getElementById("pollResp2").style.display="none";
      }

      if(thirdResponse!=null){
        document.getElementById("repo3").value=thirdResponse;
        document.getElementById("repo3Label").innerHTML=thirdResponse;
      }else{
        document.getElementById("pollResp3").style.display="none";
      }

      if(fourthResponse!=null){
        document.getElementById("repo4").value=fourthResponse;
        document.getElementById("repo4Label").innerHTML=fourthResponse;
      }else{
        document.getElementById("pollResp4").style.display="none";
      }

      if(fifthResponse!=null){
        document.getElementById("repo5").value=fifthResponse;
        document.getElementById("repo5Label").innerHTML=fifthResponse;
      }else{
        document.getElementById("pollResp5").style.display="none";
      }

      if(sixthResponse!=null){
        document.getElementById("repo6").value=sixthResponse;
        document.getElementById("repo6Label").innerHTML=sixthResponse;
      }else{
        document.getElementById("pollResp6").style.display="none";
      }

      if(seventhResponse!=null){
        document.getElementById("repo7").value=seventhResponse;
        document.getElementById("repo7Label").innerHTML=seventhResponse;
      }else{
        document.getElementById("pollResp7").style.display="none";
      }

  }, 1000)


</script>

</body>
</html>