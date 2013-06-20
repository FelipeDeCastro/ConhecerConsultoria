<?php /* Smarty version 2.3.1, created on 2010-11-26 19:46:07
         compiled from uebimiau/folders.htm */ ?>
<?php $this->_load_plugins(array(
array('modifier', 'escape', 'uebimiau/folders.htm', 104, false),)); ?><?php $this->_config_load($this->_tpl_vars['umLanguageFile'], "Folders", 'local'); ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
  <head>
    <title>
      Webmail Conhecer - <?php echo $this->_config[0]['vars']['folders_to']; ?>
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
                    <td align="center" valign="middle" bgcolor="#BFC6D3" height="50" width="83">
                      <img src="themes/uebimiau/images/folder.gif" border="0">
                      <br><?php echo $this->_config[0]['vars']['folders_mnu']; ?>

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
                    <td colspan="5">&nbsp;
                      
                    </td>
                  </tr>
                  <tr bgcolor="#78879C">
                    <td width="35%" align="center" height="20">.: <?php echo $this->_config[0]['vars']['fld_name_hea']; ?>
 :.
                    </td>
                    <td width="25%" align="center">.: <?php echo $this->_config[0]['vars']['fld_messages_hea']; ?>
 :.
                    </td>
                    <td width="20%" align="center">.: <?php echo $this->_config[0]['vars']['fld_size_hea']; ?>
 :.
                    </td>
                    <td width="10%" align="center">.: <?php echo $this->_config[0]['vars']['fld_empty_hea']; ?>
 :.
                    </td>
                    <td width="10%" align="center">.: <?php echo $this->_config[0]['vars']['fld_delete_hea']; ?>
 :.
                    </td>
                  </tr>
                  <?php if (isset($this->_sections["i"])) unset($this->_sections["i"]);
$this->_sections["i"]['name'] = "i";
$this->_sections["i"]['loop'] = is_array($this->_tpl_vars['umFolderList']) ? count($this->_tpl_vars['umFolderList']) : max(0, (int)$this->_tpl_vars['umFolderList']);
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
                    <td align="center" height="20">
                      <a href="<?php echo $this->_tpl_vars['umFolderList'][$this->_sections['i']['index']]['chlink']; ?>
"><?php echo $this->_run_mod_handler('escape', true, $this->_tpl_vars['umFolderList'][$this->_sections['i']['index']]['name'], "html"); ?>
</a>
                    </td>
                    <td align="center">
                      <?php echo $this->_tpl_vars['umFolderList'][$this->_sections['i']['index']]['msgs']; ?>

                    </td>
                    <td align="center">
                      <?php echo $this->_tpl_vars['umFolderList'][$this->_sections['i']['index']]['boxsize']; ?>
 Kb &nbsp;
                    </td>
                    <td align="center">
                      <a href="<?php echo $this->_tpl_vars['umFolderList'][$this->_sections['i']['index']]['emptylink']; ?>
" class="lien">OK</a>
                    </td>
                    <td align="center">
                      <?php echo $this->_tpl_vars['umFolderList'][$this->_sections['i']['index']]['del']; ?>

                    </td>
                  </tr>
                  <?php endfor; endif; ?>
                  <tr bgcolor="#ACB4C5">
                    <td align="center" height="20">&nbsp;
                      
                    </td>
                    <td align="center">
                      <b><?php echo $this->_config[0]['vars']['fld_total']; ?>
</b>
                    </td>
                    <td align="center">
                      <b><?php echo $this->_tpl_vars['umTotalUsed']; ?>
</b>
                      Kb
                    </td>
                    <td align="center">&nbsp;
                      
                    </td>
                    <td align="center">&nbsp;
                      
                    </td>
                  </tr>
                  <tr>
                    <form name="form1" action="folders.php" method="POST" onSubmit="return create();">
                      
                      <input type="hidden" name="lid" value="<?php echo $this->_tpl_vars['umLid']; ?>
">
                      <input type="hidden" name="tid" value="<?php echo $this->_tpl_vars['umTid']; ?>
">
                      <td align="center" colspan="5">
                        <br>
                        <input type="Text" name="newfolder" class="normal" style="width:180px;border: 1 solid #7F9DB9">
                        <input type="button" class="button" value="<?php echo $this->_config[0]['vars']['fld_make_new']; ?>
" onClick="create()">
                      </td>
                    </form>
                  </tr>
                  <?php if ($this->_tpl_vars['umQuotaEnabled'] == 1): ?>
                  <tr>
                    <td colspan="5">&nbsp;
                      
                    </td>
                  </tr>
                  <tr>
                    <td align="center" colspan="5">
                      <?php echo $this->_tpl_vars['umUsageGraph']; ?>

                      <br><?php echo $this->_config[0]['vars']['quota_usage_info']; ?>
 : 
                      <b><?php echo $this->_tpl_vars['umTotalUsed']; ?>
</b>
                      Kb <?php echo $this->_config[0]['vars']['quota_usage_used']; ?>
 <?php echo $this->_config[0]['vars']['quota_usage_of']; ?>
 
                      <b><?php echo $this->_tpl_vars['umQuotaLimit']; ?>
</b>
                      Kb <?php echo $this->_config[0]['vars']['quota_usage_avail']; ?>

                    </td>
                  </tr>
                  <?php endif; ?>
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