/*************** Setting initial quantities ****************/
let quantities = Array.from(document.querySelectorAll('.qte'))
for (let quantity of quantities){
    quantity.setAttribute('value',1)
}

/*************** Setting initial prices ****************/
var price= [];
var pu=[];

// Assigning individual prices to each item
price[1]=15000; // 1st item
price[2]=25000; // 2nd item
price[3]=45000; // 3rd item

// Assigning individual unit prices to each item
pu[1]=15000; // 1st item
pu[2]=25000; // 2nd item
pu[3]=45000; // 3rd item

// Calculating total price
let total = price[1] + price[2] + price[3];

// Displaying initial prices
document.querySelector('.price-1').innerHTML=price[1]+' lkr';
document.querySelector('.price-2').innerHTML=price[2]+' lkr';
document.querySelector('.price-3').innerHTML=price[3]+' lkr';

/*************** Total price ****************/
document.querySelector('.total').innerHTML=total+' lkr';

/*************** Shopping items ****************/

/************ + button *************/
for(let i=1;i<=3;i++){
  document.querySelector(`.item-${i} > .plus-btn`)
.addEventListener("click", function(e) {
    document.querySelector(`.qte-${i}`).setAttribute('value',
    Number(document.querySelector(`.qte-${i}`).getAttribute('value'))+1);
    price[i]=price[i]+pu[i];
    total=total+pu[i];
    document.querySelector(`.price-${i}`).innerHTML=price[i]+' lkr';
    document.querySelector('.total').innerHTML=total+' lkr';
});
}

/************ - button *************/
for (let i=1;i<=3;i++){
  document.querySelector(`.item-${i} > .minus-btn`)
.addEventListener("click", function(e) {
    if(Number(document.querySelector(`.qte-${i}`).getAttribute('value')) >1){
        document.querySelector(`.qte-${i}`).setAttribute('value',
        Number(document.querySelector(`.qte-${i}`).getAttribute('value'))-1);
        price[i]=price[i]-pu[i];
        total=total-pu[i];
        document.querySelector(`.price-${i}`).innerHTML=price[i]+' lkr';
        document.querySelector('.total').innerHTML=total+' lkr';
    } else {
        document.querySelector(`.qte-${i}`).setAttribute('value',1);
    }
    
});
}

/*************** Icon close items ****************/
for(let i=1;i<=3;i++){
document.querySelector(`.icon-${i}`)
       .addEventListener("click", function(e) {
        total=total-price[i];
        document.querySelector('.total').innerHTML=total+' lkr';
        document.querySelector(`.product-${i}`).remove();
});
}

/*************** Icon Love ****************/
let hearts = Array.from(document.querySelectorAll('.fa-heart'))
for (let heart of hearts){
    heart.addEventListener("click", function(e) {
        heart.style.setProperty('color','red')
});
}
