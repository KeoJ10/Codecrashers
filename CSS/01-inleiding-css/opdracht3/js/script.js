"use strict";

const inkoopprijs = 3.00;
const winstmarge = 2.50;
const btw = 1.21;
let hoeveelheid = 5;

/* Je eigen formule hier */
let totaalbedrag = inkoopprijs + winstmarge * btw * hoeveelheid;

alert(totaalbedrag);