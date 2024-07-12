<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Form</title>
    <style>
        body {

            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #000;
            /* Black background */
            color: #fff;
            /* Text color */
        }


        .payment-form {
            background-color: rgba(0, 0, 0, 0.8);
            /* Semi-transparent black background */
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0px 0px 5px rgba(203, 203, 203);
            /* White box shadow */
            width: 500px;
            text-align: center;


        }

        .payment-form label {
            display: block;
            margin-bottom: 10px;
        }

        .payment-form input[type="text"],
        .payment-form input[type="email"],
        .payment-form select {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #FFFFFF;
            /* White border */
            border-radius: 4px;
            box-sizing: border-box;
            background-color: #000;
            /* Black background */
            color: #fff;
            /* Text color */
        }

        .payment-form button {
            display: block;
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-bottom: 10px;
        }

        .payment-form button:hover {
            background-color: #0056b3;
        }

        .remove-product-btn {
            background-color: #dc3545;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .remove-product-btn:hover {
            background-color: #c82333;
        }

        /* Hide product options by default */
        .product-options {
            display: none;
        }

        /* Hide coupon input field by default */
        #couponField {
            display: none;
        }

        .div3 {
            display: flex;
            justify-content: space-between;
        }

        .d4 {
            margin-right: 10px;
            margin-left: 10px;
            height: 500px;
        }
    </style>
</head>

<body>

    <div class="payment-form">
        @if (isset($message))
            <p style='color:green;'>{{ $message }}</p>
        @elseif (isset($error))
            <p style='color:red;'>{{ $error }}</p>
        @endif

        <form class="div3" id="paymentForm" method="POST" action="{{ route('make.payment') }}">
            @csrf

            <div class="d1">
                <label for="name">Name:</label>
                <input type="text" name="name" required>

                <label for="phone">Phone:</label>
                <input type="text" name="phone" required>

                <label for="email">Email:</label>
                <input type="email" name="email" required>

                <label for="description">Description:</label>
                <input type="text" name="description" required>
            </div>

            <div class="d4">
                <div id="products">
                    <div class="product">
                        <label for="product">Product:</label>
                        <select name="product[]" required onchange="toggleProductOptions(this)">
                            <option value="">Select product</option>
                            <option value="HFT Challenge">HFT Challenge</option>
                            <option value="Instant Funding">Instant Funding</option>
                        </select>

                        <div class="product-options hft-challenge-options">
                            <label for="hft_challenge_option_1">HFT Challenge Options:</label>
                            <select name="hft_challenge_option_1" required>
                                <option value="Type 1|10000">HFT Challenge - $10K</option>
                                <option value="Type 2|25000">HFT Challenge - $25K</option>
                                <option value="Type 3|50000">HFT Challenge - $50K</option>
                                <option value="Type 4|100000">HFT Challenge - $100K</option>
                                <option value="Type 5|200000">HFT Challenge - $200K</option>
                                <option value="Type 6|400000">HFT Challenge - $400K</option>
                            </select>
                            <label for="quantity_1">Quantity:</label>
                            <input type="number" name="quantity[]" min="1" value="1" required>
                            <label for="orderId"> Product ID:</label>
                            <input type="text" name="orderId" readonly>
                        </div>

                        <div class="product-options instant-funding-options">
                            <label for="instant_funding_option_1">Instant Funding Options:</label>
                            <select name="instant_funding_option_1" required>
                                <option value="Type 1|10000">Instant Funding - $10K</option>
                                <option value="Type 2|25000">Instant Funding - $25K</option>
                            </select>
                            <label for="quantity_1">Quantity:</label>
                            <input type="number" name="quantity[]" min="1" value="1" required>

                            <label for="orderId"> Product ID:</label>
                            <input type="text" name="orderId" value="" readonly>

                        </div>
                        {{-- <hr> --}}
                    </div>
                </div>
            </div>

            <div class="d2">
                <button type="button" onclick="addProduct()">Add Another Product</button>

                <button type="button" onclick="showCouponInput()">Add Coupon</button>

                <div id="couponField">
                    <label for="coupon">Coupon Code:</label>
                    <input type="text" name="coupon" id="coupon">
                </div>

                <label for="currency">Currency:</label>
                <select name="currency" id="currency" onchange="calculateTotalAmount()" required>
                    <option value="USD">US Dollar (USD)</option>
                    <option value="EUR">Euro (EUR)</option>
                    <option value="GBP">British Pound (GBP)</option>
                    <option value="JPY">Japanese Yen (JPY)</option>
                    <option value="CAD">Canadian Dollar (CAD)</option>
                    <option value="AUD">Australian Dollar (AUD)</option>
                    <option value="CHF">Swiss Franc (CHF)</option>
                    <option value="CNY">Chinese Yuan (CNY)</option>
                    <option value="INR">Indian Rupee (INR)</option>
                    <option value="RUB">Russian Ruble (RUB)</option>
                    <option value="BDT">Bangladeshi Taka (BDT)</option>
                    <!-- Add more currencies as needed -->
                </select>

                <label for="amount">Total Amount:</label>
                <input type="text" name="amount" id="totalAmount" readonly>

                <button type="submit">Pay Now</button>
            </div>
        </form>
    </div>

    <script>
        // Function to generate a UUID
        function generateUUID() {
            var dt = new Date().getTime();
            var uuid = 'xxxxxxxx-xxxx-4xxx-yxxx-xxxxxxxxxxxx'.replace(/[xy]/g, function(c) {
                var r = (dt + Math.random() * 16) % 16 | 0;
                dt = Math.floor(dt / 16);
                return (c == 'x' ? r : (r & 0x3 | 0x8)).toString(16);
            });
            return uuid;
        }

        // Function to populate Product ID when a product option is selected
        function populateProductID(selectElement) {
            var productIDInput = selectElement.parentNode.querySelector('[name="orderId"]');
            if (productIDInput) {
                // Generate a UUID
                var uuid = generateUUID();
                // Populate the Product ID input field
                productIDInput.value = uuid;
            }
        }

        // Attach event listeners to product select elements to populate Product ID
        var productSelects = document.querySelectorAll('[name^="product"]');
        productSelects.forEach(function(selectElement) {
            selectElement.addEventListener('change', function() {
                populateProductID(selectElement);
            });
        });

        function addProduct() {
            var productsDiv = document.getElementById('products');
            var productCount = productsDiv.querySelectorAll('.product').length + 1;

            var productDiv = document.createElement('div');
            productDiv.className = 'product';

            productDiv.innerHTML = `
            <label for="product_${productCount}">Product:</label>
            <select name="product[]" required onchange="toggleProductOptions(this)">
                <option value="">Select product</option>
                <option value="HFT Challenge">HFT Challenge</option>
                <option value="Instant Funding">Instant Funding</option>
            </select>

            <div class="product-options hft-challenge-options">
                <label for="hft_challenge_option_${productCount}">HFT Challenge Options:</label>
                <select name="hft_challenge_option_${productCount}" required>
                    <option value="Type 1|10000">HFT Challenge - $10K</option>
                    <option value="Type 2|25000">HFT Challenge - $25K</option>
                </select>
                <label for="quantity_${productCount}">Quantity:</label>
                <input type="number" name="quantity[]" min="1" value="1" required>
               
            </div>

            <div class="product-options instant-funding-options">
                <label for="instant_funding_option_${productCount}">Instant Funding Options:</label>
                <select name="instant_funding_option_${productCount}" required>
                    <option value="Type 1|10000">Instant Funding - $10K</option>
                    <option value="Type 2|25000">Instant Funding - $25K</option>
                </select>
                <label for="quantity_${productCount}">Quantity:</label>
                <input type="number" name="quantity[]" min="1" value="1" required>
                <label for="orderId"> Product ID:</label>
                <input type="text" name="orderId" readonly>
            </div>
       
            <button type="button" class="remove-product-btn" onclick="removeProduct(this)">Remove Product</button>
            <hr>
            `;

            productsDiv.appendChild(productDiv);
        }

        function toggleProductOptions(selectElement) {
            var productOptions = selectElement.parentNode.querySelectorAll('.product-options');
            for (var i = 0; i < productOptions.length; i++) {
                productOptions[i].style.display = 'none';
            }

            var selectedOption = selectElement.value.toLowerCase().replace(/\s+/g, '-');
            var selectedProductOptions = selectElement.parentNode.querySelector(`.${selectedOption}-options`);
            if (selectedProductOptions) {
                selectedProductOptions.style.display = 'block';
            }
        }

        function removeProduct(buttonElement) {
            var productDiv = buttonElement.parentNode;
            productDiv.parentNode.removeChild(productDiv);
        }

        function showCouponInput() {
            var couponField = document.getElementById('couponField');
            couponField.style.display = 'block';
        }

        document.getElementById('paymentForm').addEventListener('input', function() {
            calculateTotalAmount();
        });

        function calculateTotalAmount() {
            var totalAmount = 0;
            var products = document.getElementsByName('product[]');
            var quantities = document.getElementsByName('quantity[]');

            for (var i = 0; i < products.length; i++) {
                var selectedProduct = products[i].value;
                var price = 0;
                var productOptions = products[i].parentNode.querySelector(
                    `.${selectedProduct.toLowerCase().replace(/\s+/g, '-')}-options`);
                if (productOptions) {
                    var selectedOption = productOptions.querySelector('select').value;
                    price = parseFloat(selectedOption.split('|')[1]) || 0;
                }
                var quantity = parseInt(quantities[i].value) || 1;
                totalAmount += price * quantity;
            }

            var discount = 0;
            var coupon = document.getElementById('coupon').value.trim();

            if (coupon === '12QE12') {
                discount = totalAmount * 0.1; // 10% discount
            }

            var discountedAmount = totalAmount - discount;

            document.getElementById('totalAmount').value = discountedAmount.toFixed(2);
            document.getElementById('discount').value = discount.toFixed(2);
        }
    </script>

</body>

</html>
