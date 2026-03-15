const quantities = document.querySelectorAll(".qty");

quantities.forEach(function(input){

input.addEventListener("input", function(){

let quantity = parseInt(this.value);

if(quantity < 0){
alert("Quantity cannot be negative");
this.value = 0;
quantity = 0;
}

let price = parseInt(this.dataset.price);

let total = price * quantity;

let totalField = this.parentElement.nextElementSibling.querySelector(".total");

totalField.value = total;

if(total > 1000){
alert("You are eligible for a gift coupon!");
}

});

});