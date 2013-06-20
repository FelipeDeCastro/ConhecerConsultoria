<link href="./style.css" rel="stylesheet" type="text/css">
<script>
function abre(codigo)
	{
		window.open('../curriculo_visualizar.php?codigo=' + codigo + '','_blank','scrollbars=yes,resizable=yes,width=620');
		window.open('./index.php?reg_num=<? echo $reg_num; ?>&navega=candidatura&vaga=<? echo $vaga; ?>','_self','scrollbars=yes,resizable=yes,width=620');
	}
</script>
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
			$reg_num = 20;
		}
		$inicial = ($pg_num * $reg_num);
			
			$regs = mysql_query("SELECT * FROM ".$navega." WHERE vaga = '$vaga' ORDER BY candidato LIMIT $inicial,$reg_num", $db_conn);		
			$contador01 = "SELECT * FROM ".$navega." WHERE vaga = '$vaga' ORDER BY candidato";					
						
			$contador02 = mysql_db_query($db_database,$contador01);
			$reg_total  = mysql_num_rows($contador02);
			$paginas	= intval($reg_total / $reg_num);
?>
                      <table width="100%"  border="0" cellspacing="0" cellpadding="0" class="td-cinza04">
                        <tr>
                          
          <td width="50%" class="td-cinza04">                            Registros por pagina
                            <select name="registros" size="1" class="input-A" id="registros" onchange="if(options[selectedIndex].value) document.location = ('?reg_num='+options[selectedIndex].value+'&navega=<? echo $navega; ?>&vaga=<? echo $vaga; ?>');">
                              <option value="20" <? if($reg_num=="20"){ print "selected";}?>>20</option>
                              <option value="40" <? if($reg_num=="40"){ print "selected";}?>>40</option>
                              <option value="60" <? if($reg_num=="60"){ print "selected";}?>>60</option>
                            </select><br>
          </td>
                          <td width="50%" align="right" class="td-cinza04"><span class="txt-cinza02">
                            <?
	if($pg_num <> 0){
		$url = $pg_num - 1;
		print "<a href=\"$PHP_SELF?reg_num=".$reg_num."&pg_num=".$url."&navega=".$navega."&vaga=".$vaga."\" class=\"link-menu-cinza\"><</a>|&nbsp;";
	}else{
		print "<|&nbsp;";
	}
	$a="20";
	for ($i = 0; $i<($paginas + 1); $i++) {
		if ($i == $pg_num){
			print "[<b>".$i."</b>]&nbsp;";
		}else{
			print "<a href=\"$PHP_SELF?reg_num=".$reg_num."&pg_num=".$i."&navega=".$navega."&vaga=".$vaga."\" class=\"link-menu-cinza\">$i</a>&nbsp;";		
			if($i>=$a){ print  "<br>"; $a=$a+20;}
		}	
	}
	if ($pg_num < $paginas) {
	  		$url = $pg_num + 1;
			  print "|<a href=\"$PHP_SELF?reg_num=".$reg_num."&pg_num=".$url."&navega=".$navega."&vaga=".$vaga."\" class=\"link-menu-cinza\">></a>";
		}else {
		  print "|> ";
	}
?>
                          </span></td>
                        </tr>
                      </table>
                      <br>
         <table width="98%"  border="0" align="center" cellpadding="0" cellspacing="0" class="td-cinza04">
		 <?
	if(mysql_num_rows($regs)==0)
		{
		?>
        <tr>
          <td colspan="3" align="center" class="td-cinza01">Por favor selecione a vaga!</td>
          </tr>
        <tr>
			<td colspan="7" height="1"></td>
        </tr>
		
        <tr>
          <td colspan="3" align="center"><br>
		  	<? if($vaga!=""){echo"Não ha candidatos a vaga!<br><br>";} ?>
		  	<select name="vaga" onchange="if(options[selectedIndex].value) document.location = ('?vaga='+options[selectedIndex].value+'&navega=<? echo $navega; ?>');">
			<option value="">Selecione</option>
			<?
			$regs = mysql_query("SELECT * FROM vagas ORDER BY titulo", $db_conn);			
			while ($reg = mysql_fetch_array($regs))
				{
					$codigo 	= $reg["codigo"];
					$titulo		= $reg["titulo"];
			?>
			<option value="<? echo $codigo; ?>"><? echo $titulo; ?></option>
			<?
				}
			?>
			</select>
		  </td>
          </tr>
		<?
		}
	else
		{
		?>
        <tr>
          <td align="center" class="td-cinza01"><strong>NOME</strong></td>
          <td width="1" align="center"></td>
          <td width="80" align="center" class="td-cinza01"><strong>A&Ccedil;&Atilde;O</strong></td>
        </tr>
        <tr> 
          <td colspan="7" height="2"></td>
        </tr>
		<?
		}
	$flagcor = true;
	while ($reg = mysql_fetch_array($regs)){
		if ($flagcor) { $td = "td-cinza02"; } else { $td = "td-cinza03"; }
		$codigo 	= $reg["codigo"];
		$candidato	= $reg["candidato"];
		
		$regs2 	= mysql_query("SELECT * FROM curriculo WHERE codigo='$candidato'", $db_conn);			
		$reg2 	= mysql_fetch_array($regs2);
		$nome	= $reg2["nome"];
		?>
        <tr>
          <td class="<? print $td;?>">&nbsp;&nbsp;&nbsp;<? print $nome; ?></td>
          <td width="1" align="center"></td>
          <td align="center" class="<? print $td;?>"><a href="javascript:abre(<? echo $candidato; ?>);"><img src="images/icon_view.gif" alt="Visualizar Currículo" width="15" height="15" border="0"></a></td>
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
