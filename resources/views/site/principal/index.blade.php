@extends('layouts.app')
@section('titulo','Comitê Olímpico-Federações')

@section('conteudo')
<section id="center" class="clearfix center_home">
	<div class="center_home_m clearfix">
	  <div class="carousel slide article-slide" id="article-photo-carousel">
   
	 <!-- Wrapper for slides -->
	 <div class="carousel-inner cont-slider">
   
	   <div class="item active">
		 <img alt="abc" class="iw" src="/site/img/bandeira-de-angola.jpg">
	   </div>
	   <div class="item">
		 <img alt="abc" class="iw" src="/site/img/olimpico-banner.jpg">
	   </div>
	   <div class="item">
		 <img alt="abc" class="iw" src="/site/img/angola-national.jpg">
	   </div>
	   <div class="item">
		 <img alt="abc" class="iw" src="/site/img/olimpico-banner3.jfif">
	   </div>
	   <div class="item">
		 <img alt="abc" class="iw" src="/site/img/olimpico-banner5.jpg">
	   </div>
	   {{-- <div class="item ">
		 <img alt="abc" class="iw" src="/site/img/7.jpg">
	   </div> --}}
	 </div>
	 <!-- Indicators -->
	 <ol class="carousel-indicators">
	   <li class="active" data-slide-to="0" data-target="#article-photo-carousel">
		 <img alt="" src="/site/img/bandeira-de-angola.jpg">
	   </li>
	   <li class="" data-slide-to="1" data-target="#article-photo-carousel">
		 <img alt="" src="/site/img/olimpico-banner.jpg">
	   </li>
	   <li class="" data-slide-to="2" data-target="#article-photo-carousel">
		 <img alt="" src="/site/img/angola-national.jpg">
	   </li>
	   <li class="" data-slide-to="3" data-target="#article-photo-carousel">
		 <img alt="" src="/site/img/olimpico-banner3.jfif">
	   </li>
	   <li class="" data-slide-to="4" data-target="#article-photo-carousel">
		 <img alt="" src="/site/img/olimpico-banner5.jpg">
	   </li>
	   {{-- <li class="" data-slide-to="5" data-target="#article-photo-carousel">
		 <img alt="" src="/site/img/7.jpg">
	   </li> --}}
	  
	   
	 </ol>
   </div>
	  <div class="center_home_mi clearfix">
	   <h1  class="text-uppercase">Bem-vindo ao Site do <br>Comitê Olímpico de Angola<br>  </h1>
	   <p>Seja você um atleta, fã de esportes ou simplesmente alguém que aprecia o espírito olímpico, este é o seu destino central para todas as informações relacionadas às federações esportivas de Angola.</p>
	  
	  
	  </div>
	</div>
	
   </section>
   
   <section id="review_home_l">
	<div class="container">
	 <div class="row">
	  <div class="review_home_1 clearfix">
	   <div class="col-sm-6">
		<div class="review_home_1l clearfix">
		 <h2 class="mgt">Bem-vindo</h2>
		 <p>Bem-vindo à nossa página dedicada às Federações Esportivas de Angola, onde cada modalidade forma uma tapeçaria única de paixão, talento e compromisso. Aqui, você explorará a diversidade esportiva do país, mergulhando nas histórias cativantes que moldam as pistas, campos e quadras. Cada federação é mais do que um link; é um portal para a riqueza cultural e esportiva de Angola. Ao clicar nos links abaixo, conecte-se diretamente aos sites oficiais, descobrindo as realizações, atletas e eventos que definem o cenário esportivo angolano. Este é o seu convite para se envolver e celebrar a extraordinária jornada esportiva que define o coração e a alma de Angola.





		 </p>
		
		</div>
	   </div>
	   <div class="col-sm-6">
		<div class="review_home_1r clearfix">
		 <img src="/site/img/olimpico-banner.jpg" class="iw" alt="abc">
		</div>
	   </div>
	  </div>
	 </div>
	</div>
   </section>
   
   <section id="achieve">
	
	<div class="container">
		<h2 class="mgt text-center">Federações</h2>
	<br>
	<div class="row">
		<div class="achieve_1 clearfix">
		  @foreach (federacoes()->limit(3)->get() as $federacao)
			  
	  
		 <div class="col-sm-4  ">
		  <div class="achieve_1m clearfix">
		   <div class="achieve_1mi clearfix">
			<img src="{{asset($federacao->logo_url)}}" class="iw" alt="abc">
		   </div>
		   <div class="achieve_1mi1 text-center clearfix">
			<span class="col"><i class="fa fa-star-o"></i></span>
			<h3 class="bold col">{{$federacao->nome}}</h3>
			<p class="col"> @php echo mb_strimwidth( $federacao->descricao, 0, 10, "..."); @endphp</p>
			<h5><a target="_blank" class="button" href="{{$federacao->url_site}}">
				ACESSAR <i class="fa fa-chevron-right"></i></a>
				<a   class="button" href="{{ route('site.federacoes.ver_mais', $federacao->id) }}">VER
					MAIS <i class="fa fa-chevron-right"></i></a>
			</h5>
		   </div>
		  </div>
		 </div>
		 
		 @endforeach
	  
		</div>
	   </div>
	</div>
   </section>
   
  


   <br>


   <section id="counting">
	<div class="container">
	 <div class="row">
	  <div class="counting_1 clearfix" style="    display: flex;
	  justify-content: center;
  }">
	
	   <div class="col-sm-3">
		<div class="counting_1 text-center clearfix">
		 <span><i class="fa fa-fire"></i></span>
		 <h1>{{federacoes()->count()}}</h1>
		 <h4>Federações</h4>
		</div>
	   </div>
	   <div class="col-sm-3">
		<div class="counting_1 text-center clearfix">
		 <span><i class="fa fa-shield"></i></span>
		 <h1>24</h1>
		 <h4>Usuários</h4>
		</div>
	   </div>
	   {{-- <div class="col-sm-3">
		<div class="counting_1 text-center clearfix">
		 <span><i class="fa fa-globe"></i></span>
		 <h1>2001</h1>
		 <h4>League Cup Games</h4>
		</div>
	   </div> --}}
	  </div>
	 </div>
	</div>
   </section>

   <section id="gallery_home">
	<div class="container">
	 <div class="row">
	  <div class="gallery_h text-center clearfix">
	   <div class="col-sm-12">
		<h2 class="mgt">Galeria de Fotos: Comitê Olímpico de Angola</h2>
		<hr>
		<p>. Navegue por imagens cativantes que capturam a paixão pelo esporte, os momentos de triunfo e a dedicação de atletas, treinadores e equipes.</p>
	   </div>
	  </div>
	  
	  <div class="achieve_1 clearfix">
	   <div class="col-sm-3 space_all">
	   <a href="#"><div class="achieve_1m clearfix">
		 <div class="achieve_1mi clearfix">
		  <img src="/site/img/12.jpg" class="iw" alt="abc">
		 </div>
		 <div class="achieve_1mi1 text-center clearfix">
		  <h3 class="bold col">Being Free</h3>
		  <h4 class="col_1">PREPARATION</h4>
		 </div>
		</div></a>
	   </div>
	   <div class="col-sm-3 space_all">
	   <a href="#"><div class="achieve_1m clearfix">
		 <div class="achieve_1mi clearfix">
		  <img src="/site/img/13.jpg" class="iw" alt="abc">
		 </div>
		 <div class="achieve_1mi1 text-center clearfix">
		  <h3 class="bold col">Setting Tracks</h3>
		  <h4 class="col_1">TEAM WORK</h4>
		 </div>
		</div></a>
	   </div>
	   <div class="col-sm-3 space_all">
	   <a href="#"><div class="achieve_1m clearfix">
		 <div class="achieve_1mi clearfix">
		  <img src="/site/img/14.jpg" class="iw" alt="abc">
		 </div>
		 <div class="achieve_1mi1 text-center clearfix">
		  <h3 class="bold col">Ideal Transfers</h3>
		  <h4 class="col_1">TEAM WORK</h4>
		 </div>
		</div></a>
	   </div>
	   <div class="col-sm-3 space_all">
	   <a href="#"><div class="achieve_1m clearfix">
		 <div class="achieve_1mi clearfix">
		  <img src="/site/img/15.jpg" class="iw" alt="abc">
		 </div>
		 <div class="achieve_1mi1 text-center clearfix">
		  <h3 class="bold col">Role  Model</h3>
		  <h4 class="col_1">SUCCESS</h4>
		 </div>
		</div></a>
	   </div>
	  </div>
	  <div class="achieve_1 clearfix">
	   <div class="col-sm-3 space_all">
	   <a href="#"><div class="achieve_1m clearfix">
		 <div class="achieve_1mi clearfix">
		  <img src="/site/img/16.jpg" class="iw" alt="abc">
		 </div>
		 <div class="achieve_1mi1 text-center clearfix">
		  <h3 class="bold col">Being Free</h3>
		  <h4 class="col_1">PREPARATION</h4>
		 </div>
		</div></a>
	   </div>
	   <div class="col-sm-3 space_all">
	   <a href="#"><div class="achieve_1m clearfix">
		 <div class="achieve_1mi clearfix">
		  <img src="/site/img/17.jpg" class="iw" alt="abc">
		 </div>
		 <div class="achieve_1mi1 text-center clearfix">
		  <h3 class="bold col">Setting Tracks</h3>
		  <h4 class="col_1">TEAM WORK</h4>
		 </div>
		</div></a>
	   </div>
	   <div class="col-sm-3 space_all">
	   <a href="#"><div class="achieve_1m clearfix">
		 <div class="achieve_1mi clearfix">
		  <img src="/site/img/18.jpg" class="iw" alt="abc">
		 </div>
		 <div class="achieve_1mi1 text-center clearfix">
		  <h3 class="bold col">Ideal Transfers</h3>
		  <h4 class="col_1">TEAM WORK</h4>
		 </div>
		</div></a>
	   </div>
	   <div class="col-sm-3 space_all">
	   <a href="#"><div class="achieve_1m clearfix">
		 <div class="achieve_1mi clearfix">
		  <img src="/site/img/19.jpg" class="iw" alt="abc">
		 </div>
		 <div class="achieve_1mi1 text-center clearfix">
		  <h3 class="bold col">Role  Model</h3>
		  <h4 class="col_1">SUCCESS</h4>
		 </div>
		</div></a>
	   </div>
	  </div>
	  
	 </div>
	</div>
   </section>
   
   


@endsection
