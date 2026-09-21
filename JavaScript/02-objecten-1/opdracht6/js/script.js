const answer = prompt("Kies een kommagetal uit met vier cijfers voor de komma en vier cijfers na de komma", "1234,5678"); 
const toNumber = Number(answer.replace(",", "."));
const multiply = toNumber * 2;
document.getElementById("answer").innerHTML = toNumber;
document.getElementById("3digits").innerHTML = toNumber.toFixed(3);
document.getElementById("1digit").innerHTML = toNumber.toFixed(1);
document.getElementById("multiply").innerHTML = multiply.toFixed(1);
document.getElementById("random").innerHTML = (toNumber / Math.random()).toFixed(2);
