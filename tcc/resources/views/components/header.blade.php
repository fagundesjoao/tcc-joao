<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>TCC</title>
 
        <style>
input[type=text], select {
  width: 49%;
  padding: 12px 20px;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 30px;
  box-sizing: border-box;
}

/* input[type=submit] {
  width: 50%;
  background-color: #000F45;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 30px;
  cursor: pointer;
} */

input[type=submit]:hover {
  background-color: #4682B4;
}

#form{
  width: 50%;
  height: 50%;
  border-radius: 5px;
  background-color: #F0F0F0;
  padding: 20px;
  border-radius: 30px;
  margin-left: 25%;
  margin-top: 5%;
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

/* Add a black background color to the top navigation */
.topnav {
  background-color: #000F45;
  width: 100%;
  overflow: hidden;
  margin: 0 auto;
  padding: 0;
}

/* Style the links inside the navigation bar */
.topnav a {
  float: right;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

/* Change the color of links on hover */
.topnav a:hover {
  background-color: #fff;
  color: #000F45;
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

/*Busca*/ 

#busca{
  padding: 20px;
  margin: auto;
  /* width: 70%; */
  background-color: #F0F0F0;
  border-bottom-right-radius: 30px;
  border-bottom-left-radius: 30px;
}

#datas{
  
  margin: auto;
  width: 100%;
  background-color: #F0F0F0;
  border-bottom-right-radius: 30px;
  border-bottom-left-radius: 30px;
 
}

#formBusca{
  width: 100%;
  text-align: center;
}

#tabela-busca{
  width: 100%;
}


.data_inicial{
  width: 90%;
}

.data_final{
  width: 90%;
  
}

.preco{
  width: 98%;
}

.hospedes{
  width: 90%;
}

#busca_imovel{
  width: 15%;
}

.campo_busca input{
  width: 50%;
  margin-left: 25%;
}

/* Containers anúncios */

#anuncios-container{
  padding:50px;
  
  
}

#cards-container{
  display: flex;
  flex-wrap: wrap;
  
}

#anuncios-container .card{
  flex: 1 0 24%;
  max-width: 24%;
  border-radius: 10px;
  padding: 0;
  margin: 5px;
  border: 0.5px solid #CCC;
  text-align: center;
  background-color: #FFF;
}

#anuncios-container img{
  max-width:100%;
  border-top-left-radius: 10px;
  border-top-right-radius: 10px;
}

#anuncios-container .btn-vermais{
  text-decoration: none;
  background-color: #FF8C00;
  color: #FFFFFF;
  padding: 1px;
  border-radius: 5px;
  width: 25%;
  
}

#anuncios-container .btn-vermais:hover{
  background-color: #000F45;
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

.dashboard-anuncios-container a{
  text-decoration: none;
  
}

.dashboard-anuncios-container button{
  border-radius: 20px;
  background-color: #F0F0F0;
  
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

.modal-container{
  width: 50%;
  height: 100%;
  margin-left: 25%;
  display: flex;
  justify-content: center;
  position: fixed;
  opacity: 0;
  background-color: #F0F0F0;
  border-radius: 5px;
}

.modal-container.show{
  opacity: 1;
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

.agenda_reservas{
  width: 50%;
  align-items: center;
  margin-left: 25%;
}

#reserva-imoveis{
  width: 100%;
  text-align: center;
}


</style>
    </head>