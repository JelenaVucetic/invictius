// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");
var btns = document.getElementsByTagName("button");
for (i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function() {
    modal.style.display = "block";
});
}
// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

//btn.addEventListener('click', function)
// When the user clicks the button, open the modal 
/* btn.onclick = function() {
 
} */

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}


// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

document.getElementById('myBtn1').addEventListener("click", myFunction1);
function myFunction1() {
  if($("#fp-nav").find( "a[class='active']" ).find("span[class='fp-sr-only']")[0].innerHTML==='Section 2')
  {
    $(".modal").css('padding-top', '700px');
  }
  else{
    console.log('');
  }
}

document.getElementById('myBtn2').addEventListener("click", myFunction2);
function myFunction2() {
  if($("#fp-nav").find( "a[class='active']" ).find("span[class='fp-sr-only']")[0].innerHTML==='Section 3')
  {
    $(".modal").css('padding-top', '1400px');
  }
  else{
    console.log('');
  }
}

document.getElementById('myBtn3').addEventListener("click", myFunction3);
function myFunction3() {
  if($("#fp-nav").find( "a[class='active']" ).find("span[class='fp-sr-only']")[0].innerHTML==='Section 4')
  {
    $(".modal").css('padding-top', '2100px');
  }
  else{
    console.log('');
  }
}

(function(){
  $('.firstBlur').addClass('modalBlur');
})

