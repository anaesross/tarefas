<?php 

switch($_POST['opr']) {
    case 'login': {

        break;
    }
    case 'register': {
        doRegister($_POST);
        break;
    }
}

function doLogin()
{
    echo 'on';
}

function doRegister($data)
{
    
    //$data
    $file = 'registrosAula19.json';
    $registros = json_decode(file_get_contents($file), true);
        
    foreach ($registros as $key => $r) {
        if ($r['email'] == $data['email']) {            
            $mensagem = 'O email "' . $data['email'] . '" já existe.'; 
            header('location: registerAula19.php?message=' . $mensagem);
            break;
        }
    }

    $data['senha'] = sha1($data['senha']); 
    unset($data['opr']); // remove um indice do array

    $registros[] = $data;
    
    file_put_contents($file, json_encode($registros) );

    $mensagem = 'Registrado com sucesso!'; 
    header('location: registerAula19.php?message=' . $mensagem);
}

?>