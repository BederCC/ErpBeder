<h2 class="text-center">Área</h2>

 <form method="post" action="<?php echo URLM ?>areas/crear" role="form" class="form-horizontal container">

  <div class="form-group">



    <label for="area" class="col-sm-2 control-label">Área </label>
    <div class="col-sm-10" >
    	<input name="nuevaArea" type="text" class="form-control " id="area"required placeholder ="Ingrese nombre de nueva área">
    </div>

  </div>

  <div class="form-group">

    <label for="person" class="col-sm-2 control-label">Jefe de Área </label>

    <div class="col-sm-10" >
    <input name="jefeArea" type="text" class="form-control" id="person" required placeholder="Ingrese nombre de nuevo jefe">
    </div>
  </div>

  
   <div class="form-group">
  	
  	<label for="descrip" class="col-sm-2 control-label">Descripción del área:</label>
  	<div class="col-sm-10" >
  	 <textarea class="form-control" rows="3" id="descrip" required placeholder="Ingrese descripción acerca de la nueva área"></textarea>
    </div>
   </div>

   <div class="form-group " >
  	<div class="col-sm-offset-2 col-sm-10">
  		<button type="submit" class="btn btn-default">Guardar</button>
  	</div>
  </div>

</form>