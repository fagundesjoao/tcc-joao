@include('/components/header')
@include('/components/navbar')



    <div id="form">
        <h3>Cadastro de Anúncio</h3>
        <br/>
        <form action="/anuncios" id="formCad" method="post" enctype="multipart/form-data">
            @csrf 
            
            <input type="text" name="titulo" id="titulo" placeholder="Título do Anúncio" required/>
            <input type="text" name="endereco" id="endereco" placeholder="Endereço" required/><br/><br/>
            <input type="text" name="cep" id="cep" placeholder="CEP" pattern="[0-9]+$" required/>
            <input type="text" name="bairro" id="bairro" placeholder="Bairro"/><br/><br/>
            <select name="univ" id="univ">
                <option value="IFSP">IFSP - Guarulhos</option>  
                <option value="Universidade Guarulhos">Universidade Guarulhos</option>
                <option value="UNIFESP">UNIFESP</option>
                <option value="Anhanguera">Anhanguera</option>
                <option value="São Judas">São Judas</option>
                <option value="ENIAC">ENIAC</option>
                <option value="FIG UNIMESP">FIG UNIMESP</option>
                <option value="UNINOVE">UNINOVE</option>

            </select>
            
            <input type="text" name="area_total" id="area_total" placeholder="Área Total (m²)" pattern="[0-9]+$" required/><br/><br/>
            <input type="text" name="qtd_quartos" id="qtd_quartos" placeholder="Número de Quartos" pattern="[0-9]+$" required/>
            <input type="text" name="descricao" id="descricao" placeholder="Descrição"/><br/><br/>
            <input type="text" name="qtd_hospedes" id="qtd_hospedes" placeholder="Quantidade de Hóspedes"/>
            <input type="text" name="preco" id="preco" placeholder="Preço" pattern="[0-9]+$" required/><br/><br/>
            <label for="img">Enviar imagem:</label>
        
            <input type="file" id="img" name="image" accept="image/png, image/jpeg"/>
            <br/><br/>
            <input type="submit" class="criar_anuncio" value="Criar Anúncio"/>

        </form>
</div>
</body>
</html>
