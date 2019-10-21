<?php 
$file = 'categoriasAula17.json';

if( file_exists($file) ) {

    $data = file_get_contents($file);
    $data = str_replace("\r\n", '', $data);
    $data = str_replace("\t", '', $data);
    $data = str_replace(" ", '', $data);
    
    $json = json_decode($data, true); 
    
    for($i = 0; $i < count($json['categorias']); $i++) {
        $id   = $json['categorias'][$i]['id'];  
        $nome = $json['categorias'][$i]['nome'];

        echo '<input type="checkbox" value="' . $id . '"> ' . $nome . '<br>';
    }
}
else {
    echo 'Arquivo não existe.';
}