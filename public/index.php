<?php

## Thread-safety support

/** THREAD DE ENVIO DE E-MAIL *******************/
class tEmail extends Thread
{
     private $id;

     public function __construct($id)
     {
           $this->id = $id;
     }

     public function run()
     {
         sleep(rand (1, 50));
         echo "Thread: ".$this->id.", Email enviado; ".date("d/m/Y H:i:s")."\r\n";
     }

     public function getId(){
          return $this->id;
     }
}

//Criar 50 thread para rodar
$tEmail = array();
for($i=0;$i<50;$i++){
    $tEmail[] = (new tEmail($i));
}

foreach ($tEmail as $t) {
   echo ("Thread " . $t->getId() . " iniciada! \r\n");
   $t->start(); //Manda rodar em paralelo
}

//Você pode trabalhar com as instancias delas, mesmo estando em paralelo
foreach ($tEmail as $t) {
     while ($t->isRunning()) { //Pode ser verificado se ainda está rodando
        usleep(100);
     }
     echo ("Thread " . $t->getId() . " finalizada! \r\n");
}
