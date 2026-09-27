const word = document.getElementById("title").innerHTML;
const cols = document.querySelectorAll(".col");
const headRows = document.querySelectorAll(".headRow");
const rows = document.querySelectorAll(".row");


rows.forEach(row => {
    cols.forEach(col => {

    headRows.forEach(headRow => {
        const selectedCol = col.innerHTML;
        const selectedRow = headRow.innerHTML;
        const trimmedword = word.substring(selectedCol, selectedRow);

            row.innerHTML = trimmedword;
        });
    });    
});
