
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mkursus extends CI_Model {

    
    public function __construct()
    {
        parent::__construct();
        //Do your magic here
    }

    public function getKursus()
    {
        $this->db->select('*');
        $this->db->from('kursus');
        $query = $this->db->get();

        return $query->result();
    }

    public function getkbyid($id)
    {
        $this->db->select('*');
        $this->db->from('kursus');
        $this->db->where('kid',$id);
        $query = $this->db->get();

        return $query->result();
    }

    public function kaddProcess()
    {
        $data = array(

            'tajukkursus'=>$this->input->post('tajukkursus'),
            'tmula'=>$this->input->post('tmula'),
            'takhir'=>$this->input->post('takhir'),
            'tempat'=>$this->input->post('tempat'),
            'tahun'=>$this->input->post('tahun'),
            'hari'=>$this->input->post('hari')
        );

        return $this->db->insert('kursus',$data);
    }

    public function addUsers($data='')
    {
        $data = array(

            'nobadan'=>$this->input->post('nobadan'),
            'gambar'=>$data,
            'nama'=>$this->input->post('nama'),
            'nokp'=>$this->input->post('nokp'),
            'jawatan'=>$this->input->post('jawatan'),
            'gredjawatan'=>$this->input->post('gredjawatan'),
            'unitsokongan'=>$this->input->post('unitsokongan'),
            'groupUnit'=>$this->input->post('groupUnit')

        );

        return $this->db->insert('usersbomba',$data);
    }

    public function getUsers()
    {
        $this->db->select('*');
        $this->db->from('usersbomba');
        $query = $this->db->get();

        return $query->result();
    }

    public function getUsersbyid($id)
    {
        $this->db->select('*');
        $this->db->from('usersbomba');
        $this->db->where('id', $id);
        $query = $this->db->get();

        return $query->result();
    }

    public function updateuserp($data="", $context, $id)
    {
        $context = array(

            'nobadan'=>$this->input->post('nobadan'),
            'gambar'=>$data,
            'nama'=>$this->input->post('nama'),
            'nokp'=>$this->input->post('nokp'),
            'jawatan'=>$this->input->post('jawatan'),
            'gredjawatan'=>$this->input->post('gredjawatan'),
            'unitsokongan'=>$this->input->post('unitsokongan'),
            'groupUnit'=>$this->input->post('groupUnit')

        );

        $this->db->where('id', $id);
        $this->db->update('usersbomba',$context);
      
    }


    public function userInsertK($k)
    {
        
        $z = 0;
        $data=array(
            'userid'=> $k,
            'kursusid' => $this->input->post('hiddenid'),
            'one' => $z,
            'two' => $z,
            'three' => $z,
            'four' => $z,
            'five' => $z,
            'six' => $z,
            'seven' => $z,
            'eight' => $z,
         );

        //Insert the second stage details for your employer into database.

        $this->db->insert('kursusattn', $data);
    
    }

    public function userkursusfind($i, $id)
    {
      
        $this->db->select('*');
        $this->db->from('usersbomba');
        $this->db->join('kursusattn','kursusattn.userid=usersbomba.id','left');
        $this->db->where('usersbomba.nobadan', $i);
        $this->db->where('kursusattn.kursusid', $id);

        $query = $this->db->get();
        return $query->result(); 
    }

    public function kehadiranset($id, $h)
    {
        
        switch ($h) {
            case '1':
                $data = array(
                    'atid'=>$id,
                    'one'=>1,
                );
    
                $this->db->where('atid', $id);
                $this->db->update('kursusattn',$data); 
                break;

            case '2':
                $data = array(
                    'atid'=>$id,
                    'two'=>1,
                );
    
                $this->db->where('atid', $id);
                $this->db->update('kursusattn',$data); 
                break;
            case '3':
                $data = array(
                    'atid'=>$id,
                    'three'=>1,
                );
        
                $this->db->where('atid', $id);
                $this->db->update('kursusattn',$data); 
                 break;
            case '4':
                $data = array(
                    'atid'=>$id,
                    'four'=>1,
                );
            
                $this->db->where('atid', $id);
                $this->db->update('kursusattn',$data); 
                break;
            case '5':
                $data = array(
                    'atid'=>$id,
                    'five'=>1,
                );
                
                $this->db->where('atid', $id);
                $this->db->update('kursusattn',$data); 
                break;
            case '6':
                $data = array(
                    'atid'=>$id,
                    'six'=>1,
                );
                    
                $this->db->where('atid', $id);
                $this->db->update('kursusattn',$data); 
                break;
            case '7':
                $data = array(
                    'atid'=>$id,
                    'seven'=>1,
                );
                        
                $this->db->where('atid', $id);
                $this->db->update('kursusattn',$data); 
                break;
            case '8':
                $data = array(
                    'atid'=>$id,
                    'eight'=>1,
                );
                        
                $this->db->where('atid', $id);
                $this->db->update('kursusattn',$data); 
                break;
                
            
            default:
                # code...
                break;
        }

    }

    public function kemaskiniKursus()
    {
        //SELECT *, SUM(one+two+three+four+five+six+seven+eight) as con FROM kursusattn
        //LEFT JOIN usersbomba ON usersbomba.id = kursusattn.userid
        //GROUP by usersbomba.id

        $this->db->select('*,SUM(one+two+three+four+five+six+seven+eight) as totalcome');
        $this->db->from('kursusattn');
        $this->db->join('usersbomba','usersbomba.id=kursusattn.userid','right');
        $this->db->group_by('usersbomba.id');
 
        $query = $this->db->get();
        return $query->result(); 
    }

    public function kursusChecker($id)
    {
        //SELECT * FROM kursus LEFT JOIN kursusattn on kursusattn.kursusid=kursus.kid LEFT JOIN usersbomba on kursusattn.userid = usersbomba.id WHERE kursus.kid=1

        $this->db->select('*');
        $this->db->from('kursus');
        $this->db->join('kursusattn','kursusattn.kursusid=kursus.kid');
        $this->db->join('usersbomba','kursusattn.userid = usersbomba.id');
        $this->db->where('kursus.kid',$id);

        $query = $this->db->get();

        return $query->result();


    }
    

}

/* End of file Mkursus.php */
