browserType = null;
function getBrowserType()
{
	if (browserType)
		return browserType;
		
	var BODY_EL = (document.compatMode && document.compatMode != "BackCompat")?
				 document.documentElement : 
				 document.body ? document.body : null;
	var user_Agent = navigator.userAgent.toLowerCase();
	var Agent_version = navigator.appVersion;
	var isOpera = !!(window.opera && document.getElementById);
	var isOpera6 = isOpera && !document.defaultView;
	var isOpera7 = isOpera && !isOpera6;
	var isMSIE = (user_Agent.indexOf("msie") != -1) && document.all && BODY_EL && !isOpera;
	var isMSIE6 = isMSIE && parseFloat(Agent_version.substring(Agent_version.indexOf("MSIE") + 5)) >= 5.5;
	var isNN4 = (document.layers && typeof document.classes != "undefined");
	var isNN6 = (!isOpera && document.defaultView && typeof document.defaultView.getComputedStyle != "undefined");
	var isW3C_compatible = !isMSIE && !isNN6 && !isOpera && document.getElementById;
	if			 (isOpera6)	return browserType = "Opera6";
	if			 (isOpera7)	return browserType = "Opera7";
	if			 (isMSIE)	return browserType = "MSIE";
	if			 (isMSIE6)	return browserType = "MSIE6";
	if				(isNN4)	return browserType = "Nav4";
	if				(isNN6)	return browserType = "Nav6";
	if	 (isW3C_compatible) return browserType = "w3c";
	return null;
}
function replaceExtChars(text,output)
{
	var result = text.replace(/&/, "&amp;");
	result = result.replace(/</, "&lt;");
	result = result.replace(/>/, "&gt;");
	result = result.replace(/\r\n/, "<br>");
	result = result.replace(/\n/, "<br>");
	result = result.replace(/\r/, "<br>");
	return result;
}
function dirname()
{
	var retValue = window.location.href;
	retValue = retValue.substring(0, retValue.lastIndexOf('/'));
	return retValue;
}
/*
 *  Copyright 2008 Dynamic Site Solutions.
 *  Free use of this script is permitted for commercial and non-commercial
 *  applications, subject to the requirement that this comment block be kept
 *  and not be altered. The data and executable parts of the script may be
 *  changed as needed. Dynamic Site Solutions makes no warranty regarding
 *  fitness of use or correct function of the script. If you would like help
 *  customizing this script or if you have other questions, contact
 *  "contact_us@dynamicsitesolutions.com".
 *
 *  Script by: Dynamic Site Solutions -- http://www.dynamicsitesolutions.com/
 *  Last Updated: 2008-01-22
 */

if (!''.camelize) // based on the function from
{ // http://dhtmlkitchen.com/learn/js/setstyle/index4.jsp
	String.prototype.camelize = function ()
	{
		var s = this,
		x = /-([a-z])/;
		while (x.test(s))
			s = s.replace(x, RegExp.$1.toUpperCase());
		return s;
	}
}
function getStyle(el, prop, numOnly)
{
	var val = '',
	d = document, c, dV = d.defaultView || window;
	el = (typeof(el) == 'string') ? d.getElementById(el) : el;
	if (dV && dV.getComputedStyle)
	{
		val = dV.getComputedStyle(el, null).getPropertyValue(prop);
	}
	else
	{
		prop = (prop == 'float') ? 'cssFloat' : prop.camelize();
		if (el.currentStyle)
		{
			val = el.currentStyle[((prop == 'cssFloat') ? 'styleFloat' : prop)];
			// From the awesome hack by Dean Edwards
			// http://erik.eae.net/archives/2007/07/27/18.54.15/#comment-102291
			// If we're not dealing with a regular pixel number
			// but a number that has a weird ending, we need to convert it to pixels
			if (!/^\d+(px)?$/i.test(val) && /^\d/.test(val))
			{
				var style = el.style.left,
				runtimeStyle = el.runtimeStyle.left;
				el.runtimeStyle.left = el.currentStyle.left,
				el.style.left = val || 0;
				val = el.style.pixelLeft + "px";
				el.style.left = style,
				el.runtimeStyle.left = runtimeStyle;
			}
			else if ((val == 'auto') && (typeof(hasLayoutToggle) == 'function'))
			{
				hasLayoutToggle(el, 1);
				if (prop == 'width')
					val = (el.clientWidth - getStyle(el, 'paddingLeft', 1) -
						getStyle(el, 'paddingRight', 1)) + 'px';
				else if (prop == 'height')
					val = (el.clientHeight -
						getStyle(el, 'paddingTop', 1) - getStyle(el, 'paddingBottom', 1)) + 'px';
				hasLayoutToggle(el, 0);
			}
		}
		else if (el.style && el.style[prop])
			val = el.style[prop];
	}
	if (numOnly)
		val = parseFloat(val) || 0;
	else if ((val.indexOf("rgb(") == 0) || ((val.charAt(0) == '#') && (val.length == 4)))
		// this converts colors to long-hex notation
		if (typeof(Color) == 'function')
			val = (new Color()).set(val).getHex();
	return val;
}
function hasLayoutToggle(el, on)
{ // for IE5+/Win
	if (!el || !el.currentStyle)
		return;
	/*@cc_on @if(@_jscript&&!(@_win32||@_win16)&&
	(@_jscript_version<5.5)) return; @end @*/// if IE/Mac return
	if (typeof(el.currentStyle.hasLayout) != 'undefined')
	{
		if (on && el.currentStyle.hasLayout)
			return;
		el.style.zoom = !on ? '' : '1';
	}
	else
	{
		var re = /^auto|0$/,
		cs = el.currentStyle;
		if (on && (!re.test(cs.height) || !re.test(cs.width)))
			return;
		if (on)
			el._oldHeight = el.style.height;
		el.style.height = !on ? (el._oldHeight || '') : '1px';
		if (!on)
			el._oldHeight = '';
	}
}
Object.extend = function(dest, src)
{
	for (var prop in src)
		dest[prop] = src[prop];
	return dest;
}
function resizeSearchOutput()
{
	var ts = document.getElementById("tabSearch");
	if (!ts)
		return;
	document.getElementById("search").size = 10;
	if (ts.style.display == "none" || ts.className.indexOf("tabbertabhide") != -1)
		return;
	var f = 0;
	var ex = document.getElementById('menutabbernav1');
	if (ex && ex.parentNode && ex.parentNode.parentNode)
	{
		var ulEl = ex.parentNode.parentNode;
		var ulElBt = getStyle(ulEl, "border-top-width", true);
		var ulElBb = getStyle(ulEl, "border-bottom-width", true);
		f = ulEl.offsetHeight + ulElBt + ulElBb;
	}
	var tsh = Math.max(ts.offsetHeight, document.getElementById("sectionNav").offsetHeight - f);
	var so = document.getElementById("search_output");
	var sf = document.getElementById("search_controls");
	var sfh = sf.offsetHeight;
	var sopt = getStyle(so, "padding-top", true);
	var sopb = getStyle(so, "padding-bottom", true);
	var sobt = getStyle(so, "border-top-width", true);
	var sobb = getStyle(so, "border-bottom-width", true);
	var soh = (tsh - sfh - sopt - sopb);
	if (soh > 0 && so.style.height != soh + 'px')
		so.style.height = soh + 'px';
}
function resizeTabs()
{
	var bds = document.body.style;
	bds.display = "none";
	var tm = document.getElementById("tabMenu");
	var ti = document.getElementById("tabIndex");
	var ts = document.getElementById("tabSearch");
	if (tm)
	{
		tm.style.height = "100%";
		tm.style.overflow = document.drex.keepVisible ? "auto" : "hidden";
	}
	if (ti)
	{
		ti.style.height = "100%";
		ti.style.overflow = document.drex.keepVisible ? "auto" : "hidden";
	}
	if (ts)
	{
		ts.style.height = "100%";
		ts.style.overflow = "hidden";
	}
	var splitter = document.getElementById("drex_splitter");
	if (splitter)
		splitter.style.height = "0px";
	var so = document.getElementById("search_output");
	var ms = document.getElementById("menutabber");
	if (ms)
	{
		var ul = ms.getElementsByTagName("ul")[0];
		if (ul)
		{
			var iPaddings = 0;
			var menuTabberHeight = parseInt(ms.style.height);
			bds.display = "";
			if (isNaN(menuTabberHeight))
				menuTabberHeight = document.getElementById("sectionNav").offsetHeight - 1;
			var ulHeight = 0;
			if (ul.tagName.toLowerCase() == "ul")
				ulHeight = ul.offsetHeight;
			bds.display = "none";
if (document.drex.keepVisible)
			{
				var newHeight = (menuTabberHeight - ulHeight + iPaddings);
				if (newHeight > 0)
				{
					newHeight = newHeight + "px";
					if (tm)
						tm.style.height = newHeight;
					if (ti)
						ti.style.height = newHeight;
					if (ts)
						ts.style.height = newHeight;
				}
			}
		}
	}
	bds.display = "";
}
function resizeContentArea()
{
	var sm = document.getElementById("sectionMain");
	var ca = document.getElementById("contentArea");
	var cs = document.getElementById("contentSection");
	var nt = document.getElementById("navTable");
	
	if (ca && cs && nt)
	{
		cs.style.height = sm.style.height;
		var iPaddings = 0;
		if (ie6 || ie5)
			iPaddings = 3;
		if (cs.offsetHeight > nt.offsetHeight + iPaddings)
			ca.style.height = (cs.offsetHeight - nt.offsetHeight - iPaddings) + "px";
	}
}
function pageSize()
{
	var myWidth = 0,
	myHeight = 0;
	if (typeof(window.innerWidth) == 'number')
	{
		//Non-IE
		myWidth = window.innerWidth;
		myHeight = window.innerHeight;
	}
	else if (document.documentElement && (document.documentElement.clientWidth || document.documentElement.clientHeight))
	{
		//IE 6+ in 'standards compliant mode'
		myWidth = document.documentElement.clientWidth;
		myHeight = document.documentElement.clientHeight;
	}
	else if (document.body && (document.body.clientWidth || document.body.clientHeight))
	{
		//IE 4 compatible
		myWidth = document.body.clientWidth;
		myHeight = document.body.clientHeight;
	}
	return {
		"width" : myWidth,
		"height" : myHeight
	};
}
function resizeMainTable()
{
	var bd = document.body;
	var sz = pageSize();
	var myWidth = sz.width;
	var myHeight = sz.height;

	var mt = document.getElementById("mainTable");

	var mtHeight = myHeight - headerFooterHeight() - 3;
	if (mtHeight < 0)
		mtHeight = myHeight;
	mt.style.height = mtHeight + "px";

	bd.style.height = myHeight + "px";
	bd.style.overflowY = "hidden";
	
	var sl = document.getElementById("sectionLeft");
	var sn = document.getElementById("sectionNav");
	var tb = document.getElementById("menutabber");
	var sm = document.getElementById("sectionMain");
	var sr = document.getElementById("sectionRight");
	if (tb)
		tb.style.height = mt.style.height;
	if (sl)
		sl.style.height = mt.style.height;
	if (sn)
		sn.style.height = mt.style.height;
	if (sr)
		sr.style.height = mt.style.height;
	if (sm)
	{
		sm.style.height = mt.style.height;
		sm.style.display = "block";
	}
}
function resizeAll()
{
	var bds = document.body.style;
	if (1 == 1)
	{
		document.drex.keepVisible = true;
		resizeMainTable();
		resizeContentArea();
	}
	else
	{
		document.drex.keepVisible = false;
		updateTabsAndSplitter();
		var cs = document.getElementById('contentSection'); 
		if (cs) 
			cs.style.overflow = 'visible';
		var ca = document.getElementById('contentArea'); 
		if (ca) 
			ca.style.overflow = 'visible';
	}
	resizeTabs();
	bds.display = "";
	resizeSearchOutput();
	resizeSplitter();
}
function installOnResize()
{
	drex_event.add(window, 'resize', resizeAll);
	resizeAll();
}
function scrollActiveTab()
{
	if (document.drex.scrollTop)
	{
		var scrolElemId = document.defaultTab;
		if (scrolElemId == "tabSearch")
			scrolElemId = "search_output";
		document.getElementById(scrolElemId).scrollTop = document.drex.scrollTop;
	}
	else
	{
		if (document.drex.keepVisible)
		{
			var tm = document.getElementById("tabMenu");
			if (tm)
			{
				var activeTd = document.getElementsByClassName("td", "menu_topic_active");
				if (activeTd && activeTd.length == 1)
					activeTd[0].scrollIntoView();
			}
		}
	}
}

drex.onLoadState.push(
	function(map)
	{
		document.drex = new Object();
		document.drex.menuWidth = 240;
		document.drex.menuWidthUnit = "px";
		
		if (map["mw"] != drex.undefined)
		{
			document.drex.menuWidth = parseInt(map["mw"]);
			document.drex.menuWidthUnit = "px";
		}			
		
		if (map["st"] != drex.undefined)
			document.drex.selTab = parseInt(map["st"]);
			
		if (document.drex.selTab != 0) {
			if (map["sct"] != drex.undefined)
				document.drex.scrollTop = map["sct"];
				
			if (map["q"] != drex.undefined)
				document.drex.sInfo = map["q"];
		}		
	}
);

function applyLocationParams()
{
	var sn = document.getElementById("sectionNav");
	sn.style.width = document.drex.menuWidth + document.drex.menuWidthUnit;
	if (document.drex.menuWidthUnit == "%")
	{
		var mt = document.getElementById("mainTable");
		sn.style.width = mt.offsetWidth * document.drex.menuWidth / 100 + "px";
	}

	var tm = document.getElementById("tabMenu");
	var ti = document.getElementById("tabIndex");
	var ts = document.getElementById("tabSearch");
	if (document.drex.selTab != 0)
	{
		var curTab = null;
		switch (document.drex.selTab)
		{
		case 1:
			curTab = tm;
			break;
		case 2:
			curTab = ti;
			break;
		case 3:
			curTab = ts;
			document.getElementById("search").value = document.drex.sInfo;
			if (typeof isEmpty != "undefined" && !isEmpty(document.drex.sInfo))
				document.onSearchCompleted = scrollActiveTab;
			break;
		}
		if (curTab)
		{
			document.defaultTab = curTab.id;
			curTab.className += " tabbertabdefault";
		}
	}
	else if (tm)
		tm.className = "tabbertab";
	else if (ti)
		ti.className = "tabbertab";
	else if (ts)
		ts.classname = "tabbertab";
}

drex.onSaveState.push(
	function(map)
	{
		var sn = document.getElementById("sectionNav");
		if (!sn) 
			return;
			
		var curMenuWidth = parseInt(sn.style.width) || sn.offsetWidth;
		var mt = document.getElementById('mainTable');
		var mtw = parseInt(mt.style.width) || mt.offsetWidth;
		
		if (curMenuWidth != mtw) {
			map["mw"] = curMenuWidth.toString();

			var tm = document.getElementById("tabMenu");
			var ti = document.getElementById("tabIndex");
			var ts = document.getElementById("tabSearch");
			var scrollTop = 0;
			var sInfo = "";
			var tabNum = 0;
			if (tm && tm.className.indexOf("tabbertabhide") == -1) {
				tabNum = 1;
				scrollTop = tm.scrollTop;
			}
			
			if (ti && ti.className.indexOf("tabbertabhide") == -1) {
				tabNum = 2;
				scrollTop = ti.scrollTop;
			}
			
			if (ts && ts.className.indexOf("tabbertabhide") == -1) {
				tabNum = 3;
				scrollTop = document.getElementById("search_output").scrollTop;
				sInfo = document.getElementById("search").value;				
				map["q"] = sInfo;
			}
			
			map["st"] = tabNum.toString();
			map["sct"] = scrollTop.toString();
		}
	}
);

function OpnNxtPage(nextpage, atNewPage)
{
	atNewPage = typeof(atNewPage) != 'undefined' ? atNewPage : false;

	var stateParams = getLocationParams();
	
	var targetUrl = nextpage;
	if (ie)
		targetUrl = escapeXml(nextpage);
	var anch = "";
	var anchPos = -1;
	if ((anchPos = nextpage.indexOf("#")) != -1) {
		targetUrl = nextpage.substr(0, anchPos);
		anch = nextpage.substr(anchPos);
	}
	targetUrl += "?" + stateParams + anch;
	window.open(targetUrl, atNewPage ? "_new" : "_self");
}

function convertLinks()
{
	var linkClasses = new Array();
	linkClasses["local_link"] = linkClasses["navigation"] = linkClasses["menu"] = linkClasses["menu_active"] = true;
	var localLinks = document.getElementsByClassName("a", linkClasses);

	var localLinksLength = localLinks.length;
	for (var i = 0; i < localLinksLength; ++i)
	{
		var curLink = localLinks[i];
		var localHref = curLink.href;
		if (localHref)
		{
			var newHref = "javascript:OpnNxtPage(\"" + escapeUrl(localHref);
			if (curLink.target != "_new")
			{
				curLink.href = newHref + "\");";
			}
			else
			{
				curLink.href = newHref + "\", true);";
				curLink.target = "_self";
			}
		}
	}
}
function headerFooterHeight()
{
	return (document.de_hd ? document.de_hd.offsetHeight : 0) + (document.de_ft ? document.de_ft.offsetHeight : 0);
}
drex.onPreLoad.push(function()
{
	document.de_hd = document.getElementById("de_hd");
	document.de_ft = document.getElementById("de_ft");
});

drex.onLoad.push(function()
{		
	applyLocationParams();
	convertLinks();
	
	if (typeof tabberAutomatic != "undefined"
		 && typeof tabberOptions != "undefined")
		tabberAutomatic(tabberOptions);
		
	installOnResize();
	var anchPos = -1;
	if ((anchPos = location.href.indexOf("#")) != -1)
	{
		var anch = location.href.substr(anchPos + 1);
		var anchs = document.getElementsByTagName("a");
		var destAnch = null;
		for (var i = 0; i < anchs.length; ++i)
		{
			curAnch = anchs[i];
			if (curAnch.name == anch || curAnch.id == anch)
			{
				destAnch = curAnch;
				break;
			}
		}
		if (destAnch)
			destAnch.scrollIntoView();
	}
	if (typeof processMenu != "undefined")
		processMenu();
	var tbl2 = document.getElementById("Table2");
	//Showing menu
	if (tbl2)
		tbl2.className = "menutable";
	var splitter = document.getElementById("drex_splitter");
	if (splitter)
		if (saf)
			splitter.style.width = "2px";
	if (typeof performHighlight != "undefined")
		performHighlight();

	if (!document.onSearchCompleted)
		scrollActiveTab();
	else
		SubmitForm();
});

var drex_event =
{
	target : function (e)
	{
		// for Mozilla/Internet Explorer
		if (e.target)
			return e.target;
		else if (e.srcElement)
			return e.srcElement;
	},
	add : function (objct, type, fnctn)
	{
		// for Mozilla/Internet Explorer
		if (objct.addEventListener)
		{
			objct.addEventListener(type, fnctn, false);
			return true;
		}
		else if (objct.attachEvent)
		{
			var rtrn = objct.attachEvent('on' + type, fnctn);
			return rtrn;
		}
		else
		{
			objct.onclick = fnctn; //objct['on'+type] = fnctn;
		}
	},
	remove : function (objct, type, fnctn)
	{
		// for Mozilla/Internet Explorer
		if (objct.removeEventListener)
		{
			objct.removeEventListener(type, fnctn, false);
			return true;
		}
		else if (objct.detachEvent)
		{
			var rtrn = objct.detachEvent('on' + type, fnctn);
			return rtrn;
		}
		else
		{
			objct.onclick = null; //objct['on'+type] = null;
		}
	}
};
function updateTabsAndSplitter()
{
	var sn = document.getElementById('sectionNav');
	var splitter = document.getElementById("drex_splitter");
	var splitterWidth = 3;
	if (splitter)
		splitterWidth = splitter.offsetWidth + 1;
	var newTabWidth = parseInt(sn.style.width) - splitterWidth + 'px';
	var tabMenu = document.getElementById('tabMenu');
	if (tabMenu)
		tabMenu.style.width = newTabWidth;
	var tabIndex = document.getElementById('tabIndex');
	if (tabIndex)
		tabIndex.style.width = newTabWidth;
	var tabSearch = document.getElementById('tabSearch');
	if (tabSearch)
		tabSearch.style.width = newTabWidth;
	var ntp = document.getElementById("navTablePadder");
	if (ntp)
		ntp.parentNode.style.width = parseInt(sn.style.width) + "px";
}
drex_drag =
{
	optn : null,//resize_x|resize_y|resize_a
	s_clntX : null,
	s_clntY : null,
	x_lmt : null,
	y_lmt : null,
	dragstart: function()
	{
		return false;
	},
	mousemove: function(e)
	{
		// for Internet Explorer
		if (!e)
			e = window.event;
		var delta_x = e.clientX - drex_drag.s_clntX;
		if (drex_drag.optn == 'resize_x' || drex_drag.optn == 'resize_a')
		{
			var frst_x = drex_drag.curW + delta_x;
			var leftSide = parseInt(document.getElementById('sectionNav').style.minWidth);
			var rightSide = parseInt(document.getElementById('sectionNav').style.maxWidth);
			if (frst_x < leftSide)
				frst_x = leftSide;
			if (frst_x > rightSide)
				frst_x = rightSide;
			if (leftSide <= frst_x && frst_x <= rightSide)
			{
				document.getElementById('sectionNav').style.width = frst_x + 'px';
				updateTabsAndSplitter();
				document.getElementById('sectionNav').style.width = frst_x + 'px';
			}
		}
	},
	mouseup: function(e)
	{
		drex_event.remove(document, 'mousemove', drex_drag.mousemove);
		drex_event.remove(document, 'mouseup', drex_drag.mouseup);
		resizeAll();
		document.body.style.cursor = drex_drag.oldCursor;
		document.onselectstart = drex_drag.oldOnSelectStart;
		document.onmousedown = drex_drag.oldOnMouseDown;
	},
	start: function(e, optn)
	{
		drex_drag.optn = optn;
		drex_drag.s_clntX = e.clientX;
		var sn = document.getElementById("sectionNav");
		drex_drag.curW = parseInt(sn.style.width) || sn.offsetWidth;
		var mt = document.getElementById('mainTable');
		drex_drag.x_lmt = parseInt(mt.style.width) || mt.offsetWidth;
		// for Internet Explorer
		if (e.srcElement)
			drex_event.add(e.srcElement, 'dragstart', drex_drag.dragstart);
		drex_event.add(document, 'mousemove', drex_drag.mousemove);
		drex_event.add(document, 'mouseup', drex_drag.mouseup);
		drex_drag.oldCursor = document.body.style.cursor;
		document.body.style.cursor = 'e-resize';
		drex_drag.oldOnSelectStart = document.onselectstart;
		drex_drag.oldOnMouseDown = document.onmousedown;
		document.onselectstart = function ()
		{
			return false;
		} // ie
		document.onmousedown = function ()
		{
			return false;
		} // firefox
	}
};
function resizeSplitter()
{
	var splitter = document.getElementById("drex_splitter");
	var sn = document.getElementById("sectionNav");
	var curTab = document.getElementById('menutabber');
	if (!(splitter && curTab))
		return;
	splitter.style.cursor = "e-resize";
	var tabCount = 0;
	var tab = document.getElementById('tabMenu');
	var maxTabHeight = 0;
	if (tab)
	{
		++tabCount;
		if (maxTabHeight < parseInt(tab.offsetHeight))
			maxTabHeight = parseInt(tab.offsetHeight);
	}
	var tabIndex = document.getElementById('tabIndex');
	if (tabIndex)
	{
		++tabCount;
		if (maxTabHeight < parseInt(tabIndex.offsetHeight))
			maxTabHeight = parseInt(tabIndex.offsetHeight);
		if (!tab)
			tab = tabIndex;
	}
	var tabSearch = document.getElementById('tabSearch');
	if (tabSearch)
	{
		++tabCount;
		if (maxTabHeight < parseInt(tabSearch.offsetHeight))
			maxTabHeight = parseInt(tabSearch.offsetHeight);
		if (!tab)
			tab = tabSearch;
	}
	var f = 0;
	var ex = document.getElementById('menutabbernav1');
	if (ex && ex.parentNode && ex.parentNode.parentNode)
	{
		var ulEl = ex.parentNode.parentNode;
		var ulElBt = getStyle(ulEl, "border-top-width", true);
		var ulElBb = getStyle(ulEl, "border-bottom-width", true);
		f = ulEl.offsetHeight + ulElBt + ulElBb;
	}
	var splitterHeight = Math.max(maxTabHeight, sn.offsetHeight - f);
	splitter.style.height = splitterHeight + 'px';
	var a = 0, b = 0, c = 0, d = 0, e = 0;
	if (document.getElementById('menutabbernav1'))
		a = document.getElementById('menutabbernav1').parentNode.offsetWidth;
	if (document.getElementById('menutabbernav2'))
		b = document.getElementById('menutabbernav2').parentNode.offsetWidth;
	if (document.getElementById('menutabbernav3'))
		c = document.getElementById('menutabbernav3').parentNode.offsetWidth;
	if (document.getElementById('a1prev'))
		d = document.getElementById('a1prev').offsetWidth + 10;
	if (d == 0 && document.getElementById('a1next'))
		d = document.getElementById('a1next').offsetWidth + 10;
	e = a + b + c;
	if (e == 0)
	{
		splitter.style.display = 'inline';
		tab.style.cssFloat = 'left';
	}
	if (tabCount == 1)
	{
		splitter.style.height = parseInt(sn.style.height) + 'px';
		curTab.className = "tabberlive";
	}
	var newMinWidth = Math.max(e + 5, 200);
	var newMaxWidth = Math.max((document.getElementById('mainTable').clientWidth - Math.max(e + 5, 200, d * 3 + 1)), newMinWidth + 1);
	sn.style.maxWidth = newMaxWidth + 'px';
	if (sn.style.minWidth == '')
		sn.style.minWidth = newMinWidth + 'px';
	var currentWidth = Math.max(parseInt(sn.style.width), newMinWidth);
	currentWidth = Math.min(currentWidth, newMaxWidth);
	var newWidth = currentWidth + 'px';
	if (sn.style.width != newWidth)
		sn.style.width = newWidth;
	updateTabsAndSplitter();
}