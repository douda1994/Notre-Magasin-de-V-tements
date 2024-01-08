// Script pour gérer le panier
let cartItems = [];
let cartTotal = 0;

function addToCart() {
  // Ajoute un article au panier (ici un exemple simple)
  const item = {
    name: 'Chemise Homme',
    price: 30
  };
  cartItems.push(item);
  cartTotal += item.price;
  
  updateCart();
}

function updateCart() {
  const cartList = document.getElementById('cart-items');
  const cartTotalElement = document.getElementById('cart-total');

  // Efface le contenu du panier
  cartList.innerHTML = '';

  // Met à jour le contenu du panier
  cartItems.forEach(item => {
    const li = document.createElement('li');
    li.textContent = `${item.name} - Prix: $${item.price}`;
    cartList.appendChild(li);
  });

  // Met à jour le total du panier
  cartTotalElement.textContent = `$${cartTotal}`;
}
