<?php
namespace OOPHP\Negara;

class Belanda {
    private $ibukota;
    private $bahasa;

    public function ibukota($ibukota){
        $this->ibukota=$ibukota;
        return $this->ibukota;
    }
    public function bahasa($bahasa){
        $this->bahasa=$bahasa;
        return $this->bahasa;
    }
}


?>