<?php

namespace org\nameapi\client\services\matcher\personmatcher\wsdl;

use org\nameapi\client\services\BaseSoapClient;

require_once(__DIR__ . '/../../../BaseSoapClient.php');
require_once('MatchArguments.php');


/**
 * Use the PersonNameParser, this is wsdl internal only.
 */
class SoapPersonMatcherService extends BaseSoapClient {

    private static $classmap = array(
    );

    public function __construct(array $options = array(), $wsdl = 'http://api.nameapi.org/soap/v4.0/matcher/personmatcher?wsdl') {
        parent::__construct($wsdl, self::$classmap, $options);
    }

    /**
     * @param MatchArguments $parameters
     * @access public
     * @return matchResponse
     */
    public function match(MatchArguments $parameters) {
        return $this->__soapCall('match', array($parameters))->return;
    }

}

