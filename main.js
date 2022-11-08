/**
 * read the csv file
 *
 * @param {*} input
 */
function read_csv(input) {
    let file = input.files[0];
    //let file = "utils/INR_GR491-Plus-Automaton-11-2021.xlsx";
    let fileReader = new FileReader();

    fileReader.readAsText(file);

    fileReader.onload = function () {
        alert(fileReader.result);
    };

    fileReader.onerror = function () {
        alert(fileReader.error);
    };
}

$(document).ready(function () {
    // ce script permet de rechercher dans les tableaux des resultats de facon dynamique
    //==
    $("#recherche_strategy").on("keyup", function () {
        var value = $(this).val().toLowerCase();
        $("#tableau_resultats_strategy tr").filter(function () {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
        });
    });
    //==
    $("#recherche_specification").on("keyup", function () {
        var value = $(this).val().toLowerCase();
        $("#tableau_resultats_specification tr").filter(function () {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
        });
    });
    //==
});

/**
 *  Initialize the tablesort on the HTML table.
 */
document.querySelector(".table-sortable").tsortable();
