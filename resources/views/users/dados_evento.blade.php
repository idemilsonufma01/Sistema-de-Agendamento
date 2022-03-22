@extends ('home.layouts.rodape')
@extends ('home.layouts.basico')
<header>
    <nav>
        <a href="#" >Sair</a>
    </nav>
</header>
<div class = "container-principal">
    <h1>Dados do Evento</h1>
    <form action={{route('user.dados_evento')}} method="post">
    @csrf
    <label for="fname">Data do Evento:</label><br>
    <input type="text" id="fname" name="data" value="00/00/0000"><br>
    <label for="fname">Nome do Evento:</label><br>
    <input type="text" id="fname" name="nome" value="nome do evento"><br>
    <label for="lname">Horário inicial:</label><br>
    <input type="text" id="lname" name="hinicio" value="00:00"><br><br>
    <label for="lname">Horário final:</label><br>
    <input type="text" id="lname" name="hfinal" value="00:00"><br><br>
    <label for="lname">Tipo de Evento:</label><br>
    <input type="text" id="lname" name="tipo" value="reunião"><br><br>
    <label for="lname">Email do solicitante:</label><br>
    <input type="text" id="lname" name="email" value="exemplo@gmail.com"><br><br>
    <label for="lname">Telefone:</label><br>
    <input type="text" id="lname" name="tel" value="(98)00000-0000"><br><br>
        
    <input type="submit" value="Enviar">
    </form>
</div>