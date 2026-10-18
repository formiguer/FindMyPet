<form action="enviado1.php" enctype="multipart/form-data" method="post">
<script language="javascript" type="text/javascript" src="jquery-1.9.1.min.js">
</script>
<script language="javascript" type="text/javascript" src="cal/datetimepicker.js">


//Date Time Picker script- by TengYong Ng of http://www.rainforestnet.com
//Script featured on JavaScript Kit (http://www.javascriptkit.com)
//For this script, visit http://www.javascriptkit.com

</script>

<h2>DATOS CONTACTO:</h2>
<table>
<tbody>
<td><Font Color="#4B8A08" Face="sans-serif" size="2"><B> &#9679; Nombre:<B></font></td>
<td>
<input name="n_persona" type="text" required="required"/></td>
</tr>
<tr>
<td><Font Color="#4B8A08" Face="sans-serif" size="2"><B> &#9679; Teléfono:<B></font></td>
<td>
<input name="telefono" type="text" required="required"/></td>
</tr>
<tr>
<td><Font Color="#4B8A08" Face="sans-serif" size="2"><B> &#9679; Correo electrónico:<B></font></td>
<td>
<input name="email" type="text" /></td>
</tr>
</table>
<h2>DONDE Y CUANDO:</h2>
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
	<tr><td><Font Color="#4B8A08" Face="sans-serif" size="2"><B> &#9679; Fecha<B></font></td><td><input type="text" value="12.01.2013" name="theDate2"><input type="button" value="Cal" name="fecha" onclick="displayCalendar(document.forms[0].theDate2,'dd.mm.yyyy',this)"></td></tr>
</table>

<tr>
<td><Font Color="#4B8A08" Face="sans-serif" size="2"><B> &#9679; Anuncio:<B></font></td><br />
<td>
<textarea rows="4" cols="45" name="comentario" required="required">Escriba su comentario...</textarea></td>
</tr><br />
<tr>
<td>
<input type="radio" name="acepto" value="perro" required="required"/>Acepto las condiciones de publicación</td>
</tr>
<tr>
<td>  

</td>
</tr>

<br /><br />
<A HREF='politica.php' TARGET='_blank'>Politica de Privacidad
</a><br /><br />
<input type="reset" value="Borrar">
<input type="submit" value="Enviar" /></td>

</body>
</form>
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

