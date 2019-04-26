<?php
 	  function limpiar($String){
    $String = str_replace(array('á','à','â','ã','ª','ä'),"a",$String);
    $String = str_replace(array('Á','À','Â','Ã','Ä'),"A",$String);
    $String = str_replace(array('Í','Ì','Î','Ï'),"I",$String);
    $String = str_replace(array('í','ì','î','ï'),"i",$String);
    $String = str_replace(array('é','è','ê','ë'),"e",$String);
    $String = str_replace(array('É','È','Ê','Ë'),"E",$String);
    $String = str_replace(array('ó','ò','ô','õ','ö','º'),"o",$String);
    $String = str_replace(array('Ó','Ò','Ô','Õ','Ö'),"O",$String);
    $String = str_replace(array('ú','ù','û','ü'),"u",$String);
    $String = str_replace(array('Ú','Ù','Û','Ü'),"U",$String);
    $String = str_replace(array('[','^','´','`','¨','~',']'),"",$String);
    $String = str_replace("ç","c",$String);
    $String = str_replace("Ç","C",$String);
    $String = str_replace("ñ","n",$String);
    $String = str_replace("Ñ","N",$String);
    $String = str_replace("Ý","Y",$String);
    $String = str_replace("ý","y",$String);
    $String = str_replace(" ","-",$String);
    $String = str_replace("&","y",$String);
     
    $String = str_replace("&aacute;","a",$String);
    $String = str_replace("&Aacute;","A",$String);
    $String = str_replace("&eacute;","e",$String);
    $String = str_replace("&Eacute;","E",$String);
    $String = str_replace("&iacute;","i",$String);
    $String = str_replace("&Iacute;","I",$String);
    $String = str_replace("&oacute;","o",$String);
    $String = str_replace("&Oacute;","O",$String);
    $String = str_replace("&uacute;","u",$String);
    $String = str_replace("&Uacute;","U",$String);
    return $String;
	}
header("Content-type: text/xml");
echo'<?xml version=\'1.0\' encoding=\'UTF-8\'?>';
echo'   <urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:news="http://www.google.com/schemas/sitemap-news/0.9">';

include ('scripts/coneccion.php');
$sql = "SELECT  id_noticias, titulo, fecha, bajada FROM noticias where fecha!=''";
$rs=mysql_query($sql);
while ($string = mysql_fetch_array($rs)){
$archiv=$string[2];
$archivo=explode("-",$archiv);
$f=$archivo[2]."-".$archivo[1]."-".$archivo[0];
    ?>
            <url>
                <loc>http://www.guiaenlapampa.com.ar/noticia/<?echo $string[0]?>/<?echo limpiar($string[1])?></loc>
                <changefreq>daily</changefreq>
                <lastmod><?echo date("Y-m-d");?></lastmod>
                 <news:news>
                    <news:publication>
                        <news:name>Guia en La Pampa</news:name>
                        <news:language>es</news:language>
                    </news:publication>
                    <news:publication_date><?echo $f?></news:publication_date>
                    <news:title><?echo limpiar($string[1])?></news:title>
                    <news:keywords>Noticias, Hoy, guia, en, la, pampa, Noticias, Informacion, Actualidad, Politica, Opinión, Economía</news:keywords>
                  </news:news>
            </url>
<?php } 
 
?> 

</urlset>