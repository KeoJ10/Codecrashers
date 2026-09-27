const entertainment = ["Severance", "Avatar the Last Airbender", "Breaking Bad", "Burning", "Attack on Titan"];

entertainment[4] = "Dune";

const entertainmentList = document.getElementById("entertainment-list");

entertainment.forEach(item => {
    const li = document.getElementsByTagName("li")[0];
    li.textContent = item;
    entertainmentList.appendChild(li);
});
document.getElementById("length").textContent = entertainment.length;