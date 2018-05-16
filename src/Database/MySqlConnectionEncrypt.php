<?php

namespace DevMaster10\AESEncrypt\Database;

use Illuminate\Database\MySqlConnection;

use DevMaster10\AESEncrypt\Database\Schema\MySqlBuilderEncrypt;
use DevMaster10\AESEncrypt\Database\Query\Grammars\MySqlGrammarEncrypt as QueryGrammar;

class MySqlConnectionEncrypt extends MySqlConnection
{
    /**
     * Get the default query grammar instance.
     *
     * @return \DevMaster10\AESEncrypt\Database\Query\Grammars\MySqlGrammarEncrypt
     */
    protected function getDefaultQueryGrammar()
    {
        return $this->withTablePrefix(new QueryGrammar);
    }
}
