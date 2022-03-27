@include('/components/header')
@include('/components/navbar')



<body>
    
    <div id="busca">
              
               
        <form action="/disponiveis" id="formRes" method="POST">
            @csrf
            Data Inicial: <input type="date" name="data_inicial" id="di" required>
            <br/>
            <br/>
            Data Final: <input type="date" name="data_final" id="df" required>
            <br/>
            <br/>
            Diária (R$):<input type="number" name="preco" id="preco" value="1000" required>
            <br/>
            <input type="submit" id="busca_imovel" value="Buscar"/>

        
        </form> 
        
  
     
    </body>
</hmtl>
 
