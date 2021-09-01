<?php
Class MPelayaran extends CI_Model{

    function count($where){
        return $this->db->select("kode_pelayaran")
            ->where($where)
            ->count();
    }

    function get($where, $sidx, $sord, $limit, $start){
        return $this->db->order_by($sidx, $sord)
            ->limit($limit, $start)
            ->get_where("mpelayaran", $where);
    }
}
?>
