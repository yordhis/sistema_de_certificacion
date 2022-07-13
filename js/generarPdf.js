		// $('#generarPdf').on('click', function (){
			
        //     let doc = new jsPDF()
        //     let nombres = $('#text-nombres-certificado').text
            
        //     doc.addImage("certificado.jpg", 64, 0, 0, 750, 600, "certificado")    
           
        //     doc.text(20, 20, 'Hola mundo');
        //     doc.text(20, 30, 'Vamos a generar un pdf desde el lado del cliente.');

		// 	doc.save('certificado.pdf')

		// });
       
    
        $('#generarPdf').on("click", function (){
            
            let doc = new jsPDF('l');
            let nombres = $('#nombres').val();
            let cedula = $('#cedula').val();
            let position = 0
            let caractNumber = nombres.length
            let sizeTextNombre = 25
            let sizeTextCedula = 20
            let positionCedula = 129
        

            if (caractNumber <= 10) {
                position = 128
                sizeTextCedula = 15
                positionCedula = 133
            }else if(caractNumber > 10 && caractNumber <= 20) {
                position = 115
            }else if(caractNumber > 20 && caractNumber <= 30) {
                position = 105
            }else{
                position = 95
                sizeTextNombre = 20
                sizeTextCedula = 15
                positionCedula = 135
            }
            console.log(position)
            console.log(caractNumber)
            
            doc.addImage(img(), 'JPEG',35, 30, 230, 160)
            doc.setFontSize(sizeTextNombre);
            doc.text(position, 99, nombres)
            doc.setFontSize(sizeTextCedula);
            doc.text(positionCedula, 105, cedula)
            // Save the PDF
            doc.save('certificado.pdf');
        });
        
		