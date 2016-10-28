<?php
/**
 * Created by PhpStorm.
 * User: pomme
 * Date: 28/10/2016
 * Time: 11:06
 */

class Monster {

    /**
     * @var string $domainName
     */
    private $domainName;

    /**
     * @var string $email
     */
    private $email;

    /**
     * Monster constructor.
     * @param string $domaineName
     * @param string $email
     */
    public function __construct($domaineName = null, $email = null)
    {
        $this->domainName = $domaineName;
        $this->email = $email;
    }

    /**
     * @return array|mixed
     */
    public function start()
    {
        $emails = array();

        if ($this->domainName)
            $emails = $this->getByDomaineName();

        if ($this->email)
            $emails[] = $this->email;

        $this->saveEmail($emails);

        return $emails;
    }

    private function getByDomaineName($domaineName)
    {
        return $domaineName;
    }

    private function saveEmail(array $emails)
    {

    }
}



$domaineName = isset($_GET['name']);
$email = isset($_GET['email']);

$monster = new Monster($domaineName, $email);

$monster->start();
