<?php
require '../core/functions.php';
require '../core/script.php';

// [barang] plan to change
$barang = "SELECT * FROM barang WHERE kode_transaksi_pembeli IS NOT NULL AND kode_transaksi_supplier IS NULL";
$transaksi_pembeli = "SELECT * FROM transaksi_pembeli WHERE kode_petugas IS NULL";
$transaksi_supplier = "SELECT * FROM transaksi_supplier";
$petugas = "SELECT * FROM petugas";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="styles/petugas.css" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Petugas Page</title>
    <!-- Font Lexend -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@100..900&display=swap" rel="stylesheet">
</head>

<header class="nav-header">
    <div class="tabel-title-field">
        <h1>TABEL</h1>
        <h2 id="what-table">Petugas</h2>
    </div>
    <nav id="nav-pov-mode">
        <a href="pembeli.php">
            <h1>Pembeli</h1>
        </a>
        <a>
            <h1>Petugas</h1>
        </a>
        <a href="supplier.php">
            <h1>Supplier</h1>
        </a>
    </nav>
    <nav id="nav-kaerimashou">
        <a href="../index.php">
            <h1>Kaerimashou~</h1>
        </a>
    </nav>
</header>

<body>
    <div class="parallax-background-image"></div>
    <div class="table-field-wrapper">
        <div class="table-field">
            <div class="table-database" id="table-database-0">
                <div class="table-database-topsection">
                    <h1>Daftar Barang</h1>
                    <div class="material-text-box table-database-search">
                        <div class="group"> <input type="text" required="required" />
                            <label>Search</label>
                        </div>
                    </div>
                </div>
                <div class="table-wrapper">
                    <table></table>
                </div>
            </div>
            <div class="table-edit-row"> </div>
        </div>
        <div class="table-field">
            <div class="table-database" id="table-database-1">
                <div class="table-database-topsection">
                    <h1>Daftar Barang</h1>
                    <div class="material-text-box table-database-search">
                        <div class="group"> <input type="text" required="required" />
                            <label>Search</label>
                        </div>
                    </div>
                </div>
                <div class="table-wrapper">
                    <table></table>
                </div>
            </div>
            <div class="table-edit-row"> </div>
        </div>
    </div>

    <div class="form-add-data-filter"> </div>
    <div class="form-with-table">
        <div class="table-field">
            <div class="table-database" id="table-database-2">
                <div class="table-database-topsection">
                    <h1>Daftar Barang</h1>
                    <div class="material-text-box table-database-search">
                        <div class="group"> <input type="text" required="required" />
                            <label>Search</label>
                        </div>
                    </div>
                </div>
                <div class="table-wrapper">
                    <table></table>
                </div>
            </div>
            <div class="table-edit-row"> </div>
        </div>
        <div class="table-field">
            <div class="table-database" id="table-database-3">
                <div class="table-database-topsection">
                    <h1>Daftar Barang</h1>
                    <div class="material-text-box table-database-search">
                        <div class="group"> <input type="text" required="required" />
                            <label>Search</label>
                        </div>
                    </div>
                </div>
                <div class="table-wrapper">
                    <table></table>
                </div>
            </div>
            <div class="table-edit-row"> </div>
        </div>
    </div>

    <div class="form-add-data">
        <div class="top-bar-form-add-data">
            <h1>Boo Secret form(this is not doing anything)</h1>
        </div>
        <div class="form-add-data-fieldtext">
            <div class="value-editor">
                <div class="material-text-box">
                    <div class="group">
                        <input type="text" required="required" />
                        <label>Harga Total</label>
                    </div>
                </div>
                <div class="arrow-to-edited">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 15 15">
                        <path d="M8.293 2.293a1 1 0 0 1 1.414 0l4.5 4.5a1 1 0 0 1 0 1.414l-4.5 4.5a1 1 0 0 1-1.414-1.414L11 8.5H1.5a1 1 0 0 1 0-2H11L8.293 3.707a1 1 0 0 1 0-1.414" />
                    </svg>
                </div>
                <div class="material-text-box">
                    <div class="group">
                        <input type="text" required="required" />
                        <label>Kode Transaksi Supplier</label>
                        <div class="dropdown">
                            <div class="dropdown-btn">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                    <path d="M16.88 2.88a1.25 1.25 0 0 0-1.77 0L6.7 11.29a.996.996 0 0 0 0 1.41l8.41 8.41c.49.49 1.28.49 1.77 0s.49-1.28 0-1.77L9.54 12l7.35-7.35c.48-.49.48-1.28-.01-1.77" />
                                </svg>
                            </div>
                            <div class="dropdown-content">
                                <div class="dropdown-content-wrapper">
                                    Laaaa
                                </div>
                                <div class="dropdown-content-wrapper">
                                    Laaaaa
                                </div>
                                <div class="dropdown-content-wrapper">
                                    Laaaaa
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="material-text-box">
                <div class="group">
                    <input type="text" required="required" />
                    <label>Quantity</label>
                </div>
            </div>
            <div class="material-text-box">
                <div class="group">
                    <input type="text" required="required" />
                    <label>Kode Petugas</label>
                </div>
            </div>
            <div class="material-text-box">
                <div class="group">
                    <input type="text" required="required" />
                    <label>Kode Supplier</label>
                </div>
            </div>
            <!-- TODO: Add Date Selector -->
            <div class="material-text-box">
                <div class="group">
                    <input type="text" required="required" />
                    <label>Tanggal Transaksi</label>
                </div>
            </div>
        </div>
        <div class="btn-field-accept-cancle">
            <div class="btn-cancle" onclick="closeAddDataForm()">
                <h1>Discard</h1>
            </div>
            <div class="btn-accept" onclick="addAddDataForm()">
                <h1>Add</h1>
            </div>
        </div>
    </div>
</body>

<footer class=" nav-bottom" onclick="showFormWithTable()" onmousewheel="showAddDataForm()">
    <div id="btn-add">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48">
            <g stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="4">
                <path d="M39 6H9a3 3 0 0 0-3 3v30a3 3 0 0 0 3 3h30a3 3 0 0 0 3-3V9a3 3 0 0 0-3-3" />
                <path d="m21 31l5 4l8-10M14 15h20m-20 8h8" />
            </g>
        </svg>
        <h1 id="currentPetugas">Lakukan Transaksi</h1>
    </div>
</footer>

<script src="app.js"></script>
<script>
    const tables = [
        ["Daftar Transaksi Pembeli", "<?= $transaksi_pembeli ?>"],
        ["Daftar Transaksi Supplier", "<?= $transaksi_supplier ?>"],
        ["Siapa yang Bertugas?", "<?= $petugas ?>"],
        ["Daftar Pesanan Pembeli", "<?= $transaksi_pembeli ?>"],
    ];
    const tableFormId = tables.length - 1;
    const formWithTableDialog =
        '<div class="form-with-table-dialog"> <h1 id="form-with-table-dialog-title">Anda adalah?</h1> <h2 id="form-with-table-highlight-sel-val"></h2> <div class="btn-field-accept-cancle"> <div class="btn-cancle" onclick="closeFormWithTable(this)"> <h1>Bukan</h1> </div> <div class="btn-accept" onclick="acceptFormWithTable(this)"> <h1>Untuk Nyata</h1> </div> </div> </div>';
    var formWithTableDialog_HighlightIdx = 2;

    var dialogStartAt = 2;


    var strTableHeader = [];
    const editFieldOrigin =
        '<h1>Edit Data</h1> <div class="table-edit-field-wrapper"> </div> <div class="btn-field-accept-cancle"> <div class="btn-cancle" id="btn-discard" onclick="discardFormTextField(this)"> <h1>Discard</h1> </div> <div class="btn-accept" id="btn-save" onclick="saveFormTextField(this)"> <h1>Save</h1> </div> </div>';

    function getParentId_tableEditRow(x) {
        let id = x[x.length - 1];
        return id;
    }

    function searchAddListener() {
        let searchWidget = document.getElementsByClassName("table-database-search");
        for (let index = 0; index < searchWidget.length; index++) {
            const element = searchWidget[index].children[0].children[0];
            console.log(element);
            element.addEventListener('input', function() {
                search(searchWidget[index]);
                // console.log(searchWidget[index].children[0].children[0].value);
            });
        }
    }
    searchAddListener();

    function test(x) {
        console.log(x);
        console.log(x.children[0].children[0].value)
    }

    // doksil https://stackoverflow.com/a/40358801

    function search(x) {
        const searchInput = x.children[0].children[0].value;
        const table = document.getElementsByClassName('table-wrapper')[getParentId_tableEditRow(x.parentElement.parentElement.id)].children[0];

        const searchTerm = searchInput;
        tr = table.getElementsByTagName("tr");
        // console.log(tr);

        for (let index = 1; index < tr.length; index++) {
            if (searchInput == "") {
                tr[index].style.display = null;
                continue;
            }
            let td = tr[index].getElementsByTagName("td");
            let found = false;
            for (let index = 0; index < td.length; index++) {
                if (td[index].innerHTML.toUpperCase().indexOf(searchTerm.toUpperCase()) > -1) {
                    found = true;
                    break;
                };
            }
            if (found) {
                tr[index].style.display = '';
            } else {
                tr[index].style.display = 'none';
            }
        }
    }

    function loadThings(strTitile, x, things) {
        const tabelthings = document.getElementsByClassName("table-database")[x];
        const tabel = tabelthings.children[1].children[0];
        const title = tabelthings.children[0].children[0];
        tabelthings.style = null;

        console.log("things:");
        console.log(things);
        // console.log(Object.keys(things).length == 0);
        if (Object.keys(things).length == 0) {
            title.textContent = `${strTitile} kosong kak`;
            tabelthings.children[0].children[1].style.display = "none";
            tabelthings.style.width = '350px';
            tabel.innerHTML = '';
        } else {
            // tabelthings.style = null;
            let arrHeader = [];
            for (let index = 0; index < Object.keys(things[0]).length; index++) {
                arrHeader.push(Object.keys(things[0])[index]);
                // console.log(Object.keys(things[0]));
            }
            strTableHeader[x] = arrHeader;

            title.textContent = strTitile;
            let generateHeader = "<tr>";
            for (let index = 0; index < strTableHeader[x].length; index++) {
                generateHeader += "<th>" + strTableHeader[x][index] + "</th>";
            }
            generateHeader += "</tr>";
            tabel.innerHTML = generateHeader;
            for (let i = 0; i < things.length; i++) {
                let tableContent;
                if (x < dialogStartAt) {
                    tableContent = "<tr onclick='editSelectedRow(this)'>";
                } else {
                    tableContent = "<tr onclick='editSelectedRow_Dialog(this)'>";
                }
                for (let index = 0; index < strTableHeader[x].length; index++) {
                    const element = things[i][strTableHeader[x][index]];
                    // console.log(element);
                    tableContent += "<td style='max-width: 250px; overflow:hidden;'>" + element + "</td>";
                }
                tableContent += "</tr>";
                tabel.innerHTML += tableContent;
            }
        }
    }

    // For Update values
    async function tableLoader() {
        for (let index = 0; index < tables.length; index++) {
            loadThings(tables[index][0], index, await selectTable(tables[index][1]));
        }
    }
    tableLoader(tables);

    var rowEditTableOpen = false;
    var rowEditTableLastOpen = null;

    function generateFormTextField(x) {
        if (rowEditTableOpen == true && x != tableFormId) {
            let editField;
            editField =
                document.getElementsByClassName("table-edit-row")[rowEditTableLastOpen];
            editField.innerHTML = "";
            editField.style.margin = null;
            rowEditTableOpen = false;
        }
        rowEditTableOpen = true;
        rowEditTableLastOpen = x;
        let editField = document.getElementsByClassName("table-edit-row")[x];
        console.log(x);
        if (x < dialogStartAt) {
            editField.style.margin = `30px 20px 30px 25px`;
            editField.innerHTML = editFieldOrigin;
            const editFieldWrapper = document.getElementsByClassName(
                "table-edit-field-wrapper"
            )[0];
            for (let index = 0; index < strTableHeader[x].length; index++) {
                editFieldWrapper.innerHTML +=
                    '<div class="material-text-box"> <div class="group"> <input type="text" required="required"/> <label>' +
                    strTableHeader[x][index] +
                    "</label> </div> </div>";
            }
        } else {
            editField =
                document.getElementsByClassName("table-edit-row")[x];
            editField.innerHTML = formWithTableDialog;
        }
    }

    var editSelectedRowWidget = null;

    function editSelectedRow(x) {
        if (editSelectedRowWidget != null) {
            editSelectedRowWidget.style.backgroundColor = null;
        }
        editSelectedRowWidget = x;
        editSelectedRowWidget.style.backgroundColor = `rgba(194, 182, 182, 0.7)`;
        let parentId = getParentId_tableEditRow(
            x.parentNode.parentNode.parentNode.parentNode.id
        );
        generateFormTextField(parentId);
        console.log(parentId);

        let parentTableField =
            document.getElementsByClassName("table-database")[parentId].parentElement;
        parentTableField.style.padding = `0px 3.25rem`;
        const td = x.children;
        console.log(parentId + tableFormId);
        if (parentId == tableFormId) {
            const highLightSelVal = document.getElementById("form-with-table-highlight-sel-val");
            highLightSelVal.textContent = td[formWithTableDialog_HighlightIdx].innerHTML;
            return;
        } else {
            if (tables.length > 2) {
                let tableField;
                if (parentId == 0) {
                    tableField = document.getElementsByClassName("table-field")[1];
                }
                if (parentId == 1) {
                    tableField = document.getElementsByClassName("table-field")[0];
                }
                tableField.style.position = "absolute";
                tableField.style.top = "50%";
                tableField.style.left = "-1250%";
                // tableField.style.visibility = 'hidden';
                tableField.style.transform = "translate(-50%, -50%)";
                tableField.style.zIndex = `-1`;
            }

            const editFieldWrapper = document.getElementsByClassName(
                "table-edit-field-wrapper"
            )[0];
            for (let index = 0; index < td.length; index++) {
                editFieldWrapper.children[index].children[0].children[0].value =
                    td[index].innerHTML;
            }
        }
    }

    function discardFormTextField(x) {
        let parentId = getParentId_tableEditRow(
            x.parentNode.parentNode.parentNode.children[0].id
        );
        tableLoader();
        const editField = document.getElementsByClassName("table-edit-row")[parentId];
        editField.innerHTML = "";
        editField.style.margin = "0px 25px 0px 0px";
        editSelectedRowWidget.style.backgroundColor = null;
        editSelectedRowWidget = null;

        let parent =
            document.getElementsByClassName("table-database")[rowEditTableLastOpen]
            .parentElement;
        parent.style.padding = null;

        let tableField;
        if (parentId == 0) {
            tableField = document.getElementsByClassName("table-field")[1];
        }
        if (parentId == 1) {
            tableField = document.getElementsByClassName("table-field")[0];
        }
        tableField.style = null;
    }

    function saveFormTextField(x) {
        const editFieldWrapper = document.getElementsByClassName(
            "table-edit-field-wrapper"
        )[0];
        let valueToSubmit = [];
        for (let index = 0; index < editFieldWrapper.children.length; index++) {
            valueToSubmit.push(
                editFieldWrapper.children[index].children[0].children[0].value
            );
        }
        discardFormTextField(x);
        console.log(valueToSubmit);
    }

    let dialogPageAt = -1;
    let dialogValueToSubmit;
    let addtionalValues;

    function editSelectedRow_Dialog(x) {
        if (editSelectedRowWidget != null) {
            editSelectedRowWidget.style.backgroundColor = null;
        }
        editSelectedRowWidget = x;
        editSelectedRowWidget.style.backgroundColor = `rgba(194, 182, 182, 0.7)`;
        let parentId = getParentId_tableEditRow(
            x.parentNode.parentNode.parentNode.parentNode.id
        );
        generateFormTextField(parentId);

        let parentTableField =
            document.getElementsByClassName("table-database")[parentId].parentElement;
        parentTableField.style.padding = `0px 3.25rem`;
        const td = x.children;

        const highLightSelVal = document.getElementsByClassName("form-with-table-dialog")[dialogPageAt].children[1];

        const formDialog = document.getElementsByClassName("form-with-table-dialog")[dialogPageAt];
        if (dialogPageAt == 0) {
            formDialog.children[0].textContent = "Siapa yang bertugas?";
            formWithTableDialog_HighlightIdx = 2;
        }
        if (dialogPageAt == 1) {
            formDialog.children[0].textContent = "Acc?";
            formWithTableDialog_HighlightIdx = 0;
        }

        highLightSelVal.textContent = td[formWithTableDialog_HighlightIdx].innerHTML;
    }

    function showFormWithTable() {
        const formTable = document.getElementsByClassName("form-with-table")[0];
        formTable.children[0].style.display = null;
        formTable.children[1].style.display = null;
        if (dialogPageAt < 0) {
            addtionalValues = new Map();
            dialogValueToSubmit = new Map();
            tableLoader();
            const formAddData = document.getElementsByClassName("form-with-table")[0];
            const formAddDataFilter = document.getElementsByClassName(
                "form-add-data-filter"
            )[0];
            formAddDataFilter.style.backgroundColor = `rgba(0, 0, 0, 0.7)`;
            formAddDataFilter.style.pointerEvents = "all";
            formAddDataFilter.onclick = function() {
                closeFormWithTable(null);
            };
            formAddData.style.top = "50%";
            dialogPageAt = 0;
        }

        if (dialogPageAt == 0) {
            formTable.children[1].style.display = "none";
        }
        if (dialogPageAt == 1) {
            formTable.children[0].style.display = "none";
        }
    }

    function closeFormWithTable(x) {
        dialogPageAt -= 1;
        if (x == null) {
            let tableField = document.getElementsByClassName("table-field");
            const formAddDataFilter = document.getElementsByClassName(
                "form-add-data-filter"
            )[0];
            formAddDataFilter.style.backgroundColor = `rgba(0, 0, 0, 0)`;
            formAddDataFilter.style.pointerEvents = "none";
            formAddDataFilter.onclick = null;
            for (let index = 1; index < tableField.length; index++) {
                let parentId = getParentId_tableEditRow(tableField[index].children[0].id);
                // console.log(tableField[index]);
                // console.log(parentId);
                dialogPageAt = -1;
                const formAddData = document.getElementsByClassName("form-with-table")[0];

                formAddData.style.top = "1500%";
                const editField =
                    document.getElementsByClassName("table-edit-row")[parentId];
                // console.log(editField);
                editField.innerHTML = "";
                editField.style.margin = null;
                if (editSelectedRowWidget != null) {
                    editSelectedRowWidget.style.backgroundColor = null;
                    editSelectedRowWidget = null;
                }

                let parent =
                    document.getElementsByClassName("table-database")[parentId]
                    .parentElement;
                parent.style.padding = null;
            }

            return;
        }

        if (x != null && dialogPageAt < 0) {
            let parentId = getParentId_tableEditRow(x.parentElement.parentElement.parentElement.parentElement.children[0].id);
            dialogPageAt = -1;
            const formAddData = document.getElementsByClassName("form-with-table")[0];
            const formAddDataFilter = document.getElementsByClassName(
                "form-add-data-filter"
            )[0];
            formAddDataFilter.style.backgroundColor = `rgba(0, 0, 0, 0)`;
            formAddDataFilter.style.pointerEvents = "none";
            formAddDataFilter.onclick = null;
            formAddData.style.top = "1500%";
            const editField =
                document.getElementsByClassName("table-edit-row")[parentId];
            console.log(editField);
            editField.innerHTML = "";
            editField.style.margin = null;
            editSelectedRowWidget.style.backgroundColor = null;
            editSelectedRowWidget = null;
            let parent =
                document.getElementsByClassName("table-database")[parentId]
                .parentElement;
            parent.style.padding = null;
            return;
        }

        showFormWithTable();
    }

    const toSubmitHeaderMap = new Map([
        ['kode_petugas', 'kode_petugas'],
        ['kode_transaksi_supplier', 'kode_transaksi_supplier'],
        ['kode_supplier', 'kode_supplier'],
        ['qty', 'qty_total'],
        ['harga_item', 'harga_total'],
        ['tgl_transaksi'],
    ]);


    async function acceptFormWithTable(x) {
        const formAddData = editSelectedRowWidget;
        let valueToSubmit = [];
        for (let index = 0; index < formAddData.children.length; index++) {
            valueToSubmit.push(formAddData.children[index].innerHTML);
        }

        if (dialogPageAt == 0) {
            dialogValueToSubmit.set(toSubmitHeaderMap.get(strTableHeader[2][0]), valueToSubmit[0]);
            x.parentElement.parentElement.parentElement.parentElement.style = null;
            x.parentElement.parentElement.innerHTML = "";
            dialogPageAt += 1;
        } else if (dialogPageAt == 1) {
            for (let index = 0; index < strTableHeader[3].length - 2; index++) {
                if (index == 0) {
                    addtionalValues.set(strTableHeader[3][index], valueToSubmit[index]);
                    continue;
                }      
                dialogValueToSubmit.set(strTableHeader[3][index], valueToSubmit[index]);
            }
            dialogPageAt += 1;
        }

        if (dialogPageAt < 2) {
            showFormWithTable();
        } else {
            completeDialog();
            closeFormWithTable(null);
        }
    }

    async function completeDialog() {
        dialogValueToSubmit.set('tgl_transaksi', formatDateAndTime(new Date()));
        dialogValueToSubmit.set('kode_transaksi_supplier', await supplierMaxKd());

        let selectKd = await selectTable('SELECT kode_barang, kode_transaksi_supplier, kode_transaksi_pembeli FROM barang;');
        console.log(selectKd);
        for (let index = 0; index < selectKd.length; index++) {
            let selectKdTransaksiPem = selectKd[index]['kode_transaksi_pembeli'];
            if (selectKdTransaksiPem == null) {
                continue;
            }
            selectKdTransaksiPem = selectKdTransaksiPem.split(';');
            let selectKdTransaksiSup = selectKd[index]['kode_transaksi_supplier'];
            if (selectKdTransaksiSup == null) {
                selectKdTransaksiSup = [];
            } else {
                selectKdTransaksiSup = selectKdTransaksiSup.split(';');
            }

            if (selectKdTransaksiPem.includes(addtionalValues.get('kode_transaksi_pembeli')) && !selectKdTransaksiSup.includes(dialogValueToSubmit.get('kode_transaksi_supplier'))) {
                selectKdTransaksiSup.push(dialogValueToSubmit.get('kode_transaksi_supplier'));
                selectKdTransaksiSup = selectKdTransaksiSup.join(';');
                console.log(selectKdTransaksiSup);
                await update('barang', 'kode_barang', selectKd[index]['kode_barang'], 'kode_transaksi_supplier', selectKdTransaksiSup);
                break;
            }

        }
        
        console.log(dialogValueToSubmit);
        console.log(addtionalValues);
        await insert('transaksi_supplier', dialogValueToSubmit);

        await update('transaksi_pembeli', 'kode_transaksi_pembeli', addtionalValues.get('kode_transaksi_pembeli'), 'kode_petugas ', dialogValueToSubmit.get('kode_petugas'))
        tableLoader();
    }

    // scroll form
    function showAddDataForm() {
        const formAddData = document.getElementsByClassName("form-add-data")[0];
        const formAddDataFilter = document.getElementsByClassName(
            "form-add-data-filter"
        )[0];
        formAddDataFilter.style.backgroundColor = `rgba(0, 0, 0, 0.7)`;
        formAddDataFilter.style.pointerEvents = "all";
        formAddData.style.top = "50%";
    }

    function closeAddDataForm() {
        const formAddData = document.getElementsByClassName("form-add-data")[0];
        const formAddDataFilter = document.getElementsByClassName(
            "form-add-data-filter"
        )[0];
        formAddDataFilter.style.backgroundColor = `rgba(0, 0, 0, 0)`;
        formAddDataFilter.style.pointerEvents = "none";
        formAddData.style.top = "1500%";
    }

    function addAddDataForm() {
        const formAddData = document.getElementsByClassName(
            "form-add-data-fieldtext"
        )[0];
        let valueToSubmit = [];
        for (let index = 0; index < formAddData.children.length; index++) {
            valueToSubmit.push(
                formAddData.children[index].children[0].children[0].value
            );
        }
        console.log(valueToSubmit);
        closeAddDataForm();
        console.log("UwU");
    }
</script>
<script>
    function clamp(number, min, max) {
        return Math.max(min, Math.min(number, max));
    }

    function parallax_background(event) {
        const position = document.getElementsByClassName("parallax-background-image")[0];
        const x = clamp((event.pageX - (window.innerWidth / 2)) / 90, -4, 4);
        const y = clamp((event.pageY - (window.innerHeight / 2)) / 90, -4, 4);

        position.style.transform = `translateX(-${50+x}%) translateY(-${50+y}%)`;
    }
    document.addEventListener("mousemove", parallax_background);
</script>

</html>