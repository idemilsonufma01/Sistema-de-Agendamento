{{$slot}}
<div class="container-principal">
	<div class="container-login">
		<h1 class="">LOGIN</h1>
		<form role="form">
		    <fieldset>
 			    <div class="container-usuario">
					<label for="userLogin">Usuário</label>
					<input id="userLogin" type="text" aria-label="Usuário" placeholder="Usuário" class="{{$classe}}">
				</div>
 
				<div class="container-senha">
					<label for="userPassword">Senha</label>
					<input id="" type="password" aria-label="Senha" placeholder="Senha" class="{{$classe}}">
				</div>
 
				<input type="submit" value="Entrar" class="">
				@yield('evento-presenca')
			</fieldset>
		</form>
	</div>
</div>