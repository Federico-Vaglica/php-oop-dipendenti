
<?php
trait GetResidenza{
    public $residenza;

    public function setResidenza($_residenza){
        if(empty($_residenza)){
            throw new Exception('La residenza non e stata inserita');
        }

        $this->residenza = $_residenza;
    }
}

trait setResidenza {
    public function getResidenza($_residenza){
    $this ->residenza = $_residenza;
}

}
?>