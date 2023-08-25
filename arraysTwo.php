<?php

// $arr = array("dado1", "dado2");

// $secondArr = [
//     "aluno1"=>"David",
//     "aluno2"=>"John",
// ];

// $human = [
//     "membros"=>[
//         "pernas","braços"
//     ],
//     "cabeça",
// ];


$invoices = [
    "25/08"=> "aluguel",
    "26/08"=>"água",
    "27/08"=>"energia",
];

$invoices = [
    [
        "due_date"=>"25/08",
        "description"=> "Aluguel"   
    ],
    // ...
];


// Adicionar mais uma fatura
array_push($invoices, [
    "due_date"=>"25/08",
    "description"=>"condomínio"
]);

// array_pop($invoices);
//array_shift($invoices);

$otherInvoice = [
    "due_date"=>"25/08",
    "description"=>"academia",
];

// array_unshift($invoices, $otherInvoice);

// ============================================

$market = ["papel higienico", "frutas","verduras","carne"];

// quantidade de itens par ao mercado.

$qty = count($market);

echo "Eu preciso comprar {$qty}  itens no Mercado <br/>";

echo implode(', ', $market);

// echo implode(", ", $invoices); -> PELAMOR DE DEUS!!



// $invoices = array_map(function($invoice){
//     // $invoice["QUALQUER"] = "OK"; 

//     if($invoice["description"] == "Aluguel"){
//         $invoice["warning"] = true;
//     }

//     return $invoice;
// }, $invoices);

// arrow function

// $invoices = array_map(fn($invoice)=> ($invoice['description'] == 'Aluguel' 
// ? $invoice 
// : null), $invoices);

// echo "<ul>" ."<li>". implode("</li><li>", $printArr)."</li></ul>"; 

echo "<pre>";
print_r(compact('invoices'));
echo "</pre>";