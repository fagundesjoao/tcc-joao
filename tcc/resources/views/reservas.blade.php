@include('/components/header')
@include('/components/navbar')

<div id="reservas">
    <div class="col-md-10 offset-md-1 dashboard-title-container">
        <h3>Histórico de Reservas</h3>
    </div>
        <div class="col-md-10 offset-md-1 dashboard-anuncios-container">
        @if(count($minhas_reservas)>0)
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th>Título</th>
                <th scope="col">Check-in</th>
                <th scope="col">Check-out</th>
                <th scope="col">Total (R$)</th>
            </tr>
            </thead>
        
        <tbody> 
            @foreach($minhas_reservas as $reservas)
                <tr>
                    <td scope="row">{{$loop->index + 1}}</td>
                    <td>{{$reservas->titulo}}</td>
                    <td>{{$reservas->data_inicial}}</td>
                    <td>{{$reservas->data_final}}</td>
                    <td>{{$reservas->total}}</td>
                    </tr>
            @endforeach
        </tbody>
        </table>
        {{$minhas_reservas->links()}}

        @else
        <p>Você ainda não possui anúncios, <a href="/anuncios/create">Cadastrar Anúncio</a></p>
        @endif 
    </div>
</div>
@include('/components/footer')