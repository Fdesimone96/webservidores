function noScroll() {
  window.scrollTo(0, 0);
}


function openForm() {
  document.getElementById("myForm").style.display = "block";
  window.addEventListener('scroll', noScroll);
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
  window.removeEventListener('scroll', noScroll);
}
