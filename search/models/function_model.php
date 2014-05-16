<? php
class function_model extends Model{

	function Function_model()
	{
		parent :: Model();	
	}
	
	fucntion getSearchResults ($function_name, $discription = TRUE)
	{
		$this->db->like('function_name', $function_name);
		$this->db->orderby ('function_name');
		$query = $this->db->get('functions');
			if ($query->num_rows()>0){
			$output = '<ul>';
			foreach ($query->result() as $function_info){
				if($discription){
					$output .= '<li><strong>' .$function_info->name . '</strong><br />';
					$output .= $function_info_.info->function_discription .='</li>';
				} else {
						$output .= <li>' . $function_info->function_name .'</li>';
				}
			}		
			$output .= '<?ul>';
			return $output
	}else {
			return '<p> Sorry No results returned.</p>;
	
	
	
}
?>