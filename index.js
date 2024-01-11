let menuicn = document.querySelector(".menuicn");
  let nav = document.querySelector(".navcontainer");
 
  menuicn.addEventListener("click",()=>
  {
      nav.classList.toggle("navclose");
  }
)

function myFunction() {
  var dots = document.getElementById("dots");
  var moretext  = document.getElementById("more");
  var btnText = document.getElementById("mybtn");

  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "See more";
    moretext.style.display = "none";
  } 
  else {
    dots.style.display = "none";
    btnText.innerHTML = "See less";
    moretext.style.display = "inline";
  }
}  
