<!DOCTYPE html>
    <html lang="pt-br">
      <head>
        <title>Título da página</title>
        <meta charset="utf-8">
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
@yield('site')
        


 <style>
.footer {
    position:sticky;
    left: 0;
    bottom: 0;
    width: 100%;
    background-color: black;
    color: white;
    text-align: center;
}
</style>
<br>
<div class="footer">
  <p>Site desenvolvido por</p>
  <p>Lucas Delfini, Bruna Fernanda, Isabella, Micael, Gabriel, Graziela</p>
</div> 
</html>

 