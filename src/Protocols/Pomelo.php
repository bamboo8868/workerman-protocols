<?php
namespace WorkermanProtocols\Protocol;

use Workerman\Connection\ConnectionInterface;
/**
 * Package protocol encode.
 *
 * Pomelo package format:
 * +------+-------------+------------------+
 * | type | body length |       body       |
 * +------+-------------+------------------+
 *
 * Head: 4bytes
 *   0: package type,
 *      1 - handshake,
 *      2 - handshake ack,
 *      3 - heartbeat,
 *      4 - data
 *      5 - kick
 *   1 - 3: big-endian body length
 * Body: body length bytes
 *
 * */
class Pomelo
{

    public static function input($buffer, ConnectionInterface $connection)
    {

    }

    public static function encode($buffer)
    {

    }

    public static function decode($buffer)
    {

    }
}