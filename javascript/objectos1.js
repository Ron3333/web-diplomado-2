
const persona = {
		nombre : "Pepe",
		apellido: "Trueno",
		email: "pepe@mail.com",
		edad: 20,
		nomnbreCompleto : function(){
			return this.nombre + " " + this.apellido;
			},
		edadPerson : function(){
			return "La edad de "+this.nombre +" es "+this.edad;
		    }
		}

console.log(persona.nombre);
console.log(persona.apellido);
console.log(persona.email);
console.log(persona.edad);

console.log(persona.nomnbreCompleto());
console.log(persona.edadPerson());

const persona2 = new Object();

persona2.nombre = "Juan";
persona2.apellido = "Perez";
persona2.email = "perez@email.com";
persona2.edad = 20;
persona2.nomnbreCompleto = function(){return this.nombre+ " " + this.apellido};

console.log(persona2.nomnbreCompleto());

console.log(persona['nombre']);

