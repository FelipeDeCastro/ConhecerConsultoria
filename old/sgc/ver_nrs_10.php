<?  include "travar.php"; 
	include ("../conn/conn_bd.php");?>
<link href="style.css" rel="stylesheet" type="text/css">
<div class="content"><h2 align="left"><img src="images/le_ver_nr10.gif" width="290" height="28"></h2>
<hr>
<table width="95%" border="0" align="center">
  <tr>
    <td><div align="center" class="txt-testeira">
      <table width="100%"  border="0" align="center" cellpadding="0" cellspacing="0" class="txt-cinza02">                
        <tr>
            <td class="td-cinza04">
        <?		$navega = $_GET["navega"];
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
                    $regs = mysql_query("SELECT * FROM nr10 ORDER BY id desc LIMIT $inicial,$reg_num");
                    $contador01 = "SELECT * FROM nr10 ORDER BY id desc";					
                    
                    $contador02 = mysql_db_query($db_database,$contador01);
                    $reg_total  = mysql_num_rows($contador02);
                    $paginas	= intval($reg_total / $reg_num);
        ?>
                          <table width="100%"  border="0" cellspacing="0" cellpadding="0">
                            <tr>                          
              <td>Total de registros: <?=$reg_total?></td>
                            </tr>
                            <tr>
                              <td><div align="center">
                              Registros por pagina
                                  <select name="registros" size="1" id="registros" onchange="if(options[selectedIndex].value) document.location = ('?reg_num='+options[selectedIndex].value+'&amp;navega=<?=$navega?>&amp;busca=1&amp;l=<?=$_GET['l']?>');">
                                    <option value="3" <? if($reg_num=="3"){ print "selected";}?>>3</option>
                                    <option value="20" <? if($reg_num=="20"){ print "selected";}?>>20</option>
                                    <option value="40" <? if($reg_num=="40"){ print "selected";}?>>40</option>
                                    <option value="60" <? if($reg_num=="60"){ print "selected";}?>>60</option>
                                    <option value="100" <? if($reg_num=="100"){ print "selected";}?>>100</option>
                                  </select>
                                  <span class="error">|</span> P&aacute;ginas  <?
        if($pg_num <> 0){
            $url = $pg_num - 1;
            print "<a href=\"$PHP_SELF?reg_num=".$reg_num."&pg_num=".$url."&navega=".$navega."&busca=1&l=".$_GET['l']."\"><</a>|&nbsp;";
        }else{
            print "  <|&nbsp;";
        }
        $a="30";
        for ($i = 0; $i<($paginas + 1); $i++) {
            if ($i == $pg_num){
                print "<b><span class='vermelho02'>[".$i."]</span></b>&nbsp;";
            }else{
                print "<a href=\"$PHP_SELF?reg_num=".$reg_num."&pg_num=".$i."&navega=".$navega."&busca=1&l=".$_GET['l']."\">$i</a>&nbsp;";		
                if($i>=$a){ print  "<br>"; $a=$a+30;}
            }	
        }
        if ($pg_num < $paginas) {
                $url = $pg_num + 1;
                  print "|<a href=\"$PHP_SELF?reg_num=".$reg_num."&pg_num=".$url."&navega=".$navega."&busca=1&l=".$_GET['l']."\">></a>";
            }else {
              print "|> ";
        }
    ?>
                              </div></td>
                            </tr>
                          </table>
                          <br>
            <table width="98%"  border="0" align="center" cellpadding="0" cellspacing="1">
            <tr bgcolor="#FF9900">
              <td width="63" align="center"><div align="center">Op&ccedil;&otilde;es</div></td>
              <td width="33" align="center">N&ordm;</td>
              <td width="113" align="center"><strong>Nome</strong></td>
              <td width="81" align="center"><strong>Cidade </strong></td>
              <td width="190" align="center">CPF</td>
              <td width="153" align="center">Empresa</td>
              <td width="83" align="center">Cargo</td>
              </tr>
            <tr> 
              <td colspan="11" height="2"></td>
            </tr>
            <?
        $flagcor = true;
        while ($reg = mysql_fetch_array($regs)){
            if ($flagcor) { $td = "td-cinza02"; } else { $td = "td-cinza03"; }
            $n 	 = $reg["id"];
            $nome 	 = $reg["nome"];
            $cidade = $reg["cidade"];
            $cpf	 = $reg["cpf"];
            $empresa  = $reg["empresa"];
            $cargo  = $reg["cargo"];
            ?>
            <tr>
              <td align="center" class="<? print $td;?>"><a href="principal.php?navega=4&amp;in=<?=$n?>"><img src="images/icon_view.gif" width="15" height="15" border="0" alt="Visualizar processo n&ordm; <?=$n?>"></a>  <a href="principal.php?navega=6&np=<?=$n?>"></a><a href='principal.php?navega=8&np=<?=$n?>'></a></td>
              <td align="center" class="<? print $td;?>"><b><? print $n; ?></b></td>
              <td align="left" class="<? print $td;?>"><b><? print $nome; ?></b></td>
              <td class="<? print $td;?>" align="center"><? print $cidade; ?></td>
              <td align="left" class="<? print $td;?>"><? print $cpf; ?></td>
              <td align="left" class="<? print $td;?>"><? print $empresa; ?></td>
              <td align="center" class="<? print $td;?>"><? print $cargo; ?></td>
              </tr>
            <tr>
                <td colspan="11" height="1"></td>
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
    </div></td>
  </tr>
</table>