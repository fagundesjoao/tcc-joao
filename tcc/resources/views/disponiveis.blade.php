@include('/components/header')
@include('/components/navbar')



<body>
    
    <div id="busca">
              
            
  
    <div id="anuncios-container" class="col-md-12">
    <h2>Anúncios</h2>
    <div id="cards-container" class="row">
        @foreach($vdimovel as $vdimovel)
        <div class="card col-md-3">
            <img src="/img/anuncios/2b26aa75bdf5aec0f43b9bd76cd017fd.png" alt="">
            <div class="card-body">
              <h5 class="card-title">{{$vdimovel->titulo}}</h5>
              <h5 class="card-address">{{$vdimovel->endereco}}</h5>
              <h5 class="card-cep">{{$vdimovel->univ}}</h5>
              
              
            </div>
        </div>
        
        @endforeach
   


    </div>

   
    </body>
</hmtl>
 
