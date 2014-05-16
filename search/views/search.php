<? php
$this->load->view("header");
?>

	<h2><?= $title;?></h2>
	
	<div id="function_discription">
	<?= $search_results;?>
	</div>

<? php
$this->load->view("footer")