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
    <input type="text" id="fname" name="data" placeholder="00/00/0000"><br>
    <label for="fname">Nome do Evento:</label><br>
    <input type="text" id="fname" name="nome" placeholder="nome do evento"><br>
    <label for="lname">Horário inicial:</label><br>
    <input type="text" id="lname" name="horario_inicio" placeholder="00:00"><br><br>
    <label for="lname">Horário final:</label><br>
    <input type="text" id="lname" name="horario_final" placeholder="00:00"><br><br>

    <select name='evento'>
        <option value="">Qual o tipo do evento?</option>
        @foreach ($tipo_evento as $key => $tipo_evento)
            <option value = "{{$tipo_evento->id}}" {{old('evento') == $tipo_evento->id ? 'selected':''}}>{{$tipo_evento->tipo_evento}}</option>                                
        @endforeach
    </select><br><br>
    
    <label for="lname">Email do solicitante:</label><br>
    <input type="text" id="lname" name="email" placeholder="exemplo@gmail.com"><br><br>
    <label for="lname">Telefone:</label><br>
    <input type="text" id="lname" name="telefone" placeholder="(00)00000-0000"><br><br>
    <label for="lname">Qt_pessoas:</label><br>
    <input type="text" id="lname" name="qt_pessoas" placeholder = " 10"><br><br>
        
    <input type="submit" value="Enviar">
    </form>

    <div style = "position:absolute; top:0px; left:0px; width:100%; background: red">
    <pre>
    {{print_r($errors)}}
    </pre>

</div>
</div>