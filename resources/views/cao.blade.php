@extends('teamplate/teamplate')
 @section('site') 
    <h1><center> cachorros Cadastrados</center></h1>
    <br> <br>
   

<table class='table' border='1'> 
<tr>
<th> Nome </th>
<th> raça </th>
<th> Deletar </th>
<th> Atualizar </th>
</tr>
<?php foreach ($caes as $cao) : 
?> 


<tr> 
<td>&nbsp;<?= $cao->Nome ?>&nbsp;</td> 
<td>&nbsp;<?= $cao->raca ?>&nbsp;</td>  
<td><a class="btn btn-danger" href="/caes/deletar/{{$cao->id}}">Apagar </a></td>
<td>&nbsp;<a type="button" class="btn btn-success" href="/caes/editar/{{$cao->id}}">Editar</a></td>
</tr>

<?php endforeach ?> 
</table>


@endsection('site')

