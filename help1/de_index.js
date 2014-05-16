drex_node_keywords = [2,3,7,9,11,12,4,8,6,5,10,2,1];
drex_node_keywords_start = [0,11,11,11,11,11,11,11,11,11,11,11,11,11,11,11,11,11,11,13,13,13,13,13,13,13]; //length == drex.nodes_count;
drex_node_keywords_end = [11,11,11,11,11,11,11,11,11,11,11,11,11,11,11,11,11,11,13,13,13,13,13,13,13,13]; //length == drex.nodes_count;

drex_keyword_names = ["<NEW K... Advanced License is required!","ic... Advanced License is required!","ed... Advanced License is required!","ic... Advanced License is required!","det... Advanced License is required!","rec... Advanced License is required!","n... Advanced License is required!","<NEW K... Advanced License is required!","navigat... Advanced License is required!","add... Advanced License is required!","view d... Advanced License is required!","add ... Advanced License is required!","ad... Advanced License is required!"];
drex_keyword_child_start = [1,13,13,13,13,13,13,13,13,13,13,13,13];
drex_keyword_child_end = [13,13,13,13,13,13,13,13,13,13,13,13,13];
drex_keyword_parent = new Array();
drex_keyword_deep = new Array();

drex_keyword_nodes = new Array(drex_node_keywords.length);
drex_keyword_nodes_start = new Array(drex_keyword_names.length);
drex_keyword_nodes_end = new Array(drex_keyword_names.length);

function drex_keyword(ndx)
{
  this.keyword_index = ndx;
  this.title = drex_keyword_names[this.keyword_index];
  this.deep = drex_keyword_deep[this.keyword_index];

  this.children = function(){
	var result = new Array(); 
	for (var i = drex_keyword_child_start[this.keyword_index]; i < drex_keyword_child_end[this.keyword_index]; i++) 
	  result.push(new drex_keyword(i));
	return result;
  };
  this.childrenSorted = function(){
	var result = this.children();
	result.sort(function(a,b){
	  if (a.title.toLowerCase() < b.title.toLowerCase())
		return -1;
	  if (a.title.toLowerCase() > b.title.toLowerCase())
	    return 1;
	  return 0;
	});
	return result;
  };
  this.childrenCount = function(){
	if (drex_keyword_child_start[this.keyword_index] >= drex_keyword_child_end[this.keyword_index])
	  return 0;
	return drex_keyword_child_start[this.keyword_index] - drex_keyword_child_end[this.keyword_index];
  }
  this.parent = function(){
	if (drex_keyword_parent[this.keyword_index] == -1)
		return null;
	return new drex_keyword(drex_keyword_parent[this.keyword_index]);
  };
  this.nodes = function(){
	var result = new Array(); 
 	for (var i = drex_keyword_nodes_start[this.keyword_index]; i < drex_keyword_nodes_end[this.keyword_index]; i++) 
	  result.push(new drex_node(drex_keyword_nodes[i]));
	return result;	
  };
  this.isActive = function(){
    return this.keyword_index != 0;
  }
};

//keyword tree structure
drex_keyword_parent[0] = -1;
drex_keyword_deep[0] = 0;
for (var i in drex_keyword_names)
{
  for (var j = drex_keyword_child_start[i]; j < drex_keyword_child_end[i]; j++) 
  {
    drex_keyword_parent[j] = i;
    drex_keyword_deep[j] = drex_keyword_deep[i] + 1;
  }
}

drex.keywords_count = drex_keyword_names.length;


//making drex_keyword_nodes from drex_node_keywords
var temp_drex_keyword_write_pos = new Array(drex.keywords_count + 1);

for (var i = 0; i < temp_drex_keyword_write_pos.length; i++)
  temp_drex_keyword_write_pos[i] = 0;
for (var i in drex_node_keywords)
  ++temp_drex_keyword_write_pos[drex_node_keywords[i] + 1];
for (var i = 1; i < temp_drex_keyword_write_pos.length; i++)
  temp_drex_keyword_write_pos[i] += temp_drex_keyword_write_pos[i-1];
	
for (var i = 0; i < drex.keywords_count; i++)
  drex_keyword_nodes_start[i] = temp_drex_keyword_write_pos[i];
	
for (var i = 0; i < drex.nodes_count; i++)
  for (var j = drex_node_keywords_start[i]; j < drex_node_keywords_end[i]; j++)
  {
	var kw = drex_node_keywords[j];
	drex_keyword_nodes[temp_drex_keyword_write_pos[kw]] = i;
	++temp_drex_keyword_write_pos[kw];	
  }		
for (var i = 0; i < drex.keywords_count; i++)
	drex_keyword_nodes_end[i] = temp_drex_keyword_write_pos[i];


drex_node.prototype.keywords = function(){
	var result = new Array(); 
 	for (var i = drex_node_keywords_start[this.node_index]; i < drex_node_keywords_end[this.node_index]; i++) 
	  result.push(new drex_keyword(drex_node_keywords[i]));
	return result;	
}

//interface
drex.root_keyword = function()
{
  return new drex_keyword(0);
}