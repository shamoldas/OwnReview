<title>Add Record Form</title>
</head>
<body>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

<form name="form1" id="form1" action="blogdatainsertA.php">


						 <div class="form-group">
                            <label>Title</label>
                            <input type="text" name="title" class="form-control">
                      
                        </div>
						
						<div class="form-group">
							<label>Category/Subjects: </label>
					  <select name="category" id="subject" class="form-control" >
						<option value="" selected="selected" >Select subject</option>
					  </select>
					  </div>
					  
					  <div class="form-group">
							<label>SubCategory/Subjects: </label>
  
							  <select name="subcat" id="topic" class="form-control" >
								<option value="" selected="selected">Please select subject first</option>
							  </select>
						</div>
					<div class="form-group">
							<label>Topic: </label>
					   <select name="topic" id="chapter" class="form-control" >
						<option value="" selected="selected">Please select topic first</option>
					  </select>
					 </div>
					 
                        <div class="form-group">
                            <label>Message</label>
                            <textarea name="message"  class="form-control"></textarea>
                            <span class="help-block"></span>
                        </div>
						
						<!--
						 <div class="form-group">
                            <label>PictureAdd</label>
                            <input type="file" name="file_name" class="form-control">
                      
                        </div>
						-->

						
						 <input type="submit" class="btn btn-primary" value="Submit">
</form>
		
		
<script>
		
		var subjectObject = {
  "BookReview": {
    "Literature": ["Love", "Crime", "Detective", "Mystery"],
    "Poem": ["Love", "Nature", "Personal", "Inspiral"],
    "Novel": ["Love", "Crime", "Detective", "Conditions","Mystery"],
    "Story": ["Variables", "Operational", "Mystery", "Love"],
    "Others": ["Love", "Mystery", "Functional", "Conditional"]
  },
  "MovieReview": {
    "Bangla": ["Love", "Crime", "Detective", "Mystery"],
    "Indian": ["Love", "Crime", "Detective", "Mystery"],
    "American": ["Love", "Crime", "Detective", "Mystery"],
    "English": ["Love", "Crime", "Detective", "Mystery"],
    "Corian": ["Love", "Crime", "Detective", "Mystery"],
    "Jananess": ["Love", "Crime", "Detective", "Mystery"],
    "Others": ["Love", "Crime", "Detective", "Mystery"]
  },
  
    "CareerReview": {
    "BCS": ["ShortTime", "FullTime", "Expert"],
    "BANK": ["ShortTime", "FullTime", "Expert"],
    "GOVT.": ["ShortTime", "FullTime", "Expert"],
    "IT & SOFTWARE": ["ShortTime", "FullTime", "Expert"],
    "NON GOVT.": ["ShortTime", "FullTime", "Expert"],
    "TEACHER": ["ShortTime", "FullTime", "Expert"],
    "Others": ["ShortTime", "FullTime", "Expert"]
  },
  
    "FoodReview": {
    "Drinks": ["SmallBudget", "MediumBudget", "HighBudget"],
    "Coffee& Tea": ["SmallBudget", "MediumBudget", "HighBudget"],
    "Sweet": ["SmallBudget", "MediumBudget", "HighBudget"],
    "FastFood": ["SmallBudget", "MediumBudget", "HighBudget"],
    "Snack": ["SmallBudget", "MediumBudget", "HighBudget"],
    "Heavy": ["SmallBudget", "MediumBudget", "HighBudget"],
    "Others": ["SmallBudget", "MediumBudget", "HighBudget"]
  }
}
window.onload = function() {
  var subjectSel = document.getElementById("subject");
  var topicSel = document.getElementById("topic");
  var chapterSel = document.getElementById("chapter");
  for (var x in subjectObject) {
    subjectSel.options[subjectSel.options.length] = new Option(x, x);
  }
  subjectSel.onchange = function() {
    //display correct values
    for (var y in subjectObject[this.value]) {
      topicSel.options[topicSel.options.length] = new Option(y, y);
    }
  }
  topicSel.onchange = function() {
    //display correct values
    var z = subjectObject[subjectSel.value][this.value];
    for (var i = 0; i < z.length; i++) {
      chapterSel.options[chapterSel.options.length] = new Option(z[i], z[i]);
    }
  }
}
</script>
		
		
		
		
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>