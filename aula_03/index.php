<?php

//durma o codigo por x segundos
/*
sleep(3);
echo 'um';

sleep(3);
echo 'dois';

sleep(3);
echo 'tres';
*/

$nome = 'Davi';

if($nome == 'Davi'){
    echo 'tudo certo'; 
    echo '<br />';
}else{
    die('o script interrompeu a execução');
}

sleep(3);
echo 'um';
echo '<br />';

sleep(3);
echo 'dois';
echo '<br />';

sleep(3);
echo 'tres';



?>