'use strict';

const urlParams = new URLSearchParams(window.location.search);

const filters = document.querySelectorAll('.filter__radio');

if (filters) {
    const category = urlParams.get('category');
    const price = urlParams.get('price');

    filters.forEach(filter => {
        const filterValue = filter.getAttribute('value');

        if (filterValue === category || filterValue === price) {
            filter.setAttribute('checked', 'checked');
            return;
        } else {
            filter.removeAttribute('checked');
        }
    });
}
