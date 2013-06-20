<?php /* Smarty version 2.3.1, created on 2009-03-01 10:55:30
         compiled from uebimiau/catch-address.htm */ ?>
<?php $this->_load_plugins(array(
array('modifier', 'escape', 'uebimiau/catch-address.htm', 22, false),
array('modifier', 'truncate', 'uebimiau/catch-address.htm', 44, false),)); ?><?php $this->_config_load($this->_tpl_vars['umLanguageFile'], "Catch", 'local'); ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
  <head>
    <title>
      Webmail Conhecer - <?php echo $this->_config[0]['vars']['ctc_title']; ?>

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
    <form name="form1" action="catch.php" method="POST">
      
      <input type="hidden" name="lid" value="<?php echo $this->_tpl_vars['umLid']; ?>
">
      <input type="hidden" name="ix" value="<?php echo $this->_tpl_vars['umIx']; ?>
">
      <input type="hidden" name="folder" value="<?php echo $this->_run_mod_handler('escape', true, $this->_tpl_vars['umFolder'], "html"); ?>
">
      <br>
      <br>
      <table width="500" border="0" cellspacing="1" cellpadding="0" class="normal" align="center" bgcolor="#2D3443">
        <tr bgcolor="#78879C">
          <td height="30" width="100%" colspan="2" align="center" valign="middle">
            <b><?php echo $this->_config[0]['vars']['ctc_information']; ?>
</b>
          </td>
        </tr>
        <?php if ($this->_tpl_vars['umAvailableAddresses'] > 0): ?>
        <tr bgcolor="#BFC6D3">
          <td width="60%" align="center" valign="middle">
            <b><?php echo $this->_config[0]['vars']['ctc_name']; ?>
</b>
          </td>
          <td align="center" valign="middle">
            <b><?php echo $this->_config[0]['vars']['ctc_email']; ?>
</b>
          </td>
        </tr>
        <?php if (isset($this->_sections["i"])) unset($this->_sections["i"]);
$this->_sections["i"]['name'] = "i";
$this->_sections["i"]['loop'] = is_array($this->_tpl_vars['umAddressList']) ? count($this->_tpl_vars['umAddressList']) : max(0, (int)$this->_tpl_vars['umAddressList']);
$this->_sections["i"]['show'] = true;
$this->_sections["i"]['max'] = $this->_sections["i"]['loop'];
$this->_sections["i"]['step'] = 1;
$this->_sections["i"]['start'] = $this->_sections["i"]['step'] > 0 ? 0 : $this->_sections["i"]['loop']-1;
if ($this->_sections["i"]['show']) {
    $this->_sections["i"]['total'] = $this->_sections["i"]['loop'];
    if ($this->_sections["i"]['total'] == 0)
        $this->_sections["i"]['show'] = false;
} else
    $this->_sections["i"]['total'] = 0;
if ($this->_sections["i"]['show']):

            for ($this->_sections["i"]['index'] = $this->_sections["i"]['start'], $this->_sections["i"]['iteration'] = 1;
                 $this->_sections["i"]['iteration'] <= $this->_sections["i"]['total'];
                 $this->_sections["i"]['index'] += $this->_sections["i"]['step'], $this->_sections["i"]['iteration']++):
$this->_sections["i"]['rownum'] = $this->_sections["i"]['iteration'];
$this->_sections["i"]['index_prev'] = $this->_sections["i"]['index'] - $this->_sections["i"]['step'];
$this->_sections["i"]['index_next'] = $this->_sections["i"]['index'] + $this->_sections["i"]['step'];
$this->_sections["i"]['first']      = ($this->_sections["i"]['iteration'] == 1);
$this->_sections["i"]['last']       = ($this->_sections["i"]['iteration'] == $this->_sections["i"]['total']);
?>
        <tr bgcolor="#BFC6D3">
          <td valign="middle">
            <input type="checkbox" name="ckaval[]" checked value="<?php echo $this->_tpl_vars['umAddressList'][$this->_sections['i']['index']]['index']; ?>
">
            <?php echo $this->_run_mod_handler('escape', true, $this->_run_mod_handler('truncate', true, $this->_tpl_vars['umAddressList'][$this->_sections['i']['index']]['name'], 30, "...", true), "html"); ?>

          </td>
          <td align="center" valign="middle">
            <?php echo $this->_tpl_vars['umAddressList'][$this->_sections['i']['index']]['mail']; ?>

          </td>
        </tr>
        <?php endfor; endif; ?>
        <tr bgcolor="#BFC6D3">
          <td align="center" valign="middle" colspan="2">
            <br>
            <input type="submit" name="submit" class="button" value="<?php echo $this->_config[0]['vars']['ctc_save']; ?>
">
            <br>
            <br>
          </td>
        </tr>
        <?php else: ?>
        <tr bgcolor="#BFC6D3">
          <td align="center" valign="middle" colspan="2">
            <?php echo $this->_config[0]['vars']['ctc_no_address']; ?>

          </td>
        </tr>
        <tr bgcolor="#BFC6D3">
          <td align="center" valign="middle" colspan="2">
            > 
            <a href="javascript:self.close()"><?php echo $this->_config[0]['vars']['ctc_close']; ?>
</a>
            <</td>
        </tr>
        <?php endif; ?>
      </table>
    </form>
  </body>
</html>