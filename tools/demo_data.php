<?php
// Anuncios ficticios solo para la demo estática.
function a($id, $sit, $esp, $nom, $raza, $sexo, $isla, $mun, $zona, $fecha, $com, $foto) {
    return array('id' => $id, 'situacion' => $sit, 'n_persona' => 'Demo', 'telefono' => 600000000 + $id,
        'email' => 'demo@example.com', 'n_animal' => $nom, 'especie' => $esp, 'edad' => 3, 'raza' => $raza,
        'sexo' => $sexo, 'chip' => 'no', 'color' => 'varios', 'isla' => $isla, 'municipio' => $mun,
        'zona' => $zona, 'fecha_per' => $fecha, 'comentario' => $com, 'ruta_fichero' => $foto);
}
return array('formulario' => array(
    a(1, 'perdido', 'perro', 'Toby', 'Labrador', 'macho', 'mallorca', 'Palma', 'Plaza España', '12/mayo/2013', 'Muy cariñoso, lleva collar rojo.', 'images/perro.jpg'),
    a(2, 'encontrado', 'perro', 'Luna', 'Mestizo', 'hembra', 'menorca', 'Maó', 'Puerto', '3/junio/2013', 'Encontrada sin collar, muy tranquila.', 'images/perro.jpg'),
    a(3, 'adopcion', 'perro', 'Rocky', 'Pastor alemán', 'macho', 'ibiza', 'Santa Eulalia', 'Centro', '20/abril/2013', 'Busca una familia con jardín.', 'images/perro.jpg'),
    a(4, 'perdido', 'gato', 'Misi', 'Siamés', 'hembra', 'mallorca', 'Inca', 'Calle Mayor', '8/julio/2013', 'Desapareció del jardín hace dos días.', 'images/lost.jpg'),
    a(5, 'encontrado', 'gato', 'Tigre', 'Común europeo', 'macho', 'mallorca', 'Manacor', 'Paseo', '1/agosto/2013', 'Atigrado, muy sociable.', 'images/encontrado.jpg'),
    a(6, 'adopcion', 'gato', 'Nube', 'Persa', 'hembra', 'menorca', 'Ciutadella', 'Puerto', '15/mayo/2013', 'Gatita esterilizada y vacunada.', 'images/lost.jpg'),
    a(7, 'perdido', 'otros', 'Piolín', 'Canario', 'macho', 'ibiza', 'Ibiza', 'Vara de Rey', '5/junio/2013', 'Se escapó por la ventana.', 'images/lost.jpg'),
    a(8, 'adopcion', 'otros', 'Conejo Pepe', 'Enano', 'macho', 'mallorca', 'Palma', 'Son Gotleu', '2/julio/2013', 'Se da en adopción con su jaula.', 'images/encontrado.jpg'),
));
