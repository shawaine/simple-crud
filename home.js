// navbar buttons
const gotoHome = () => {
  window.location.assign("home.php");
};
const gotoEdit = () => {
  window.location.assign("edit.php");
};
const logout = () => {
  window.location.assign("logout.php");
};

// ordering for the table
const usernameFilter = document.querySelector("#username");
const dateFilter = document.querySelector("#datecreated");
const stateFilter = document.querySelector("#state");
// table

// selecting which order
const activate = type => {
  if (type === "username") {
    usernameFilter.checked = true;
    sortTable(0);
  } else if (type === "datecreated") {
    dateFilter.checked = true;
    sortTable(1);
  } else {
    stateFilter.checked = true;
    sortTable(2);
  }
};

// order by a table
function sortTable(theadIndex) {
  var table, rows, switching, i, x, y, shouldSwitch;
  table = document.getElementById("users-list");
  switching = true;
  /*Make a loop that will continue until
  no switching has been done:*/
  while (switching) {
    //start by saying: no switching is done:
    switching = false;
    rows = table.rows;
    /*Loop through all table rows (except the
    first, which contains table headers):*/
    for (i = 1; i < rows.length - 1; i++) {
      //start by saying there should be no switching:
      shouldSwitch = false;
      /*Get the two elements you want to compare,
      one from current row and one from the next:*/
      x = rows[i].getElementsByTagName("TD")[theadIndex];
      y = rows[i + 1].getElementsByTagName("TD")[theadIndex];
      //check if the two rows should switch place:
      if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
        //if so, mark as a switch and break the loop:
        shouldSwitch = true;
        break;
      }
    }
    if (shouldSwitch) {
      /*If a switch has been marked, make the switch
      and mark that a switch has been done:*/
      rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
      switching = true;
    }
  }
}
// edit users
const edit = () => {
  document.querySelector(".submit").click();
};
