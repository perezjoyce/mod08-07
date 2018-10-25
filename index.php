<script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>

<h3>JSON CODE-ALONG</h3>
<p id="summary"></p>

<script type="text/javascript">

	//JSON

	let myself = {
		"name" : "Joyce",
		"hobbies" : ["eating", " reading", " gaming"],
		"seatmates" : ["Mike", " Rena", " Gerly"],
		"pet" : {
			"name" : "Buknot",
			"species" : "Mydidae",
			"gender" : "Bisexual"
		}
	}
	//END OF JSON

	let str = myself.name;		
	$('#summary').html(str);	// Joyce

	let arr = myself.hobbies;	
	$('#summary').html(arr);	// eating reading gaming

	let sentence = "Hi! My name is " + myself.name + ".<br>";
	sentence += "My hobbies are " + myself.hobbies + ".<br>";
	sentence += "My seatmates are " + myself.seatmates + ".<br>";
	sentence += "My pet is " + myself.pet.name + ".<br>";
	

	// Hi! My name is Joyce 
	// My hobbies are eating, reading, gaming.
	// My seatmates are Mike, Rena, Gerly.
	// My pet is Buknot.

	let str2 = "";
	if(myself.name.gender == "Male") {
		str2 = " His ";
	} else if (myself.name.gender == "Female") {
		str2 = " Her ";
	}else {
		str2 = " His/Her ";
	}

	sentence += str2 + "name is " + myself.pet.name + ".<br>";
	sentence += str2 + "species is " + myself.pet.species + ".<br>";

	//His/Her name is Buknot.
	//His/Her species is Mydidae.

	$('#summary').html(sentence); 

</script>