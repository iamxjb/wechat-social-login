<?php 
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

if(!function_exists('xh_social_loginbar')){
    function xh_social_loginbar($redirect_uri='',$echo =true){
        if($echo)
        echo XH_Social_Hooks::show_loginbar($redirect_uri);
        return XH_Social_Hooks::show_loginbar($redirect_uri);
    }
}

if(!function_exists('xh_social_accountbind')){
    function xh_social_accountbind($echo =true){
        if($echo)
        echo XH_Social_Hooks::accountbind();
        return XH_Social_Hooks::accountbind();
    }
}

?>