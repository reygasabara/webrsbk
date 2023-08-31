const searchInput = document.getElementById("searchInput");
const searchIcon = document.getElementById("searchIcon");
const dataTable = document.getElementById("dataTable");
const rows = dataTable.getElementsByTagName("tr");

searchInput.addEventListener("input", function () {
    const searchTerm = searchInput.value.toLowerCase();
    searchIcon.classList.add("fa-beat-fade");

    for (let i = 1; i < rows.length; i++) {
        const rowData = rows[i].textContent.toLowerCase();
        if (rowData.includes(searchTerm)) {
            rows[i].style.display = "";
        } else {
            rows[i].style.display = "none";
        }
    }
});

searchInput.addEventListener("blur", function () {
    searchIcon.classList.remove("fa-beat-fade");
});
