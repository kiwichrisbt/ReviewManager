<?php
#---------------------------------------------------------------------------------------------------
# Module: ReviewManager
# Authors: Chris Taylor, Magal, with CMS Made Simple Foundation able to assign new administrators.
# Copyright: (C) 2021 Chris Taylor, chris@binnovative.co.uk
#            is a fork of: CGFeedback (c) 2009 by Robert Campbell (calguy1000@cmsmadesimple.org)
# Licence: GNU General Public License version 3
#          see /ReviewManager/lang/LICENCE.txt or <http://www.gnu.org/licenses/>
#---------------------------------------------------------------------------------------------------

namespace ReviewManager;

final class utils
{
    private function __construct() {}

    public static function find_layout_template($params, $paramname, $typename)
    {
        $paramname = (string) $paramname;
        $typename = (string) $typename;
        if ( !is_array($params) || !($thetemplate = \xt_param::get_string($params,$paramname)) ) {
            $tpl = \CmsLayoutTemplate::load_dflt_by_type($typename);
            if ( !is_object($tpl) ) {
                audit('', 'ReviewManager', 'No default '.$typename.' template found');
                return;
            }
            $thetemplate = $tpl->get_name();
            unset($tpl);
        }
        return $thetemplate;
    }



    /**
     *  Touch menu cache files - core will refresh (v2.0+ )
     */
    public static function touch_cache()
    {
        foreach ( glob(cms_join_path(TMP_CACHE_LOCATION, 'cache*.cms')) as $filename ) {
            touch( $filename, time() - 360000 );
        }
    }



    /**
     *  Create a module template type \CmsLayoutTemplateType
     *  @param $type_name - string
     *  @param $mod - \CMSModule
     */
    public static function create_template_type($type_name, $mod) {
        if ( !is_object($mod) ) return false;
        try {  
            $module_name = $mod->GetName();
            $tpl_type = new \CmsLayoutTemplateType();
            $tpl_type->set_originator($module_name);
            $tpl_type->set_dflt_flag();
            $tpl_type->set_name($type_name);
            $tpl_type->set_lang_callback($module_name.'::page_type_lang_callback');
            $tpl_type->set_content_callback($module_name.'::reset_page_type_defaults');
            $tpl_type->reset_content_to_factory();
            $tpl_type->save();
        } catch( \CmsException $e ) {
            self::log_exception($e);
            audit('', 'ReviewManager', 'Install error: '.$e->GetMessage());
        }

        $tpl_type = \CmsLayoutTemplateType::load($module_name.'::'.$type_name);
        return $tpl_type;
    }


    
    /**
     *  Create a module template of the given type \CmsLayoutTemplate
     *  @param $type_ob - CmsLayoutTemplateType
     *  @param $name - of new template to be created
     *  @param $contents - of the smarty template
     *  @param $dflt (false) - if this is to be set as default template of this type 
     */
    public static function create_template_of_type( $type_ob, $name, $contents, $dflt = false ) 
    {
        $ob = new \CmsLayoutTemplate();
        $ob->set_type( $type_ob );
        $ob->set_content( $contents );
        $ob->set_owner( get_userid() );
        $ob->set_type_dflt( $dflt );
        $new_name = $ob->generate_unique_name( $name );
        $ob->set_name( $new_name );
        $ob->save();
    }











/***************************************************************************************************

 ██████╗ ██████╗ ███████╗██╗  ██╗████████╗███████╗███╗   ██╗███████╗██╗ ██████╗ ███╗   ██╗███████╗
██╔════╝██╔════╝ ██╔════╝╚██╗██╔╝╚══██╔══╝██╔════╝████╗  ██║██╔════╝██║██╔═══██╗████╗  ██║██╔════╝
██║     ██║  ███╗█████╗   ╚███╔╝    ██║   █████╗  ██╔██╗ ██║███████╗██║██║   ██║██╔██╗ ██║███████╗
██║     ██║   ██║██╔══╝   ██╔██╗    ██║   ██╔══╝  ██║╚██╗██║╚════██║██║██║   ██║██║╚██╗██║╚════██║
╚██████╗╚██████╔╝███████╗██╔╝ ██╗   ██║   ███████╗██║ ╚████║███████║██║╚██████╔╝██║ ╚████║███████║
 ╚═════╝ ╚═════╝ ╚══════╝╚═╝  ╚═╝   ╚═╝   ╚══════╝╚═╝  ╚═══╝╚══════╝╚═╝ ╚═════╝ ╚═╝  ╚═══╝╚══════╝

The following methods have all been ripped from CGE to remove the dependency:
***************************************************************************************************/                     


    /**
     * Dump an exception to the error log. (from CMSMSExt)
     *
     * @param Exception $e
     */
    static public function log_exception(\Exception $e)
    {
        $out = '-- EXCEPTION DUMP --'."\n";
        $out .= "TYPE: ".get_class($e)."\n";
        $out .= "MESSAGE: ".$e->getMessage()."\n";
        $out .= "FILE: ".$e->getFile().':'.$e->GetLine()."\n";
        $out .= "TREACE:\n";
        $out .= $e->getTraceAsString();
        debug_to_log($out,'-- '.__METHOD__.' --');
    }



    /**
     * A convenience method to test if a key exists in the input array. (from CMSMSExt)
     *
     * @param array $params An associative array of input params
     * @param string $key The key to the associative array
     * @return bool
     */
    public static function exists($params, string $key)
    {
        $key = trim($key);
        if( !$key ) return;
        return isset($params[$key]);
    }



    /**
     * Get a safe string from an input parameter. (from CMSMSExt)
     * The string is stripped of any html code, and high or low bytes.
     *
     * @param array $params An associative array of input params
     * @param string $key The key to the associative array
     * @param string $dflt The default value to use if the key does not exist in the $params aray.
     */
    public static function get_string($params,string $key,$dflt = null)
    {
        // from textareas, and GET params may be encoded already.  so we have to decode it first
        $val = cms_html_entity_decode(self::get_param($params,$key,$dflt));
        // now it's in HTML
        $val = trim(strip_tags( $val ));
        // this will convert some crap back to entities. and strip some high/low chars.
        $val = filter_var( $val, FILTER_SANITIZE_SPECIAL_CHARS ); 
        return $val;
    }



    /**
     * Given an associative array, extract the value of one key, with a default. (from CMSMSExt)
     * If the key does not exist in the array
     *
     * @param hash $params The input associative array
     * @param string $key The input key to search for
     * @param mixed $dflt The default value
     * @return mixed The value of the element in the array, or the default
     */
    public static function get_param($params,string $key,$dflt = null)
    {
        // note: $params may be an object that uses ArrayAccess.
        if( isset($params[$key]) ) {
            $tmp = $params[$key];
            if( is_string($tmp) ) $tmp = trim($tmp);
            return $tmp;
            //if( !empty($tmp) ) return $tmp;
        }
        return $dflt;
    }


}
