<?php /* Smarty version 2.3.1, created on 2010-08-03 16:10:44
         compiled from uebimiau/advanced-editor.htm */ ?>
<!--
available only for IE5+ users
Skinned by Arnaud BEAUVOIR - http://forum.beauvoir.net - contact@beauvoir.net
Thank you to let the copyright in place on the login page and in all sources of pages.
This skin is the work of an author, thank you to respect it and not to remove the
copyright, or worse, to put your name at the place.
-->
<?php $this->_config_load($this->_tpl_vars['umLanguageFile'], "AdvancedEditor", 'local'); ?>
<?php echo '
<script language="JavaScript">
bLoad=false
pureText=true
bodyTag="<BODY MONOSPACE STYLE=\\"font:10pt arial,sans-serif\\">"
bTextMode=false
public_description=new Editor
/*****************************
Power Editor class
member function:
SetHtml
GetHtml
SetText
GetText
GetCompFocus()
*****************************/
function Editor() {
this.put_html=SetHtml;
this.get_html=GetHtml;
this.put_text=SetText;
this.get_text=GetText;
this.CompFocus=GetCompFocus;
}
function GetCompFocus() {
Composition.focus();
}
function GetText() {
return Composition.document.body.innerText;
}
function SetText(text) {
text = text.replace(/\\n/g, "<br>")
Composition.document.body.innerHTML=text;
}
function GetHtml() {
if (bTextMode)
return Composition.document.body.innerText;
else {
cleanHtml();
cleanHtml();
return Composition.document.body.innerHTML;
}
}
function SetHtml(sVal) {
if (bTextMode) Composition.document.body.innerText=sVal;
else Composition.document.body.innerHTML=sVal;
}
//End  of Editor Class
/***********************************************
Initialize everything when the document is ready
***********************************************/
var YInitialized = false;
function document.onreadystatechange(){
if (YInitialized) return;
YInitialized = true;
var i, s, curr;
// Find all the toolbars and initialize them.
for (i=0; i<document.body.all.length; i++) {
curr=document.body.all[i];
if (curr.className == "Btn" && !InitBtn(curr))
alert("Toolbar: " + curr.id + " failed to initialize. Status: false");
}
Composition.document.open("text/html","replace")
Composition.document.write(bodyTag);
Composition.document.close()
Composition.document.designMode="On"
Composition.document.onkeydown = _handleKeyDown;
SetHtml(hiddencomposeForm.hiddencomposeFormTextArea.value);
}
function _handleKeyDown () {
var ev = this.parentWindow.event
if(ev.keyCode == 13) {
var sel=Composition.document.selection.createRange();
sel.pasteHTML("<BR>");
sel.select();
ev.returnValue=false;
ev.cancelBubble=true;
}
}
/***********************************************
Initialize a button ontop of toolbar
***********************************************/
function InitBtn(btn) {
btn.onmouseover = BtnMouseOver;
btn.onmouseout = BtnMouseOut;
btn.onmousedown = BtnMouseDown;
btn.onmouseup = BtnMouseUp;
btn.ondragstart = YCancelEvent;
btn.onselectstart = YCancelEvent;
btn.onselect = YCancelEvent;
btn.YUSERONCLICK = btn.onclick;
btn.onclick = YCancelEvent;
btn.YINITIALIZED = true;
return true;
}
// Hander that simply cancels an event
function YCancelEvent() {
event.returnValue=false;
event.cancelBubble=true;
return false;
}
// Toolbar button onmouseover handler
function BtnMouseOver() {
if (event.srcElement.tagName != "IMG") return false;
var image = event.srcElement;
var element = image.parentElement;
// Change button look based on current state of image.- we don\'t actually have chaned image
// could be commented but don\'t remove for future extension
if (image.className == "Ico") element.className = "BtnMouseOverUp";
else if (image.className == "IcoDown") element.className = "BtnMouseOverDown";
event.cancelBubble = true;
}
// Toolbar button onmouseout handler
function BtnMouseOut() {
if (event.srcElement.tagName != "IMG") {
event.cancelBubble = true;
return false;
}
var image = event.srcElement;
var element = image.parentElement;
yRaisedElement = null;
element.className = "Btn";
image.className = "Ico";
event.cancelBubble = true;
}
// Toolbar button onmousedown handler
function BtnMouseDown() {
if (event.srcElement.tagName != "IMG") {
event.cancelBubble = true;
event.returnValue=false;
return false;
}
var image = event.srcElement;
var element = image.parentElement;
element.className = "BtnMouseOverDown";
image.className = "IcoDown";
event.cancelBubble = true;
event.returnValue=false;
return false;
}
// Toolbar button onmouseup handler
function BtnMouseUp() {
if (event.srcElement.tagName != "IMG") {
event.cancelBubble = true;
return false;
}
var image = event.srcElement;
var element = image.parentElement;
if (element.YUSERONCLICK) eval(element.YUSERONCLICK + "anonymous()");
element.className = "BtnMouseOverUp";
image.className = "Ico";
event.cancelBubble = true;
return false;
}
// Check if toolbar is being used when in text mode
function validateMode() {
if (! bTextMode) return true;
'; ?>

alert('<?php echo $this->_config[0]['vars']['adv_warning_text_mode1']; ?>
 "<?php echo $this->_config[0]['vars']['view_source']; ?>
" <?php echo $this->_config[0]['vars']['adv_warning_text_mode2']; ?>
');
<?php echo '
Composition.focus();
return false;
}
function sendHtml(){
if(bTextMode){
document.composeForm.body.value = public_description.get_text();
return true;
}
else{
document.composeForm.body.value = public_description.get_html();
return true;
}
}
//Formats text in composition.
function formatC(what,opt) {
if (!validateMode()) return;
if (opt=="removeFormat") {
what=opt;
opt=null;
}
if (opt==null) Composition.document.execCommand(what);
else Composition.document.execCommand(what,"",opt);
pureText = false;
Composition.focus();
}
//Switches between text and html mode.
function setMode(newMode) {
bTextMode = newMode;
var cont;
if (bTextMode) {
cleanHtml();
cleanHtml();
cont=Composition.document.body.innerHTML;
Composition.document.body.innerText=cont;
} else {
cont=Composition.document.body.innerText;
Composition.document.body.innerHTML=cont;
}

Composition.focus();
}
//Finds and returns an element.
function getEl(sTag,start) {
while ((start!=null) && (start.tagName!=sTag)) start = start.parentElement;
return start;
}
function createLink() {
if (!validateMode()) return;

var isA = getEl("A",Composition.document.selection.createRange().parentElement());
'; ?>

var str=prompt("<?php echo $this->_config[0]['vars']['adv_type_path']; ?>
", isA ? isA.href : "http:\/\/");
<?php echo '
if ((str!=null) && (str!="http://")) {
if (Composition.document.selection.type=="None") {
var sel=Composition.document.selection.createRange();
sel.pasteHTML("<A HREF=\\""+str+"\\">"+str+"</A> ");
sel.select();
}
else formatC("CreateLink",str);
}
else Composition.focus();
}
//Sets the text color.
function foreColor() {
if (! validateMode()) return;
var arr = showModalDialog("/ym/ColorSelect?3", "", "font-family:Verdana; font-size:12; dialogWidth:30em; dialogHeight:35em");
if (arr != null) formatC(\'forecolor\', arr);
else Composition.focus();
}
//Sets the background color.
function backColor() {
if (!validateMode()) return;
var arr = showModalDialog("/ym/ColorSelect?3", "", "font-family:Verdana; font-size:12; dialogWidth:30em; dialogHeight:35em");
if (arr != null) formatC(\'backcolor\', arr);
else Composition.focus()
}
function cleanHtml() {
var fonts = Composition.document.body.all.tags("FONT");
var curr;
for (var i = fonts.length - 1; i >= 0; i--) {
curr = fonts[i];
if (curr.style.backgroundColor == "#ffffff") curr.outerHTML = curr.innerHTML;
}
}
function getPureHtml() {
var str = "";
var paras = Composition.document.body.all.tags("P");
if (paras.length > 0) {
for (var i=paras.length-1; i >= 0; i--) str = paras[i].innerHTML + "\\n" + str;
} else {
str = Composition.document.body.innerHTML;
}
return str;
}
</script>
'; ?>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<table width="445" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td>
      <div class="yToolbar" id="ParaToolbar">
        <div class="TBHandle">
        </div>
        <select id="ParagraphStyle" class="TBGen" language="javascript" onChange="formatC('formatBlock',this[this.selectedIndex].value);this.selectedIndex=0">
          <option class="heading" selected>
          <?php echo $this->_config[0]['vars']['format_paragraph']; ?>

          <option value="&lt;H1&gt;">
          <?php echo $this->_config[0]['vars']['format_h1']; ?>

          <option value="&lt;H2&gt;">
          <?php echo $this->_config[0]['vars']['format_h2']; ?>

          <option value="&lt;H3&gt;">
          <?php echo $this->_config[0]['vars']['format_h3']; ?>

          <option value="&lt;H4&gt;">
          <?php echo $this->_config[0]['vars']['format_h4']; ?>

          <option value="&lt;H5&gt;">
          <?php echo $this->_config[0]['vars']['format_h5']; ?>

          <option value="&lt;H6&gt;">
          <?php echo $this->_config[0]['vars']['format_h6']; ?>

          <option value="&lt;PRE&gt;">
          <?php echo $this->_config[0]['vars']['format_pre']; ?>

          <option value="removeFormat">
          <?php echo $this->_config[0]['vars']['format_clear_all']; ?>

        </select>
        <select id="FontName" class="TBGen" language="javascript" onChange="formatC('fontname',this[this.selectedIndex].value);this.selectedIndex=0">
          <option class="heading" selected>
          <?php echo $this->_config[0]['vars']['format_font']; ?>

          <option value="Arial">
          Arial
          <option value="Arial Black">
          Arial Black
          <option value="Arial Narrow">
          Arial Narrow
          <option value="Comic Sans MS">
          Comic Sans MS
          <option value="Courier New">
          Courier New
          <option value="System">
          System
          <option value="Times New Roman">
          Times New Roman
          <option value="Verdana">
          Verdana
          <option value="Wingdings">
          Wingdings
        </select>
        <select id="FontSize" class="TBGen" language="javascript" onChange="formatC('fontsize',this[this.selectedIndex].value);this.selectedIndex=0">
          <option class="heading" selected>
          <?php echo $this->_config[0]['vars']['format_size']; ?>

          <option value="1">
          1
          <option value="2">
          2
          <option value="3">
          3
          <option value="4">
          4
          <option value="5">
          5
          <option value="6">
          6
          <option value="7">
          7
        </select>
        <select id="FontColor" class="TBGen" language="javascript" onChange="formatC('forecolor',this[this.selectedIndex].value);this.selectedIndex=0">
          <option class="heading" selected>
          <?php echo $this->_config[0]['vars']['format_color']; ?>

          <option value="red">
          <?php echo $this->_config[0]['vars']['color_red']; ?>

          <option value="blue">
          <?php echo $this->_config[0]['vars']['color_blue']; ?>

          <option value="green">
          <?php echo $this->_config[0]['vars']['color_green']; ?>

          <option value="black">
          <?php echo $this->_config[0]['vars']['color_black']; ?>

        </select>
        <select id="FontBackColor" class="TBGen"  language="javascript" onChange="formatC('backcolor',this[this.selectedIndex].value);this.selectedIndex=0">
          <option class="heading" selected>
          <?php echo $this->_config[0]['vars']['format_back']; ?>

          <option value="red">
          <?php echo $this->_config[0]['vars']['color_red']; ?>

          <option value="blue">
          <?php echo $this->_config[0]['vars']['color_blue']; ?>

          <option value="green">
          <?php echo $this->_config[0]['vars']['color_green']; ?>

          <option value="black">
          <?php echo $this->_config[0]['vars']['color_black']; ?>

          <option value="yellow">
          <?php echo $this->_config[0]['vars']['color_yellow']; ?>

          <option value="white">
          <?php echo $this->_config[0]['vars']['color_white']; ?>

        </select>
        
        <div class="TBSep">
        </div>
        <div id="EditMode" class="TBGen">
          <input type="checkbox" name="switchMode" LANGUAGE="javascript" onClick="setMode(switchMode.checked)">
          <a href="javascript:void(0)" onClick="document.composeForm.switchMode.click()">
            <font class="normal">
              <?php echo $this->_config[0]['vars']['view_source']; ?>

            </font></a>
          |
          <a href="javascript:textmode()">
            <font class="normal">
              <?php echo $this->_config[0]['vars']['text_mode']; ?>

            </font></a>
          |
          <a href="javascript:void(0)" onClick="formatC('formatBlock','removeFormat')">
            <font class="normal">
              <?php echo $this->_config[0]['vars']['clear_format']; ?>

            </font></a>
        </div>
      </div>
      <table>
        <tr>
          <td>
            <div class="Btn" language="javascript" onClick="formatC('cut')">
              <img class="Ico" src="images/cut.gif">
            </div>
          </td>
          <td>
            <div class="Btn" language="javascript" onClick="formatC('copy')">
              <img class="Ico" src="images/copy.gif">
            </div>
          </td>
          <td>
            <div class="Btn" language="javascript" onClick="formatC('paste')">
              <img class="Ico" src="images/paste.gif">
            </div>
          </td>
          <td>
            <div class="Btn" tlanguage="javascript" onClick="formatC('bold');">
              <img class="Ico" src="images/bold.gif">
            </div>
          </td>
          <td>
            <div class="Btn" language="javascript" onClick="formatC('italic')">
              <img class="Ico" src="images/italic.gif">
            </div>
          </td>
          <td>
            <div class="Btn" language="javascript" onClick="formatC('underline')">
              <img class="Ico" src="images/under.gif">
            </div>
          </td>
          <td>
            <div class="Btn" name="Justify" language="javascript" onClick="formatC('justifyleft')">
              <img class="Ico" src="images/aleft.gif">
            </div>
          </td>
          <td>
            <div class="Btn" name="Justify" language="javascript" onClick="formatC('justifycenter')">
              <img class="Ico" src="images/center.gif">
            </div>
          </td>
          <td>
            <div class="Btn" name="Justify" language="javascript" onClick="formatC('justifyright')">
              <img class="Ico" src="images/aright.gif">
            </div>
          </td>
          <td>
            <div class="Btn" language="javascript" onClick="formatC('insertorderedlist')">
              <img class="Ico" src="images/nlist.gif">
            </div>
          </td>
          <td>
            <div class="Btn" language="javascript" onClick="formatC('insertunorderedlist')">
              <img class="Ico" src="images/blist.gif">
            </div>
          </td>
          <td>
            <div class="Btn" language="javascript" onClick="formatC('outdent')">
              <img class="Ico" src="images/ileft.gif">
            </div>
          </td>
          <td>
            <div class="Btn" language="javascript" onClick="formatC('indent')">
              <img class="Ico" src="images/iright.gif">
            </div>
          </td>
          <td>
            <div class="Btn" language="javascript" onClick="createLink()">
              <img class="Ico" src="images/wlink.gif">
            </div>
          </td>
        </tr>
      </table>
      <iframe name="Composition" id="Composition" width="100%" height="190" frameborder="0" class="Composition" style="border: 1px dotted; scrollbar-arrow-color: #FFFFFF; scrollbar-3dlight-color: #FFFFFF; scrollbar-darkshadow-color: #FFFFFF; scrollbar-face-color: #999999; scrollbar-highlight-color: #999999; scrollbar-shadow-color: #999999; scrollbar-track-color: #FFFFFF">
      </iframe>
<script><!--
Composition.document.open();
Composition.document.write(bodyTag);
Composition.document.close();
Composition.document.designMode="On";
// -->
</script>
    </td>
  </tr>
</table>