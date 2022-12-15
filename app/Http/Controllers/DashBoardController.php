<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Produto;
use App\Models\Categoria;
use DB;

class DashBoardController extends Controller
{

    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    // public function __construct()
    // {
    //     $this->middleware('auth')->only('index');
    // }

    // public function __construct()
    // {
    //     $this->middleware('auth')->only(['index', 'home']);
    // }

    // public function __construct()
    // {
    //     $this->middleware('auth')->except('index');
    // }

    public function index()
    {
        $usuarios = User::all()->count();

        // Gráfico 1 - Usuários

        $usersData = User::select([
            DB::raw('YEAR(created_at) as ano'),
            DB::raw('COUNT(*) as total')
        ])
        ->groupBy('ano')->orderBy('ano', 'desc')->get();

        // Preparar arrays

        foreach($usersData as $user) {
            $ano[] = $user->ano;
            $total[] = $user->total;
        }

        // Formatar para chartjs

        $userLabel = "'Comparativo de cadastros de usuários'";
        $userAno = implode(',', $ano);
        $userTotal = implode(',', $total);

        // Gráfico 2 - Categorias

        $catData = Categoria::all();
        //$catData = Categoria::with('produtos')->get();

        foreach($catData as $cat) {
            $catNome[] = "'".$cat->nome."'";
            $catTotal[] = Produto::where('id_categoria', $cat->id)->count();
            //$catTotal[] = $cat->produtos->count();
        }

        // Formatar para chartjs

        $catLabel = implode(',', $catNome);
        $catTotal = implode(',', $catTotal);

        return view('admin.dashboard', compact('usuarios', 'userLabel', 'userAno', 'userTotal', 'catLabel', 'catTotal'));
    }
}
