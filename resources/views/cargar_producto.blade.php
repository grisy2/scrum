@extends('layout')
@section('content')
        
<div><h1>Cargar Producto</h1></div>
                    
<form method="POST" action="validar_producto">
    {!! csrf_field() !!}
    <div class="form-group">
        <label for="producto"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span> Nombre del Producto</label>
        <input type="text" class="form-control" name="producto" id="producto" required="required">
    </div>
    <div class="form-group">
        <label for="descripcion"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Descripcion</label>
        <input type="text" class="form-control" name="descripcion" id="descripcion" required="required">
    </div>
    <div class="form-group">
        <label for="codigo"><span class="glyphicon glyphicon-barcode" aria-hidden="true"></span> Codigo </label>
        <input type="number" class="form-control" name="codigo" id="codigo" required="required" min="1000000000000" max="9999999999999">
    </div>
    <button type="submit"class="btn btn-primary">Cargar <span class="glyphicon glyphicon-paperclip" aria-hidden="true"></span></button>
    <a class="btn btn-info" href="/"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Inicio</a>
</form>



@endsection
