<link href="./style.css" rel="stylesheet" type="text/css">
<table width="100%"  border="0" cellspacing="0" cellpadding="0" class="td-cinza04">
                  
                 
                  <tr>
                    <td class="td-cinza04">
<?
	
		$pg_num = $_GET["pg_num"];
		if(!$pg_num){
			$pg_num = 0;		
		}
		if($_GET["reg_num"]<>""){
			$reg_num = $_GET["reg_num"];
		
		}else{
			$reg_num = 40;
		}
		$inicial = ($pg_num * $reg_num);
			
			$regs = mysql_query("SELECT * FROM ".$navega." ORDER BY codigo DESC LIMIT $inicial,$reg_num");		
			$contador01 = "SELECT * FROM ".$navega." ORDER BY codigo DESC";					
						
			$contador02 = mysql_query($contador01);
			$reg_total  = mysql_num_rows($contador02);
			$paginas	= intval($reg_total / $reg_num);
?>
                      <table width="100%"  border="0" cellspacing="0" cellpadding="0" class="td-cinza04">
                        <tr>
                          
          <td width="50%" class="td-cinza04"><a href="./?navega=<? echo $navega; ?>_incluir" class="link-cinza02">+ Incluir nova vaga</a><br>
                            Registros por pagina
                            <select name="registros" size="1" class="input-A" id="registros" onchange="if(options[selectedIndex].value) document.location = ('?reg_num='+options[selectedIndex].value+'&navega=<? echo $navega; ?>');">
                              <option value="20" <? if($reg_num=="40"){ print "selected";}?>>40</option>
                              <option value="40" <? if($reg_num=="60"){ print "selected";}?>>40</option>
                              <option value="60" <? if($reg_num=="100"){ print "selected";}?>>100</option>
                            </select><br>
          </td>
                          <td width="50%" align="right" class="td-cinza04"><span class="txt-cinza02">
                            <?
	if($pg_num <> 0){
		$url = $pg_num - 1;
		print "<a href=\"$PHP_SELF?reg_num=".$reg_num."&pg_num=".$url."&navega=".$navega."\" class=\"link-menu-cinza\"><</a>|&nbsp;";
	}else{
		print "<|&nbsp;";
	}
	$a="20";
	for ($i = 0; $i<($paginas + 1); $i++) {
		if ($i == $pg_num){
			print "[<b>".$i."</b>]&nbsp;";
		}else{
			print "<a href=\"$PHP_SELF?reg_num=".$reg_num."&pg_num=".$i."&navega=".$navega."\" class=\"link-menu-cinza\">$i</a>&nbsp;";		
			if($i>=$a){ print  "<br>"; $a=$a+20;}
		}	
	}
	if ($pg_num < $paginas) {
	  		$url = $pg_num + 1;
			  print "|<a href=\"$PHP_SELF?reg_num=".$reg_num."&pg_num=".$url."&navega=".$navega."\" class=\"link-menu-cinza\">></a>";
		}else {
		  print "|> ";
	}
?>
                          </span></td>
                        </tr>
                      </table>
                      <br>
     <table width="98%"  border="0" align="center" cellpadding="0" cellspacing="0" class="td-cinza04">
        <tr>
        	<td width="70" align="center" class="td-cinza01"><strong>A&Ccedil;&Otilde;ES</strong></td>
            <td width="1" align="center"></td>
         	<td align="center" class="td-cinza01"><strong>TITULO</strong></td>
        </tr>
        <tr> 
          <td colspan="7" height="2"></td>
        </tr>
        <?
	$flagcor = true;
	while ($reg = mysql_fetch_array($regs)){
		if ($flagcor) { $td = "td-cinza02"; } else { $td = "td-cinza03"; }
		$codigo 	= $reg["codigo"];
		$titulo		= $reg["titulo"];
		?>
        <tr>
        	<td align="center" class="<? print $td;?>">
            	<a href="./?navega=vagas_visualizar&codigo=<? print $codigo; ?>"><img src="images/icon_view.gif" title="Visualizar vaga: <? print $titulo; ?>" alt="Visualizar vaga: <? print $titulo; ?>" width="15" height="15" border="0"></a>&nbsp;<a href="./?navega=vagas_editar&codigo=<? print $codigo; ?>"><img src="images/icon_editar.gif" title="Editar vaga: <? print $titulo; ?>" alt="Editar vaga: <? print $titulo; ?>" width="15" height="15" border="0"></a>&nbsp;<a href="./?navega=vagas_excluir&codigo=<? print $codigo; ?>"><img src="images/icon_deletar.gif" title="Excluir vaga: <? print $titulo; ?>" alt="Excluir vaga: <? print $titulo; ?>" width="15" height="15" border="0"></a>
            </td>
        	<td width="1" align="center"></td> 
			<td class="<? print $td;?>">&nbsp;&nbsp;&nbsp;<? print $titulo; ?></td>
                   
		</tr>
        <tr>
			<td colspan="7" height="1"></td>
        </tr>
        <?
	$flagcor = !$flagcor; 
	}
?>
      </table>

<table width="100%"  border="0" cellspacing="0" cellpadding="0">
                   
                      </table>
          </td>
                  </tr>
                </table>
