// Select thead titles from Dom
const headTitleName = document.querySelector(
  ".responsive-table__head__title--name"
);
const headTitleStatus = document.querySelector(
  ".responsive-table__head__title--status"
);

// Select tbody text from Dom
const bodyTextName = document.querySelectorAll(
  ".responsive-table__body__text--name"
);
const bodyTextStatus = document.querySelectorAll(
  ".responsive-table__body__text--status"
);

// Select all tbody table row from Dom
const totalTableBodyRow = document.querySelectorAll(
  ".responsive-table__body .responsive-table__row"
);

// Get thead titles and append those into tbody table data items as a "data-title" attribute
for (let i = 0; i < totalTableBodyRow.length; i++) {
  bodyTextName[i].setAttribute("data-title", headTitleName.innerText);
  bodyTextStatus[i].setAttribute("data-title", headTitleStatus.innerText);
}
