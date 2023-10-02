<?php

//use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController; //>>Temos que informar o uso do controle
use App\Http\Controllers\ClienteController;

//Rota com controle
Route::get('/produto',[ProdutoController::class, 'index'])->name('produto.index');
//ProdutoController = controler
//Para criar o controle: php artisan make:controler ProdutoController;
//index = metodo a ser criado no ProdutoController
//Rota com controle e paramentro
Route::get('/produto/{id?}',[ProdutoController::class, 'show'])->name('produto.show');
//
Route::resource('clientes',ClienteController::class);


//Rota padrão para a view welcome do laravel
// Route::get('/', function () {
//     return view('welcome');
// });

// //Forma 1 de criar rota
// Route::get('/empresa', function(){
//     return view('site/empresa');
// });

// //Froma 2 de cria rota
// Route::view('empresa1','/site/empresa');

// //Permite todo tipo de requisição
// Route::any('/any', function(){
//     return "Permite todo tipo de acesso http (put, delete, get, post";
// });

//Permite apenas requisição definida
// Route::match(['put','delete'], '/match', function(){
//     return "Permite apenas acessos definidos";
// });

// //Rota com passagem de paramentro no get
// Route::get('/produto/{id}/{cat}', function($id,$cat){
//     return "O id do produto é: ".$id." e a categoria e:".$cat;
// });

// //Redirecionamento de rotas sobre para empresa
// Route::redirect('/sobre', '/empresa');

// //Redirecionamento de rota por nome
//  Route::get('/news',function(){
//      return view('/site/news');
//  })->name('noticias');

//  Route::get('/novidades',function(){
//      return redirect()->route('noticias');
//  });

// //Grupo de rotas por prefixo
// Route::prefix('admin')->group(function(){
//     Route::get('usuario',function(){
//         return "Usuario - Rota com Prefixo";
//     });
//     Route::get('grupo',function(){
//         return "Grupo - Rota com Prefixo";
//     });
//     Route::get('permissao',function(){
//         return "Permissao - Rota com Prefixo";
//     });
//     Route::get('log',function(){
//         return "Log - Rota com Prefixo";
//     });
// });

// //Grupo de rotas por nome
// Route::name('admin.')->group(function(){
//     Route::get('admin/usuario',function(){
//         return "Usuario - Rota com name";
//     })->name('usuario');

//     Route::get('admin/grupo',function(){
//         return "Grupo - Rota com name";
//     })->name('grupo');

//     Route::get('admin/permissao',function(){
//         return "Permissao - Rota com name";
//     })->name('permissao');
    
//     Route::get('admin/log',function(){
//         return "Log - Rota com name";
//     })->name('log');
// });

// Route::get('/',function(){
//     return redirect()->route('admin.log');
// });

