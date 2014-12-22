<?php
if ( ! defined('BASEPATH') )
    exit( 'No direct script access allowed' );

class Kochu_session
{
    public function __construct()
    {
        session_start();
    }

    public function set( $key, $value )
    {
        $_SESSION[$key] = $value;
    }
	
	public function setname( $key, $value )
    {
        $_SESSION[$key] = $value;
    }

    public function get( $key )
    {
        return isset( $_SESSION[$key] ) ? $_SESSION[$key] : null;
    }
	
	public function getname( $key )
    {
        return isset( $_SESSION[$key] ) ? $_SESSION[$key] : null;
    }

    
    public function delete( $key )
    {
        unset( $_SESSION[$key] );
    }
}
?>