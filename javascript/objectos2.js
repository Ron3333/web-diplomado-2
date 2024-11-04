let persona = {
    nombre: 'Juan',
    apellido: 'Perez',
    email: 'jperez@mail.com',
    edad: 28,
    nombreCompleto: function(){
        return this.nombre + ' ' + this.apellido;
    }
}

//console.log( persona.nombre);
//console.log( persona['nombre'] );

//for in
for( nombrePropiedad in persona){
    //console.log( nombrePropiedad );
    console.log( nombrePropiedad + ": "+ persona[nombrePropiedad]);
}


let personaArray = Object.values( persona );
console.log( personaArray );


// el objeto lo convierte en cadena
let personaString = JSON.stringify( persona );
console.log( personaString );