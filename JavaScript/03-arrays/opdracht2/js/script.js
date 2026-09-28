const planes =[
	"Ixalan",
	"Tarkir",
	"Ravnica",
	"Dominaria",
	"Theros",
	"Amonkhet",
	"Mirrodin",
	"Innistrad"
];

planes.unshift("Kaladesh");
planes.splice(4, 1);
planes.splice(3, 0, "Lorwyn");
planes.sort();
planes.reverse();
const planeList = document.getElementById("plane-list");

console.log(planes);
planes.forEach(plane => {
    const li = document.createElement("li");
    li.textContent = plane;
    planeList.appendChild(li);
});
