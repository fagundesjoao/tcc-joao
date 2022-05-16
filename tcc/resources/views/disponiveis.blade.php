@include('/components/header')
@include('/components/navbar')




    
    <div id="busca">
      
            
  
    <div class="col-md-12">
    <h3>Anúncios</h3>
    @if(count($anuncios)>0)
    <div id="cards-container" class="row">
        @foreach($anuncios as $anuncio)
        <div class="card col-md-3">
            <img src="/img/anuncios/{{$anuncio->image}}" class="card-img-top" alt="">
            <div class="card-body">
              <h5 class="card-title">{{$anuncio->titulo}}</h5>
              <p class="card-text">{{$anuncio->endereco}}</h5>
              <p class="card-text">{{$anuncio->univ}}</h5>
              
            
              <form action="/anuncios/{{$anuncio->id}}" id="freserva" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="date" name="inicio" id="inicio" value="{{$data_inicial}}" readonly hidden>
            
            <input type="date" name="fim" id="fim" value="{{$data_final}}" readonly hidden>
            
            <input type="number" name="preco" id="preco" value="{{$anuncio->preco}}" readonly hidden>          
           
            <input type="submit" class="btn btn-primary" value="Ver mais"/>

        
        </form> 
            
            </div>
        </div>
        
        @endforeach
      
    </div>
    @else
    <p>Não há anúncios na(s) data(s) e/ou preço especificado(s). <a href="/index">Voltar para a Busca</a></p>
    @endif
   

@include('/components/footer')
 
