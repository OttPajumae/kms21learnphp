<?php


class Job {
    private $logger;

    public function __construct(ConsoleLogger $logger){
        $this->logger=$logger;
    }
    
    public function work(){
        for($i=1;$i<10; $i++){

            $this->logger->log($i);
        }
    }
}

class ConsoleLogger{
    public function log($message){
        echo $message, "\n";
    }
}

interface Logger{
    public function log($message);
}
///////////////////////

class NothingLogger{
    public function log($message){

    }
}


$consoleLogger=new ConsoleLogger();
$nothingLogger=new NothingLogger();
$job = new Job($consoleLogger);
$job->work();
// $var = new \stdClass();
// var_dump($var);


/*$name = 'Ott';
$string = "Sup $name"; /*See on tähtede jaoks. Kui kirjutada siis see annab ka tähtede arvu*/
/*var_dump($string); */
/*$num = 1;
var_dump($num);*/


/*echo "hello world!";*/