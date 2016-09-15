<?php
/**
 * Created by PhpStorm.
 * User: C
 * Date: 9/12/2016
 * Time: 11:11 PM
 */

namespace APP;

//use nice\test;

class WPDB_QUERIES
{
    private $table_name = null;

    /**
     * WPDB_QUERIES constructor.
     * @param null $table_name
     */
    function __construct($table_name=null)
    {
        //$t = new test();
        //$t->testighrere();
        $this->table_name = $table_name;
    }

    /**
     * @param $query_string
     * @param $output_type
     * OBJECT - result will be output as an object.
     * ARRAY_A - result will be output as an associative array.
     * ARRAY_N - result will be output as a numerically indexed array.
     * @Return $output_type
     */
    public function wpdb_get_result($query_string, $output_type=ARRAY_A) {
        global $wpdb;
        return $wpdb->get_results($query_string, $output_type );
    }

    /**
     *
     */
    public function wpdb_query()
    {
    }

    /**
     * @param array $data_array
     * @param array $where
     * @return bool
     */
    public function wpdb_update($data_array=array(), $where) {
        global $wpdb;
        $r = array( 
            'ID'=> $where
            );
        $trows = $wpdb->update(
            $this->table_name, 
            $data_array,
            $r,
            $this->wpdb_get_value_type($data_array),
            $this->wpdb_get_value_type($r)
        );
        if($trows > 0) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * @param array $where
     * @return bool
     */
    public function wpdb_delete($where=array()) {
        global $wpdb;
        $trows = $wpdb->delete(
            $this->table_name,
            $where,
            $this->wpdb_get_value_type($where)
        );
        if($trows > 0) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * @param array $data_array
     * @return bool
     */
    public function wpdb_insert($data_array=array())
    {
        global $wpdb;
        $trows = $wpdb->insert(
            $this->table_name,
            $data_array,
            $this->wpdb_get_value_type($data_array)
        );
        if($trows > 0) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * @param array $data_array
     * @return array|string
     */
    public function wpdb_get_value_type($data_array=array())
    {
        if(is_array($data_array)) {
            $values_type = array();
            foreach($data_array as $key => $value) {
                if(is_string($value)) {
                    $values_type[] = '%s';
                } else {
                    $values_type[] = '%d';
                }
            }
            return $values_type;
        } else {
            return "please supply array value array('rowname'=>'rowvalue')";
        }
    }

}