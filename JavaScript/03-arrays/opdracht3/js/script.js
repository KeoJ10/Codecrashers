const hondachtigen = [
    "Hond",
    "Wolf",
    "Vos",
    "Jakhals",
    "Olifant"
];
const katachtigen = [
    "Kat",
    "Leeuw",
    "Tijger",
    "Lynx",
    "Poema"
];

const animalList = document.getElementById("animal-list");
const zoogdieren = hondachtigen.concat(katachtigen);
zoogdieren.splice(4, 1);
zoogdieren.push("Panter");
zoogdieren.push("Cheetah");


alert(zoogdieren.join("\n"));
const nieuwDier = prompt("voeg een dier toe");
zoogdieren.push(nieuwDier);

zoogdieren.forEach(animal => {
    const li = document.createElement("li");
    li.textContent = animal;
    animalList.appendChild(li);
});