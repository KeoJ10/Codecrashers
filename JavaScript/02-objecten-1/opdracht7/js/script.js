let dkc = "Donkey Kong Country";
for (let i = dkc.length; i <= 30; i++) {
    dkc += ".";
}

const anthem = "God Save the Queen";
const replace = anthem.replace("Queen", "King");

const lyrics1 = "I'm blue,";
const lyrics2 = "Da ba dee da ba di";
const lyricsSpace = lyrics2 + " ";

const yoda = "you must have patience my young Padawan";

const newSentence = yoda.replace("you must have patience", "patience you must have");

document.getElementById("game").innerHTML = dkc;
document.getElementById("anthem").innerHTML = replace;
document.getElementById("lyrics").innerHTML = lyrics1 + " " + lyricsSpace.repeat(7);
document.getElementById("patience").innerHTML = newSentence;
