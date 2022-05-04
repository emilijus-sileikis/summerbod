var modal = document.querySelector("#login_modal");
console.log(" modal: ",modal)
var btn = document.getElementById("accBtn");
console.log(" btn: ",btn)
var span = document.querySelector("#close_modal");
console.log(" spn: ",span)

btn.addEventListener("click", function(){  modal.classList.toggle("open-modal")
})

span.addEventListener("click", function(){  modal.classList.remove("open-modal")
})

window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
