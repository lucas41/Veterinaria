

<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body>
        
        <nav class="navbar navbar-expand-sm navbar-dark bg-dark" >
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Site</a>
         <div class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </div>

            <div class="collapse navbar-collapse" id="navbar">
                 <ul class="navbar-nav mr-auto">

            <li class="nav-item">
                <a class="nav-link" href"#"> Inicio </a>
            </li>
       
                </ul>

                       <ul class="navbar-nav ml-auto">

            <li class="nav-item">
                <a class="nav-link" href"#"> Login </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href"#"> Cadastro </a>
            </li>
        </ul>
            
</div>
</div>
</nav>
   
<br><br><br><br><br><br><br><br><br><br><br><br>

<h1><center> INICIO <center><h1>
<br>
<h3>  bem vindo a nossa veterinaria <h3>

<br><br>
<a class="btn btn-primary" href="{{ url('/caes') }}"> Cachorros </a> &nbsp;  &nbsp;  &nbsp;  <a class="btn btn-primary" href="{{ url('/caes/formulario') }}"> Cadastro </a>

<br><br><br><br><br><br><br><br><br><br><br><br><br><br>



        <footer>
  Site desenvolvido por:<br>
  Lucas Bruna Isabella e Graziela 
</footer>
    </body>
</html>
