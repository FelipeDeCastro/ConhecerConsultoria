<?php /* Smarty version 2.3.1, created on 2012-04-04 15:11:32
         compiled from uebimiau/newmsg.htm */ ?>
<?php $this->_load_plugins(array(
array('modifier', 'escape', 'uebimiau/newmsg.htm', 22, false),
array('modifier', 'truncate', 'uebimiau/newmsg.htm', 171, false),)); ?><?php $this->_config_load($this->_tpl_vars['umLanguageFile'], "Newmessage", 'local'); ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
  <head>
    <title>
      Webmail Conhecer - <?php echo $this->_config[0]['vars']['messages_to']; ?>
 <?php echo $this->_tpl_vars['umUserEmail']; ?>

    </title>
    <meta http-equiv="Content-Type" content="text/html; charset=<?php echo $this->_config[0]['vars']['default_char_set']; ?>
">
    <link rel="stylesheet" href="themes/uebimiau/webmail.css" type="text/css">
    <script language="JavaScript" src="themes/uebimiau/webmail.js" type="text/javascript"></script>
    <?php echo $this->_tpl_vars['umJS']; ?>

  </head>
  <!--
  Skinned by Arnaud BEAUVOIR - http://forum.beauvoir.net - contact@beauvoir.net
  Thank you to let the copyright in place on the login page and in all sources of pages.
  This skin is the work of an author, thank you to respect it and not to remove the
  copyright, or worse, to put your name at the place.
  -->
  <?php if ($this->_tpl_vars['umAdvancedEditor'] == 1): ?>
  <div id="hiddenCompose" style="position: absolute; left: 3; top: -100; visibility: hidden; z-index: 3">
    <form name="hiddencomposeForm">
<textarea name="hiddencomposeFormTextArea"><?php echo $this->_run_mod_handler('escape', true, $this->_tpl_vars['umBody'], "html"); ?>
</textarea>
    </form>
  </div>
  <?php endif; ?>
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
                <form name="composeForm" method="post" action="newmsg.php" onSubmit="return false;">
                  <?php echo $this->_tpl_vars['umForms']; ?>

                  <table cellspacing="0" cellpadding="0" width="99.7%" border="0" class="normal" align="center">
                    <tr>
                      <td align="center" valign="middle" bgcolor="#BFC6D3" height="50" width="83" onMouseOver="mOvr(this,'#ACB4C5');" onMouseOut="mOut(this,'#BFC6D3');" onClick="mClk(this);">
                        <a class="lien" href="javascript:goinbox()">
                          <img src="themes/uebimiau/images/inbox.gif" border="0">
                          <br><?php echo $this->_config[0]['vars']['messages_mnu']; ?>
</a>
                      </td>
                      <td align="center" valign="middle" bgcolor="#BFC6D3" height="50" width="83">
                        <img src="themes/uebimiau/images/newmsg.gif" border="0">
                        <br><?php echo $this->_config[0]['vars']['compose_mnu']; ?>

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
                  <table width="99.7%" border="0" cellspacing="1" cellpadding="0" class="normal" align="center">
                    <tr>
                      <td colspan="2" height="20">
                      </td>
                    </tr>
                    <tr>
                      <td align="right" width="30%">
                        <?php echo $this->_config[0]['vars']['to_hea']; ?>
&nbsp;
                        <a href="javascript:addrpopup()">
                          <img src="./themes/uebimiau/images/bookmark_it.gif" border="0" alt="<!--%address_tip%-->
                          " align="absmiddle"></a>
                        &nbsp;
                      </td>
                      <td>
                        <?php echo $this->_tpl_vars['umTo']; ?>

                      </td>
                    </tr>
                    <tr>
                      <td align="right" width="30%">
                        <?php echo $this->_config[0]['vars']['cc_hea']; ?>
&nbsp;
                        <a href="javascript:addrpopup()">
                          <img src="./themes/uebimiau/images/bookmark_it.gif" border="0" alt="<!--%address_tip%-->
                          " align="absmiddle"></a>
                        &nbsp;
                      </td>
                      <td>
                        <?php echo $this->_tpl_vars['umCc']; ?>

                      </td>
                    </tr>
                    <tr>
                      <td align="right" width="30%">
                        <?php echo $this->_config[0]['vars']['bcc_hea']; ?>
&nbsp;
                        <a href="javascript:addrpopup()">
                          <img src="./themes/uebimiau/images/bookmark_it.gif" border="0" alt="<!--%address_tip%-->
                          " align="absmiddle"></a>
                        &nbsp;
                      </td>
                      <td>
                        <?php echo $this->_tpl_vars['umBcc']; ?>

                      </td>
                    </tr>
                    <tr>
                      <td align="right" width="30%">
                        <?php echo $this->_config[0]['vars']['subject_hea']; ?>
&nbsp;
                      </td>
                      <td>
                        <?php echo $this->_tpl_vars['umSubject']; ?>

                      </td>
                    </tr>
                    <tr>
                      <td align="right" width="30%">
                        <?php echo $this->_config[0]['vars']['attach_hea']; ?>
&nbsp;
                      </td>
                      <td>
                        <table cellspacing="1" cellpadding="0" width="445" border="0" class="normal" bgcolor="#2D3443">
                          <?php if ($this->_tpl_vars['umHaveAttachs'] == 1): ?>
                          <tr bgcolor="#BFC6D3">
                            <td width="45%">
                              &nbsp;<?php echo $this->_config[0]['vars']['attch_name_hea']; ?>

                            </td>
                            <td width="15%">
                              &nbsp;<?php echo $this->_config[0]['vars']['attch_size']; ?>

                            </td>
                            <td width="30%">
                              &nbsp;<?php echo $this->_config[0]['vars']['attch_type_hea']; ?>

                            </td>
                            <td width="10%">
                              &nbsp;<?php echo $this->_config[0]['vars']['attch_dele_hea']; ?>
&nbsp;
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
                            <td width="50%">
                              &nbsp;<?php echo $this->_run_mod_handler('escape', true, $this->_tpl_vars['umAttachList'][$this->_sections['i']['index']]['name'], "html"); ?>

                            </td>
                            <td width="10%">
                              &nbsp;<?php echo $this->_tpl_vars['umAttachList'][$this->_sections['i']['index']]['size']; ?>
 Kb
                            </td>
                            <td width="30%">
                              &nbsp;<?php echo $this->_run_mod_handler('truncate', true, $this->_tpl_vars['umAttachList'][$this->_sections['i']['index']]['type'], 23, "...", true); ?>

                            </td>
                            <td width="10%" align="center">
                              <a href="<?php echo $this->_tpl_vars['umAttachList'][$this->_sections['i']['index']]['link']; ?>
" class="lien">OK</a>
                            </td>
                          </tr>
                          <?php endfor; endif; ?>
                          <?php else: ?>
                          <tr bgcolor="#FFFFFF">
                            <td width="100%" colspan=3>
                              &nbsp;<?php echo $this->_config[0]['vars']['attch_no_hea']; ?>

                            </td>
                          </tr>
                          <?php endif; ?>
                        </table>
                        <table cellspacing="1" cellpadding="0" width="445" border="0" class="normal" bgcolor="#FFFFFF">
                          <tr>
                            <td>
                              <a href="javascript:upwin()" class="lien">&nbsp;<?php echo $this->_config[0]['vars']['attch_add_new']; ?>
</a>
                            </td>
                          </tr>
                        </table>
                      </td>
                    </tr>
                    <tr>
                      <td>
                      </td>
                      <td>
                        <?php if ($this->_tpl_vars['umAdvancedEditor'] == 1): ?>
                        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include("uebimiau/advanced-editor.htm", array());
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                        <div id="hiddenCompose2" style="position: absolute; left: 3; top: -100; visibility: hidden; z-index: 3">
<textarea rows="15" name="body" class="normal" style="width: 445px"><?php echo $this->_run_mod_handler('escape', true, $this->_tpl_vars['umBody'], "html"); ?>
</textarea>
                        </div>
                        <?php else: ?>
<textarea rows="15" name="body" class="normal" style="width: 445px"><?php echo $this->_run_mod_handler('escape', true, $this->_tpl_vars['umBody'], "html"); ?>
</textarea>
                        <?php endif; ?>
                      </td>
                    </tr>
                    <?php if (!$umAddSignature && $this->_tpl_vars['umHaveSignature']): ?>
                    <tr>
                      <td align="right">
                        <?php echo $this->_config[0]['vars']['add_signature']; ?>
:&nbsp;
                      </td>
                      <td>
                        <input type="checkbox" name="cksig" onClick="return addsig()"<?php if ($this->_tpl_vars['umAddSignature'] == 1): ?> checked disabled<?php endif; ?>>
                      </td>
                    </tr>
                    <?php endif; ?>
                    <tr>
                      <td align="right">
                        <?php echo $this->_config[0]['vars']['priority_text']; ?>
:&nbsp;
                      </td>
                      <td>
                        <select name="priority">
                          <option value="1"<?php if ($this->_tpl_vars['umPriority'] == 1): ?> selected<?php endif; ?>>
                          <?php echo $this->_config[0]['vars']['priority_high']; ?>

                          <option value="3"<?php if ($this->_tpl_vars['umPriority'] == 3): ?> selected<?php endif; ?>>
                          <?php echo $this->_config[0]['vars']['priority_normal']; ?>

                          <option value="5"<?php if ($this->_tpl_vars['umPriority'] == 5): ?> selected<?php endif; ?>>
                          <?php echo $this->_config[0]['vars']['priority_low']; ?>

                        </select>
                      </td>
                    </tr>
                    <tr>
                      <td height="30">
                      </td>
                      <td>
                        <input type="button" name="bt_enviar" value="<?php echo $this->_config[0]['vars']['send_text']; ?>
" onClick="enviar()" class="button">
                      </td>
                    </tr>
                    <tr>
                      <td colspan="2" height="20">
                      </td>
                    </tr>
                  </table>
              </td>
            </tr>
            </form>
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