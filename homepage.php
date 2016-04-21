<?php
/* 
 * template name: Home Page
 * 
 * 
 */
?>
<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>





<!-- SLIDESHOWS -->
<div class="super-banner-homepage">
  <div id="carousel-example-generic" class="carousel slide carousel-fade" data-ride="carousel">


  <!-- CHAMADA RESERVE SEU HORÁRIO -->
  <div class="reserve-seu-horario-topo visible-lg visible-md">
      <div class="container">
         <div class="caixa-agendamento">
              <h4>Reserve seu horário</h4>
              <form method="post" action="">
                 <div class="row">
                    <div class="col-lg-6 col-md-6">
                       <div class="form-group">
                         <input type="text" name="nome" class="form-control" value="Nome" />
                       </div>
                    </div>
                    <div class="col-lg-6 col-md-6" style="padding-left:0px;">
                       <div class="form-group">
                         <input type="text" name="email" class="form-control" value="E-mail" />
                       </div>
                    </div>
                 </div>
                 <div class="row">
                    <div class="col-lg-6 col-md-6">
                       <div class="form-group">
                         <input type="text" name="telefone" class="form-control" value="Telefone" />
                       </div>
                    </div>
                    <div class="col-lg-6 col-md-6" style="padding-left:0px;">
                       <div class="form-group">
                         <input type="text" name="horario" class="form-control" value="Horário" />
                       </div>
                    </div>
                 </div>
                 <div class="row">
                   <div class="form-group col-ld-12 col-md-12" style="text-align:right;">
                      <button type="submit" class="btn btn-primary">Reservar</button>
                   </div>
                 </div>
              </form>
         </div>
      </div>
  </div>
  <!-- CHAMADA RESERVE SEU HORÁRIO -->


  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active" style="background:url('<?php bloginfo('stylesheet_directory'); ?>/images/bkg03.jpg') no-repeat;background-size:cover;background-position:center center;">&nbsp;</div>
    <div class="item" style="background:url('<?php bloginfo('stylesheet_directory'); ?>/images/bkg04.jpg') no-repeat;background-size:cover;background-position:center center;">&nbsp;</div>
    <div class="item" style="background:url('<?php bloginfo('stylesheet_directory'); ?>/images/bkg05.jpg') no-repeat;background-size:cover;background-position:center center;">&nbsp;</div>
  </div>


  <div class="super-chamada">
      <div class="container">
          <div class="row">
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <h1><i>Nossa Proposta</i></h1>
                  <p>
                      Criado para as crianças, este é um espaço dedicado a muita diversão e criatividade. Aqui elas terão a possibilidade de se aproximar da linguagem das artes como forma de conhecimento do mundo, a partir da exploração e manipulação de diferentes materiais e suportes. A criança eleva sua autoconfiança e o reconhecimento da sua capacidade de criar e transformar, por meio da realização e da conclusão de um trabalho.
                  </p>
              </div>
           </div>
       </div>           
  </div>


  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/left.png" alt="banner rotativo para esquerda" />
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/right.png" alt="banner rotativo para direita" />
  </a>


</div>
</div>
<!-- SLIDESHOWS -->




<!-- PAPEL AMASSADO -->
<div class="papel-amassado">



    <!-- NOSSAS ATIVIDADES -->
    <div class="container nossas-atividades-home">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 co-xs-12">
                <article>
                    <h2><i>Nossas Atividades</i></h2>
                    
                    <p>
                      <div class="sprites sprite1">&nbsp;</div> <a href="#">Faz de Conta</a>
                    </p>
                    <br clear=both />
                    
                    <p>
                      <div class="sprites sprite2">&nbsp;</div> <a href="#">Jardinagem</a>
                    </p>
                    <br clear=both />
                    
                    <p>
                      <div class="sprites sprite3">&nbsp;</div> <a href="#">Artes Visuais</a>
                    </p>
                    <br clear=both />

                    <p>
                      <div class="sprites sprite4">&nbsp;</div> <a href="#">Costura</a>
                    </p>
                    <br clear=both />

                    <p>
                      <div class="sprites sprite5">&nbsp;</div> <a href="#">Marcenaria</a>
                    </p>
                    <br clear=both />

                    <p>
                      <div class="sprites sprite6">&nbsp;</div> <a href="#">Cerâmica</a>
                    </p>
                    <br clear=both />

                    <p>
                      <div class="sprites sprite7">&nbsp;</div> <a href="#">Culinária</a>
                    </p>
                    <br clear=both />

                    <p>
                      <div class="sprites sprite8">&nbsp;</div> <a href="#">Musicalização</a>
                    </p>
                    <br clear=both />

                    <p>
                      <div class="sprites sprite9">&nbsp;</div> <a href="#">Capoeira</a>
                    </p>
                    <br clear=both />

                    <p>
                      <div class="sprites sprite10">&nbsp;</div> <a href="#">Play Arte</a>
                    </p>
                    <br clear=both />

                    <p>
                      <div class="sprites sprite11">&nbsp;</div> <a href="#">Iniciação ao Teatro</a>
                    </p>
                    <br clear=both />

                    <p>
                      <div class="sprites sprite12">&nbsp;</div> <a href="#">Festas</a>
                    </p>
                    <br clear=both />

                    <p>
                      <div class="sprites sprite13">&nbsp;</div> <a href="#">Cursos</a>
                    </p>
                    <br clear=both />



                </article>
            </div>
        </div>
    </div>
    <!-- NOSSAS ATIVIDADES -->


    <!-- NOSSAS ATIVIDADES CONTEUDO -->
    <div class="nossas-atividades-conteudos">

 
      <!-- COLUNA 1 -->
      <div class="nac-coluna-1">
        &nbsp;
      </div>
      <!-- COLUNA 1 -->

      <!-- COLUNA 2 -->
      <div class="nac-coluna-2">
          <div class="colunas">
              <h2><i>Faz de Conta</i></h2>
              <p>
                A área do Quintal 7 Cores é extensa e confortável. Possui nos fundos uma árvore frondosa e acolhedora, um verdadeiro privilégio. Os espaços foram cuidadosamente planejados, levando-se em conta a faixa etária das crianças e as atividades que despertam a criatividade, a motricidade e a concentração.
              </p>
              <p>
                <img src="<?php bloginfo('stylesheet_directory'); ?>/images/left-laranja.png" alt="Atividades anteriores" id="llAa" />
                <img src="<?php bloginfo('stylesheet_directory'); ?>/images/right-laranja.png" alt="Próximas Atividades" id="rlPa" />
              </p>
          </div>
      </div>
      <!-- COLUNA 2 -->
      </div>
  
    <!-- NOSSAS ATIVIDADES CONTEUDO -->






<!-- CONTATO E NOVIDADES -->
<div class="container contato-e-novidades">
  
  <div class="row">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 coluna-1">
       <h2><i>Contato</i></h2>
       <address>
          Rua Periquito, 116 - Moema | São Paulo -SP | CEP 04514-050<br>
          Tel: +55 11 2628 1730 |  Cel/Whatsapp: +55 11 99425 6262<br>
          <a href="mailto:">contato@quintal7cores.com.br</a><br><br>
          <a href="https://goo.gl/maps/8W94QcYhtrm" class="ver-mapa" target="_blank">Veja o mapa</a>
       </address>
       <p>&nbsp;</p>

       <h4><i>Mande sua dúvida ou sugestão!</i></h4>

       <form>
         <div class="row">
           <div class="col-xs-6">
             <div class="form-group">
               <input type="text" class="form-control" name="nome" value="Nome"  required/>
             </div>
           </div>
           <div class="col-xs-6">
             <div class="form-group">
               <input type="email" class="form-control" name="email" value="E-mail" required />
             </div>
           </div>
         </div>
         <div class="row">
           <div class="col-xs-12">
             <textarea class="form-control" rows="6" name="mensagem" required>Mensagem</textarea>
           </div>
         </div>
         <div class="row" style="padding-top:14.5px;">
           <div class="col-xs-8">
             <div class="form-group">
               <img src="<?php bloginfo('stylesheet_directory'); ?>/images/aviao.png" alt="Avião" style="width:100%;height:auto;" />
             </div>
           </div>
           <div class="col-xs-4">
             <div class="form-group" style="text-align:right;">
               <button type="submit" class="btn btn-primary">ENVIAR</button>
             </div>
           </div>
         </div>
       </form>



    </div>
    <div class="col-md-offset-1 col-sm-offset-1 col-lg-5 col-md-5 col-sm-5 col-xs-12 coluna-2 novidades-home">
    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/novidades-titulo.png" alt="Novidades Quintal Sete Cores" id="nt" />


              <!-- SLIDE DENTRO DE NOVIDADES -->
              <div id="carousel-example-genericNov" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators visible-lg visible-md">
                  <li data-target="#carousel-example-genericNov" data-slide-to="0" class="active"></li>
                  <li data-target="#carousel-example-genericNov" data-slide-to="1"></li>
                  <li data-target="#carousel-example-genericNov" data-slide-to="2"></li>
                </ol>


                <div class="carousel-inner" role="listbox">

                  <div class="item active">
                      <h2><i>Título da Notícia</i></h2>
                      <p>
                        Caros amigos, a valorização de fatores subjetivos representa uma abertura para a melhoria das condições financeiras e administrativas exigidas. Não obstante, a complexidade dos estudos efetuados cumpre um papel essencial na formulação do fluxo de informações. Assim mesmo, a contínua expansão de nossa atividade nos obriga à análise dos modos de operação convencionais. 
                      </p>
                      <p>
                        O incentivo ao avanço tecnológico, assim como o início da atividade geral de formação de atitudes acarreta um processo de reformulação e modernização dos paradigmas corporativos. O empenho em analisar o desafiador cenário globalizado afeta positivamente a correta previsão de todos os recursos funcionais envolvidos. Por outro lado, a hegemonia do ambiente político.
                      </p>
                  </div>
                  <div class="item">
                      <h2><i>Título da Notícia 2</i></h2>
                      <p>
                        Caros amigos, a valorização de fatores subjetivos representa uma abertura para a melhoria das condições financeiras e administrativas exigidas. Não obstante, a complexidade dos estudos efetuados cumpre um papel essencial na formulação do fluxo de informações. Assim mesmo, a contínua expansão de nossa atividade nos obriga à análise dos modos de operação convencionais. 
                      </p>
                      <p>
                        O incentivo ao avanço tecnológico, assim como o início da atividade geral de formação de atitudes acarreta um processo de reformulação e modernização dos paradigmas corporativos. O empenho em analisar o desafiador cenário globalizado afeta positivamente a correta previsão de todos os recursos funcionais envolvidos. Por outro lado, a hegemonia do ambiente político.
                      </p>
                  </div>
                      <div class="item">
                      <h2><i>Título da Notícia 3</i></h2>
                      <p>
                        Caros amigos, a valorização de fatores subjetivos representa uma abertura para a melhoria das condições financeiras e administrativas exigidas. Não obstante, a complexidade dos estudos efetuados cumpre um papel essencial na formulação do fluxo de informações. Assim mesmo, a contínua expansão de nossa atividade nos obriga à análise dos modos de operação convencionais. 
                      </p>
                      <p>
                        O incentivo ao avanço tecnológico, assim como o início da atividade geral de formação de atitudes acarreta um processo de reformulação e modernização dos paradigmas corporativos. O empenho em analisar o desafiador cenário globalizado afeta positivamente a correta previsão de todos os recursos funcionais envolvidos. Por outro lado, a hegemonia do ambiente político.
                      </p>
                  </div>

                </div>


              </div>
              <!-- SLIDE DENTRO DE NOVIDADES -->


    </div>
  </div>

</div>
<!-- CONTATO E NOVIDADES -->




</div>
<!-- PAPEL AMASSADO -->




<!-- BLOG HOME -->
<div class="blog-home">
  

<div class="container">
  <div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <h2><i>Blog</i></h2>
    </div>
  </div>
  <div class="row">
    <!-- COLUNA 1 -->
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 blog-home-colunas">
      <div class="data-blog-home">
        <span>08</span><br>Jan
      </div>
      <h3><a href="#"><i>Título 01 - Lorem Ipsum</i></a></h3>
      <p>
        <a href="#">
          O incentivo ao avanço tecnológico, assim como o início da atividade geral de formação de atitudes acarreta um processo de reformulação e modernização dos paradigmas corporativos. O empenho em analisar o desafiador cenário globalizado afeta positivamente a correta previsão de todos os recursos funcionais envolvidos.
        </a>
      </p>
      <p class="link-blog">
         <a href="#">
            <img src="<?php bloginfo('stylesheet_directory'); ?>/images/link-blog.png" alt="Link para matéria do blog" />
         </a>
      </p>
    </div>
    <!-- COLUNA 1 -->
    <!-- COLUNA 2 -->
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 blog-home-colunas">
      <div class="data-blog-home">
        <span>08</span><br>Jan
      </div>
      <h3><a href="#"><i>Título 02 - Lorem Ipsum</i></a></h3>
      <p>
        <a href="#">
          O incentivo ao avanço tecnológico, assim como o início da atividade geral de formação de atitudes acarreta um processo de reformulação e modernização dos paradigmas corporativos. O empenho em analisar o desafiador cenário globalizado afeta positivamente a correta previsão de todos os recursos funcionais envolvidos.
        </a>
      </p>
      <p class="link-blog">
         <a href="#">
            <img src="<?php bloginfo('stylesheet_directory'); ?>/images/link-blog.png" alt="Link para matéria do blog" />
         </a>
      </p>
    </div>
    <!-- COLUNA 2 -->
  </div>
</div>



</div>
<!-- BLOG HOME -->


	
<?php endwhile; endif; ?>

<?php get_footer(); ?>