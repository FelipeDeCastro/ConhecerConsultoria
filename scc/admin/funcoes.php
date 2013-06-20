<?php
/**
*Area Administrativa Assuex
*@author Michael Colla <michael.colla@mkinformatica.net>
*@version 1.0 - 27/01/2013 - 14:41
*@copyright � 2013 - Todos os direitos reservados
*
*/


// Caracteres especiais PARA caracteres html
$caractere = array('"','&','<','>','©','®','TM','´','«','»','¡','¿','À','à','�?','á','Â','â','Ã','ã','Ä','ä','Å','å','Æ','æ','Ç','ç','�?','ð','È','è','É','é','Ê','ê','Ë','ë','Ì','ì','�?','í','Î','î','�?','ï','Ñ','ñ','Ò','ò','Ó','ó','Ô','ô','Õ','õ','Ö','ö','Ø','ø','Ù','ù','Ú','ú','Û','û','Ü','ü','�?','ý','ÿ','Þ','þ','ß','§','¶','µ','¦','±','·','¨','¸','ª','º','¬','­','¯','°','¹','²','³','¼','½','¾','×','÷','¢','£','¤','¥'); 
$htmlentidade = array('&quot;','&amp;','&lt;','&gt;','&copy;','<sup>&reg;</sup>','<font size="-1"><sup>TM</sup></font>','&acute;','&laquo;','&raquo;','&iexcl;','&iquest;','&Agrave;','&agrave;','&Aacute;','&aacute;','&Acirc;','&acirc;','&Atilde;','&atilde;','&Auml;','&auml;','&Aring;','&aring;','&AElig;','&aelig;','&Ccedil;','&ccedil;','&ETH;','&eth;','&Egrave;','&egrave;','&Eacute;','&eacute;','&Ecirc;','&ecirc;','&Euml;','&euml;','&Igrave;','&igrave;','&Iacute;','&iacute;','&Icirc;','&icirc;','&Iuml;','&iuml;','&Ntilde;','&ntilde;','&Ograve;','&ograve;','&Oacute;','&oacute;','&Ocirc;','&ocirc;','&Otilde;','&otilde;','&Ouml;','&ouml;','&Oslash;','&oslash;','&Ugrave;','&ugrave;','&Uacute;','&uacute;','&Ucirc;','&ucirc;','&Uuml;','&uuml;','&Yacute;','&yacute;','&yuml;','&THORN;','&thorn;','&szlig;','&sect;','&para;','&micro;','&brvbar;','&plusmn;','&middot;','&uml;','&cedil;','&ordf;','&ordm;','&not;','&shy;','&macr;','&deg;','&sup1;','&sup2;','&sup3;','&frac14;','&frac12;','&frac34;','&times;','&divide;','&cent;','&pound;','&curren;','&yen;'); 

function char2html($str,$espaco = 0) { 
  global $caractere,$htmlentidade; 
  $remonta = ""; 

  $remonta = str_replace($caractere,$htmlentidade,$str); 
  if($espaco != 0) $remonta = str_replace(' ','&nbsp;',$remonta); 

  return $remonta; 
} 
// fim 

/* script de convers�o de datas */
function converte_data($data,$operacao)	{
	if ($operacao == 'ptus'){
		$dia=substr($data,0,2);
		$mes=substr($data,3,2);
		$ano=substr($data,6,4);
		$data=$ano."-".$mes."-".$dia;
	}
	else if ($operacao == 'uspt') {
		$ano=substr($data,0,4);
		$mes=substr($data,5,2);
		$dia=substr($data,8,2);
		$data=$dia."/".$mes."/".$ano;
	}
	return $data;
}

function mk_data_null($campo,$vlr_padrao = '0000-00-00'){
	if ($campo == NULL){
		$result = $vlr_padrao;		
	} else {
		$result = converte_data($campo,'ptus');
	}
	return $result;
}

function safesql($string) {
	    $string = get_magic_quotes_gpc() ? stripslashes($string) : $string;
	    $string = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($string) : mysql_escape_string($string);
	    $trim_string = trim($string);
	    return $trim_string;
}
function data_extenso($data = 0) {
if (!$data) $data = time();
	$mes = array ("Janeiro","fevereiro","Mar&ccedil;o","Abril","Maio","Junho","Julho","Agosto","Setembro","Outubro","Novembro","Dezembro");
	$sem = array ("Domingo","Segunda-feira","Ter&ccedil;a-feira","Quarta-feira","Quinta-feira","Sexta-feira","S&aacute;bado");
	return ($sem[(integer)date("w",$data)].", ".date("d",$data)." de ".$mes[(integer)date("m",$data) - 1]." de ".date("Y",$data));
}
$hora = date("H");
if ($hora == 0 or $hora == 1 or $hora == 2 or $hora == 3 or $hora == 4 or $hora == 5) {
$TxtData = 'Boa madrugada'; }
if ($hora == 6 or $hora == 7 or $hora == 8 or $hora == 9 or $hora == 10 or $hora == 11) {
$TxtData = 'Bom dia'; }
if ($hora == 12 or $hora == 13 or $hora == 14 or $hora == 15 or $hora == 16 or $hora == 17) {
$TxtData = 'Boa tarde'; }
if ($hora == 18 or $hora == 19 or $hora == 20 or $hora == 21 or $hora == 22 or $hora == 23) {
$TxtData = 'Boa noite';
}

function bd($conectar){
	if ($conectar == 'C'){
		$db = mysql_connect(HOST, USER, PASS);
		mysql_select_db(BD);	
	}
	if ($conectar == 'D'){
		mysql_close();
	}
}

/**
 * Fun��o para formatar valores no banco para o formato real brasileiro ex (4,50)
 *
 * @param float $x
 * @return float valor formatado
 */
function converte_real($x,$y){
	if ($y == 'r'){
		$real = number_format($x,"2",",",".");
		return $real;
	}
	if ($y == 'b'){
		$real = number_format($x,"2",".",",");
		return $real;
	}
	if ($y == 's'){
		$vlr=(str_replace(".", "", $x));
		$vlr=(str_replace(",", ".", $vlr));
		return $vlr;
	}
}

/**
 * Fun��o para retornar a url completa e par�metros
 *
 * @return string
 * @author Michael Colla <michaelcolla7@gmail.com>
 */
function url_completa(){
	$url = (isset($_SERVER['HTTPS']) || strtolower($_SERVER['HTTPS']) == 'on') ? 'https://' : 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
	return $url;
}

/**
 * Fun��o para verificar se o sistema est� em manuten��o
 *
 * @author Michael Colla <michaelcolla7@gmail.com>
 */
function ultima_atualizacao($tipo){
	$sql = mysql_query("SELECT a.* , date_format( a.ultima_atualizacao, '%d/%m/%Y %H:%i:%s' ) AS data_atu, u.usu_nome, u.usu_email
						FROM ".BD.".atualizacao AS a
						JOIN ".BD.".usuarios u WHERE u.usu_id = a.user_atualizou
						ORDER BY a.`ultima_atualizacao` DESC
						LIMIT 1;");
	if ($tipo == "C"){
		$result = "&Uacute;ltima Atualiza&ccedil;&atilde;o: ".mysql_result($sql,0,"data_atu")." - por <a href='mailto:".mysql_result($sql,0,"usu_email")."?Subject=Sobre atualiza&ccedil;&atilde;o do sistema de consulta' title='Clique para entrar em contato com ".mysql_result($sql,0,"usu_nome")."'>".mysql_result($sql,0,"usu_nome")."</a>";
	}
	
	if ($tipo == "A"){
		if (mysql_result($sql,0,"atualizando") == "S"){
			$result = TRUE;
		} else {
			$result = FALSE;
		}
	}
	return $result;
}

/**
 * Fun��o para gerar um token
 *
 * @param string $nome_variavel
 */
function token($nome_variavel) {
	if (!isset($_SESSION["$nome_variavel"])){
			$_SESSION["$nome_variavel"] = md5(uniqid(rand(), true));
	}
	return $_SESSION["$nome_variavel"];
}

/**
 * Fun��o para gerar token de string
 *
 * @return sequencia aleatoria de letras
 */
function token_str(){
	$str = "ABCDEFGHIJLKMNOPQRSTUVXZYW";
	srand ((double)microtime()*1000000);
	for ($i=0; $i<3; $i++) {
		$letras .= $str[rand()%strlen($str)];
	}
	return $letras;
}

/**
 * Creator: Matt Belanger, MAB Web Intelligence, http://www.mabwi.com
 * This file may be distributed and used freely, with attribution to the original author
 * 
 * 
 * ImageUploader class takes a single image from the $_FILES array,
 * resizes it to the sizes in the $sizeArray and saves the files to directory specified
 * All files are saved as JPG files
 * 
 *                    
**/
class ImageUploader {
 
  /**
   * Class constants for object status
  **/
  const INVALID_FILE_TYPE = -1;
  const UNABLE_TO_CREATE_IMG = -2;
  const INVALID_SIZES = -3;
  const NO_WRITE_PERMISSIONS = -4;
  const FILE_SAVE_ERROR = -5;
  
  const SUCCESS = 1;
  const CAN_CONTINUE = 2;
    
  private $filenames = array();
  private $status;
  private $imgType;
  private $directory;
  private $fileroot;
  private $sizeArray;
  
  private $imgOriginal;

  /**
   * @param mixed $image -> full array from $_FILES for a single uploaded image.
   * @param mixed $sizeArray -> Associative array structured:
   *              key -> name addition to identify a given file size
   *                  -> Item 0, Target Width
   *                  -> Item 1, Target Height
   *              Treats width and Height as maximum's, to maintain image ratio
   * @param string $directory -> Target directory for new files.  Must have write access for www user
   * @param string $fileroot -> Optional, filename root for newly created files.  
   *                  If an invalid file name is provided, system will revert to the default
   *                  File extensions will be stripped, as all files are saved as JPG
  **/
  public function __construct($image, $sizeArray, $directory, $fileroot) {
    $this->status = ImageUploader::CAN_CONTINUE;
    if ($image['error'] > 0) {
      $this->status = ImageUploader::UNABLE_TO_CREATE_IMG;
    }
    if (!is_writeable($directory)) {
      $this->status = ImageUploader::NO_WRITE_PERMISSIONS;
    }
    $this->directory = $directory;
    if (isset($fileroot) && $this->validateFilename($fileroot)) {
      //If they enter a file extension, it needs to be removed
      $farray = preg_split('/\./',$fileroot);
      $this->fileroot = $farray[0];
    }
    $this->sizeArray = $sizeArray;
    if (ImageUploader::CAN_CONTINUE == $this->status) {
      $this->imgOriginal = $image;
    }
  }
  
  /**
   * Calls image processor if status is OK, and returns the results of the save
   * @return Returns a status value that can be checked with ImageUploader class constants
  **/
  public function saveFiles() {
    if (ImageUploader::CAN_CONTINUE == $this->status) {
      $this->status = $this->processImages();
    }
    return $this->status;
  }
  
  public function getStatus() {
    return $this->status;
  }
  
  public function getFilenames() {
    return $this->filenames;
  }
  
  /**
   * Try to prevent people from entering malicious commands via filenames.
   * We're just disallowing any files that are not all alphanumeric, or contain
   * multiple periods.  Should make things safe.
  **/
  private function validateFilename($file) {
    //only alpha numeric characters allowed
    if (!ctype_alnum($file)) {
      return FALSE;
    }
    //only a single period is allowed
    if (!preg_match('/^(?:[a-z0-9_-]|\.(?!\.))+$/iD', $file)) {
      return FALSE;
    }
  }
  
  private function buildFileName() {
    //This pulls in the created temporary file name to use
    //Should prevent collisions.
    //This str_replace converts forward slashes to backslashes, 
    //  so *nix & Windows systems work consistently
    $tmp = str_replace('/','\\', $this->imgOriginal['tmp_name']);
   	$imageNamePcs = explode("\\",$tmp);
   	
  	$imageName = strtolower(preg_replace('/\.tmp/','',$imageNamePcs[count($imageNamePcs)-1]));	
    $this->fileroot = $imageName;    
  }
  
  private function processImages() {
    if (empty($this->fileroot)) {
      $this->buildFileName();
    }
    
    switch($this->imgOriginal['type']) {
  		case "image/jpg":
  		case "image/jpeg":
  		case 'image/pjpeg':
  			$img = imagecreatefromjpeg($this->imgOriginal['tmp_name']);
  			break;
  		case "image/gif":
  			$img = imagecreatefromgif($this->imgOriginal['tmp_name']);
  			break;
  		case "image/png":
                case "image/x-png":
  			$img = imagecreatefrompng($this->imgOriginal['tmp_name']);
  			break;
  		default:
  		  $this->status = ImageUploader::INVALID_FILE_TYPE;
  		  return $this->status;
    }
    
    //Delete the original file
    unlink($this->imgOriginal['tmp_name']);
    if (!$img) {
      $this->status = ImageUploader::UNABLE_TO_CREATE_IMG;
      return $this->status;
    }
       
  	$origx = imagesx($img);
  	$origy = imagesy($img);
    
    foreach ($this->sizeArray as $name => $attrs) {
    	//Get desired dimensions, and current dimensions
      $destx = $attrs[0];
    	$desty = $attrs[1];
      	
     	if ($origx > $destx or $origy > $desty) {
    			//Is the width of the original bigger than the height?
    			if ($origx >= $origy) {
    				$newx = $destx;
    				$newy = (int)($origy*($destx/$origx));
    			} else {
    				$newx = (int)($origx*($desty/$origy));
    				$newy = $desty;
    			}
    	}	else {
    		//Using the original dimensions
    		$newx = $origx;
    		$newy = $origy;
    	}
      $newImg = imagecreatetruecolor($newx, $newy);
      imagecopyresampled($newImg, $img ,0, 0, 0, 0, $newx, $newy, $origx, $origy);
      $fullImgName = $this->directory.'/'.$this->fileroot.$name.".jpg";
      imagejpeg($newImg,$fullImgName,80);
      $this->filenames[$name] = $this->fileroot.$name.".jpg";
    }
    
    foreach ($this->filenames as $file) {
      if (!file_exists($file)) {
        $this->status = ImageUploader::FILE_SAVE_ERROR;
      }
    }
    
    //If any file is not able to be saved, delete any that were saved.
    if (ImageUploader::FILE_SAVE_ERROR == $this->status) {
      foreach ($this->filenames as $file) {
        if (file_exists($file)) {
          unlink($file);
        }
      }
    }
    
    return $this->status = ImageUploader::SUCCESS;
  }
  
  
}

/**
*This is a class that can process an image on the fly by either generate a thumbnail, apply an watermark to the image, or resize it.
*
* The processed image can either be displayed in a page, saved to a file, or returned to a variable.
* It requires the PHP with support for GD library extension in either version 1 or 2. If the GD library version 2 is available it the class can manipulate the images in true color, thus providing better quality of the results of resized images.
* Features description:
* - Thumbnail: normal thumbnail generation
* - Watermark: Text or image in PNG format. Suport multiples positions.
* - Auto-fitting: adjust the dimensions so that the resized image aspect is not distorted
* - Scaling: enlarge and shrink the image
* - Format: both JPEG and PNG are supported, but the watermark image can only be in PNG format as it needs to be transparent
* - Autodetect the GD library version supported by PHP
* - Calculate quality factor for a specific file size in JPEG format.
* - Suport bicubic resample algorithm
* - Tested: PHP 4 valid
*
* @package Thumbnail and Watermark Class
* @author Emilio Rodriguez <emiliort@gmail.com>
* @version 1.48 <2005/07/18>
* @copyright GNU General Public License (GPL)
**/

/*
//  Sample -------------------------------------
$thumb=new Thumbnail("source.jpg");	        // set source image file

$thumb->size_width(100);				    // set width for thumbnail, or
$thumb->size_height(300);				    // set height for thumbnail, or
$thumb->size_auto(200);					    // set the biggest width or height for thumbnail
$thumb->size(150,113);		                // set the biggest width and height for thumbnail

$thumb->quality=75;                        //default 75 , only for JPG format
$thumb->output_format='JPG';               // JPG | PNG
$thumb->jpeg_progressive=0;                // set progressive JPEG : 0 = no , 1 = yes
$thumb->allow_enlarge=false;               // allow to enlarge the thumbnail
$thumb->CalculateQFactor(10000);           // Calculate JPEG quality factor for a specific size in bytes
$thumb->bicubic_resample=true;             // [OPTIONAL] set resample algorithm to bicubic

$thumb->img_watermark='watermark.png';	    // [OPTIONAL] set watermark source file, only PNG format [RECOMENDED ONLY WITH GD 2 ]
$thumb->img_watermark_Valing='TOP';   	    // [OPTIONAL] set watermark vertical position, TOP | CENTER | BOTTOM
$thumb->img_watermark_Haling='LEFT';   	    // [OPTIONAL] set watermark horizonatal position, LEFT | CENTER | RIGHT

$thumb->txt_watermark='Watermark text';	    // [OPTIONAL] set watermark text [RECOMENDED ONLY WITH GD 2 ]
$thumb->txt_watermark_color='000000';	    // [OPTIONAL] set watermark text color , RGB Hexadecimal[RECOMENDED ONLY WITH GD 2 ]
$thumb->txt_watermark_font=1;	            // [OPTIONAL] set watermark text font: 1,2,3,4,5
$thumb->txt_watermark_Valing='TOP';   	    // [OPTIONAL] set watermark text vertical position, TOP | CENTER | BOTTOM
$thumb->txt_watermark_Haling='LEFT';       // [OPTIONAL] set watermark text horizonatal position, LEFT | CENTER | RIGHT
$thumb->txt_watermark_Hmargin=10;          // [OPTIONAL] set watermark text horizonatal margin in pixels
$thumb->txt_watermark_Vmargin=10;           // [OPTIONAL] set watermark text vertical margin in pixels

$thumb->->memory_limit='32M';               //[OPTIONAL] set maximun memory usage, default 32 MB ('32M'). (use '16M' or '32M' for litter images)
$thumb->max_execution_time'30';             //[OPTIONAL] set maximun execution time, default 30 seconds ('30'). (use '60' for big images o slow server)

$thumb->process();   				        // generate image

$thumb->show();						        // show your thumbnail, or
$thumb->save("thumbnail.jpg");			    // save your thumbnail to file, or
$image = $thumb->dump();                    // get the image

echo ($thumb->error_msg);                   // print Error Mensage
//----------------------------------------------
################################################  */


class Thumbnail {
    /**
    *@access public
    *@var integer Quality factor for JPEG output format, default 75
    **/
    var $quality=75;
    /**
    *@access public
    *@var string output format, default JPG, valid values 'JPG' | 'PNG'
    **/
    var $output_format='JPG';
    /**
    *@access public
    *@var integer set JPEG output format to progressive JPEG : 0 = no , 1 = yes
    **/
    var $jpeg_progressive=0;
    /**
    *@access public
    *@var boolean allow to enlarge the thumbnail.
    **/
    var $allow_enlarge=false;

    /**
    *@access public
    *@var string [OPTIONAL] set watermark source file, only PNG format [RECOMENDED ONLY WITH GD 2 ]
    **/
    var $img_watermark='images/marca_carllotto.png';
    /**
    *@access public
    *@var string [OPTIONAL] set watermark vertical position, TOP | CENTER | BOTTOM
    **/
    var $img_watermark_Valing='CENTER';
    /**
    *@access public
    *@var string [OPTIONAL] set watermark horizonatal position, LEFT | CENTER | RIGHT
    **/
    var $img_watermark_Haling='CENTER';

    /**
    *@access public
    *@var string [OPTIONAL] set watermark text [RECOMENDED ONLY WITH GD 2 ]
    **/
    var $txt_watermark='';
    /**
    *@access public
    *@var string [OPTIONAL] set watermark text color , RGB Hexadecimal[RECOMENDED ONLY WITH GD 2 ]
    **/
    var $txt_watermark_color='000000';
    /**
    *@access public
    *@var integer [OPTIONAL] set watermark text font: 1,2,3,4,5
    **/
    var $txt_watermark_font=5;
    /**
    *@access public
    *@var string  [OPTIONAL] set watermark text vertical position, TOP | CENTER | BOTTOM
    **/
    var $txt_watermark_Valing='TOP';
    /**
    *@access public
    *@var string [OPTIONAL] set watermark text horizonatal position, LEFT | CENTER | RIGHT
    **/
    var $txt_watermark_Haling='LEFT';
    /**
    *@access public
    *@var integer [OPTIONAL] set watermark text horizonatal margin in pixels
    **/
    var $txt_watermark_Hmargin=10;
    /**
    *@access public
    *@var integer [OPTIONAL] set watermark text vertical margin in pixels
    **/
    var $txt_watermark_Vmargin=10;
    /**
    *@access public
    *@var bool [OPTIONAL] set resample algorithm to bicubic
    **/
    var $bicubic_resample=false;

    /**
    *@access public
    *@var string [OPTIONAL] set maximun memory usage, default 8 MB ('8M'). (use '16M' for big images)
    **/
    var $memory_limit='32M';

    /**
    *@access public
    *@var string [OPTIONAL] set maximun execution time, default 30 seconds ('30'). (use '60' for big images)
    **/
    var $max_execution_time='30';

    /**
    *@access public
    *@var string  errors mensage
    **/
    var $error_msg='';


    /**
    *@access private
    *@var mixed images
    **/
    var $img;

    /**
    *open source image
    *@access public
    *@param string filename of the source image file
    *@return boolean
    **/
	function Thumbnail($imgfile) 	{
    	$img_info =  getimagesize( $imgfile );
        //detect image format
        switch( $img_info[2] ){
	    		case 2:
	    			//JPEG
	    			$this->img["format"]="JPEG";
	    			$this->img["src"] = ImageCreateFromJPEG ($imgfile);
        		break;
	    		case 3:
	    			//PNG
	    			$this->img["format"]="PNG";
	    			$this->img["src"] = ImageCreateFromPNG ($imgfile);
                    $this->img["des"] =  $this->img["src"];
  	    		break;
	    		default:
	                $this->error_msg="Not Supported File";
	 				return false;
	    }//case
		$this->img["x"] = $img_info[0];  //original dimensions
		$this->img["y"] = $img_info[1];
        $this->img["x_thumb"]= $this->img["x"];  //thumbnail dimensions
        $this->img["y_thumb"]= $this->img["y"];
        $this->img["des"] =  $this->img["src"]; // thumbnail = original
		return true;
	}

    /**
    *set height for thumbnail
    *@access public
    *@param integer height
    *@return boolean
    **/
	function size_height($size=100) {
            //height
            $this->img["y_thumb"]=$size;
            if ($this->allow_enlarge==true) {
        	    $this->img["y_thumb"]=$size;
            } else {
                if ($size < ($this->img["y"])) {
                    $this->img["y_thumb"]=$size;
                } else {
                    $this->img["y_thumb"]=$this->img["y"];
                }

            }
            if ($this->img["y"]>0) {
                $this->img["x_thumb"] = ($this->img["y_thumb"]/$this->img["y"])*$this->img["x"];
            } else {
                $this->error_msg="Invalid size : Y";
                return false;
            }
	}

    /**
    *set width for thumbnail
    *@access public
    *@param integer width
    *@return boolean
    **/
	function size_width($size=100)  {
    	//width
            if ($this->allow_enlarge==true) {
        	    $this->img["x_thumb"]=$size;
            } else {
                if ( $size < ($this->img["x"])) {
                    $this->img["x_thumb"]=$size;
                } else {
                    $this->img["x_thumb"]=$this->img["x"];
                }

            }
            if ($this->img["x"]>0) {
                $this->img["y_thumb"] = ($this->img["x_thumb"]/$this->img["x"])*$this->img["y"];
            } else {
                $this->error_msg="Invalid size : x";
                return false;
            }
    }

    /**
    *set the biggest width or height for thumbnail
    *@access public
    *@param integer width or height
    *@return boolean
    **/
	function size_auto($size=100)   {
		//size
		if ($this->img["x"]>=$this->img["y"]) {
    		$this->size_width($size);
		} else {
    		$this->size_height($size);
 		}
	}


    /**
    *set the biggest width and height for thumbnail
    *@access public
    *@param integer width
    *@param integer height
    *@return boolean
    **/
	function size($size_x,$size_y)   {
		//size
		if ( (($this->img["x"])/$size_x) >=  (($this->img["y"])/$size_y) ) {
    		$this->size_width($size_x);
		} else {
    		$this->size_height($size_y);
 		}
	}


    /**
    *show your thumbnail, output image and headers
    *@access public
    *@return void
    **/
	function show() {
		//show thumb
		Header("Content-Type: image/".$this->img["format"]);
        if ($this->output_format=="PNG") { //PNG
    	imagePNG($this->img["des"]);
    	} else {
            imageinterlace( $this->img["des"], $this->jpeg_progressive);
         	imageJPEG($this->img["des"],"",$this->quality);
        }
	}

    /**
    *return the result thumbnail
    *@access public
    *@return mixed
    **/
	function dump() {
		//dump thumb
		return $this->img["des"];
	}

    /**
    *save your thumbnail to file
    *@access public
    *@param string output file name
    *@return boolean
    **/
	function save($save="")	{
		//save thumb
	    if (empty($save)) {
            $this->error_msg='Not Save File';
            return false;
        }
        if ($this->output_format=="PNG") { //PNG
    	    imagePNG($this->img["des"],"$save");
    	} else {
           imageinterlace( $this->img["des"], $this->jpeg_progressive);
           imageJPEG($this->img["des"],"$save",$this->quality);
        }
        return true;
	}

    /**
    *generate image
    *@access public
    *@return boolean
    **/
    function process () {

        ini_set('memory_limit',$this->memory_limit);
        ini_set('max_execution_time',$this->max_execution_time);

        $X_des =$this->img["x_thumb"];
        $Y_des =$this->img["y_thumb"];

   		//if ($this->checkgd2()) {
        $gd_version=$this->gdVersion();
        if ($gd_version>=2) {
        //if (false) {

        		$this->img["des"] = ImageCreateTrueColor($X_des,$Y_des);

                if ($this->txt_watermark!='' ) {
                    sscanf($this->txt_watermark_color, "%2x%2x%2x", $red, $green, $blue);
                    $txt_color=imageColorAllocate($this->img["des"] ,$red, $green, $blue);
                }

                if (!$this->bicubic_resample) {
                    imagecopyresampled ($this->img["des"], $this->img["src"], 0, 0, 0, 0, $X_des, $Y_des, $this->img["x"], $this->img["y"]);
                } else {
                    $this->imageCopyResampleBicubic($this->img["des"], $this->img["src"], 0, 0, 0, 0, $X_des, $Y_des, $this->img["x"], $this->img["y"]);
                }

                if ($this->img_watermark!='' && file_exists($this->img_watermark)) {
                    $this->img["watermark"]=ImageCreateFromPNG ($this->img_watermark);
                    $this->img["x_watermark"] =imagesx($this->img["watermark"]);
                    $this->img["y_watermark"] =imagesy($this->img["watermark"]);
                    imagecopyresampled ($this->img["des"], $this->img["watermark"], $this->calc_position_H (), $this->calc_position_V (), 0, 0, $this->img["x_watermark"], $this->img["y_watermark"],$this->img["x_watermark"], $this->img["y_watermark"]);
                }

                if ($this->txt_watermark!='' ) {
                    imagestring ( $this->img["des"], $this->txt_watermark_font, $this->calc_text_position_H() , $this->calc_text_position_V(), $this->txt_watermark,$txt_color);
                }
        } else {
         		$this->img["des"] = ImageCreate($X_des,$Y_des);
                if ($this->txt_watermark!='' ) {
                    sscanf($this->txt_watermark_color, "%2x%2x%2x", $red, $green, $blue);
                    $txt_color=imageColorAllocate($this->img["des"] ,$red, $green, $blue);
                }
                // pre copy image, allocating color of water mark, GD < 2 can't resample colors
                if ($this->img_watermark!='' && file_exists($this->img_watermark)) {
                    $this->img["watermark"]=ImageCreateFromPNG ($this->img_watermark);
                    $this->img["x_watermark"] =imagesx($this->img["watermark"]);
                    $this->img["y_watermark"] =imagesy($this->img["watermark"]);
                    imagecopy ($this->img["des"], $this->img["watermark"], $this->calc_position_H (), $this->calc_position_V (), 0, 0, $this->img["x_watermark"], $this->img["y_watermark"]);
                }
                imagecopyresized ($this->img["des"], $this->img["src"], 0, 0, 0, 0, $X_des, $Y_des, $this->img["x"], $this->img["y"]);
                @imagecopy ($this->img["des"], $this->img["watermark"], $this->calc_position_H (), $this->calc_position_V (), 0, 0, $this->img["x_watermark"], $this->img["y_watermark"]);
                if ($this->txt_watermark!='' ) {
                    imagestring ( $this->img["des"], $this->txt_watermark_font, $this->calc_text_position_H() , $this->calc_text_position_V(), $this->txt_watermark, $txt_color); // $this->txt_watermark_color);
                }
        }
        $this->img["src"]=$this->img["des"];
        $this->img["x"]= $this->img["x_thumb"];  
        $this->img["y"]= $this->img["y_thumb"];

    }

    /**
    *Calculate JPEG quality factor for a specific size in bytes
    *@access public
    *@param integer maximun file size in bytes
    **/
    function CalculateQFactor($size)  {
        //based on: JPEGReducer class version 1,  25 November 2004,  Author: huda m elmatsani, Email :justhuda@netscape.net

        //calculate size of each image. 75%, 50%, and 25% quality
        ob_start(); imagejpeg($this->img["des"],'',75);  $buffer = ob_get_contents(); ob_end_clean();
        $size75 = strlen($buffer);
        ob_start(); imagejpeg($this->img["des"],'',50);  $buffer = ob_get_contents(); ob_end_clean();
        $size50 = strlen($buffer);
        ob_start(); imagejpeg($this->img["des"],'',25);  $buffer = ob_get_contents(); ob_end_clean();
        $size25 = strlen($buffer);

        //calculate gradient of size reduction by quality
        $mgrad1 = 25/($size50-$size25);
        $mgrad2 = 25/($size75-$size50);
        $mgrad3 = 50/($size75-$size25);
        $mgrad  = ($mgrad1+$mgrad2+$mgrad3)/3;
        //result of approx. quality factor for expected size
        $q_factor=round($mgrad*($size-$size50)+50);

        if ($q_factor<25) {
            $this->quality=25;
        } elseif ($q_factor>100) {
            $this->quality=100;
        } else {
            $this->quality=$q_factor;
        }
    }

    /**
    *@access private
    *@return integer
    **/
    function calc_text_position_H () {
        $W_mark =  imagefontwidth  ($this->txt_watermark_font)*strlen($this->txt_watermark);
        $W = $this->img["x_thumb"];
        switch ($this->txt_watermark_Haling) {
             case 'CENTER':
                 $x = $W/2-$W_mark/2;
                 break;
             case 'RIGHT':
                 $x = $W-$W_mark-($this->txt_watermark_Hmargin);
                 break;
             default:
             case 'LEFT':
                $x = 0+($this->txt_watermark_Hmargin);
                 break;
         }
         return $x;
    }

    /**
    *@access private
    *@return integer
    **/
    function calc_text_position_V () {
        $H_mark = imagefontheight ($this->txt_watermark_font);
        $H = $this->img["y_thumb"];
        switch ($this->txt_watermark_Valing) {
             case 'CENTER':
                 $y = $H/2-$H_mark/2;
                 break;
             case 'BOTTOM':
                 $y = $H-$H_mark-($this->txt_watermark_Vmargin);
                 break;
             default:
             case 'TOP':
                $y = 0+($this->txt_watermark_Vmargin);
                 break;
         }
         return $y;
    }

    /**
    *@access private
    *@return integer
    **/
    function calc_position_H () {
        $W_mark = $this->img["x_watermark"];
        $W = $this->img["x_thumb"];
        switch ($this->img_watermark_Haling) {
             case 'CENTER':
                 $x = $W/2-$W_mark/2;
                 break;
             case 'RIGHT':
                 $x = $W-$W_mark;
                 break;
             default:
             case 'LEFT':
                $x = 0;
                 break;
         }
         return $x;
    }

    /**
    *@access private
    *@return integer
    **/
    function calc_position_V () {
        $H_mark = $this->img["y_watermark"];
        $H = $this->img["y_thumb"];
        switch ($this->img_watermark_Valing) {
             case 'CENTER':
                 $y = $H/2-$H_mark/2;
                 break;
             case 'BOTTOM':
                 $y = $H-$H_mark;
                 break;
             default:
             case 'TOP':
                $y = 0;
                 break;
         }
         return $y;
    }


    /**
    *@access private
    *@return boolean
    **/
    function checkgd2(){
        // TEST the GD version
          if (extension_loaded('gd2') && function_exists('imagecreatetruecolor')) {
            return false;
          } else {
            return true;
          }
    }


    /**
    * Get which version of GD is installed, if any.
    *
    * Returns the version (1 or 2) of the GD extension.
    */
    function gdVersion($user_ver = 0)
    {
       if (! extension_loaded('gd')) { return; }
       static $gd_ver = 0;
       // Just accept the specified setting if it's 1.
       if ($user_ver == 1) { $gd_ver = 1; return 1; }
       // Use the static variable if function was called previously.
       if ($user_ver !=2 && $gd_ver > 0 ) { return $gd_ver; }
       // Use the gd_info() function if possible.
       if (function_exists('gd_info')) {
           $ver_info = gd_info();
           preg_match('/\d/', $ver_info['GD Version'], $match);
           $gd_ver = $match[0];
           return $match[0];
       }
       // If phpinfo() is disabled use a specified / fail-safe choice...
       if (preg_match('/phpinfo/', ini_get('disable_functions'))) {
           if ($user_ver == 2) {
               $gd_ver = 2;
               return 2;
           } else {
               $gd_ver = 1;
               return 1;
           }
       }
       // ...otherwise use phpinfo().
       ob_start();
       phpinfo(8);
       $info = ob_get_contents();
       ob_end_clean();
       $info = stristr($info, 'gd version');
       preg_match('/\d/', $info, $match);
       $gd_ver = $match[0];
       return $match[0];
    } // End gdVersion()

    function imageCopyResampleBicubic($dst_img, $src_img, $dst_x, $dst_y, $src_x, $src_y, $dst_w, $dst_h, $src_w, $src_h) {
      $scaleX = ($src_w - 1) / $dst_w;
      $scaleY = ($src_h - 1) / $dst_h;
      $scaleX2 = $scaleX / 2.0;
      $scaleY2 = $scaleY / 2.0;
      $tc = imageistruecolor($src_img);

      for ($y = $src_y; $y < $src_y + $dst_h; $y++) {
       $sY  = $y * $scaleY;
       $siY  = (int) $sY;
       $siY2 = (int) $sY + $scaleY2;

       for ($x = $src_x; $x < $src_x + $dst_w; $x++) {
         $sX  = $x * $scaleX;
         $siX  = (int) $sX;
         $siX2 = (int) $sX + $scaleX2;

         if ($tc) {
           $c1 = imagecolorat($src_img, $siX, $siY2);
           $c2 = imagecolorat($src_img, $siX, $siY);
           $c3 = imagecolorat($src_img, $siX2, $siY2);
           $c4 = imagecolorat($src_img, $siX2, $siY);

           $r = (($c1 + $c2 + $c3 + $c4) >> 2) & 0xFF0000;
           $g = ((($c1 & 0xFF00) + ($c2 & 0xFF00) + ($c3 & 0xFF00) + ($c4 & 0xFF00)) >> 2) & 0xFF00;
           $b = ((($c1 & 0xFF)  + ($c2 & 0xFF)  + ($c3 & 0xFF)  + ($c4 & 0xFF))  >> 2);

           imagesetpixel($dst_img, $dst_x + $x - $src_x, $dst_y + $y - $src_y, $r+$g+$b);
         }  else {
           $c1 = imagecolorsforindex($src_img, imagecolorat($src_img, $siX, $siY2));
           $c2 = imagecolorsforindex($src_img, imagecolorat($src_img, $siX, $siY));
           $c3 = imagecolorsforindex($src_img, imagecolorat($src_img, $siX2, $siY2));
           $c4 = imagecolorsforindex($src_img, imagecolorat($src_img, $siX2, $siY));

           $r = ($c1['red']  + $c2['red']  + $c3['red']  + $c4['red']  ) << 14;
           $g = ($c1['green'] + $c2['green'] + $c3['green'] + $c4['green']) << 6;
           $b = ($c1['blue']  + $c2['blue']  + $c3['blue']  + $c4['blue'] ) >> 2;

           imagesetpixel($dst_img, $dst_x + $x - $src_x, $dst_y + $y - $src_y, $r+$g+$b);
         }
       }
      }
    }

    /**
    *generate a unique filename in a directory like prefix_filename_randon.ext
    *@access public
    *@param string path of the destination dir. Example '/img'
    *@param string name of the file to save. Example 'my_foto.jpg'
    *@param string [optional] prefix of the name Example 'picture'
    *@return string full path of the file to save. Exmaple '/img/picture_my_foto_94949.jpg'
    **/
    function unique_filename ( $archive_dir , $filename , $file_prefix='') {
    	// checkemaos if file exists
    	$extension= strtolower( substr( strrchr($filename, ".") ,1) );
    	$name=str_replace(".".$extension,'',$filename);

    	//	only alfanumerics characters
    	$string_tmp = $name;
    	$name='';
    	while ($string_tmp!='') {
    		$character=substr ($string_tmp, 0, 1);
    		$string_tmp=substr ($string_tmp, 1);
    		if (eregi("[abcdefghijklmnopqrstuvwxyz0-9]", $character)) {
    			$name=$name.$character;
    		} else {
    			$name=$name.'_';
    		}

    	}

    	$destination = $name."_".$file_prefix.".".$extension;

    	while (file_exists($archive_dir."/".$destination)) {
    		// if exist, add a random number to the file name
    		srand((double)microtime()*1000000); // random number inizializzation
    		$destination = $file_prefix."_".$name."_".rand(0,999999999).".".$extension;
    	}


    	return ($destination);
    }



        /**
        * NOT USED : to do: mezclar imagenes a tama�o original, preservar canal alpha y redimensionar
        * Merge multiple images and keep transparency
        * $i is and array of the images to be merged:
        * $i[1] will be overlayed over $i[0]
        * $i[2] will be overlayed over that
        * @param mixed
        * @retrun mixed the function returns the resulting image ready for saving
        **/
        function imagemergealpha($i) {

         //create a new image
         $s = imagecreatetruecolor(imagesx($i[0]),imagesy($i[1]));

         //merge all images
         imagealphablending($s,true);
         $z = $i;
         while($d = each($z)) {
          imagecopy($s,$d[1],0,0,0,0,imagesx($d[1]),imagesy($d[1]));
         }

         //restore the transparency
         imagealphablending($s,false);
         $w = imagesx($s);
         $h = imagesy($s);
         for($x=0;$x<$w;$x++) {
          for($y=0;$y<$h;$y++) {
           $c = imagecolorat($s,$x,$y);
           $c = imagecolorsforindex($s,$c);
           $z = $i;
           $t = 0;
           while($d = each($z)) {
           $ta = imagecolorat($d[1],$x,$y);
           $ta = imagecolorsforindex($d[1],$ta);
           $t += 127-$ta['alpha'];
           }
           $t = ($t > 127) ? 127 : $t;
           $t = 127-$t;
           $c = imagecolorallocatealpha($s,$c['red'],$c['green'],$c['blue'],$t);
           imagesetpixel($s,$x,$y,$c);
          }
         }
         imagesavealpha($s,true);
         return $s;
        }
}

function nivel_acesso($acao = 3,$nivel = NULL){
	if ($acao == 1){
		switch ($nivel) {
			case 0:
				$str = "Master";
				break;
			case 1:
				$str = "Administrador";
				break;
			case 2:
				$str = "Usu&aacute;rio";
				break;
		}
	}
	if ($acao == 2){
		if ($nivel == 0) { $sele1 = "selected=\"selected\""; }
		if ($nivel == 1) { $sele2 = "selected=\"selected\""; }
		if ($nivel == 2) { $sele3 = "selected=\"selected\""; }
		$str = "<select name=\"usuario_nivel\">
	      <option value=\"0\" $sele1>Master</option>
	      <option value=\"1\" $sele2>Administrador</option>
          <option value=\"2\" $sele3>Usu&aacute;rio</option>
        </select>";
	}
	if ($acao == 3){
		$str = "<select name=\"usu_nivel\">
		  <option value=\"0\">Master</option>
	      <option value=\"1\">Administrador</option>
	      <option value=\"2\">Usu&aacute;rio</option>
        </select>";
		
	}
	return $str;
}

function status($acao = 3,$status = NULL){
	if ($acao == 1){
		switch ($status) {
			case 0:
				$str = "Ativo";
				break;
			case 1:
				$str = "Inativo";
				break;
		}
		return $str;
	}
	if ($acao == 2){
		if ($status == 0) { $sts1 = "selected=\"selected\""; }
		if ($status == 1) { $sts2 = "selected=\"selected\""; }
		$str = "<select name=\"status\">
	      <option value=\"0\" $sts1>Ativo</option>
	      <option value=\"1\" $sts2>Inativo</option>
        </select>";
		return $str;
	}
	if ($acao == 3){
		$str = "<select name=\"status\">
	      <option value=\"0\">Ativo</option>
	      <option value=\"1\">Inativo</option>
        </select>";
		return $str;
	}
}

//fun��o que grava as a��es realizadas, para gera��o de relat�rios
function relatorios ($string,$usu_id,$user_affected = NULL){
	//grava no relatorio a a��o
	$sql = "INSERT INTO relatorios (`usu_id` ,`user_affected` ,`acao` ,`data` ,`hora`) 
				VALUES ('$usu_id', '$user_affected', '$string', '".date('Y-m-d')."', '".date('H:i:s')."');";
	$query = mysql_query($sql);
}
 
function gera_senha(){
	$chars = 'abcdxywzABCDZYWZ0123456789';
	$max = strlen($chars)-1;
	$password = null;
	for($i=0; $i < 8; $i++) {
		$password .= $chars{mt_rand(0, $max)};
	}
	return $password;
}

function checa_img($idProduto){
	$query = mysql_query("SELECT * FROM ".BD.".`produtos_imagens` WHERE id_produto = $idProduto;");
	$total = mysql_num_rows($query);
	if ($total > 0){
		return true;
	} else {
		return false;	
	}
}

function estatisticas($acao){
	switch ($acao) {		
		case "totalUsuarios":
			$query = mysql_query("SELECT COUNT(`usu_id`) as totalUsuarios FROM  ".BD.".`usuarios`;");
			$str = mysql_result($query,0,"totalUsuarios");
		break;
		case "ultimosLogin":
			$query = mysql_query("SELECT u.usu_nome, DATE_FORMAT( l.data,  '%d/%m/%Y' ) AS data, l.hora, l.ip
									FROM  ".BD.".log_acesso l
									JOIN usuarios u ON u.usu_id = l.usuario
									ORDER BY l.data DESC 
									LIMIT 4;");
			while ($row = mysql_fetch_array($query)) {
				$str .= "<strong>".$row["data"]."</strong> ".$row["hora"]." <br>".$row["usu_nome"]." / ".$row["ip"]."<br>";
			}
		break;
	}
	return $str;
}

function listaSelect($nomeTabela, $nomeCampo, $nomeSelect, $nomeCampoComparar = NULL, $valor = NULL, $css = NULL){
		$res = "<select name=\"$nomeSelect\">";
		$sql = mysql_query("SELECT * FROM ".BD.".$nomeTabela;");
		while ($row = mysql_fetch_array($sql)) {
			$id = $row["id"];
			$nome = $row["$nomeCampo"];
				if ($nomeCampoComparar != NULL && $valor == $row["$nomeCampoComparar"] )
				{
					$res .= "<option value=\"$id\" selected=\"selected\">$nome</option>\n";
				} else {
					$res .= "<option value=\"$id\">$nome</option>\n";
				}
		}
		$res .= "</select>";	
		return $res;
	}
	
// Fun��o que valida o CPF
function validaCPF($cpf)
{	// Verifiva se o n�mero digitado cont�m todos os digitos
    $cpf = str_pad(ereg_replace('[^0-9]', '', $cpf), 11, '0', STR_PAD_LEFT);
	
	// Verifica se nenhuma das sequ�ncias abaixo foi digitada, caso seja, retorna falso
    if (strlen($cpf) != 11 || $cpf == '00000000000' || $cpf == '11111111111' || $cpf == '22222222222' || $cpf == '33333333333' || $cpf == '44444444444' || $cpf == '55555555555' || $cpf == '66666666666' || $cpf == '77777777777' || $cpf == '88888888888' || $cpf == '99999999999')
	{
	return false;
    }
	else
	{   // Calcula os n�meros para verificar se o CPF � verdadeiro
        for ($t = 9; $t < 11; $t++) {
            for ($d = 0, $c = 0; $c < $t; $c++) {
                $d += $cpf{$c} * (($t + 1) - $c);
            }

            $d = ((10 * $d) % 11) % 10;

            if ($cpf{$c} != $d) {
                return false;
            }
        }

        return true;
    }
}

function retiraacentopasta($palavra)
	{
		//tranforma em letras normais (a,e,i,o,u)
		$letras 		= array("a","a","a","a","a","e","e","e","e","i","i","i","i","o","o","o","o","o","u","u","u","u","c","A","A","A","A","A","E","E","E","E","I","I","I","I","O","O","O","O","U","U","U","U","C","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","");
		$letrasCod 		= array("&#225;","&#224;","&#226;","&#227;","&#228;","&#233;","&#232;","&#234;","&#235;","&#237;","&#236;","&#238;","&#239;","&#243;","&#242;","&#244;","&#245;","&#246;","&#250;","&#249;","&#251;","&#252;","&#231;","&#193;","&#192;","&#194;","&#195;","&#196;","&#201;","&#200;","&#202;","&#203;","&#205;","&#204;","&#206;","&#207;","&#211;","&#210;","&#213;","&#214;","&#218;","&#217;","&#219;","&#220;","&#199;",">","<","\"",""," ","&#180;","&#198;","&#230;","&#197;","&#229;","","&#184;","&#162;","","","","&#247;","&#208;","&#240;","","&#189;","&#188;","&#190;","&#191;","","&#175;","","","","&#209;","&#241;","&#170;","&#186;","&#216;","&#248;","","","","","","","&#185;","&#178;","&#179;","&#223;","&#222;","&#254;","&#215;","&#168;","&#221;","&#253;","&#165;","&#255;","");
		$letrasAcento	= array("","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","",">","<","\"","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","", "'");	
		$letrasHtml		= array("&aacute;","&agrave;","&acirc;","&atilde;","&auml;","&eacute;","&egrave;","&ecirc;","&euml;","&iacute;","&igrave;","&icirc;","&iuml;","&oacute;","&ograve;","&ocirc;","&otilde;","&ouml;","&uacute;","&ugrave;","&ucirc;","&uuml;","&ccedil;","&Aacute;","&Agrave;","&Acirc;","&Atilde;","&Auml;","&Eacute;","&Egrave;","&Ecirc;","&Euml;","&Iacute;","&Igrave;","&Icirc;","&Iuml;","&Oacute;","&Ograve;","&Otilde;","&Ouml;","&Uacute;","&Ugrave;","&Ucirc;","&Uuml;","&Ccedil;","&gt;","&lt;","&quot;","&euro;","&nbsp;","&acute;","&AElig;","&aelig;","&Aring;","&aring;","&brvbar;","&cedil;","&cent;","&copy;","&curren;","&deg;","&divide;","&ETH;","&eth;","&euro;","&frac12;","&frac14;","&frac34;","&iquest;","&laquo;","&macr;","&micro;","&middot;","&not;","&Ntilde;","&ntilde;","&ordf;","&ordm;","&Oslash;","&oslash;","&para;","&plusmn;","&raquo;","&reg;","&sect;","&shy;","&sup1;","&sup2;","&sup3;","&szlig;","&THORN;","&thorn;","&times;","&uml;","&Yacute;","&yacute;","&yen;","&yuml;","");
		$palavra		= str_replace($letrasCod, $letras, $palavra);
		$palavra		= str_replace($letrasHtml, $letras, $palavra);
		$palavra		= str_replace($letrasAcento, $letras, $palavra);
		return $palavra;
	}
?>