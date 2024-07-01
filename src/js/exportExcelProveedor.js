document.getElementById('exportButton').addEventListener('click', function() {
    exportTableToExcel('menuTable', 'Reporte_Proveedor');
  });

  function exportTableToExcel(tableID, filename = '') {
    let table = document.getElementById(tableID);
    let workbook = XLSX.utils.table_to_book(table, { sheet: "Sheet1" });

    // Obtener la hoja de trabajo
    let sheet = workbook.Sheets[workbook.SheetNames[0]];

    // Aplicar negrita a los encabezados (de A1 a D1) y definir ancho de columna
    let range = XLSX.utils.decode_range(sheet['!ref']);
    for (let C = range.s.c; C <= range.e.c; ++C) {
      let cell_address = { c: C, r: 0 }; // Fila 0 es la primera fila (encabezados)
      let cell_ref = XLSX.utils.encode_cell(cell_address);
      let cell = sheet[cell_ref];

      // Aplicar negrita
      if (!cell || cell.t === 's') continue; // Saltar celdas no vacías
      if (!cell.s) cell.s = {};
      if (!cell.s.font) cell.s.font = {};
      cell.s.font.bold = true;
    };

    // Definir ancho de columna
    workbook.Sheets["Sheet1"]["!cols"] = [
     { wch: 10 }, 
     { wch: 30 }, 
     { wch: 20 }
    ];

    // Descargar el archivo Excel
    XLSX.writeFile(workbook, filename ? filename + '.xlsx' : 'excel_data.xlsx');
  }
