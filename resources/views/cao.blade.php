
    <html>
    <h1><center> cachorros Cadastrados</center></h1>
    <br> <br>
    <link href="{{asset('css/app.css')}}" rel="stylesheet">

<table class='table' border='1'> 
<tr>
<th> Nome </th>
<th> raça </th>
<th> Deletar </th>
<th> editar </th>
</tr>
<?php foreach ($caes as $cao) : 
?> 


<tr> 
<td>&nbsp;<?= $cao->Nome ?>&nbsp;</td> 
<td>&nbsp;<?= $cao->raca ?>&nbsp;</td>  
<td><a class="btn btn-danger" href="/caes/deletar/{{$cao->id}}">Apagar </a></td>
<td>&nbsp;<button type="button" class="btn btn-success">Editar</button></td>
</tr>

<?php endforeach ?> 
</table>
</html>



