 /*
         * Begin Set Functions
         */
        
        /**
         * Append a tag to the properties of an object for each item in an array
         * 
         * @param {Object} tags
         *         The object whose property values will be modified
         * @param {Array} items
         *         The list of property names to set on the object
         * @param {String} tag
         *         The value to append to each property value in the object
         */
        function setTag(tags, items, tag) {
            for (var i = 0; i < items.length; i++) {
                var item = items[i];

                if (tags.hasOwnProperty(item)) {
                    tags[item] += tag;
                } else {
                    tags[item] = tag;
                }
            }
        }

 /**
         * Return a filtered list of property names for the specified object.
         * Each property value that causes the specified match function to
         * return true will be returned in the resulting array
         *  
         * @param {Object} tags
         *         The object whose property names will be filtered
         * @param {Function} matchFunction
         *         A function that takes a single parameter, returning true or
         *         false based on the value of that parameter. "filter" will pass
         *         in each property name of the "tags" object to determine if it
         *         should be included in the resulting array
         * @return {Array} Returns an array of property names whose values
         *         were accepted by the matchFunction
         */
        function filter(tags, matchFunction) {
            var result = [];

            for (var p in tags) {
                if (matchFunction(tags[p])) {
                    result.push(p);
                }
            }

            return result;
        }
        
        /**
         * Find the intersection of two sets
         * 
         * @param {Array} setA
         * @param {Array} setB
         * @return {Array} Returns the result of this set operation
         */
        function intersect(setA, setB) {
            var tags = {};

            setTag(tags, setA, "A");
            setTag(tags, setB, "B");

            return filter(tags, function(value) { return value == "AB" });
        }

        /**
         * Find the difference of two sets
         * 
         * @param {Array} setA
         * @param {Array} setB
         * @return {Array} Returns the result of this set operation
         */
        function difference(setA, setB) {
            var tags = {};

            setTag(tags, setA, "A");
            setTag(tags, setB, "B");

            return filter(tags, function(value) { return value != "AB" });
        }

        /**
         * Remove all members of setA from setB
         * 
         * @param {Array} setA
         * @param {Array} setB
         * @return {Array} Returns the result of this operation
         */
        function remove(setA, setB) {
            var tags = {};

            setTag(tags, setA, "A");
            setTag(tags, setB, "B");

            return filter(tags, function(value) { return value == "B" });
        }
		function unite(setA, setB)
		{
            var tags = {};

            setTag(tags, setA, "A");
            setTag(tags, setB, "B");
			return filter(tags, function(value) { return true;});
		}
/**
 * @author 1
 */
	var strFoundNothing = "Nothing was found";
	var strSearchStringIsEmpty = "Please, enter a string for search!";
	var strSearchInProgress = "Searching...";
	 
	var IndexOfFiles = new Array();
	var StringsForSearch = new Array();
	var StringPairArray = new Array();
	var SearchResults=new Array();
	var iStringToSearch=0;
	var HTTP = {};

	HTTP.newRequest = function()
		{
			var xmlhttp=false;
			   /* running locally on IE5.5, IE6, IE7 */                                              ; /*@cc_on
			     if(location.protocol=="file:"){
			      if(!xmlhttp)try{ xmlhttp=new ActiveXObject("MSXML2.XMLHTTP"); }catch(e){xmlhttp=false;}
			      if(!xmlhttp)try{ xmlhttp=new ActiveXObject("Microsoft.XMLHTTP"); }catch(e){xmlhttp=false;}
			     }                                                                                ; @cc_off @*/
			   /* IE7, Firefox, Safari, Opera...  */
			     if(!xmlhttp)try{ xmlhttp=new XMLHttpRequest(); }catch(e){xmlhttp=false;}
			   /* IE6 */
			     if(typeof ActiveXObject != "undefined"){
			      if(!xmlhttp)try{ xmlhttp=new ActiveXObject("MSXML2.XMLHTTP"); }catch(e){xmlhttp=false;}
			      if(!xmlhttp)try{ xmlhttp=new ActiveXObject("Microsoft.XMLHTTP"); }catch(e){xmlhttp=false;}
			     }
			   /* IceBrowser */
			     if(!xmlhttp)try{ xmlhttp=createRequest(); }catch(e){xmlhttp=false;}

			if (!xmlhttp)
			{
				throw new Error("Failed to initialize XMLHttpRequest");
			}
			return xmlhttp;
		};

	
	var request = HTTP.newRequest();
	
	function ID()
	{
		if (!SearchResults.length) output();
		var sID = dirname() + "/de_search/ids.txt"
		request.open("GET", sID, true);
		request.onreadystatechange = function()
		{
			if (request.readyState == 4)
			if (request.status == 200 || request.status == 0) 
			{
				var arrFileId = (request.responseText).split(/\s*;\s*/);
				var h;
				for (var i = 0; i < SearchResults.length; i++) 
				{
					h = (SearchResults[i] - 1) * 3;
					SearchResults[i] = new Array();
						
					if (!arrFileId[h + 1] || !arrFileId[h + 2])
					{
						if (!!arrFileId[h+2])
						{
							SearchResults[i][0] = arrFileId[h + 2];
							SearchResults[i][1] = arrFileId[h + 2];
						}
						else
						{
							if (!SearchResults[1])
								SearchResults[1] = new Array();
							SearchResults.length = 1;
							SearchResults[1][0] = "Error!"
							return;
						}
					}
					else
					{			
						SearchResults[i][0] = arrFileId[h + 1];
						SearchResults[i][1] = arrFileId[h + 2];
					}
				}
				output();	
			}
		}
		request.send(null);
		
	}
	
	function output()
	{
		var outel = document.getElementById("search_output");
		if (outel)
		{
			var outbuffer="";
			if (SearchResults.length) 
			{
					for (var i = 0; i < SearchResults.length; i++) 
						outbuffer += "<img src=\"" + escapeUrl("") + "bullet_topic.gif\" /><a href = \"javascript:OpnNxtPage('" + escapeUrl(escapeUrl(SearchResults[i][1])) + "');\" class=\"menu\">"+ replaceExtChars(SearchResults[i][0], true) + "</a><br/>";
			}
			else 
			{
				outbuffer = strFoundNothing;
			}
			outel.innerHTML = outbuffer;
		}
		if (document.onSearchCompleted)
		{
			document.onSearchCompleted();
			document.onSearchCompleted = undefined;
		}
		if (resizeSearchOutput)
			resizeSearchOutput();
	}
			
	function SearchInFile()
	{
		if (request.readyState != 4) return;
		if (request.status != 200 && request.status != 0)  return;
			
		var arrFileStrings	= (request.responseText).split(/\s*;\s*/);
		var stToSearch 		= StringPairArray[iStringToSearch][0];
		  
		var isFirstIteration = true;
		var wasFound		= false;			
		var curResults = new Array();
		for (var i = 0; i < arrFileStrings.length; i += 2) 
		{

			if (arrFileStrings[i].indexOf(stToSearch) == 0)                      
			{
				var pages = arrFileStrings[i + 1];
				pages = pages.split(/\s*,\s*/);
				curResults = unite(curResults, pages);
				wasFound = true;
			}
		}
		if (iStringToSearch == 0) //this is first result - adding all curResults to SearchResults
			SearchResults = SearchResults.concat(curResults);
		else
			SearchResults = intersect(SearchResults, curResults);
		// If there are no results after a certain iteration then there's no sense to AND-search anymore
		if (!SearchResults.length) return output();
		iStringToSearch++;
		SearchForNextString();
	}			

	

		function SearchForNextString()
		{
			if (iStringToSearch >= StringsForSearch.length) return ID();
			var sURL = dirname() + "/de_search/"+StringPairArray[iStringToSearch][1];
			request.open("GET", sURL, true);
			request.onreadystatechange = SearchInFile;
			request.send(null);
		}
	function strcmp ( str1, str2 ) {
	    // Binary safe string comparison  
	    // 
	    // version: 909.322
	    // discuss at: http://phpjs.org/functions/strcmp
	    // +   original by: Waldo Malqui Silva
	    // +      input by: Steve Hilder
	    // +   improved by: Kevin van Zonneveld (http://kevin.vanzonneveld.net)
	    // +    revised by: gorthaur
	    // *     example 1: strcmp( 'waldo', 'owald' );
	    // *     returns 1: 1
	    // *     example 2: strcmp( 'owald', 'waldo' );
	    // *     returns 2: -1
	    return ( ( str1 == str2 ) ? 0 : ( ( str1 > str2 ) ? 1 : -1 ) );
	}
		function AttachFilesToStrings()
		{
			for (var i = 0; i < StringsForSearch.length; i++)
			{
				var st = StringsForSearch[i].toUpperCase();
				var st1 = st.substr(0,1);
				var j = 0;
				var bFound = -1;
				while(j < IndexOfFiles.length && bFound == -1)
				{
					switch (strcmp(st1, IndexOfFiles[j].first.substr(0,1)))
					{
						case 0: bFound = true; break;
						case -1: bFound = false; break;
						case 1: ++j;
					}
				}
				if (bFound == -1 || bFound == false)
				{
					output();
					return;
				}
				//We have found words beginning with first letter of st
				bFound = false;
				switch (strcmp(st, IndexOfFiles[j].first))
				{
					case -1: 
					{
						if (IndexOfFiles[j].first.indexOf(st) == 0) //st = 'skin', IndexOfFiles[j].first = 'skinner'
							bFound = true;
						break;
					}
					case 0:
					{
						bFound = true;
						break;
					}
					case 1: //st = 'skinner', IndexOfFiles[j].first = 'skin'
					{
						switch (strcmp(st, IndexOfFiles[j].last))
						{
							case -1:
							case 0:
							{
								bFound = true;
								break;
							}
							case 1:
							{
								if (st.indexOf(IndexOfFiles[j].last) == 0) //st = 'skinner', IndexOfFiles[j].last = 'skin'
									bFound = true;
								break;
							}
						}
					}
				}
				if (!bFound)
				{
					output();
					return;
				}
				
				//Replace strings for search with pairs (string,index file)
				StringPairArray[i] = new Array();
				StringPairArray[i][0]=st;
				StringPairArray[i][1]=IndexOfFiles[j].fileName;
			}
			SearchResults=new Array();
			iStringToSearch=0;
			SearchForNextString();
		}
	
		//Downloads prefixes.txt
		//Fills IndexOfFiles array
		function GetIndex()
		{
			SearchResults=new Array();
			NextStringToSearch=0; //?
			var sURL = dirname() + "/de_search/prefixes.txt";
			request.open("GET", sURL);
			request.onreadystatechange = function() {
			  if (request.readyState == 4) 
				 if(request.status == 200 || request.status == 0) 
				 {
					var arPrefixes = (request.responseText).split(/\s*;\s*/);
					var j = 0;
					for (var i = 0; i + 2 < arPrefixes.length; i+=3)
					{
						IndexOfFiles[j] = new Object();
						IndexOfFiles[j].fileName = arPrefixes[i] + ".txt";
						IndexOfFiles[j].first = arPrefixes[i+1];
						IndexOfFiles[j].last = arPrefixes[i+2];
						++j;
					}
					AttachFilesToStrings();
				 }
			};
			request.send(null);
		}

function reverse(str) {
if(!str) return str;
return str.charAt(str.length-1) + reverse(str.substring(0,str.length-1));
}

function trimLeft(str) {
   for (var i=0; str.charAt(i) == ' '; i++);
   return str.substring(i, str.length);
}

function trimRight(str) {
   return reverse(trimLeft(reverse(str)));
}
 
function trim(str) {
   return trimRight(trimLeft(str));
}

function isEmpty(sToCheck) {
   var sTest;
   sTest = trim(sToCheck)
   if (sTest == null || sTest == "") {
      return true;
   }
   return false;
}
		
		function searchmain(str)
		{
			SearchResults=new Array();
			iStringToSearch=0;
			
			//Split the string into words
			var strs = str.split(/\s/g); 
			StringsForSearch = new Array();
			for (var i = 0; i < strs.length; ++i)
				if (!isEmpty(strs[i]))
					StringsForSearch.push(strs[i]);
			//Download index.txt asyncronously and fill array of indexes
			GetIndex();
						
			return 1;
		}
		
	var querySplitter = /\s+/;
	
	function performSearch(str)
	{
		var queryArray = trim(str).split(querySplitter);
		try
		{
			if (queryArray.length == 0 || queryArray[0] == '')
				document.getElementById("search_output").innerHTML = strSearchStringIsEmpty;
			else
				searchmain(str);
		}		
		catch(e)
		{
		}
	}
	
	function SubmitForm()	
	{     		
		var s = trim(document.getElementById('search').value).replace(/\r/g,'').replace(/\n/g,'').replace(/\t/g,' ').replace(/\u00A0/g,'');
		s = s.replace(/[,;]/g, ' ');
		document.getElementById("search_output").innerHTML = strSearchInProgress;
		performHighlight();
 		performSearch(s);
		return false;	
	}
	function max(a,b){
	return a>b?a:b;
}
function min(a,b){
	return a<b?a:b;
}
function getTextContentInner(el){
 if (ie)
 {
    if (el.nodeName == "#text")
      return el.nodeValue;
    if (ie9)
      return el.textContent;
    return el.innerText;
 }
 return el.textContent;
}
function getTextContent(el){
 var txt = getTextContentInner(el);
 return txt.replace(/\r/g,'').replace(/\n/g,'');
}
var de_hltag = "de_highlight";
function highlightElementsWithIndex(element, ndxFrom, ndxTo, highlightColor, highlightNum){
	if (ndxTo < 0){
		return 0;
	}
	var textcontent = getTextContent(element);
	if ((ndxFrom >= textcontent.length)){
		return 0;
	}
	if (element.nodeName == "#text"){
		var a0 = 0;
		var a1 = min(max(0, ndxFrom), textcontent.length);
		var a2 = min(max(0, ndxTo), textcontent.length);
		var a3 = textcontent.length;

		var textNodeBefore = document.createTextNode(textcontent.substring(a0, a1));
		var textNodeInner = document.createTextNode(textcontent.substring(a1, a2));
		var textNodeAfter = document.createTextNode(textcontent.substring(a2, a3));

		var italicNode1 = document.createElement('span');
		italicNode1.className = de_hltag + highlightNum;
		italicNode1.style.backgroundColor = highlightColor;
		italicNode1.appendChild(textNodeInner);

		var par = element.parentNode;
		var dt = 0;
		if (a0 != a1){
			par.insertBefore(textNodeBefore, element);
			++dt;
		}
		if (a1 != a2){
			par.insertBefore(italicNode1, element);
			++dt;
		}
		if (a2 != a3){
			par.insertBefore(textNodeAfter, element);
			++dt;
		}
		par.removeChild(element);
		return dt - 1;
	}
	var sum = 0;
	for (var i = 0;i < element.childNodes.length;i++){
		var curEl = element.childNodes[i]
		if (curEl.nodeName == "#comment")
		   continue;
		var sumAdd = getTextContent(curEl).length;
		i += highlightElementsWithIndex(curEl,ndxFrom - sum, ndxTo - sum, highlightColor, highlightNum);
		sum += sumAdd;
	}
/*
	if (sum != getTextContent(element).length){
		alert(sum);
		alert(getTextContent(element).length);
		console.log(element);
		var s = 'bad sequence: ';
		for (var i = 0;i < element.childNodes.length;i++){
			s += getTextContent(element.childNodes[i]);
		}
		s += '\n\n\n' + getTextContent(element);
		alert(s);
	}
*/
	return 0;
}
function highlightElements(element, str, highlightColor, highlightNum){
	var ndx = 0;
	var arr = new Array();
	var fullString = getTextContentInner(element);
	var fndx = 0;
	while ((fndx = fullString.toLowerCase().indexOf(str.toLowerCase(), fndx)) != -1){
		arr[ndx++] = fndx;
		fndx += str.length;
	}

	var nid = 0;
	var ncnt = 0;
        var curCh = '\0';
	for (var i = 0;i<fullString.length;i++){
                var curCh = fullString.charAt(i);
		if (curCh == '\r' || curCh == '\n'){
			++ncnt;
		}
		if (nid < ndx && arr[nid] == i){
			arr[nid] -= ncnt;
			++nid;
		}
	}
	if (ndx < 20)
		for (var i=0;i<ndx;i++)
			highlightElementsWithIndex(element,arr[i], arr[i]+str.length, highlightColor, highlightNum);
		
}
function removeHighlight(highlightColor, highlightNum)
{
	var hltags = document.getElementsByClassName('span',de_hltag + highlightNum);
	for (var i = 0; i < hltags.length; ++i)
	{
		var curEl = hltags[i];
		var parEl = curEl.parentNode;
		while (curEl.childNodes.length)
		{
			var curChild = curEl.childNodes[0];
			curEl.removeChild(curChild);
			parEl.insertBefore(curChild, curEl);
		}
		parEl.removeChild(curEl);
	}
}

var highlightColors = ['#ff0', '#0ff', '#f0f', '#0f0', '#09f', '#fc0', '#f66', '#cf3', '#ccc', '#cc3'];

function onDelayHighlight(){
	if (document.onDelayHighlightCount == null)
		document.onDelayHighlightCount = 0;
	++document.onDelayHighlightCount;
	setTimeout("onHighlight()", 500);
}

function onHighlight(){
	--document.onDelayHighlightCount;
	if (document.onDelayHighlightCount != 0){return;}
	if (document.onHighlightStarted) {return;}
	if (document.currentHighlighted == document.getElementById('search').value){return;}
	document.currentHighlighted = document.getElementById('search').value;
	document.onHighlightStarted = true;
	if (document.getElementById('search').onkeyup == null)
		document.getElementById('search').onkeyup = function(){ onDelayHighlight();return false;};
	if (document.getElementById('search').value != '')
	{
		var s = trim(document.getElementById('search').value).replace(/\r/g,'').replace(/\n/g,'').replace(/\t/g,' ').replace(/\u00A0/g,'');
		s = s.replace(/[,;]/g, ' ');
		var tempArray = trim(s).split(querySplitter);
		var strArray = new Array();
		for (var i = 0; i < tempArray.length; ++i)
		{
			try
			{
				if (tempArray[i].length > 0)
					strArray.push(tempArray[i]);
			}
			catch (e) {}
		}
		for(var i=0; i<strArray.length; i++)
		{
			if (document.currentHighlightedArray == null || document.currentHighlightedArray[i] != strArray[i]){
				removeHighlight(highlightColors[i % highlightColors.length], i);
				var element = document.getElementById('contentArea')
				var nextNode = element.nextSibling;
				var parentNode = element.parentNode;
				parentNode.removeChild(element);
				var elementClone = element.cloneNode(true);
				parentNode.insertBefore(elementClone, nextNode);
				highlightElements(element, strArray[i], highlightColors[i % highlightColors.length], i);
				parentNode.removeChild(elementClone);
				parentNode.insertBefore(element,nextNode);
			}
		}	
		for (var i = strArray.length; document.currentHighlightedArray != null && i < document.currentHighlightedArray.length;i++)
		{
			removeHighlight(highlightColors[i % highlightColors.length], i);
		}
		document.currentHighlightedArray = strArray;
	}
	else
	{
		for (var i = 0; document.currentHighlightedArray != null && i < document.currentHighlightedArray.length;i++)
		{
			removeHighlight(highlightColors[i % highlightColors.length], i);
		}
		document.currentHighlightedArray = null;
	}
	document.onHighlightStarted = false;
}
function createHighlightButton(){
	var b = document.getElementById('highlight_button');
	if (b == null)
	{
		var srchForm = document.getElementById('search_form');
		var srch = srchForm.getElementsByTagName('div')[0];
		srch.innerHTML += '<input type="button" id="highlight_button" value="Highlight" onclick="return onDelayHighlight()"/>';
	}
}	 

function performHighlight()
{
	onDelayHighlight();
}
