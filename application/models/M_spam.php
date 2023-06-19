<?php
    defined('BASEPATH') or exit('No direct script access allowed');

    class M_spam extends CI_Model
    {
        function hapus_antrian($kode_dokter,$tanggal,$nomr1,$nomr2)
        {
            $query = $this->db->query("DELETE FROM ANTRIAN WHERE Dokter='$kode_dokter' AND Tanggal='$tanggal' and No_MR between '$nomr1' and '$nomr2'");
            return $query;
        }
        function hapus_pendaftaran($kode_dokter,$tanggal,$nomr1,$nomr2)
        {
            $query = $this->db->query("DELETE FROM PENDAFTARAN WHERE Kode_Dokter='$kode_dokter' AND Tanggal='$tanggal' and No_MR between '$nomr1' and '$nomr2'");
            return $query;
        }
        // function tampil_jurusan($user)
        function tampil_antrian($kode_dokter,$tanggal,$nomr1,$nomr2)
        {
            $query = $this->db->query("SELECT A.*, B.* FROM 
                                        ANTRIAN A left join REGISTER_PASIEN B on A.No_MR=B.No_MR 
                                        WHERE A.Dokter='$kode_dokter' AND A.Tanggal='$tanggal' and A.No_MR between '$nomr1' and '$nomr2'");
            return $query;
        }
        // {
        //     $this->db->order_by('nama_jurusan', 'ASC');
        //     return $this->db->get($user);
        // }
       
    }
