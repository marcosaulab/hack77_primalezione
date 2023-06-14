<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// ! viene controllato se esiste una rotta che risponde ad una richiesta GET e che ha come uri / ?
// ! SI -> 

Route::get('/', function () {

    // ! se esiste viene fatta scattare, viene triggerata la funzione relativa all'uri e al tipo di richiesta.
    // ! in questo caso la funzione ritorna un file di vista

    $ricetteArray = [
       [ 
        "nome" => "Spaghetti al sugo",
        "descrizione" => "aiueywfhgifherwiufher",
       ], 
       [ 
        "nome" => "Pizza",
        "descrizione" => "pizza bla bla sadjfhasdjkfh j",
       ], 
       [ 
        "nome" => "Agnello al forno",
        "descrizione" => "angello jsdo hofhja iofds ",
       ], 
    ];
    $cateogrieArray = ["Primi", "Secondi", "Altro"];

    return view('welcome', [
        'ricette' => $ricetteArray, 
        'categorie' => $cateogrieArray
    ]); 
                            // ! entra nella cartella resources/views controlla se c'è un file che si chiama welcome
                            // ! e in caso positivo lo ritorna
});

Route::get('/chi-siamo', function() {

    $arrayTeam = ["Mario", "Anna", "Gigi"]; 

    return view('chisiamo', ['staff' => $arrayTeam]);

});