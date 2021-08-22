<?php 

    // Campturar los datos que lleguen desde la url
    $url = !empty($_GET['route_page']) ? $_GET['route_page'] : "Home/home";

    // Tomar la variable para convertirla en un array
    $arUrl = explode("/", $url);
    $controller = $arUrl[0];
    $method = $arUrl[0];
    $params = "";

    //print_r($arUrl);

    if (!empty($arUrl[1])) {
        if ($arUrl[1] != "") {
            $method = $arUrl[1];
        }
    }

    if (!empty($arUrl[2])) { // Preguntar si existe 
        if ($arUrl[2] != "") {
            for ($i=2; $i < count($arUrl); $i++) { 
                $params .= $arUrl[$i].",";
            }

            $params = trim($params, ","); // trim remueve la ultima letra, en este caso se le remueve la coma
            echo $params; 
        }
    }

    echo "Controlador: ".$controller." - Método: ".$method;

/* 
    echo "<br>";
    echo $controller;
    echo "<br>";
    echo $method;
*/






?>