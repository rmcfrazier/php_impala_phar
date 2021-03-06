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


final class TDataSinkType {
  const DATA_STREAM_SINK = 0;
  const TABLE_SINK = 1;
  static public $__names = array(
    0 => 'DATA_STREAM_SINK',
    1 => 'TABLE_SINK',
  );
}

class TDataStreamSink {
  static $_TSPEC;

  public $dest_node_id = null;
  public $output_partition = null;

  public function __construct($vals=null) {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        1 => array(
          'var' => 'dest_node_id',
          'type' => TType::I32,
          ),
        2 => array(
          'var' => 'output_partition',
          'type' => TType::STRUCT,
          'class' => '\TDataPartition',
          ),
        );
    }
    if (is_array($vals)) {
      if (isset($vals['dest_node_id'])) {
        $this->dest_node_id = $vals['dest_node_id'];
      }
      if (isset($vals['output_partition'])) {
        $this->output_partition = $vals['output_partition'];
      }
    }
  }

  public function getName() {
    return 'TDataStreamSink';
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
            $xfer += $input->readI32($this->dest_node_id);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 2:
          if ($ftype == TType::STRUCT) {
            $this->output_partition = new \TDataPartition();
            $xfer += $this->output_partition->read($input);
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
    $xfer += $output->writeStructBegin('TDataStreamSink');
    if ($this->dest_node_id !== null) {
      $xfer += $output->writeFieldBegin('dest_node_id', TType::I32, 1);
      $xfer += $output->writeI32($this->dest_node_id);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->output_partition !== null) {
      if (!is_object($this->output_partition)) {
        throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
      }
      $xfer += $output->writeFieldBegin('output_partition', TType::STRUCT, 2);
      $xfer += $this->output_partition->write($output);
      $xfer += $output->writeFieldEnd();
    }
    $xfer += $output->writeFieldStop();
    $xfer += $output->writeStructEnd();
    return $xfer;
  }

}

class THdfsTableSink {
  static $_TSPEC;

  public $partition_key_exprs = null;
  public $overwrite = null;

  public function __construct($vals=null) {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        1 => array(
          'var' => 'partition_key_exprs',
          'type' => TType::LST,
          'etype' => TType::STRUCT,
          'elem' => array(
            'type' => TType::STRUCT,
            'class' => '\TExpr',
            ),
          ),
        2 => array(
          'var' => 'overwrite',
          'type' => TType::BOOL,
          ),
        );
    }
    if (is_array($vals)) {
      if (isset($vals['partition_key_exprs'])) {
        $this->partition_key_exprs = $vals['partition_key_exprs'];
      }
      if (isset($vals['overwrite'])) {
        $this->overwrite = $vals['overwrite'];
      }
    }
  }

  public function getName() {
    return 'THdfsTableSink';
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
            $this->partition_key_exprs = array();
            $_size0 = 0;
            $_etype3 = 0;
            $xfer += $input->readListBegin($_etype3, $_size0);
            for ($_i4 = 0; $_i4 < $_size0; ++$_i4)
            {
              $elem5 = null;
              $elem5 = new \TExpr();
              $xfer += $elem5->read($input);
              $this->partition_key_exprs []= $elem5;
            }
            $xfer += $input->readListEnd();
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 2:
          if ($ftype == TType::BOOL) {
            $xfer += $input->readBool($this->overwrite);
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
    $xfer += $output->writeStructBegin('THdfsTableSink');
    if ($this->partition_key_exprs !== null) {
      if (!is_array($this->partition_key_exprs)) {
        throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
      }
      $xfer += $output->writeFieldBegin('partition_key_exprs', TType::LST, 1);
      {
        $output->writeListBegin(TType::STRUCT, count($this->partition_key_exprs));
        {
          foreach ($this->partition_key_exprs as $iter6)
          {
            $xfer += $iter6->write($output);
          }
        }
        $output->writeListEnd();
      }
      $xfer += $output->writeFieldEnd();
    }
    if ($this->overwrite !== null) {
      $xfer += $output->writeFieldBegin('overwrite', TType::BOOL, 2);
      $xfer += $output->writeBool($this->overwrite);
      $xfer += $output->writeFieldEnd();
    }
    $xfer += $output->writeFieldStop();
    $xfer += $output->writeStructEnd();
    return $xfer;
  }

}

class TTableSink {
  static $_TSPEC;

  public $target_table_id = null;
  public $hdfs_table_sink = null;

  public function __construct($vals=null) {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        1 => array(
          'var' => 'target_table_id',
          'type' => TType::I32,
          ),
        2 => array(
          'var' => 'hdfs_table_sink',
          'type' => TType::STRUCT,
          'class' => '\THdfsTableSink',
          ),
        );
    }
    if (is_array($vals)) {
      if (isset($vals['target_table_id'])) {
        $this->target_table_id = $vals['target_table_id'];
      }
      if (isset($vals['hdfs_table_sink'])) {
        $this->hdfs_table_sink = $vals['hdfs_table_sink'];
      }
    }
  }

  public function getName() {
    return 'TTableSink';
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
            $xfer += $input->readI32($this->target_table_id);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 2:
          if ($ftype == TType::STRUCT) {
            $this->hdfs_table_sink = new \THdfsTableSink();
            $xfer += $this->hdfs_table_sink->read($input);
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
    $xfer += $output->writeStructBegin('TTableSink');
    if ($this->target_table_id !== null) {
      $xfer += $output->writeFieldBegin('target_table_id', TType::I32, 1);
      $xfer += $output->writeI32($this->target_table_id);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->hdfs_table_sink !== null) {
      if (!is_object($this->hdfs_table_sink)) {
        throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
      }
      $xfer += $output->writeFieldBegin('hdfs_table_sink', TType::STRUCT, 2);
      $xfer += $this->hdfs_table_sink->write($output);
      $xfer += $output->writeFieldEnd();
    }
    $xfer += $output->writeFieldStop();
    $xfer += $output->writeStructEnd();
    return $xfer;
  }

}

class TDataSink {
  static $_TSPEC;

  public $type = null;
  public $stream_sink = null;
  public $table_sink = null;

  public function __construct($vals=null) {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        1 => array(
          'var' => 'type',
          'type' => TType::I32,
          ),
        2 => array(
          'var' => 'stream_sink',
          'type' => TType::STRUCT,
          'class' => '\TDataStreamSink',
          ),
        3 => array(
          'var' => 'table_sink',
          'type' => TType::STRUCT,
          'class' => '\TTableSink',
          ),
        );
    }
    if (is_array($vals)) {
      if (isset($vals['type'])) {
        $this->type = $vals['type'];
      }
      if (isset($vals['stream_sink'])) {
        $this->stream_sink = $vals['stream_sink'];
      }
      if (isset($vals['table_sink'])) {
        $this->table_sink = $vals['table_sink'];
      }
    }
  }

  public function getName() {
    return 'TDataSink';
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
          if ($ftype == TType::STRUCT) {
            $this->stream_sink = new \TDataStreamSink();
            $xfer += $this->stream_sink->read($input);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 3:
          if ($ftype == TType::STRUCT) {
            $this->table_sink = new \TTableSink();
            $xfer += $this->table_sink->read($input);
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
    $xfer += $output->writeStructBegin('TDataSink');
    if ($this->type !== null) {
      $xfer += $output->writeFieldBegin('type', TType::I32, 1);
      $xfer += $output->writeI32($this->type);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->stream_sink !== null) {
      if (!is_object($this->stream_sink)) {
        throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
      }
      $xfer += $output->writeFieldBegin('stream_sink', TType::STRUCT, 2);
      $xfer += $this->stream_sink->write($output);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->table_sink !== null) {
      if (!is_object($this->table_sink)) {
        throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
      }
      $xfer += $output->writeFieldBegin('table_sink', TType::STRUCT, 3);
      $xfer += $this->table_sink->write($output);
      $xfer += $output->writeFieldEnd();
    }
    $xfer += $output->writeFieldStop();
    $xfer += $output->writeStructEnd();
    return $xfer;
  }

}


