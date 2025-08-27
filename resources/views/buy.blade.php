<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Compra de Ingressos - Clássicos da Disney</title>

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
      body {
        font-family: "Inter", sans-serif;
        background-color: #f0f4f8;
      }
      .font-title {
        font-family: "Great Vibes", cursive;
      }
      .quantity-input::-webkit-outer-spin-button,
      .quantity-input::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
      }
      .quantity-input {
        -moz-appearance: textfield;
      }
    </style>
  </head>
  <body class="text-gray-800">
    <!-- Header -->
    <header class="bg-blue-900 text-white py-6 shadow-lg">
      <div class="container mx-auto flex justify-between items-center">
        <a href="{{ route('index') }}" class="flex items-center space-x-2">
          <i class="fas fa-chevron-left"></i>
          <span>Voltar</span>
        </a>
      </div>
      <div class="container mx-auto text-center">
        <h1 class="font-title text-5xl">LeCorsaire Ballet - Clássicos da Disney</h1>
        <p class="text-xl">Compra de Ingressos</p>
      </div>
    </header>

    <!-- Main Content -->
    <main class="container mx-auto p-6 md:p-12">
      <div class="grid lg:grid-cols-3 gap-12">
        <!-- Ticket Selection -->
        <div class="lg:col-span-2">
          <h2 class="text-3xl font-bold text-blue-800 mb-8">
            Selecione seus Ingressos
          </h2>
          <div class="space-y-8">
            <!-- Ticket Product 1 -->
            <div
              id="ticket-plateia"
              data-name="Platéia Mágica"
              data-price=39"
              class="ticket-item bg-white rounded-lg shadow-md p-6 flex flex-col md:flex-row items-center justify-between"
            >
              <div class="mb-4 md:mb-0">
                <h3 class="text-2xl font-bold text-blue-800">Platéia Mágica</h3>
                <p class="text-gray-600">
                  Sinta a emoção das nossas pequenas bailarinas em cena.
                </p>
                <p class="text-xl font-bold text-blue-600 mt-2">R$ 39,00</p>
              </div>
              <div class="flex items-center gap-4">
                <div
                  class="flex items-center border border-gray-300 rounded-md"
                >
                  <button
                    class="quantity-minus p-2 text-lg hover:bg-gray-200 rounded-l-md"
                  >
                    -
                  </button>
                  <input
                    type="number"
                    class="quantity-input w-16 text-center font-bold"
                    value="1"
                    min="1"
                  />
                  <button
                    class="quantity-plus p-2 text-lg hover:bg-gray-200 rounded-r-md"
                  >
                    +
                  </button>
                </div>
                <button
                  class="add-to-cart-btn bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-6 rounded-md transition-colors"
                >
                  Adicionar
                </button>
              </div>
            </div>

            <!-- Ticket Product 2 -->
            <!-- <div
              id="ticket-balcao"
              data-name="Balcão dos Sonhos"
              data-price="60"
              class="ticket-item bg-white rounded-lg shadow-md p-6 flex flex-col md:flex-row items-center justify-between"
            >
              <div class="mb-4 md:mb-0">
                <h3 class="text-2xl font-bold text-indigo-800">
                  Balcão dos Sonhos
                </h3>
                <p class="text-gray-600">
                  Uma vista panorâmica de todo o encanto.
                </p>
                <p class="text-xl font-bold text-indigo-600 mt-2">R$ 60,00</p>
              </div>
              <div class="flex items-center gap-4">
                <div
                  class="flex items-center border border-gray-300 rounded-md"
                >
                  <button
                    class="quantity-minus p-2 text-lg hover:bg-gray-200 rounded-l-md"
                  >
                    -
                  </button>
                  <input
                    type="number"
                    class="quantity-input w-16 text-center font-bold"
                    value="1"
                    min="1"
                  />
                  <button
                    class="quantity-plus p-2 text-lg hover:bg-gray-200 rounded-r-md"
                  >
                    +
                  </button>
                </div>
                <button
                  class="add-to-cart-btn bg-indigo-500 hover:bg-indigo-600 text-white font-bold py-2 px-6 rounded-md transition-colors"
                >
                  Adicionar
                </button>
              </div>
            </div> -->
          </div>
        </div>

        <!-- Shopping Cart -->
        <div class="lg:col-span-1">
          <div class="bg-white rounded-lg shadow-lg p-6 sticky top-12">
            <h2 class="text-3xl font-bold text-gray-800 mb-6 border-b pb-4">
              <i class="fas fa-shopping-cart mr-2"></i>Meu Carrinho
            </h2>
            <div id="cart-items" class="space-y-4">
              <!-- Cart items will be injected here by JS -->
              <p id="empty-cart-msg" class="text-gray-500 text-center">
                Seu carrinho está vazio.
              </p>
            </div>
            <div id="cart-summary" class="mt-8 border-t pt-4 hidden">
              <div class="flex justify-between items-center text-2xl font-bold">
                <span>Total:</span>
                <span id="cart-total">R$ 0,00</span>
              </div>
              <button
                id="checkout-btn"
                class="w-full bg-green-500 hover:bg-green-600 text-white font-bold py-3 px-6 rounded-md mt-6 text-lg transition-colors"
              >
                Finalizar Compra
              </button>
            </div>
          </div>
        </div>
      </div>
    </main>

    <!-- Modal de Confirmação -->
    <div
      id="confirmation-modal"
      class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center hidden"
    >
      <div class="bg-white rounded-lg shadow-2xl p-8 text-center max-w-sm">
        <h2 class="text-2xl font-bold text-green-600 mb-4">
          Compra Realizada com Sucesso!
        </h2>
        <p class="text-gray-700 mb-6">
          Obrigado por se juntar a nós nesta aventura mágica! Um e-mail de
          confirmação foi enviado com os seus ingressos.
        </p>
        <button
          id="close-modal-btn"
          class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-8 rounded-md"
        >
          Fechar
        </button>
      </div>
    </div>

    <script>
      document.addEventListener("DOMContentLoaded", () => {
        const cart = [];

        // --- Elementos do DOM ---
        const cartItemsContainer = document.getElementById("cart-items");
        const cartTotalElement = document.getElementById("cart-total");
        const emptyCartMsg = document.getElementById("empty-cart-msg");
        const cartSummary = document.getElementById("cart-summary");
        const checkoutBtn = document.getElementById("checkout-btn");
        const confirmationModal = document.getElementById("confirmation-modal");
        const closeModalBtn = document.getElementById("close-modal-btn");

        // --- Funções do Carrinho ---

        const updateCart = () => {
          // Limpa o container do carrinho
          cartItemsContainer.innerHTML = "";

          if (cart.length === 0) {
            emptyCartMsg.classList.remove("hidden");
            cartSummary.classList.add("hidden");
            return;
          }

          emptyCartMsg.classList.add("hidden");
          cartSummary.classList.remove("hidden");

          let total = 0;

          cart.forEach((item) => {
            const itemTotal = item.price * item.quantity;
            total += itemTotal;

            const cartItemHTML = `
                        <div class="cart-item flex justify-between items-center" data-id="${
                          item.id
                        }">
                            <div>
                                <h4 class="font-bold">${item.name}</h4>
                                <p class="text-sm text-gray-600">Qtd: ${
                                  item.quantity
                                } x R$ ${item.price.toFixed(2)}</p>
                            </div>
                            <div class="flex items-center">
                                <p class="font-bold mr-4">R$ ${itemTotal.toFixed(
                                  2
                                )}</p>
                                <button class="remove-from-cart-btn text-red-500 hover:text-red-700">
                                    <i class="fas fa-trash-alt"></i>
                                </button>
                            </div>
                        </div>
                    `;
            cartItemsContainer.innerHTML += cartItemHTML;
          });

          cartTotalElement.innerText = `R$ ${total.toFixed(2)}`;
        };

        const addToCart = (item) => {
          const existingItem = cart.find((cartItem) => cartItem.id === item.id);

          if (existingItem) {
            existingItem.quantity += item.quantity;
          } else {
            cart.push(item);
          }
          updateCart();
        };

        const removeFromCart = (itemId) => {
          const itemIndex = cart.findIndex(
            (cartItem) => cartItem.id === itemId
          );
          if (itemIndex > -1) {
            cart.splice(itemIndex, 1);
          }
          updateCart();
        };

        // --- Event Listeners ---

        // Botões "Adicionar ao Carrinho"
        document.querySelectorAll(".add-to-cart-btn").forEach((button) => {
          button.addEventListener("click", (e) => {
            const ticketItemElement = e.target.closest(".ticket-item");
            const quantityInput =
              ticketItemElement.querySelector(".quantity-input");

            const item = {
              id: ticketItemElement.id,
              name: ticketItemElement.dataset.name,
              price: parseFloat(ticketItemElement.dataset.price),
              quantity: parseInt(quantityInput.value),
            };

            addToCart(item);
            quantityInput.value = 1; // Reseta a quantidade após adicionar
          });
        });

        // Botões de quantidade (+/-)
        document.querySelectorAll(".ticket-item").forEach((ticketItem) => {
          const minusBtn = ticketItem.querySelector(".quantity-minus");
          const plusBtn = ticketItem.querySelector(".quantity-plus");
          const input = ticketItem.querySelector(".quantity-input");

          minusBtn.addEventListener("click", () => {
            let currentValue = parseInt(input.value);
            if (currentValue > 1) {
              input.value = currentValue - 1;
            }
          });

          plusBtn.addEventListener("click", () => {
            let currentValue = parseInt(input.value);
            input.value = currentValue + 1;
          });
        });

        // Remover item do carrinho (usando delegação de evento)
        cartItemsContainer.addEventListener("click", (e) => {
          if (e.target.closest(".remove-from-cart-btn")) {
            const cartItemElement = e.target.closest(".cart-item");
            const itemId = cartItemElement.dataset.id;
            removeFromCart(itemId);
          }
        });

        // Botão de Finalizar Compra
        checkoutBtn.addEventListener("click", () => {
          confirmationModal.classList.remove("hidden");
        });

        // Fechar Modal
        closeModalBtn.addEventListener("click", () => {
          confirmationModal.classList.add("hidden");
          // Opcional: Limpar o carrinho após a compra
          cart.length = 0;
          updateCart();
        });

        // --- Inicialização ---
        updateCart();
      });
    </script>
  </body>
</html>
