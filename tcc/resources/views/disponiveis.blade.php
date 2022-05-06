@include('/components/header')
@include('/components/navbar')




    
    <div id="busca">
      
            
  
    <div id="anuncios-container" class="col-md-12">
    <h2>Anúncios</h2>
    @if(count($anuncios)>0)
    <div id="cards-container" class="row">
        @foreach($anuncios as $anuncio)
        <div class="card col-md-3">
            <img src="/img/anuncios/2b26aa75bdf5aec0f43b9bd76cd017fd.png" alt="">
            <div class="card-body">
              <h5 class="card-title">{{$anuncio->titulo}}</h5>
              <h5 class="card-address">{{$anuncio->endereco}}</h5>
              <h5 class="card-cep">{{$anuncio->univ}}</h5>
              
            
              <form action="/anuncios/{{$anuncio->id}}" id="freserva" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="date" name="inicio" id="inicio" value="{{$data_inicial}}" readonly hidden>
            
            <input type="date" name="fim" id="fim" value="{{$data_final}}" readonly hidden>
            
            <input type="number" name="preco" id="preco" value="{{$anuncio->preco}}" readonly hidden>          
           
            <input type="submit" class="btn-vermais" value="Ver mais"/>

        
        </form> 
            
            </div>
        </div>
        
        @endforeach
      
    </div>
    @else
    <p>Não há anúncios na(s) data(s) e/ou preço especificado(s). <a href="/index">Voltar para a Busca</a></p>
    @endif
   
    </body>
</hmtl>
 
