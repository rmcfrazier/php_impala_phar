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


final class TPartitionType {
  const UNPARTITIONED = 0;
  const RANDOM = 1;
  const HASH_PARTITIONED = 2;
  const RANGE_PARTITIONED = 3;
  static public $__names = array(
    0 => 'UNPARTITIONED',
    1 => 'RANDOM',
    2 => 'HASH_PARTITIONED',
    3 => 'RANGE_PARTITIONED',
  );
}

class TDataPartition {
  static $_TSPEC;

  public $type = null;
  public $partitioning_exprs = null;

  public function __construct($vals=null) {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        1 => array(
          'var' => 'type',
          'type' => TType::I32,
          ),
        2 => array(
          'var' => 'partitioning_exprs',
          'type' => TType::LST,
          'etype' => TType::STRUCT,
          'elem' => array(
            'type' => TType::STRUCT,
            'class' => '\TExpr',
            ),
          ),
        );
    }
    if (is_array($vals)) {
      if (isset($vals['type'])) {
        $this->type = $vals['type'];
      }
      if (isset($vals['partitioning_exprs'])) {
        $this->partitioning_exprs = $vals['partitioning_exprs'];
      }
    }
  }

  public function getName() {
    return 'TDataPartition';
  }

  public function read($input)
  {
    $xfer = 0;
    $fname = null;
    $ftype = 0;
    $fid = 0;
    $xfer += $input->readStructBegin($fname);
    while (true)
    {
      $xfer += $input->readFieldBegin($fname, $ftype, $fid);
      if ($ftype == TType::STOP) {
        break;
      }
      switch ($fid)
      {
        case 1:
          if ($ftype == TType::I32) {
            $xfer += $input->readI32($this->type);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 2:
          if ($ftype == TType::LST) {
            $this->partitioning_exprs = array();
            $_size0 = 0;
            $_etype3 = 0;
            $xfer += $input->readListBegin($_etype3, $_size0);
            for ($_i4 = 0; $_i4 < $_size0; ++$_i4)
            {
              $elem5 = null;
              $elem5 = new \TExpr();
              $xfer += $elem5->read($input);
              $this->partitioning_exprs []= $elem5;
            }
            $xfer += $input->readListEnd();
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        default:
          $xfer += $input->skip($ftype);
          break;
      }
      $xfer += $input->readFieldEnd();
    }
    $xfer += $input->readStructEnd();
    return $xfer;
  }

  public function write($output) {
    $xfer = 0;
    $xfer += $output->writeStructBegin('TDataPartition');
    if ($this->type !== null) {
      $xfer += $output->writeFieldBegin('type', TType::I32, 1);
      $xfer += $output->writeI32($this->type);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->partitioning_exprs !== null) {
      if (!is_array($this->partitioning_exprs)) {
        throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
      }
      $xfer += $output->writeFieldBegin('partitioning_exprs', TType::LST, 2);
      {
        $output->writeListBegin(TType::STRUCT, count($this->partitioning_exprs));
        {
          foreach ($this->partitioning_exprs as $iter6)
          {
            $xfer += $iter6->write($output);
          }
        }
        $output->writeListEnd();
      }
      $xfer += $output->writeFieldEnd();
    }
    $xfer += $output->writeFieldStop();
    $xfer += $output->writeStructEnd();
    return $xfer;
  }

}


