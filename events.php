<script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>

  <input type="text" id="input">
  <br><br>
  <input type="text" id="input2">
  <br><br>
  <input type="text" id="input3">

<script type="text/javascript">
	
	$(document).ready(()=> {



	//BLUR -- when one clicks outside a target element, in this case #input
	// can be used to display error messages during validation phase, on the same page
		$('#input').blur(()=>{
			let x = $('#input').val();
			alert(x);
		});
	

	//KEYPRESS - everytime you type, alert will be given
		$('#input2').keypress(()=>{
			let y = $('#input2').val();
			alert(y);
		});

		//which --> event or attribute
		//13 is number of enter keyword
		//refer to https://keycode.info
		$('#input3').keypress((e)=>{
			if(e.which == 13) {
				let z = $('#input3').val();
				alert(z);
			}
		
		});





	});

</script>