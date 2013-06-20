<?php /* Smarty version 2.3.1, created on 2010-12-20 19:34:37
         compiled from uebimiau/print-message.htm */ ?>
<?php $this->_load_plugins(array(
array('modifier', 'escape', 'uebimiau/print-message.htm', 7, false),
array('modifier', 'default', 'uebimiau/print-message.htm', 54, false),
array('modifier', 'truncate', 'uebimiau/print-message.htm', 80, false),
array('modifier', 'date_format', 'uebimiau/print-message.htm', 88, false),
array('function', 'assign', 'uebimiau/print-message.htm', 62, false),)); ?><?php $this->_config_load($this->_tpl_vars['umLanguageFile'], "Readmsg", 'local'); ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=<?php echo $this->_config[0]['vars']['default_char_set']; ?>
">
    <title>
      Webmail Conhecer - <?php echo $this->_run_mod_handler('escape', true, $this->_tpl_vars['umPageTitle'], "html"); ?>

    </title>
    <link rel="stylesheet" href="themes/uebimiau/webmail.css" type="text/css">
  </head>
  <!--
  Skinned by Arnaud BEAUVOIR - http://forum.beauvoir.net - contact@beauvoir.net
  Thank you to let the copyright in place on the login page and in all sources of pages.
  This skin is the work of an author, thank you to respect it and not to remove the
  copyright, or worse, to put your name at the place.
  -->
  <?php echo '
<script language="JavaScript" type="text/javascript">
function printIt() {
try {
self.print();
} catch(err) {
//
}
}
</script>
  '; ?>

  <body onLoad="printIt()" leftmargin="5" topmargin="5" marginwidth="5" marginheigth="5">
    <br>
    <br>
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

    </table>
    <br>
    <br>
    <table width="750" border="0" cellspacing="0" cellpadding="0" class="normal" align="center">
      <tr>
        <td valign="top">
          <table cellspacing="0" cellpadding="0" width="100%" border="0" class="normal">
            <tr bgcolor="#BFC6D3">
              <td width="20%" valign="middle">
                &nbsp;<?php echo $this->_config[0]['vars']['from_hea']; ?>

              </td>
              <td valign="middle">
                <?php if (isset($this->_sections["i"])) unset($this->_sections["i"]);
$this->_sections["i"]['name'] = "i";
$this->_sections["i"]['loop'] = is_array($this->_tpl_vars['umFromList']) ? count($this->_tpl_vars['umFromList']) : max(0, (int)$this->_tpl_vars['umFromList']);
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
?><?php echo $this->_run_mod_handler('escape', true, $this->_run_mod_handler('default', true, $this->_tpl_vars['umFromList'][$this->_sections['i']['index']]['name'], $this->_config[0]['vars']['no_sender_text']), "html"); ?>
<?php endfor; endif; ?>
              </td>
            </tr>
            <tr bgcolor="#BFC6D3">
              <td valign="middle">
                &nbsp;<?php echo $this->_config[0]['vars']['to_hea']; ?>

              </td>
              <td valign="middle">
                <?php if (isset($this->_sections["i"])) unset($this->_sections["i"]);
$this->_sections["i"]['name'] = "i";
$this->_sections["i"]['loop'] = is_array($this->_tpl_vars['umTOList']) ? count($this->_tpl_vars['umTOList']) : max(0, (int)$this->_tpl_vars['umTOList']);
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
?><?php if ($this->_tpl_vars['firstto'] == "no"): ?>;<?php endif; ?><?php echo $this->_run_mod_handler('escape', true, $this->_tpl_vars['umTOList'][$this->_sections['i']['index']]['name'], "html"); ?>
<?php $this->_plugins['function']['assign'][0](array('var' => "firstto",'value' => "no"), $this); if($this->_extract) { extract($this->_tpl_vars); $this->_extract=false; } ?><?php endfor; else: ?>&nbsp;<?php echo $this->_config[0]['vars']['no_recipient_text']; ?>
<?php endif; ?>
              </td>
            </tr>
            <?php if ($this->_tpl_vars['umHaveCC'] == 1): ?>
            <tr bgcolor="#BFC6D3">
              <td valign="middle">
                &nbsp;<?php echo $this->_config[0]['vars']['cc_hea']; ?>

              </td>
              <td valign="middle">
                <?php if (isset($this->_sections["i"])) unset($this->_sections["i"]);
$this->_sections["i"]['name'] = "i";
$this->_sections["i"]['loop'] = is_array($this->_tpl_vars['umCCList']) ? count($this->_tpl_vars['umCCList']) : max(0, (int)$this->_tpl_vars['umCCList']);
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
?><?php if ($this->_tpl_vars['firstcc'] == "no"): ?>;<?php endif; ?><?php echo $this->_run_mod_handler('escape', true, $this->_tpl_vars['umCCList'][$this->_sections['i']['index']]['name'], "html"); ?>
<?php $this->_plugins['function']['assign'][0](array('var' => "firstcc",'value' => "no"), $this); if($this->_extract) { extract($this->_tpl_vars); $this->_extract=false; } ?><?php endfor; endif; ?>
              </td>
            </tr>
            <?php endif; ?>
            <tr bgcolor="#BFC6D3">
              <td valign="middle">
                &nbsp;<?php echo $this->_config[0]['vars']['subject_hea']; ?>

              </td>
              <td valign="middle">
                <?php echo $this->_run_mod_handler('escape', true, $this->_run_mod_handler('truncate', true, $this->_run_mod_handler('default', true, $this->_tpl_vars['umSubject'], $this->_config[0]['vars']['no_subject_text']), 100, "...", true), "html"); ?>

              </td>
            </tr>
            <tr bgcolor="#BFC6D3">
              <td valign="middle">
                &nbsp;<?php echo $this->_config[0]['vars']['date_hea']; ?>

              </td>
              <td valign="middle">
                <?php echo $this->_run_mod_handler('date_format', true, $this->_tpl_vars['umDate'], $this->_config[0]['vars']['date_format']); ?>

              </td>
            </tr>
            <?php if ($this->_tpl_vars['umHaveAttachments'] == 1): ?>
            <tr>
              <td bgcolor="#BFC6D3">
                &nbsp;<?php echo $this->_config[0]['vars']['attach_hea']; ?>

              </td>
              <td>
                <table cellspacing="1" cellpadding="0" width="100%" border="0" class="normal" bgcolor="#2D3443">
                  <tr bgcolor="#BFC6D3">
                    <td width="60%">
                      &nbsp;
                      <b><?php echo $this->_config[0]['vars']['attch_name_hea']; ?>
</b>
                      (<?php echo $this->_config[0]['vars']['attch_force_hea']; ?>
)
                    </td>
                    <td>
                      &nbsp;
                      <b><?php echo $this->_config[0]['vars']['attch_size_hea']; ?>
</b>
                    </td>
                    <td>
                      &nbsp;
                      <b><?php echo $this->_config[0]['vars']['attch_type_hea']; ?>
</b>
                    </td>
                  </tr>
                  <?php if (isset($this->_sections["i"])) unset($this->_sections["i"]);
$this->_sections["i"]['name'] = "i";
$this->_sections["i"]['loop'] = is_array($this->_tpl_vars['umAttachList']) ? count($this->_tpl_vars['umAttachList']) : max(0, (int)$this->_tpl_vars['umAttachList']);
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
                  <tr bgcolor="#FFFFFF">
                    <td>
                      &nbsp;<?php echo $this->_run_mod_handler('escape', true, $this->_run_mod_handler('truncate', true, $this->_tpl_vars['umAttachList'][$this->_sections['i']['index']]['name'], 30, "...", true), "html"); ?>
 
                      <img src="./images/download.gif" width="12" height="12" border="0" alt="">
                    </td>
                    <td>
                      &nbsp;<?php echo $this->_tpl_vars['umAttachList'][$this->_sections['i']['index']]['size']; ?>
 Kb &nbsp;
                    </td>
                    <td>
                      &nbsp;<?php echo $this->_tpl_vars['umAttachList'][$this->_sections['i']['index']]['type']; ?>

                    </td>
                    <?php endfor; endif; ?>
                  </tr>
                </table>
              </td>
            </tr>
            <?php endif; ?>
            <tr>
              <td colspan="2">
                <table cellspacing="1" cellpadding="0" width="100%" border="0" class="normal">
                  <tr>
                    <td width="60%"<?php echo $this->_tpl_vars['umBackImg']; ?>
<?php echo $this->_tpl_vars['umBackColor']; ?>
>
                      <?php echo $this->_tpl_vars['umMessageBody']; ?>

                      <br>
                      <br>
                    </td>
                  </tr>
                </table>
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
    <br>
    <br>
  </body>
</html>