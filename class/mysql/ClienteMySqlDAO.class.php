<?php
/**
 * Class that operate on table 'cliente'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2012-09-26 23:35
 */
class ClienteMySqlDAO implements ClienteDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return ClienteMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM cliente WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM cliente';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM cliente ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param cliente primary key
 	 */
	public function delete($id){
		$sql = 'DELETE FROM cliente WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param ClienteMySql cliente
 	 */
	public function insert($cliente){
		$sql = 'INSERT INTO cliente (nome, endereco, cpf, rg, nasc, telefone, celular, endereco_trabalho, telefone_trabalho, cabelo) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($cliente->nome);
		$sqlQuery->set($cliente->endereco);
		$sqlQuery->set($cliente->cpf);
		$sqlQuery->set($cliente->rg);
		$sqlQuery->set($cliente->nasc);
		$sqlQuery->set($cliente->telefone);
		$sqlQuery->set($cliente->celular);
		$sqlQuery->set($cliente->enderecoTrabalho);
		$sqlQuery->set($cliente->telefoneTrabalho);
		$sqlQuery->set($cliente->cabelo);

		$id = $this->executeInsert($sqlQuery);	
		$cliente->id = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param ClienteMySql cliente
 	 */
	public function update($cliente){
		$sql = 'UPDATE cliente SET nome = ?, endereco = ?, cpf = ?, rg = ?, nasc = ?, telefone = ?, celular = ?, endereco_trabalho = ?, telefone_trabalho = ?, cabelo = ? WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($cliente->nome);
		$sqlQuery->set($cliente->endereco);
		$sqlQuery->set($cliente->cpf);
		$sqlQuery->set($cliente->rg);
		$sqlQuery->set($cliente->nasc);
		$sqlQuery->set($cliente->telefone);
		$sqlQuery->set($cliente->celular);
		$sqlQuery->set($cliente->enderecoTrabalho);
		$sqlQuery->set($cliente->telefoneTrabalho);
		$sqlQuery->set($cliente->cabelo);

		$sqlQuery->setNumber($cliente->id);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM cliente';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByNome($value){
		$sql = 'SELECT * FROM cliente WHERE nome = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByEndereco($value){
		$sql = 'SELECT * FROM cliente WHERE endereco = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByCpf($value){
		$sql = 'SELECT * FROM cliente WHERE cpf = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByRg($value){
		$sql = 'SELECT * FROM cliente WHERE rg = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByNasc($value){
		$sql = 'SELECT * FROM cliente WHERE nasc = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByTelefone($value){
		$sql = 'SELECT * FROM cliente WHERE telefone = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByCelular($value){
		$sql = 'SELECT * FROM cliente WHERE celular = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByEnderecoTrabalho($value){
		$sql = 'SELECT * FROM cliente WHERE endereco_trabalho = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByTelefoneTrabalho($value){
		$sql = 'SELECT * FROM cliente WHERE telefone_trabalho = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByCabelo($value){
		$sql = 'SELECT * FROM cliente WHERE cabelo = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByNome($value){
		$sql = 'DELETE FROM cliente WHERE nome = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByEndereco($value){
		$sql = 'DELETE FROM cliente WHERE endereco = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByCpf($value){
		$sql = 'DELETE FROM cliente WHERE cpf = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByRg($value){
		$sql = 'DELETE FROM cliente WHERE rg = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByNasc($value){
		$sql = 'DELETE FROM cliente WHERE nasc = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByTelefone($value){
		$sql = 'DELETE FROM cliente WHERE telefone = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByCelular($value){
		$sql = 'DELETE FROM cliente WHERE celular = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByEnderecoTrabalho($value){
		$sql = 'DELETE FROM cliente WHERE endereco_trabalho = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByTelefoneTrabalho($value){
		$sql = 'DELETE FROM cliente WHERE telefone_trabalho = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByCabelo($value){
		$sql = 'DELETE FROM cliente WHERE cabelo = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return ClienteMySql 
	 */
	protected function readRow($row){
		$cliente = new Cliente();
		
		$cliente->id = $row['id'];
		$cliente->nome = $row['nome'];
		$cliente->endereco = $row['endereco'];
		$cliente->cpf = $row['cpf'];
		$cliente->rg = $row['rg'];
		$cliente->nasc = $row['nasc'];
		$cliente->telefone = $row['telefone'];
		$cliente->celular = $row['celular'];
		$cliente->enderecoTrabalho = $row['endereco_trabalho'];
		$cliente->telefoneTrabalho = $row['telefone_trabalho'];
		$cliente->cabelo = $row['cabelo'];

		return $cliente;
	}
	
	protected function getList($sqlQuery){
		$tab = QueryExecutor::execute($sqlQuery);
		$ret = array();
		for($i=0;$i<count($tab);$i++){
			$ret[$i] = $this->readRow($tab[$i]);
		}
		return $ret;
	}
	
	/**
	 * Get row
	 *
	 * @return ClienteMySql 
	 */
	protected function getRow($sqlQuery){
		$tab = QueryExecutor::execute($sqlQuery);
		if(count($tab)==0){
			return null;
		}
		return $this->readRow($tab[0]);		
	}
	
	/**
	 * Execute sql query
	 */
	protected function execute($sqlQuery){
		return QueryExecutor::execute($sqlQuery);
	}
	
		
	/**
	 * Execute sql query
	 */
	protected function executeUpdate($sqlQuery){
		return QueryExecutor::executeUpdate($sqlQuery);
	}

	/**
	 * Query for one row and one column
	 */
	protected function querySingleResult($sqlQuery){
		return QueryExecutor::queryForString($sqlQuery);
	}

	/**
	 * Insert row to table
	 */
	protected function executeInsert($sqlQuery){
		return QueryExecutor::executeInsert($sqlQuery);
	}
}
?>