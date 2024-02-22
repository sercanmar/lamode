<h1>Nuevo Pastel</h1>
<form action="{{ route('pasteles.store') }}" method="PUT">
<div class="row mb-3">
<div class="form-group">
<label for="nombre">nombre:</label>
<input type="text" class="form-control" name="nombre"id="titulo">
</div>
<div class="form-group">
<label for="sabor">sabor:</label>
<input type="text" class="form-control" name="sabor"id="
editorial">
</div>
<div class="form-group">
<label for="imagen">Precio:</label>
<input type="text" class="form-control" name="imagen"id="precio">
</div>

<input type="submit" name="enviar" value="Enviar" class="btn btn-dark
btn-block">
</div>
</form>