<?php
	//include all DAO files
	require_once('class/sql/Connection.class.php');
	require_once('class/sql/ConnectionFactory.class.php');
	require_once('class/sql/ConnectionProperty.class.php');
	require_once('class/sql/QueryExecutor.class.php');
	require_once('class/sql/Transaction.class.php');
	require_once('class/sql/SqlQuery.class.php');
	require_once('class/core/ArrayList.class.php');
	require_once('class/dao/DAOFactory.class.php');
 	
	require_once('class/dao/AgendamentoDAO.class.php');
	require_once('class/dto/Agendamento.class.php');
	require_once('class/mysql/AgendamentoMySqlDAO.class.php');
	require_once('class/mysql/ext/AgendamentoMySqlExtDAO.class.php');
	require_once('class/dao/AgendamentoServicoDAO.class.php');
	require_once('class/dto/AgendamentoServico.class.php');
	require_once('class/mysql/AgendamentoServicoMySqlDAO.class.php');
	require_once('class/mysql/ext/AgendamentoServicoMySqlExtDAO.class.php');
	require_once('class/dao/ClienteDAO.class.php');
	require_once('class/dto/Cliente.class.php');
	require_once('class/mysql/ClienteMySqlDAO.class.php');
	require_once('class/mysql/ext/ClienteMySqlExtDAO.class.php');
	require_once('class/dao/CompraDAO.class.php');
	require_once('class/dto/Compra.class.php');
	require_once('class/mysql/CompraMySqlDAO.class.php');
	require_once('class/mysql/ext/CompraMySqlExtDAO.class.php');
	require_once('class/dao/ConfiguracaoDAO.class.php');
	require_once('class/dto/Configuracao.class.php');
	require_once('class/mysql/ConfiguracaoMySqlDAO.class.php');
	require_once('class/mysql/ext/ConfiguracaoMySqlExtDAO.class.php');
	require_once('class/dao/DespesaDAO.class.php');
	require_once('class/dto/Despesa.class.php');
	require_once('class/mysql/DespesaMySqlDAO.class.php');
	require_once('class/mysql/ext/DespesaMySqlExtDAO.class.php');
	require_once('class/dao/FornecedorDAO.class.php');
	require_once('class/dto/Fornecedor.class.php');
	require_once('class/mysql/FornecedorMySqlDAO.class.php');
	require_once('class/mysql/ext/FornecedorMySqlExtDAO.class.php');
	require_once('class/dao/FuncionarioDAO.class.php');
	require_once('class/dto/Funcionario.class.php');
	require_once('class/mysql/FuncionarioMySqlDAO.class.php');
	require_once('class/mysql/ext/FuncionarioMySqlExtDAO.class.php');
	require_once('class/dao/ProdutoDAO.class.php');
	require_once('class/dto/Produto.class.php');
	require_once('class/mysql/ProdutoMySqlDAO.class.php');
	require_once('class/mysql/ext/ProdutoMySqlExtDAO.class.php');
	require_once('class/dao/ServicoDAO.class.php');
	require_once('class/dto/Servico.class.php');
	require_once('class/mysql/ServicoMySqlDAO.class.php');
	require_once('class/mysql/ext/ServicoMySqlExtDAO.class.php');
	require_once('class/dao/UtensilioDAO.class.php');
	require_once('class/dto/Utensilio.class.php');
	require_once('class/mysql/UtensilioMySqlDAO.class.php');
	require_once('class/mysql/ext/UtensilioMySqlExtDAO.class.php');

?>