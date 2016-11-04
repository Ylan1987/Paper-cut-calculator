<?php
if($_POST['p1'] > 0 && $_POST['p2'] > 0 && $_POST['f1'] > 0 && $_POST['f2'] > 0){
$p1=$_POST['p1'];
$p2=$_POST['p2'];
$f1=$_POST['f1'];
$f2=$_POST['f2'];

//flip the values for accurate results
if($p2 < $p1){
	$temp1= $p1;
	$p1 = $p2;
	$p2 = $temp1;
}
if($f2 < $f1){
	$temp1= $f1;
	$f1 = $f2;
	$f2 = $temp1;
}

//formula
if(isset($_POST['add'])){
	$gl= (int)(($p1 - .75)/($f1 + .25))*(int)(($p2 - .75)/($f2 + .25));
	$gs= (int)(($p1 - .75)/($f2 + .25))*(int)(($p2 - .75)/($f1 + .25));
}
}
?>
<head>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script language="javascript">

 function validate_papercuts(){

    var p1 = parseFloat(document.getElementById('p1').value);

	var p2 = parseFloat(document.getElementById('p2').value);

	

	var f1 = parseFloat(document.getElementById('f1').value);

	var f2 = parseFloat(document.getElementById('f2').value);

//if statements to make sure the user types number values and does not leave any fields empty

	if(p1==''){

	  alert("Enter P1");

	  document.getElementById('p1').focus();

	  return false;

    }

	if(p1!=""){

		if(isNaN(p1)){

		  alert("Your parent size X value must be numeric");

		  document.getElementById('p1').focus();

		  return false;

		}

	}

	

	if(p2==''){

      alert("Enter your parent size Y value");

	  document.getElementById('p2').focus();

	  return false;

	}

	

	if(p2!=""){

		 if(isNaN(p2)){

		  alert("your parent size Y value Must be Numeric");

		  document.getElementById('p1').focus();

		  return false;

	   }

   }
    

	if(f1==''){

	  alert("Enter your finished size X value");

	  document.getElementById('f1').focus();

	  return false;

    }

	if(f1!=""){

		if(isNaN(f1)){

		  alert("your finished size X value must be numeric");

		  document.getElementById('f1').focus();

		  return false;

		}

	}

	

	if(f2==''){

      alert("Enter your finished size Y value");

	  document.getElementById('f2').focus();

	  return false;

	}

	

	if(f2!=""){

		 if(isNaN(f2)){

		  alert("your finished size Y value must be numeric");

		  document.getElementById('f1').focus();

		  return false;

	   }

   }

   



}

</script>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body><div class="text-center" style=" position: absolute;
  margin: auto;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  width: 363px;
  height: 363px;
  border-radius: 3px;"><small>This calculator accounts for bleed and crop marks, but not irregular or Dutch cuts.</small><br>
	<form onsubmit="return validate_papercuts()" method="post">
	<p><label>Enter Parent Sheet Size:</label></p>
	<div class="form-group">
	<input type="text" id="p1" placeholder="x" name="p1" value="<?php echo $p1 ?>"/>
	
	<input type="text" id="p2" placeholder="y" name="p2" value="<?php echo $p2 ?>"/>
	</div>
	<div class="form-group">
	<p><label>Finished Size:</label></p>
	<input type="text" id="f1" name="f1" placeholder="x" value="<?php echo $f1 ?>"/>
	
	<input type="text" id="f2" name="f2" placeholder="y" value="<?php echo $f2 ?>"/>
	</div><input style=" color:#fff;   background-color: #FFA300;" class="btn btn-lg btn-block" type="submit" value="Calculate" name="add"/>	
	</form>
	<hr>
	<form class="form-inline">
	<div class="form-group">
	<p><label>Grain Long:</label></p>
	<input type="text" value="<?php echo $gl ?>"/>
	</div>
	<div class="form-group">
	<p><label>Grain Short:</label></p>
	<input type="text" value="<?php echo $gs ?>"/>
	</div>
	</form></div>

</body>