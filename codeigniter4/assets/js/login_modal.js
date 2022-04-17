// Get the modal
var modal = document.querySelector("#login_modal");
console.log(" modal: ",modal)
// Get the button that opens the modal
var btn = document.getElementById("myBtn");
console.log(" btn: ",btn)
// Get the <span> element that closes the modal
var span = document.querySelector("#close_modal");
console.log(" spn: ",span)
// When the user clicks the button, open the modal 
btn.addEventListener("click", function(){  modal.classList.toggle("open-modal")
})

// When the user clicks on <span> (x), close the modal
span.addEventListener("click", function(){  modal.classList.remove("open-modal")
})

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

