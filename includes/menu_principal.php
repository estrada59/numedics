<?php
function sub_raiz(){
echo'
<div class="span12">
	<div class="select-menu hidden-desktop">
		<select id="selectMenu">

			<option selected value="../index.php">Inicio</option>
			<!-- Para configurar submenú-->
			<!-- <option selected value="../../index.php">menu 2</option> -->
			<option value="../nosotros.php">Nosotros</option>
			<option value="../servicios.php">Servicios</option>					
			<option value="../doctores.php">Doctores</option>
			<li><a href="../contacto.php">Contacto</a></li> 
			
		</select>
	</div>
	
	<ul id="menu" class="visible-desktop">
						
		<li> <a href="../index.php">Inicio</a>			
		<!-- Para configurar submenú-->
		<!--<ul> 
 			<li><a href="../index.html">menu 2</a> </li>
		</ul>-->
		</li>
		<li><a href="../nosotros.php">NOSOTROS</a></li>
		<li><a href="../servicios.php">SERVICIOS</a></li>
		<li><a href="../doctores.php">DOCTORES</a></li>
		<li><a href="../contacto.php">CONTACTO</a></li> 
	</ul>
</div>';

return 1;
}

function raiz(){
echo'
<div class="span12">
	<div class="select-menu hidden-desktop">
		<select id="selectMenu">

			<option selected value="index.php">Inicio</option>
			<!-- Para configurar submenú-->
			<!-- <option selected value="index.php">menu 2</option> -->
			<option value="nosotros.php">Nosotros</option>						
			<option value="servicios.php">Servicios</option>					
			<option value="doctores.php">Doctores</option>
			<option value="contacto.php">Contacto</option>
			

		</select>
	</div>
	
	<ul id="menu" class="visible-desktop">
						
		<li> <a href="index.php">Inicio</a>			
		<!-- Para configurar submenú-->
		<!--<ul> 
 			<li><a href="index.html">menu 2</a> </li>
		</ul>-->
		</li>
		<li><a href="nosotros.php">Nosotros</a></li>
		<li><a href="servicios.php">SERVICIOS</a></li>
		<li><a href="doctores.php">DOCTORES</a></li>
		<li><a href="contacto.php">CONTACTO</a></li> 
		

	</ul>
</div>';

return 1;
}
?>