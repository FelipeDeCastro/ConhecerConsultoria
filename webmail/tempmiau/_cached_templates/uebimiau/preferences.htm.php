<?php /* Smarty version 2.3.1, created on 2012-04-04 15:10:45
         compiled from uebimiau/preferences.htm */ ?>
<?php $this->_load_plugins(array(
array('modifier', 'escape', 'uebimiau/preferences.htm', 106, false),)); ?><?php $this->_config_load($this->_tpl_vars['umLanguageFile'], "Preferences", 'local'); ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
  <head>
    <title>
      Webmail Conhecer - <?php echo $this->_config[0]['vars']['prf_title']; ?>

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
  <body onLoad="dis()">
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
                    <td align="center" valign="middle" bgcolor="#BFC6D3" height="50" width="83">
                      <img src="themes/uebimiau/images/prefs.gif" border="0">
                      <br><?php echo $this->_config[0]['vars']['prefs_mnu']; ?>

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
                    <td colspan="2">&nbsp;
                      
                    </td>
                  </tr>
                  <tr>
                    <td valign="top">
                      <table cellspacing="0" cellpadding="0" width="99.7%" border="0" class="normal" align="center">
                        <form name="form1" action="preferences.php" method="POST">
                          
                          <input type="hidden" name="lid" value="<?php echo $this->_tpl_vars['umLid']; ?>
">
                          <input type="hidden" name="tid" value="<?php echo $this->_tpl_vars['umTid']; ?>
">
                          <tr bgcolor="#78879C">
                            <td align="center" colspan="2" height="30">
                              <b><?php echo $this->_config[0]['vars']['prf_general_title']; ?>
 :</b>
                            </td>
                          </tr>
                          <tr bgcolor="#E1E4EB">
                            <td size="50%">
                              &nbsp;<?php echo $this->_config[0]['vars']['prf_name']; ?>
:
                            </td>
                            <td>
                              <input type="text" class="normal" style="width : 335px; border: 1 solid #7F9DB9" name="f_real_name" value="<?php echo $this->_run_mod_handler('escape', true, $this->_tpl_vars['umRealName'], "html"); ?>
">
                            </td>
                          </tr>
                          <tr bgcolor="#E1E4EB">
                            <td>
                              &nbsp;<?php echo $this->_config[0]['vars']['prf_reply_to']; ?>
:
                            </td>
                            <td>
                              <input type="text" class="normal" style="width : 335px; border: 1 solid #7F9DB9" name="f_reply_to" size="30" value="<?php echo $this->_run_mod_handler('escape', true, $this->_tpl_vars['umReplyTo'], "html"); ?>
" class="textbox">
                            </td>
                          </tr>
                          <tr bgcolor="#E1E4EB">
                            <td>
                              &nbsp;<?php echo $this->_config[0]['vars']['prf_time_zone']; ?>
:
                            </td>
                            <td>
                              <?php echo $this->_tpl_vars['umTimezoneSelect']; ?>

                            </td>
                          </tr>
                          <tr bgcolor="#E1E4EB">
                            <td>
                              &nbsp;<?php echo $this->_config[0]['vars']['prf_default_editor_mode']; ?>
:
                            </td>
                            <td>
                              <select name="f_editor_mode">
                                <option value="text"<?php if ($this->_tpl_vars['umEditorMode'] == "text"): ?> selected<?php endif; ?>>
                                <?php echo $this->_config[0]['vars']['prf_default_editor_mode_text']; ?>

                                <option value="html"<?php if ($this->_tpl_vars['umEditorMode'] == "html"): ?> selected<?php endif; ?>>
                                <?php echo $this->_config[0]['vars']['prf_default_editor_mode_html']; ?>

                              </select>
                            </td>
                          </tr>
                          <tr bgcolor="#78879C">
                            <td align="center" colspan="2" height="30">
                              <b><?php echo $this->_config[0]['vars']['prf_trash_title']; ?>
 :</b>
                            </td>
                          </tr>
                          <tr bgcolor="#E1E4EB">
                            <td colspan="2">
                              <input type="checkbox" name="f_save_trash" onClick="dis()" value="1"<?php echo $this->_tpl_vars['umSaveTrash']; ?>
>
                              <acronym style="cursor: hand;" OnClick="f_save_trash.click()">
                                <?php echo $this->_config[0]['vars']['prf_save_to_trash']; ?>
 "
                                <b><?php echo $this->_config[0]['vars']['trash_extended']; ?>
</b>
                                "
                              </acronym>
                            </td>
                          </tr>
                          <tr bgcolor="#E1E4EB">
                            <td colspan="2">
                              <input type="checkbox" name="f_st_only_read" onClick="return checkDis()" value="1"<?php echo $this->_tpl_vars['umSaveTrashOnlyRead']; ?>
>
                              <acronym style="cursor: hand;" OnClick="f_st_only_read.click()">
                                <?php echo $this->_config[0]['vars']['prf_save_only_read']; ?>
 "
                                <b><?php echo $this->_config[0]['vars']['trash_extended']; ?>
</b>
                                "
                              </acronym>
                            </td>
                          </tr>
                          <tr bgcolor="#E1E4EB">
                            <td colspan="2">
                              <input type="checkbox" name="f_empty_on_exit" value="1"<?php echo $this->_tpl_vars['umEmptyTrashOnExit']; ?>
>
                              <acronym style="cursor: hand;" OnClick="f_empty_on_exit.click()">
                                <?php echo $this->_config[0]['vars']['prf_empty_on_exit']; ?>

                              </acronym>
                            </td>
                          </tr>
                          <tr bgcolor="#78879C">
                            <td align="center" colspan="2" height="30">
                              <b><?php echo $this->_config[0]['vars']['prf_sent_title']; ?>
 :</b>
                            </td>
                          </tr>
                          <tr bgcolor="#E1E4EB">
                            <td colspan=2>
                              <input type=checkbox name=f_save_sent value="1"<?php echo $this->_tpl_vars['umSaveSent']; ?>
>
                              <acronym style="cursor: hand;" OnClick="f_save_sent.click()">
                                <?php echo $this->_config[0]['vars']['prf_save_sent']; ?>
 "
                                <b><?php echo $this->_config[0]['vars']['sent_extended']; ?>
</b>
                                "
                              </acronym>
                            </td>
                          </tr>
                          <tr bgcolor="#78879C">
                            <td align="center" colspan="2" height="30">
                              <b><?php echo $this->_config[0]['vars']['prf_messages_title']; ?>
 :</b>
                            </td>
                          </tr>
                          <tr bgcolor="#E1E4EB">
                            <td>
                              &nbsp;<?php echo $this->_config[0]['vars']['prf_page_limit']; ?>
:
                            </td>
                            <td>
                              <?php echo $this->_tpl_vars['umRecordsPerPage']; ?>

                            </td>
                          </tr>
                          <tr bgcolor="#E1E4EB">
                            <td>
                              &nbsp;<?php echo $this->_config[0]['vars']['prf_time_to_refesh']; ?>
:
                            </td>
                            <td>
                              <?php echo $this->_tpl_vars['umTimeToRefresh']; ?>

                            </td>
                          </tr>
                          <tr bgcolor="#E1E4EB">
                            <td colspan="2">
                              <input type="checkbox" name="f_display_images" value="1"<?php echo $this->_tpl_vars['umDisplayImages']; ?>
>
                              <acronym style="cursor: hand;" OnClick="f_display_images.click()">
                                <?php echo $this->_config[0]['vars']['prf_display_images']; ?>

                              </acronym>
                            </td>
                          </tr>
                          <tr bgcolor="#78879C">
                            <td align="center" colspan="2" height="30">
                              <b><?php echo $this->_config[0]['vars']['prf_signature_title']; ?>
 :</b>
                            </td>
                          </tr>
                          <tr bgcolor="#E1E4EB">
                            <td valign="top">
                              &nbsp;<?php echo $this->_config[0]['vars']['prf_signature']; ?>
:
                            </td>
                            <td>
                              <?php echo $this->_tpl_vars['umSignature']; ?>

                            </td>
                          </tr>
                          <tr bgcolor="#E1E4EB">
                            <td colspan="2">
                              <input type="checkbox" name="f_add_sig" value="1"<?php echo $this->_tpl_vars['umAddSignature']; ?>
>
                              <acronym style="cursor: hand;" OnClick="f_add_sig.click()">
                                <?php echo $this->_config[0]['vars']['prf_auto_add_sign']; ?>

                              </acronym>
                            </td>
                          </tr>
                          <tr bgcolor="#E1E4EB">
                            <td>
                            </td>
                            <td>
                              <br>
                              <input type="submit" value="<?php echo $this->_config[0]['vars']['prf_save_button']; ?>
" class="button">
                              <br>
                              <br>
                            </td>
                          </tr>
                        </form>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td colspan="2">&nbsp;
                      
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