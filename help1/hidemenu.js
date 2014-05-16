function getCSSRule(ruleName)
{
	var cssRule;
	for (var i = 0; i < document.styleSheets.length; i++)
	{
		try
		{
			var ss = document.styleSheets[i].cssRules || document.styleSheets[i].rules;
			for (var j = 0; j < ss.length; j++)
				if (ss[j].selectorText == ruleName)
					return ss[j];
		}
		catch(e)
		{
		}
	}
	return false;
}
function addCSSRule(ruleName)
{
	if (!getCSSRule(ruleName))
	{
		for (var i = 0; i < document.styleSheets.length; i++)
		{
			try
			{
				var ss = document.styleSheets[i];
				if (ss.addRule)
					ss.addRule(ruleName, null, 0)
				else
					ss.insertRule(ruleName + '{}', 0);
				return getCSSRule(ruleName);
			}
			catch(e)
			{
			}
		}
	}
	return getCSSRule(ruleName);
} 
addCSSRule('.noscript').style.display = 'none';