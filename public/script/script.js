
var dropdown = document.getElementsByClassName("dropdown-btn");
var i;
for (i = 0; i < dropdown.length; i++) {
   dropdown[i].addEventListener("click", function() {
      this.classList.toggle("active-drop");
      var dropdownContent = this.nextElememtSibling;
      if(dropdownContent.style.display === "block") {
         dropdownContent.style.display = "none";
      } else {
         dropdownContent.style.display = "block";
      }
   });
   
}  
