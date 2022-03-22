
@extends ('home.layouts.rodape')
@section('evento-presenca')
@section('titulo','Home')
</br>
<select name="select">
    <option value="valor1">Selecione Evento</option>
</select>
</br>
<input type="submit" value="Entrar" class="">
@endsection
@extends ('home.layouts.basico')
<header>
    <nav>
        <a href="{{asset('login')}}" >Login Admin</a>
    </nav>
</header>
@component ('home.layouts.area-login', ['classe'=>'borda-branca'])

@endcomponent


   

