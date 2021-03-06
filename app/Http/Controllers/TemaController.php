<?php

namespace practicasUnam\Http\Controllers;

use Illuminate\Http\Request;
use practicasUnam\Tema;
use practicasUnam\Http\Requests\TemaFormRequest;
use Illuminate\Support\Facades\Redirect;
use DB;
use practicasUnam\Utilidad;
class TemaController extends Controller
{
    public function __construct()
    {
        //si no esta logeado regresa al login
        //ES COMO EL PINCHE SPRING SECURITY :v
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        if ($request) {
            $query = trim($request->get('searchText'));
            $temas = DB::table('temas')
                ->where('descripcion', 'LIKE', '%' . $query . '%')
                ->orderBy('id_tema', 'desc')
                ->paginate(10);
            return view('tema.index', ['temas' => $temas, "searchText" => $query]);
        }
    }

    public function create()
    {
        return view('tema.create');
    }

    public function store(TemaFormRequest $request)
    {
        $tema = new Tema;
        $tema->id_tema=Utilidad::getId("temas","id_tema");
        $tema->descripcion = $request->get('descripcion');
        $tema->save();

        return Redirect::to('tema');
    }

    public function show($id)
    {
        return view('tema.show', ["tema" => Tema::findOrFail($id)]);
    }
    public function edit($id)
    {
        return view('tema.edit', ["tema" => Tema::findOrFail($id)]);
    }

    public function update(TemaFormRequest $request, $id)
    {
        $tema = Tema::findOrFail($id);
        $tema->descripcion = $request->get('descripcion');
        $tema->update();
        return Redirect::to('tema');

    }

    public function destroy($id)
    {
        $tema = Tema::findOrFail($id);
        $tema->delete();

        //Session::flash('message','El tema fue eliminado');

        return Redirect::to('tema');

    }
}
