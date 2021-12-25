
// Fills in dashboard.php form fields
var formQuestion, formAnswerOne, formAnswerTwo, formAnswerThree;
var getPollInfo = fetch('data/pollInformation.json')
    .then((pollResponse) => {
        return pollResponse.json();
    })
    .then((jsonPollInfo) => {
        document.getElementById("pollQuestion").value = jsonPollInfo.question;
        document.getElementById("answer1").value = jsonPollInfo.answerOne;
        document.getElementById("answer2").value = jsonPollInfo.answerTwo;
        document.getElementById("answer3").value = jsonPollInfo.answerThree;
    });
