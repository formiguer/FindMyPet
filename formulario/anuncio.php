<form action="enviado.php" enctype="multipart/form-data" method="post">
<table>
<tr>
<td><Font Color="#4B8A08" Face="sans-serif" size="2"><B> &#9679; Sección:<B></font></td>
<td>
<select name="situacion">
<option value="Perdido">Mascota Perdida</option>
<option value="Encontrado">Mascota Encontrado</option>
<option value="Adopcion">Mascota en Adopcion</option>
</select>
</tr>
<tr>
<td><font Color="#4B8A08" Face="sans-serif" size="2"><B> &#9679; Nombre Contacto:<B></font></td>
<td>
<input name="n_persona" type="text" required="required" /></td>
</tr>
<tr>
<td><font Color="#4B8A08" Face="sans-serif" size="2"><B> &#9679; Teléfono:<B></font></td>
<td>
<input name="telefono" type="text" required="required"/></td>
</tr>
<tr>
<td><font Color="#4B8A08" Face="sans-serif" size="2"><B> &#9679; Correo electrónico:<B></font></td>
<td>
<input name="email" type="text" /></td>
</tr>
<tr>
<td><font Color="#4B8A08" Face="sans-serif" size="2"><B> &#9679; Contraseña:<B></font></td>
<td>
<input name="clave"
placeholder="Max 4 cifras..."
style="color:#3d3d3d"
type = "number"
maxlength = "4"
min = "1"
max = "9999"
required="required"/>

Para editar o borrar anuncio.
</td>
</tr>
</table>
<h2>Datos Mascota:</h2>
<table>
<tr>
<td><font Color="#4B8A08" Face="sans-serif" size="2"><B> &#9679; Nombre mascota:<B></font></td>
<td>
<input name="n_animal" type="text" /></td>
</tr>
<tr>
<td><font Color="#4B8A08" Face="sans-serif" size="2"><B> &#9679; Categoría:<B></font></td>
<td>
<input type="radio" name="especie" value="Perro" id="perro-rd" />Perros
<input type="radio" name="especie" value="Gato" id="gato-rd" />Gatos
<input type="radio" name="especie" value="Otros" id="otros-rd" />Otras especies
</tr>
<tr id="raza-otros">
<td><font Color="#4B8A08" Face="sans-serif" size="2"><B> &#9679; Otras especies:<B></font></td>
<td>
<select name="especie1" maxlength="30">
<option  selected value="seleccionar uno" disabled="disabled">Selecciona una subcategoría:</option>
<option value="Ave">Aves</option>
<option value="Caballo">Caballos</option>
<option value="Roedores y Conejos">Roedores y Conejos</option>
<option value="Huron">Hurones</option>
<option value="Otros">Otros</option>
</select>
</td>
</tr>
<tr id="raza-perro">
<td><font Color="#4B8A08" Face="sans-serif" size="2"><B> &#9679; Razas de perros:<B></font></td>
<td>
<select name="razap"  maxlength="20">
<option  selected value="seleccionar uno" disabled="disabled">Selecciona una raza:</option>
<!--<option  value='perro' disabled="disabled"  style='background-color:#dcdcc3;color:#000000;' >
  PERROS  
  </option>-->
<option value="Akita Inu">Akita Inu</option> 
<option value="American Staffordshire terrier">American Staffordshire terrier</option> 
<option value="Alaska Malamute">Alaska Malamute</option> 
<option value="Basset Hound">Basset Hound</option> 
<option value="Beagle">Beagle</option> 
<option value="Bichon Maltes">Bichon Maltes</option> 
<option value="Bobtail">Bobtail</option> 
<option value="Border Collie">Border Collie</option> 
<option value="Border Terrier">Border Terrier</option> 
<option value="Boston Terrier">Boston Terrier</option> 
<option value="Boxer">Boxer</option> 
<option value="Braco Weimar">Braco Weimar</option> 
<option value="Breton">Breton</option> 
<option value="Bulldog Frances">Bulldog Frances</option> 
<option value="Bulldog Ingles">Bulldog Ingles</option> 
<option value="Bull Terrier Ingles">Bull Terrier Ingles</option> 
<option value="Bullmastiff">Bullmastiff</option> 
<option value="Caniche">Caniche</option> 
<option value="Carlino / Pug">Carlino / Pug</option> 
<option value="Cavalier King Charles Spaniel">Cavalier King Charles Spaniel</option> 
<option value="Chihuahua">Chihuahua</option> 
<option value="Cocker Spaniel Americano">Cocker Spaniel Americano</option> 
<option value="Cocker Spaniel Ingles">Cocker Spaniel Ingles</option> 
<option value="Chow Chow">Chow Chow</option> 
<option value="Dachshund / Teckel">Dachshund / Teckel</option> 
<option value="Dalmata">Dalmata</option> 
<option value="Doberman">Doberman</option> 
<option value="Dogo Argentino">Dogo Argentino</option> 
<option value="Dogo Canario / Presa Canario">Dogo Canario / Presa Canario</option> 
<option value="Dogo de Burdeos">Dogo de Burdeos</option> 
<option value="Dogo Mallorquin/Ca de Bou">Dogo Mallorquin/Ca de Bou</option> 
<option value="Fox Terrier">Fox Terrier</option> 
<option value="Galgo">Galgo</option> 
<option value="Golde Retriever">Golde Retriever</option> 
<option value="Gos de Atura Catala">Gos de Atura Catala</option> 
<option value="Gran Danes">Gran Danes</option> 
<option value="Husky Siberiano">Husky Siberiano</option> 
<option value="Jack Russell Terrier">Jack Russell Terrier</option> 
<option value="Labrador Retriever">Labrador Retriever</option> 
<option value="Lasha Apso">Lasha Apso</option> 
<option value="Mastin de los Pirineos">Mastin de los Pirineos</option> 
<option value="Mastin EspaÑol">Mastin EspaÑol</option> 
<option value="Mastin Napolitano">Mastin Napolitano</option> 
<option value="Papillon">Papillon</option> 
<option value="Pastor Aleman">Pastor Aleman</option> 
<option value="Pastor Belga">Pastor Belga</option> 
<option value="Pastor de Brie">Pastor de Brie</option> 
<option value="Pastor Mallorquin/ Ca de Bestiar">Pastor Mallorquin/ Ca de Bestiar</option> 
<option value="Pekines">Pekines</option> 
<option value="Perro de Agua">Perro de Agua</option> 
<option value="Pinscher Aleman">Pinscher Aleman</option> 
<option value="Pinscher Miniatura">Pinscher Miniatura</option> 
<option value="Pitbull">Pitbull</option> 
<option value="Podenco Canario">Podenco Canario</option> 
<option value="Podenco Ibicenco">Podenco Ibicenco</option> 
<option value="Pointer Ingles">Pointer Ingles</option> 
<option value="Pomerania / Spitz enano aleman">Pomerania / Spitz enano aleman</option> 
<option value="Ratero Mallorquin">Ratero Mallorquin</option> 
<option value="Rottweiler">Rottweiler</option> 
<option value="Sabueso">Sabueso</option> 
<option value="Samoyedo">Samoyedo</option> 
<option value="San Bernardo">San Bernardo</option> 
<option value="Schnauzer">Schnauzer</option> 
<option value="Scottish Terrier/ Terrier Escoces">Scottish Terrier/ Terrier Escoces</option> 
<option value="Setter Gordon">Setter Gordon</option> 
<option value="Setter Ingles">Setter Ingles</option> 
<option value="Setter Irlandes">Setter Irlandes</option> 
<option value="Shar Pei">Shar Pei</option> 
<option value="Shih Tzu">Shih Tzu</option> 
<option value="Staffordshire Bull Terrier">Staffordshire Bull Terrier</option> 
<option value="Terranova">Terranova</option> 
<option value="Weimaraner">Weimaraner</option> 
<option value="West Highland White Terrier/ Westies">West Highland White Terrier/ Westies</option> 
<option value="Yorkshire Terrier">Yorkshire Terrier</option> 
<option value="Otras Razas de perros">Otras Razas de perros</option> 
<option value="Cruces de Perros">Cruces de Perros</option> 
</select>
</td></tr>

<tr id="raza-gato">
<td><font Color="#4B8A08" Face="sans-serif" size="2"><B> &#9679; Razas de gatos:<B></font></td>
<td>
<select name="razag" maxlength="20">
<option  selected value="seleccionar uno" disabled="disabled">Selecciona una raza:</option>
<option value="Abisino">Abisino</option> 
<option value="Americano de pelo corto">Americano de pelo corto</option> 
<option value="Angora">Angora</option> 
<option value="Azul Ruso">Azul Ruso</option> 
<option value="Balines">Balines</option> 
<option value="Bengali">Bengali</option> 
<option value="Birmano">Birmano</option> 
<option value="Bobtail japones">Bobtail japones</option> 
<option value="Bombay">Bombay</option> 
<option value="Bosque de Noruega">Bosque de Noruega</option> 
<option value="British shorthair">British shorthair</option> 
<option value="Burmes">Burmes</option> 
<option value="Cornish red">Cornish red</option> 
<option value="Curl americano">Curl americano</option> 
<option value="Devon Rex">Devon Rex</option> 
<option value="Egipcio">Egipcio</option> 
<option value="Esfinge">Esfinge</option> 
<option value="Europeo Comun">Europeo Comun</option> 
<option value="Exotico">Exotico</option> 
<option value="Himalaya">Himalaya</option> 
<option value="Maine Coon">Maine Coon</option> 
<option value="Persa">Persa</option> 
<option value="Ragdoll">Ragdoll</option> 
<option value="Siames">Siames</option> 
<option value="Siberiano">Siberiano</option> 
<option value="Otras razas de Gatos">Otras razas de Gatos</option> 
<option value="Cruces de Gatos">Cruces de Gatos</option>  
</select>
</td></tr>
  
<tr>
<td><font Color="#4B8A08" Face="sans-serif" size="2"><B> &#9679; Edad: <B></font></td>
<td>
<select name="edad"  maxlength="20">
<option  selected value="seleccionar uno" disabled="disabled">Seleccione edad</option>

<option value="0-3 meses">0-3 meses</option> 
<option value="3-6 mses">3-6 meses</option> 
<option value="6-12 meses">6-11 meses</option> 
<option value="1 año">1 año</option>
<option value="2 años">2 años</option>
<option value="3 años">3 años</option>
<option value="4 años">4 años</option>
<option value="5 años">5 años</option>
<option value="6 años">6 años</option>
<option value="7 años">7 años</option>
<option value="8 años">8 años</option>
<option value="9 años">9 años</option>
<option value="10 años">10 años</option> 
<option value="+10 años">+10 años</option>
</tr>


<tr>
<td><font Color="#4B8A08" Face="sans-serif" size="2"><B> &#9679; Sexo:<B></font></td>
<td>
<input type="radio" name="sexo" checked value="Macho" />Macho
<input type="radio" name="sexo" value="Hembra" />Hembra
</tr>
<tr>
<td><font Color="#4B8A08" Face="sans-serif" size="2"><B> &#9679; Color de capa:<B></font></td>
<td>
<input name="color" type="text" /></td>
</tr>
<tr>
<td><font Color="#4B8A08" Face="sans-serif" size="2"><B> &#9679; Imagen:<B></font></td>
<td>
<input name="fichero" type="file" /></td>
</tr>
<tr>
<td><font Color="#4B8A08" Face="sans-serif" size="2"><B> &#9679; Microchip:<B></font></td>
<td>
<input type="radio" name="chip" value="no" />No
<input type="radio" name="chip" checked value="si" />Si
</tr>
<tr>
<td><font Color="#4B8A08" Face="sans-serif" size="2"><B> &#9679; Nº Microchip:<B></font></td>
<td>
<input name="n_chip" type="text" maxlength="88" /></td>
</tr>
</table>
<h2>Datos Localizacion:</h2>
<table>

<td><font Color="#4B8A08" Face="sans-serif" size="2"><B> &#9679; Isla:<B></font></td>
<td>
<input type="radio" name="isla" value="Mallorca" id="mallorca-rd" />Mallorca
<input type="radio" name="isla" value="Menorca" id="menorca-rd" />Menorca
<input type="radio" name="isla" value="Ibiza y Formentera" id="ibizayformentera-rd" />Ibiza y Formentera
</tr>
<tr id="isla-mallorca">
<td><font Color="#4B8A08" Face="sans-serif" size="2"><B> &#9679; Municipio:<B></font></td>
<td>
<select name="islama"  maxlength="20">
<option  selected value="seleccionar uno" disabled="disabled">Seleccionar un municipio:</option>
<option  value="Alaro">Alaró</option>
<option value="Alcudia">Alcúdia</option>
<option value="Algaida">Algaida</option>
<option value="Andratx">Andratx</option>
<option value="Ariany">Ariany</option>
<option value="Arta">Artà</option>
<option value="Banyalbufar">Banyalbufar</option>
<option value="Binissalem">Binissalem</option>
<option value="Buger">Búger</option>
<option value="Bunyola">Bunyola</option>
<option value="Calvia">Calviá</option>
<option value="Campanet">Campanet</option>
<option value="Campos">Campos</option>
<option value="Capdepera">Capdepera</option>
<option value="Consell">Consell</option>
<option value="Costitx">Costitx</option>
<option value="Deia">Deiá</option>
<option value="Escorca">Escorca</option>
<option value="Esporles">Esporles</option>
<option value="Estellencs">Estellencs</option>
<option value="Felanitx">Felanitx</option>
<option value="Fornalutx">Fornalutx</option>
<option value="Inca">Inca</option>
<option value="Lloret de Vistalegre">Lloret de Vistalegre</option>
<option value="Lloseta">Lloseta</option>
<option value="Llubi">Llubí</option>
<option value="Llucmajor">Llucmajor</option>
<option value="Manacor">Manacor</option>
<option value="Mancor de la vall">Mancor de la Vall</option>
<option value="Maria de la salut">Maria de la salut</option>
<option value="Marratxi">Marratxí</option>
<option value="Montuiri">Montuïri</option>
<option value="Muro">Muro</option>
<option value="Palma">Palma</option>
<option value="Petra">Petra</option>
<option value="Pollença">Pollença</option>
<option value="Porreres">Porreres</option>
<option value="Puigpunyent">Puigpunyent</option>
<option value="Santanyi">Santanyí</option>
<option value="Sant joan">Sant Joan</option>
<option value="Sant Lloren&ccedil; des Cardassar">Sant Llorenç des Cardassar</option>
<option value="Sa pobla">Sa Pobla</option>
<option value="Santa Eugenia">Santa Eugenia</option>
<option value="Santa Margalida">Santa Margalida</option>
<option value="Santa Maria del Cami">Santa María del Camí</option>
<option value="Selva">Selva</option>
<option value="Sencelles">Sencelles</option>
<option value="Ses Salines">Ses Salines</option>
<option value="Sineu">Sineu</option>
<option value="Soller">Soller</option>
<option value="Son Servera">Son Servera</option>

<option value="Valldemossa">Valldemossa</option>
<option value="Villafranca de Bonany">Villafranca de Bonany</option>

<tr id="isla-menorca">
<td><font Color="#4B8A08" Face="sans-serif" size="2"><B> &#9679; Municipio:<B></font></td>
<td>
<select name="islame"  maxlength="20">
<option  selected value="seleccionar uno" disabled="disabled">Seleccionar un municipio:</option>
<option value="Alaior">Alaior</option>
<option value="Ciutadella">Ciutadella de Menorca</option>
<option value="Ferreries">Ferreries</option>
<option value="Mahon">Mahon</option>
<option value="Es Mercadal">Es Mercadal</option>
<option value="Es Migjorn Gran">Es Migjorn Gran</option>
<option value="Sant Lluis">Sant Lluís</option>
<option value="Es Castell">Es Castell</option>
<tr id="isla-ibizayformentera">
<td><font Color="#4B8A08" Face="sans-serif" size="2"><B> &#9679; Municipio:<B></font></td>
<td>
<select name="islaif"  maxlength="20">
<option  selected value="seleccionar uno" disabled="disabled">Seleccionar un municipio:</option>
<option value="Ibiza">Ibiza</option>
<option value="Sant Antoni de Portmany">Sant Antoni de Portmany</option>
<option value="Sant Joan de Labritja">Sant Joan de Labritja</option>
<option value="Sant Josep de Sa Talaia">Sant Josep de Sa Talaia</option>
<option value="Santa Eulalia des Riu">Santa Eulalia des Riu</option>
<option value="Formentera">Formentera</option>
</select>
</table>
<table>
<td><font Color="#4B8A08" Face="sans-serif" size="2"><B> &#9679; Zona:<B></font></td>
<td>
<input name="zona" type="text" maxlength="88" /></td>
</tr>
</table>
<table>
<tr>
<td>
<font Color="#4B8A08" Face="sans-serif" size="2"><B> &#9679; Fecha:<B></font>
<input id="fecha" type="text" size="25" name="fecha"><a href="javascript:NewCal('fecha','ddmmmyyyy',false,24)"><img src="formulario/cal/cal.gif" width="16" height="16" border="0" alt="Pick a date"></a>
</td>
</table>
<tr>
<td><font Color="#4B8A08" Face="sans-serif" size="2"><B> &#9679; Más Información:<B></font></td>
<br />
<td>
<textarea rows="12" cols="45" wrap="soft" name="comentario" required="required" placeholder="Escriba su comentario..."></textarea>
</tr><br />
<tr>
<td>
<input type="radio" name="acepto" value="perro" required="required"/>Acepto las condiciones para publicar</td>
</tr>
<br />
<A HREF='politica.php' TARGET='_blank'>Politica de Privacidad
</a><br /><br />

<input type="image" src="images/enviar.png" onmouseover="this.src='images/enviarMouseOver.png';" onmouseout="this.src='images/enviar.png';"BORDER=0 style='float:left' value="Enviar" /></td>

</form>


<script type="text/javascript">
$('input:radio[name=especie]').attr('checked', false);
$('#raza-perro').hide();
$('#raza-gato').hide();
$('#raza-otros').hide();

$('#perro-rd').click(function (ev) {
    $('#raza-perro').show();
    $('#raza-gato').hide();
    $('#raza-otros').hide();
});

$('#gato-rd').click(function (ev) {
    $('#raza-perro').hide();
    $('#raza-gato').show();
    $('#raza-otros').hide();
});

$('#otros-rd').click(function (ev) {
    $('#raza-perro').hide();
    $('#raza-gato').hide();
    $('#raza-otros').show();
});
</script>
<script type="text/javascript">
$('input:radio[name=isla]').attr('checked', false);
$('#isla-mallorca').hide();
$('#isla-menorca').hide();
$('#isla-ibizayformentera').hide();

$('#mallorca-rd').click(function (ev) {
    $('#isla-mallorca').show();
    $('#isla-menorca').hide();
    $('#isla-ibizayformentera').hide();
});

$('#menorca-rd').click(function (ev) {
    $('#isla-mallorca').hide();
    $('#isla-menorca').show();
    $('#isla-ibizayformentera').hide();
});

$('#ibizayformentera-rd').click(function (ev) {
    $('#isla-mallorca').hide();
    $('#isla-menorca').hide();
    $('#isla-ibizayformentera').show();
});
</script>
