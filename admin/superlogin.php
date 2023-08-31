<div class="login-form">
<center><h2>Iniciar sesión</h2></center>
<form method="post" class="form-horizontal">
<div class="form-group">
<label class="col-sm-6 text-left">Email</label>
<div class="col-sm-12">
<input type="text" name="txt_email" class="form-control" placeholder="Ingrese email" />
</div>
</div>

<div class="form-group">
<label class="col-sm-6 text-left">Password</label>
<div class="col-sm-12">
<input type="password" name="txt_password" class="form-control" placeholder="Ingrese passowrd" />
</div>
</div>

<div class="form-group">
<label class="col-sm-6 text-left">Seleccionar rol</label>
<div class="col-sm-12">
<select class="form-control" name="txt_role">
<option value="" selected="selected"> - selecccionar rol - </option>
<option value="admin">Admin</option>
<option value="personal">Personal</option>
<option value="usuarios">Usuarios</option>
</select>
</div>
</div>

<div class="form-group">
<div class="col-sm-12">
<input type="submit" name="btn_login" class="btn btn-success btn-block" value="Iniciar Sesion">
</div>
</div>

</form>
</div>
