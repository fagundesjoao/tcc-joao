@include('/components/header')
@include('/components/navbar')



    
<div class="col-md-10 offset-md-1 dashboard-title-container">
          
     <h3>Agenda</h3>
</div>
<div class="col-md-10 offset-md-1 dashboard-anuncios-container">
    @if(count($reservas)>0)
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th><b>Anúncio</b></th>
                    <th><b>Check-in</b></th>
                    <th><b>Check-out</b></th>    
                    <th>Total</th>             
                </tr>
                </thead>
                <tbody>
        @foreach($reservas as $reserva)
                <tr>
                    <td scope="row">{{$loop->index + 1}}</td>
                    <td>{{$reserva->titulo}}</td>
                    <td>{{$reserva->data_inicial}}</td>
                    <td>{{$reserva->data_final}}</td>
                    <td>{{$reserva->total}}</td>
                </tr>
      
        @endforeach
                </tbody>
        </table>
        {{$reservas->links()}}
        @else
    <p>Não há reservas para os imóveis especificados. </p>
        @endif
    </div>
 

@include('/components/footer')