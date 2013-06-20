<?php /* Smarty version 2.3.1, created on 2012-10-29 11:52:35
         compiled from uebimiau/login.htm */ ?>
<?php $this->_load_plugins(array(
array('modifier', 'escape', 'uebimiau/login.htm', 6, false),)); ?><?php $this->_config_load($this->_tpl_vars['umLanguageFile'], "Login", 'local'); ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
  <head>
    <title>
      Webmail Conhecer - <?php echo $this->_run_mod_handler('escape', true, $this->_config[0]['vars']['lgn_title'], "html"); ?>

    </title>
    <meta http-equiv="Content-Type" content="text/html; charset=<?php echo $this->_config[0]['vars']['default_char_set']; ?>
">
	<link rel="stylesheet" href="themes/uebimiau/webmail.css" type="text/css">
  </head>
  <!--
  Skinned by Arnaud BEAUVOIR - http://forum.beauvoir.net - contact@beauvoir.net
  Thank you to let the copyright in place on the login page and in all sources of pages.
  This skin is the work of an author, thank you to respect it and not to remove the
  copyright, or worse, to put your name at the place.
  -->
  <?php echo $this->_tpl_vars['umJS']; ?>

  <body>
    <table width="100%" height="100%" border="0" cellspacing="0" cellpadding="0" align="center">
      <tr>
        <td valign="middle" align="center">
          <table width="750" border="0" cellspacing="0" cellpadding="0" align="center">
            <tr>
              <td background="themes/uebimiau/images/ligne-fond.gif">
                <table id="Table" width="750" height="386" border="0" cellpadding="0" cellspacing="0">
					<tr>
						<td colspan="3">
							<img src="themes/uebimiau/images/topo_01.jpg" width="750" height="104" alt=""></td>
					</tr>
					<tr>
						<td colspan="3" width="750" height="36" background="themes/uebimiau/images/topo_02.jpg">
							<div align="center" class="txt-branco"><b>.: <?php echo $this->_config[0]['vars']['lgn_welcome_msg']; ?>
 :. </b></div></td>
					</tr><form name="form1" action="process.php" method=post>
					<tr>
						<td width="441" height="183" background="themes/uebimiau/images/topo_03.jpg" valign="top">
					<div style="padding-left:55px; padding-top:52px;">
					<?php if ($this->_tpl_vars['umServerType'] != "ONE-FOR-EACH"): ?>
                       <input type="text" name="f_email" value="<?php echo $this->_tpl_vars['umEmail']; ?>
" class="edits">                    <?php else: ?>                                         
                        <input type="text" name="f_user" value="<?php echo $this->_tpl_vars['umUser']; ?>
" class="edits">&nbsp;<span class="txt-branco"><b><?php echo $this->_tpl_vars['umServer']; ?>
</b></span>
				<?php endif; ?>
					<br><br style="line-height:29px;">
					<input type="password" name="f_pass" class="edits">               
                    <?php if ($this->_tpl_vars['umAllowSelectLanguage']): ?>                  
                        <b><?php echo $this->_config[0]['vars']['lng_language']; ?>
</b>:  
                        <?php echo $this->_tpl_vars['umLanguages']; ?>
 
                    <?php endif; ?>
					<!-- <br> -->
                    <?php if ($this->_tpl_vars['umAllowSelectTheme']): ?>
					<!--<b><span class="txt-branco">Tema:</span></b>&nbsp; --><?php echo $this->_tpl_vars['umThemes']; ?>

                    <?php endif; ?>
                 &nbsp;<input type="submit" name="submit" value="<?php echo $this->_config[0]['vars']['lng_login_btn']; ?>
" class="botao"> 
				  </div>
				  </td>                 
						<td>
							<img src="themes/uebimiau/images/topo_04.jpg" width="254" height="183" alt=""></td>
						<td>
							<img src="themes/uebimiau/images/topo_05.jpg" width="55" height="183" alt=""></td>
					</tr></form>
					<tr>
						<td colspan="3">
							<img src="themes/uebimiau/images/topo_06.jpg" alt="" width="750" height="63" border="0" usemap="#Map"></td>
					</tr>
				</table>              </td>
            </tr>
            <tr>
          </table>
        </td>
      </tr>
    </table>
  
<map name="Map"><area shape="rect" coords="720,48,741,61" href="http://www.mkinformatica.net" target="_blank">
</map></body>
</html>