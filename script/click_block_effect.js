/* When the user clicks on the button,
toggle between hiding and showing the dropdown content */
function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(e) {
  if (!e.target.matches('.dropbtn')) {

    var dropdowns = document.getElementsByClassName("dropdown-content");
    for (var d = 0; d < dropdowns.length; d++) {
      var openDropdown = dropdowns[d];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}

function show(first_id, second_id) {
   var first_element   = document.getElementById(first_id);
   var second_element  = document.getElementById(second_id);

   if(first_element.style.display == 'block'){
      first_element.style.display = 'none';
      second_element.style.display = 'none';
   }else{
      first_element.style.display = 'none';
      second_element.style.display = 'none';
   }
}
function myFunction1() {
    document.getElementById("myDropdown1").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(e) {
  if (!e.target.matches('.dropbtn1')) {

    var dropdowns = document.getElementsByClassName("dropdown-content1");
    for (var d = 0; d < dropdowns.length; d++) {
      var openDropdown = dropdowns[d];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}

function show(first_id, second_id) {
   var first_element   = document.getElementById(first_id);
   var second_element  = document.getElementById(second_id);

   if(first_element.style.display == 'block'){
      first_element.style.display = 'none';
      second_element.style.display = 'none';
   }else{
      first_element.style.display = 'none';
      second_element.style.display = 'none';
   }
}
