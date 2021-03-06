<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vida Terrestre</title>
    <link href="css/hover-min.css" rel="stylesheet" media="all">
    <link rel="stylesheet" href="estilo_dog.css/estilo_home_page.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  <link rel="icon" href="imagens/mundo.png">
  <link rel="stylesheet" href="estilo_dog.css/footer.css">
  <link rel="stylesheet" href="logado1.css">
  </head>
  <body>
    <nav>
      <input type="checkbox" id="check">
      <label for="check" class="checkbtn">
        <i class="fas fa-bars"></i>
    </label>
    
    <ul>
    <li id="lilog"><?php session_start(); echo('<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-person" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M10 5a2 2 0 1 1-4 0 2 2 0 0 1 4 0zM8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm6 5c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
              </svg> '.$_SESSION['traira']);?></li>
         <li class="hvr-grow"><a href="logado1.php"><button type="button" class="btn cor1">Inicio</button></a></li>
         <li class="hvr-grow"><a href="logado2.php"><button type="button" class="btn cor1">Quem somos</button></a></li>
         <li class="hvr-grow"><a href="logout.php"><button type="button" class="btn cor1">Sair</button></a></li>
         <li class="hvr-grow"><a href="#"><button type="button" class="btn cor1">Ajude a Amaz??nia</button></a></li>       
        </ul>
    </nav>
        <main>
        <header>
                <div class="sec1" id="div2">
                        <div class="cor1">
                          <br>
                        <h1 class="display-4 letra">Consci??ncia ambiental</h1>
                        <br>
                        <p class="lead letra">Esta p??gina se dedica a concentrar e organizar, de forma
                          din??mica e did??tica, diversos conte??dos acerca da esfera ambiental,
                          visando incentivar o j?? crescente ciberativismo ambientalista no Brasil.
                          Esperamos que aproveite</p>
                        </div>
                        <div id="div1">
                            <img src="imagens/fundo_demo2_arara.jpeg" width="100%" alt="" id="img1">
                        </div>
                    </div>       
            </header>
            <br><br>  
            <!--principais notocias-->  
            <section>
                <div class="jumbotron jumbotron-fluid">
                    <div class="container">
                      <h1 class="display-4 letra2">Principais Noticias</h1>
                    </div>
                  </div>
            </section>
            <!--Carroseul de noticias-->
            <section class="sec2">
              <article id="art1">
                <div id="carouselExampleCaptions" class="carousel slide sec1" data-ride="carousel">
                  <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <a href="https://g1.globo.com/natureza/pantanal/noticia/2020/10/29/com-2825-pontos-de-incendio-pantanal-tem-pior-outubro-da-historia-indicam-dados-do-inpe.ghtml" target="black"><img src="imagens/Queimadas.jpg" class="d-block w-100 img56" alt="..."></a>
                        <div class="carousel-caption d-none d-md-block">
                          <h5>Queimadas No Pantanal</h5>
                          <p>Clique na imagem para saber mais.</p>
                        </div>
                      </div>
                      <div class="carousel-item">
                        <a href="https://g1.globo.com/natureza/aquecimento-global/noticia/2020/11/12/duracao-de-furacoes-aumenta-com-aquecimento-global-sugere-estudo-publicado-na-nature.ghtml" target="black"><img src="imagens/furac??o.jpg" class="d-block w-100 img56" alt="..."></a>
                        <div class="carousel-caption d-none d-md-block">
                          <h5 style="color: rgb(255, 255, 255)">Dura????o de furac??es aumenta com aquecimento global</h5>
                          <p style="color: rgb(255, 255, 255)">Clique na imagem para saber mais.</p>
                        </div>
                      </div>
                      <div class="carousel-item">
                        <a href="https://g1.globo.com/natureza/noticia/2020/10/06/mudanca-climatica-causa-desertificacao-nas-terras-do-povo-navajo-nos-eua.ghtml" target="black"><img src="imagens/pessoas_deserto.jpg" class="d-block w-100 img56" alt="..."></a>
                        <div class="carousel-caption d-none d-md-block" >
                          <h5>Mudan??a clim??tica causa desertifica????o</h5>
                          <p>Clique na imagem para saber mais</p>
                        </div>
                      </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                    </a>
                  </div>
                </article>   
            </section>
            <br><br><br>
            <br><br><br>
                <!--Card-->
              <!-- Primeira oarte cards noticias -->
        <section class="cor1">   
               <br>             
        <section class="cor1">
              <div class="container">
              <div class="card">
              <div class="img">
              <img src="imagens/montanhas_chiina.jpg">
              </div>
              <div class="top-text">
              <div class="name">Geleiras derretendo na China</div>
                  <p>Aquecimento Global</p>
              </div>
              <div class="bottom-text">
              <div class="text">Mudan??a clim??tica: as imagens impressionantes de geleiras derretendo na China</div>
              <div class="btn">
                <a href="https://g1.globo.com/mundo/noticia/2020/11/13/mudanca-climatica-as-imagens-impressionantes-de-geleiras-derretendo-na-china.ghtml" target="blanck">Read more</a>
              </div>
              </div>
              </div>
              <!-- card 2 -->
              <div class="card">
              <div class="img">
                  <img src="imagens/girafa_branca.jpg">
              </div>
              <div class="top-text">
              <div class="name">??ltima girafa branca do mundo</div>
                <p>Animal em extin????o</p>
              </div>
              <div class="bottom-text">
              <div class="text">Esp??cime macho ?? a ??nica restante de um trio portador do raro tra??o gen??tico, depois que uma f??mea branca e o filhote dela foram mortos por ca??adores ilegais no Qu??nia.</div>
              <div class="btn">
                <a href="https://g1.globo.com/natureza/noticia/2020/11/17/ultima-girafa-branca-do-mundo-e-equipada-com-rastreamento-por-gps.ghtml" target="blanck">Saiba Mais</a>
              </div>
              </div>
              </div>
              <!-- card 3 -->
              <div class="card">
              <div class="img">
                <img src="imagens/paisagem_bonita.jpg">
              </div>
              <div class="top-text">
              <div class="name">Corredores Ecol??gicos</div>
                <p>Preserva????o do meio ambiente</p>
              </div>
              <div class="bottom-text">
              <div class="text">Projeto Corredores Ecol??gicos restaura paisagens, beneficia animais </div>
              <div class="btn">
                <a href="https://g1.globo.com/sp/presidente-prudente-regiao/noticia/2020/11/18/projeto-corredores-ecologicos-restaura-paisagens-beneficia-animais-e-possibilita-geracao-de-empregos-no-pontal-do-paranapanema.ghtml" target="blanck">Saiba Mais</a>
              </div>
              </div>
              </div>
              </div>
                </section>
                <br><br>
                <!-- Cards segunda parte -->
         <section class="cor1">
           <!-- Card 1 -->
              <div class="container">
              <div class="card">
              <div class="img">
                <img src="imagens/gatinhoo.jpg">
              </div>
              <div class="top-text">
              <div class="name">O mundo em uma reserva natural</div>
                <p>Preserva????o da natureza</p>
              </div>
              <div class="bottom-text">
                <div class="text">O plano para transformar metade do mundo em reserva ambiental</div>
              <div class="btn">
                 <a href="https://g1.globo.com/natureza/noticia/2020/11/23/o-plano-para-transformar-metade-do-mundo-em-reserva-ambiental.ghtml" target="blanck">Saiba Mais</a>
              </div>
              </div>
              </div>
              <!-- Card 2 -->
              <div class="card">
              <div class="img">
                <img src="imagens/Rondonia.jpg">
              </div>
              <div class="top-text">
              <div class="name">Desmatamento em Rond??nia</div>
                 <p>Desmatamento</p>
              </div>
              <div class="bottom-text">
              <div class="text">Rond??nia tem aumento de 88% nos alertas de desmatamento em outubro, revela Imazon</div>
              <div class="btn">
                <a href="https://g1.globo.com/ro/rondonia/natureza/amazonia/noticia/2020/11/20/rondonia-tem-aumento-de-88percent-nos-alertas-de-desmatamento-em-outubro-revela-imazon.ghtml" target="blanck">Saiba Mais</a>
              </div>
              </div>
              </div>
              <!-- Cards 3 -->
              <div class="card">
              <div class="img">
               <img src="imagens/italia.jpg">
              </div>
              <div class="top-text">
              <div class="name">Fran??a quer punir delito de 'ecoc??dio'</div>
                 <p>Emiss??o de carbono na atmosfera </p>
              </div>
              <div class="bottom-text">
              <div class="text">Proposta apoiada pelo governo prev?? pena de at?? dez anos de pris??o e multa de at?? 4,5 milh??es de euros para quem causar danos graves ao meio ambiente.</div>
               <div class="btn">
                   <a href="https://g1.globo.com/natureza/noticia/2020/11/22/franca-quer-punir-delito-de-ecocidio.ghtml" target="blanck">Saiba Mais</a>
               </div>
              </div>
              </div>
              </div>
                </section>
                <br>
</section> 
  <br><br>
        <!--Inicio Sustentabilidade-->
  <section>
    <div class="jumbotron jumbotron-fluid">
        <div class="">
          <h1 class="display-4 letra2">Sustentabilidade e Ecologia</h1>
          <h3 id="h3">Aprenda sobre Sustentabilidade e Ecologia.</h3>
        </div>
      </div>
</section>
        <!--Inicio material-->
        <section class="cor1">   
          <br>             
          <!-- Cards -->
          <section class="cor1">
            <div class="container">
              <!-- Card 1 -->
              <div class="card">
                <div class="img">
                  <img src="imagens/sacolas.png">
                </div>
                <div class="top-text">
                <div class="name">Ecobags</div>
                      <p>Qual a import??ncia das sacolas ecol??gicas ?</p>
                </div>
                <div class="bottom-text">
                <div class="text">Ecobags s??o produtos criados para substituir a utiliza????o das sacolas de pl??stico em favor do meio ambiente.</div>
                <div class="btn">
                  <a href="https://www.fragmaq.com.br/blog/ecobags-importancia-sacolas-ecologicas/" target="blanck">Saiba Mais</a>
                  </div>
                  </div>
                  </div>
                  <!-- Card 2 -->
                <div class="card">
                <div class="img">
                    <img src="imagens/lixo_separado.jpg">
                </div>
                <div class="top-text">
                 <div class="name">Separa????o do Lixo</div>
                    <p>Por que ?? t??o importante separar o lixo ?</p>
                </div>
                <div class="bottom-text">
                <div class="text">A reciclagem de lixo no Brasil ainda ?? bastante deficiente e prec??ria devido a falta de empresas especializadas em coleta seletiva.</div>
                <div class="btn">
                    <a href="https://www.fragmaq.com.br/blog/importancia-da-separacao-do-lixo-para-reciclagem-de-materiais/" target="blanck">Saiba Mais</a>
                </div>
                </div>
                </div>
                <!-- Card 3 -->
                <div class="card">
                <div class="img">
                  <img src="imagens/peixe-oleo.webp">
                </div>
                <div class="top-text">
                <div class="name">descarte de oleo de cozinha</div>
                  <p>Como devemos fazer</p>
                </div>
                <div class="bottom-text">
                <div class="text">O ??leo de cozinha usado pode parecer inocente, mas ?? um grande contaminante. Um litro de ??leo descartado no ralo da pia pode poluir um milh??o de litros de ??gua pot??vel.</div>
                <div class="btn">
                   <a href="https://www.teraambiental.com.br/blog-da-tera-ambiental/bid/270552/aprenda-a-descartar-o-leo-de-cozinha-corretamente#:~:text=Sem%20contar%20que%20a%20sujeira,locais%20pr%C3%B3prios%20para%20a%20coleta." target="blanck">Saiba Mais</a>
                </div>
                </div>
                </div>
                </div>
            </section>
            <!--Primeiro Crads fim -->
                        <br>
            <!-- Segundo Cards inicio -->
            <section class="cor1">
                  <div class="container">
            <!-- cards -->
                  <div class="card">
                  <div class="img">
                    <img src="imagens/importancia-da-horta-na-escola-para-o-aprendizado-das-criancas_g.webp">
                  </div>
                  <div class="top-text">
                  <div class="name">Horta Sustent??vel</div>
                      <p>Import??ncia da horta na escola</p>
                  </div>
                  <div class="bottom-text">
                  <div class="text">Uma horta na escola funciona como um ??timo recurso did??tico. S??o diversos benef??cios que esse tipo de projeto pode proporcionar.</div>
                  <div class="btn">
                  <a href="https://www.educamaisbrasil.com.br/educacao/escolas/importancia-da-horta-na-escola-para-o-aprendizado-das-criancas" target="blanck">Saiba Mais</a>
                  </div>
                  </div>
                  </div>
                  <!-- card 2 -->
                  <div class="card">
                  <div class="img">
                    <img src="imagens/meioambiente-reciclagem-garrafa-pet.jpg">
                  </div>
                  <div class="top-text">
                  <div class="name">Garrafas PET</div>
                      <p>Tudo sobre elas</p>
                  </div>
                  <div class="bottom-text">
                  <div class="text"> Vistas como um grande problema, as embalagens PET tamb??m podem ser uma grande solu????o. Com criatividade e um pouco de esfor??o, esse pl??stico pode ser reaproveitado de in??meras maneiras.</div>
                  <div class="btn">
                    <a href="http://www.bibliotecavirtual.sp.gov.br/temas/meio-ambiente/reciclagem-garrafas-pet.php" target="blanck">Saiba Mais</a>
                  </div>
                  </div>
                  </div>
                  <!-- Card 3 -->
                  <div class="card">
                  <div class="img">
                    <img src="imagens/pneus.jpg">
                  </div>
                  <div class="top-text">
                  <div class="name">Artesanato com Pneus</div>
                      <p>Dicas para fazer artesanato com pneus</p>
                  </div>
                  <div class="bottom-text">
                  <div class="text">Voc?? sabe o que fazer com aquele pneu gasto, careca, que n??o vai usar mais? Descartar em qualquer lugar ou deixar em casa acumulando poeira ou, pior ainda, ??gua n??o ?? uma boa ideia. Ent??o, que tal se inspirar em alguns bons exemplos de reuso desse item? Confira nossas dicas e modelos de artesanato com pneus!</div>
                  <div class="btn">
                    <a href="https://www.vivadecora.com.br/revista/artesanato-com-pneus/#:~:text=Se%20quiser%20algo%20para%20usar,mesas%20de%20centro%20e%20puffs.&text=J%C3%A1%20para%20o%20lado%20de,at%C3%A9%20mesmo%20brinquedos%20para%20crian%C3%A7as." target="blanck">Read more</a>
                  </div>
                  </div>
                  </div>
                  </div>
            </section>
                <br>
        </section> 
          <br>
         <br><br>
        <!--Fim material-->
        <!--Inicio Footer--> 
         <!-- Site footer -->
         <footer class="site-footer">
          <div class="container">
            <div class="row">
              <div>
                <h6>Contatos</h6>
                <p class="text-justify"><a href="https://www.instagram.com/vidaterrestreofc/" target="_blank">Instagram: Vida Terrestre</a> <br> </p>
                <p class="text-justify"><a href=mailto:"Vidaterrestreofc@gmail.com" target="_blank">E-mail: Vida Terrestre</a> <br> </p>
                <p class="text-justify"><a href="https://web.whatsapp.com/send?phone=5511983845223" target="_blank">Telefone Para Contato</a> <br> </p>
    
              </div>
    
    
    
              <div class="col-xs-6 col-md-3" id="linksfooter">
                              <h6>Acesso R??pido</h6>
                              <ul class="footer-links" >
                                <li><a href="logado2.php"><button type="button" class="btn btn-success">Quem Somos</button></a></li>
                                <br>
                                <li><a href="#"><button type="button" class="btn btn-success">Ajude a Amaz??nia</button></a></li>
                                <br>
                                <li><a href="logout.php"><button type="button" class="btn btn-success">Sair</button></a></li>
                              </ul>
                            </div>
                          </div>
                          <hr>
                        </div>
                        <div class="container">
                          <div class="row">
         
                <p class="copyright-text">Copyright &copy; 2020 Todos os direitos reservados por 
             <a href="#">Aegis Tecnology</a>.
                </p>
              </div>
    
            </div>
          </div>
    </footer>
        </main>
 <!-- Conte??do da p??gina -->



        
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
  </body>
</html>
</html>
