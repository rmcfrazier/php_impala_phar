<?php
//namespace ;

/**
 * Autogenerated by Thrift Compiler (0.9.0)
 *
 * DO NOT EDIT UNLESS YOU ARE SURE THAT YOU KNOW WHAT YOU ARE DOING
 *  @generated
 */
use Thrift\Base\TBase;
use Thrift\Type\TType;
use Thrift\Type\TMessageType;
use Thrift\Exception\TException;
use Thrift\Exception\TProtocolException;
use Thrift\Protocol\TProtocol;
use Thrift\Exception\TApplicationException;


final class fb_status {
  const DEAD = 0;
  const STARTING = 1;
  const ALIVE = 2;
  const STOPPING = 3;
  const STOPPED = 4;
  const WARNING = 5;
  static public $__names = array(
    0 => 'DEAD',
    1 => 'STARTING',
    2 => 'ALIVE',
    3 => 'STOPPING',
    4 => 'STOPPED',
    5 => 'WARNING',
  );
}


