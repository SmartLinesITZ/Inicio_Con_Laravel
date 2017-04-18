{!!Form::open(['url'=> $url, 'method' => $method])!!}
	<div class="form-group">
		{{Form::text('title',$product->title,['class' => 'form-control','placeholder'=>'Titulo...'])}}
	</div>
	<div class="form-group">
		{{Form::textarea('description',$product->description,['class' => 'form-control','placeholder'=>'Descrpcion...'])}}
	</div>
		<div class="form-group">
		{{Form::number('pricing', $product->pricing,['class' => 'form-control', 'placeholder'=>'precio...'])}}
	</div>
	<div class="form-group text-right">
		<a href="{{url('/products')}}">Regresar a Listado de productos</a>
		<input type="submit" value="Enviar" class="btn btn-success"></input>
	</div>
{!! Form::close()!!}

