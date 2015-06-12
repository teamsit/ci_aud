  <?php
 class aud_model extends CI_Model
{
		public function __construct()
		{
			parent::__construct();
			//$this->load->database();
		}
		
		public function insertdata()
		{
		
			$data=array
					   (
					   'title' => $this->input->post('name'),
					   'content' => $this->input->post('content'),
					   );
		   
		   $this->db->insert('article',$data);
		}
		
		public function select()
		{
			$query=$this->db->get('article');
			return $query->result();
		}

		public function get_data($user_id)
		{
			$this->db->where('id',$user_id);
			$result = $this->db->get('article');
			return $result->row_array();
		}
		   
}
?>