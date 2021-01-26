<?php
  defined('BASEPATH') or exit ('No Direct Script Access Allowed')

    /**
     *
     */
    class M_perpus extends CI_Model
    {

      function edit_data($where, $table)
      {
        return $this->db->get_where($table, $where);
      }

      function get_data($table)
      {
        return $this->db->get($table);
      }

      function insert_data($data,$table)
      {
        $this->db->insert($data,$table);
      }

      function update_data($where,$data,$table)
      {
        $this->db->where($where);
        $this->db->update($table,$data);
      }

      function delete_data($where,$table)
      {
        $this->db->where($where);
        $this->db->delete($table);
      }

      function kode_otomatis()
      {
        $this->db->select($table);
        $this->db->order_by($table);
        $this->db->limit($table);
        $query = $this->db->get($table);

        if($query->num_row()<>0){
          
        }
      }
    }

?>
