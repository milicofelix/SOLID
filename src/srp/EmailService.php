<?php

namespace Solid\srp;

class EmailService {

    private $from;
    private $to;
    private $subject;
    private $body;

    public function __construct(
        string $from = 'contato@site.com.br',
        string $to = '',
        string $subject = '',
        string $body = ''
        ) {
            $this->from = $from;
            $this->to = $to;
            $this->subject = $subject;
            $this->body = $body;
    }

    public static function sendMail() {
        return '----- E-mail enviado -----';
    }

}