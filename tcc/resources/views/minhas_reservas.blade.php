@include('/components/header')
@include('/components/navbar')


<body>
    
    <div id="reserva-imoveis">
      
            
  
    
    <h2>Agenda</h2>
    @if(count($reservas)>0)


            <table class="agenda_reservas">
                <thead>
                <tr>
                    <th><b>Anúncio</b></th>
                    <th><b>Check-in</b></th>
                    <th><b>Check-out</b></th>    
                                 
                </tr>
                </thead>
        @foreach($reservas as $reserva)
                <tr>
                    <td>{{$reserva->titulo}}</td>
                    <td>{{$reserva->data_inicial}}</td>
                    <td>{{$reserva->data_final}}</td>

                </tr>
                               
              
                   
        
        
        @endforeach
        </table>
           
    </div>
    @else
    <p>Não há reservas para os imóveis especificados. </p>
    @endif
   
    </body>