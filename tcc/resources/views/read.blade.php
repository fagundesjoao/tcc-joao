@include('/components/header')
@include('/components/navbar')



<body>
    
    <h2 class="titulo_anuncio">{{$anuncio->titulo}}</h2>
    <div class="col-md-10 offset-md-1">
        <div class="row">
            <div id="image-container" class="col-md-6">
                <img src="/img/anuncios/{{$anuncio->image}}" class="img-fluid" alt="{{$anuncio->titulo}}">
            </div>
        
        <div id="info-container" class="col-md-6">
                      
            <h5>Endereço</h5><p>{{$anuncio->endereco}}</p>
            <h5>CEP</h5><p>{{$anuncio->cep}}</p>
            <h5>Universidade Próxima</h5><p>{{$anuncio->univ}}</p>
            <h5>Área total (m²)</h5><p>{{$anuncio->area_total}}</p>
            <h5>Quartos</h5><p>{{$anuncio->qtd_quartos}}</p>
            <h5>Descrição</h5><p>{{$anuncio->descricao}}</p>
            <tr>
            <h5>Preço</h5><p>R$ {{$anuncio->preco}}</p>

            <a href=# class="reservar">Reservar</a>
            
        </div>
        </div>
            
            
            

</div>
    </body>
</hmtl>
 
