<?php
require_once 'klasaKredit.php';

class StambeniKredit extends Kredit
{
    public function __construct($gk, $o, $bg)
    {
        parent::__construct($gk, $o, $bg, "Stambeni kredit");
    }
}


?>