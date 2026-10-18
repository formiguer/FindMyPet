<form action="enviado.php" enctype="multipart/form-data" method="post">

<table>
<tr>
<td>Tipo Anuncio:</td>
<td>
<select name="situacion">
<option value="perdido">Mascota Perdida</option>
<option value="encontrado">Mascota Encontrado</option>
<option value="adopcion">Mascota en Adopcion</option>
</select>
</tr>
<tr>
<td>Nombre Contacto:</td>
<td>
<input name="n_persona" type="text" required="required"/></td>
</tr>
<tr>
<td>Teléfono:</td>
<td>
<input name="telefono" type="text" /></td>
</tr>
<tr>
<td>Correo electrónico:</td>
<td>
<input name="email" type="text" /></td>
</tr>
</table>
<h2>Datos Mascota:</h2>
<table>
<tr>
<td>Nombre Animal:</td>
<td>
<input name="n_animal" type="text" /></td>
</tr>
<tr>
<td>Sección:</td>
<td>
<input type="radio" name="especie" checked value="perro" />Perros
<input type="radio" name="especie" value="gato" />Gatos
<input type="radio" name="especie" value="otros" />Otras especies
</tr>
<tr>
<td>Otra Especie:</td>
<td>
<input name="especie1" type="text" /></td>
</tr>
<tr>
<td>Raza:</td>
<td>
<input name="raza" type="text" required="required"/></td>
</tr>
<tr>
<td>Edad:</td>
<td>
<input name="edad" type="text" /></td>
</tr>
<tr>
<td>Sexo:</td>
<td>
<input type="radio" name="sexo" checked value="macho" />Macho
<input type="radio" name="sexo" value="hembra" />Hembra
</tr>
<tr>
<td>Color de capa:</td>
<td>
<input name="color" type="text" /></td>
</tr>
<tr>
<td>Imagen:</td>
<td>
<input name="fichero" type="file" /></td>
</tr>
<tr>
<td>Microchip:</td>
<td>
<input type="radio" name="chip" value="no" />No
<input type="radio" name="chip" checked value="si" />Si
</tr>
<tr>
<td>Nº Microchip:</td>
<td>
<input name="n_chip" type="text" maxlength="88" /></td>
</tr>
</table>
<h2>Datos Localizacion:</h2>
<table>
<tr>
<td>Isla:</td>
<td>
<select name="isla" maxlength="10">
<option selected value="mallorca">Mallorca</option>
<option value="menorca">Menorca</option>
<option value="ibiza">Ibiza</option>
<option value="formentera">Formentera</option>
</select>
<tr>
<td>Municipio:</td>
<td>
<select name="municipio"  maxlength="30">
<option  selected value="seleccionar uno" disabled="disabled">Seleccione un municipio</option>
<option  value='mallorca' disabled="disabled"  style='background-color:#dcdcc3;color:#000000;' >
  MALLORCA   
  </option>
<option  value="alaro">Alaró</option>
<option value="alcudia">Alcúdia</option>
<option value="algaida">Algaida</option>
<option value="andratx">Andratx</option>
<option value="ariany">Ariany</option>
<option value="arta">Artà</option>
<option value="banyalbufar">Banyalbufar</option>
<option value="binissalem">Binissalem</option>
<option value="buger">Búger</option>
<option value="bunyo">Bunyola</option>
<option value="calvia">Calviá</option>
<option value="campanet">Campanet</option>
<option value="campos">Campos</option>
<option value="capdepera">Capdepera</option>
<option value="consell">Consell</option>
<option value="costitx">Costitx</option>
<option value="deia">Deiá</option>
<option value="escorca">Escorca</option>
<option value="esporles">Esporles</option>
<option value="estellencs">Estellencs</option>
<option value="felanitx">Felanitx</option>
<option value="fornalutx">Fornalutx</option>
<option value="inca">Inca</option>
<option value="lloretvistalegre">Lloret de Vistalegre</option>
<option value="lloseta">Lloseta</option>
<option value="llubi">Llubí</option>
<option value="llucmajor">Llucmajor</option>
<option value="manacor">Manacor</option>
<option value="mancordelavall">Mancor de la Vall</option>
<option value="mariadelasalut">Maria de la salut</option>
<option value="marratxi">Marratxí</option>
<option value="montuire">Montuïri</option>
<option value="muro">Muro</option>
<option value="palma">Palma</option>
<option value="petra">Petra</option>
<option value="pollenca">Pollença</option>
<option value="porreres">Porreres</option>
<option value="puigpunyent">Puigpunyent</option>
<option value="santanyi">Santanyí</option>
<option value="santjoan">Sant Joan</option>
<option value="santllorençdescardassar">Sant Llorenç des Cardassar</option>
<option value="sapobla">Sa Pobla</option>
<option value="santaeugenia">Santa Eugenia</option>
<option value="santamargalida">Santa Margalida</option>
<option value="santamariadelcami">Santa María del Camí</option>
<option value="selva">Selva</option>
<option value="sencelles">Sencelles</option>
<option value="sessalines">Ses Salines</option>
<option value="sineu">Sineu</option>
<option value="soller">Soller</option>
<option value="sonservera">Son Servera</option>

<option value="valldemosa">Valldemossa</option>
<option value="villafrancadebonany">Villafranca de Bonany</option>

<option value='menorca' disabled="disabled"  style='background-color:#dcdcc3;color:#000000;' >
MENORCA
</option>
<option value="alaior">Alaior</option>
<option value="ciutadella">Ciutadella de Menorca</option>
<option value="ferreries">Ferreries</option>
<option value="mahon">Mahon</option>
<option value="mercadal">Es Mercadal</option>
<option value="migjorngran">Es Migjorn Gran</option>
<option value="santlluis">Sant Lluís</option>
<option value="escastell">Es Castell</option>
<option value='ibizayformentera' disabled="disabled"  style='background-color:#dcdcc3;color:#000000;' >
IBIZA Y FORMENTERA
</option>
<option value="ibiza">Ibiza</option>
<option value="santantoniportmany">Sant Antoni de Portmany</option>
<option value="santjoanlabritja">Sant Joan de Labritja</option>
<option value="santjosepdesatalaia">Sant Josep de Sa Talaia</option>
<option value="santaeulaliadesriu">Santa Eulalia des Riu</option>
<option value="formentera">Formentera</option>
</select>
<td>Zona:</td>
<td>
<input name="zona" type="text" maxlength="88" /></td>
</tr>
</table>
<table>
<tr>
<td>
Fecha:
<input id="fecha" type="text" size="25" name="fecha"><a href="javascript:NewCal('fecha','ddmmmyyyy',true,24)"><img src="formulario/cal/cal.gif" width="16" height="16" border="0" alt="Pick a date"></a>
</td>
</table>

<tr>
<td>Observaciones:</td>
<br />
<td>
<textarea rows="12" cols="45" wrap="soft" name="comentario" required="required">Escriba su comentario...</textarea>
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

