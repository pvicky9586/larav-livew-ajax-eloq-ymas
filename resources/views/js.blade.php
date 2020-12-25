<!DOCTYPE html>
<html>
<head>
	<title></title>

<script type="text/javascript">
		var tags = document.getElementsByName("tag");
		
		function chec(){
			var obj= document.getElementById("tagselec");	
			if (document.getElementById('tag').checked)
			{
				tagselec = document.getElementById('tag').value;
				obj.innerHTML = tagselec;

			}
	}
</script>


</head>
<body>
	
<?php
	$i=2; 
	$tags = [
	    "tag1" => "1",
	    "tag2" => "2",
	];
?>


Etiquetas:	
<label>
	@foreach($tags as $i)
		<input type="checkbox" value="{{$i}}" name="tag[]"  id="tag" onclick="chec();">TAG {{$i}}
	@endforeach
</label>



<div id="sexo" >
	Marcadas: <label id="tagselec"></label>&nbsp;&nbsp;
</div>




</body>
</html>
