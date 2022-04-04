<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Anuncio;


class AnunciosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    
    
    public function index()
    {
        $anuncios = Anuncio::all();
        return view('index',['anuncios' => $anuncios]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('anuncios.create', ['action'=>route('anuncios.store'), 'method'=>'post']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $anuncio = new Anuncio;

        $anuncio->user_id = Auth::user()->id;
        $anuncio->titulo = $request->titulo;
        $anuncio->endereco = $request->endereco;
        $anuncio->cep = $request->cep;
        $anuncio->univ = $request->univ;
        $anuncio->area_total = $request->area_total;
        $anuncio->qtd_quartos = $request->qtd_quartos;
        $anuncio->descricao = $request->descricao;
        $anuncio->preco = $request->preco;

        //Upload de imagem
        if($request->hasFile('image') && $request->file('image')->isValid()){
            $requestImage = $request->image;
            $extension =  $requestImage->extension();
            
            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

            $request->image->move(public_path('img/anuncios'), $imageName);

            $anuncio->image = $imageName;
        }

        $anuncio->save();
        return view('anuncios.create');
    }

    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id, Request $request)
    {   
        $inicio = $request->input('inicio');
        $fim = $request->input('fim');
        $preco = $request->input('preco');
        $anuncio = Anuncio::findOrFail($id);
       
        $dinicial = strtotime($inicio);
        $dfinal = strtotime($fim);

        $diferenca = abs($dfinal-$dinicial);
        $ndias = $diferenca/86400;

        $ndias = intval($ndias);
        $ndias = $ndias + 1;
        
        $total = $preco * $ndias;

        //dd($total);
        return view('read', ['anuncio'=>$anuncio, 'inicio'=>$inicio, 'fim'=>$fim, 'total'=>$total]);
        
    }

    public function dashboard(){
        $user = auth()->user();
        
        $anuncios = $user->anuncios;
        
        //dd($anuncios);
        return view('dashboard', ['anuncios' => $anuncios]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $anuncio = Anuncio::findOrFail($id);

        return view('anuncios.edit', ['anuncio' => $anuncio]);
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
        $data = $request->all();

        if($request->hasFile('image') && $request->file('image')->isValid()){
            
            $requestImage = $request->image;
            
            $extension =  $requestImage->extension();
            
            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

            $request->image->move(public_path('img/anuncios'), $imageName);

            $data['image'] = $imageName;
            
        }

        Anuncio::findOrFail($request->id)->update($data);

        return redirect('/dashboard')->with('msg', 'Anúncio editado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Anuncio::findOrFail($id)->delete();

        return redirect('/dashboard')->with('msg', 'Anúncio excluído com sucesso!');
    }
}
