<?php
 require __DIR__.'./vendor/autoload.php';

 use GenPHPSDK\Client;

 $client = new Client([
     'host' => 'http://localhost',
     'port' => 3000,
     'key'  => 'xkejhkakjgagsaksjgkajsgkajsgkasjkasdkassjgkasjgkajskcmsakjgkasjgakdksajfakj'
 ]);

 echo $client->push('chat messages',[
     'receiver' => 'abduls', 
     'to'   => 'yusuf',
     'message' => 'hello'
]);