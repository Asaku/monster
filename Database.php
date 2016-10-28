<?php

/**
 * Class Database
 * @author Mehdi Aberkane <mehdi@mehdi-aberkane.fr>
 */
class Database
{
    /**
     * @var PDO $pdo
     */
    private $pdo;

    /**
     * Database constructor.
     * @param PDO $pdo
     */
    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function insertEmail($email)
    {

        $req = $this->pdo->prepare('INSERT INTO email(email) VALUE (:email) )');
        $req->execute(array(
            'email' => $email
        ));
    }

    /**
     * Return list emails
     * @param bool $active
     * @return array reponses
     */
    public function getEmails($active = false)
    {
        $reponses = $this->pdo->query('SELECT * FROM email');

        return $reponses;
    }
}
