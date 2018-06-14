@extends('teamplate.teamplate')
@section('site')

<form name="Cadastro" method="post" action="{{action('CaesController@update',[$cao->id])}}">
@csrf
<div class="form-group"  > 
	
        <br><br>
		<label> 
			<span>Nome</span>
                    <input type="text" class="input_text" name="nome" id="name" value="{{$cao->Nome}}"/>
 
		</label>
        <br><br>
		<label>
 			<span>raça</span>&nbsp;
			<input type="text" class="input_text" name="raca" id="raca" size="50" value="{{$cao->raca}}"/>
		 </label>
        <br><br>
        <input class="btn btn-primary" type="submit" value="enviar">
        </section>

</form> 


@endsection