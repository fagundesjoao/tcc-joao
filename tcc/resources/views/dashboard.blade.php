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
                    <td><a href="#">{{$anuncio->titulo}}</a></td>
                    <td>
                    <button><a href="/anuncios/edit/{{$anuncio->id}}">Editar</a></button>
                    <form action="/anuncios/{{$anuncio->id}}" method="POST">
                        @csrf 
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('Você tem certeza que deseja excluir este anúncio?')">Deletar</button>
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