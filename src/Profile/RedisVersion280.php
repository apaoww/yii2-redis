<?php

namespace apaoww\yii\redis\Profile;


class RedisVersion280 extends \Predis\Profile\RedisVersion280
{
    public function getSupportedCommands()
    {
        return array_merge(parent::getSupportedCommands(), [
            'HGETALL' => 'apaoww\yii\redis\Command\HashGetAll',
            'CLIENT LIST' => 'apaoww\yii\redis\Command\ClientList',
            'CLIENT SETNAME' => 'apaoww\yii\redis\Command\ClientSetName',
        ]);
    }
}
