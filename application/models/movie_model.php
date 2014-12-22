<?php


class Movie_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	
	//movie page show functionssss
	function movie_table($selected_movie_id=''){//movie table ar sob
		$sql = "select * from movie where mov_id = '$selected_movie_id'";
		$query=$this->db->query($sql);
		return $query->row();		
	}
	function movie_dir_table($selected_movie_id=''){//dir name shudhu
		$sql="select people_id,people_name from people where people_id=(select p_id from mov_dir where m_id='$selected_movie_id')";
		$query=$this->db->query($sql);
		return $query->row();	
		
	}
	function movie_genre_table($selected_movie_id=''){//genre namessss total string
		$sql="select genre from mov_genre where m_id='$selected_movie_id'";
		$query=$this->db->query($sql);
		return $query->row();			
	}
    
	function movie_comment_table($selected_movie_id=''){//commentsssss
		$sql = "select comment_time,comment,user_name from mov_comment inner join user on mov_comment.u_id=user.user_id where m_id = '$selected_movie_id' order by comment_time ";
		$query=$this->db->query($sql);
		return $query->result();		
	}
	function movie_award_table($selected_movie_id=''){
		$sql = "select award,award_year from mov_award where m_id = '$selected_movie_id'";
		$query=$this->db->query($sql);
		return $query->result();			
	}
    function movie_cast_table($selected_movie_id=''){//castsss
		$sql = "select people_id,people_name from mov_cast inner join people on mov_cast.p_id=people.people_id where m_id = '$selected_movie_id'";
		$query=$this->db->query($sql);
		return $query->result();		
	}
	//movie page show functionssss endssss
	
	
	//top movies
	function top_movies_table(){
		$sql="select * from movie where datediff(curdate(),released)>=0 order by (rating/rate_number) desc";
		$query=$this->db->query($sql);
		return $query->result();		
	}
	//top movies ends here
	
	
	
	//login starts
	function signup_checkup_table(){
		$sql="select user_name,email from user where user_name = '$_POST[user_name]' or email='$_POST[email]'";
		$query=$this->db->query($sql);
		return $query->num_rows();		
	}
	function user_sign_up_table(){
		$sql="insert into user(user_name,password,email,role) values('$_POST[user_name]','$_POST[password]','$_POST[email]',1)";
		$query=$this->db->query($sql);		
	}
	//user login checkup
	function login_checkup(){
		$sql = "select * from user where user_name = '$_POST[user_name]' and password='$_POST[password]'";
		$query=$this->db->query($sql);
		return $query->row_array();		
	}
	//login ends
	
	
	//list starts
	
	//box office means top 10 recents
	function top_box_office_table(){
		$sql="select * from movie where datediff(curdate(),released)>=0 order by rating desc,released desc limit 10";
		$query=$this->db->query($sql);
		return $query->result();		
	}	
	function coming_soon_table(){
		$sql="select * from movie where datediff(released,curdate())>0 order by rating desc limit 10";
		$query=$this->db->query($sql);
		return $query->result();
		
	}
	function this_year_table(){
		$sql="select * from movie where extract(year from released)=extract(year from curdate())";
		$query=$this->db->query($sql);
		return $query->result();		
	}
    
    function user_favourite_table($user_id=''){
		$sql = "select * from movie inner join favourite on movie.mov_id=favourite.m_id where favourite.u_id='$user_id'";
		$query=$this->db->query($sql);
		return $query->result();		
	}
	
	//list ends
	
	//insertions startsssss
	function movie_check_table(){ 
		$sql="select count(*) from (select mov_name,released from movie where mov_name='$_POST[mov_name]' and released = '$_POST[released]'";
		$query=$this->db->query($sql);
		return $query->result();		
	}
	
	function movie_table_insert($timestamp_m_id=''){
	   $movie_story=addslashes($_POST['storyline']);
		$sql="insert into movie(mov_id,mov_name,mov_length,released,image,trailer,storyline)
values('$timestamp_m_id','$_POST[mov_name]','$_POST[mov_length]','$_POST[released]','$_POST[image]','$_POST[trailer]','$movie_story')";
		$query=$this->db->query($sql);
		
	}
	
	function  dir_insert($timestamp_p_id=''){
		$sql="insert into people(people_id,people_name)
values('$timestamp_p_id','$_POST[dir_name]')";
		$query=$this->db->query($sql);
		
		
	}
    
    function cast_insert($timestamp_p_id=''){
		$sql="insert into people(people_id,people_name)
values('$timestamp_p_id','$_POST[cast_name]')";
		$query=$this->db->query($sql);
		
		
	}
	function movie_dir_insert($timestamp_m_id='',$timestamp_p_id=''){
		$sql="insert into mov_dir(m_id,p_id)
values('$timestamp_m_id','$timestamp_p_id')";
		$query=$this->db->query($sql);
		
		
	}
	function movie_cast_insert($timestamp_m_id='',$timestamp_p_id=''){
		$sql="insert into mov_cast(m_id,p_id)
values('$timestamp_m_id','$timestamp_p_id')";
		$query=$this->db->query($sql);
		
	}
	function movie_comment_insert($movie_id='',$user_id=''){
	   $user_comment=addslashes($_POST['comment']);
		$sql="insert into mov_comment(m_id,comment,u_id)
values('$movie_id','$user_comment','$user_id')";
		$query=$this->db->query($sql);
		
	
	}
	function movie_award_insert($timestamp_m_id=''){
		$sql="insert into movie(m_id,award,award_year)
values('$timestamp_m_id','$_POST[award]','$_POST[award_year]')";
		$query=$this->db->query($sql);
		
	}
	

	function movie_genre_insert($timestamp_m_id=''){
		$sql="insert into mov_genre(m_id,genre)values('$timestamp_m_id','$_POST[genre]')";
		$query=$this->db->query($sql);
	}
	

	function people_award_insert($timestamp_p_id=''){
		$sql="insert into people_award(p_id,award,award_year)
svalues('$timestamp_p_id','$_POST[award]','$_POST[award_year]')";
		$query=$this->db->query($sql);
	}
    
    function user_rate_insert($para_mov_id='',$para_user_id='',$para_rate=''){
		$sql="insert into user_rate(m_id,u_id,check_rate)
values('$para_mov_id','$para_user_id','$para_rate')";
		$query=$this->db->query($sql);		
	}
    
    function rating_update($para_mov_id='',$rating_given='')
    {
        $sql="update movie set rating=rating+'$rating_given', rate_number=rate_number+1 where mov_id='$para_mov_id'";
		$query=$this->db->query($sql);	
    }
	//insertion complete
	
	function user_rate_check($para_mov_id='',$para_user_id=''){
		$sql="select * from user_rate where m_id='$para_mov_id' and u_id='$para_user_id'";
		$query=$this->db->query($sql);
        if($query->num_rows()<=0)
            return 'undefined';
        else
		  return $query->row();		
	}
    
    function user_fav_check($para_mov_id='',$para_user_id=''){
		$sql="select * from favourite where m_id='$para_mov_id' and u_id='$para_user_id'";
		$query=$this->db->query($sql);
        if($query->num_rows()<=0)
            return 'undefined';
        else
		  return $query->row();		
	}
    
    function user_fav_insert($para_mov_id='',$para_user_id=''){
		$sql="insert into favourite(m_id,u_id)
values('$para_mov_id','$para_user_id')";
		$query=$this->db->query($sql);		
	}
    
    //people info starts here
    function people_table_all($selected_people_id){//info only from people_table
        $sql="select * from people where people_id='$selected_people_id'";
		$query=$this->db->query($sql);
		return $query->row();  
    }
    function people_directed($selected_people_id){//oi person ar directed movie gular nam
        $sql="select * from movie where mov_id=(select m_id from mov_dir where p_id='$selected_people_id')";
		$query=$this->db->query($sql);
		return $query->result();          
    }
    
    function people_acted($selected_people_id){//oi person ar acted movie gular nam
        $sql="select * from movie where mov_id=(select m_id from mov_cast where p_id='$selected_people_id')";
		$query=$this->db->query($sql);
		return $query->result();          
    }
    function people_award_name($selected_people_id){
        $sql="select award,award_year from people_award where p_id='$selected_people_id'";
		$query=$this->db->query($sql);
		return $query->result();       
    }
    
    function search_movie($search_info){
        $sql="select * from movie where mov_name like \"%$search_info%\"";
		$query=$this->db->query($sql);
		return $query->result();       
    }
    function search_people($search_info){
        $sql="select * from people where people_name like \"%$search_info%\"";
		$query=$this->db->query($sql);
		return $query->result();       
    }
}
?>
