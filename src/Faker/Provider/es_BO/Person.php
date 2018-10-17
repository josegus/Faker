<?php

namespace Faker\Provider\es_BO;

class Person extends \Faker\Provider\Person
{
    protected static $maleNameFormats = array(
        '{{firstNameMale}} {{lastName}}',
        '{{firstNameMale}} {{lastName}}',
        '{{firstNameMale}} {{lastName}}',
        '{{firstNameMale}} {{lastName}}',
        '{{titleMale}} {{firstNameMale}} {{lastName}}'
    );

    protected static $femaleNameFormats = array(
        '{{firstNameFemale}} {{lastName}}',
        '{{firstNameFemale}} {{lastName}}',
        '{{firstNameFemale}} {{lastName}}',
        '{{firstNameFemale}} {{lastName}}',
        '{{titleFemale}} {{firstNameFemale}} {{lastName}}'
    );

    /**
     * {@link} http://correodelsur.com/ecos/20150927_100-nombres-mas-populares.html
     * 
     * Common bolivian male names
     */
    protected static $firstNameMale = array(
        'Aarón', 'Adrián', 'Agustín', 'Alan', 'Alberto', 'Alejandro', 'Alex', 'Alexander', 'Alonso', 'Alvaro', 'Andrés', 'Ángel', 'Anthony', 'Antonio', 'Ariel', 'Axel',
        'Benjamín', 'Bismark', 'Brandon', 'Brian', 'Bruno', 'Bryan',
        'Camilo', 'Carlos', 'Cesar', 'Christian', 'Christopher', 'Cristóbal',
        'Damián', 'Daniel', 'Dante', 'Darwin', 'David', 'Diego', 'Dylan',
        'Eduardo', 'Edson', 'Edwin', 'Elías', 'Emiliano', 'Emilio', 'Emmanuel', 'Ernesto', 'Esteban',
        'Fabian', 'Fabio', 'Facundo', 'Felipe', 'Fernando', 'Francisco', 'Franco', 'Franz',
        'Gabriel', 'Gael', 'Gary', 'Giovanny', 'Gonzalo', 'Gustavo',
        'Harold', 'Hipólito', 'Horacio', 'Hugo', 'Humberto',
        'Ian', 'Ignacio', 'Isaac', 'Ivan',
        'Jacobo', 'Javier', 'Jerónimo', 'Javier', 'Jhasmanny', 'Jesús', 'John', 'Johnny', 'Joaquín', 'Jonathan', 'Jorge', 'Joshua', 'Josué', 'José', 'Juan', 'Julián',
        'Kevin',
        'Lautaro', 'Leonardo', 'Lorenzo', 'Lucas', 'Luciano', 'Luis',
        'Manuel', 'Marcelo', 'Mario', 'Martín', 'Mateo', 'Matthew', 'Matías', 'Mauricio', 'Mauro', 'Maximiliano', 'Miguel', 'Milton', 'Máximo',
        'Nahuel', 'Nicolas',
        'Oliver', 'Omar', 'Orlando', 'Osman', 'Oscar',
        'Pablo', 'Paul', 'Pedro', 'Percy',
        'Rafael', 'Raul', 'Reemberto', 'René', 'Renato', 'Ricardo', 'Rodrigo', 'Rudy',
        'Samuel', 'Santiago', 'Santino', 'Sebastián', 'Sergio', 'Simón',
        'Thiago', 'Tomas',
        'Valentino', 'Valentín', 'Vicente', 'Victor',
        'Walter', 'Willian', 'Williams', 'Wilson',
        'Xavier',
        'Yeison',
        'Zenon'
    );

    /**
     * {@link} https://www.guiainfantil.com/articulos/nombres/nombres-para-ninos/los-nombres-mas-populares-en-bolivia-para-ninas/
     * 
     * Common bolivian female names
     */
    protected static $firstNameFemale = array(
        'Abigail', 'Abril', 'Adriana', 'Agustina', 'Alejandra', 'Alessandra', 'Alexa', 'Allison', 'Alma', 'Amanda', 'Amelia', 'Ana', 'Andrea', 'Antonella', 'Antonia', 'Ariadna', 'Ariana', 'Ashley',
        'Bianca', 'Brenda', 'Briggitte', 'Bruna',
        'Caterine', 'Camila', 'Carla', 'Carmen', 'Carolina', 'Catalina', 'Cecilia', 'Clara', 'Constanza',
        'Daniela', 'Dayana', 'Delfina', 'Diana',
        'Elena', 'Elizabeth', 'Emilia', 'Emily', 'Emma', 'Estéfanie', 'Esther', 'Evelyn',
        'Fabiana', 'Felicia', 'Fernanda', 'Fiorella', 'Florencia', 'Fátima',
        'Gabriela', 'Guadalupe', 'Goretty',
        'Irene', 'Isabel', 'Isabella', 'Isidora', 'Ivanna',
        'Jazmín', 'Jenny', 'Jessica', 'Josefa', 'Josefina', 'Jhoselyn', 'Juana', 'Julia', 'Juliana', 'Julieta',
        'Kamila', 'Karina', 'Karla', 'Katherine', 'Kimberly',
        'Laura', 'Lidia', 'Linda', 'Lola', 'Luana', 'Luciana', 'Lucía', 'Luna',
        'Magdalena', 'Maite', 'Malena', 'Manuela', 'Mariana', 'Mariangel', 'Martina', 'María', 'Melina', 'Micaela', 'Michelle', 'Miranda', 'Montserrat', 'Mía',
        'Nadia', 'Natalia', 'Nathalia', 'Nicole',
        'Oliva', 'Olivia', 'Ornela',
        'Paula', 'Paulina', 'Patricia',
        'Rafaela', 'Rebeca', 'Regina', 'Renata', 'Romina', 'Rosario', 'Rosmery', 'Roxana',
        'Salomé', 'Samantha', 'Sara', 'Scarlett', 'Silvana', 'Silvina', 'Sofía', 'Sophie', 'Sonia',
        'Tatiana', 'Thais',
        'Valentina', 'Valeria', 'Valery', 'Victoria', 'Violeta',
        'Ximena',
        'Yessica', 'Yvanna',
        'Zoe'
    );

    /**
     * {@link} http://www.eluniversitario.com.bo/index.php/descargas/documentos-universitarios/notas/1211-199-apellidos-mas-comunes-en-bolivia
     * 
     * Common bolivian last names
     */
    protected static $lastName = array(
        'Abeyta', 'Abrego', 'Abreu', 'Acevedo', 'Acosta', 'Acuña', 'Adame', 'Adorno', 'Agosto', 'Aguayo', 'Águilar', 'Aguilera', 'Aguirre', 'Alanis', 'Alaniz', 'Alarcón', 'Alba', 'Alcala', 'Alcántar', 'Alcaraz', 'Alejandro', 'Alemán', 'Aldunate', 'Alfaro', 'Alicea', 'Almanza', 'Almaraz', 'Almonte', 'Alonso', 'Alonzo', 'Altamirano', 'Alva', 'Alvarado', 'Álvarez', 'Amador', 'Amaya', 'Anaya', 'Anguiano', 'Angulo', 'Aparicio', 'Apodaca', 'Aponte', 'Aragón', 'Araña', 'Aranda', 'Arce', 'Archuleta', 'Arellano', 'Arenas', 'Arevalo', 'Arguello', 'Arias', 'Armas', 'Armendáriz', 'Armenta', 'Armijo', 'Arredondo', 'Arreola', 'Arriaga', 'Arroyo', 'Arteaga', 'Atencio', 'Ávalos', 'Ávila', 'Avilés', 'Ayala',
        'Baca', 'Badillo', 'Báez', 'Baeza', 'Bahena', 'Balcazar', 'Balderas', 'Ballesteros', 'Banda', 'Bañuelos', 'Barajas', 'Barela', 'Barragán', 'Barraza', 'Barrera', 'Barreto', 'Barrientos', 'Barrios', 'Batista', 'Becerra', 'Beltrán', 'Benavides', 'Benavídez', 'Benítez', 'Bermúdez', 'Bernal', 'Berríos', 'Bétancourt', 'Blanco', 'Bonilla', 'Borrego', 'Botello', 'Bravo', 'Briones', 'Briseño', 'Brito', 'Bueno', 'Burgos', 'Bustamante', 'Bustos',
        'Caballero', 'Cabán', 'Cabrera', 'Cadena', 'Caldera', 'Calderón', 'Calvillo', 'Camacho', 'Camarillo', 'Campos', 'Canales', 'Candelaria', 'Cano', 'Cantú', 'Caraballo', 'Carbajal', 'Cardenas', 'Cardona', 'Carmona', 'Carranza', 'Carrasco', 'Carrasquillo', 'Carreón', 'Carrera', 'Carrero', 'Carrillo', 'Carrion', 'Carvajal', 'Casanova', 'Casares', 'Casárez', 'Casas', 'Casillas', 'Castañeda', 'Castellanos', 'Castillo', 'Castro', 'Cavazos', 'Cazares', 'Ceballos', 'Cedillo', 'Ceja', 'Centeno', 'Cepeda', 'Cerda', 'Cervantes', 'Cervántez', 'Chacón', 'Chapa', 'Chavarría', 'Chávez', 'Cintrón', 'Cisneros', 'Collado', 'Collazo', 'Colón', 'Colunga', 'Concepción', 'Contreras', 'Cordero', 'Córdova', 'Cornejo', 'Corona', 'Coronado', 'Corral', 'Corrales', 'Correa', 'Cortés', 'Cortez', 'Cotto', 'Covarrubias', 'Crespo', 'Cruz', 'Cuellar', 'Curiel',
        'Dávila', 'de Anda', 'de Jesús', 'Delacrúz', 'Delafuente', 'Delagarza', 'Delao', 'Delapaz', 'Delarosa', 'Delatorre', 'Deleón', 'Delgadillo', 'Delgado', 'Delrío', 'Delvalle', 'Díaz', 'Domínguez', 'Domínquez', 'Dorado', 'Duarte', 'Dueñas', 'Duran',
        'Echevarría', 'Elizondo', 'Enríquez', 'Escalante', 'Escamilla', 'Escobar', 'Escobedo', 'Esparza', 'Espinal', 'Espino', 'Espinosa', 'Espinoza', 'Esquibel', 'Esquivel', 'Estévez', 'Estrada',
        'Fajardo', 'Farías', 'Feliciano', 'Fernández', 'Ferrer', 'Fierro', 'Figueroa', 'Flores', 'Flórez', 'Fonseca', 'Franco', 'Frías', 'Fuentes',
        'Gaitán', 'Galarza', 'Galindo', 'Gallardo', 'Gallegos', 'Galván', 'Gálvez', 'Gamboa', 'Gamez', 'Gaona', 'Garay', 'García', 'Garibay', 'Garica', 'Garrido', 'Garza', 'Gastélum', 'Gaytán', 'Gil', 'Girón', 'Godínez', 'Godoy', 'Gómez', 'Gonzales', 'González', 'Gracia', 'Granado', 'Granados', 'Griego', 'Grijalva', 'Guajardo', 'Guardado', 'Guerra', 'Guerrero', 'Guevara', 'Guillen', 'Gurule', 'Gutiérrez', 'Guzmán',
        'Haro', 'Henríquez', 'Heredia', 'Hernádez', 'Hernandes', 'Hernández', 'Herrera', 'Hidalgo', 'Hinojosa', 'Holguín', 'Huanca', 'Huerta', 'Hurtado',
        'Ibarra', 'Iglesias', 'Irizarry',
        'Jaime', 'Jaimes', 'Jáquez', 'Jaramillo', 'Jasso', 'Jiménez', 'Jimínez', 'Juárez', 'Jurado',
        'Laboy', 'Lara', 'Laureano', 'Leal', 'Lebrón', 'Ledesma', 'Leiva', 'Lemus', 'León', 'Lerma', 'Leyva', 'Limón', 'Linares', 'Lira', 'Llamas', 'Loera', 'Lomeli', 'Longoria', 'López', 'Lovato', 'Loya', 'Lozada', 'Lozano', 'Lucero', 'Lucio', 'Luevano', 'Lugo', 'Luján', 'Luna',
        'Macías', 'Madera', 'Madrid', 'Madrigal', 'Maestas', 'Magaña', 'Malave', 'Maldonado', 'Mamani', 'Manzanares', 'Mares', 'Marín', 'Márquez', 'Marrero', 'Marroquín', 'Martínez', 'Mascareñas', 'Mata', 'Mateo', 'Matías', 'Matos', 'Maya', 'Mayorga', 'Medina', 'Medrano', 'Mejía', 'Meléndez', 'Melgar', 'Mena', 'Menchaca', 'Méndez', 'Mendoza', 'Menéndez', 'Meraz', 'Mercado', 'Merino', 'Mesa', 'Meza', 'Miramontes', 'Miranda', 'Mireles', 'Mojica', 'Molina', 'Mondragón', 'Monroy', 'Montalvo', 'Montañez', 'Montaño', 'Montemayor', 'Montenegro', 'Montero', 'Montes', 'Montez', 'Montoya', 'Mora', 'Morales', 'Moreno', 'Mota', 'Moya', 'Munguía', 'Muñiz', 'Muñoz', 'Murillo', 'Muro',
        'Nájera', 'Naranjo', 'Narváez', 'Nava', 'Navarrete', 'Navarro', 'Nazario', 'Negrete', 'Negrón', 'Nevárez', 'Nieto', 'Nieves', 'Niño', 'Noriega', 'Núñez',
        'Ocampo', 'Ocasio', 'Ochoa', 'Ojeda', 'Olivares', 'Olivárez', 'Olivas', 'Olivera', 'Olivo', 'Olmos', 'Olvera', 'Ontiveros', 'Oquendo', 'Ordóñez', 'Orellana', 'Ornelas', 'Orosco', 'Orozco', 'Orta', 'Ortega', 'Ortiz', 'Osorio', 'Otero', 'Ozuna',
        'Pabón', 'Pacheco', 'Padilla', 'Padrón', 'Páez', 'Pagan', 'Palacios', 'Palomino', 'Palomo', 'Pantoja', 'Paredes', 'Parra', 'Partida', 'Patiño', 'Paz', 'Pedraza', 'Pedroza', 'Pelayo', 'Peña', 'Perales', 'Peralta', 'Perea', 'Peres', 'Pérez', 'Pichardo', 'Piña', 'Pineda', 'Pizarro', 'Polanco', 'Ponce', 'Porras', 'Portillo', 'Posada', 'Prado', 'Preciado', 'Prieto', 'Puente', 'Puga', 'Pulido',
        'Quesada', 'Quezada', 'Quiñones', 'Quiñónez', 'Quintana', 'Quintanilla', 'Quintero', 'Quinteros', 'Quiroz', 'Quispe',
        'Rael', 'Ramírez', 'Ramón', 'Ramos', 'Rangel', 'Rascón', 'Raya', 'Razo', 'Regalado', 'Rendón', 'Rentería', 'Reséndez', 'Reyes', 'Reyna', 'Reynoso', 'Rico', 'Rincón', 'Riojas', 'Ríos', 'Rivas', 'Rivera', 'Rivero', 'Robledo', 'Robles', 'Rocha', 'Rodarte', 'Rodrígez', 'Rodríguez', 'Rodríquez', 'Rojas', 'Rojo', 'Roldán', 'Rolón', 'Romero', 'Romo', 'Roque', 'Rosado', 'Rosales', 'Rosario', 'Rosas', 'Roybal', 'Rubio', 'Ruelas', 'Ruiz', 'Ruvalcaba',
        'Saavedra', 'Sáenz', 'Saiz', 'Salas', 'Salazar', 'Salcedo', 'Salcido', 'Saldaña', 'Saldivar', 'Salgado', 'Salinas', 'Samaniego', 'Sanabria', 'Sanches', 'Sánchez', 'Sandoval', 'Santacruz', 'Santana', 'Santiago', 'Santillán', 'Sarabia', 'Sauceda', 'Saucedo', 'Sedillo', 'Segovia', 'Segura', 'Sepúlveda', 'Serna', 'Serrano', 'Serrato', 'Sevilla', 'Sierra', 'Sisneros', 'Solano', 'Soleto', 'Solís', 'Soliz', 'Solorio', 'Solorzano', 'Soria', 'Sosa', 'Sotelo', 'Soto', 'Suárez',
        'Tafoya', 'Tamayo', 'Tamez', 'Tapia', 'Tejada', 'Tejeda', 'Téllez', 'Tello', 'Terán', 'Terrazas', 'Tijerina', 'Tirado', 'Toledo', 'Toro', 'Torres', 'Tórrez', 'Tovar', 'Trejo', 'Treviño', 'Trujillo',
        'Ulibarri', 'Ulloa', 'Unzueta', 'Urbina', 'Ureña', 'Urías', 'Uribe', 'Urrutia',
        'Vaca', 'Valadez', 'Valdés', 'Valdez', 'Valdivia', 'Valencia', 'Valentín', 'Valenzuela', 'Valladares', 'Valle', 'Vallejo', 'Valles', 'Valverde', 'Vanegas', 'Vaquero', 'Varela', 'Vargas', 'Vásquez', 'Vázquez', 'Vega', 'Vela', 'Velasco', 'Velásquez', 'Velázquez', 'Vélez', 'Véliz', 'Venegas', 'Vera', 'Verdugo', 'Verduzco', 'Vergara', 'Viera', 'Vigil', 'Villa', 'Villagómez', 'Villalobos', 'Villalpando', 'Villanueva', 'Villareal', 'Villarreal', 'Villaseñor', 'Villegas',
        'Yáñez', 'Ybarra',
        'Zambrano', 'Zamora', 'Zamudio', 'Zapata', 'Zaragoza', 'Zarate', 'Zavala', 'Zayas', 'Zelaya', 'Zepeda', 'Zúñiga'
    );

    protected static $titleMale = array('Sr.', 'Dn.', 'Dr.', 'Lic.', 'Ing.');

    protected static $titleFemale = array('Sra.', 'Srita.', 'Dr.', 'Lic.', 'Ing.');

    /**
     * Generate a Cedula de Identidad (CI) number
     *
     * Bolivians commonly use only 7 digits.
     *
     * @example '6987452'
     *
     */
    public function cedulaIdentidad()
    {
        return static::numerify('#######');
    }
}
