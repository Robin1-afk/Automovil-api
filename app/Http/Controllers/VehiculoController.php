<?php


namespace App\Http\Controllers;

// use Illuminate\Support\Fecades\DB;
use Illuminate\Http\Request;
use App\Models\Vehiculo;
use DB;
class VehiculoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vehiculo = Vehiculo::all();
        return $vehiculo;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $vehiculo = new Vehiculo();
        $vehiculo->placa = $request->placa;
        $vehiculo->id_marca = $request->id_marca;
        $vehiculo->tipo_v = $request->tipo_v;
        $vehiculo->propetario = $request->propetario;
        $vehiculo->id_propetario = $request->id_propetario;
        $vehiculo->save();
        return $vehiculo;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        return DB::table('vehiculos')
        ->join('marcas', 'vehiculos.id_marca' ,"=", 'marcas.id')
        ->where('marcas.id', "=" , $id)
        ->select('vehiculos.*', 'marcas.id as id_marca', 'marcas.nombre')
        ->get();

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $vehiculo = Vehiculo::destroy($id);
       return $vehiculo;
    }
}
