<?php
	require_once('include_dao.php');
	require_once('status.php');

	$transaction = new Transaction();

	$user = (object)$_POST;
	
	try {
		if (is_numeric($user->id))
			DAOFactory::getClienteDAO()->update($user);
		else
			DAOFactory::getClienteDAO()->insert($user);
		$transaction->commit();
		echo json_encode(new Status('ok', $user->nome .' salvo com sucesso!'));
	}catch(exception $e) {
		$transaction->rollback();
		echo json_encode(new Status('erro', $e->getMessage()));
	}
	
?>