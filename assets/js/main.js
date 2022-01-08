
// Highlight dashboard text input fields if contains characters other than placeholder
let pollInput = document.querySelectorAll(".pollResponse");

pollInput.forEach(function (pollInputField) {
    pollInputField.addEventListener('keyup', function () {
        if (this.value != "") {
            this.classList.add('pollResponseActive');
        } else {
            this.classList.remove('pollResponseActive')
        }
    })
})

// Fill in dashboard textarea/text feilds with current poll question and responses

setTimeout(() => {
    let i = 1;
    var displayPollData = fetch('data/pollInformation.json')
        .then((response) => {
            return response.json();
        })
        .then((pollJson) => {
            if (pollJson[0][1] != null) {
                document.getElementById("pollQuestion").value = pollJson[0][1];
                document.getElementById("pollQuestion").innerText = pollJson[0][1];
                document.getElementById("pollQuestion").classList.add('pollResponseActive');
            }
            while (i <= 7) {
                if (pollJson[i][0] != null) {
                    document.getElementById("response" + i).value = pollJson[i][0];
                    document.getElementById("response" + i).innerText = pollJson[i][0];
                    document.getElementById("response" + i).classList.add('pollResponseActive');
                }
                i++;
            }
            runCKEditor();
        });
}, 1000)


function runCKEditor() {
    $("<script src='assets/js/main.js'></script><script src='assets/js/ckeditor/ckeditor.js'></script><script src='assets/js/editorplaceholder/plugin.js'></script><script> CKEDITOR.replace('pollQuestion', {extraPlugins: 'editorplaceholder',editorplaceholder: 'Type poll question here...'});</script>").appendTo('body');
}

function validateMyForm() {

}