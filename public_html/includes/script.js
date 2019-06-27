'use strict';
const button = document.querySelector("input[type=button]");
button.addEventListener("click", fn);

function fn (){
    let departure = document.getElementById("departure").value;
    let arrival = document.getElementById("arrival").value;
    let traukinys = document.getElementById("train").value;
    let price = document.getElementById("price").value;

    let td_departure = document.getElementById("departure_time");
    let td_arrival = document.getElementById("arrival_time");
    let td_new_train = document.getElementById("train_number");
    let td_price = document.getElementById("new_price");

    td_departure.innerHTML = departure;
    td_arrival.innerHTML = arrival;
    td_new_train.innerHTML = traukinys;
    td_price.innerHTML = price;

}