<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TASACOCHE</title>
    <link href="hoja_estilo_vehiculo.css" rel="stylesheet">
</head>
<body>
    




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="hojaestiloform.css" rel="stylesheet">
</head>
<body>

 <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
<div class="contenedor">
<fieldset>
<legend class="letras-bonitas">DATOS PERSONALES</legend>

<label for id="idnombre">NOMBRE*</label> <br>
<input type="text" id="idnombre" name="nombre" class="forma-caja caja-nombre">

<label for id="idtelefono">TEL*</label>
<input type="tel" id="idtelefono" name="telefono" class="telefono">


<br>
<label for id="idapellido1">PRIMER APELLIDO*</label><br>
<input type="text" id="idapellido1" name="apellido1" class="forma-caja">

<label for id="iddni">DNI*</label>
<input type="text" id="iddni" name="dni" class="telefono">
<br>

<label for id="idapellido2">SEGUNDO APELLIDO*</label><br>
<input type="text" id="idapellido2" name="apellido2" class="forma-caja">


<label for id="idemail">E-MAIL*</label>
<input type="email" id="idemail" name="email" class="telefono">
<br>
</fieldset>

<fieldset>
<legend class="letras-bonitas">DATOS DEL VEHÍCULO</legend>

<label for id="idvehiculo">MARCA*</label> <br>
<select id="idvehiculo" name="marca" class="caja-marca">
    <option value=""></option>
    <option value="abarth">Abarth</option>
    <option value="alfaromeo">Alfa Romeo</option>
    <option value="astonmartin">Aston Martin</option>
    <option value="audi">Audi</option>
    <option value="bentley">Bentley</option>
    <option value="bmw">BMW</option>
    <option value="cadillac">Cadillac</option>
    <option value="chevrolet">Chevrolet</option>
    <option value="citroen">Citroen</option>
    <option value="dacia">Dacia</option>
    <option value="ferrari">Ferrari</option>
    <option value="fiat">Fiat</option>
    <option value="ford">Ford</option>
    <option value="honda">Honda</option>
    <option value="infiniti">Infiniti</option>
    <option value="isuzu">Isuzu</option>
    <option value="iveco">Iveco</option>
    <option value="jaguar">Jaguar</option>
    <option value="jeep">Jeep</option>
    <option value="lancia">Kia</option>
    <option value="landrover">Land Rover</option>
    <option value="lexus">Lexus</option>
    <option value="lotus">Lotus</option>
    <option value="maserati">Maserati</option>
    <option value="mazda">Mazda</option>
    <option value="mercedesbenz">Mercedes-Benz</option>
    <option value="mini">Mini</option>
    <option value="mitsubihi">Mitsubishi</option>
    <option value="nissan">Nissan</option>
    <option value="opel">Opel</option>
    <option value="porsche">Porsche</option>
    <option value="renault">Renault</option>
    <option value="rollsroyce">Rolls-Royce</option>
    <option value="seat">Seat</option>
    <option value="skoda">Skoda</option>
    <option value="smart">Smart</option>
    <option value="ssangyong">Ssang-Yong</option>
    <option value="subaru">Subaru</option>

    <option value="suzuki">Suzuki</option>
    <option value="tata">Tata</option>
    <option value="tesla">Tesla</option>
    <option value="toyota">Toyota</option>
    <option value="volkswagen">Volkswagen</option>
    <option value="volkswagen">Volkswagen</option>

    <option value="volkswagen">Volkswagen</option>

</select>
</fieldset>
<br>
<input type="submit" value="Enviar tasación" class="forma-caja letras-bonitas">
<br>

</div>
</body>
</html>
