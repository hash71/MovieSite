<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
    var $timestamp_u_id,$timestamp_m_id;
    
	public function __construct()
	{
	   parent::__construct();
		$this->load->model('movie_model');
		$this->load->library('kochu_session');
	}
	
	public function index($page='mainpage')
	{
        /*if ( ! file_exists('pages'.$page.'.php'))
        {
            // Whoops, we don't have a page for that!
	       	show_404();
        }*/
		
		$this->load->library( 'kochu_session' );
        
        $data['title'] = ucfirst($page); // Capitalize the first letter
        
        //end here
		
        
        $power_value = $this->kochu_session->get( 'power' );
		$data['session_user_name']=$this->kochu_session->get( 'session_user' );
		if($power_value==1){//registered user
  		$this->load->view('templates/user/header',$data);
				
		}
		else if($power_value==2){// admin 
				$this->load->view('templates/admin/header',$data);
		}
        else
			$this->load->view('templates/header',$data);
		$this->load->view('pages/'.$page, $data);
        $this->load->view('templates/footer');
	}
    
    public function loginpage()
    {
        $data['title']='LoginPage';
        $this->load->view('templates/header',$data);
        $this->load->view('login');
        $this->load->view('templates/footer');
    }
    
    public function registerpage($val="")
    {
        $data['title']='RegisterPage';
        $data['msg']=$val;
        $this->load->view('templates/header',$data);
        $this->load->view('register',$data);
        $this->load->view('templates/footer');
    }
	
	public function logincheck(){//nazmul vai
		
		$data['title'] = 'mainpage';
		$data['user_login_info']=$this->movie_model->login_checkup();
		
		if(($data['user_login_info']==NULL)){//unregistered
			$this->registerpage('sign up first');			
		}	
		else{
			$this->kochu_session->set( 'power', $data['user_login_info']['role'] );
            $this->kochu_session->set( 'session_user',$data['user_login_info']['user_name']);  
            $this->kochu_session->set( 'session_user_id',$data['user_login_info']['user_id']);          
			
			$power_value = $this->kochu_session->get( 'power' );
			$data['session_user_name']=$this->kochu_session->get( 'session_user' );
			if($power_value==1){//registered user
				$this->load->view('templates/user/header',$data);
				
			}
			else if($power_value==2){// admin 
				$this->load->view('templates/admin/header',$data);
			}
			else
				$this->load->view('templates/header',$data);
		}
		$this->load->view('pages/mainpage', $data);
		$this->load->view('templates/footer');
	}
	
	public function logout(){
		$this->kochu_session->delete('power');
		$this->kochu_session->delete('session_user');
		
		$this->index('mainpage');		
	}
    
    public function insertmovie()
    {
        $data['title']='insertmovie';
        $this->load->view('templates/admin/header',$data);
        $this->load->view('pages/admin/insertmovie');
        $this->load->view('templates/footer');
    }
    
    public function insert_query()
    {
        $para_movie_id=time();
        $para_director_id=time()+1;
        $para_cast_id=time()+2;
        
        $this->movie_model->movie_table_insert($para_movie_id);
        $this->movie_model->dir_insert($para_director_id);
        $this->movie_model->cast_insert($para_cast_id);
        $this->movie_model->movie_dir_insert($para_movie_id,$para_director_id);
        $this->movie_model->movie_cast_insert($para_movie_id,$para_cast_id);
        $this->movie_model->movie_genre_insert($para_movie_id);
    }
    public function userreg()
    {   
        if($this->movie_model->signup_checkup_table()<=0)
        {
            $this->movie_model->user_sign_up_table();
            $this->index('mainpage');
        }
        else
        {
            $this->registerpage('alr_signed');
        }
           
    }
    
    public function topmovies()
    {
        $data['movielist']=$this->movie_model->top_movies_table();
        $data['title']='TopMovies';
		$data['session_user_name']=$this->kochu_session->get( 'session_user' );
        $power_value = $this->kochu_session->get( 'power' );
		        
		if($power_value==1){//registered user
				$this->load->view('templates/user/header',$data);
				
		}
		else if($power_value==2){// admin 
				$this->load->view('templates/admin/header',$data);
		}
		else
			$this->load->view('templates/header',$data);
        $this->load->view('pages/topmovies',$data);
        $this->load->view('templates/footer');
    }
    
    public function makelist($page="")
    {
        if($page=="comingsoon")
        {
            $data['coming']=$this->movie_model->coming_soon_table();
            $data['title']='Coming Soon';    
        }
        else if($page=="boxoffice")
        {
            $data['boxoffice']=$this->movie_model->top_box_office_table();
            $data['title']='Box Office';    
        }
        else if($page=="thisyear")
        {
            $data['thisyear']=$this->movie_model->this_year_table();
            $data['title']='This year Movies'; 
        }
        
		$data['session_user_name']=$this->kochu_session->get( 'session_user' );
        $power_value = $this->kochu_session->get( 'power' );
		
		if($power_value==1){//registered user
				$this->load->view('templates/user/header',$data);
				
		}
		else if($power_value==2){// admin 
				$this->load->view('templates/admin/header',$data);
		}
        else
			$this->load->view('templates/header',$data);
        $this->load->view('pages/'.$page,$data);
        $this->load->view('templates/footer');
    }
    
    public function user_favourite()
    {        
        
        $data['title']='Favourites';
        
		$data['session_user_name']=$this->kochu_session->get( 'session_user' );
        $data['session_user_id']=$this->kochu_session->get( 'session_user_id' );
        
        $data['favourite_list']=$this->movie_model->user_favourite_table($data['session_user_id']);
		
		$this->load->view('templates/user/header',$data);
        $this->load->view('pages/user/favourite',$data);
        $this->load->view('templates/footer');
    }
    
    public function movie_fullview($form_mov_id="")
    {
        $data['only_movie']=$this->movie_model->movie_table($form_mov_id);
        $data['dir_name']=$this->movie_model->movie_dir_table($form_mov_id);
        $data['all_genre']=$this->movie_model->movie_genre_table($form_mov_id);
        $data['all_comment']=$this->movie_model->movie_comment_table($form_mov_id);
        $data['all_award']=$this->movie_model->movie_award_table($form_mov_id);     
        $data['all_cast']=$this->movie_model->movie_cast_table($form_mov_id); 
        $data['title']="Full Movie View";
        
		$data['session_user_name']=$this->kochu_session->get( 'session_user' );
        $data['session_user_id']=$this->kochu_session->get( 'session_user_id' );
        
        $power_value = $this->kochu_session->get( 'power' );
        if($power_value==1){//registered user
                $current_user_id=$data['session_user_id'];
                $data['user_rating']=$this->movie_model->user_rate_check($form_mov_id,$current_user_id);
                $data['user_fav']=$this->movie_model->user_fav_check($form_mov_id,$current_user_id);
				$this->load->view('templates/user/header',$data);
                $this->load->view('pages/user/moviedata',$data);		
		}
		else if($power_value==2){// admin 
				$this->load->view('templates/admin/header',$data);
                $this->load->view('pages/admin/moviedata',$data);
		}
        else
        {
			$this->load->view('templates/header',$data);
            $this->load->view('pages/moviedata',$data);
        }
        $this->load->view('templates/footer');
    }
    
    public function people_fullview($form_people_id="")
    {
        $data['only_people']=$this->movie_model->people_table_all($form_people_id);
        $data['directed_list']=$this->movie_model->people_directed($form_people_id);
        $data['acted_list']=$this->movie_model->people_acted($form_people_id);
        $data['award_list']=$this->movie_model->people_award_name($form_people_id);
        $data['title']="People View";
		
		$data['session_user_name']=$this->kochu_session->get( 'session_user' );
        
        $power_value = $this->kochu_session->get( 'power' );
        if($power_value==1){//registered user
				$this->load->view('templates/user/header',$data);
				
		}
		else if($power_value==2){// admin 
				$this->load->view('templates/admin/header',$data);
		}
        else
			$this->load->view('templates/header',$data);
        $this->load->view('pages/peopledata',$data);
        $this->load->view('templates/footer');
    }
    
    public function search_result()
    {
        if (isset($_POST['submit'])) 
        {
            $search_for_value=$_POST['searchtext'];
            $data['searchtext']=$search_for_value;
            $selected_val=$_POST['search'];
            
            if($selected_val=='movie')
            {
                $data['result']=$this->movie_model->search_movie($search_for_value);
                $data['id_type']="movie";
            }
            else if($selected_val=='celebrity')
            {
                $data['result']=$this->movie_model->search_people($search_for_value);
                $data['id_type']="celebrity";
            }
                
            $data['title']="Search Result";
			
			$data['session_user_name']=$this->kochu_session->get( 'session_user' );
            $power_value = $this->kochu_session->get( 'power' );
			if($power_value==1){//registered user
					$this->load->view('templates/user/header',$data);
					
			}
			else if($power_value==2){// admin 
					$this->load->view('templates/admin/header',$data);
			}
			else
				$this->load->view('templates/header',$data);
            $this->load->view('pages/searchresult',$data);
            $this->load->view('templates/footer');
        }
    }
    
    public function makecomment($form_mov_id='',$form_people_id='')
    {
        $this->movie_model->movie_comment_insert($form_mov_id,$form_people_id);
        
        $this->movie_fullview($form_mov_id);
        
    }
    
    public function rate_the_movie($form_mov_id='',$form_people_id='')
    {
        $this->movie_model->user_rate_insert($form_mov_id,$form_people_id,$_POST['my_text_input']);
        $this->movie_model->rating_update($form_mov_id,$_POST['my_text_input']);
        
        $this->movie_fullview($form_mov_id);
        
    }
    
    public function make_fav($form_mov_id='',$form_people_id='')
    {
        $this->movie_model->user_fav_insert($form_mov_id,$form_people_id);
        
        $this->movie_fullview($form_mov_id);
        
    }
    
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */