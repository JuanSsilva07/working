<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vida Terrestre</title>
    <link href="css/hover-min.css" rel="stylesheet" media="all">
    <link rel="stylesheet" href="estilo_dog.css/estilo_quem_somos.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  <link rel="icon" href="imagens/mundo.png">
  <link rel="stylesheet" href="estilo_dog.css/cards.css">
  <link rel="stylesheet" href="estilo_dog.css/nav.css">
  <link rel="stylesheet" href="estilo_dog.css/footer.css">
  <link rel="stylesheet" href="logado1.css">
  </head>
  <body>
    <!-- nav -->
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
          <!-- header -->
            <header>
                <div class="sec1" id="div2">
                        <div class="cor1 t1">
                            <h1 class="display-4 letra" style="font-size: 45px;">PANTHERA ON??A</h1>
                          <br>
                          <div class="sec1">
                            <p class="lead letra">A On??a-Pintada, tamb??m chamada de Jaguar, ?? o maior felino das Am??ricas e o terceiro maior do mundo, depois dos tigres e dos le??es.Felino de grande porte, o jaguar ?? um ex??mio predador carn??voro.
                            <br><br>  
                            Sua alimenta????o ?? bem variada e envolve mais de 80 esp??cies diferentes, incluindo cobras, jacar??s, peixes, macacos, r??pteis, anf??bios e gado bovino. O felino pode comer at?? 20 kg de carne em um mesmo dia, para em seguida ficar uma semana sem se alimentar novamente.</p>
                          </div>
                        </div>
                        <div id="div1">
                            <img src="imagens/tigre.jpg" width="100%" alt="" id="imag1">
                        </div>
                  </div>       
            </header> 
            <br>  
                <section >
                    <div class="jumbotron">
                        <div class="container">
                            <div id="div66">
                                <img src="imagens/logo-1.png" alt="" width="50%" class="">
                            </div>
                            <div>
                                <h1 class="display-3">Projeto Vida Terrestre</h1>
                                <p class="lead">O projeto Vida Terrestre ?? composto por uma equipe de 6 membros. A plataforma foi criada com a finalidade
                                  de conscientizar e expandir os conhecimentos dos usu??rios e visitantes sobre quest??es ambientais, com uma linguagem comum e menos t??cnica, a fim de facilitar a compreens??o do p??blico leigo.
                                  Temos o objetivo de motivar as pessoas a terem responsabilidade e cuidado com o nosso lar, a Terra. Sempre com Respeito e ??tica.</p>
                            </div>    
                        </div>
                      </div>
                </section>
                    <section class="container cor1" id="sec44" style="border-radius: 10px;">
                        <h1 style="color: white;" style="text-align: center;">Equipe Vida Terrestre</h1>
                      </section>
                      <br>
                    <!-- cards -->
                      <!-- card Thau -->
                      <section class="container" id="sec99" style="border-radius: 10px;">
                          <article class="art57">
                                <div class="center">
                                  <div class="front-face imag1">
                                    <img src="imagens/thauniy.jpeg" alt="" style="width: 100%;">
                                    <div class="contents front" class="card123">
                                      <p style="color: #138a36;" class="card123">Thauanny Silva</p> 
                            <span style="color: #138a36;">Product Owner</span>
                                    </div>
                                    </div>
                            <div class="back-face">
                                    <div class="contents back">
                                      <h2></h2>
                            <span style="text-align: center;">Follow Me</span>
                                      <div class="icons">
                                        <a href="https://www.instagram.com/thauannysilvab/" target="blanck"><i class="fab fa-instagram"></i></a>
                                        <a href="https://www.linkedin.com/in/thauannysilva/" target="blanck"><i class="fab fa-linkedin-in"></i></a>
                                      </div>
                            </div>
                            </div>
                            </div>
                          </article>
                          <!-- card Arthur -->
                      <article class="art57">
                        <div class="center">
                          <div class="front-face imag1" id="imag1">
                            <img src="imagens/Arthur.jpeg" alt="" style="width: 100%;">
                            <div class="contents front">
                              <p style="color: #138a36;" class="card123">Arthur Barros</p>
                    <span style="color:#138a36;">Front-end</span>
                            </div>
                    </div>
                    <div class="back-face">
                            <div class="contents back">
                              <h2></h2>
                    <span style="text-align: center;">Follow Me</span>
                              <div class="icons">
                                <a href="https://www.instagram.com/the_barros31/" target="blanck"><i class="fab fa-instagram"></i></a>
                                <a href="https://www.linkedin.com/in/arthur-barros-77480a199/" target="blanck"><i class="fab fa-linkedin-in"></i></a>
                              </div>
                    </div>
                    </div>
                    </div>
                  </article>
                      </section>
                      <!-- card beca -->
                      <section class="container" id="sec101" style="border-radius: 10px;">
                        <article class="art57">
                          <div class="center">
                            <div class="front-face imag1">
                              <img src="imagens/Beca.jpeg" alt="" style="width: 100%;">
                              <div class="contents front">
                                <p style="color: #138a36;" class="card123">Rebeca Moraes</p>
                      <span style="color: #138a36;">Scrum Master</span>
                              </div>
                      </div>
                      <div class="back-face">
                              <div class="contents back">
                                <h2></h2>
                      <span style="text-align: center;">Follow Me</span>
                                <div class="icons">
                                  <a href="https://www.instagram.com/rebeca_moraex/" target="blanck"><i class="fab fa-instagram"></i></a>
                                  <a href="https://www.linkedin.com/in/rebeca-moraes-0247451b7/" target="blanck"><i class="fab fa-linkedin-in"></i></a>
                                </div>
                      </div>
                      </div>
                      </div>
                    </article>
                    <!-- card Matheus -->
                    <article class="art57">
                      <div class="center">
                        <div class="front-face imag1">
                          <img src="imagens/theus.jpeg" alt="" style="width: 100%;">
                          <div class="contents front">
                            <p style="color: #138a36;" class="card123">Mateus Wengler</p>
                  <span style="color: #138a36;">Front-End</span>
                          </div>
                  </div>
                  <div class="back-face">
                          <div class="contents back">
                            <h2></h2>
                  <span style="text-align: center;">Follow Me</span>
                            <div class="icons">
                              <a href="https://www.instagram.com/teuswengler/" target="blanck"><i class="fab fa-instagram"></i></a>
                              <a href="https://www.linkedin.com/in/mateus-nunes-wengler-7b1b611b7/" target="blanck"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                  </div>
                  </div>
                  </div>
                </article>
                      </section>
                      <!-- card do Juan -->
                      <section class="container" id="sec100" style="border-radius: 10px;">
                        <article class="art56 ">
                          <div class="center">
                            <div class="front-face imag1" id="imag1">
                              <img src="imagens/Ruan.jpeg" alt="" style="width: 100%;">
                              <div class="contents front">
                                <p style="color: #138a36;" class="card123">Juan Soares</p>
                      <span style="color:#138a36;">Full-Stack</span>
                              </div>
                      </div>
                      <div class="back-face">
                              <div class="contents back">
                                <h2></h2>
                      <span style="text-align: center;">Follow Me</span>
                                <div class="icons">
                                  <a href="https://www.instagram.com/juan_soares07/" target="blanck"><i class="fab fa-instagram"></i></a>
                                  <a href="https://www.linkedin.com/in/juan-soares-silva/" target="blanck"><i class="fab fa-linkedin-in"></i></a>
                                </div>
                      </div>
                      </div>
                      </div>
                    </article>
                    <!-- card mika -->
                    <article class="art56">
                      <div class="center">
                        <div class="front-face imag1" id="imag1">
                          <img src="imagens/Mika.jpeg" alt="" style="width: 100%;">
                          <div class="contents front">
                            <p style="color: #138a36;" class="card123">Mickael Fernandes</p>
                  <span style="color:#138a36;">Full-Stack</span>
                          </div>
                  </div>
                  <div class="back-face">
                          <div class="contents back">
                            <h2></h2>
                  <span style="text-align: center;">Follow Me</span>
                            <div class="icons">
                              <a href="https://www.instagram.com/mr.mickael7/" target="blanck"><i class="fab fa-instagram"></i></a>
                              <a href="https://www.linkedin.com/in/mickael-fernandes-bispo-de-souza-8ab2b01b8/?locale=pt_BR" target="blanck"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                  </div>
                  </div>
                  </div>
                </article>
                      </section>
                      <!-- fim card -->
                      <!-- inicio footer -->
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
                                <li><a href="logado1.php"><button type="button" class="btn btn-success">In??cio</button></a></li>
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
        
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>
</html>