const nu = new Date();
document.getElementById("time").textContent = nu.toLocaleTimeString();
document.getElementById("year").textContent = nu.getFullYear();
document.getElementById("day").textContent = nu.getDate();
document.getElementById("month").textContent = nu.getMonth() + 1;
