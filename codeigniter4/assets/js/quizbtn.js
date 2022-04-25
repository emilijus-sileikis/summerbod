document.getElementById('nextbtn').addEventListener('click', function(e) {

var n = e.target.href.split('-')[1] * 1 + 1;

if (n > 4) //Number of questions
    n = 1;
e.target.href = e.target.href.split('-')[0] + '-' + n;
}, false);
