<?php /* Smarty version 2.3.1, created on 2012-04-04 15:10:16
         compiled from uebimiau/bad-login.htm */ ?>
<?php $this->_config_load($this->_tpl_vars['umLanguageFile'], "BadLogin", 'local'); ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
  <head>
    <title>
      Webmail Conhecer - <?php echo $this->_config[0]['vars']['bdl_title']; ?>

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
  <body>
    <table width="100%" height="100%" border="0" cellspacing="0" cellpadding="0" align="center">
      <tr>
        <td valign="middle" align="center">
          <table width="750" border="0" cellspacing="0" cellpadding="0" class="normal" align="center">
            <tr>
              <td><img src="themes/uebimiau/images/bandeau-h.gif" border="0"></td>
            </tr>
            <tr>
              <td><img src="themes/uebimiau/images/header-small.gif" border="0"></td>
            </tr>
            <tr>
              <td><img src="themes/uebimiau/images/bandeau-h.gif" border="0"></td>
            </tr>
            <tr>
              <td background="themes/uebimiau/images/ligne-fond.gif">
                <table width="450" border="0" cellspacing="1" cellpadding="1" align="center">
                  <tr>
                    <td align="center">
                      <br>
                      <font color="red">.: 
                        <b><?php echo $this->_config[0]['vars']['bdl_title']; ?>
</b>
                        :.
                      </font>
                      <br>
                    </td>
                  </tr>
                  <tr>
                    <td>&nbsp;
                      
                    </td>
                  </tr>
                  <tr>
                    <td align="center">
                      <?php echo $this->_config[0]['vars']['bdl_msg']; ?>

                      <br>
                      <br><?php echo $this->_tpl_vars['umServerResponse']; ?>

                    </td>
                  </tr>
                  <tr>
                    <td>&nbsp;
                      
                    </td>
                  </tr>
                  <tr>
                    <td align="center">
                      > 
                      <a href="./index.php?tid=<?php echo $this->_tpl_vars['umTid']; ?>
&lid=<?php echo $this->_tpl_vars['umLid']; ?>
" class="lien"><?php echo $this->_config[0]['vars']['bdl_back']; ?>
</a>
                      <</td>
                  </tr>
                  <tr>
                    <td>&nbsp;
                      
                    </td>
                  </tr>
                </table>
              </td>
            </tr>
            <tr>
              <td>
               <map name="Uebimiau">
                  <area shape="rect" coords="614,10,743,22" href="http://www.mkinformatica.net" target="_blank">
                </map>
                <img src="themes/uebimiau/images/bandeau-b.gif" border="0" width="750" height="25" alt="Webmail powered by MK Informática" usemap="#Uebimiau">
              </td>
              <tr>
          </table>
        </td>
      </tr>
    </table>
  </body>
</html>