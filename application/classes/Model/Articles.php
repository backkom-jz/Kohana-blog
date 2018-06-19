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

    public function getOne($id)
    {
        return DB::select()->from('articles')->where('id','=',$id)->execute()->as_array();
    }

    public function getUserById($id)
    {
        $user_id = DB::select('user_id')->from('articles')->where('id','=',$id)->execute()->as_array();
        return DB::select('name')->from('users')->where('id','=',$user_id[0])->execute()->as_array();
    }


}