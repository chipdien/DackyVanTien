<?php
    date_default_timezone_set('Asia/Bangkok');
?>
<html lang="en">
<head runat="server">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title></title>
    
    <link rel="stylesheet" type="text/css" href="history/history.css" />
    <link rel="stylesheet" type="text/css" href="history/style.css" />
    
    <script src="AC_OETags.js" language="javascript"></script>
    <script src="history/history.js" language="javascript"></script>

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js" language="javascript"></script>
    
    <script language="JavaScript" type="text/javascript">
    <!--
    //title
    function setTitle(name){
            document.title=name;	
    }
    function fromParter(){
        var txtHiddenLoginValue=document.getElementById("txtHiddenLoginValue").value;    
        var queryString="";

        if(location.href.indexOf("?")==-1 || location.href.indexOf(name+'=')==-1)    {	
            //Post ???  ?????????
            queryString = txtHiddenLoginValue;
        }
        else
        {    
            //GET??? ?????????   
            queryString = location.href.substring(location.href.indexOf("?")+1);
        }
        return queryString;	
    }
    
    
    // -----------------------------------------------------------------------------
    // Globals
    // Major version of Flash required
    var requiredMajorVersion = 9;
    // Minor version of Flash required
    var requiredMinorVersion = 0;
    // Minor version of Flash required
    var requiredRevision = 28;
    // -----------------------------------------------------------------------------
    // Version check for the Flash Player that has the ability to start Player Product Install (6.0r65)
    var hasProductInstall = DetectFlashVer(6, 0, 65);
    // Version check based upon the values defined in globals
    var hasRequestedVersion = DetectFlashVer(requiredMajorVersion, requiredMinorVersion, requiredRevision);


    // -->    

    // -----------------------------------------------------------------------------
    // Update
    

    </script>







	<script language="JavaScript" type="text/javascript">
	function callGamePlayer() {
	    if ( hasProductInstall && !hasRequestedVersion ) {
	        // DO NOT MODIFY THE FOLLOWING FOUR LINES
	        // Location visited after installation is complete if installation is required
	        var MMPlayerType = (isIE == true) ? "ActiveX" : "PlugIn";
	        var MMredirectURL = window.location;
	        document.title = document.title.slice(0, 47) + " - Flash Player Installation";
	        var MMdoctitle = document.title;

	        AC_FL_RunContent(
	            "src", "playerProductInstall",
	            "FlashVars", "MMredirectURL="+MMredirectURL+'&MMplayerType='+MMPlayerType+'&MMdoctitle='+MMdoctitle+"",
	            "width", "1000",
	            "height", "600",
	            "align", "middle",
	            "id", "Index",
	            "quality", "high",
	            "bgcolor", "#000000",
	            "id", "Index",
	            "allowScriptAccess","sameDomain",
	            "type", "application/x-shockwave-flash",
	            "pluginspage", "http://www.adobe.com/go/getflashplayer"
	        );
	    } else if (hasRequestedVersion) {
	        // if we've detected an acceptable version
	        // embed the Flash Content SWF when all tests are passed

	        AC_FL_RunContent(
	            "src", "Index.1.4.7",
	            "FlashVars", "version=1.4.7",
	            "width", "1000",
	            "height", "600",
	            "align", "middle",
	            "id", "Index",
	            "quality", "high",
	            "bgcolor", "#000000",
	            "id", "Index",
	            "allowScriptAccess","sameDomain",
	            "type", "application/x-shockwave-flash",
	            "pluginspage", "http://www.adobe.com/go/getflashplayer"
	        );
	    } else {  
	        // flash is too old or we can't detect the plugin
	        //var FlashPlayerDownload= (isIE == true) ? "http://download.51fswd.com/FlashPlay/flashplayer_ax.exe" : "http://download.51fswd.com/FlashPlay/flashplayer_plugin.exe";
	        //var FlashPlayerDownload_rar= (isIE == true) ? "http://download.51fswd.com/FlashPlay/flashplayer_ax.rar" : "http://download.51fswd.com/FlashPlay/flashplayer_plugin.rar";

	        var FlashPlayDownload_1="http://get.adobe.com/flashplayer";
	        var FlashPlayDownload_2="http://dl.pconline.com.cn/html_2/1/114/id=8122&pn=0.html";

	        var alternateContent =  '<table width=\"80%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">'
	                                + '<tr>'
	                                + ' <td align=\"center\" class=\"td01\" style=\"height:auto !important; height:300px; min-height:300px;\"> '
	                                + '<p>????????????????,???????????????????,????FLASH?????????? </p>'
	                                + '<p>???????Adobe FLASH????:</p>'
	                                + '<p><a href=\"'+FlashPlayDownload_1+'\">????1</a>&nbsp;&nbsp;<a href=\"'+FlashPlayDownload_2+'\">????2</a>&nbsp;&nbsp;'
	                                //+' <a href=\"'+FlashPlayerDownload+'\">????</a></p>'
	                                //+ '<p>????????,??????????????????????? .exe?????</p>'
	                                //+ '<p><a href=\"'+FlashPlayerDownload_rar+'\">??????FLASH???</a></p>'
	                                + ' </td>'
	                                + '</tr>'
	                                + '</table>';	
	        document.write(alternateContent);  // insert non-flash content
	    }
	}    

	function reloadAll() {
	    location.reload();
	}


	function dateParse(s) {
	    var parts = s.split(' ');
	    var a = parts[0].split('-');
	    var b = parts[1].split(':');
	    var d = new Date( a[0], a[1]-1, a[2], b[0], b[1], b[2]);
	    return d;
	}




	$(document).ready(function(){
		$("#gameplayer").html('<embed width="1000" height="600" align="middle" type="application/x-shockwave-flash" pluginspage="http://www.adobe.com/go/getflashplayer" allowscriptaccess="sameDomain" bgcolor="#000000" quality="high" id="Index" flashvars="version=1.4.7.1" src="Index.1.4.7.swf">');
	});
	</script>
	
	
</head>

<body background="img/di.jpg">   
	
<table width="100%" height="100%" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr align="center" valign="middle">
        <td></td>
	<td></td>
	<td></td>
    </tr>
    <tr align="center" valign="middle">
        <td></td>
        <td align="center" valign="middle">
            <table width="1032" border="0" cellpadding="0" cellspacing="0">
                <tr>
                    <td width="16" height="7" align="left" valign="top"><img src="img/jiao01.gif" width="16" height="7"></td>
                    <td align="center" valign="middle"><img src="img/bian.jpg" width="1008" height="4"></td>
                    <td width="10" align="left" valign="top"><img src="img/jiao01.gif" width="16" height="7"></td>
                </tr>
                <tr >
                    <td width="18" align="left" valign="top" background="img/zuobian.jpg" style="background-repeat:repeat-y">&nbsp;</td>
                    <td  align="center" valign="middle">
                        <div id="gameplayer" style="color:#fff; font-weight:bold; text-align:center; font-size:16px;">Xin bạn vui lòng chờ đợi...</div>
                    </td>
                    <td width="10" align="center" valign="top" background="img/zuobian.jpg">&nbsp;</td>
                </tr>
                <tr>
                    <td height="7" align="left" valign="top"><img src="img/jiao02.gif" width="16" height="7"></td>
                    <td align="center" valign="middle"><img src="img/bian.jpg" width="1008" height="4"></td>
                    <td align="center" valign="top"><img src="img/jiao02.gif" width="16" height="7"></td>
                </tr>
            </table>
        </td>
        <td></td>
    </tr>
    <tr align="center" valign="middle">
        <td></td>
	<td></td>
	<td></td>
    </tr>
</table>

   
</body>
</html>