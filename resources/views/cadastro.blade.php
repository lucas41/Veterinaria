@extends('teamplate/teamplate')

@section('site')
<br><br>
<h1><center> Cadastro </center></h1>
    <br> <br>
    

<section>
<center> <form name="Cadastro" method="post" action="{{action('CaesController@cadastro')}}">
@csrf
<div class="form-group"  > 
	
        <br><br>
		<label> 
			<span>Nome</span>
 			<input type="text" class="input_text" name="nome" id="name" []/>
 
		</label>
        <br><br>
		<label>
 			<span>raça</span>&nbsp;
			<input type="text" class="input_text" name="raca" id="raca" size="50" []/>
		 </label>
        <br><br>
        <input class="btn btn-primary" type="submit" value="enviar">
        </section>

</form> </center>


@if (count($errors) > 0) 
<div class="alert alert-danger"> 
<ul> @foreach ($errors->all() as $error)
 <li>{{ $error }}</li> 
 @endforeach 
 </ul> 
 </div> @endif



 </ul> 
 </div> 




@endsection('site')