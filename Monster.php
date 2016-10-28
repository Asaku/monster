<?php

/**
 * Class Monster
 * @author Mehdi Aberkane <mehdi@mehdi-aberkane.fr>
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

    //TODO dev in progress
    private function getByDomaineName()
    {
        return $this->domainName;
    }

    /**
     * Save email in base
     * @param array $emails
     */
    private function saveEmail(array $emails)
    {

    }
}
