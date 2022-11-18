<?php
namespace ReviewManager;

class comment_paginator extends \CGExtensions\query\pagination
{
    private $_filter;
    private $_pageid;

    public function __construct(comment_resultset $rs)
    {
        parent::__construct($rs);
        $this->_filter = $rs->get_query();
        $this->_pageid = $this->_filter['detailpage'];
    }

    public function set_pageid($pageid)
    {
        $this->_pageid = (int) $pageid;
    }

    public function get_pageurl($pagenumber)
    {
        $pagenumber = (int) $pagenumber;
        if( $pagenumber < 1 ) return;

        $mod = \cms_utils::get_module(MOD_CGFEEDBACK);
        $parms = ['pagenum' => $pagenumber ];
        $parms['pagelimit'] = $this->_filter['limit'];
        if( ($tmp = $this->_filter['detailtemplate']) ) $parms['detailtemplate'] = $tmp;
        $url = $mod->create_url( 'cgfb_', 'summary', $this->_pageid, $parms, $this->_filter['inline'] );
        return $url;
    }
}