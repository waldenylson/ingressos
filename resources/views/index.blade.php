<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Clássicos da Disney - Espetáculo de Ballet Infantil</title>

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Great+Vibes&family=Inter:wght@400;600;700&display=swap"
      rel="stylesheet"
    />

    <!-- Font Awesome for Icons -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
    />

    <style>
      /* Estilos personalizados para integrar as Fontes do Google */
      body {
        font-family: "Inter", sans-serif;
        background-color: #f0f4f8; /* Fundo azul claro */
      }
      .font-title {
        font-family: "Great Vibes", cursive;
      }

      /* Keyframes para o fundo animado */
      @keyframes zoomIn {
        from {
          transform: scale(1);
        }
        to {
          transform: scale(1.1);
        }
      }

      .hero-bg {
        /* Imagem fornecida pelo usuário */
        background-image: url("./images/fundo.png");
        background-size: cover;
        background-position: center;
        /* Aplicando a animação */
        animation: zoomIn 20s ease-in-out infinite alternate;
      }
      .btn-magic {
        transition: all 0.3s ease;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
      }
      .btn-magic:hover {
        transform: translateY(-3px);
        box-shadow: 0 6px 20px rgba(0, 0, 0, 0.3);
      }
      .faq-item .faq-answer {
        display: none;
        transition: max-height 0.3s ease-in-out;
      }
      .faq-item.open .faq-answer {
        display: block;
      }
      .faq-item.open .icon-plus {
        transform: rotate(45deg);
      }
    </style>
  </head>
  <body class="text-gray-800">
    <!-- Secção Principal -->
    <header
      id="home"
      class="hero-bg text-white relative min-h-screen flex items-center justify-center overflow-hidden"
    >
      <div class="absolute inset-0 bg-black bg-opacity-40"></div>
      <div class="relative z-10 text-center p-6">
        <h1
          class="font-title text-6xl md:text-8xl lg:text-9xl text-white"
          style="text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.7)"
        >
          LeCorsaire Ballet - Clássicos da Disney
        </h1>
        <p
          class="mt-4 text-lg md:text-2xl max-w-2xl mx-auto"
          style="text-shadow: 1px 1px 4px rgba(0, 0, 0, 0.8)"
        >
          A magia dos seus contos de fadas favoritos, contada através da
          graciosidade do ballet. Um espetáculo para toda a família!
        </p>
        <a
          href="#tickets"
          class="btn-magic mt-8 inline-block bg-blue-500 hover:bg-blue-600 text-white font-bold py-4 px-10 rounded-full text-xl uppercase tracking-wider"
        >
          Garanta seu Ingresso
        </a>
      </div>
    </header>

    <!-- Conteúdo Principal -->
    <main>
      <!-- Secção Sobre -->
      <section id="about" class="py-20 px-6 bg-white">
        <div class="container mx-auto text-center max-w-4xl">
          <h2 class="font-title text-5xl md:text-6xl text-blue-800 mb-6">
            Um Conto de Fadas no Palco
          </h2>
          <p class="text-lg text-gray-600 mb-8">
            Embarque numa viagem encantada pelos mundos de Cinderela, A Bela e a
            Fera, A Pequena Sereia e muitos outros. Uma produção deslumbrante,
            com figurinos icónicos e o talento de nossos jovens bailarinos, ao
            som das inesquecíveis canções da Disney.
          </p>
          <div
            class="flex flex-col md:flex-row justify-center items-center space-y-6 md:space-y-0 md:space-x-12 text-blue-700 mb-12"
          >
            <div class="flex items-center space-x-3">
              <i class="fas fa-calendar-alt fa-2x"></i>
              <span class="text-xl font-semibold">15 de Novembro</span>
            </div>
            <div class="flex items-center space-x-3">
              <i class="fas fa-clock fa-2x"></i>
              <span class="text-xl font-semibold">Sáb às 16h </span>
            </div>
            <div class="flex items-center space-x-3">
              <i class="fas fa-map-marker-alt fa-2x"></i>
              <span class="text-xl font-semibold">Teatro Barreto Júnior</span>
            </div>
          </div>

          <!-- Google Maps Embed -->
          <div
            class="aspect-w-16 aspect-h-9 rounded-lg overflow-hidden shadow-xl"
          >
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7900.213428092797!2d-34.88649172410916!3d-8.090598991937965!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7ab1f4000a3ee7b%3A0x726bddf1f0711346!2sTeatro%20Barreto%20J%C3%BAnior!5e0!3m2!1spt-BR!2sbr!4v1753323869530!5m2!1spt-BR!2sbr"
              width="100%"
              height="100%"
              style="border: 0"
              allowfullscreen=""
              loading="lazy"
              referrerpolicy="no-referrer-when-downgrade"
            >
            </iframe>
          </div>
        </div>
      </section>

      <!-- Secção do Temporizador -->
      <section class="py-12 bg-blue-100">
        <div class="container mx-auto text-center">
          <h3 class="font-title text-4xl text-blue-800 mb-4">
            A Magia Começa em...
          </h3>
          <div
            id="countdown"
            class="flex justify-center space-x-4 md:space-x-8 text-blue-900"
          >
            <div>
              <span id="days" class="text-4xl md:text-6xl font-bold"></span>
              <span class="block text-sm">Dias</span>
            </div>
            <div>
              <span id="hours" class="text-4xl md:text-6xl font-bold"></span>
              <span class="block text-sm">Horas</span>
            </div>
            <div>
              <span id="minutes" class="text-4xl md:text-6xl font-bold"></span>
              <span class="block text-sm">Minutos</span>
            </div>
            <div>
              <span id="seconds" class="text-4xl md:text-6xl font-bold"></span>
              <span class="block text-sm">Segundos</span>
            </div>
          </div>
        </div>
      </section>

      <!-- Secção da Galeria -->
      <section id="gallery" class="py-20 px-6 bg-white">
        <div class="container mx-auto">
          <h2
            class="font-title text-5xl md:text-6xl text-center text-blue-800 mb-12"
          >
            Momentos Mágicos
          </h2>
          <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
            <div
              class="overflow-hidden rounded-lg shadow-lg transform hover:scale-105 transition-transform duration-300"
            >
              <img
                src="./images/cinderela.png"
                alt="Bailarina em cena como Cinderela"
                class="w-full h-full object-cover"
              />
            </div>
            <div
              class="overflow-hidden rounded-lg shadow-lg transform hover:scale-105 transition-transform duration-300"
            >
              <img
                src="./images/bela.png"
                alt="Cena do ballet A Bela e a Fera"
                class="w-full h-full object-cover"
              />
            </div>
            <div
              class="overflow-hidden rounded-lg shadow-lg transform hover:scale-105 transition-transform duration-300"
            >
              <img
                src="./images/ariel.png"
                alt="Detalhe do figurino da Pequena Sereia"
                class="w-full h-full object-cover"
              />
            </div>
            <div
              class="overflow-hidden rounded-lg shadow-lg transform hover:scale-105 transition-transform duration-300"
            >
              <img
                src="./images/princesas.png"
                alt="Grupo de bailarinos em cena"
                class="w-full h-full object-cover"
              />
            </div>
          </div>
        </div>
      </section>

      <!-- Secção de Bilhetes -->
      <section id="tickets" class="py-20 px-6 bg-blue-50">
        <div class="container mx-auto max-w-5xl">
          <h2
            class="font-title text-5xl md:text-6xl text-center text-blue-800 mb-12"
          >
            Escolha seu Lugar no Sonho
          </h2>
          <div class="grid md:grid-cols-1 gap-8">
            <!-- Cartão de Bilhete 1 -->
            <div
              class="bg-white rounded-xl shadow-2xl p-8 text-center flex flex-col justify-between border-t-4 border-blue-400"
            >
              <div>
                <h3 class="text-3xl font-bold text-blue-800 mb-2">
                  Platéia Mágica
                </h3>
                <p class="text-gray-500 mb-6">
                  Sinta a emoção das nossas pequenas bailarinas em cena.
                </p>
                <p class="text-5xl font-bold text-blue-600 mb-6">R$ 39,00</p>
                <ul class="text-left space-y-3 mb-8">
                  <li class="flex items-center">
                    <i class="fas fa-check-circle text-green-500 mr-3"></i>
                    Visão do palco com assentos elevados e confortáveis!
                  </li>
                  <li class="flex items-center">
                    <i class="fas fa-check-circle text-green-500 mr-3"></i>
                    Equipe de fotografia profissional!
                  </li>
                  <li class="flex items-center">
                    <i class="fas fa-check-circle text-green-500 mr-3"></i>
                    Experiência imersiva!
                  </li>
                </ul>
              </div>
              <a
                href="{{ route('buy') }}"
                class="btn-magic w-full mt-4 inline-block bg-blue-500 hover:bg-blue-600 text-white font-bold py-3 px-8 rounded-full text-lg"
                >Comprar Agora</a
              >
            </div>
            <!-- Cartão de Bilhete 2 -->
            <!-- <div
              class="bg-white rounded-xl shadow-2xl p-8 text-center flex flex-col justify-between border-t-4 border-indigo-400"
            >
              <div>
                <h3 class="text-3xl font-bold text-indigo-800 mb-2">
                  Balcão dos Sonhos
                </h3>
                <p class="text-gray-500 mb-6">
                  Uma vista panorâmica de todo o encanto do espetáculo.
                </p>
                <p class="text-5xl font-bold text-indigo-600 mb-6">R$ 60</p>
                <ul class="text-left space-y-3 mb-8">
                  <li class="flex items-center">
                    <i class="fas fa-check-circle text-green-500 mr-3"></i>
                    Excelente visibilidade
                  </li>
                  <li class="flex items-center">
                    <i class="fas fa-check-circle text-green-500 mr-3"></i>
                    Ótimo custo-benefício
                  </li>
                  <li class="flex items-center">
                    <i class="fas fa-check-circle text-green-500 mr-3"></i>
                    Perfeito para famílias
                  </li>
                </ul>
              </div>
              <a
                href="#"
                class="btn-magic w-full mt-4 inline-block bg-indigo-500 hover:bg-indigo-600 text-white font-bold py-3 px-8 rounded-full text-lg"
                >Comprar Agora</a
              >
            </div> -->
          </div>
        </div>
      </section>

      <!-- Secção de FAQ -->
      <section id="faq" class="py-20 px-6 bg-white">
        <div class="container mx-auto max-w-3xl">
          <h2
            class="font-title text-5xl md:text-6xl text-center text-blue-800 mb-12"
          >
            Perguntas Frequentes
          </h2>
          <div class="space-y-4">
            <div
              class="faq-item bg-gray-50 rounded-lg p-6 border border-gray-200"
            >
              <div
                class="faq-question flex justify-between items-center cursor-pointer"
              >
                <h4 class="text-lg font-semibold text-gray-800">
                  Qual a classificação etária?
                </h4>
                <i
                  class="fas fa-plus icon-plus text-blue-500 transition-transform duration-300"
                ></i>
              </div>
              <p class="faq-answer mt-4 text-gray-600">
                O espetáculo tem classificação livre e é recomendado para toda a
                família.
              </p>
            </div>
            <div
              class="faq-item bg-gray-50 rounded-lg p-6 border border-gray-200"
            >
              <div
                class="faq-question flex justify-between items-center cursor-pointer"
              >
                <h4 class="text-lg font-semibold text-gray-800">
                  Qual a duração do espetáculo?
                </h4>
                <i
                  class="fas fa-plus icon-plus text-blue-500 transition-transform duration-300"
                ></i>
              </div>
              <p class="faq-answer mt-4 text-gray-600">
                A apresentação dura aproximadamente 1 hora e 30 minutos, com um
                intervalo de 15 minutos.
              </p>
            </div>
            <!-- <div
              class="faq-item bg-gray-50 rounded-lg p-6 border border-gray-200"
            >
              <div
                class="faq-question flex justify-between items-center cursor-pointer"
              >
                <h4 class="text-lg font-semibold text-gray-800">
                  O teatro possui acessibilidade?
                </h4>
                <i
                  class="fas fa-plus icon-plus text-blue-500 transition-transform duration-300"
                ></i>
              </div>
              <p class="faq-answer mt-4 text-gray-600">
                Sim, o Teatro Barreto Júnior possui rampas de acesso e assentos
                reservados para pessoas com deficiência. Por favor, entre em
                contato para mais detalhes.
              </p>
            </div> -->
          </div>
        </div>
      </section>
    </main>

    <!-- Rodapé -->
    <footer class="bg-blue-900 text-white py-12 px-6">
      <div class="container mx-auto text-center">
        <p class="font-title text-4xl mb-4">LeCorsaire Ballet</p>
        <p class="mb-6">
          Siga-nos nas redes sociais para mais novidades e fotos dos nossos
          espetáculos!
        </p>
        <div class="flex justify-center space-x-6 mb-8">
          <a
            target="_blank"
            href="https://www.instagram.com/lecorsaireballet/"
            class="text-2xl hover:text-blue-300 transition-colors"
            ><i class="fab fa-instagram"></i
          ></a>
          <!-- <a href="#" class="text-2xl hover:text-blue-300 transition-colors"
            ><i class="fab fa-facebook-f"></i
          ></a>
          <a href="#" class="text-2xl hover:text-blue-300 transition-colors"
            ><i class="fab fa-youtube"></i
          ></a> -->
          <a
            target="_blank"
            href="https://wa.me/5581997438327?text=Olá!%20Gostaria%20de%20saber%20mais%20sobre%20seus%20serviços."
            class="text-2xl hover:text-blue-300 transition-colors"
            ><i class="fab fa-whatsapp"></i
          ></a>
        </div>
        <p class="text-sm text-blue-200">
          &copy; 2025 LeCorsaire Ballet. Todos os direitos reservados.
        </p>
      </div>
    </footer>

    <script>
      // Lógica do Temporizador
      const countdown = () => {
        // Define a data para a contagem regressiva (15 de novembro de 2025)
        const countDate = new Date("November 15, 2025 16:00:00").getTime();
        const now = new Date().getTime();
        const gap = countDate - now;

        // Cálculos de tempo
        const second = 1000;
        const minute = second * 60;
        const hour = minute * 60;
        const day = hour * 24;

        // Calcula os valores
        const textDay = Math.floor(gap / day);
        const textHour = Math.floor((gap % day) / hour);
        const textMinute = Math.floor((gap % hour) / minute);
        const textSecond = Math.floor((gap % minute) / second);

        // Atualiza o HTML
        document.getElementById("days").innerText = textDay > 0 ? textDay : 0;
        document.getElementById("hours").innerText =
          textHour > 0 ? textHour : 0;
        document.getElementById("minutes").innerText =
          textMinute > 0 ? textMinute : 0;
        document.getElementById("seconds").innerText =
          textSecond > 0 ? textSecond : 0;
      };

      // Executa o temporizador a cada segundo
      setInterval(countdown, 1000);

      // Lógica do Acordeão de FAQ
      document.querySelectorAll(".faq-question").forEach((button) => {
        button.addEventListener("click", () => {
          const faqItem = button.parentElement;

          // Fecha todos os outros itens
          document.querySelectorAll(".faq-item").forEach((item) => {
            if (item !== faqItem && item.classList.contains("open")) {
              item.classList.remove("open");
            }
          });

          // Alterna o item clicado
          faqItem.classList.toggle("open");
        });
      });

      // Rolagem suave para links âncora
      document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
        anchor.addEventListener("click", function (e) {
          e.preventDefault();
          document.querySelector(this.getAttribute("href")).scrollIntoView({
            behavior: "smooth",
          });
        });
      });
    </script>
  </body>
</html>
