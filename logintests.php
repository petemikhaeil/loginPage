<?php

use PHPUnit\Framework\TestCase;

require('loginPage.php');

class StackTest extends TestCase
{


    public function testverifySuccessWithCorrectLogIn() {
        $username = 'Pete';
        $password = 'hello';
        $result = verify($username, $password);

        $this->assertEquals($result, true);
    }

    public function testverifySuccessWithFailedLogIn() {
        $username = 'Jimbo';
        $password = "Franko";
        $result = verify($username, $password);

        $this->assertEquals($result, false);
    }

    public function testverifyFailureVeryLongString() {
        $username = "sdjkfnasndfjkbakfbansfbcjasbfbaksjfdb cm,abdfhjbalfbga dfsfauhdisnc ";
        $password = "Franko";
        $result = verify($username, $password);

        $this->assertEquals($result, false);
    }

    public function testverifyMalformedRandomLettersAndNumbers() {
        $username = 5;
        $password = "kfdnlvzklj8u3gbc auegcf uhoeafg icq4u hgv uio3irbf c;da";
        $result = verify($username, $password);

        $this->assertEquals($result, false);
    }

    public function testcreateAndFillSession() {
        $username = "Pete";
        $password = "hello";
        $result = createAndFillSession($username, $password);

        $this->assertTrue(    $_SESSION['name'] == "Pete" && $_SESSION['password'] == "hello" &&  $_SESSION['loggedIn'] = true);
    }
}