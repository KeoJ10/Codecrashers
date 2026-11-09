let a, b;

const biggestCitiesBenelux = [
	"Brussel",
	"Amsterdam",
	"Rotterdam",
	"Den Haag",
	"Antwerpen",
	"Utrecht",
	"Gent",
	"Eindhoven",
	"Groningen",
	"Tilburg"
];

[a, b] = biggestCitiesBenelux;

document.getElementById("cities").textContent = `The biggest cities in the Benelux are: ${a} and ${b}.`;


const myPets = [
	"Hond",
	"Kat",
	"Konijn",
	[
		"Gladhaar cavia",
		"Borstel cavia",
		"Rex cavia",
		"Coronet cavia"
	]
];

const [dog, cat, rabbit, guineaPigs] = myPets;
const [smooth, brush, rex, coronet] = guineaPigs;

document.getElementById("pets").textContent = `Mijn favorieten huisdieren zijn: ${dog}, ${cat}, ${rabbit}, ${smooth}, ${brush}, ${rex}, en de ${coronet}.`;