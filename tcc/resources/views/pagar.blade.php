@include('/components/header')
@section("script.js")
<script type="text/javascript"
  src="https://stc.pagseguro.uol.com.br/pagseguro/api/v2/checkout/pagseguro.directpayment.js">
</script>
<script scr="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    function carregar(){
        PagSeguroDirectPayment.setSessionId('{{$sessionID}}')
    }
    $(function(){
        carregar();
        $(".ncredito").on('blur', function(){
            PagSeguroDirectPayment.onSenderHashReady(function(response){
                if(response.status == 'error'){
                    console.log(response.message)
                    return false
                }

                var hash = response.senderHash
                $(".hashseller").val(hash)
            })
        })
    })  
    

</script>


@endsection
<body>
    
    <div id="pagar">
        
        <form action="#" id="pagamento">
            @csrf
            <input type="text" name="hashseller" class="hashseller"/>
            <input type="text" name="ncredito" class="ncredito form-control" placeholder="Cartão de Crédito"/>
            <br/>
            <br/>
            <input type="text" name="ncvv" class="ncvv form-control" placeholder="CVV"/>
            <br/>
            <br/>
            <input type="text" name="mesexp" class="mesexp form-control" placeholder="Mês de Expiração"/>
            <br/>
            <br/>
            <input type="text" name="anoexp" class="anoexp form-control" placeholder="Ano de Expiração"/>
            <br/>
            <br/>
            <input type="text" name="nomecartao" class="nomecartao form-control" placeholder="Nome no Cartão"/>
            <br/>
            <br/>
            <input type="text" name="nparcela" class="nparcela form-control" placeholder="Parcelas"/>
            <br/>
            <br/>
            <input type="text" name="totalfinal" class="totalfinal form-control" placeholder="Total"/>
            <br/>
            <br/>
            <input type="text" name="totalparcela" class="totalparcela form-control" placeholder="Valor da Parcela"/>
            <br/>
            
            <input type="submit" value="Pagar" class="btn-pagar"/>
        </form>
    </div>

</body>