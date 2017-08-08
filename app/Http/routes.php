<?php

use Illuminate\Support\Facades\DB;
use App\Researcher;
use App\Paper;
use Illuminate\Http\Request;



/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/



/*
|--------------------------------------------------------------------------
| Home
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    $papers = Paper::orderBy('id', 'asc')->get();
    
    return view('welcome',  [
        'papers' => $papers
    ]);
});


/*
|--------------------------------------------------------------------------
| Sobre Nós
|--------------------------------------------------------------------------
*/
Route::get('/about-us', function(){
    $papers = Paper::orderBy('name', 'asc')->get();

    return view('AboutUs.about-us',  [
        'papers' => $papers
    ]);
});

Route::get('/sobrenos/missao', function(){
    $papers = Paper::orderBy('name', 'asc')->get();

    return view('AboutUs.missao',  [
        'papers' => $papers
    ]);
});

Route::get('/sobrenos/visao', function(){
    $papers = Paper::orderBy('name', 'asc')->get();

    return view('AboutUs.visao', [
    'papers' => $papers
    ]);
});

Route::get('/sobrenos/estrategia', function(){
    $papers = Paper::orderBy('name', 'asc')->get();

    return view('AboutUs.estrategia', [
        'papers' => $papers
    ]);
});



/*
|--------------------------------------------------------------------------
| Linhas de Pesquisa
|--------------------------------------------------------------------------
*/
<<<<<<< HEAD
Route::get('/Neuromodulacao', function(){
    $papers = Paper::orderBy('name', 'asc')->get();

    return view('Fields.Neuromodulacao', [
=======
Route::get('/mission', function(){
    $papers = Paper::orderBy('name', 'asc')->get();

    return view('Fields.mission', [
>>>>>>> b16558901def363bd4f77a0794e8071279ca30fb
        'papers' => $papers
    ]);
});
    Route::get('/Neuromodulacao/WhitePaper', function(){
        $papers = Paper::orderBy('name', 'asc')->get();

        return view('Fields.LinhasDePesquisa.WhitePaper', [
            'papers' => $papers
        ]);
    });
    
    Route::get('/Diagnostico/Clinico', function(){
        $papers = Paper::orderBy('name', 'asc')->get();

        return view('Fields.LinhasDePesquisa.Clinico', [
            'papers' => $papers
        ]);
    });
    
<<<<<<< HEAD
    Route::get('/Diagnostico/Biologico', function(){
=======
    Route::get('/Biologico', function(){
>>>>>>> b16558901def363bd4f77a0794e8071279ca30fb
        $papers = Paper::orderBy('name', 'asc')->get();

        return view('Fields.LinhasDePesquisa.Biologico', [
            'papers' => $papers
        ]);
    });
    
    Route::get('/linhasdepesquisa/Neurofeedback', function(){
        $papers = Paper::orderBy('name', 'asc')->get();

        return view('Fields.LinhasDePesquisa.Neurofeedback', [
            'papers' => $papers
        ]);
    });
    
    Route::get('/linhasdepesquisa/RemediacaoCognitiva', function(){
        $papers = Paper::orderBy('name', 'asc')->get();

        return view('Fields.LinhasDePesquisa.RemediacaoCognitiva', [
            'papers' => $papers
        ]);
    });

    Route::get('/linhasdepesquisa/QEEG', function(){
        $papers = Paper::orderBy('name', 'asc')->get();

        return view('Fields.LinhasDePesquisa.QEEG', [
            'papers' => $papers
        ]);
    });

    Route::get('/linhasdepesquisa/EyeTracking', function(){
        $papers = Paper::orderBy('name', 'asc')->get();

        return view('Fields.LinhasDePesquisa.EyeTracking', [
            'papers' => $papers
        ]);
    });

    
    Route::get('/linhasdepesquisa/FMRI', function(){
        $papers = Paper::orderBy('name', 'asc')->get();

        return view('Fields.LinhasDePesquisa.FMRI', [
            'papers' => $papers
        ]);
    });
    
    
<<<<<<< HEAD
    Route::get('/Diagnostico', function(){
        $papers = Paper::orderBy('name', 'asc')->get();

        return view('Fields.LinhasDePesquisa.Diagnostico', [
=======
    Route::get('/team', function(){
        $papers = Paper::orderBy('name', 'asc')->get();

        return view('Fields.LinhasDePesquisa.team', [
>>>>>>> b16558901def363bd4f77a0794e8071279ca30fb
            'papers' => $papers
        ]);
    });
    
    



/*
|--------------------------------------------------------------------------
| Pessoas
|--------------------------------------------------------------------------
*/
<<<<<<< HEAD
Route::get('/Cetamina', function(){
    $papers = Paper::orderBy('name', 'asc')->get();
    $researchers = Researcher::orderBy('name','asc')->get();

    return view('People.Cetamina', [
=======
Route::get('/programs', function(){
    $papers = Paper::orderBy('name', 'asc')->get();
    $researchers = Researcher::orderBy('name','asc')->get();

    return view('People.programs', [
>>>>>>> b16558901def363bd4f77a0794e8071279ca30fb
        'researchers' => $researchers,
        'papers' => $papers
    ]);
});

Route::post('/pessoas/pesquisar/', function( Request $request){
    $researchers = Researcher::where( 'name', 'like', '%'.$request->searchbar.'%')
        ->orWhere('bio','like',  '%'.$request->searchbar.'%')
        ->get();

    $papers = Paper::orderBy('name', 'asc')->get();

    return view('People.pessoas', [
        'researchers' => $researchers,
        'papers' => $papers
    ]);
});

/*
|--------------------------------------------------------------------------
| Produções
|--------------------------------------------------------------------------
*/
Route::get('/producoes', function(){
    $papers = Paper::orderBy('name', 'asc')->get();
    
    return view('Productions.producoes', [
        'papers' => $papers
    ]);
});

Route::post('/producoes/pesquisar', function( Request $request){
    $searchbar = $request->searchbar;

    $papers = DB::table('papers')->where('name', 'like','%'.$searchbar.'%')
        ->orWhere('fields','like','%'.$searchbar.'%')
        ->orWhere('summary','like','%'.$searchbar.'%')
        ->orWhere('authors','like','%'.$searchbar.'%')
        ->get();

    return view('Productions.producoes', [
        'papers' => $papers
    ]);
});
/*
|--------------------------------------------------------------------------
| PROGRAMS TEAM
|--------------------------------------------------------------------------
*/Route::get('programs/Linc', function(){
    $papers = Paper::orderBy('name', 'asc')->get();

    return view('Fields.LinhasDePesquisa.Linc', [
        'papers' => $papers
    ]);
});

Route::get('/programs/Proesq', function(){
    $papers = Paper::orderBy('name', 'asc')->get();

    return view('Fields.LinhasDePesquisa.Proesq', [
        'papers' => $papers
    ]);
});
Route::get('/programs/Prisma', function(){
    $papers = Paper::orderBy('name', 'asc')->get();

    return view('Fields.LinhasDePesquisa.Prisma', [
        'papers' => $papers
    ]);
});
Route::get('/programs/Papia', function(){
    $papers = Paper::orderBy('name', 'asc')->get();

    return view('Fields.LinhasDePesquisa.Papia', [
        'papers' => $papers
    ]);
});
Route::get('/programs/Inserir', function(){
    $papers = Paper::orderBy('name', 'asc')->get();

    return view('Fields.LinhasDePesquisa.Inserir', [
        'papers' => $papers
    ]);
});
Route::get('/programs/Teamm', function(){
    $papers = Paper::orderBy('name', 'asc')->get();

    return view('Fields.LinhasDePesquisa.Teamm', [
        'papers' => $papers
    ]);
});
Route::get('/programs/CucaLegal', function(){
    $papers = Paper::orderBy('name', 'asc')->get();

    return view('Fields.LinhasDePesquisa.CucaLegal', [
        'papers' => $papers
    ]);
});