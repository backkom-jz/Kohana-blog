<?php
class Model_Comments extends Model
{
    public function getAllNickName()
    {
        return DB::select('nickname')->from('comments')->execute();
    }
}