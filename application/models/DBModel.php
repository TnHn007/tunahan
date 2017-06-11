<?PHP

class DBModel extends CI_Model
{

    var $title = '';
    var $content = '';
    var $date = '';

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
        $this->load->database();
    }
    function profil_resim()
    {
        $this->db->select('resim');
        $this->db->from('profil');
        $this->db->where('durum', 1);
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return FALSE;
        }
    }

    function adsoyad()
    {
        $this->db->select('*');
        $this->db->from('profil');
        $this->db->where('durum', 1);
        $this->db->limit('1');

        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return FALSE;
        }
    }

    function hakkimda()
    {
        $this->db->select('*');
        $this->db->from('hakkimda');
        $this->db->where('durum', 1);
        $this->db->limit('1');


        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return FALSE;
        }
    }

    // Yeneklerim
    function yeteneklerim()
    {
        $this->db->select('*');
        $this->db->from('yetenekler');
        $this->db->where('durum', 1);
        $this->db->order_by('yetenekdegeri',"desc");

        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return FALSE;
        }
    }
    // Mezuniyet
    function mezuniyet()
    {
        $this->db->select('*');
        $this->db->from('egitim');
        $this->db->where('durum', 1);
       // $this->db->order_by('yetenekdegeri',"desc");

        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return FALSE;
        }
    }
    // Projelerim
    function Projelerim()
    {
        $this->db->select('*');
        $this->db->from('projelerim');
        $this->db->where('durum', 1);
        // $this->db->order_by('yetenekdegeri',"desc");

        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return FALSE;
        }
    }

    // BlogList
    function Bloglist()
    {
        $this->db->select('*');
        $this->db->from('blog');
        $this->db->where('durum', 1);
        // $this->db->order_by('yetenekdegeri',"desc");

        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return FALSE;
        }
    }


}

?>