@extends ('home.layouts.rodape')
@extends ('home.layouts.basico')
@section('titulo','login')
<header>
    <nav>
        <a href="{{asset('/')}}" >Login</a>
    </nav>
</header>

@component ('home.layouts.area-login', ['classe'=>'borda-verde'])
@endcomponent

