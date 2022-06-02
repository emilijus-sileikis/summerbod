function generateWorkouts() {
    document.getElementById("boxwithworkouts").style.display = "block";
  }
  
function closeContainer() {
    document.getElementById("boxwithworkouts").style.display = "none";
    document.body.scrollTop = 1000; // For Safari
    document.documentElement.scrollTop = 1000; // For Chrome, Firefox, IE and Opera
  } 
  function closeWorkouts() {
    document.getElementById("challenge-menu-box").style.display = "none";
  }

  function refresh(){
    window.setTimeout("document.getElementById('live').scrollIntoView();", 2000);
    document.getElementById("boxwithworkouts").style.display = "block";

  }