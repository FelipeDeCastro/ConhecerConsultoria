<?php /* Smarty version 2.3.1, created on 2009-01-23 12:18:20
         compiled from uebimiau/upload-attach.htm */ ?>
<?php $this->_config_load($this->_tpl_vars['umLanguageFile'], "Newmessage", 'local'); ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
  <head>
    <title>
      Webmail Conhecer - <?php echo $this->_config[0]['vars']['up_title']; ?>

    </title>
    <meta http-equiv="Content-Type" content="text/html; charset=<?php echo $this->_config[0]['vars']['default_char_set']; ?>
">
    <link rel="stylesheet" href="themes/uebimiau/webmail.css" type="text/css">
    <?php echo $this->_tpl_vars['umJS']; ?>

  </head>
  <!--
  Skinned by Arnaud BEAUVOIR - http://forum.beauvoir.net - contact@beauvoir.net
  Thank you to let the copyright in place on the login page and in all sources of pages.
  This skin is the work of an author, thank you to respect it and not to remove the
  copyright, or worse, to put your name at the place.
  -->
  <body>
    <br>
    <table width="95%" border="0" cellspacing="1" cellpadding="0" align="center" class="normal" bgcolor="#2D3443">
      <form enctype="multipart/form-data" action="upload.php?lid=<?php echo $this->_tpl_vars['umLid']; ?>
&tid=<?php echo $this->_tpl_vars['umTid']; ?>
" method="POST">
        <tr bgcolor="#78879C">
          <td height="30" align="center">
            <b><?php echo $this->_config[0]['vars']['up_information_text']; ?>
</b>
          </td>
        </tr>
        <tr bgcolor="#BFC6D3">
          <td align="center">
            <input type="file" name="userfile" class="textbox" size="22" style="width: 220px; border: 1 solid #7F9DB9" class="button">
            <br>
            <input type=submit value="<?php echo $this->_config[0]['vars']['up_button_text']; ?>
" name="submit" class="button">
          </td>
        </tr>
      </form>
    </table>
  </body>
</html>