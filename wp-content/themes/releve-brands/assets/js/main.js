(() => {
  const STORAGE_KEY = 'releveDemoCart';
  const money = (value) => `$${Number(value || 0).toFixed(2)}`;
  const readCart = () => {
    try { return JSON.parse(localStorage.getItem(STORAGE_KEY) || '[]'); } catch { return []; }
  };
  const writeCart = (cart) => localStorage.setItem(STORAGE_KEY, JSON.stringify(cart));

  function parseProductFromCard(link) {
    const card = link.closest('li.product, article, .product-detail');
    if (!card) return null;
    const title = link.dataset.title || card.dataset.title || card.querySelector('.woocommerce-loop-product__title, h1, h3, span')?.textContent?.trim() || 'Product';
    const priceText = link.dataset.price || card.dataset.price || card.querySelector('.price, .product-price')?.textContent || '$0';
    const price = parseFloat((String(priceText).match(/[0-9]+(?:\.[0-9]+)?/) || ['0'])[0]);
    return { title, price, qty: 1 };
  }

  function cartCount(cart) {
    return cart.reduce((sum, item) => sum + (item.qty || 1), 0);
  }

  function updateCartLinks() {
    const count = cartCount(readCart());
    document.querySelectorAll('.cart-link').forEach((link) => {
      link.textContent = count ? `Cart (${count})` : 'Cart';
      if (!link.getAttribute('href') || link.getAttribute('href').includes('cart')) link.setAttribute('href', 'cart.html');
    });
  }

  function addToCart(product) {
    const cart = readCart();
    const existing = cart.find((item) => item.title === product.title);
    if (existing) existing.qty = (existing.qty || 1) + 1;
    else cart.push(product);
    writeCart(cart);
    updateCartLinks();
    renderDrawer();
  }

  function ensureDrawer() {
    let drawer = document.querySelector('.demo-cart');
    if (drawer) return drawer;
    drawer = document.createElement('aside');
    drawer.className = 'demo-cart';
    drawer.innerHTML = '<button class="demo-cart-close" aria-label="Close cart">×</button><h3>Demo Cart</h3><div class="demo-cart-body"></div><p class="demo-cart-note">Owner proof only. Real checkout activates when WordPress is hosted.</p><p><a class="button light" href="cart.html">Open Cart</a></p>';
    document.body.appendChild(drawer);
    drawer.querySelector('.demo-cart-close').addEventListener('click', () => drawer.classList.remove('open'));
    return drawer;
  }

  function renderDrawer() {
    const drawer = ensureDrawer();
    const body = drawer.querySelector('.demo-cart-body');
    const cart = readCart();
    if (!cart.length) body.innerHTML = '<p>No products yet.</p>';
    else {
      const total = cart.reduce((sum, item) => sum + item.price * (item.qty || 1), 0);
      body.innerHTML = `<ul>${cart.map(item => `<li>${item.title} × ${item.qty || 1} — ${money(item.price * (item.qty || 1))}</li>`).join('')}</ul><p class="demo-cart-total">Total: ${money(total)}</p>`;
    }
    drawer.classList.add('open');
  }

  function renderCartPage() {
    const root = document.querySelector('[data-demo-cart-page]');
    if (!root) return;
    const cart = readCart();
    if (!cart.length) {
      root.innerHTML = '<section class="cart-empty"><h2>Your demo cart is empty.</h2><p>Add products from the shop to see them here.</p><a class="button primary" href="shop.html">Back to Shop</a></section>';
      return;
    }
    const total = cart.reduce((sum, item) => sum + item.price * (item.qty || 1), 0);
    root.innerHTML = `<section class="demo-cart-page"><h2>Demo Cart</h2><div class="cart-lines">${cart.map((item, index) => `<article><div><h3>${item.title}</h3><p>${money(item.price)} × ${item.qty || 1}</p></div><strong>${money(item.price * (item.qty || 1))}</strong><button class="remove-cart-item" data-index="${index}">Remove</button></article>`).join('')}</div><div class="cart-summary"><p>Total</p><strong>${money(total)}</strong></div><p class="demo-cart-note">This is a functional proof cart. Final checkout/payment requires live WordPress + WooCommerce hosting.</p><a class="button primary" href="shop.html">Continue Shopping</a> <button class="button secondary clear-cart">Clear Cart</button></section>`;
  }

  document.addEventListener('click', (event) => {
    const addLink = event.target.closest('a, button');
    if (addLink) {
      const text = addLink.textContent.trim().toLowerCase();
      const href = addLink.getAttribute('href') || '';
      if (text.includes('add to cart') || href.includes('add-to-cart') || addLink.classList.contains('demo-add')) {
        event.preventDefault();
        const product = parseProductFromCard(addLink);
        if (product) addToCart(product);
        addLink.textContent = 'Added ✓';
        setTimeout(() => { addLink.textContent = 'Add to Cart'; }, 1200);
        return;
      }
    }

    const remove = event.target.closest('.remove-cart-item');
    if (remove) {
      const cart = readCart();
      cart.splice(Number(remove.dataset.index), 1);
      writeCart(cart);
      updateCartLinks();
      renderCartPage();
    }
    if (event.target.closest('.clear-cart')) {
      writeCart([]);
      updateCartLinks();
      renderCartPage();
    }
  });

  updateCartLinks();
  renderCartPage();
})();
