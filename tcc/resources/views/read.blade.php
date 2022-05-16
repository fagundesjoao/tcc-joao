@include('/components/header')
@include('/components/navbar')




    
    <h2 class="titulo_anuncio">{{$anuncio->titulo}}</h2>
    <div class="col-md-10 offset-md-1">
        <div class="row">
            
        
        <div id="info-container" class="col-md-6">
            <div id="image-container" class="col-md-6">
                <img src="/img/anuncios/{{$anuncio->image}}" class="img-fluid" alt="{{$anuncio->titulo}}">
            </div>            
        
            <h5>Endereço</h5><p>{{$anuncio->endereco}}</p>
            <h5>CEP</h5><p>{{$anuncio->cep}}</p>
            <h5>Universidade Próxima</h5><p>{{$anuncio->univ}}</p>
            <h5>Área total (m²)</h5><p>{{$anuncio->area_total}}</p>
            <h5>Quartos</h5><p>{{$anuncio->qtd_quartos}}</p>
            <h5>Hóspedes</h5><p>{{$anuncio->qtd_hospedes}}</p>
            <h5>Descrição</h5><p>{{$anuncio->descricao}}</p>
            <tr>
            <h5>Preço (diária)</h5><p>R$ {{$anuncio->preco}}</p>
            <br/>
            <br/>
            
            <h5>Reserva</h5>      
            <form action="/pagar" id="formRes" method="post" enctype="multipart/form-data">
            @csrf

            <input type="number" name="id" id="id" value="{{$anuncio->id}}" readonly hidden>

            Data Inicial: <input type="date" name="data_inicial" id="di" value="{{$inicio}}" readonly required>
            <br/>
            <br/>
            Data Final: <input type="date" name="data_final" id="df" value="{{$fim}}" readonly required>
            <br/>
            <br/>
            Preço (R$): <input type="number" name="preco" id=preco value="{{$anuncio->preco}}" readonly required>
            <br/>
            <br/>
            Total (R$): <input type="number" name="total" id="total" value="{{$total}}" readonly required>
           
            <input type="submit" class="reservar" value="Reservar"/>

        
        </form> 
       
            
            
        </div>
        </div>
            
            
            

</div>

@include('/components/footer')
 
