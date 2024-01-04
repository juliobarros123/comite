<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="col-sm-12">
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{-- <i class="fa fa-trophy"></i>  --}}
                    Comitê Olímpico<span> Federações</span></a>
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a class="tag_menu  active_tab" href="{{ url('') }}">INÍCIO</a>
                    </li>

                    <li>
                        <a class="tag_menu" href="{{ route('site.federacoes.index') }}">FEDERAÇÕES</a>
                    </li>


                    <li>
                        <a class="tag_menu" href="{{ route('admin') }}">PAINEL</a>
                    </li>

                  
                    <li class="dropdown">
                        <a class="tag_menu" href="#" data-toggle="dropdown" role="button"
                            aria-expanded="false">QUEM SOMOS<span class="caret"></span></a>
                        <ul class="dropdown-menu drop_1" role="menu">
                            <li><a href="index.html">Historial</a></li>
                            <li><a href="about.html">Objectivo</a></li>
                            <li><a href="team.html">Membros 2013/16</a></li>
                            <li><a href="team.html">Membros 2017/20</a></li>

                            <li><a href="contact.html">Comissão</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="tag_menu" href="#" data-toggle="dropdown" role="button"
                            aria-expanded="false">JOGOS OLÍMPICOS<span class="caret"></span></a>
                        <ul class="dropdown-menu drop_1" role="menu">
                            <li><a href="index.html">História</a></li>
                            <li><a href="about.html">Jogos da Antiguidade</a></li>
                            <li><a href="team.html">Jogos da Era Moderna </a></li>
                            <li><a href="team.html">Missões Olímpicas </a></li>


                        </ul>
                    </li>
                    <li class="dropdown">
                      <a class="tag_menu" href="#" data-toggle="dropdown" role="button"
                          aria-expanded="false">ACADEMIA OLÍMPICA<span class="caret"></span></a>
                      <ul class="dropdown-menu drop_1" role="menu">
                          <li><a href="index.html">História</a></li>
                          <li><a href="about.html">Objectivos</a></li>
                          <li><a href="team.html">Programas </a></li>
                          <li><a href="team.html">Membros </a></li>
                          <li><a href="team.html">Outros </a></li>
                       



                      </ul>
                  </li>
                    <li>
                      <a class="tag_menu" href="blog.html">MEMBROS COLECTIVOS</a>
                  </li>

                    <li>
                        <a class="tag_menu" href="{{route('site.blog.index')}}">BLOG</a>
                    </li>
                    <li>
                        <a class="tag_menu" href="blog.html">NOTÍCIA</a>
                    </li>
                 


                    <li>
                        <a class="tag_menu" href="contact.html">CONTACTOS</a>
                    </li>
                 
               



                </ul>

                <section id="side_box">

                    {{-- <a id="menu-toggle" href="#" class="btn btn-primary btn-lg toggle"><i class="fa fa-list"></i></a> --}}
                    <div id="sidebar-wrapper" class="">
                        <ul class="sidebar-nav">
                            {{-- <a id="menu-close" href="#" class="btn btn-default btn-lg pull-right toggle"><i class="glyphicon glyphicon-remove"></i></a> --}}
                            <li class="sidebar-brand">
                                <a href="index.html">FOOTBALL</a>
                            </li>
                        </ul>
                        <div class="wrap_inner clearfix text-center">
                            <img src="/site/img/5.jpg" alt="abc" class="iw">
                            <p class="para_1"> Lorem ipsum dolor sit amet, adipiscing elit integer nec odio.</p>
                            <div class="top_right clearfix">
                                <p>
                                    <a href="#"><i class="fa fa-pinterest"></i></a>
                                    <a href="#"><i class="fa fa-linkedin"></i></a>
                                    <a href="#"><i class="fa fa-dribbble"></i></a>
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                </p>
                            </div>

                        </div>
                        <div class="wrap_inner_2 clearfix">
                            <h3>Contact Us</h3>
                            <input class="form-control" placeholder="Name" type="text">
                            <input class="form-control" placeholder="Email" type="text">
                            <input class="form-control" placeholder="Phone" type="text">
                            <textarea class="form-control form_1" placeholder="Type Text Here"></textarea>
                            <h5 class="text-center"><a class="button" href="#">Subscribe <i
                                        class="fa fa-chevron-right"></i></a></h5>
                        </div>

                    </div>

                </section>
            </div>
        </div>
    </div>

</nav>
