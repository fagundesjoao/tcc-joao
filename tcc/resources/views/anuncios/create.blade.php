@include('/components/header')
@include('/components/navbar')


<body>
    <div id="form">
    <h2>Cadastro de Anúncio</h2>
    <br/>
    <form action="/anuncios" id="formCad" method="post" enctype="multipart/form-data">
        @csrf 
        
        <input type="text" name="titulo" id="titulo" placeholder="Título do Anúncio" required/>
        <input type="text" name="endereco" id="endereco" placeholder="Endereço" required/><br/><br/>
        <input type="text" name="cep" id="cep" placeholder="CEP" pattern="[0-9]+$" required/>
        <select name="univ" id="univ">
            <option value="ifsp-gru">IFSP Guarulhos</option>  
            <option value="ung">Universidade Guarulhos</option> 
        </select>
        <br/><br/>
        <input type="text" name="area_total" id="area_total" placeholder="Área Total" pattern="[0-9]+$" required/>
        <input type="text" name="qtd_quartos" id="qtd_quartos" placeholder="Número de Quartos" pattern="[0-9]+$" required/><br/><br/>
        <input type="text" name="descricao" id="descricao" placeholder="Descrição"/>
        
        <input type="number" name="preco" id="preco" placeholder="Preço" required/><br/><br/>
        <label for="img">Enviar imagem:</label>
       
        <input type="file" id="img" name="image" accept="image/png, image/jpeg"/>
        <br/><br/>
        <input type="submit" value="Criar Anúncio"/>

    </form>
</div>
</body>
</html>
