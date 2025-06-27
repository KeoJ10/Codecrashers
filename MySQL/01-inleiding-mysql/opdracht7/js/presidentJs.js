document.addEventListener('DOMContentLoaded', function() {
    const presidents = document.querySelectorAll('.president-list');
    presidents.forEach(function(president) {
        president.ondblclick = function() {
            if (this.style.color === 'white') {
                this.style.color = '';
            } else {
                this.style.color = 'white';
            }
        };
    });
});