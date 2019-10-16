<?php

/*PHP Estruturado - Session
1. Criar dois arquivos: mostrar.php e modificar.php
a. arquivo mostrar.php só deve imprimir $_SESSION[“contador”] (se existir).
Neste arquivo, é necessário imprimir o valor do contador.
b. arquivo modificar.php deve ter 2 botões:
→ O primeiro será o botão “Reiniciar”, que quando for ‘cliclado’ deve
colocar $_SESSION[“contador”] em 0 (zero).
→ O segundo será “Aumentar”, e deve aumentar o valor em 1.
Testar as modificações.*/

/*2. Utilizando os formulários de registro e login criados anteriormente,
register.php e login.php, adicionar as seguintes funcionalidades:
a. Salvar as informações do formulário de cadastro em um JSON com a
senha criptografada utilizando password_hash.
→ Fazer a verificação da existência dos e-mails e, caso já exista uma
conta com o e-mail informado, as informações novas não devem ser
salvas, e o usuário deve ser avisado.
b. Em login.php, verificar a existência do e-mail, se a senha está correta e
se os seguintes casos são cumpridos:
1. Caso os dados não existam, mostrar uma mensagem avisando que os
dados estão incorretos e um link (botão) que volte para a página de
cadastro;
2. Se os dados existirem, fazer o login, salvá-los em session e
redirecionar para página de perfil do usuário (com suas informações
exibidas na tela) e que permita edição deles;*/

/*
3. Adicionar um botão de “encerrar sessão” que seja exibido apenas se
houver uma sessão aberta. Quando esse botão for clicado, todos os
dados salvos em $_SESSION devem ser excluídos. Ao mesmo tempo,
o cookie de lembrar do usuário deve ser eliminado. Quando a sessão
é encerrada, o usuário deve ser redirecionado à página de início.



?>