<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\EmailConfirmacao;
use Session;
use Stripe;

class PaymentController extends Controller
{
    
    public function index(Request $request){
        // $id = $request->input('id');
        // $inicio = $request->input('data_inicial');
        // $fim = $request->input('data_final');
        // $preco = $request->input('preco');
        // $total = $request->input('total');
        // return view('pagar',['id'=>$id, 'inicio'=>$inicio, 'fim'=>$fim, 'preco'=>$preco,'total'=>$total]);
    }

    
    public function stripePost(Request $request){
        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        Stripe\Charge::create([
            
            "amount" => $request->input('valor') * 100,
            "currency" => "brl",
            "source" => $request->stripeToken,
            "description" => "Teste"

        ]);
        
        $user_id = Auth::user()->id;
        $pagamento = DB::UPDATE("update reservas set pago = 1 where pago = 0 and user_id='$user_id' order by created_at desc limit 1");

        Session::flash('sucess', 'Pagamento realizado com sucesso');

        // Mail::raw('Você acaba de realizar uma reserva.', function($message){
        //     $message->to(Auth::user()->email)->subject('Reserva de Imóvel');
        // });

        Mail::to(Auth::user()->email)->send(new EmailConfirmacao());

        return redirect('index');
    }

    
    
}
