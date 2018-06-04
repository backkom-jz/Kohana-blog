<?php
class Model_Users extends Model
{
    public function getName($id)
    {
        return DB::select('name','id','email')->from('users')->where('id','=',$id)->execute();
    }
}