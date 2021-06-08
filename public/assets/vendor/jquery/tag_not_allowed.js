
/* don't allow to enter <script> tag in input fields */
$(document).ready(function(){

   $('.cp').on("cut copy paste",function(e) {
      e.preventDefault();
      alert("You cannot copy and paste into this text field.");
   });
 

   $('.tags').on("keydown", function(e){
        if (e.shiftKey && (e.which == 188 || e.which == 190)) {
            e.preventDefault();
        alert("You cannot add tags in the field.");
        }
    });
     

	

});
