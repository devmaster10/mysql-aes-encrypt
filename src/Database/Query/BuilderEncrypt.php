<?php

namespace DevMaster10\AESEncrypt\Database\Query;

use Illuminate\Database\Query\Builder as BuilderCore;

class BuilderEncrypt extends BuilderCore
{
    
    protected $fillableEncrypt = null;

    /**
     * Execute the query as a "select" statement.
     *
     * @param  array  $columns
     * @return \Illuminate\Support\Collection
     */
    public function get($columns = ['*'])
    {
        $original = $this->columns;

        if (is_null($original)) {
            $this->columns = $columns;
        }

        $results = $this->processor->processSelect($this, $this->runSelect());

        $this->columns = $original;

        return collect($results);
    }

    /**
     * Set a model instance for the model being queried.
     *
     * @param  string  $fillableEncrypt
     * @return $this
     */
    public function setfillableEncrypt($fillableEncrypt)
    {
        $this->fillableEncrypt = $fillableEncrypt;
        
        return $this;
    }

    /**
     * Set a model instance for the model being queried.
     *
     * @return string
     */
    public function getfillableEncrypt()
    {
        return !empty($this->fillableEncrypt) ? $this->fillableEncrypt : [];
    }
}
