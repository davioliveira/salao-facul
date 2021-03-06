<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2012-10-13 19:48
 */
interface AgendamentoServicoDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return AgendamentoServico 
	 */
	public function load($idAgendamento, $idServico);

	/**
	 * Get all records from table
	 */
	public function queryAll();
	
	
	public function queryByAgendamento($id_agendamento);
	
	/**
	 * Get all records from table ordered by field
	 * @Param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn);
	
	/**
 	 * Delete record from table
 	 * @param agendamentoServico primary key
 	 */
	public function delete($idAgendamento, $idServico);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param AgendamentoServico agendamentoServico
 	 */
	public function insert($agendamentoServico);
	
	/**
 	 * Update record in table
 	 *
 	 * @param AgendamentoServico agendamentoServico
 	 */
	public function update($agendamentoServico);	

	/**
	 * Delete all rows
	 */
	public function clean();



}
?>