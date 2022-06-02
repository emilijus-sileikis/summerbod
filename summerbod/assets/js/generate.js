  function generateWorkouts() {
    document.getElementById("boxwithworkouts").style.display = "block";
  }
  
  function closeContainer() {
    document.getElementById("boxwithworkouts").style.display = "none";
    document.body.scrollTop = 1000; // For Safari
    document.documentElement.scrollTop = 1000; // For Chrome, Firefox, IE and Opera
  } 
// Nuo cia pasiziurek
  let restart = sessionStorage.getItem("restart") //pasiimam kintamaji
  resetBtn.addEventListener("click", () => { //jei paspaudziam and refresh mygtuko
  sessionStorage.setItem("restart", "true") //padarom kad tipo restartino page
  location.reload() //pareloadinam page
  })
  
  window.onload = () => { //kvieciam tik kai vyksta reloadas
      if(restart){ 
          window.scrollTo(0, document.body.scrollHeight);
          document.getElementById("boxwithworkouts").style.display = "block";
          sessionStorage.clear() // cleans all the session storage
      }
  };
  //istrink komentarus po to
