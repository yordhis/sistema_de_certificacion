<!DOCTYPE html>
<html>
<head>
	<title>Prueba 2</title>

	<meta charset="utf-8"/>
	<meta http-equiv="content-type" content="text/html; charset=utf-8"/>

	<script type="text/javascript" src="jspdf.min.js"></script>
	<script type="text/javascript" src="../libs/html2canvas/dist/html2canvas.js"></script>

	<script type="text/javascript">
		
		function genPDF(){
			html2canvas(document.getElementById('fron'),{
					onrendered: function (canvas){

						var img = canvas.toDataURL("image/png");
						var doc = new jsPDF();
						doc.addImage(img, 'JPEG', 20, 20);
						
						

						doc.save("test.pdf");
					}

			});
			

		}
	</script>
</head>
<body style="background-color: rgba(0,0,0,0.3); text-align: center;">


			<div id="fron">
				<aside style="">
					<img src="../../certificadoFrontal.png">
				</aside>

				<aside style=" margin: -400px 0px 0px 0px;">
					

					<h1 style="font-size: 30px; padding: 40px;">PEDRO PÉREZ</h1>

					<h3 style="margin: -55px;">C.I.: V- 23.236.234</h3>

					
				</aside>
			</div>

		
				<!--<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
			<aside style="float: center; margin: 0px 0px 0px 0px; ">
				<img src="../../certificadoBackEnd.png" style=" width: 800px; height: 550px; ">
			</aside>
		-->
	


	
		<footer style="float: center; margin: 370px 0px 0px 0px;">
			<h2>
				<a href="javascript:genPDF()">Descargar prueba</a>
			</h2>

		</footer>
	

</body>
</html>