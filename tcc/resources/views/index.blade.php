@include('/components/header')
@include('/components/navbar')



<body>
    
    <div id="busca">
              
        <form action="" method="post" class="campo_busca">
        
        <input type="text" placeholder="Pesquisar..."/>
        
        </form> 
        
    </div>
    <div id="anuncios-container" class="col-md-12">
    <h2>Anúncios</h2>
    <div id="cards-container" class="row">
        @foreach($anuncios as $anuncio)
        <div class="card col-md-3">
            <img src="/img/anuncios/2b26aa75bdf5aec0f43b9bd76cd017fd.png" alt="">
            <div class="card-body">
              <h5 class="card-title">{{$anuncio->titulo}}</h5>
              <h5 class="card-address">{{$anuncio->endereco}}</h5>
              <h5 class="card-cep">{{$anuncio->univ}}</h5>
              <a href="/anuncios/{{$anuncio->id}}" class="btn-vermais">Ver mais</a>
              
            </div>
        </div>
        
        @endforeach
    </div>
</div>
    
    </body>
</hmtl>
 
