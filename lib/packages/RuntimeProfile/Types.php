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


final class TCounterType {
  const UNIT = 0;
  const UNIT_PER_SECOND = 1;
  const TIME_MS = 2;
  const CPU_TICKS = 3;
  const BYTES = 4;
  const BYTES_PER_SECOND = 5;
  static public $__names = array(
    0 => 'UNIT',
    1 => 'UNIT_PER_SECOND',
    2 => 'TIME_MS',
    3 => 'CPU_TICKS',
    4 => 'BYTES',
    5 => 'BYTES_PER_SECOND',
  );
}

class TCounter {
  static $_TSPEC;

  public $name = null;
  public $type = null;
  public $value = null;

  public function __construct($vals=null) {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        1 => array(
          'var' => 'name',
          'type' => TType::STRING,
          ),
        2 => array(
          'var' => 'type',
          'type' => TType::I32,
          ),
        3 => array(
          'var' => 'value',
          'type' => TType::I64,
          ),
        );
    }
    if (is_array($vals)) {
      if (isset($vals['name'])) {
        $this->name = $vals['name'];
      }
      if (isset($vals['type'])) {
        $this->type = $vals['type'];
      }
      if (isset($vals['value'])) {
        $this->value = $vals['value'];
      }
    }
  }

  public function getName() {
    return 'TCounter';
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
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->name);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 2:
          if ($ftype == TType::I32) {
            $xfer += $input->readI32($this->type);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 3:
          if ($ftype == TType::I64) {
            $xfer += $input->readI64($this->value);
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
    $xfer += $output->writeStructBegin('TCounter');
    if ($this->name !== null) {
      $xfer += $output->writeFieldBegin('name', TType::STRING, 1);
      $xfer += $output->writeString($this->name);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->type !== null) {
      $xfer += $output->writeFieldBegin('type', TType::I32, 2);
      $xfer += $output->writeI32($this->type);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->value !== null) {
      $xfer += $output->writeFieldBegin('value', TType::I64, 3);
      $xfer += $output->writeI64($this->value);
      $xfer += $output->writeFieldEnd();
    }
    $xfer += $output->writeFieldStop();
    $xfer += $output->writeStructEnd();
    return $xfer;
  }

}

class TRuntimeProfileNode {
  static $_TSPEC;

  public $name = null;
  public $num_children = null;
  public $counters = null;
  public $metadata = null;
  public $indent = null;
  public $info_strings = null;

  public function __construct($vals=null) {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        1 => array(
          'var' => 'name',
          'type' => TType::STRING,
          ),
        2 => array(
          'var' => 'num_children',
          'type' => TType::I32,
          ),
        3 => array(
          'var' => 'counters',
          'type' => TType::LST,
          'etype' => TType::STRUCT,
          'elem' => array(
            'type' => TType::STRUCT,
            'class' => '\TCounter',
            ),
          ),
        4 => array(
          'var' => 'metadata',
          'type' => TType::I64,
          ),
        5 => array(
          'var' => 'indent',
          'type' => TType::BOOL,
          ),
        6 => array(
          'var' => 'info_strings',
          'type' => TType::MAP,
          'ktype' => TType::STRING,
          'vtype' => TType::STRING,
          'key' => array(
            'type' => TType::STRING,
          ),
          'val' => array(
            'type' => TType::STRING,
            ),
          ),
        );
    }
    if (is_array($vals)) {
      if (isset($vals['name'])) {
        $this->name = $vals['name'];
      }
      if (isset($vals['num_children'])) {
        $this->num_children = $vals['num_children'];
      }
      if (isset($vals['counters'])) {
        $this->counters = $vals['counters'];
      }
      if (isset($vals['metadata'])) {
        $this->metadata = $vals['metadata'];
      }
      if (isset($vals['indent'])) {
        $this->indent = $vals['indent'];
      }
      if (isset($vals['info_strings'])) {
        $this->info_strings = $vals['info_strings'];
      }
    }
  }

  public function getName() {
    return 'TRuntimeProfileNode';
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
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->name);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 2:
          if ($ftype == TType::I32) {
            $xfer += $input->readI32($this->num_children);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 3:
          if ($ftype == TType::LST) {
            $this->counters = array();
            $_size0 = 0;
            $_etype3 = 0;
            $xfer += $input->readListBegin($_etype3, $_size0);
            for ($_i4 = 0; $_i4 < $_size0; ++$_i4)
            {
              $elem5 = null;
              $elem5 = new \TCounter();
              $xfer += $elem5->read($input);
              $this->counters []= $elem5;
            }
            $xfer += $input->readListEnd();
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 4:
          if ($ftype == TType::I64) {
            $xfer += $input->readI64($this->metadata);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 5:
          if ($ftype == TType::BOOL) {
            $xfer += $input->readBool($this->indent);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 6:
          if ($ftype == TType::MAP) {
            $this->info_strings = array();
            $_size6 = 0;
            $_ktype7 = 0;
            $_vtype8 = 0;
            $xfer += $input->readMapBegin($_ktype7, $_vtype8, $_size6);
            for ($_i10 = 0; $_i10 < $_size6; ++$_i10)
            {
              $key11 = '';
              $val12 = '';
              $xfer += $input->readString($key11);
              $xfer += $input->readString($val12);
              $this->info_strings[$key11] = $val12;
            }
            $xfer += $input->readMapEnd();
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
    $xfer += $output->writeStructBegin('TRuntimeProfileNode');
    if ($this->name !== null) {
      $xfer += $output->writeFieldBegin('name', TType::STRING, 1);
      $xfer += $output->writeString($this->name);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->num_children !== null) {
      $xfer += $output->writeFieldBegin('num_children', TType::I32, 2);
      $xfer += $output->writeI32($this->num_children);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->counters !== null) {
      if (!is_array($this->counters)) {
        throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
      }
      $xfer += $output->writeFieldBegin('counters', TType::LST, 3);
      {
        $output->writeListBegin(TType::STRUCT, count($this->counters));
        {
          foreach ($this->counters as $iter13)
          {
            $xfer += $iter13->write($output);
          }
        }
        $output->writeListEnd();
      }
      $xfer += $output->writeFieldEnd();
    }
    if ($this->metadata !== null) {
      $xfer += $output->writeFieldBegin('metadata', TType::I64, 4);
      $xfer += $output->writeI64($this->metadata);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->indent !== null) {
      $xfer += $output->writeFieldBegin('indent', TType::BOOL, 5);
      $xfer += $output->writeBool($this->indent);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->info_strings !== null) {
      if (!is_array($this->info_strings)) {
        throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
      }
      $xfer += $output->writeFieldBegin('info_strings', TType::MAP, 6);
      {
        $output->writeMapBegin(TType::STRING, TType::STRING, count($this->info_strings));
        {
          foreach ($this->info_strings as $kiter14 => $viter15)
          {
            $xfer += $output->writeString($kiter14);
            $xfer += $output->writeString($viter15);
          }
        }
        $output->writeMapEnd();
      }
      $xfer += $output->writeFieldEnd();
    }
    $xfer += $output->writeFieldStop();
    $xfer += $output->writeStructEnd();
    return $xfer;
  }

}

class TRuntimeProfileTree {
  static $_TSPEC;

  public $nodes = null;

  public function __construct($vals=null) {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        1 => array(
          'var' => 'nodes',
          'type' => TType::LST,
          'etype' => TType::STRUCT,
          'elem' => array(
            'type' => TType::STRUCT,
            'class' => '\TRuntimeProfileNode',
            ),
          ),
        );
    }
    if (is_array($vals)) {
      if (isset($vals['nodes'])) {
        $this->nodes = $vals['nodes'];
      }
    }
  }

  public function getName() {
    return 'TRuntimeProfileTree';
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
          if ($ftype == TType::LST) {
            $this->nodes = array();
            $_size16 = 0;
            $_etype19 = 0;
            $xfer += $input->readListBegin($_etype19, $_size16);
            for ($_i20 = 0; $_i20 < $_size16; ++$_i20)
            {
              $elem21 = null;
              $elem21 = new \TRuntimeProfileNode();
              $xfer += $elem21->read($input);
              $this->nodes []= $elem21;
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
    $xfer += $output->writeStructBegin('TRuntimeProfileTree');
    if ($this->nodes !== null) {
      if (!is_array($this->nodes)) {
        throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
      }
      $xfer += $output->writeFieldBegin('nodes', TType::LST, 1);
      {
        $output->writeListBegin(TType::STRUCT, count($this->nodes));
        {
          foreach ($this->nodes as $iter22)
          {
            $xfer += $iter22->write($output);
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

