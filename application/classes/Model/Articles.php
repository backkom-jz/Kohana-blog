<?php
class Model_Articles extends Model
{
    public function getAll()
    {
        return DB::select()->from('articles')->execute()->as_array();
    }

    public function getTotal()
    {
        $query = DB::select(array(DB::expr('COUNT(*)'), 'total'))->from('articles');
        if(count($query)>0){
            return $query->execute()->as_array();

        }else{
            return false;
        }
    }

}