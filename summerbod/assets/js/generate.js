  function generateWorkouts() {
    document.getElementById("boxwithworkouts").style.display = "block";
  }
  
  function closeContainer() {
    document.getElementById("boxwithworkouts").style.display = "none";
    document.body.scrollTop = 1000; // For Safari
    document.documentElement.scrollTop = 1000; // For Chrome, Firefox, IE and Opera
  } 

  let restart = sessionStorage.getItem("restart") 
  resetBtn.addEventListener("click", () => { 
  sessionStorage.setItem("restart", "true") 
  location.reload() 
  })
  
  window.onload = () => {
      if(restart){ 
          window.scrollTo(0, document.body.scrollHeight);
          document.getElementById("boxwithworkouts").style.display = "block";
          sessionStorage.clear()
      }
  };
