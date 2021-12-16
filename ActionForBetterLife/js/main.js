function myFunction(x) {
  x.classList.toggle("change");
  var toggle = document.getElementById('toggle');
  if (toggle.style.display == "none"){
    toggle.style.display = "block";
  } else {
    toggle.style.display = "none";
  }
}