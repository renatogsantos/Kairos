<?php
//Template Name: Home
?>
<!DOCTYPE html>
<html lang="en">
  <head>
  <?php wp_head(); ?>
    <!-- Required meta tags -->

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="<?php  echo get_theme_root_uri(); ?>/Plure-Site/style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://unpkg.com/phosphor-icons"></script>
    <title>Plure Landing Page</title>
  </head>

  <body>
    <div class="mouse-icon"><div class="mouse-icon__wheel"></div></div>
    <header>
      <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">
          <a class="navbar-brand" href="#">Navbar</a>
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarNav"
            aria-controls="navbarNav"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
          <i class="ph-list-bold"></i>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Menu01</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Menu02</a>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled">Menu03</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <section>
      <!--typed by youself-->
      <div>
				<div id="typed-strings">
					<p>Proteja sua criatividade!</p>
          <p>Garanta sua marca!</p>
          <p>Protegemos sua Marca!</p>
          <p>Cuide do que é seu!</p>
        </div>
      </div>
			<!--typed by youself-->
				<div class="container hero">
					<div>
						<h4 id="top1" class="show-titles">ASSESSORIA JURÍDICA</h4>
						<h4 id="top2" class="show-titles">IDENTIDADE VISUAL</h4>
						<h4 id="top3" class="show-titles">REGISTRO DE MARCAS</h4>
						<h4 id="top4" class="show-titles">DEPÓSITO DE PATENTES</h4>

						<h1><span id="typed"></span></h1>

						<p id="bottom1" class="show-titles">Advogados especializados na área de Propriedade Intelectual</p>
						<p id="bottom2" class="show-titles">Criação de Identidade Visual e logotipo para fortalecer sua marca</p>
						<p id="bottom3" class="show-titles">O Registro de Marca no INPI garante ao titular a exclusividade de uso em todo território nacional no seu ramo de atividade.</p>
						<p id="bottom4" class="show-titles">O Depósito de Patente garante ao titular a impossibilidade de terceiros explorarem seu invento, como vender, produzir, usar, etc.</p>

            <a class="buttonOne" href="/">Button</a>
            <a class="buttonTwo" href="/">Button</a>
					</div>
				</div>
      </div>
    </section>
    
    <section>
      <img class="wave" src="<?php  echo get_theme_root_uri(); ?>/Plure-Site/assets/wave.svg" alt="curvas">
      <div class="container-fluid py-5 hero2">
        <div class="container py-5">
          <div id="cards" class="row"></div>
        </div>
      </div>
      <img class="wave2" src="<?php  echo get_theme_root_uri(); ?>/Plure-Site/assets/wave2.svg" alt="curvas">
    </section>

    <section>
      <div class="container-fluid py-5 text-light">
        <div class="container py-5">
          <div class="row">
            <div class="col-12 col-sm-12 col-md-8 col-lg-9">
              <h2>Você sabe qual a importância da sua marca?</h2>
              <div class="divisorLight"></div>
              <p>Sua MARCA é o DNA da sua Empresa, é o que conecta o cliente ao seu produto/serviço.</p>
              <p>Ela transmite valores empresariais e fornece identidade ao seu negócio.</p>
              <p>Se sua empresa tiver uma marca sólida, honesta e cheia de propósito, consequentemente terá forte influência no processo de compra do seu cliente, contribuindo de maneira significativa na tomada de decisão.</p>
              <p>Uma vez atribuída uma imagem a sua marca, se essa percepção for positiva, o seu público terá preferência pelo seu e credibilidade na sua empresa, aumentando as vendas e melhorando a imagem da empresa.</p>
            </div>
            <div class="col-12 col-sm-12 col-md-4 col-lg-3">
              <img class="shake-vertical" width="100%" src="<?php  echo get_theme_root_uri(); ?>/Plure-Site/assets/draw2.svg" alt="" srcset="">
            </div>
          </div>
        </div>
      </div>
    </section>

    <section>
      <img class="wave" src="<?php  echo get_theme_root_uri(); ?>/Plure-Site/assets/wave.svg" alt="curvas">
      <div class="container-fluid py-5 hero2">
        <div class="container py-5">
          <h2 class="color-2">PORQUE É IMPORTANTE REGISTRAR SUA MARCA?</h2>
          <div class="divisorDarkCenter"></div>
          <div class="row">
            <div class="col-12 col-sm-12 col-md-4">
              <img class="shake-vertical" width="100%" src="<?php  echo get_theme_root_uri(); ?>/Plure-Site/assets/girl.png" alt="Mulher feliz apontando para a direita">
            </div>
            <div class="col-12 col-sm-12 col-md-8">
              <ol>
                <li>Registrar a sua MARCA é a forma adequada proteger a identidade da sua empresa.</li>
                <li>Com o Registro você irá adquirir um que garante o direito de e uso exclusivo de sua marca em território nacional.</li>
                <li>O Registro de MARCAS pode proteger o nome, os sinais distintivos das letras,números, figuras e tudo o que faz parte da composição da sua marca.</li>
                <li>A MARCA concentra todos os resultados da empresa. Os investimentos em marketing, ou das vendas, a avaliação dos produtos ou serviços e a confiança dos clientes são atribuídos ao nome da empresa, ou seja, a sua MARCA.</li>
                <li>Para que você possa ter exclusividade no mercado, evitando que terceiros utilizem a sua MARCA, garantindo que somente você, o detentor do certificado de registro da MARCA, possa usar, gozar, fruir e dispor da referida MARCA registrada.</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
      <img class="wave2" src="<?php  echo get_theme_root_uri(); ?>/Plure-Site/assets/wave2.svg" alt="curvas">
    </section>

    <section>
      <div class="container-fluid pt-5 text-light text-center">
        <div class="container pt-5">
          <h2>Vantagens ao registrar sua marca</h2>
          <div class="divisorLightCenter"></div>
          <div id="cardVantagem" class="row g-5 py-5 text-start"></div>
        </div>
      </div>
    </section>

    <section>
      <div class="container-fluid py-5">
        <div class="container py-5">
          <div class="cardBox">
            <div class="row">
              <div class="col-12 col-sm-12 col-md-12 col-lg-4 d-flex align-items-center justify-content-center">
                <img class="girl2" src="<?php  echo get_theme_root_uri(); ?>/Plure-Site/assets/girl2.png" alt="Mulher ruiva triste">
              </div>
              <div class="col-12 col-sm-12 col-md-12 col-lg-8 p-4">
                <h2 class="color-2">riscos de não registrar sua marca</h2>
                <div class="divisorDark"></div>
                <ul>
                  <li>Perder a MARCA para um terceiro.</li>
                  <li>Ser processado por uso indevido de MARCA já Registrada.</li>
                  <li>Sofrer prejuízos financeiros e perda de credibilidade.</li>
                  <li>Não poder se defender de cópias e uso indevido por não possuir o direito de uso exclusivo sobre a MARCA.</li>
                  <li>Ser obrigado a deixar de usar a MARCA.</li>
                </ul>
              </div>
            </div>
          </div>          
        </div>
      </div>
    </section>

    <section>
      <img class="wave" src="<?php  echo get_theme_root_uri(); ?>/Plure-Site/assets/wave.svg" alt="curvas">
      <div class="container-fluid py-5 hero2 text-center">
        <div class="container py-5">
          <img class="mb-5" width="300px" src="<?php  echo get_theme_root_uri(); ?>/Plure-Site/assets/draw3.svg" alt="Desenho de dois bonecos segurando um símbolo de interrogação" srcset="">
          <br>

          <div class="py-3">
            <a class="buttonThree" data-bs-toggle="collapse" href="#collapse1" role="button" aria-expanded="false" aria-controls="collapse1">
              onde a marca é registrada?
            </a>
            <div class="collapse" id="collapse1">
              <div class="p-4">
                <p>A MARCA é registrada no INPI - Instituto Nacional de Propriedade Industrial.<br>
                  O INPI é uma autarquia federal responsável pelo registro de marcas e patentes no Brasil.
                  Somente o certificado emitido pelo INPI garante proteção em todo território nacional.</p>
              </div>
            </div>
          </div>

          <div class="py-3">
            <a class="buttonThree" data-bs-toggle="collapse" href="#collapse2" role="button" aria-expanded="false" aria-controls="collapse2">
              quanto tempo leva para uma marca ser registrada?
            </a>
            <div class="collapse" id="collapse2">
              <div class="p-4">
                <p>Atualmente os pedidos de registro de MARCA estão demorando, em média, de 8 a 12 meses, para serem
                  analisados pelo INPI.</p>
              </div>
            </div>
          </div>

          <div class="py-3">
            <a class="buttonThree" data-bs-toggle="collapse" href="#collapse3" role="button" aria-expanded="false" aria-controls="collapse3">
              qual a validade do regsitro de uma marca?
            </a>
            <div class="collapse" id="collapse3">
              <div class="p-4">
                <p>O registro de MARCA no Brasil é válido por 10 anos, a contar da concessão, podendo ser renovado a cada 10 anos, sucessivamente.<br>
                  O Registro de MARCAS pelo INPI tem validade em todo território nacional, o que permite expansão dos seus negócios e mais notoriedade para firmar parcerias e ter uma série de vantagens tangíveis.</p>
              </div>
            </div>
          </div>

          <div class="py-3">
            <a class="buttonThree" data-bs-toggle="collapse" href="#collapse4" role="button" aria-expanded="false" aria-controls="collapse4">
              porque escolher a plure?
            </a>
            <div class="collapse" id="collapse4">
              <div class="p-4 text-center text-md-start">
                <div class="d-md-flex align-items-center">
                  <i class="icon ph-check-circle mx-4"></i>
                  <p>Atuamos com agilidade, segurança e ética junto ao INPI para garantir e proteger os interesses de sua MARCA em todo território nacional.</p>
                </div>
                <div class="d-md-flex align-items-center">
                  <i class="icon ph-check-circle mx-4"></i>
                  <p>A informação sobre todas as etapas é essencial, por isso a PLURE trata o processo de registro com clareza, afinal, você não pode ser surpreendido com novas taxas e novos valores durante o processo. Por isso, atuamos com:</p>
                </div>
                <div class="text-center">
                  <p><i class="ph-check-bold color-3"></i> Transparência total sobre o processo.</p>
                  <p><i class="ph-check-bold color-3"></i> Clareza ao informar os valores investidos em cada etapa.</p>
                  <p><i class="ph-check-bold color-3"></i> Orientação sobre o enquadramento correto.</p>
                </div>
              </div>
            </div>
          </div>
          <hr>
          <small class="color-3">E não para por aqui!</small>

        </div>
      </div>
      <div class="container-fluid py-5 hero3 text-center">
        <div class="container">
          <h2>garantia plure</h2>
          <div class="divisorLightCenter"></div>
          <p>Caso sua MARCA seja INDEFERIDA, damos entrada em outro nome escolhido por você, sem a cobrança de honorários. É preciso pagar apenas as taxas do Governo. A garantia é válida para UMA CLASSE, havendo interesse no registro em mais classes, consultar valor de honorários.</p>
        </div>
      </div>
    </section>

    <section>
      <div class="container-fluid py-5">
        <div class="container py-5 text-light text-center">
          <h2>PRINCIPAIS ETAPAS DO REGISTRO DE MARCA</h2>
          <div class="divisorLightCenter"></div>
          <div id="cardEtapas" class="row"></div>
        </div>
      </div>
    </section>

    <section>
      <img class="wave" src="<?php  echo get_theme_root_uri(); ?>/Plure-Site/assets/wave.svg" alt="curvas">
      <div class="container-fluid py-5 hero2 text-center">
        <div class="container py-5">
          <h2>QUAIS CUIDADOS SÃO NECESSÁRIOS DURANTE O DECÊNIO?</h2>
          <div class="divisorDarkCenter"></div>
          <div class="row text-start">
            <div class="col-12 col-md-12 col-lg-6">
              <h3>COLIDÊNCIAS</h3>
              <p>Conforme já esclarecido, o registro da MARCA só é deferido caso não haja uma empresa com o nome igual ou semelhante, com a mesma CLASSE (Classificação Nice de Produtos e Serviços) ao da solicitante do certificado, exatamente para que não haja uma confusão do consumidor no momento de identificar as diferenças entre as duas instituições.</p>
              <p>Essa igualdade e semelhança entre duas MARCAS é chamada de COLIDÊNCIA. Durante todo o decênio a PLURE fará pesquisas semanais para verificar se outras MARCAS não estão em COLIDÊNCIA com a sua MARCA já registrada.</p>
            </div>
            <div class="col-12 col-md-12 col-lg-6">
              <h3>OPOSIÇÃO</h3>
              <p>Uma vez constatada a COLIDÊNCIA com outra MARCA, durante o decênio, a PLURE irá apresentar OPOSIÇÃO evidenciando o seu direito de utilizar a MARCA com base no registro e na anterioridade.</p>
              <p>Por isso o acompanhamento da sua MARCA é importante, para garantir sua defesa em caso de registros de MARCAS similares com alegações de anterioridade (alegação de que está atuando no mercado a mais tempo).</p>
            </div>
          </div>
          <small class="color-3">*Acompanhamento durante o decênio será efetuado mediante contratação e pagamento de anuidade.</small>
        </div>
      </div>
    </section>

    <section>
        <div class="container-fluid py-5 hero2 text-center">
            <div class="container py-5">
                <h2 class="color-2">Gostaria de saber mais? Entre em contato!</h2>
                <div class="divisorDarkCenter"></div>
                <div class="row">
                    <div class="col-12 d-flex align-items-center justify-content-center">
                        <?php the_content(); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <footer class="container-fluid py-5 hero3 text-center">
      <p class="m-0">Todo os direitos reservados</p>
    </footer>
    <script src="<?php  echo get_theme_root_uri(); ?>/Plure-Site/typed.min.js"></script>
    <script src="<?php  echo get_theme_root_uri(); ?>/Plure-Site/global.js"></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
