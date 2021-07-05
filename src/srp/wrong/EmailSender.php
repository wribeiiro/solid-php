<?php

namespace app\srp\wrong;

class EmailSender
{
    /**
     *
     * @var Client[]
     */
    private $clients = [];

    /**
     *
     * @var BirthdayLayout
     */
    private $layout;

    public function __construct(BirthdayLayout $layout)
    {
        $this->layout = $layout;
        $this->loadClientFromStorage();
    }

    public function sendMails()
    {
        foreach ($this->clients as $client) {
            $content = $this->layout->getContent($client);
            echo $content . '<p><hr></p>';

            $this->registerLog($content);
        }
    }

    public function registerLog(string $content)
    {
        $filePath = realpath(__DIR__) . '/../../../logs/email-sender.txt';
        $content = date('d/m/Y H:i:s') . "\n" . $content . "\n\n";

        file_put_contents($filePath, $content, FILE_APPEND);
    }

    private function loadClientFromStorage()
    {
        $filePath = realpath(__DIR__) . '/../../../data/birthday-list.xml';
        $xmlHandler = simplexml_load_file($filePath);

        foreach ($xmlHandler->aniversariante as $row) {
            $client = new Client($row->nome, $row->email, new \DateTime($row->data_nascimento));
            $this->clients[] = $client;
        }
    }

    public function getClients(): array
    {
        return $this->cleints;
    }
}