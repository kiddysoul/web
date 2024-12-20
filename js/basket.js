let cart = JSON.parse(localStorage.getItem('cart')) || [];

document.querySelectorAll('.cart-button').forEach(button => {
    button.addEventListener('click', function() {
        const productName = this.querySelector('.add-to-cart').textContent;
        const productPrice = parseFloat(this.getAttribute('data-price')); 
        cart.push({ name: productName, price: productPrice });
        updateCart();
        saveCart(); 
    });
});

function updateCart() {
    const cartContent = document.getElementById('cart-content');
    cartContent.innerHTML = '';

    if (cart.length === 0) {
        cartContent.innerHTML = '<p>Корзина пуста</p>';
        document.getElementById('cart-count').textContent = '0';
    } else {
        cart.forEach((item, index) => {
            const itemElement = document.createElement('div');
            itemElement.textContent = `${item.name} - ${item.price.toFixed(2)} ₽`; // Форматирование цены

            const removeButton = document.createElement('button');
            removeButton.textContent = 'Удалить';
            removeButton.style.backgroundColor = '#808080'; 
            removeButton.style.color = '#ffffff'; 
            removeButton.style.border = 'none'; 
            removeButton.style.padding = '10px 15px'; 
            removeButton.style.cursor = 'pointer'; 
            removeButton.style.margin = '5%';
            removeButton.style.width = '15%';
            removeButton.style.borderRadius = '5px';
            removeButton.addEventListener('click', function() {
                removeFromCart(index);
            });

            itemElement.appendChild(removeButton);
            cartContent.appendChild(itemElement);
        });
        
        document.getElementById('cart-count').textContent = cart.length;
    }

    // Расчет и вывод общей суммы
    const totalPrice = cart.reduce((total, item) => total + item.price, 0);
    document.getElementById('total-price').textContent = `Итого: ${totalPrice.toFixed(2)} ₽`; // Форматирование общей суммы
}

function removeFromCart(index) {
    cart.splice(index, 1);
    updateCart(); 
    saveCart(); 
}

function saveCart() {
    localStorage.setItem('cart', JSON.stringify(cart));
}

// Начальная загрузка информации о корзине
updateCart();