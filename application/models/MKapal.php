<?php
class MKapal extends CI_Model
{
    public function getAll($limit, $sidx, $sord)
    {
        return $this->db->select('kode_pelayaran,nama_pelayaran,status,thnberdiri,modified_on')
            ->limit($limit)
            ->order_by($sidx, $sord)
            ->get('mpelayaran')
            ->result();
    }

    public function count()
    {
        return $this->db->select("kode_pelayaran")
            ->get("mpelayaran")
            ->count();
    }

    public function get($where, $sidx = "kode_pelayaran", $sord = "ASC", $limit, $start)
    {   
        return $this->db->where($where)
            ->order_by($sidx, $sord)
            ->limit($limit, $start)
            ->get('mpelayaran');
    }

    public function getAlls()
    {
        $data = [];
        $q    = $this->db->order_by("kode_pelayaran", "asc")
            ->get("mpelayaran");
            
        if ($q->num_rows() > 0) {
            foreach ($q->result_array() as $row) {
                $data[] = $row;
            }
        }
        $q->free_result();
        
        return $data;
    }

    public function gridData($sidx, $sord, $start, $limit)
    {
        $data = [];
        $q = $this->db
            ->order_by($sidx, $sord)
            ->limit($limit, $start)
            ->get("mpelayaran");
        if ($q->num_rows() > 0) {
            foreach ($q->result_array() as $row) {
                $data[] = $row;
            }
        }

        $q->free_result();

        return $data;
    }
}
