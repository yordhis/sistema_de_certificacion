<!DOCTYPE html>
<html>
<head>
	<title>Prueba 1</title>

	<meta charset="utf-8"/>
	<meta http-equiv="content-type" content="text/html; charset=utf-8"/>

	<script type="text/javascript" src="jspdf.min.js"></script>

	<script type="text/javascript">
		
		function genPDF(){
			var doc = new jsPDF();

			doc.text(20, 20, "Generando un pdf paso 1");
			doc.addPage();
			doc.text(20, 20, "Otra pagina de prueba");
			doc.save('prueba1.pdf');

		}
	</script>
</head>
<body>

	<h1>Genera tu pdf con un clic</h1>

	<h2>
		<a href="javascript:genPDF()">Descargar prueba</a>
	</h2>


</body>
</html>