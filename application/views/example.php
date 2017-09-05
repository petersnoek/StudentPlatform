<html>
	<head>
		<meta http-equiv="refresh" content="<?= $this->session->flashdata('seconds_redirect');?>;url=<?= $this->session->set_flashdata('url_redirect')?>" />
		<title>Error!</title>
	</head>
	<body>
		<?= $this->session->flashdata('error_id');?>
	</body>
</html>
