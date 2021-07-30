if (document.readyState == 'loading') {
    document.addEventListener('DOMContentLoaded', ready)
} else {
    ready()
}

function ready() {
    var removeCartItemButtons = document.getElementsByClassName('btn-danger')
    for (var i = 0; i < removeCartItemButtons.length; i++) {
        var button = removeCartItemButtons[i]
        button.addEventListener('click', removeCartItem)
    }

    var quantityInputs = document.getElementsByClassName('cart-quantity-input')
    for (var i = 0; i < quantityInputs.length; i++) {
        var input = quantityInputs[i]
        input.addEventListener('change', quantityChanged)
    }

    var addToCartButtons = document.getElementsByClassName('shop-item-button')
    for (var i = 0; i < addToCartButtons.length; i++) {
        var button = addToCartButtons[i]
        button.addEventListener('click', addToCartClicked)
    }

    document.getElementsByClassName('btn-purchase')[0].addEventListener('click', purchaseClicked)
}

function purchaseClicked() {
	/*var quan_item = null;
	var price_item = null;
	var item_name = null;
	var count = document.querySelectorAll('.cart-quantity-input').length;
	for(var i = 0; i < count; i++){
		quan_item = document.getElementsByClassName('cart-quantity-input')[i];
		item_name = quan_item.parentElement.parentElement.firstElementChild.lastElementChild.innerHTML;
		if(item_name == "Bread"){
			price_item = Number(quan_item.value) * 12.99;
			console.log(price_item);
			console.log(bread_quantity);
			document.getElementById('bread_price').value = price_item;
			document.getElementById('bread_quantity').value = quan_item.value;
		}
	}*/
}

function removeCartItem(event) {
    var buttonClicked = event.target
    buttonClicked.parentElement.parentElement.remove()
    updateCartTotal()
}

function quantityChanged(event) {
    var input = event.target
    if (isNaN(input.value) || input.value <= 0) {
        input.value = 1
    }
	if(input.value > 20){
		alert('You cannot purchase more than 20 in a single transaction')
		input.value = 20
	}
    updateCartTotal()
}

function addToCartClicked(event) {
    var button = event.target
    var shopItem = button.parentElement.parentElement
    var title = shopItem.getElementsByClassName('shop-item-title')[0].innerText
    var price = shopItem.getElementsByClassName('shop-item-price')[0].innerText
    var imageSrc = shopItem.getElementsByClassName('shop-item-image')[0].src
    addItemToCart(title, price, imageSrc)
    updateCartTotal()
}

function addItemToCart(title, price, imageSrc) {
    var cartRow = document.createElement('div')
    cartRow.classList.add('cart-row')
    var cartItems = document.getElementsByClassName('cart-items')[0]
    var cartItemNames = cartItems.getElementsByClassName('cart-item-title')
    for (var i = 0; i < cartItemNames.length; i++) {
        if (cartItemNames[i].innerText == title) {
			var quantity = document.getElementsByClassName('cart-quantity-input')[i].value;
			var total = null;
			if(title == 'Bread'){
				sliderValue = document.getElementById('number').innerHTML
				total = Number(sliderValue) + Number(quantity);
				if(total > 20){
					alert('You cannot purchase more than 20 in a single transaction')
					document.getElementsByClassName('cart-quantity-input')[i].value = 20;
				} else {
					document.getElementsByClassName('cart-quantity-input')[i].value = total;
				}
			} else if(title == 'Milk'){
				sliderValue = document.getElementById('number2').innerHTML
				total = Number(sliderValue) + Number(quantity);
				if(total > 20){
					alert('You cannot purchase more than 20 in a single transaction')
					document.getElementsByClassName('cart-quantity-input')[i].value = 20;
				} else {
					document.getElementsByClassName('cart-quantity-input')[i].value = total;
				}
			} else if(title == 'Fruit'){
				sliderValue = document.getElementById('number3').innerHTML
				total = Number(sliderValue) + Number(quantity);
				if(total > 20){
					alert('You cannot purchase more than 20 in a single transaction')
					document.getElementsByClassName('cart-quantity-input')[i].value = 20;
				} else {
					document.getElementsByClassName('cart-quantity-input')[i].value = total;
				}
			} else if(title == 'Crisps'){
				sliderValue = document.getElementById('number4').innerHTML
				total = Number(sliderValue) + Number(quantity);
				if(total > 20){
					alert('You cannot purchase more than 20 in a single transaction')
					document.getElementsByClassName('cart-quantity-input')[i].value = 20;
				} else {
					document.getElementsByClassName('cart-quantity-input')[i].value = total;
				}
			}
            return
        }
    }
    var cartRowContents = `
        <div class="cart-item cart-column">
            <img class="cart-item-image" src="${imageSrc}" width="100" height="100">
            <span class="cart-item-title">${title}</span>
        </div>
        <span class="cart-price cart-column">${price}</span>
        <div class="cart-quantity cart-column">
            <input class="cart-quantity-input" type="number" value="1">
            <button class="btn btn-danger" type="button">REMOVE</button>
        </div>`
    cartRow.innerHTML = cartRowContents
    cartItems.append(cartRow)
    cartRow.getElementsByClassName('btn-danger')[0].addEventListener('click', removeCartItem)
    cartRow.getElementsByClassName('cart-quantity-input')[0].addEventListener('change', quantityChanged)
	var count = document.querySelectorAll('.cart-quantity-input').length;
	var quantity = document.getElementsByClassName('cart-quantity-input')[count-1]
	var sliderValue = null;
	if(title == 'Bread'){
		sliderValue = document.getElementById('number').innerHTML
		quantity.value = sliderValue
	} else if(title == 'Milk'){
		sliderValue = document.getElementById('number2').innerHTML
		quantity.value = sliderValue
	} else if(title == 'Fruit'){
		sliderValue = document.getElementById('number3').innerHTML
		quantity.value = sliderValue
	} else if(title == 'Crisps'){
		sliderValue = document.getElementById('number4').innerHTML
		quantity.value = sliderValue
	}
}

function updateCartTotal() {
    var cartItemContainer = document.getElementsByClassName('cart-items')[0]
    var cartRows = cartItemContainer.getElementsByClassName('cart-row')
    var total = 0
    for (var i = 0; i < cartRows.length; i++) {
        var cartRow = cartRows[i]
        var priceElement = cartRow.getElementsByClassName('cart-price')[0]
        var quantityElement = cartRow.getElementsByClassName('cart-quantity-input')[0]
        var price = parseFloat(priceElement.innerText.replace('£', ''))
        var quantity = quantityElement.value
        total = total + (price * quantity)
    }
    total = Math.round(total * 100) / 100
	total = total.toLocaleString('en-EN', { style: 'currency', currency: 'GBP' });
    document.getElementsByClassName('cart-total-price')[0].innerText = total
	document.getElementById('total_price').value = total
}
