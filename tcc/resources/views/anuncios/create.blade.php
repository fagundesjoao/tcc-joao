@include('/components/header')
@include('/components/navbar')



  <div id="cadastro">
        <h3>Cadastrar Anúncio</h3>
        <form action="/anuncios" class="row g-3" method="post" enctype="multipart/form-data">
            @csrf
          <div class="col-md-6">
            <label for="titulo" class="form-label">Título</label>
            <input type="text" class="form-control" name="titulo" id="titulo" maxlength="100" required>
          </div>
          <div class="col-md-6">
            <label for="endereco" class="form-label">Endereço</label>
            <input type="text" class="form-control" name="endereco" id="endereco" maxlength="300" required>
          </div>
            <div class="col-md-6">
            <label for="cep" class="form-label">CEP</label>
            <input type="text" class="form-control" pattern="[0-9]{8}" name="cep" id="cep" required>
          </div>
          <div class="col-md-6">
            <label for="inputPassword4" class="form-label">Bairro</label>
            <input type="text" class="form-control" id="bairro" name="bairro" maxlength="80" required>
          </div>

          <div class="col-md-6">
            <label for="univ" class="form-label">Universidade</label>
            <select id="univ" name="univ" class="form-select">
               <option value="IFSP">IFSP - Guarulhos</option>  
                        <option value="Universidade Guarulhos">Universidade Guarulhos</option>
                        <option value="UNIFESP">UNIFESP</option>
                        <option value="Anhanguera">Anhanguera</option>
                        <option value="São Judas">São Judas</option>
                        <option value="ENIAC">ENIAC</option>
                        <option value="FIG UNIMESP">FIG UNIMESP</option>
                        <option value="UNINOVE">UNINOVE</option>
            </select>
          </div>
          <div class="col-md-6">
            <label for="area" class="form-label">Área Total (m²)</label>
            <input type="text" class="form-control" pattern="[0-9]{2,11}" name="area_total" id="area_total" required>
          </div>
           <div class="col-md-4">
            <label for="quartos" class="form-label">Nº de Quartos</label>
            <input type="text" class="form-control" pattern="[0-9]{1,11}" name="qtd_quartos" id="qtd_quartos" required>
          </div>
           
          <div class="col-md-4">
            <label for="quartos" class="form-label">Nº de Hóspedes</label>
            <input type="text" class="form-control" pattern="[0-9]{1,11}" name="qtd_hospedes" id="qtd_hospedes" required>
          </div>

          <div class="col-md-4">
            <label for="preco" class="form-label">Preço diária (R$)</label>
            <input type="text" class="form-control" pattern="[0-9]+$" id="preco" name="preco" required>
          </div>
          
          <div class="col-md-12">
            <label for="descricao" class="form-label">Descrição</label>
            <input type="text" class="form-control" name="descricao" id="descricao" required>
          </div>
          
            <div class="col-md-4">
            <label for="imagem" class="form-label">Enviar Imagem</label>
            <input type="file" class="form-control" name="image" id="img" accept="image/png, image/jpeg" required>
          </div>

          <div class="col-md-12">
            <button type="submit" class="btn btn-primary">Cadastrar</button>
          </div>
        </form>
    </div>


@include('/components/footer')
</body>
</html>