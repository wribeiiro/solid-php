<?php

namespace app\srp\right;

use app\srp\right\Logger;
use app\srp\right\parser\ClientParserAbstract;

class EmailSender
{
    /**
     *
     * @var BirthdayLayout
     */
    private $layout;

    /**
     *
     * @var ClientParsrAbstract
     */
    private $parser;

    public function __construct(BirthdayLayout $layout, ClientParserAbstract $parser)
    {
        $this->layout = $layout;
        $this->parser = $parser;
    }

    public function sendMails()
    {
        foreach ($this->parser->getClients() as $client) {
            $content = $this->layout->getContent($client);
            echo $content . '<p><hr></p>';

            Logger::registerLog($content);
        }
    }
}