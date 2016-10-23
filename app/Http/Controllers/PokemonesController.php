<?php

namespace App\Http\Controllers;

use App\Entities\Especies;
use App\Entities\Pokemones;
use App\Entities\Sexos;
use App\Entities\Tipos;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class PokemonesController extends Controller
{

    protected $pokemones;

    public function __construct(Pokemones $pokemones)
    {
        $this->pokemones = $pokemones;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pokemones = $this->pokemones->all();

        return view('panel.pokemones.listPokemones',compact("pokemones"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Sexos $sexos,Especies $especies)
    {
//        AL OBJETO QUE NOS DEVUELVE ELOQUENT LE PODEMOS ENCADENAR MÉTODOS
//        LE AGREGO UN WHERE AL IGUAL EN EN UNA CONSULTA SQL PARA TRAERME SOLO LOS MACHOS
//        EL ORWHERE DICE QUE PUEDE O NO ESTAR, OSEA: TRAEME DE SEXOS LOS MACHOS (SI O SI) PERO ADEMÁS SI ENCONTRÁS HEMBRA TAMBIÉN TRAELOS
//        EL LISTS LO QUE HACE ES DEVOLVERNOS EL RESULTADO LISTADO EN UN ARRAY (NOS VA A SERVIR PARA EL VALUE Y EL DATO DENTRO DEL OPTION DEL SELECT). EL SEGUNDO PARÁMETRO ES EL INDICE DE ESE ARRAY Y EL PRIMERO ES EL VALOR DE ESE ÍNDICE:
         /*
            ARRAY = ["1" => "MACHO","2" => "HEMBRA"];
         */

        $listadoSexos = $sexos->where("sexo","macho")->orWhere('sexo',"hembra")->lists("sexo","id");

        $listadoEspecies = $especies->lists("nombre",'id');

        return view('panel.pokemones.create',compact("listadoSexos","listadoEspecies"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Requests\CreatePokemonesRequest $request)
    {
//        TRAE TODOS MENOS ESE QUE LE ESPECIFICAMOS
//        $request->except("_token");

//        TRAE SOLAMENTE ESOS CAMPOS
//        $request->only(["_token","nombre"]);

//        CONSULTAR POR ALGUN VALOR EN PARTICULAR
//        $request->has("nombre");

        $datos = $request->all();

//        PARA DAR DE ALTA UN NUEVO REGISTRO USAMOS EL MÉTODO CREATE QUE YA VIENE CON EL MODELO "MODEL" DE ELOQUENT DEL CUAL EXTENDEMOS TODOS NUESTROS MODELOS DENTRO DE ENTITIES
        $this->pokemones->create($datos);

//        REDIRIGIMOS A UNA URL, A LA PAGINA ANTERIOR O A UNA RUTA EN PARTICULAR,.

//        return redirect()->url("pokemones")->withErrors("El pokemón se dio de alta correctamente");
//        return redirect()->back()->withErrors("El pokemón se dio de alta correctamente");
        return redirect()->route("list.pokemones")->withErrors("El pokemón se dio de alta correctamente");

/*
        $rules = [
                    'nombre' => 'required|alpha',
                    'nivel' => 'required',
                    'sexos_id' => 'required|exists:sexos,id',
                    'especies_id' => 'required|exists:especies,id'
                 ];

        $messsages = [
                        "nombre.required" => "El nombre del pokemon es requerido!",
                        "nombre.alpha" => "El nombre no puede tener números ni caracteres especiales."
                     ];

*/

//        OTRO TIPO DE VALIDACIÓN MEDIANTE EL VALIDATOR DE LARAVEL
//        $validador = Validator::make($datos,$rules);
//
//        if($validador->fails()){
//            dd("falló");
//        }else{
//            dd("todo bien");
//        }

//        ACÁ USAMOS EL MÉTODO VALIDATE PASANDOLE EL REQUEST ASI COMO VIENE, LAS REGLAS Y LOS MENSAJES
//        $this->validate($request,$rules,$messsages);



    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id,Sexos $sexos, Especies $especies)
    {
//        LO BUSCO POR ID
        $pokemon = $this->pokemones->find($id);

        $listadoSexos = $sexos->where("sexo","macho")->orWhere('sexo',"hembra")->lists("sexo","id");

        $listadoEspecies = $especies->lists("nombre",'id');

        return view('panel.pokemones.create',compact('pokemon',"listadoSexos","listadoTipos", "listadoEspecies"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Requests\CreatePokemonesRequest $request, $id)
    {
        $pokemon = $this->pokemones->find($id);
        $datos = $request->all();

//        PARA MODIFICAR UN REGISTRO USAMOS EL MÉTODO UPDATE DEL MODELO "MODEL" DE ELOQUET QUE AL IGUAL QUE EN EL CREATE LE PASAMOS UN ARRAY CON LOS DATOS QUE O LOS TRAEMOS DEL REQUEST O LOS PONEMOS DE FORMA MANUAL NOSOTROS.
        /*
         $datos = [
                    "nombre" => "pika",
                    "nivel" => "25",
                    "especies_id" => "5",
                    "sexos_id" => "1"
                  ];
        */
        if($pokemon->update($datos))
            return redirect()->route('list.pokemones')->withErrors('Se modificó correctamente el pokemon');
        else
            return redirect()->back()->withErrors('No se pudo modificar el pokemon');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $pokemon = $this->pokemones->find($request->get('id'));

        if($pokemon->delete())
            return redirect()->route('list.pokemones')->withErrors('Se eliminó correctamente el pokemon');
        else
            return redirect()->back()->withErrors('No se ha podido eliminar el pokemon');

    }
}
