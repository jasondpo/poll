<?php

function updatePoll(){

    $pollArray = array
    (
        array("Poll","..."),
        array("respOne",0),
        array("respTwo",0),
        array("respThree",0),
        array("respFour",0),
        array("respFive",0),
        array("respSix",0),
        array("respSeven",0)
    );

    if($_POST["pollQuestion"]!=null){
        $pollArray[0][1] = $_POST["pollQuestion"]; 
    };

    if($_POST["response1"]!=null){
        $pollArray[1][0]=$_POST["response1"];
    }else{
        $pollArray[1][0]=null;
    }

    if($_POST["response2"]!=null){
        $pollArray[2][0]=$_POST["response2"];
    }else{
        $pollArray[2][0]=null;
    }

    if($_POST["response3"]!=null){
        $pollArray[3][0]=$_POST["response3"];
    }else{
        $pollArray[3][0]=null;
    }

    if($_POST["response4"]!=null){
        $pollArray[4][0]=$_POST["response4"];
    }else{
        $pollArray[4][0]=null;
    }

    if($_POST["response5"]!=null){
        $pollArray[5][0]=$_POST["response5"];
    }else{
        $pollArray[5][0]=null;
    }

    if($_POST["response6"]!=null){
        $pollArray[6][0]=$_POST["response6"];
    }else{
        $pollArray[6][0]=null;
    }

    if($_POST["response7"]!=null){
        $pollArray[7][0]=$_POST["response7"];
    }else{
        $pollArray[7][0]=null;
    }

    $newPollinfInfo = json_encode($pollArray);

    //write json to file
    $files = array('data/pollInformation.json', 'data/totalResponses.json');

    foreach($files as $file){
        if (file_put_contents($file, $newPollinfInfo))
        echo "New poll information submitted successfully.";
        else 
        echo "Oops! Error submitting new polling information...";
    }
}




function submitPollResponse(){
    $pollData = file_get_contents("data/totalResponses.json");
    $pollData = json_decode($pollData, true);

    for ($x = 0; $x <= count($pollData); $x++) {
        if($_POST["poll_response"]==$pollData[$x][0]){
            $pollData[$x][1]=$pollData[$x][1]+1;
        }
    }

    $totalResponses = json_encode($pollData);

    //write json to file
    if (file_put_contents("data/totalResponses.json", $totalResponses))
    echo "Poll response submitted successfull.";
    else 
    echo "Oops! Error submitting response...";
}