async function miFuncionPromesaYawait(){
	let miPromesa = new Promise( resolver => {
		resolver("saludos con promesa CON AWAIT");
	});	

	console.log( await miPromesa );
}

miFuncionPromesaYawait();