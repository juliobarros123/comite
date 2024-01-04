
@extends('layouts.app')
@section('titulo','Login')

@section('conteudo')
<style>
  #achieve{
    height: 100vh;
    display: flex;
    align-items: center
  }
  .wrapper {
    width: 100%;
    padding-left: 10px;
    padding-right: 10px;
  }
  .content-center{
    display: flex;
    justify-content: center;
  }


  @media only screen and (max-width: 600px) {
  body {
    font-size: 14px;

  }
.form{
  width: 100%!important;
}
  /* Otros estilos específicos para dispositivos móviles */
}

/* Media query para tabletas */
@media only screen and (min-width: 601px) and (max-width: 1024px) {
  body {
    /* font-size: 16px; */
    /* color: red!important; */
  }
  .form{
  width:70%!important;
}

  /* Otros estilos específicos para tabletas */
}

/* Media query para pantallas más grandes (escritorio) */
@media only screen and (min-width: 1025px) {
  .form{
  width:40%!important;
}

  /* Otros estilos específicos para pantallas más grandes */
}
</style>
<section id="center" class="clearfix center_home">
	<div class="center_home_m clearfix">
	  <div class="carousel slide article-slide" id="article-photo-carousel">
   

	 <!-- Indicators -->
	
   </div>

	</div>
	
   </section>

   
   <section id="achieve" class="vh-100">
	

    <div class="wrapper vh-100">
      <div class=" align-items-center h-100 content-center">
        <form class="col-lg-3 col-md-4 col-10 mx-auto text-center form" action="{{route('login')}}" method="POST" >
            @csrf
          <a class="navbar-brand mx-auto mt-2 flex-fill text-center" href="./index.html">
            <svg version="1.1" id="logo" class="navbar-brand-img brand-md" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 120 120" xml:space="preserve">
              <g>
                <polygon class="st0" points="78,105 15,105 24,87 87,87 	" />
                <polygon class="st0" points="96,69 33,69 42,51 105,51 	" />
                <polygon class="st0" points="78,33 15,33 24,15 87,15 	" />
              </g>
            </svg>
          </a>
          <h1 class="h6 mb-3">Iniciar  Sessão</h1>
          <div class="form-group">
            <label for="inputEmail" class="sr-only">Endereço de email</label>
            <input type="email" id="inputEmail" class="form-control form-control-lg" placeholder="Endereço de email" name="email" value="{{old('email')}}" required autofocus autocomplete="username">
          </div>
          <div class="form-group">
            <label for="inputPassword" class="sr-only">Senha</label>
            <input type="password" id="inputPassword"  name="password" class="form-control form-control-lg" placeholder="Senha" required="">
          </div>
          <div class="checkbox mb-3">
            <label>
              <input type="checkbox" value="remember-me"> Permaneça logado </label>
          </div>
          <button class="btn btn-lg btn-primary btn-block" type="submit">Me deixar entrar</button>
          <p class="mt-5 mb-3 text-muted">© {{date('Y')}}</p>
        </form>
      </div>

    @if (old('email'))
    <script>
        Swal.fire(
            'Credenciais Inválidas',
            'Por favor, verifique suas informações e tente novamente.',
            'error'
        )
    </script>
  @endif
   </section>
   
  


   <br>
   


   

  
   
@endsection
