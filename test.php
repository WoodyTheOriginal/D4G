<?php
	session_start();
	
	// So we include PHPExcel to perform the reading
	require_once dirname(__FILE__, 2) . "PHPExcel.php";

	$xlsx_file = dirname(__FILE__, 2) . 'INR_GR491-Plus-Automaton-11-2021.xlsx';

	$excelReader = PHPExcel_IOFactory::createReaderForFile($xlsx_file);
	$excelObj = $excelReader->load($xlsx_file);
	$worksheet = $excelObj->getSheet(0);

	$good_practices = array(); // all the good practices
	$lastRow = 558; // the last row of the file which content something not null
	$lastColumn = 32;

	// Get all the good practices and put them into an array
	for ($row = 1; $row <= $lastRow; $row++) {
		$nbr2 = 0;
		$ascii = ord('A');  // get ASCII code 
		for ($column = 1, $nbr1 = 0; $column <= $lastColumn; $column++, $nbr1++) {
			if ($column < 27) {
				$nextLetter = chr($ascii + $nbr1); // convert ascii to char
				$good_practices[$row][$column] = $worksheet->getCell($nextLetter . $row)->getValue();
			} else { // will go through this just from AA to AF column
				$nextLetter = chr($ascii + $nbr2++); // convert ascii to char
				$good_practices[$row][$column] = $worksheet->getCell("A" . $nextLetter . $row)->getValue();
			}
		}
	}

	// Index of the first and last element of each element in the excel file
	$index_first_strategy = 5;
	$index_last_strategy = 66;
	$index_first_specification = 67;
	$index_last_specification = 128;
	$index_first_ux_ui = 129;
	$index_last_ux_ui = 202;
	$index_first_contenus = 203;
	$index_last_contenus = 255;
	$index_first_architecture = 256;
	$index_last_architecture = 327;
	$index_first_frontend = 328;
	$index_last_frontend = 411;
	$index_first_backend = 412;
	$index_last_backend = 489;
	$index_first_hebergement = 490;
	$index_last_hebergement = 558;
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">

    <meta name="robots" content="all">
    <meta name="keywords" content="eco, ecoconception, D4G">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Test reading an excel file</title>

    <link rel="icon" href="../../../images/logo IG.png" type="image/png" />

    <link rel="stylesheet" href="./../css/style.css" type="text/css">
    <link rel="stylesheet" href="./../utils/lib/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="./../utils/lib/fuentes/iconic/css/material-design-iconic-font.min.css" type="text/css">
</head>

<body>

    <div class="container">
        <h2> SOME GOOD PRACTICES </h2>
        <br />
        <h3> STRATEGIES </h3>
        <input class="form-control" id="recherche_strategy" type="text" placeholder="Recherche...">
        <br>
        <div class="masque">
            <table class="table table-hover table-striped table-sortable">
                <thead class="thead-dark">
                    <tr>
                        <th></th>
                        <th data-sort="string"><?php echo $good_practices[4][1]; ?></th>
                        <th data-sort="string"><?php echo $good_practices[4][6]; ?></th>
                        <th data-sort="string"><?php echo $good_practices[4][7]; ?></th>
                        <th data-sort="string"><?php echo $good_practices[4][9]; ?></th>
                        <th data-sort="string"><?php echo $good_practices[4][18]; ?></th>
                        <th data-sort="string"><?php echo $good_practices[4][24]; ?></th>
                    </tr>
                </thead>
                <tbody id="tableau_resultats_strategy">
                    <?php
					for ($i = $index_first_strategy; $i <= $index_last_strategy; $i++) {
					?>
                    <tr>
                        <td><input type="checkbox" id="<?php echo 'strat_' . $i; ?>"></td>
                        <td><?php echo $good_practices[$i][1]; ?> </td>
                        <td><?php echo $good_practices[$i][6]; ?> </td>
                        <td><?php echo $good_practices[$i][7]; ?> </td>
                        <td><?php echo $good_practices[$i][9]; ?> </td>
                        <td><?php echo $good_practices[$i][18]; ?> </td>
                        <td><?php echo $good_practices[$i][24]; ?> </td>
                    </tr>

                    <?php	
					}
					?>

                </tbody>
            </table>
        </div>

        <br /><br /><br />

        <h3> SPECIFICATIONS </h3>
        <input class="form-control" id="recherche_specification" type="text" placeholder="Recherche...">
        <br>
        <div class="masque">
            <table class="table table-hover table-striped table-sortable">
                <thead class="thead-dark">
                    <tr>
                        <th></th>
                        <th data-sort="string"><?php echo $good_practices[4][1]; ?></th>
                        <th data-sort="string"><?php echo $good_practices[4][6]; ?></th>
                        <th data-sort="string"><?php echo $good_practices[4][7]; ?></th>
                        <th data-sort="string"><?php echo $good_practices[4][9]; ?></th>
                        <th data-sort="string"><?php echo $good_practices[4][18]; ?></th>
                        <th data-sort="string"><?php echo $good_practices[4][24]; ?></th>
                    </tr>
                </thead>
                <tbody id="tableau_resultats_specification">
                    <?php
					for ($i = $index_first_specification; $i <= $index_last_specification; $i++) {
					?>
                    <tr>
                        <td><input type="checkbox" id="<?php echo 'spec_' . $i; ?>"></td>
                        <td><?php echo $good_practices[$i][1]; ?> </td>
                        <td><?php echo $good_practices[$i][6]; ?> </td>
                        <td><?php echo $good_practices[$i][7]; ?> </td>
                        <td><?php echo $good_practices[$i][9]; ?> </td>
                        <td><?php echo $good_practices[$i][18]; ?> </td>
                        <td><?php echo $good_practices[$i][24]; ?> </td>
                    </tr>

                    <?php	
					}
					?>

                </tbody>
            </table>
        </div>

		<br /><br /><br />

		<h3> UX/UI </h3>
        <input class="form-control" id="recherche_uxui" type="text" placeholder="Recherche...">
        <br>
        <div class="masque">
            <table class="table table-hover table-striped table-sortable">
                <thead class="thead-dark">
                    <tr>
                        <th></th>
                        <th data-sort="string"><?php echo $good_practices[4][1]; ?></th>
                        <th data-sort="string"><?php echo $good_practices[4][6]; ?></th>
                        <th data-sort="string"><?php echo $good_practices[4][7]; ?></th>
                        <th data-sort="string"><?php echo $good_practices[4][9]; ?></th>
                        <th data-sort="string"><?php echo $good_practices[4][18]; ?></th>
                        <th data-sort="string"><?php echo $good_practices[4][24]; ?></th>
                    </tr>
                </thead>
                <tbody id="tableau_resultats_uxui">
                    <?php
					for ($i = $index_first_ux_ui; $i <= $index_last_ux_ui; $i++) {
					?>
                    <tr>
                        <td><input type="checkbox" id="<?php echo 'uxui_' . $i; ?>"></td>
                        <td><?php echo $good_practices[$i][1]; ?> </td>
                        <td><?php echo $good_practices[$i][6]; ?> </td>
                        <td><?php echo $good_practices[$i][7]; ?> </td>
                        <td><?php echo $good_practices[$i][9]; ?> </td>
                        <td><?php echo $good_practices[$i][18]; ?> </td>
                        <td><?php echo $good_practices[$i][24]; ?> </td>
                    </tr>

                    <?php	
					}
					?>

                </tbody>
            </table>
        </div>
	
		</br></br></br>

		<h3> CONTENUS </h3>
        <input class="form-control" id="recherche_contenus" type="text" placeholder="Recherche...">
        <br>
        <div class="masque">
            <table class="table table-hover table-striped table-sortable">
                <thead class="thead-dark">
                    <tr>
                        <th></th>
                        <th data-sort="string"><?php echo $good_practices[4][1]; ?></th>
                        <th data-sort="string"><?php echo $good_practices[4][6]; ?></th>
                        <th data-sort="string"><?php echo $good_practices[4][7]; ?></th>
                        <th data-sort="string"><?php echo $good_practices[4][9]; ?></th>
                        <th data-sort="string"><?php echo $good_practices[4][18]; ?></th>
                        <th data-sort="string"><?php echo $good_practices[4][24]; ?></th>
                    </tr>
                </thead>
                <tbody id="tableau_resultats_contenus">
                    <?php
					for ($i = $index_first_contenus; $i <= $index_last_contenus; $i++) {
					?>
                    <tr>
                        <td><input type="checkbox" id="<?php echo 'contenus_' . $i; ?>"></td>
                        <td><?php echo $good_practices[$i][1]; ?> </td>
                        <td><?php echo $good_practices[$i][6]; ?> </td>
                        <td><?php echo $good_practices[$i][7]; ?> </td>
                        <td><?php echo $good_practices[$i][9]; ?> </td>
                        <td><?php echo $good_practices[$i][18]; ?> </td>
                        <td><?php echo $good_practices[$i][24]; ?> </td>
                    </tr>

                    <?php	
					}
					?>

                </tbody>
            </table>
        </div>
		
		</br></br></br>

		<h3> ARHITECTURE </h3>
        <input class="form-control" id="recherche_architecture" type="text" placeholder="Recherche...">
        <br>
        <div class="masque">
            <table class="table table-hover table-striped table-sortable">
                <thead class="thead-dark">
                    <tr>
                        <th></th>
                        <th data-sort="string"><?php echo $good_practices[4][1]; ?></th>
                        <th data-sort="string"><?php echo $good_practices[4][6]; ?></th>
                        <th data-sort="string"><?php echo $good_practices[4][7]; ?></th>
                        <th data-sort="string"><?php echo $good_practices[4][9]; ?></th>
                        <th data-sort="string"><?php echo $good_practices[4][18]; ?></th>
                        <th data-sort="string"><?php echo $good_practices[4][24]; ?></th>
                    </tr>
                </thead>
                <tbody id="tableau_resultats_architecture">
                    <?php
					for ($i = $index_first_architecture; $i <= $index_last_architecture; $i++) {
					?>
                    <tr>
                        <td><input type="checkbox" id="<?php echo 'architecture_' . $i; ?>"></td>
                        <td><?php echo $good_practices[$i][1]; ?> </td>
                        <td><?php echo $good_practices[$i][6]; ?> </td>
                        <td><?php echo $good_practices[$i][7]; ?> </td>
                        <td><?php echo $good_practices[$i][9]; ?> </td>
                        <td><?php echo $good_practices[$i][18]; ?> </td>
                        <td><?php echo $good_practices[$i][24]; ?> </td>
                    </tr>

                    <?php	
					}
					?>

                </tbody>
            </table>
        </div>
		
		</br></br></br>

		<h3> FRONTEND </h3>
        <input class="form-control" id="recherche_frontend" type="text" placeholder="Recherche...">
        <br>
        <div class="masque">
            <table class="table table-hover table-striped table-sortable">
                <thead class="thead-dark">
                    <tr>
                        <th></th>
                        <th data-sort="string"><?php echo $good_practices[4][1]; ?></th>
                        <th data-sort="string"><?php echo $good_practices[4][6]; ?></th>
                        <th data-sort="string"><?php echo $good_practices[4][7]; ?></th>
                        <th data-sort="string"><?php echo $good_practices[4][9]; ?></th>
                        <th data-sort="string"><?php echo $good_practices[4][18]; ?></th>
                        <th data-sort="string"><?php echo $good_practices[4][24]; ?></th>
                    </tr>
                </thead>
                <tbody id="tableau_resultats_frontend">
                    <?php
					for ($i = $index_first_frontend; $i <= $index_last_frontend; $i++) {
					?>
                    <tr>
                        <td><input type="checkbox" id="<?php echo 'frontend_' . $i; ?>"></td>
                        <td><?php echo $good_practices[$i][1]; ?> </td>
                        <td><?php echo $good_practices[$i][6]; ?> </td>
                        <td><?php echo $good_practices[$i][7]; ?> </td>
                        <td><?php echo $good_practices[$i][9]; ?> </td>
                        <td><?php echo $good_practices[$i][18]; ?> </td>
                        <td><?php echo $good_practices[$i][24]; ?> </td>
                    </tr>

                    <?php	
					}
					?>

                </tbody>
            </table>
        </div>
		
		</br></br></br>

		<h3> BACKEND </h3>
        <input class="form-control" id="recherche_backend" type="text" placeholder="Recherche...">
        <br>
        <div class="masque">
            <table class="table table-hover table-striped table-sortable">
                <thead class="thead-dark">
                    <tr>
                        <th></th>
                        <th data-sort="string"><?php echo $good_practices[4][1]; ?></th>
                        <th data-sort="string"><?php echo $good_practices[4][6]; ?></th>
                        <th data-sort="string"><?php echo $good_practices[4][7]; ?></th>
                        <th data-sort="string"><?php echo $good_practices[4][9]; ?></th>
                        <th data-sort="string"><?php echo $good_practices[4][18]; ?></th>
                        <th data-sort="string"><?php echo $good_practices[4][24]; ?></th>
                    </tr>
                </thead>
                <tbody id="tableau_resultats_backend">
                    <?php
					for ($i = $index_first_backend; $i <= $index_last_backend; $i++) {
					?>
                    <tr>
                        <td><input type="checkbox" id="<?php echo 'backend_' . $i; ?>"></td>
                        <td><?php echo $good_practices[$i][1]; ?> </td>
                        <td><?php echo $good_practices[$i][6]; ?> </td>
                        <td><?php echo $good_practices[$i][7]; ?> </td>
                        <td><?php echo $good_practices[$i][9]; ?> </td>
                        <td><?php echo $good_practices[$i][18]; ?> </td>
                        <td><?php echo $good_practices[$i][24]; ?> </td>
                    </tr>

                    <?php	
					}
					?>

                </tbody>
            </table>
        </div>
		
		</br></br></br>

		<h3> HEBERGEMENT </h3>
        <input class="form-control" id="recherche_hebergement" type="text" placeholder="Recherche...">
        <br>
        <div class="masque">
            <table class="table table-hover table-striped table-sortable">
                <thead class="thead-dark">
                    <tr>
                        <th></th>
                        <th data-sort="string"><?php echo $good_practices[4][1]; ?></th>
                        <th data-sort="string"><?php echo $good_practices[4][6]; ?></th>
                        <th data-sort="string"><?php echo $good_practices[4][7]; ?></th>
                        <th data-sort="string"><?php echo $good_practices[4][9]; ?></th>
                        <th data-sort="string"><?php echo $good_practices[4][18]; ?></th>
                        <th data-sort="string"><?php echo $good_practices[4][24]; ?></th>
                    </tr>
                </thead>
                <tbody id="tableau_resultats_hebergement">
                    <?php
					for ($i = $index_first_hebergement; $i <= $index_last_hebergement; $i++) {
					?>
                    <tr>
                        <td><input type="checkbox" id="<?php echo 'hebergement_' . $i; ?>"></td>
                        <td><?php echo $good_practices[$i][1]; ?> </td>
                        <td><?php echo $good_practices[$i][6]; ?> </td>
                        <td><?php echo $good_practices[$i][7]; ?> </td>
                        <td><?php echo $good_practices[$i][9]; ?> </td>
                        <td><?php echo $good_practices[$i][18]; ?> </td>
                        <td><?php echo $good_practices[$i][24]; ?> </td>
                    </tr>

                    <?php	
					}
					unset($xlsx_file);
					unset($excelReader);
					unset($excelObj);
					unset($worksheet);
					unset($good_practices);
					unset($lastRow);
					unset($lastColumn);
					unset($row);
					unset($column);
					unset($nbr1);
					unset($nbr2);
					unset($nextLetter);
					unset($ascii);
					?>

                </tbody>
            </table>
        </div>
		
		</br></br></br>

    </div>

    <script defer src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="./../utils/lib/tablesort.min.js"></script>
    <script src="./../js/main.js"></script>
</body>
<html>