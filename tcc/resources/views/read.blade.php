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
            <br/>
            <br/>
            
             <h5>Verificar Disponibilidade</h5>      
        <form action="/index" id="formRes" method="post" enctype="multipart/form-data">
            @csrf
            Data Inicial: <input type="date" name="data_inicial" id="di">
            <br/>
            <br/>
            Data Final: <input type="date" name="data_final" id="df">
            <br/>
            <br/>
           
            <input type="submit" value="Verificar"/>

        
        </form> 
       
            
            
        </div>
        </div>
            
            
            

</div>
    </body>
</hmtl>
 
