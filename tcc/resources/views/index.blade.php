@include('/components/header')
@include('/components/navbar')




    
    <div id="datas">
              
               
        <form action="/disponiveis" id="formBusca" method="POST">
            @csrf

            <table id="tabela-busca"> 
                <tr>
                    <td><h4>Data Inicial</h4></td>
                    <td><h4>Data Final</h4></td>
                    <td><h4>Preço diária</h4></td>
                    <td><h4>Nº de Hóspedes</h4></td>
                    <td><h4>Universidade</h4></td>
                </tr>   

                <tr>
                    <td><input type="date" name="data_inicial" class="data_inicial" id="di" required> </td>
                    <td><input type="date" name="data_final" class="data_final" id="df" required></td>
                    <td><input type="number" name="preco" class="preco" id="preco" value="1000" required></td>
                    <td><input type="number" name="hospedes" class="hospedes" id="hospedes" value="0" required></td>
                    <td>
                        <select name="univ" id="univ">
                        <option value="IFSP">IFSP - Guarulhos</option>  
                        <option value="Universidade Guarulhos">Universidade Guarulhos</option>
                        <option value="UNIFESP">UNIFESP</option>
                        <option value="Anhanguera">Anhanguera</option>
                        <option value="São Judas">São Judas</option>
                        <option value="ENIAC">ENIAC</option>
                        <option value="FIG UNIMESP">FIG UNIMESP</option>
                        <option value="UNINOVE">UNINOVE</option>
                    </td>
            </select>
                </tr>

            </table>
                <input type="submit" id="busca_imovel" class="busca_imovel" value="Buscar"/>
            
                     
            

        
        </form> 
        
        

     
    </body>
</hmtl>
 
