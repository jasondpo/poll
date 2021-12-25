<?php

function updatePoll(){
    // $pollInfo= file_get_contents("data/pollInformation.json");
    // $pollInfo = json_decode($pollInfo, true);

    $pollArrayQA = array
    (
      'question' => "Question goes here",
      'answerOne' => "Answer numner one",
      'answerTwo' => "Answer numner two",
      'answerThree' => "Answer numner three",
    );

    if($_POST["pollQuestion"]!=null){
        $pollArrayQA['question'] = $_POST["pollQuestion"]; 
    };
    if($_POST["answer1"]!=null){
        $pollArrayQA['answerOne'] = $_POST["answer1"]; 
    };
    if($_POST["answer2"]!=null){
        $pollArrayQA['answerTwo'] = $_POST["answer2"]; 
    };
    if($_POST["answer3"]!=null){
        $pollArrayQA['answerThree'] = $_POST["answer3"]; 
    };

    $newPollinfInfo = json_encode($pollArrayQA);

    //write json to file
    if (file_put_contents("data/pollInformation.json", $newPollinfInfo))
    echo "New poll information submitted successfully.";
    else 
    echo "Oops! Error submitting new polling information...";
    
}

function submitPollResponse(){
    $data= file_get_contents("data/totalResponses.json");
    // if($data==false){
    //     fopen("data/totalResponses.json", "w");
        
    // }
    $data = json_decode($data, true);
    
    $userResponse = array
    // Keys must match index.php form input values?
    (
      'yes' => $data["yes"],
      'no' => $data["no"],
      'maybe' => $data["maybe"]
    );

    $response = $_POST["poll_response"];
    if($response == "yes"){
        $userResponse['yes'] = $userResponse['yes']+1;
    };
    if($response == "no"){
        $userResponse['no'] = $userResponse['no']+1;
    };
    if($response == "maybe"){
        $userResponse['maybe'] = $userResponse['maybe']+1;
    };

    $totalResponses = json_encode($userResponse);

    //write json to file
    if (file_put_contents("data/totalResponses.json", $totalResponses))
    echo "Poll response submitted successfull.";
    else 
    echo "Oops! Error submitting response...";
    
} 


