﻿<?php
/** Include the database file */
include_once '../connections/db/db.php';

class itg_admin {

   /**
     * Holds the script directory absolute path
     * @staticvar
     */
    static $abs_path;

    /**
     * Store the sanitized and slash escaped value of post variables
     * @var array
     */
    var $post = array();

    /**
     * Stores the sanitized and decoded value of get variables
     * @var array
     */
    var $get = array();

    /**
     * The constructor function of admin class
     * We do just the session start
     * It is necessary to start the session before actually storing any value
     * to the super global $_SESSION variable
     */
    public function __construct() {
        //session_start();

        //store the absolute script directory
        //note that this is not the admin directory
        self::$abs_path = dirname(dirname(__FILE__));

        //initialize the post variable
        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            $this->post = $_POST;
            if(get_magic_quotes_gpc ()) {
                //get rid of magic quotes and slashes if present
                array_walk_recursive($this->post, array($this, 'stripslash_gpc'));
            }
        }

        //initialize the get variable
        $this->get = $_GET;
        //decode the url
        array_walk_recursive($this->get, array($this, 'urldecode'));
    }

    /**
     * Sample function to return the nicename of currently logged in admin
     * @global ezSQL_mysql $db
     * @return string The nice name of the user
     */
    public function get_admin_user_name() {
        $username = $_SESSION['admin_login'];
        global $db;
        $info = $db->get_row("SELECT `admin_user_name` FROM `admin` WHERE `admin_user_name` = '" . $db->escape($username) . "'");
        if(is_object($info))
            return $info->admin_user_name;
        else
            return '';
    }

    /**
     * Sample function to return the email of currently logged in admin user
     * @global ezSQL_mysql $db
     * @return string The email of the user
     */
    public function get_pass() {
        $username = $_SESSION['admin_login'];
        global $db;
        $info = $db->get_row("SELECT `admin_password` FROM `admin` WHERE `admin_user_name` = '" . $db->escape($username) . "'");
        if(is_object($info))
            return $info->admin_password;
        else
            return '';
    }

    /**
     * Checks whether the user is authenticated
     * to access the admin page or not.
     *
     * Redirects to the login.php page, if not authenticates
     * otherwise continues to the page
     *
     * @access public
     * @return void
     */
    public function _authenticate() {
        //first check whether session is set or not
        if(!isset($_SESSION['admin_login'])) {
            //check the cookie
            if(isset($_COOKIE['admin_user_name']) && isset($_COOKIE['admin_password'])) {
                //cookie found, is it really someone from the
                if($this->_check_db($_COOKIE['admin_user_name'], $_COOKIE['admin_password'])) {
                    $_SESSION['admin_login'] = $_COOKIE['username'];
                    header("location: ../admin/dashboard.php");
                    die();
                }
                else {
                    header("location: ../login.php");
                    die();
                }
            }
            else {
                header("location: ../login.php");
                die();
            }
        }
    }


    /**
     * Check for login in the action file
     */
    public function _login_action() {

        //insufficient data provided
        if(!isset($this->post['admin_user_name']) || $this->post['username'] == '' || !isset($this->post['admin_password']) || $this->post['password'] == '') {
            header ("location: ../login.php");
        }

        //get the username and password
        $username = $this->post['username'];
        $password = md5(sha1($this->post['password']));

        //check the database for username
        if($this->_check_db($username, $password)) {
            //ready to login
            $_SESSION['admin_login'] = $username;

            //check to see if remember, ie if cookie
            if(isset($this->post['remember'])) {
                //set the cookies for 1 day, ie, 1*24*60*60 secs
                //change it to something like 30*24*60*60 to remember user for 30 days
                setcookie('username', $username, time() + 1*24*60*60);
                setcookie('password', $password, time() + 1*24*60*60);
            } else {
                //destroy any previously set cookie
                setcookie('username', '', time() - 1*24*60*60);
                setcookie('password', '', time() - 1*24*60*60);
            }

            header("location: ../admin/dashboard.php");
        }
        else {
            header ("location: ../login.php");
        }

        die();
    }



    /**
     * Check the database for login user
     * Get the password for the user
     * compare md5 hash over sha1
     * @param string $username Raw username
     * @param string $password expected to be md5 over sha1
     * @return bool TRUE on success FALSE otherwise
     */
    private function _check_db($username, $password) {
        global $db;
        $user_row = $db->get_row("SELECT * FROM `admin` WHERE `admin_user_name`='" . $db->escape($username) . "'");

        //general return
        if(is_object($user_row) && md5($user_row->admin_password) == $password)
            return true;
        else
            return false;
    }

    /**
     * stripslash gpc
     * Strip the slashes from a string added by the magic quote gpc thingy
     * @access protected
     * @param string $value
     */
    private function stripslash_gpc(&$value) {
        $value = stripslashes($value);
    }

    /**
     * htmlspecialcarfy
     * Encodes string's special html characters
     * @access protected
     * @param string $value
     */
    private function htmlspecialcarfy(&$value) {
        $value = htmlspecialchars($value);
    }

    /**
     * URL Decode
     * Decodes a URL Encoded string
     * @access protected
     * @param string $value
     */
    protected function urldecode(&$value) {
        $value = urldecode($value);
    }
}
