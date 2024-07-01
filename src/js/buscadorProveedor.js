//colInd es un array de índices de columna a revisar
function barraBusqueda(idElement) {
    var input, filter, table, tr, td, i, j, txtValue;
    var colInd = [1, 2]; // Índices de columnas a revisar
    input = document.getElementById(idElement);
    filter = input.value.toUpperCase();
    table = document.getElementById("menuTable");
    tr = table.getElementsByTagName("tr");

    for (i = 1; i < tr.length; i++) { // Empieza en 1 para saltar el encabezado
        var display = false;
        for (j = 0; j < colInd.length; j++) {
            td = tr[i].getElementsByTagName("td")[colInd[j]];
            if (td) {
                txtValue = td.textContent || td.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    display = true;
                    break;
                }
            }
        }
        tr[i].style.display = display ? "" : "none";
    }
}