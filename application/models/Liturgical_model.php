<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Liturgical_model extends CI_Model {

    var $table = 'liturgictimes';
    var $column_order = array('usr_username', 'usr_first_name','rls_name',null,null); //set column field database for datatable orderable
    var $column_search = array('usr_username', 'usr_first_name','rls_name'); //set column field database for datatable searchable just firstname , lastname , address are searchable
    var $order = array('a.usr_id' => 'desc'); // default order

    public function __construct(){
        parent::__construct();
    }

    private function _get_datatables_query(){
        $this->db->from($this->table);
        foreach ($this->column_search as $item){
            if($_POST['search']['value']) {
                if($i===0){
                    $this->db->group_start(); // open bracket. query Where with OR clause better with bracket. because maybe can combine with other WHERE with AND.
                    $this->db->like($item, $_POST['search']['value']);
                } else {
                    $this->db->or_like($item, $_POST['search']['value']);
                }
                if(count($this->column_search) - 1 == $i) //last loop
                    $this->db->group_end(); //close bracket
            }
            $i++;
        }
        if(isset($_POST['order'])){
            $this->db->order_by($this->column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
        }
        else if(isset($this->order)) {
            $order = $this->order;
            $this->db->order_by(key($order), $order[key($order)]);
        }
    }

    function get_datatables(){
        $this->_get_datatables_query();
        if($_POST['length'] != -1)
            $this->db->limit($_POST['length'], $_POST['start']);
        $query = $this->db->get();
        return $query->result_array();
    }

    function count_filtered(){
        $this->_get_datatables_query();
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function count_all(){
        $this->db->from($this->table);
        return $this->db->count_all_results();
    }

    public function get_all() {
        $this->db->from($this->table);
        $query = $this->db->get();
        return $query->result_array();
    }

    public function get( $value ) {
        $this->db->from($this->table);
        $this->db->group_start()->or_where(['ltt_id' => $value, 'ltt_name' => $value])->group_end();
        $query = $this->db->get();
        return $query->row_array();
    }
    public function set( $data ) {
        return $this->_set($this->table, $data);
    }

    public function update( $id, $data ) {
        return $this->_update($this->table, ['ltt_id' => $id], $data);
    }

    public function delete( $id ) {
        return $this->_delete($this->table, ['ltt_id' => $id]);
    }
    
    public function get_all_about()
    {
     $ltall=$this->db->get('liturgictimes');
         return $ltall;
    }
}


