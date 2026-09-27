const word = document.getElementById("title").innerHTML;
const cols = document.querySelectorAll(".col");
const headRows = document.querySelectorAll(".headRow");
const rows = document.querySelectorAll(".row");

rows.forEach((row, index) => {
    const col = cols[index % 4];
    const headRow = headRows[Math.floor(index / 4)];

    const selectedCol = Number(col.innerHTML);
    const selectedRow = Number(headRow.innerHTML);

    row.innerHTML = word.substring(selectedCol, selectedRow);
});
