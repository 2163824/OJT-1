
// Get the modal
		var modal = document.querySelectorAll('modal');

// Get the button that opens the modal
		var btn = document.querySelectorAll("myBtn");

// Get the <span> element that closes the modal
		var span = document.getElementsByClassName("close");

// When the user clicks the button, open the modal 
		for ( var i = 0; i < btn.length; i++){
			btn[i].onclick = function(e){
				e.preventDefault();
				modal = document.querySelector(e.target.getAttribute("myBtn"))
				modal.style.display = "block";
			}
		}
		
		/*btn[0].onclick = function() {
			modal[0].style.display = "block";
		}
		
		btn[1].onclick = function() {
			modal[1].style.display = "block";
		}
		
		btn[2].onclick = function() {
			modal[2].style.display = "block";
		}
		
		btn[3].onclick = function() {
			modal[3].style.display = "block";
		}*/

// When the user clicks on <span> (x), close the modal
		for ( var i = 0; i < span.length; i++){
			span[i].onclick = function(){
				for (var index in modals){
				modals[index].style.display = "none";
				}
			}
		}
		
		/*
		span[0].onclick = function() {
			modal[0].style.display = "none";
		}
		
		/*
		span[1].onclick = function() {
			modal[1].style.display = "none";
		}
		
		span[2].onclick = function() {
			modal[2].style.display = "none";
		}
		
		span[3].onclick = function() {
			modal[3].style.display = "none";
		}*/

// When the user clicks anywhere outside of the modal, close it
		window.onclick = function(event) {
			if (event.target == modal) {
					modal.style.display = "none";
				}
			}
