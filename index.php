<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KickflipKings Webshop</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f4f4;
            color: #333;
            margin: 0;
            padding: 0;
        }
        header {
            background-color: #353531;
            color: #ec4e20;
            text-align: center;
            padding: 10px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        header img {
            max-width: 100px;
            margin-bottom: 5px;
        }
        header h1 {
            margin: 0;
            font-size: 1.8em;
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }
        .configurator {
            display: grid;
            grid-template-columns: 350px 1fr;
            gap: 30px;
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
            margin-bottom: 20px;
            align-items: start;
        }
        .selections-container {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }
        .selection-section {
            width: 100%;
        }
        .selection-section label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
            color: #353531;
            font-size: 14px;
        }
        select {
            width: 100%;
            padding: 10px;
            border: 2px solid #ddd;
            border-radius: 5px;
            font-size: 15px;
            transition: border-color 0.3s;
            background-color: white;
            cursor: pointer;
        }
        select:focus {
            border-color: #ec4e20;
            outline: none;
        }
        select:hover {
            border-color: #ec4e20;
        }
        .product-display {
            text-align: center;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }
        .images {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 20px;
            margin-bottom: 30px;
            min-height: 200px;
        }
        .product-display img {
            max-width: 200px;
            height: auto;
            border-radius: 10px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.2);
        }
        .product-info {
            background-color: #f9f9f9;
            padding: 20px;
            border-radius: 8px;
            margin-bottom: 20px;
            text-align: left;
        }
        .product-info p {
            margin: 8px 0;
            line-height: 1.6;
        }
        .total-price {
            font-size: 1.8em;
            font-weight: bold;
            color: #ec4e20;
            margin-top: 15px;
        }
        .order-btn {
            background-color: #ec4e20;
            color: white;
            border: none;
            padding: 15px 30px;
            font-size: 18px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s, transform 0.2s;
            width: 100%;
            margin-top: 20px;
        }
        .order-btn:hover {
            background-color: #d13d1b;
            transform: translateY(-2px);
        }
        .order-btn:active {
            transform: translateY(0);
        }
        .cart {
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
            margin-bottom: 20px;
        }
        .cart h3 {
            color: #ec4e20;
            margin-bottom: 15px;
        }
        .cart-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 0;
            border-bottom: 1px solid #eee;
        }
        .cart-item:last-child {
            border-bottom: none;
        }
        .cart-total {
            font-size: 1.5em;
            font-weight: bold;
            color: #ec4e20;
            text-align: right;
            margin-top: 15px;
        }
        .add-to-cart-btn {
            background-color: rgb(214, 57, 22);
            color: white;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
            margin-top: 10px;
        }
        .add-to-cart-btn:hover {
            background-color: rgb(214, 57, 22);
        }
        .thank-you {
            display: none;
            text-align: center;
            background-color: white;
            padding: 50px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        }
        .thank-you h2 {
            color: #ec4e20;
            margin-bottom: 20px;
        }
        .restart-btn {
            background-color: #353531;
            color: white;
            border: none;
            padding: 12px 24px;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
            margin-top: 20px;
        }
        .restart-btn:hover {
            background-color: #1a1a1a;
        }
        
      
        @media (max-width: 768px) {
            .configurator {
                grid-template-columns: 1fr;
                gap: 20px;
            }
            .selections-container {
                order: 2;
            }
            .product-display {
                order: 1;
            }
        }
    </style>
</head>
<body>
    <?php include 'header.php'; ?>

    <div class="container">
        <div class="configurator" id="configurator">
          
            <div class="selections-container">
                <div class="selection-section">
                    <label for="product">product:</label>
                    <select id="product">
                        <option value=""></option>
                    </select>
                </div>
                <div class="selection-section">
                    <label for="symbol">symbool:</label>
                    <select id="symbol">
                        <option value=""></option>
                    </select>
                </div>
                <div class="selection-section">
                    <label for="colour">kleur:</label>
                    <select id="colour">
                        <option value=""></option>
                    </select>
                </div>
            </div>

        
            <div class="product-display">
                <div class="images">
                    <img id="product-image" src="" alt="Product" style="display: none;">
                    <img id="symbol-image" src="" alt="Symbol" style="display: none; max-width: 80px;">
                </div>
                <div class="product-info">
                    <p id="product-info">Maak je keuzes om je product te zien</p>
                    <p id="total-price" class="total-price"></p>
                </div>
                <button class="add-to-cart-btn" id="add-to-cart-btn">Toevoegen aan winkelmand</button>
                <button class="order-btn" id="order-btn">Bestel nu</button>
            </div>
        </div>

        <div class="cart" id="cart">
            <h3>Winkelmand</h3>
            <div id="cart-items"></div>
            <div class="cart-total" id="cart-total">Totaal: €0.00</div>
        </div>

        <div class="thank-you" id="thank-you">
            <h2> Bedankt voor je bestelling!</h2>
            <p>Je order is succesvol ontvangen en wordt binnenkort verwerkt.</p>
            <button class="restart-btn" id="restart-btn">Maak nog een bestelling</button>
        </div>
    </div>

    <?php include 'footer.php'; ?>

    <script>
        let data = {};
        let selectedProduct = null;
        let selectedSymbol = null;
        let selectedColour = null;
        let cart = [];

      
        fetch('assets/dataset.json')
            .then(response => response.json())
            .then(json => {
                data = json;
                populateDropdowns();
            })
            .catch(error => console.error('Error loading data:', error));

        function populateDropdowns() {
            const productSelect = document.getElementById('product');
            const symbolSelect = document.getElementById('symbol');
            const colourSelect = document.getElementById('colour');

      //products
            data.products.forEach(product => {
                const option = document.createElement('option');
                option.value = product.id;
                option.textContent = product.name;
                productSelect.appendChild(option);
            });

       // symbols
            data.symbols.forEach(symbol => {
                const option = document.createElement('option');
                option.value = symbol.id;
                option.textContent = symbol.name;
                symbolSelect.appendChild(option);
            });

         // kleur
            data.colours.forEach(colour => {
                const option = document.createElement('option');
                option.value = colour.id;
                option.textContent = colour.name;
                colourSelect.appendChild(option);
            });

          
            productSelect.addEventListener('change', updateSelection);
            symbolSelect.addEventListener('change', updateSelection);
            colourSelect.addEventListener('change', updateSelection);
        }

        function updateSelection() {
            selectedProduct = data.products.find(p => p.id == document.getElementById('product').value);
            selectedSymbol = data.symbols.find(s => s.id == document.getElementById('symbol').value);
            selectedColour = data.colours.find(c => c.id == document.getElementById('colour').value);

            updateDisplay();
        }

        function updateDisplay() {
            const img = document.getElementById('product-image');
            const symbolImg = document.getElementById('symbol-image');
            const info = document.getElementById('product-info');
            const price = document.getElementById('total-price');

            if (selectedProduct && selectedColour) {
                const colourName = selectedColour.name;
                img.src = `assets/products/${selectedProduct.name}-${colourName}.png`;
                img.style.display = 'block';
                img.alt = `${selectedProduct.name} in ${colourName}`;
            } else if (selectedProduct) {
                img.src = `assets/products/${selectedProduct.name}.png`;
                img.style.display = 'block';
                img.alt = selectedProduct.name;
            } else {
                img.style.display = 'none';
            }

            if (selectedSymbol) {
                symbolImg.src = `assets/symbols/symbol-${selectedSymbol.name}.png`;
                symbolImg.style.display = 'inline-block';
                symbolImg.alt = selectedSymbol.name;
            } else {
                symbolImg.style.display = 'none';
            }

            let infoText = '';
            if (selectedProduct) infoText += `<strong>Product:</strong> ${selectedProduct.name}<br>`;
            if (selectedSymbol) infoText += `<strong>Symbool:</strong> ${selectedSymbol.name}<br>`;
            if (selectedColour) infoText += `<strong>Kleur:</strong> ${selectedColour.name}`;
            
            if (infoText) {
                info.innerHTML = infoText;
            } else {
                info.innerHTML = 'Maak je keuzes om je product te zien';
            }

            if (selectedProduct && selectedColour) {
                const total = selectedProduct.price + selectedColour.price_add;
                price.textContent = `€${total.toFixed(2)}`;
            } else {
                price.textContent = '';
            }
        }

        document.getElementById('order-btn').addEventListener('click', () => {
            if (!selectedProduct || !selectedSymbol || !selectedColour) {
                alert('Selecteer alle opties voordat je bestelt.');
                return;
            }

            const orderData = {
                producttype: selectedProduct.id,
                symbol: selectedSymbol.id,
                colour: selectedColour.id
               
            };

            fetch('https://localhost/skills/orders', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify(orderData)
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    document.getElementById('configurator').style.display = 'none';
                    document.getElementById('thank-you').style.display = 'block';
                } else {
                    alert('Er is een fout opgetreden bij het plaatsen van de bestelling.');
                }
            })
            .catch(error => {
                console.error('Error:', error);
                document.getElementById('configurator').style.display = 'none';
                document.getElementById('thank-you').style.display = 'block';
            });
        });

        function addToCart() {
            if (!selectedProduct || !selectedSymbol || !selectedColour) {
                alert('Selecteer alle opties voordat je toevoegt aan de winkelmand.');
                return;
            }

            const item = {
                product: selectedProduct,
                symbol: selectedSymbol,
                colour: selectedColour,
                price: selectedProduct.price + selectedColour.price_add
            };

            cart.push(item);
            updateCartDisplay();

            document.getElementById('product').value = '';
            document.getElementById('symbol').value = '';
            document.getElementById('colour').value = '';
            selectedProduct = null;
            selectedSymbol = null;
            selectedColour = null;
            updateDisplay();
        }

        function updateCartDisplay() {
            const cartItems = document.getElementById('cart-items');
            const cartTotal = document.getElementById('cart-total');

            cartItems.innerHTML = '';
            let total = 0;

            cart.forEach((item, index) => {
                const itemDiv = document.createElement('div');
                itemDiv.className = 'cart-item';
                itemDiv.innerHTML = `
                    <span>${item.product.name} (${item.colour.name}) met ${item.symbol.name}</span>
                    <span>€${item.price.toFixed(2)}</span>
                `;
                cartItems.appendChild(itemDiv);
                total += item.price;
            });

            cartTotal.textContent = `Totaal: €${total.toFixed(2)}`;
        }

        document.getElementById('add-to-cart-btn').addEventListener('click', addToCart);

        document.getElementById('order-btn').addEventListener('click', () => {
            if (cart.length === 0) {
                alert('Voeg eerst producten toe aan de winkelmand.');
                return;
            }

            const orderData = cart.map(item => ({
                producttype: item.product.id,
                symbol: item.symbol.id,
                colour: item.colour.id
            }));

            fetch('https://localhost/skills/orders', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify(orderData)
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    document.getElementById('configurator').style.display = 'none';
                    document.getElementById('cart').style.display = 'none';
                    document.getElementById('thank-you').style.display = 'block';
                    cart = [];
                } else {
                    alert('Er is een fout opgetreden bij het plaatsen van de bestelling.');
                }
            })
            .catch(error => {
                console.error('Error:', error);
                document.getElementById('configurator').style.display = 'none';
                document.getElementById('cart').style.display = 'none';
                document.getElementById('thank-you').style.display = 'block';
                cart = [];
            });
        });

        document.getElementById('restart-btn').addEventListener('click', () => {
            document.getElementById('configurator').style.display = 'grid';
            document.getElementById('cart').style.display = 'block';
            document.getElementById('thank-you').style.display = 'none';
            document.getElementById('product').value = '';
            document.getElementById('symbol').value = '';
            document.getElementById('colour').value = '';
            selectedProduct = null;
            selectedSymbol = null;
            selectedColour = null;
            updateDisplay();
        });
    </script>
</body>
</html>
