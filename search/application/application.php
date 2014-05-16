<? php
class Application extends controller{

	function Application ()
	{
		parent::controller();
		$this->load->model('function_moedl');
		
	}
	
	function index()
	{
		$data['title'] = "Code Ignitor Sample Application";
		$this->load->view('application/index',$data);
	}
	
	function search()
	{
		$data['title'] = "Code Ignitor Seaech Results";
		$funaction_name = $this->input->post->('function_name');
		$data['Search_Results'] = $this->function_model->getSearchResults($function_name);
		$this->load->view('application/search',$data);

	}
	
}
?>
