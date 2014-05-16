DrExImagePath = escapeUrl("");
DrExImagePathBulletTopicOpened = DrExImagePath + "bullet_topic_opened.gif";
DrExImagePathBulletTopicClosed = DrExImagePath + "bullet_topic.gif";
DrExImagePathPlus = DrExImagePath + "plus.gif";
DrExImagePathMinus = DrExImagePath + "minus.gif";

VarTOpnd = new Array(drex.nodes_count);

function defaultMenuState()
{
	var result = new Array(drex.nodes_count);
	if (1 == 3 || 1 == 1)
	{
		for (var i = 0; i < drex.nodes_count; i++)
			result[i] = 1;
	}
	else
	{
		for (var i = 0; i < drex.nodes_count; i++)
			result[i] = (new drex_node(i)).deep <= 0 ? 1 : 0;
	}
	return result;
}

function bitsToByte(bits, cnt)
{
	var result = new Array();
	while (bits.length % cnt)
		bits.push(0);
	var MyByte = 0;
	for (var i = 0; i < bits.length; ++i) {
		MyByte += (bits[i] << (i % cnt));
		if ((i % cnt) == cnt - 1){
			result.push(MyByte);
			MyByte = 0;
		}
	}
	return result;
}
function byteToBits(bytes, cnt)
{
	var result = new Array();
	for (var i = 0; i < bytes.length; i++) {
		for (var j = 0; j < cnt; ++j) {
			result.push((bytes[i] & (1 << j)) >>> j);
		}
	}
	return result;
}

function intDiv(nom, denom)
{
	nom += denom - 1 - (nom % denom);
	return Math.floor(nom / denom);
}

function encodingPrefixLen(bitsLen, cnt)
{
	var bytesLen = intDiv(bitsLen + cnt - 1, cnt);
	return intDiv(bytesLen + cnt - 1, cnt);
}

drex.onSaveState.push(
	function(map)
	{
		var menuMinimized = defaultMenuState();
		for (var i = 0; i < VarTOpnd.length; i++)
			menuMinimized[i] ^= VarTOpnd[i];
		
		var bits = new Array();
		for (var i = 0; i < menuMinimized.length; i++)
			bits.push(menuMinimized[i]);
		
		var bytes = bitsToByte(bits, 7);
		bits = new Array();
		for (var i = 0; i < bytes.length; i++)
			if (bytes[i] == 0)
				bits.push(0);
			else
				bits.push(1);
				
		var result = bitsToByte(bits, 7);
		for (var i = 0; i < bytes.length; i++)
			if (bytes[i] != 0)
				result.push(bytes[i]);
				
		var menuStateString = ar2str(result);
		if (menuStateString != "")
			map["ms"] = menuStateString;
	}
);

drex.onLoadState.push(
	function(map)
	{
		VarTOpnd = defaultMenuState();
		if (map["ms"] != drex.undefined) 
		{
			var bytes = map["ms"];
			bytes = str2ar(bytes);
			var bits = byteToBits(bytes, 7);
			
			var prefixLen = encodingPrefixLen(VarTOpnd.length, 7);
			var readPos = prefixLen;
			var result = new Array();
			for (var i = 0; i < prefixLen * 8; i++)
				if (bits[i] == 0)
					result.push(0);
				else
					result.push(bytes[readPos++]);
			
			var MyBB = byteToBits(result, 7);
			for (var i = 0; i < VarTOpnd.length; ++i)
				VarTOpnd[i] ^= MyBB[i];
		}
	}
);

function Clps(node)
{
	var lnkd_obj = document.getElementById("de_row_" + node.node_index);
	lnkd_obj.className = "menu_topic_closed";
	
	if (VarTOpnd[node.node_index] == 1)
	{
		var children = node.children();
		for (var i = 0; i < children.length; ++i)
			Clps(children[i]);
	}
}
function Expand(node)
{
	var lnkd_obj = document.getElementById("de_row_" + node.node_index);
	lnkd_obj.className = "menu_topic_opened";
	
	if (VarTOpnd[node.node_index] == 1)
	{
		var children = node.children();
		for (var i = 0; i < children.length; ++i)
			Expand(children[i]);
	}
}
function IsClosed(node)
{
	var lnkd_obj = document.getElementById("de_row_" + node.node_index);
	var isClosed = (lnkd_obj.className == "menu_topic_closed");
	var children = node.children();
	for (var i = 0; i < children.length; i++)
		isClosed = isClosed && IsClosed(children[i]);
	return isClosed;
}
function TglState(event)
{
	var node = new drex_node(this.collapseId);
	var lnkd_obj = document.getElementById("de_row_" + node.node_index);
	var img_obj = document.getElementById("de_collapse_" + node.node_index);
	var img_obj_mark = document.getElementById("de_collapse_" + node.node_index + "_mark");

	if (!lnkd_obj)
		return;
		
	lnkd_obj.className = "menu_topic_closed";
	getstate = IsClosed(node); 
	
	if (!getstate)
	{
		Clps(node);
		VarTOpnd[node.node_index] = 0;
		lnkd_obj.className = "menu_topic_opened";

		img_obj.src = img_obj.src.substring(0, img_obj.src.lastIndexOf("_opened.gif"))+".gif";
		img_obj_mark.src = DrExImagePathPlus;
		img_obj_mark.alt = "+";
	}
	else
	{
		VarTOpnd[node.node_index] = 1;
		Expand(node);
		lnkd_obj.className = "menu_topic_opened";

		img_obj.src = img_obj.src.substring(0,img_obj.src.lastIndexOf(".gif"))+"_opened.gif";
		img_obj_mark.src = DrExImagePathMinus;
		img_obj_mark.alt = "-";
	}
}
function str2ar(str)
{
	var bits = new Array();
	for (var i = 0; i < str.length; ++i)
		bits.push(str.charCodeAt(i));
	return bits;
}
function ar2str(bits)
{
	var str = "";
	for (var i = 0; i < bits.length; ++i)
		str += String.fromCharCode(bits[i]);
	return str;
}
function attachMyAttrib(anElement, aName, aValue)
{
	if (getBrowserType().indexOf("MSIE") != -1)
		anElement[aName] = aValue;
	else
	{
		var myNewAttr = document.createAttribute(aName);
		myNewAttr.value = aValue;
		anElement.setAttributeNode(myNewAttr);
	}
}

function populateTable(tblNode, currentNode, deep, isVisible)
{
	var curRow = tblNode.insertRow(-1);
	curRow.id = "de_row_" + currentNode.node_index;
	curRow.className = currentNode.isVisible() && isVisible ? "menu_topic_opened" : "menu_topic_closed";
	
	var curCell = curRow.insertCell(-1);
	curCell.style.whiteSpace = "nowrap";
	curCell.className = currentNode.isActive() ? "menu_topic_active" : "menu_topic";

	var hasChildren = currentNode.childrenCount();
	var isOpened = VarTOpnd[currentNode.node_index];
	var imageId = "de_collapse_" + currentNode.node_index;

	var newDeep = (deep * 15)
	if (!hasChildren && 1 != 1)
		newDeep += 15;
	if (deep > 0)
		newDeep += 1;
	if (newDeep < 0)
		newDeep = 0;

	var divTag = document.createElement("div");
	divTag.style.paddingLeft = newDeep + "px";
	
	if (hasChildren && 1 != 1)
	{
		var imgElementMark = document.createElement("img");
		imgElementMark.style.cursor = "pointer";
		imgElementMark.id = imageId + "_mark";
		imgElementMark.onclick = TglState;
		if (isOpened)
		{
			imgElementMark.src = DrExImagePathMinus;
			imgElementMark.alt = "-";
		}
		else
		{
			imgElementMark.src = DrExImagePathPlus;
			imgElementMark.alt = "+";
		}
		imgElementMark.collapseId = currentNode.node_index;
		divTag.appendChild(imgElementMark);
	}

	var imgElement = document.createElement("img");
	imgElement.className = "topic_image";
	imgElement.id = imageId;
	imgElement.src = (isOpened && hasChildren && 1 != 1) ? DrExImagePathBulletTopicOpened : DrExImagePathBulletTopicClosed;
	divTag.appendChild(imgElement);

	
	var aElement = document.createElement("a");
	aElement.className = currentNode.isActive() ? "menu_active" : "menu";
	aElement.href = escapeUrl(currentNode.link);
	aElement.appendChild(document.createTextNode(currentNode.title));
	divTag.appendChild(aElement);
	
	curCell.appendChild(divTag);
	
	var children = currentNode.children();
	for (var i = 0; i < children.length; ++i)
		populateTable(tblNode, children[i], deep + 1, isVisible && isOpened);
		
	/*if (aNode.name == "de_tr")
		curRow.id = "tempRow";	*/
}

function validateOpenState()
{
	VarTOpnd[drex.root_node().node_index] = 1;
	if (!drex.active_node)
		return;
		
	var currentNode = drex.active_node.parent();
	while (currentNode)
	{
		VarTOpnd[currentNode.node_index] = 1;
		currentNode = currentNode.parent();
	}
}


function initMenuState()
{
	validateOpenState();
	
	var tabMenu = document.getElementById("tabMenu");
	var curDiv = tabMenu.childNodes[0];
	var tbl2 = document.createElement("table");
	tbl2.id = "Table2";
	tbl2.cellSpacing = 0;
	tbl2.cellPadding = 3;
	populateTable(tbl2, drex.root_node(), drex.root_node().isVisible() ? 0 : -1, true);
	curDiv.parentNode.removeChild(curDiv);
	if (tbl2.rows[0].id == "tempRow")
		tbl2.deleteRow(0);
	//tbl2.style.display = "none";
	tabMenu.appendChild(tbl2);
}

drex.onGenerateContent.push(
	function()
	{
		initMenuState();
	}
);

function processMenu()
{
	document.getElementById("Table2").style.display = "";
}