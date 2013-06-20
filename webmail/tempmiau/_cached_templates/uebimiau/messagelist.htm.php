<?php /* Smarty version 2.3.1, created on 2012-04-04 15:11:35
         compiled from uebimiau/messagelist.htm */ ?>
<?php $this->_load_plugins(array(
array('function', 'um_welcome_message', 'uebimiau/messagelist.htm', 2, false),
array('modifier', 'escape', 'uebimiau/messagelist.htm', 160, false),
array('modifier', 'default', 'uebimiau/messagelist.htm', 160, false),
array('modifier', 'truncate', 'uebimiau/messagelist.htm', 161, false),
array('modifier', 'date_format', 'uebimiau/messagelist.htm', 181, false),)); ?><?php $this->_config_load($this->_tpl_vars['umLanguageFile'], "MessageList", 'local'); ?>
<?php $this->_plugins['function']['um_welcome_message'][0](array('messages' => $this->_tpl_vars['umNumMessages'],'unread' => $this->_tpl_vars['umNumUnread'],'boxname' => $this->_tpl_vars['umBoxName'],'var' => "umWelcomeMessage"), $this); if($this->_extract) { extract($this->_tpl_vars); $this->_extract=false; } ?>
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
                    <td align="center" valign="middle" bgcolor="#BFC6D3" height="50" width="83" onMouseOver="mOvr(this,'#ACB4C5');" onMouseOut="mOut(this,'#BFC6D3');" onClick="mClk(this);">
                      <a class="lien" href="javascript:refreshlist()">
                        <img src="themes/uebimiau/images/refresh.gif" border="0">
                        <br><?php echo $this->_config[0]['vars']['refresh_mnu']; ?>
</a>
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
                  <tr>
                    <td colspan="7">&nbsp;
                      
                    </td>
                  </tr>
                  <?php if ($this->_tpl_vars['umNumMessages'] > 0): ?>
                  <tr>
                    <form name="form1" action="process.php" method="post">
                      <?php echo $this->_tpl_vars['umForms']; ?>

                      <td colspan="7">
                        &nbsp;<?php echo $this->_tpl_vars['umWelcomeMessage']; ?>

                      </td>
                  </tr>
                  <?php if ($this->_tpl_vars['umErrorMessage'] != ""): ?>
                  <tr>
                    <td colspan="7">
                      &nbsp;
                      <font color="red">
                        <b><?php echo $this->_tpl_vars['umErrorMessage']; ?>
</b>
                      </font>
                    </td>
                  </tr>
                  <?php endif; ?>
                  <tr>
                    <td width="5" bgcolor="#78879C" align="center" valign="middle">
                      <input type="checkbox" name="chkall" onClick="sel()">
                    </td>
                    <td width="35" bgcolor="#78879C" align="center" valign="middle">
                      <img src="./images/prior_high.gif" width="5" height="11" border="0" alt="high priority">
                      &nbsp;
                      <img src="images/attach.gif" border="0" width="6" height="14" alt="attached file">
                      &nbsp;
                      <img src="images/msg_read.gif" border="0" width="14" height="14" alt="read message">
                    </td>
                    <?php if ($this->_tpl_vars['umFolder'] == "sent"): ?>
                    <td width="200" bgcolor="#78879C" align="center" valign="middle">.: 
                      <b>
                        <a class="lien" href="javascript:sortby('toname')"><?php echo $this->_config[0]['vars']['to_hea']; ?>
<?php echo $this->_tpl_vars['umToArrow']; ?>
</a></b>
                      :.
                    </td>
                    <?php else: ?>
                    <td width="200" bgcolor="#78879C" align="center" valign="middle">.: 
                      <b>
                        <a class="lien" href="javascript:sortby('fromname')"><?php echo $this->_config[0]['vars']['from_hea']; ?>
<?php echo $this->_tpl_vars['umFromArrow']; ?>
</a></b>
                      :.
                    </td>
                    <?php endif; ?>
                    <td width="340" bgcolor="#78879C" align="center" valign="middle">.: 
                      <b>
                        <a class="lien" href="javascript:sortby('subject')"><?php echo $this->_config[0]['vars']['subject_hea']; ?>
<?php echo $this->_tpl_vars['umSubjectArrow']; ?>
</a></b>
                      :.
                    </td>
                    <td width="100" bgcolor="#78879C" align="center" valign="middle">.: 
                      <b>
                        <a class="lien" href="javascript:sortby('date')"><?php echo $this->_config[0]['vars']['date_hea']; ?>
<?php echo $this->_tpl_vars['umDateArrow']; ?>
</a></b>
                      :.
                    </td>
                    <td width="68" bgcolor="#78879C" align="center" valign="middle">.: 
                      <b>
                        <a class="lien" href="javascript:sortby('size')"><?php echo $this->_config[0]['vars']['size_hea']; ?>
<?php echo $this->_tpl_vars['umSizeArrow']; ?>
</a></b>
                      :.
                    </td>
                  </tr>
                  <?php if (isset($this->_sections["i"])) unset($this->_sections["i"]);
$this->_sections["i"]['name'] = "i";
$this->_sections["i"]['loop'] = is_array($this->_tpl_vars['umMessageList']) ? count($this->_tpl_vars['umMessageList']) : max(0, (int)$this->_tpl_vars['umMessageList']);
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
                  <tr bgcolor="#E1E4EB" onMouseOver="mOvr(this,'#ACB4C5');" onMouseOut="mOut(this,'#E1E4EB');">
                    <td align="center" valign="middle" nowrap>
                      <?php echo $this->_tpl_vars['umMessageList'][$this->_sections['i']['index']]['checkbox']; ?>

                    </td>
                    <td align="center" valign="middle" nowrap>
                      <?php echo $this->_tpl_vars['umMessageList'][$this->_sections['i']['index']]['priorimg']; ?>
<?php echo $this->_tpl_vars['umMessageList'][$this->_sections['i']['index']]['attachimg']; ?>
<?php echo $this->_tpl_vars['umMessageList'][$this->_sections['i']['index']]['statusimg']; ?>

                    </td>
                    <?php if ($this->_tpl_vars['umFolder'] == "sent"): ?>
                    <td align="left" valign="middle" nowrap>
                      <acronym title="<?php echo $this->_run_mod_handler('default', true, $this->_run_mod_handler('escape', true, $this->_tpl_vars['umMessageList'][$this->_sections['i']['index']]['to'], "html"), $this->_config[0]['vars']['no_recipient_text']); ?>
">
                        <a href="<?php echo $this->_tpl_vars['umMessageList'][$this->_sections['i']['index']]['readlink']; ?>
"><?php echo $this->_run_mod_handler('default', true, $this->_run_mod_handler('escape', true, $this->_run_mod_handler('truncate', true, $this->_tpl_vars['umMessageList'][$this->_sections['i']['index']]['to'], 40, "...", true), "html"), $this->_config[0]['vars']['no_recipient_text']); ?>
</a>
                      </acronym>
                    </td>
                    <?php else: ?>
                    <td align="left" valign="middle" nowrap>
                      <acronym title="<?php echo $this->_run_mod_handler('default', true, $this->_run_mod_handler('escape', true, $this->_tpl_vars['umMessageList'][$this->_sections['i']['index']]['from'], "html"), $this->_config[0]['vars']['no_recipient_text']); ?>
">
                        <a href="<?php echo $this->_tpl_vars['umMessageList'][$this->_sections['i']['index']]['readlink']; ?>
"><?php echo $this->_run_mod_handler('default', true, $this->_run_mod_handler('escape', true, $this->_run_mod_handler('truncate', true, $this->_tpl_vars['umMessageList'][$this->_sections['i']['index']]['from'], 40, "...", true), "html"), $this->_config[0]['vars']['no_subject_text']); ?>
</a>
                      </acronym>
                    </td>
                    <?php endif; ?>
                    <td align="left" valign="middle" nowrap>
                      <acronym title="<?php echo $this->_run_mod_handler('default', true, $this->_run_mod_handler('escape', true, $this->_tpl_vars['umMessageList'][$this->_sections['i']['index']]['subject'], "html"), $this->_config[0]['vars']['no_subject_text']); ?>
">
                        <?php if ($this->_tpl_vars['umMessageList'][$this->_sections['i']['index']]['read'] == "false"): ?>
                        <b><?php endif; ?>
                          <a href="<?php echo $this->_tpl_vars['umMessageList'][$this->_sections['i']['index']]['readlink']; ?>
"><?php echo $this->_run_mod_handler('default', true, $this->_run_mod_handler('escape', true, $this->_run_mod_handler('truncate', true, $this->_tpl_vars['umMessageList'][$this->_sections['i']['index']]['subject'], 50, "...", true), "html"), $this->_config[0]['vars']['no_subject_text']); ?>
</a>
                          <?php if ($this->_tpl_vars['umMessageList'][$this->_sections['i']['index']]['read'] == "false"): ?></b>
                        <?php endif; ?>
                      </acronym>
                    </td>
                    <td align="center" valign="middle" nowrap>
                      <?php echo $this->_run_mod_handler('date_format', true, $this->_tpl_vars['umMessageList'][$this->_sections['i']['index']]['date'], $this->_config[0]['vars']['date_format']); ?>

                    </td>
                    <td align="right" valign="middle" nowrap>
                      <?php echo $this->_tpl_vars['umMessageList'][$this->_sections['i']['index']]['size']; ?>
 Kb &nbsp;
                    </td>
                  </tr>
                  <?php endfor; endif; ?>
                  <tr>
                    <td colspan="7">
                      &nbsp;
                      <a class="lien" href="javascript:delemsg()">
                        <img src="./themes/uebimiau/images/cross.gif" border="0" align="bottom">
                        &nbsp;<?php echo $this->_config[0]['vars']['delete_selected_mnu']; ?>
</a>
                      | 
                      <a class="lien" href="javascript:movemsg()">
                        <img src="./themes/uebimiau/images/move.gif" border="0" align="bottom">
                        &nbsp;<?php echo $this->_config[0]['vars']['move_selected_mnu']; ?>
</a>
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
                  </tr>
                  <tr>
                    <td colspan="7">
                      &nbsp;<?php if ($this->_tpl_vars['umPreviousLink']): ?>
                      <a href="<?php echo $this->_tpl_vars['umPreviousLink']; ?>
" class="lien"><?php echo $this->_config[0]['vars']['previous_text']; ?>
</a>
                      &nbsp;<?php endif; ?><?php echo $this->_tpl_vars['umNavBar']; ?>
<?php if ($this->_tpl_vars['umNextLink']): ?>&nbsp;
                      <a href="<?php echo $this->_tpl_vars['umNextLink']; ?>
" class="lien"><?php echo $this->_config[0]['vars']['next_text']; ?>
</a>
                      <?php endif; ?>
                    </td>
                  </tr>
                  <?php else: ?>
                  <tr>
                    <td colspan="7">
                      &nbsp;<?php echo $this->_config[0]['vars']['no_messages']; ?>
 
                      <b><?php echo $this->_run_mod_handler('escape', true, $this->_tpl_vars['umBoxName'], "html"); ?>

                        <br>
                        <br></b>
                    </td>
                  </tr>
                  <?php endif; ?>
                  </form>
                  <?php if ($this->_tpl_vars['umQuotaEnabled'] == 1): ?>
                  <tr>
                    <td align="center" valign="middle" colspan="7">
                      <?php echo $this->_tpl_vars['umUsageGraph']; ?>

                      <br><?php echo $this->_config[0]['vars']['quota_usage_info']; ?>
: <?php echo $this->_config[0]['vars']['quota_usage_used']; ?>
 
                      <b><?php echo $this->_tpl_vars['umTotalUsed']; ?>
</b>
                      Kb <?php echo $this->_config[0]['vars']['quota_usage_of']; ?>
 
                      <b><?php echo $this->_tpl_vars['umQuotaLimit']; ?>
</b>
                      Kb <?php echo $this->_config[0]['vars']['quota_usage_avail']; ?>

                    </td>
                  </tr>
                  <?php endif; ?>
                  </form>
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