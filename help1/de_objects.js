drex_node_names = ["SafeHaven help system","Knowing icons","Logging in the application","Using the dashboard","User admin","Appointment view","Report Memu bar","Using navigation bar ","Search view","Current user view","Add a new user","Creating a new appointment","new appointment view","Report view","Left navigation menu","Top navigation ","View details","View all details","Add a new record","Edit a record view","Details search view","All details search view","Savig a new record","Adding new user form","savind update","edit form"];
drex_node_links = ["safehaven_help_system.htm","knowing_icons.htm","logging_in_the_application.htm","using_the_dashboard.htm","user_admin.htm","appointment_view.htm","report_memu_bar.htm","using_navigation_bar_.htm","search_view.htm","current_user_view.htm","add_a_new_user.htm","creating_a_new_appointment.htm","new_appointment_view.htm","report_view.htm","left_navigation_menu.htm","top_navigation_.htm","view_details.htm","view_all_details.htm","add_a_new_record.htm","edit_a_record_view.htm","details_search_view.htm","all_details_search_view.htm","savig_a_new_record.htm","adding_new_user_form.htm","savind_update.htm","edit_form.htm"];
drex_node_child_start = [1,7,7,7,9,11,13,14,20,22,22,22,22,22,22,22,22,22,22,24,26,26,26,26,26,26];
drex_node_child_end = [7,7,7,9,11,13,14,20,22,22,22,22,22,22,22,22,22,22,24,26,26,26,26,26,26,26];
drex_node_parent = new Array();
drex_node_deep = new Array();

function drex_node(ndx)
{
  this.node_index = ndx;
  this.title = drex_node_names[this.node_index];
  this.link = drex_node_links[this.node_index];
  this.deep = drex_node_deep[this.node_index];

  this.children = function(){
	var result = new Array(); 
	for (var i = drex_node_child_start[this.node_index]; i < drex_node_child_end[this.node_index]; i++) 
	  result.push(new drex_node(i));
	return result;
  };
  this.childrenCount = function(){
	if (drex_node_child_start[this.node_index] >= drex_node_child_end[this.node_index])
	  return 0;
	return drex_node_child_end[this.node_index] - drex_node_child_start[this.node_index];
  }
  this.parent = function(){
	if (drex_node_parent[this.node_index] == -1)
		return null;
	return new drex_node(drex_node_parent[this.node_index]);
  };
  this.isActive = function(){
	if (!drex.active_node)
		return false;
    return (this.node_index == drex.active_node.node_index)
  }
  this.isVisible = function(){
	if (this.node_index == 0)
		return 1;
	return true;
  }
};

drex_node_parent[0] = -1;
drex_node_deep[0] = 0;
for (var i in drex_node_names)
{
  for (var j = drex_node_child_start[i]; j < drex_node_child_end[i]; j++) 
  {
    drex_node_parent[j] = i;
    drex_node_deep[j] = drex_node_deep[i] + 1;
  }
}

drex = new Object();
drex.nodes_count = drex_node_names.length;

drex.root_node = function()
{
  return new drex_node(0);
}

drex.active_node = null;
for (var i in drex_node_links)
{
  if (drex_node_links[i] == drex_file_name)
    drex.active_node = new drex_node(i);
}


function drex_resultContainer(){
   this.result = "";
}

document.getElementsByClassName = function(tagName, clsNames)
{
	if (Object.prototype.toString.call(clsNames) != "[object Array]")
	{
		var temp = new Array();
		temp[clsNames] = true;
		clsNames = temp;
	}
	var arr = new Array();
	var elems = document.getElementsByTagName(tagName);
	for (var cls, i = 0; (elem = elems[i]); ++i)
	{
		var classNamesArray = elem.className.split(' ');
		for (var j = 0; j < classNamesArray.length; j++)
			if (clsNames[classNamesArray[j]])
				arr.push(elem);
	}
	return arr;
}

drex.onPreLoad = new Array();
drex.onGenerateContent = new Array();
drex.onLoad = new Array();

function onDocumentLoaded()
{
	for (var i = 0; i < drex.onPreLoad.length; i++)
		drex.onPreLoad[i]();
	for (var i = 0; i < drex.onGenerateContent.length; i++)
		drex.onGenerateContent[i]();
	for (var i = 0; i < drex.onLoad.length; i++)
		drex.onLoad[i]();
}

function escapeUrl(oldUrl)
{
	var result = oldUrl.replace(/%/g, "%25");
	result = result.replace(/'/g, "%27");
	result = result.replace(/;/g, "%3b");
	return result;
}

function escapeXml(str)
{
	var result = str.replace(/</g, "&lt;");
	result = result.replace(/>/g, "&gt;");
	result = result.replace(/&/g, "&amp;");
	return result;
}

function str2ar(str)
{
	var retVal = new Array();
	for (var i = 0; i < str.length; ++i)
		retVal.push(str.charCodeAt(i));
	return retVal;
}
function ar2str(arr)
{
	var str = "";
	for (var i = 0; i < arr.length; ++i)
		str += String.fromCharCode(arr[i]);
	return str;
}

drex.onSaveState = new Array();
drex.onLoadState = new Array();

function parseLocationParams() 
{
	var decodeString = function(str) 
	{
		var bits = base64.decode(str, 0, true, true);
		var result = ar2str(bits);
		result = utf8_decode(result);
		return result;		
	}
	map = new Array();

	if (!location.search.substring(1))
	{
		for (var i = 0; i < drex.onLoadState.length; i++)
			drex.onLoadState[i](map);
		return;
	}
	
	var stateParams = String(location.search.substring(1).split("?"));
	var paramArray = stateParams.split("&");

	for (index in paramArray) {
		var n = paramArray[index].indexOf("=");
		var key = paramArray[index].substring(0, n);
		var value = decodeString(paramArray[index].substring(n+1));
		map[key] = value;
	}
	
	for (var i = 0; i < drex.onLoadState.length; i++)
		drex.onLoadState[i](map);
}
function getLocationParams()
{
	var encodeString = function(str) 
	{
		var compressedStr = str;
		var utfEncodedStr = utf8_encode(compressedStr);
		var bitArray = str2ar(utfEncodedStr);
		return base64.encode(bitArray, false, true);	
	}

	map = new Array();
	for (var i = 0; i < drex.onSaveState.length; i++)
		drex.onSaveState[i](map);
		
	var result = "";
	for (var key in map)
	{
		value = encodeString(map[key]);
		if (result != "")
			result += "&";
		result += key + "=" + value;
	}
		
	return result;
}