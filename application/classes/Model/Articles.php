<?php
class Model_Articles extends Model
{
    public function getAll()
    {
        return DB::select()->from('articles')->execute()->as_array();
    }
}