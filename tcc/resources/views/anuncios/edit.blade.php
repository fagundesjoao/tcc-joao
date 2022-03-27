@include('/components/header')


<body>

    <button class="voltar" onClick="history.go(-1)"><<<</button>
    <div id="form">
    
    <h2>Edição de Anúncio: {{$anuncio->titulo}}</h2>
    <br/>
    <form action="/anuncios/update/{{$anuncio->id}}" id="formCad" method="post" enctype="multipart/form-data">
        @csrf 
        @method('PUT')
        <img src="/img/anuncios/{{$anuncio->image}}" alt="{{$anuncio->titulo}}" class="img-preview">
        <input type="text" name="titulo" id="titulo" placeholder="Título do Anúncio" value="{{$anuncio->titulo}}" required/>
        <input type="text" name="endereco" id="endereco" placeholder="Endereço" value="{{$anuncio->endereco}}" required/><br/><br/>
        <input type="text" name="cep" id="cep" placeholder="CEP" pattern="[0-9]+$" value="{{$anuncio->cep}}" required/>
        <select name="univ" id="univ" value="{{$anuncio->univ}}">
            <option value="ifsp-gru">IFSP Guarulhos</option>  
            <option value="ung">Universidade Guarulhos</option> 
        </select>
        <br/><br/>
        <input type="text" name="area_total" id="area_total" placeholder="Área Total" pattern="[0-9]+$" value="{{$anuncio->area_total}}" required/>
        <input type="text" name="qtd_quartos" id="qtd_quartos" placeholder="Número de Quartos" pattern="[0-9]+$" value="{{$anuncio->qtd_quartos}}" required/><br/><br/>
        <input type="text" name="descricao" id="descricao" placeholder="Descrição" value="{{$anuncio->descricao}}"/>
        
        <input type="number" name="preco" id="preco" placeholder="Preço" value="{{$anuncio->preco}}" required/><br/><br/>
        <label for="img">Enviar imagem:</label>
       
        <input type="file" id="image" name="image" accept="image/png, image/jpeg"/>
        <br/><br/>
        <input type="submit" value="Editar Anúncio"/>

    </form>
</div>
</body>
</html>
