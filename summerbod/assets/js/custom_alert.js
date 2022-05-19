function customAlert(msg, duration) {
    var styler = document.createElement("div");
    styler.setAttribute("style", "border:solid 2px black; background-color:#e6e6e6; border-radius:15px; color:black; position:fixed; width:auto; height:auto; top:50%; left:50%; padding:2%; text-align:center; transform:translate(-50%,-50%);");
    styler.innerHTML = "<h3>"+msg+"</h3>";
    setTimeout(function() {
          styler.parentNode.removeChild(styler);
    } ,duration);
    document.body.appendChild(styler);
}