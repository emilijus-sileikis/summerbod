//Work in progress
var count = 0;
const url = document.URL;
const lastSegment = url.split("/").pop();

document.getElementById('quizbtn').addEventListener('click', function(e) {
++count;
    if (url.split("-").pop().toString() === '3') {
        document.getElementById('quizbtn').innerText = 'Finish';
    }

    else {
        document.getElementById('quizbtn').innerText = 'Next';
    }

}, false);