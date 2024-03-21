<?php
namespace ReviewManager;

final class comment_resultset extends \CMSMSExt\query\resultset
{
    private $_cached_field_data;

    public function __construct(comment_query $query)
    {
        $this->_filter = $query;
    }

    protected function _query()
    {
        if( $this->_rs ) return; // only do this once.
        $db = \cms_utils::get_db();
        $query = 'SELECT SQL_CALC_FOUND_ROWS com.* FROM '.REVIEWMANAGER_TABLE_COMMENTS.' com';
        $joins = $where = $qparms = [];

        $filter = $this->_filter;
        if( ($key1 = $filter['key1']) ) {
            $where[] = 'key1 = ?';
            $qparms[] = $key1;
        }
        if( ($key2 = $filter['key2']) ) {
            $where[] = 'key2 = ?';
            $qparms[] = $key2;
        }
        if( ($key3 = $filter['key3']) ) {
            $where[] = 'key3 = ?';
            $qparms[] = $key3;
        }
        if( ($since = $filter['since']) ) {
            $where[] = 'modified >= ?';
            $qparms[] = trim($db->DBTimeStamp($since),"'");
        }

        if( ($status = $filter['status']) ) {
            if( $status != 'any' ) {
                $where[] = 'status = ?';
                $qparms[] = $status;
            }
        }
        $sortby = $filter['sortby'];
        if( startswith($sortby,'f:') ) {
            $fid = (int) substr($sortby,2);
            $joins[] = 'LEFT JOIN '.REVIEWMANAGER_TABLE_FIELDVALS.' fv ON fv.comment_id = com.id';
            $where[] = 'fv.field_id = ?';
            $qparms[] = $fid;
            $sortby = 'fv.value';
        }
        
        $sortorder = $filter['sortorder'];

        if($filter['sortby'] == 'random') {
            $sortby = "RAND()";
            $sortorder = '';
        }

        // query assembly
        if( count($joins) ) $query .= implode(' ',$joins);
        if( count($where) ) $query .= ' WHERE '.implode(' AND ',$where);
        $query .= " ORDER BY $sortby $sortorder";

        $this->_rs = $db->SelectLimit($query,$filter['limit'],$filter['offset'],$qparms);
        $this->_totalmatching = (int) $db->GetOne('SELECT FOUND_ROWS()');

        $this->_preload();
    }

    protected function _preload()
    {
        if( !$this->_rs ) return;
        $idlist = [];
        $this->MoveFirst();
        while( !$this->EOF() ) {
            $idlist[] = (int) $this->fields['id'];
            $this->MoveNext();
        }
        $this->MoveFirst();
        $idlist = array_unique($idlist);
        if( !count($idlist) ) return; // nothing to do.

        $db = \cms_utils::get_db();
        $sql = 'SELECT comment_id,field_id,value FROM '.REVIEWMANAGER_TABLE_FIELDVALS.' WHERE comment_id IN ('.implode(',',$idlist).') ORDER BY comment_id,field_id';
        $field_vals = $db->GetArray($sql);
        if( !count($field_vals) ) return;

        // organize these into tiny arrays by comment id.
        $out = [];
        foreach( $field_vals as $rec ) {
            $out[$rec['comment_id']][] = $rec;
        }
        $this->_cached_field_data = $out;
    }

    public function &get_pagination()
    {
        $paginator = new comment_paginator($this);
        return $paginator;
    }

    public function &get_object()
    {
        $mod = \cms_utils::get_module('ReviewManager');
        $row = $this->fields;
        $obj = new displayable_comment($mod,$this->_filter['detailpage'],$this->_filter['detailtemplate'],$this->_filter['inline']);
        $obj->from_array($row);
        if( isset($this->_cached_field_data[$row['id']] ) ) $obj->load_fields_from_array($this->_cached_field_data[$row['id']]);
        return $obj;
    }
} // end of class