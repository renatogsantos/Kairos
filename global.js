const cards = [
  {
    icon: "ph-trademark-registered",
    title: "Registro de Marcas",
    description:
      "Fazer o registro de MARCA é a única forma de proteger a identidade da sua empresa. Seja o dono da sua MARCA, não deixe sua MARCA livre para seu concorrente registrar.",
  },
  {
    icon: "ph-medal",
    title: "Garantia Plure",
    description:
      "Caso sua MARCA seja INDEFERIDA, damos entrada em outro nome escolhido por você, sem a cobrança de honorários. É preciso pagar apenas as taxas do Governo. A garantia é válida para UMA CLASSE, havendo interesse no registro de mais classes, aplica-se a tabela de honorários.",
  },
  {
    icon: "ph-binoculars",
    title: "Monitoramento e Vigilância",
    description:
      "Após a obtenção do certificado de registro, continuamos acompanhando o portifólio de marcas semanalmente. Este serviço é realizando através de softwares integrados ao banco de dados do Instituto Nacional da Propriedade Industrial - INPI - , que possibilidade a verificação que concorrentes não estão entrando com pedido de registro de marca igual ou semelhante a sua.",
  },
  {
    icon: "ph-handshake",
    title: "Assessoria Jurídica",
    description:
      "Os Advogados da PLURE têm por obrigação conhecer as leis, sobretudo as leis voltadas à área da propriedade industrial e intelectual, atuando sempre com transparência, segurança e ética para garantir e proteger os interesses de sua MARCA tanto na esfera administrativa como judicial.",
  },
  
];
const card = document.getElementById("cards");
cards.map((el) => {
  card.innerHTML += `
		<div class="col-12 col-md-6 col-xl-3 g-2 d-flex align-items-stretch">
			<div class="cardPlure">
        <i class="icon ${el.icon}"></i>
        <h3>${el.title}</h3>
			  <p>${el.description}</p>
      </div>
		</div>
	`;
});

const vantagens = [
  {
    numero: "01",
    description: "A propriedade da MARCA será única e exclusiva.",
  },
  {
    numero: "02",
    description:
      "A proteção contra o uso indevido de terceiros, assegurando o direito de indenização.",
  },
  {
    numero: "03",
    description: "O direito de uso exlusivo no seu segmento mercadológico.",
  },
  {
    numero: "04",
    description:
      "A credibilidade e seriedade que uma MARCA registrada transmite.",
  },
  {
    numero: "05",
    description:
      "A possibilidade de licenciar, transferir ou vender o direito de uso da MARCA.",
  },
  {
    numero: "06",
    description: "A habilitação para criar franquias.",
  },
];
const cardVantagem = document.getElementById("cardVantagem");
vantagens.map((el) => {
  cardVantagem.innerHTML += `
  <div class="col-12 col-lg-4 d-flex">
    <div class="number jello-horizontal">
      ${el.numero}
    </div>
    <div class="px-2">
      <p>${el.description}</p>
    </div>
  </div>`;
});

const estapasRegistro = [
  {
    icon: "ph-magnifying-glass",
    title: "PESQUISA DE ANTERIORIDADE",
    description:
      "Antes de iniciar o processo, é realizada uma pesquisa junto ao INPI para saber se há MARCA igual ou semelhante resgistrada.",
  },
  {
    icon: "ph-currency-circle-dollar",
    title: "PAGAMENTO DA TAXA",
    description:
      "Realizada a pesquisa, havendo interesse no registro da MARCA, ocorre o pagamento da guia de recolhimento da União.",
  },
  {
    icon: "ph-file-text",
    title: "PROTOCOLO",
    description:
      "Após o pagamento, prosseguimos com o depósito/registro da MARCA junto ao INPI.",
  },
  {
    icon: "ph-file-search",
    title: "ACOMPANHAMENTO",
    description:
      "Com a MARCA protocolada, o INPI irá iniciar o processo de análise. Essa análise perpassa por diversas etapas, que vão desde o prazo para oposição até a decisão final.",
  },
  {
    icon: "ph-file-text",
    title: "CONCLUSÃO DO PROCESSO",
    description:
      "Passado o prazo de análise do INPI, será divulgada uma decisão final sobre o processo. Se INDEFERIDO abre-se o prazo de 60 dias para apresentar RECURSO. Se DEFERIDO abre-se o prazo de 60 dias para pagamento da GRU.",
  },
  {
    icon: "ph-clock-counter-clockwise",
    title: "CERTIFICADO DE REGISTRO",
    description: "Após o deferimento do pedido de registro e o pagamento da GRU pelo cliente, a PLURE irá emitir junto ao INPI o Certificado de Registro da Marca e encaminhará para o seu email. O Registro da sua MARCA terá vigência de 10 ANOS a contar da emissão do Certificado.",
  },
];

const cardEtapas = document.getElementById("cardEtapas");
estapasRegistro.map((el) => {
  cardEtapas.innerHTML += `
  <div class="col-12 col-lg-4 g-2 d-flex align-items-stretch">
    <div class="cardPlure2">
      <i class="icon ${el.icon}"></i>
      <h3>${el.title}</h3>
      <small>${el.description}</small>
    </div>
  </div>
  `;
});
//============================Processo de escrita dos títulos do site============================//

const top1 = document.getElementById("top1");
const top2 = document.getElementById("top2");
const top3 = document.getElementById("top3");
const top4 = document.getElementById("top4");
const bottom1 = document.getElementById("bottom1");
const bottom2 = document.getElementById("bottom2");
const bottom3 = document.getElementById("bottom3");
const bottom4 = document.getElementById("bottom4");
var type1 = new Typed("#typedTitle", {
  stringsElement: "#typed-strings-title",
  typeSpeed: 100,
  backSpeed: 50,
  loop: Infinity,
  preStringTyped: (typed) => {
    if (typed == 0) {
      top1.style.display = "block";
      bottom1.style.display = "block";
      top2.style.display = "none";
      bottom2.style.display = "none";
      top3.style.display = "none";
      bottom3.style.display = "none";
      top4.style.display = "none";
      bottom4.style.display = "none";
    } else if (typed == 1) {
      top1.style.display = "none";
      bottom1.style.display = "none";
      top2.style.display = "block";
      bottom2.style.display = "block";
      top3.style.display = "none";
      bottom3.style.display = "none";
      top4.style.display = "none";
      bottom4.style.display = "none";
    } else if (typed == 2) {
      top1.style.display = "none";
      bottom1.style.display = "none";
      top2.style.display = "none";
      bottom2.style.display = "none";
      top3.style.display = "block";
      bottom3.style.display = "block";
      top4.style.display = "none";
      bottom4.style.display = "none";
    } else {
      top1.style.display = "none";
      bottom1.style.display = "none";
      top2.style.display = "none";
      bottom2.style.display = "none";
      top3.style.display = "none";
      bottom3.style.display = "none";
      top4.style.display = "block";
      bottom4.style.display = "block";
    }
  },
});

//============================Menu scroll============================//
$(window).scroll(function () {
  if ($(document).scrollTop() > 150) {
    $("nav").addClass("bg-navbar-scroll");
  } else {
    $("nav").removeClass("bg-navbar-scroll");
  }
});