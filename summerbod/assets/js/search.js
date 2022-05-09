function filter() {
    // Declare variables
    var input, filter, ul, li, a, i, txtValue;
    input = document.getElementById('searchInput');
    filter = input.value.toUpperCase();
    ul = document.getElementById("searchUL");
    li = ul.getElementsByTagName('li');

    // Unclear list
    document.getElementById('searchUL').style.display= "block";
  
    // Loop through all list items, and hide those who don't match the search query
    for (i = 0; i < li.length; i++) {
      a = li[i].getElementsByTagName("a")[0];
      txtValue = a.textContent || a.innerText;
      if (filter!== "" && a.innerHTML.toUpperCase().indexOf(filter) > -1) {
        li[i].style.display = "block";
      } else {
        li[i].style.display = "none";
      }
    }
  }

  // Remove the input value
    document.getElementById('clearBtn').onclick = function() {
      document.getElementById('searchInput').value='';
      clear();
   };

// Clear list when button is pressed
function clear() {
  document.getElementById('searchUL').style.display= "none";
}

    window.onscroll = function() {myFunction()};

function myFunction() {
  if (document.body.scrollTop > 2 || document.documentElement.scrollTop > 2) {
    document.getElementById('searchInput').style = "z-index: 0;";
    document.getElementById('clearBtn').style = "z-index: 0;";
  } else {
    document.getElementById('searchInput').style = "z-index: 100;";
    document.getElementById('clearBtn').style = "z-index: 100;";
  }
}