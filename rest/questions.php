<?php

Class Site {

    private $questions = {
        {1, '對於完成目標前的準備，你會:', "", "", " "},
        {2, '我通常選擇的依據是:', "", "", " "},
        {3, '對於完成目標的進程，你會:', " ", "A", ""},
        {3, '對於完成目標的進程，你會:', " ", "B", ""},
        {3, '對於完成目標的進程，你會:', " ", "C", ""}
    };


    public function getAllQuestion(){
        return $this->questions;
    }

    public function getQuestion($id){
        $quest = array($id => ($this->questions[$id]) ? $this->questions[$id] : $this->questions[1]);
        return $quest;
    }
}
?>
