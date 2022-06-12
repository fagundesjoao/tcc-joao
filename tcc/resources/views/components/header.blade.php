<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>TCC</title>
 
        <style>
html, body{
  height: 100%;
  margin: 0;
}

#edit{
  width: 50%;
  border-radius: 5px;
  border-color: #F0F0F0;
  border-style: solid;
  border-color:;
  padding: 20px;
  border-radius: 30px;
  margin-left: 25%;
  margin-top: 50px;
  margin-bottom: 100px;
}

/*Cadastro anúncio*/

#cadastro{
  margin-top: 25px;
  width: 50%;
  margin-left: 25%;
  border-style: solid;
  border-color: #F0F0F0;
  border-radius: 10px;
  padding: 5px;
  margin-bottom: 25px;
}

h3{
  text-align: center;
}

.criar_anuncio{
  width: 50%;
  margin-left: 25%;
  background-color: #000F45;
  color: #fff;
  padding: 14px 20px;
  border: none;
  border-radius: 30px;
  cursor: pointer;
}


#meus_an{
  padding: 20px;
  margin-top: 5%;
  margin-left: 15%;
  width: 70%;
  height: 100%;
  background-color: #F0F0F0;
  border-radius: 30px;
}

/*View disponíveis*/ 

#disponiveis{
  min-height: 100%;
  padding: 5px;
  margin-bottom: -50px;
  max-width: 100%;
  
}

.col-md-10{
  margin: 0 auto;
}

/*View index*/

#busca{
  min-height: 100%;
  margin: auto;
  width: 100%;
  background-color: #FAFAFA;
  border-bottom-right-radius: 30px;
  border-bottom-left-radius: 30px;
  align-items: center;
  padding: 5px;
  margin-bottom: -50px;
}

#formBusca{
  height: 100%;
  min-height: 100%;
  width: 100%;
  text-align: center;
}


.busca_imovel{
  border-radius: 20px;
  background-color: #000F45;
  color: #FFF;
  padding: 5px;
  border: none;
}



.row{
  margin: 0;
  
}

body{
  min-height: 100vh;
  position: relative;
  
}

#image-container{
  margin: auto;
  width: 50%;
}

#image-container img{
  width: 100%;
  margin-top: 10px;
  border-radius: 10px;
}
/*Reserva*/

#info-container{
  
  width: 50%;
  margin: auto;
  border: 1px solid #DCDCDC;
  border-radius: 10px;
  
}

#info-container a{
  text-align: center;
}

.titulo_anuncio{
  text-align: center;
}

/*Dashboard*/
.dashboard-title-container{
  margin-bottom: 30px;
  margin-top: 30px;
}

.dashboard-anuncios-container form{
  display: inline-block;
}

.edit{
  text-decoration: none;
  color: #FFF;
}

.edit:hover{
  color: #FFF;
}

.titulo_anuncio{
  text-decoration: none;
  color: #000;
}

.titulo_anuncio:hover{
  color: #000;
}


#meus_anuncios{
  min-height: 100%;
  margin-bottom: -50px;
}

/*Edit*/

.img-preview{
  width: 100%;
}

.voltar{
  border-radius: 20px;
  border-color: #ffffff;
  width: 5%;
  background-color: #000F45;
  color: #ffffff;
}



/*Reservar*/ 


.reservar{
  text-decoration: none;
  color: #000F45;
  border: 1px solid #DCDCDC;
  padding: 1px;
  border-radius: 5px;
  text-align: center;
}

a.reservar{
  display: block;
}

.reservar:hover{
  color: #FF8C00;
  
}


#formRes{
  width: 50%;
  color: #000F45;
  
}

#freserva{
  text-align: center;
}

#pagar{
  padding: 5px;
  text-align:center;
  width: 50%;
  background-color: #F0F0F0;
  border: 1px solid #DCDCDC;
  border-radius: 10px;
  margin-left: 25%;
  
}

/* Agenda */

#agenda{
  min-height: 100%;
  margin-bottom: -50px;
}


/*Minhas reservas*/

#reservas{
  min-height: 100%;
  margin-bottom: -50px;
}


footer{
  color: #FFF;
  height: 50px;
  bottom: 0;
  background-color: #000;
  right: 0;
  text-align: center;
}







</style>
  