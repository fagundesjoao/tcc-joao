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

input[type=submit] {
  width: 100%;
  background-color: #000F45;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 30px;
  cursor: pointer;
}

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
h2{
  text-align: center;
}

/* Add a black background color to the top navigation */
.topnav {
  background-color: #000F45;
  width: 100%;
  overflow: hidden;
  margin: auto;
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

#busca{
  padding: 20px;
  margin: auto;
  /* width: 70%; */
  background-color: #F0F0F0;
  border-bottom-right-radius: 30px;
  border-bottom-left-radius: 30px;
}

.campo_busca input{
  width: 50%;
  margin-left: 25%;
}

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
 
}

#anuncios-container img{
  max-width:100%;
  border-top-left-radius: 10px;
  border-top-right-radius: 10px;
}

#anuncios-container .btn-enviar{
  text-decoration: none;
  background-color: #FF8C00;
  color: #FFFFFF;
  padding: 1px;
  border-radius: 5px;
  
  
}

#anuncios-container .btn-enviar:hover{
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

#info-container{
  
  width: 50%;
  margin: auto;
  border: 1px solid #DCDCDC;
  border-radius: 10px;
  
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
  width: 5%;
  background-color: #f0f0f0;
}


</style>
    </head>