@extends('layouts.app')

@section('title', 'Index')

@section('titleContent')
	<div class="titleStyle">
		<h2>Questions & Answers 1.0</h2>
	</div>
@endsection

@section('content')
    <div class="box">
    	<div class="card">
		 	<div class="card-header">
		    	Caja de Preguntas
		  	</div>
			<div class="card-body">
				{{-- <h5 class="card-title">Preguntas</h5> --}}
				<form>
					<div class="form-group row">
						<label class="col-md-4 titleBoxLabel" for="pregunta">Pregunta:</label>
						<input type="text" class="form-control col-md-8" id="question" name="question"  placeholder="Ingresa tu pregunta...">
					</div>	
					<a href="#" class="btn btn-primary" id="btnPreguntar">Pregunta!</a>
				</form>
			</div>
		</div>
    </div>
@endsection