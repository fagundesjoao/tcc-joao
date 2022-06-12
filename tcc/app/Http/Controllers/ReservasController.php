<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Reserva;
use App\Http\Controllers\PaymentController;

class ReservasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */



    public function agenda(){

        $user_id = Auth::user()->id;
        $pago = 1;
        $reservas = DB::table('anuncios')->where('anuncios.user_id', $user_id)->join('reservas', 'anuncios.id', '=', 'reservas.anuncio_id')->where('reservas.pago', $pago)->paginate(5);
        
        return view('agenda', ['reservas' => $reservas]);
    }

    public function minhasReservas(){
       $user_id = Auth::user()->id;
       $pago = 1; 
       $minhas_reservas = DB::table('reservas')->where('reservas.user_id', $user_id)->where('reservas.pago', $pago)->join('anuncios', 'reservas.anuncio_id', '=', 'anuncios.id')->paginate(5);

       return view('reservas', ['minhas_reservas' => $minhas_reservas]);
    }

    public function verificacao(Request $request){
        $preco = $request->input('preco');
        $data_inicial = $request->input('data_inicial');
        $data_final = $request->input('data_final');
        $hospedes = $request->input('hospedes');
        $univ = $request->input('univ');
        $user_id = Auth::user()->id;
       
       if($data_inicial<=$data_final){
        $anuncios=DB::SELECT("select * from anuncios where id not in (select anuncio_id from reservas where '$data_inicial' <=data_final and '$data_final' >= data_inicial and ocupado = '1') and preco<='$preco' and user_id != '$user_id' and univ = '$univ' and qtd_hospedes>='$hospedes' and ativo = '1' ");
                   
        
        return view('disponiveis', ['anuncios' => $anuncios, 'data_inicial' => $data_inicial, 'data_final' => $data_final ]);
      
      
       }else{
           echo '<button class="voltar" onClick="history.go(-1)"><<<</button> <br>';
           print("Erro! Verifique as datas inseridas e tente novamente.");
       }
        
     }

    public function reservar (Request $request){
        
    }

    
    
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('read', ['action'=>route('reservas.store'), 'method'=>'post']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $reserva = new Reserva;
        
        
        $reserva->user_id = Auth::user()->id;
        $reserva->anuncio_id = $request->id;
        $reserva->data_inicial = $request->data_inicial;
        $reserva->data_final = $request->data_final;
        $reserva->preco = $request->preco;
        $reserva->total = $request->total;
        $reserva->ocupado = '1';
        $reserva->pago = '0';

        $reserva->save();

        $vtotal = $reserva->total;
        return view('pagar',['vtotal'=>$vtotal]);
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
        //
    }

   
}
