<?php

namespace org\nameapi\ontology\input\entities\contact;

require_once('TelNumber.php');

class TelNumberFactory {

    /**
     * @param $string
     * @return TelNumber
     */
    static function forNumber($string) {
        return new TelNumber($string);
    }

}
