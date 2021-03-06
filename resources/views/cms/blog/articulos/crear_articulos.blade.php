@extends('cms')


@section('content')
<section class="seccion-crear-publicidad-cms">
	<div class="container-fluid">
		<h2 class="my-3">
			Crear Articulo
		</h2>
		@if(session('message'))
		  <div class="alert alert-success" role="alert">
		    {{session('message')}}
		  </div>
		@endif
		<form action="/cms/blog/guardar/articulo" class="col-12" method="POST" enctype="multipart/form-data">
			@csrf
			<input type="hidden" name="article_author" value="{{auth()->user()->id}}">
			<div class="form-group">
				<h5>Titulo</h5>
				<input type="text" name="articulo_title" placeholder="Titulo..." class="form-control">
			</div>
			<div class="form-group">
				<h5>Contenido</h5>
				<textarea class="form-control" name="articulo_content"></textarea>
			</div>
			<div class="form-group">
				<h5>Keywords</h5>
				<input type="text" name="articulo_keywords" placeholder="Keywords..." class="form-control">
			</div>
			<div class="form-group">
				<h5>Fecha</h5>
				<input type="date" name="articulo_date" placeholder="Fecha..." class="form-control">
			</div>
			<div class="form-group">
				<h5>Categoria</h5>
				<select class="form-control" name="articulo_categoria">
					<option>Seleccion una categoria</option>
					@foreach($categorias as $categoria)
						<option value="{{$categoria->id}}">{{$categoria->name}}</option>
					@endforeach
				</select>
			</div>
			<div class="form-group">
				<h5>Imagen</h5>
				<input type="file" name="article_picture">
			</div>
			<input type="submit" class="btn btn-primary mb-4" value="Crear Articulo">
		</form>
	</div>
</section>


@endsection