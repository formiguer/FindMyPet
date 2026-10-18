<script language="javascript" type="text/javascript">
//Basado en un script de Vanessa M. Jaén Prado
//
//Este script y otros muchos pueden
//descarse on-line de forma gratuita
//en El Código: www.elcodigo.com

//numero de listas
var numListas = 2

//datos listas
// Lista raiz
//	musica, deportes
// Lista categorias
//	musica: clasica, pop
//	deportes: futbol, baloncesto
// Lista subcategorias:
//	musica - clasica: Mozart, Vivaldi 
//	musica - pop: Madonna, Beatles
//	deportes - futbol: Maradona, Pelé
//	deportes - baloncesto: Johnson, Jordan

raiz = new Array()
//categorias
musica = new Array()
deportes = new Array()
//subcategorias
clasica = new Array()
pop = new Array()
futbol = new Array()
baloncesto = new Array()

//datos subcategorias (nombre mostrado, valor)
clasica[0] = new elementoHijo( "Mozart", "0" )
clasica[1] = new elementoHijo( "Vivaldi", "1" )
pop[0] = new elementoHijo( "Madonna", "2" )
pop[1] = new elementoHijo( "Beatles", "3" )
futbol[0] = new elementoHijo( "Maradona", "4" )
futbol[1] = new elementoHijo( "Pelé", "5" )
baloncesto[0] = new elementoHijo( "Johnson", "6" )
baloncesto[1] = new elementoHijo( "Jordan", "7" )

//datos categorias (nombre mostrado, valor, array de datos subcategoria)
musica[0] = new elementoPadre( "Clasica", "0", clasica )
musica[1] = new elementoPadre( "Pop", "1", pop )
deportes[0] = new elementoPadre( "Futbol", "2", futbol )
deportes[1] = new elementoPadre( "Baloncesto", "3", baloncesto )

//datos raiz (nombre mostrado, valor, array de datos subcategoria)
raiz[0] = new elementoPadre( "Musica", "0", musica )
raiz[1] = new elementoPadre( "Deportes", "1", deportes )



//compone la lista dependiente a partir del valor de la opcion escogida en la lista padre
function ComponerLista( listaPadre, listaHija  ) {
	
	f = document.forms["formulario"]
	
	//borra listas hijas
	for ( x = listaHija; x < numListas; x++)
		BorrarLista( f.elements[x] )
	
	//array de datos a copiar en la lista hija
	datosHija = raiz
	for ( x = 0; x < listaHija; x++)
		datosHija = datosHija[ f.elements[x].selectedIndex ].datos
	
	for ( x = 0; x < datosHija.length; x++) {
		// añade elementos a lista hija
                var opcion = new Option( datosHija[x].nombre, datosHija[x].valor )
                f.elements[listaHija].options[x] = opcion
	}
}

//borra la lista
function BorrarLista( lista ) {
        lista.length = 0
}

//estructura de datos para el elemento padre
function elementoPadre ( nombre, valor, datos ) {
        this.nombre = nombre
        this.valor = valor
        this.datos = datos
}

//estructura de datos para el elemento hijo
function elementoHijo ( nombre, valor ) {
        this.nombre = nombre
        this.valor = valor
}




</script>
---------------------------------------------
<form name="formulario">

<p>Hobbie<br>
<!-- Lista 0 -->
<select size="3" name="listaHobbies" onChange="ComponerLista( 0, 1 )">
<option>Música</option>
<option>Deportes</option>
</select></p>

<p>Categoria<br>
<!-- Lista 1 --><select size="3" name="listaCategorias" OnChange="ComponerLista( 1, 2 )">
<option>SELECCIONE</option>
<option>HOBBY</option>
</select></p>

<p>Estrella<br>
<!-- Lista 2 -->
<select size="3" name="listaSubcategorias">
<option>SELECCIONE</option>
<option>HOBBY</option>
</select></form>


