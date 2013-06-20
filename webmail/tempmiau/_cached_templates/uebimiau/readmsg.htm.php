<?php /* Smarty version 2.3.1, created on 2011-02-07 19:05:26
         compiled from uebimiau/readmsg.htm */ ?>
<?php $this->_load_plugins(array(
array('modifier', 'escape', 'uebimiau/readmsg.htm', 6, false),
array('modifier', 'default', 'uebimiau/readmsg.htm', 120, false),
array('modifier', 'truncate', 'uebimiau/readmsg.htm', 156, false),
array('modifier', 'date_format', 'uebimiau/readmsg.htm', 164, false),
array('function', 'assign', 'uebimiau/readmsg.htm', 136, false),)); ?><?php $this->_config_load($this->_tpl_vars['umLanguageFile'], "Readmsg", 'local'); ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
  <head>
    <title>
      Webmail Conhecer - <?php echo $this->_run_mod_handler('escape', true, $this->_tpl_vars['umPageTitle'], "html"); ?>

    </title>
    <meta http-equiv="Content-Type" content="text/html; charset=<?php echo $this->_config[0]['vars']['default_char_set']; ?>
">
    <link rel="stylesheet" href="themes/uebimiau/webmail.css" type="text/css">
    <script language="JavaScript" src="themes/uebimiau/webmail.js" type="text/javascript"></script>
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
                
                <table cellspacing="0" cellpadding="0" width="99.7%" border="0" class="normal" align="center">
                  <tr>
                    <td align="center" valign="middle" bgcolor="#BFC6D3" height="50" width="83" onMouseOver="mOvr(this,'#ACB4C5');" onMouseOut="mOut(this,'#BFC6D3');" onClick="mClk(this);">
                      <a class="lien" href="javascript:goinbox()">
                        <img src="themes/uebimiau/images/inbox.gif" border="0">
                        <br><?php echo $this->_config[0]['vars']['messages_mnu']; ?>
</a>
                    </td>
                    <td align="center" valign="middle" bgcolor="#BFC6D3" height="50" width="83" onMouseOver="mOvr(this,'#ACB4C5');" onMouseOut="mOut(this,'#BFC6D3');" onClick="mClk(this);">
                      <a class="lien" href="javascript:newmsg()">
                        <img src="themes/uebimiau/images/newmsg.gif" border="0">
                        <br><?php echo $this->_config[0]['vars']['compose_mnu']; ?>
</a>
                    </td>
                    <td align="center" valign="middle" bgcolor="#BFC6D3" height="50" width="83">
                      <img src="themes/uebimiau/images/refresh.gif" border="0">
                      <br><?php echo $this->_config[0]['vars']['refresh_mnu']; ?>

                    </td>
                    <td align="center" valign="middle" bgcolor="#BFC6D3" height="50" width="83" onMouseOver="mOvr(this,'#ACB4C5');" onMouseOut="mOut(this,'#BFC6D3');" onClick="mClk(this);">
                      <a class="lien" href="javascript:folderlist()">
                        <img src="themes/uebimiau/images/folder.gif" border="0">
                        <br><?php echo $this->_config[0]['vars']['folders_mnu']; ?>
</a>
                    </td>
                    <td align="center" valign="middle" bgcolor="#BFC6D3" height="50" width="83" onMouseOver="mOvr(this,'#ACB4C5');" onMouseOut="mOut(this,'#BFC6D3');" onClick="mClk(this);">
                      <a class="lien" href="javascript:search()">
                        <img src="themes/uebimiau/images/search.gif" border="0">
                        <br><?php echo $this->_config[0]['vars']['search_mnu']; ?>
</a>
                    </td>
                    <td align="center" valign="middle" bgcolor="#BFC6D3" height="50" width="83" onMouseOver="mOvr(this,'#ACB4C5');" onMouseOut="mOut(this,'#BFC6D3');" onClick="mClk(this);">
                      <a class="lien" href="javascript:addresses()">
                        <img src="themes/uebimiau/images/addresses.gif" border="0">
                        <br><?php echo $this->_config[0]['vars']['address_mnu']; ?>
</a>
                    </td>
                    <td align="center" valign="middle" bgcolor="#BFC6D3" height="50" width="83" onMouseOver="mOvr(this,'#ACB4C5');" onMouseOut="mOut(this,'#BFC6D3');" onClick="mClk(this);">
                      <a class="lien" href="javascript:emptytrash()">
                        <img src="themes/uebimiau/images/trash.gif" border="0">
                        <br><?php echo $this->_config[0]['vars']['empty_trash_mnu']; ?>
</a>
                    </td>
                    <td align="center" valign="middle" bgcolor="#BFC6D3" height="50" width="83" onMouseOver="mOvr(this,'#ACB4C5');" onMouseOut="mOut(this,'#BFC6D3');" onClick="mClk(this);">
                      <a class="lien" href="javascript:prefs()">
                        <img src="themes/uebimiau/images/prefs.gif" border="0">
                        <br><?php echo $this->_config[0]['vars']['prefs_mnu']; ?>
</a>
                    </td>
                    <td align="center" valign="middle" bgcolor="#BFC6D3" height="50" width="83" onMouseOver="mOvr(this,'#ACB4C5');" onMouseOut="mOut(this,'#BFC6D3');" onClick="mClk(this);">
                      <a class="lien" href="javascript:goend()">
                        <img src="themes/uebimiau/images/logout.gif" border="0">
                        <br><?php echo $this->_config[0]['vars']['logoff_mnu']; ?>
</a>
                    </td>
                  </tr>
                </table>
                <table width="99.7%" border="0" cellspacing="0" cellpadding="0" class="normal" align="center">
                  <?php echo $this->_tpl_vars['umReplyForm']; ?>

                  <tr>
                    <td colspan="2" align="center" valign="middle" height="30">
                      <?php if ($this->_tpl_vars['umHavePrevious'] == 1): ?>
                      <a class="lien" href="<?php echo $this->_tpl_vars['umPreviousLink']; ?>
" title="<?php echo $this->_tpl_vars['umPreviousSubject']; ?>
"><?php echo $this->_config[0]['vars']['previous_mnu']; ?>
</a>
                      |
                      <?php endif; ?>
                      <?php if ($this->_tpl_vars['umHaveNext'] == 1): ?>
                      <a class="lien" href="<?php echo $this->_tpl_vars['umNextLink']; ?>
" title="<?php echo $this->_tpl_vars['umNextSubject']; ?>
"><?php echo $this->_config[0]['vars']['next_mnu']; ?>
</a>
                      |
                      <?php endif; ?>
                      <a class="lien" href="javascript:goback()"><?php echo $this->_config[0]['vars']['back_mnu']; ?>
</a>
                      |
                      <a class="lien" href="javascript:reply()"><?php echo $this->_config[0]['vars']['reply_mnu']; ?>
</a>
                      |
                      <a class="lien" href="javascript:replyall()"><?php echo $this->_config[0]['vars']['reply_all_mnu']; ?>
</a>
                      |
                      <a class="lien" href="javascript:forward()"><?php echo $this->_config[0]['vars']['forward_mnu']; ?>
</a>
                      |
                      <a class="lien" href="javascript:printit()"><?php echo $this->_config[0]['vars']['print_mnu']; ?>
</a>
                      |
                      <a class="lien" href="javascript:headers()"><?php echo $this->_config[0]['vars']['headers_mnu']; ?>
</a>
                    </td>
                  </tr>
                  <tr bgcolor="#BFC6D3">
                    <td height="5" colspan="2">
                    </td>
                  </tr>
                  <tr bgcolor="#BFC6D3">
                    <td width="15%" align="left" height="20">
                      &nbsp;<?php echo $this->_config[0]['vars']['from_hea']; ?>

                    </td>
                    <td>
                      &nbsp;<?php if (isset($this->_sections["i"])) unset($this->_sections["i"]);
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
?>
                      <a href="<?php echo $this->_tpl_vars['umFromList'][$this->_sections['i']['index']]['link']; ?>
" title="<?php echo $this->_run_mod_handler('escape', true, $this->_tpl_vars['umFromList'][$this->_sections['i']['index']]['title'], "html"); ?>
" class="lien"><?php echo $this->_run_mod_handler('escape', true, $this->_run_mod_handler('default', true, $this->_tpl_vars['umFromList'][$this->_sections['i']['index']]['name'], $this->_config[0]['vars']['no_sender_text']), "html"); ?>
</a>
                      <?php endfor; endif; ?>&nbsp;
                      <a href="javascript:block_addresses()">
                      <a href="javascript:catch_addresses()">
                        <img src="./themes/uebimiau/images/bookmark_it.gif" border="0" alt="<?php echo $this->_config[0]['vars']['catch_address']; ?>
" align="absmiddle"></a>
                    </td>
                  </tr>
                  <tr bgcolor="#BFC6D3">
                    <td width="15%" align="left" height="20">
                      &nbsp;<?php echo $this->_config[0]['vars']['to_hea']; ?>

                    </td>
                    <td>
                      &nbsp;<?php if (isset($this->_sections["i"])) unset($this->_sections["i"]);
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
?><?php if ($this->_tpl_vars['firstto'] == "no"): ?>;<?php endif; ?>
                      <a href="<?php echo $this->_tpl_vars['umTOList'][$this->_sections['i']['index']]['link']; ?>
" title="<?php echo $this->_run_mod_handler('escape', true, $this->_tpl_vars['umTOList'][$this->_sections['i']['index']]['title'], "html"); ?>
" class="lien"><?php echo $this->_run_mod_handler('escape', true, $this->_tpl_vars['umTOList'][$this->_sections['i']['index']]['name'], "html"); ?>
</a>
                      <?php $this->_plugins['function']['assign'][0](array('var' => "firstto",'value' => "no"), $this); if($this->_extract) { extract($this->_tpl_vars); $this->_extract=false; } ?><?php endfor; else: ?>&nbsp;<?php echo $this->_config[0]['vars']['no_recipient_text']; ?>
<?php endif; ?>
                    </td>
                  </tr>
                  <?php if ($this->_tpl_vars['umHaveCC']): ?>
                  <tr bgcolor="#BFC6D3">
                    <td  width="15%" align="left" height="20">
                      &nbsp;<?php echo $this->_config[0]['vars']['cc_hea']; ?>

                    </td>
                    <td>
                      &nbsp;<?php if (isset($this->_sections["i"])) unset($this->_sections["i"]);
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
?><?php if ($this->_tpl_vars['firstcc'] == "no"): ?>;<?php endif; ?>
                      <a href="<?php echo $this->_tpl_vars['umCCList'][$this->_sections['i']['index']]['link']; ?>
" title="<?php echo $this->_run_mod_handler('escape', true, $this->_tpl_vars['umCCList'][$this->_sections['i']['index']]['title'], "html"); ?>
" class="lien"><?php echo $this->_run_mod_handler('escape', true, $this->_tpl_vars['umCCList'][$this->_sections['i']['index']]['name'], "html"); ?>
</a>
                      <?php $this->_plugins['function']['assign'][0](array('var' => "firstcc",'value' => "no"), $this); if($this->_extract) { extract($this->_tpl_vars); $this->_extract=false; } ?><?php endfor; endif; ?>
                    </td>
                  </tr>
                  <?php endif; ?>
                  <tr bgcolor="#BFC6D3">
                    <td width="15%" align="left" height="20">
                      &nbsp;<?php echo $this->_config[0]['vars']['subject_hea']; ?>

                    </td>
                    <td>
                      &nbsp;<?php echo $this->_run_mod_handler('escape', true, $this->_run_mod_handler('truncate', true, $this->_run_mod_handler('default', true, $this->_tpl_vars['umSubject'], $this->_config[0]['vars']['no_subject_text']), 100, "...", true), "html"); ?>

                    </td>
                  </tr>
                  <tr bgcolor="#BFC6D3">
                    <td width="15%" align="left" height="20">
                      &nbsp;<?php echo $this->_config[0]['vars']['date_hea']; ?>

                    </td>
                    <td>
                      &nbsp;<?php echo $this->_run_mod_handler('date_format', true, $this->_tpl_vars['umDate'], $this->_config[0]['vars']['date_format']); ?>

                    </td>
                  </tr>
                  <?php if ($this->_tpl_vars['umHaveAttachments']): ?>
                  <tr bgcolor="#BFC6D3">
                    <td width="15%" align="left" height="20">
                      &nbsp;<?php echo $this->_config[0]['vars']['attach_hea']; ?>

                    </td>
                    <td>
                      <table width="99.4%" border="0" cellspacing="1" cellpadding="0" bgcolor="#2D3443" class="normal">
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
                            &nbsp;<?php echo $this->_tpl_vars['umAttachList'][$this->_sections['i']['index']]['normlink']; ?>
<?php echo $this->_run_mod_handler('escape', true, $this->_run_mod_handler('truncate', true, $this->_tpl_vars['umAttachList'][$this->_sections['i']['index']]['name'], 30, "...", true), "html"); ?>
</a>
                            <?php echo $this->_tpl_vars['umAttachList'][$this->_sections['i']['index']]['downlink']; ?>

                            <img src="./images/download.gif" border="0" align="absmiddle"></a>
                          </td>
                          <td>
                            &nbsp;<?php echo $this->_tpl_vars['umAttachList'][$this->_sections['i']['index']]['size']; ?>
 Kb &nbsp;
                          </td>
                          <td>
                            &nbsp;<?php echo $this->_tpl_vars['umAttachList'][$this->_sections['i']['index']]['type']; ?>

                          </td>
                        </tr>
                        <?php endfor; endif; ?>
                      </table>
                    </td>
                  </tr>
                  <tr bgcolor="#BFC6D3">
                    <td height="5" colspan="2">
                    </td>
                  </tr>
                  <?php endif; ?>
                  <tr>
                    <td colspan="2">
                      <table width="100%" border="0" cellspacing="1" cellpadding="0" class="normal">
                        <tr bgcolor="#FFFFFF">
                          <td width="60%"<?php echo $this->_tpl_vars['umBackImg']; ?>
<?php echo $this->_tpl_vars['umBackColor']; ?>
>
                            <?php echo $this->_tpl_vars['umMessageBody']; ?>

                          </td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <form name="move" action="process.php" method="POST">
                      <?php echo $this->_tpl_vars['umDeleteForm']; ?>

                      <td colspan="2" align="center" valign="middle" height="30">
                        <a class="lien" href="javascript:deletemsg()">
                          <img src="./themes/uebimiau/images/cross.gif" border="0" align="bottom">
                          &nbsp;<?php echo $this->_config[0]['vars']['delete_mnu']; ?>
</a>
                        |
                        <a class="lien" href="javascript:movemsg()">
                          <img src="./themes/uebimiau/images/move.gif" border="0" align="bottom">
                          &nbsp;<?php echo $this->_config[0]['vars']['move_mnu']; ?>
</a>
                        &nbsp;
                        <select name="aval_folders">
                          <?php if (isset($this->_sections["i"])) unset($this->_sections["i"]);
$this->_sections["i"]['name'] = "i";
$this->_sections["i"]['loop'] = is_array($this->_tpl_vars['umAvalFolders']) ? count($this->_tpl_vars['umAvalFolders']) : max(0, (int)$this->_tpl_vars['umAvalFolders']);
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
                          <option value="<?php echo $this->_run_mod_handler('escape', true, $this->_tpl_vars['umAvalFolders'][$this->_sections['i']['index']]['path'], "html"); ?>
">
                          <?php echo $this->_run_mod_handler('escape', true, $this->_tpl_vars['umAvalFolders'][$this->_sections['i']['index']]['display'], "html"); ?>
<?php endfor; endif; ?>
                        </select>
                      </td>
                    </form>
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