<?php /* Smarty version 2.3.1, created on 2008-12-12 16:50:23
         compiled from uebimiau/search.htm */ ?>
<?php $this->_load_plugins(array(
array('modifier', 'escape', 'uebimiau/search.htm', 110, false),
array('modifier', 'truncate', 'uebimiau/search.htm', 175, false),
array('modifier', 'default', 'uebimiau/search.htm', 175, false),
array('modifier', 'date_format', 'uebimiau/search.htm', 185, false),)); ?><?php $this->_config_load($this->_tpl_vars['umLanguageFile'], "Search", 'local'); ?>
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
                    <td align="center" valign="middle" bgcolor="#BFC6D3" height="50" width="83">
                      <img src="themes/uebimiau/images/search.gif" border="0">
                      <br><?php echo $this->_config[0]['vars']['search_mnu']; ?>

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
                    <td colspan="5">&nbsp;
                      
                    </td>
                  </tr>
                  <tr>
                    <td align="center" colspan="5" height="30">
                      <?php echo $this->_config[0]['vars']['sch_information_text']; ?>

                    </td>
                    <tr>
                      <tr>
                        <td colspan="5">&nbsp;
                          
                        </td>
                        <tr>
                          <form name="form1" action="search.php" method="POST">
                            <input type="hidden" name="tid" value="<?php echo $this->_tpl_vars['umTid']; ?>
">
                            <input type="hidden" name="lid" value="<?php echo $this->_tpl_vars['umLid']; ?>
">
                            
                            <td colspan="5" align="center">
                              <table cellspacing="1" cellpadding="0" width="450" border="0" class="normal" bgcolor="#BFC6D3" align="center">
                                <tr>
                                  <td width="40%">
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $this->_config[0]['vars']['sch_from_hea']; ?>
:
                                  </td>
                                  <td>
                                    <input type="text" class="normal" name="srcFrom" value="<?php echo $this->_run_mod_handler('escape', true, $this->_tpl_vars['umInputFrom'], "html"); ?>
" size="40" maxlength="40" style="border: 1 solid #7F9DB9;">
                                  </td>
                                  <tr>
                                    <td>
                                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $this->_config[0]['vars']['sch_subject_hea']; ?>
:
                                    </td>
                                    <td>
                                      <input type="text" class="normal" name="srcSubject" value="<?php echo $this->_run_mod_handler('escape', true, $this->_tpl_vars['umInputSubject'], "html"); ?>
" size="40" maxlength="40" style="border: 1 solid #7F9DB9;">
                                    </td>
                                    <tr>
                                      <td>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $this->_config[0]['vars']['sch_body_hea']; ?>
:
                                      </td>
                                      <td>
                                        <input type="text" class="normal" name="srcBody" value="<?php echo $this->_run_mod_handler('escape', true, $this->_tpl_vars['umInputBody'], "html"); ?>
" size="40" maxlength="40" style="border: 1 solid #7F9DB9;">
                                      </td>
                                      <tr>
                                        <td>&nbsp;
                                          
                                        </td>
                                        <td>
                                          <input type="submit" value="<?php echo $this->_config[0]['vars']['sch_button_text']; ?>
" class="button">
                                          <br>
                                        </td>
                              </table>
                            </td>
                          </form>
                        </tr>
                        <tr>
                          <td colspan="5">&nbsp;
                            
                          </td>
                        </tr>
                        <?php if ($this->_tpl_vars['umDoSearch']): ?>
                        <tr>
                          <td width="40" height="20" bgcolor="#78879C" align="center" valign="middle">
                            <img src="./images/prior_high.gif" width="5" height="11" border="0" align="absmiddle">
                            &nbsp;
                            <img src="./images/attach.gif" border="0" width="6" height="14" align="absmiddle">
                            &nbsp;
                            <img src="./images/msg_read.gif" border="0" width="14" height="14" align="absmiddle">
                          </td>
                          <td width="180" bgcolor="#78879C" align="center" valign="middle">.: 
                            <b><?php echo $this->_config[0]['vars']['sch_from_hea']; ?>
</b>
                            :.
                          </td>
                          <td width="280" bgcolor="#78879C" align="center" valign="middle">.: 
                            <b><?php echo $this->_config[0]['vars']['sch_subject_hea']; ?>
</b>
                            :.
                          </td>
                          <td width="100" bgcolor="#78879C" align="center" valign="middle">.: 
                            <b><?php echo $this->_config[0]['vars']['sch_date_hea']; ?>
</b>
                            :.
                          </td>
                          <td width="147" bgcolor="#78879C" align="center" valign="middle">.: 
                            <b><?php echo $this->_config[0]['vars']['sch_folder_hea']; ?>
</b>
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
                          <td align="center" height="20" valign="middle">
                            <?php echo $this->_tpl_vars['umMessageList'][$this->_sections['i']['index']]['priorimg']; ?>
<?php echo $this->_tpl_vars['umMessageList'][$this->_sections['i']['index']]['attachimg']; ?>
<?php echo $this->_tpl_vars['umMessageList'][$this->_sections['i']['index']]['statusimg']; ?>

                          </td>
                          <td valign="middle">
                            <a href="<?php echo $this->_tpl_vars['umMessageList'][$this->_sections['i']['index']]['composelink']; ?>
" class="lien"><?php echo $this->_run_mod_handler('default', true, $this->_run_mod_handler('escape', true, $this->_run_mod_handler('truncate', true, $this->_tpl_vars['umMessageList'][$this->_sections['i']['index']]['from'], 40, "...", true), "html"), $this->_config[0]['vars']['no_subject_text']); ?>
</a>
                          </td>
                          <td valign="middle">
                            <?php if ($this->_tpl_vars['umMessageList'][$this->_sections['i']['index']]['read'] == "false"): ?>
                            <b><?php endif; ?>
                              <a href="<?php echo $this->_tpl_vars['umMessageList'][$this->_sections['i']['index']]['readlink']; ?>
" class="lien"><?php echo $this->_run_mod_handler('default', true, $this->_run_mod_handler('escape', true, $this->_run_mod_handler('truncate', true, $this->_tpl_vars['umMessageList'][$this->_sections['i']['index']]['subject'], 50, "...", true), "html"), $this->_config[0]['vars']['no_subject_text']); ?>
</a>
                              <?php if ($this->_tpl_vars['umMessageList'][$this->_sections['i']['index']]['read'] == "false"): ?></b>
                            <?php endif; ?>
                          </td>
                          <td align="center" valign="middle">
                            <?php echo $this->_run_mod_handler('date_format', true, $this->_tpl_vars['umMessageList'][$this->_sections['i']['index']]['date'], $this->_config[0]['vars']['date_format']); ?>

                          </td>
                          <td align="center" valign="middle">
                            <a href="<?php echo $this->_tpl_vars['umMessageList'][$this->_sections['i']['index']]['folderlink']; ?>
" class="lien"><?php echo $this->_run_mod_handler('escape', true, $this->_tpl_vars['umMessageList'][$this->_sections['i']['index']]['foldername'], "html"); ?>
</a>
                          </td>
                        </tr>
                        <?php endfor; else: ?>
                        <tr>
                          <td width="100%" align="center" valign="center" bgcolor="#E1E4EB" colspan="5">
                            <br><?php echo $this->_config[0]['vars']['sch_no_results']; ?>

                            <br>
                            <br>
                          </td>
                        </tr>
                        <?php endif; ?>
                        <?php endif; ?>
                        <tr>
                          <td colspan="5">&nbsp;
                            
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