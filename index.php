<!DOCTYPE html>
<html>
<head>
	<script src="http://code.jquery.com/jquery-3.2.1.min.js" ></script>
	<script type="text/javascript">
		function button_clicked() {
			var link = document.getElementById("link").value;
			$.ajax({
			    type: 'POST',
			    url:"findprice.php",
			    data: {link:link},
			    success: function(response){
			        document.getElementById("result").innerHTML = response;
			      }
			    });
		}
	</script>
	<title>Fiyat Bulucu</title>
</head>
<body>
	Ürün Linkini Yapıştırın :
	<input type="text" id="link">
	<br>
	<input type="button" onclick="button_clicked()" value="Fiyat Bul">
	<br><br>
	<div id="result"></div>
</body>
</html>