@include('/components/header')
@include('/components/navbar')





    <div id="datas">
              
               
        <form action="/disponiveis" class="row g-3" id="formBusca" method="POST">
            @csrf
            <div class="col-md-3">
                <label for="inicio" class="form-label">Data Inicial</label>        
                <input type="date" name="data_inicial" class="form-control" id="di" required>
            </div>
            <div class="col-md-3">
                <label for="fim" class="form-label">Data Final</label>  
                <input type="date" name="data_final" class="form-control" id="df" required>
            </div>
            <div class="col-md-2">
                <label for="preco" class="form-label">Preço</label>
                <input type="number" name="preco" class="form-control" id="preco" value="1000" required>
            </div>
            <div class="col-md-2">
                <label for="hospedes" class="form-label">Nº Hóspedes</label>    
                <input type="number" name="hospedes" class="form-control" id="hospedes" value="0" required>
            </div>    
            <div class="col-md-2">
                <label for="univ" class="form-label">Universidade</label>        
                <select name="univ" id="univ" class="form-control">
                        <option value="IFSP">IFSP</option>  
                        <option value="Universidade Guarulhos">Universidade Guarulhos</option>
                        <option value="UNIFESP">UNIFESP</option>
                        <option value="Anhanguera">Anhanguera</option>
                        <option value="São Judas">São Judas</option>
                        <option value="ENIAC">ENIAC</option>
                        <option value="FIG UNIMESP">FIG UNIMESP</option>
                        <option value="UNINOVE">UNINOVE</option>
                    
                </select>
            </div>    

            <div class="col-md-12">
                <button type="submit" class="btn btn-primary">Enviar</button>
            </div>
                            
                    
        </form> 
        
        

    </div>

@include('/components/footer')
 
