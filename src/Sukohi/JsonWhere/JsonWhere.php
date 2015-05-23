<?php namespace Sukohi\JsonWhere;

class JsonWhere {

    private $_query, $_column;

    public function query($query) {

        $this->_query = $query;
        return $this;

    }

    public function column($column) {

        $this->_column = $column;
        return $this;

    }

    public function value($value, $type = 'auto') {

        if($type == 'auto') {

            $type = (is_numeric($value)) ? 'int' : 'string';

        }

        if($type == 'int') {

            $this->_query->orWhere($this->_column, 'LIKE', '%['. $value .',%')
                ->orWhere($this->_column, 'LIKE', '%,'. $value .',%')
                ->orWhere($this->_column, 'LIKE', '%,'. $value .']%');

        } else if($type == 'string') {

            $this->_query->where($this->_column, 'LIKE', '%"'. $value .'"%');

        }

    }

}