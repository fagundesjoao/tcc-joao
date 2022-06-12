@include('/components/header')
@include('/components/navbar')


<h3>Meus Anúncios</h3>

<div id="meus_anuncios">
    <div class="col-md-10 offset-md-1 dashboard-anuncios-container">
        @if(count($anuncios)>0)
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Título</th>
                <th scope="col">Ações</th>
                
            </tr>
            </thead>
        
        <tbody> 
            @foreach($anuncios as $anuncio)
                <tr>
                    <td scope="row">{{$loop->index + 1}}</td>
                    <td><a href="#" class="titulo_anuncio">{{$anuncio->titulo}}</a></td>
                    <td>
                    <button class="btn btn-primary"><a href="/anuncios/edit/{{$anuncio->id}}" class="edit">Editar</a></button>
                    <form action="/dashboard" method="POST">
                        @csrf 
                        <input type="number" value="{{$anuncio->id}}" name="id_anuncio" hidden>
                        <button type="submit" class="btn btn-primary" onclick="return confirm('Você tem certeza que deseja desativar este anúncio?')">Desativar</button>
                    </form>
                    </td>
                    </tr>
            @endforeach
        </tbody>
        </table>
    
        @else
        <p>Você ainda não possui anúncios, <a href="/anuncios/create">Cadastrar Anúncio</a></p>
        @endif 
    </div>
</div>
@include('/components/footer')