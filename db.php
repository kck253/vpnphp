<?php
'database' => [   
        'server' =>  "mongodb+srv://vpnapp:kamalcharankaushik@freecluster.mwhwi.mongodb.net/myFirstDatabase?retryWrites=true&w=majority",
        'options' => [
            'db' => 'test',
            'ssl' => true,
            'replicaSet'=> '[replicaSet value from connection string]'
        ]
    ],
?>