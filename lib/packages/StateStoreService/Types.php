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


final class StateStoreServiceVersion {
  const V1 = 0;
  static public $__names = array(
    0 => 'V1',
  );
}

class TRegisterServiceRequest {
  static $_TSPEC;

  public $protocol_version =   0;
  public $subscriber_address = null;
  public $service_id = null;
  public $service_address = null;

  public function __construct($vals=null) {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        1 => array(
          'var' => 'protocol_version',
          'type' => TType::I32,
          ),
        2 => array(
          'var' => 'subscriber_address',
          'type' => TType::STRUCT,
          'class' => '\THostPort',
          ),
        3 => array(
          'var' => 'service_id',
          'type' => TType::STRING,
          ),
        4 => array(
          'var' => 'service_address',
          'type' => TType::STRUCT,
          'class' => '\THostPort',
          ),
        );
    }
    if (is_array($vals)) {
      if (isset($vals['protocol_version'])) {
        $this->protocol_version = $vals['protocol_version'];
      }
      if (isset($vals['subscriber_address'])) {
        $this->subscriber_address = $vals['subscriber_address'];
      }
      if (isset($vals['service_id'])) {
        $this->service_id = $vals['service_id'];
      }
      if (isset($vals['service_address'])) {
        $this->service_address = $vals['service_address'];
      }
    }
  }

  public function getName() {
    return 'TRegisterServiceRequest';
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
            $xfer += $input->readI32($this->protocol_version);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 2:
          if ($ftype == TType::STRUCT) {
            $this->subscriber_address = new \THostPort();
            $xfer += $this->subscriber_address->read($input);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 3:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->service_id);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 4:
          if ($ftype == TType::STRUCT) {
            $this->service_address = new \THostPort();
            $xfer += $this->service_address->read($input);
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
    $xfer += $output->writeStructBegin('TRegisterServiceRequest');
    if ($this->protocol_version !== null) {
      $xfer += $output->writeFieldBegin('protocol_version', TType::I32, 1);
      $xfer += $output->writeI32($this->protocol_version);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->subscriber_address !== null) {
      if (!is_object($this->subscriber_address)) {
        throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
      }
      $xfer += $output->writeFieldBegin('subscriber_address', TType::STRUCT, 2);
      $xfer += $this->subscriber_address->write($output);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->service_id !== null) {
      $xfer += $output->writeFieldBegin('service_id', TType::STRING, 3);
      $xfer += $output->writeString($this->service_id);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->service_address !== null) {
      if (!is_object($this->service_address)) {
        throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
      }
      $xfer += $output->writeFieldBegin('service_address', TType::STRUCT, 4);
      $xfer += $this->service_address->write($output);
      $xfer += $output->writeFieldEnd();
    }
    $xfer += $output->writeFieldStop();
    $xfer += $output->writeStructEnd();
    return $xfer;
  }

}

class TRegisterServiceResponse {
  static $_TSPEC;

  public $status = null;

  public function __construct($vals=null) {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        1 => array(
          'var' => 'status',
          'type' => TType::STRUCT,
          'class' => '\TStatus',
          ),
        );
    }
    if (is_array($vals)) {
      if (isset($vals['status'])) {
        $this->status = $vals['status'];
      }
    }
  }

  public function getName() {
    return 'TRegisterServiceResponse';
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
          if ($ftype == TType::STRUCT) {
            $this->status = new \TStatus();
            $xfer += $this->status->read($input);
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
    $xfer += $output->writeStructBegin('TRegisterServiceResponse');
    if ($this->status !== null) {
      if (!is_object($this->status)) {
        throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
      }
      $xfer += $output->writeFieldBegin('status', TType::STRUCT, 1);
      $xfer += $this->status->write($output);
      $xfer += $output->writeFieldEnd();
    }
    $xfer += $output->writeFieldStop();
    $xfer += $output->writeStructEnd();
    return $xfer;
  }

}

class TUnregisterServiceRequest {
  static $_TSPEC;

  public $protocol_version =   0;
  public $subscriber_address = null;
  public $service_id = null;

  public function __construct($vals=null) {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        1 => array(
          'var' => 'protocol_version',
          'type' => TType::I32,
          ),
        2 => array(
          'var' => 'subscriber_address',
          'type' => TType::STRUCT,
          'class' => '\THostPort',
          ),
        3 => array(
          'var' => 'service_id',
          'type' => TType::STRING,
          ),
        );
    }
    if (is_array($vals)) {
      if (isset($vals['protocol_version'])) {
        $this->protocol_version = $vals['protocol_version'];
      }
      if (isset($vals['subscriber_address'])) {
        $this->subscriber_address = $vals['subscriber_address'];
      }
      if (isset($vals['service_id'])) {
        $this->service_id = $vals['service_id'];
      }
    }
  }

  public function getName() {
    return 'TUnregisterServiceRequest';
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
            $xfer += $input->readI32($this->protocol_version);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 2:
          if ($ftype == TType::STRUCT) {
            $this->subscriber_address = new \THostPort();
            $xfer += $this->subscriber_address->read($input);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 3:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->service_id);
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
    $xfer += $output->writeStructBegin('TUnregisterServiceRequest');
    if ($this->protocol_version !== null) {
      $xfer += $output->writeFieldBegin('protocol_version', TType::I32, 1);
      $xfer += $output->writeI32($this->protocol_version);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->subscriber_address !== null) {
      if (!is_object($this->subscriber_address)) {
        throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
      }
      $xfer += $output->writeFieldBegin('subscriber_address', TType::STRUCT, 2);
      $xfer += $this->subscriber_address->write($output);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->service_id !== null) {
      $xfer += $output->writeFieldBegin('service_id', TType::STRING, 3);
      $xfer += $output->writeString($this->service_id);
      $xfer += $output->writeFieldEnd();
    }
    $xfer += $output->writeFieldStop();
    $xfer += $output->writeStructEnd();
    return $xfer;
  }

}

class TUnregisterServiceResponse {
  static $_TSPEC;

  public $status = null;

  public function __construct($vals=null) {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        1 => array(
          'var' => 'status',
          'type' => TType::STRUCT,
          'class' => '\TStatus',
          ),
        );
    }
    if (is_array($vals)) {
      if (isset($vals['status'])) {
        $this->status = $vals['status'];
      }
    }
  }

  public function getName() {
    return 'TUnregisterServiceResponse';
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
          if ($ftype == TType::STRUCT) {
            $this->status = new \TStatus();
            $xfer += $this->status->read($input);
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
    $xfer += $output->writeStructBegin('TUnregisterServiceResponse');
    if ($this->status !== null) {
      if (!is_object($this->status)) {
        throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
      }
      $xfer += $output->writeFieldBegin('status', TType::STRUCT, 1);
      $xfer += $this->status->write($output);
      $xfer += $output->writeFieldEnd();
    }
    $xfer += $output->writeFieldStop();
    $xfer += $output->writeStructEnd();
    return $xfer;
  }

}

class TRegisterSubscriptionRequest {
  static $_TSPEC;

  public $protocol_version =   0;
  public $subscriber_address = null;
  public $services = null;
  public $subscription_id = null;

  public function __construct($vals=null) {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        1 => array(
          'var' => 'protocol_version',
          'type' => TType::I32,
          ),
        2 => array(
          'var' => 'subscriber_address',
          'type' => TType::STRUCT,
          'class' => '\THostPort',
          ),
        3 => array(
          'var' => 'services',
          'type' => TType::SET,
          'etype' => TType::STRING,
          'elem' => array(
            'type' => TType::STRING,
            ),
          ),
        4 => array(
          'var' => 'subscription_id',
          'type' => TType::STRING,
          ),
        );
    }
    if (is_array($vals)) {
      if (isset($vals['protocol_version'])) {
        $this->protocol_version = $vals['protocol_version'];
      }
      if (isset($vals['subscriber_address'])) {
        $this->subscriber_address = $vals['subscriber_address'];
      }
      if (isset($vals['services'])) {
        $this->services = $vals['services'];
      }
      if (isset($vals['subscription_id'])) {
        $this->subscription_id = $vals['subscription_id'];
      }
    }
  }

  public function getName() {
    return 'TRegisterSubscriptionRequest';
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
            $xfer += $input->readI32($this->protocol_version);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 2:
          if ($ftype == TType::STRUCT) {
            $this->subscriber_address = new \THostPort();
            $xfer += $this->subscriber_address->read($input);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 3:
          if ($ftype == TType::SET) {
            $this->services = array();
            $_size0 = 0;
            $_etype3 = 0;
            $xfer += $input->readSetBegin($_etype3, $_size0);
            for ($_i4 = 0; $_i4 < $_size0; ++$_i4)
            {
              $elem5 = null;
              $xfer += $input->readString($elem5);
              if (is_scalar($elem5)) {
                $this->services[$elem5] = true;
              } else {
                $this->services []= $elem5;
              }
            }
            $xfer += $input->readSetEnd();
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 4:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->subscription_id);
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
    $xfer += $output->writeStructBegin('TRegisterSubscriptionRequest');
    if ($this->protocol_version !== null) {
      $xfer += $output->writeFieldBegin('protocol_version', TType::I32, 1);
      $xfer += $output->writeI32($this->protocol_version);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->subscriber_address !== null) {
      if (!is_object($this->subscriber_address)) {
        throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
      }
      $xfer += $output->writeFieldBegin('subscriber_address', TType::STRUCT, 2);
      $xfer += $this->subscriber_address->write($output);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->services !== null) {
      if (!is_array($this->services)) {
        throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
      }
      $xfer += $output->writeFieldBegin('services', TType::SET, 3);
      {
        $output->writeSetBegin(TType::STRING, count($this->services));
        {
          foreach ($this->services as $iter6 => $iter7)
          {
            if (is_scalar($iter7)) {
            $xfer += $output->writeString($iter6);
            } else {
            $xfer += $output->writeString($iter7);
            }
          }
        }
        $output->writeSetEnd();
      }
      $xfer += $output->writeFieldEnd();
    }
    if ($this->subscription_id !== null) {
      $xfer += $output->writeFieldBegin('subscription_id', TType::STRING, 4);
      $xfer += $output->writeString($this->subscription_id);
      $xfer += $output->writeFieldEnd();
    }
    $xfer += $output->writeFieldStop();
    $xfer += $output->writeStructEnd();
    return $xfer;
  }

}

class TRegisterSubscriptionResponse {
  static $_TSPEC;

  public $status = null;

  public function __construct($vals=null) {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        1 => array(
          'var' => 'status',
          'type' => TType::STRUCT,
          'class' => '\TStatus',
          ),
        );
    }
    if (is_array($vals)) {
      if (isset($vals['status'])) {
        $this->status = $vals['status'];
      }
    }
  }

  public function getName() {
    return 'TRegisterSubscriptionResponse';
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
          if ($ftype == TType::STRUCT) {
            $this->status = new \TStatus();
            $xfer += $this->status->read($input);
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
    $xfer += $output->writeStructBegin('TRegisterSubscriptionResponse');
    if ($this->status !== null) {
      if (!is_object($this->status)) {
        throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
      }
      $xfer += $output->writeFieldBegin('status', TType::STRUCT, 1);
      $xfer += $this->status->write($output);
      $xfer += $output->writeFieldEnd();
    }
    $xfer += $output->writeFieldStop();
    $xfer += $output->writeStructEnd();
    return $xfer;
  }

}

class TUnregisterSubscriptionRequest {
  static $_TSPEC;

  public $protocol_version =   0;
  public $subscriber_address = null;
  public $subscription_id = null;

  public function __construct($vals=null) {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        1 => array(
          'var' => 'protocol_version',
          'type' => TType::I32,
          ),
        2 => array(
          'var' => 'subscriber_address',
          'type' => TType::STRUCT,
          'class' => '\THostPort',
          ),
        3 => array(
          'var' => 'subscription_id',
          'type' => TType::STRING,
          ),
        );
    }
    if (is_array($vals)) {
      if (isset($vals['protocol_version'])) {
        $this->protocol_version = $vals['protocol_version'];
      }
      if (isset($vals['subscriber_address'])) {
        $this->subscriber_address = $vals['subscriber_address'];
      }
      if (isset($vals['subscription_id'])) {
        $this->subscription_id = $vals['subscription_id'];
      }
    }
  }

  public function getName() {
    return 'TUnregisterSubscriptionRequest';
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
            $xfer += $input->readI32($this->protocol_version);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 2:
          if ($ftype == TType::STRUCT) {
            $this->subscriber_address = new \THostPort();
            $xfer += $this->subscriber_address->read($input);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 3:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->subscription_id);
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
    $xfer += $output->writeStructBegin('TUnregisterSubscriptionRequest');
    if ($this->protocol_version !== null) {
      $xfer += $output->writeFieldBegin('protocol_version', TType::I32, 1);
      $xfer += $output->writeI32($this->protocol_version);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->subscriber_address !== null) {
      if (!is_object($this->subscriber_address)) {
        throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
      }
      $xfer += $output->writeFieldBegin('subscriber_address', TType::STRUCT, 2);
      $xfer += $this->subscriber_address->write($output);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->subscription_id !== null) {
      $xfer += $output->writeFieldBegin('subscription_id', TType::STRING, 3);
      $xfer += $output->writeString($this->subscription_id);
      $xfer += $output->writeFieldEnd();
    }
    $xfer += $output->writeFieldStop();
    $xfer += $output->writeStructEnd();
    return $xfer;
  }

}

class TUnregisterSubscriptionResponse {
  static $_TSPEC;

  public $status = null;

  public function __construct($vals=null) {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        1 => array(
          'var' => 'status',
          'type' => TType::STRUCT,
          'class' => '\TStatus',
          ),
        );
    }
    if (is_array($vals)) {
      if (isset($vals['status'])) {
        $this->status = $vals['status'];
      }
    }
  }

  public function getName() {
    return 'TUnregisterSubscriptionResponse';
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
          if ($ftype == TType::STRUCT) {
            $this->status = new \TStatus();
            $xfer += $this->status->read($input);
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
    $xfer += $output->writeStructBegin('TUnregisterSubscriptionResponse');
    if ($this->status !== null) {
      if (!is_object($this->status)) {
        throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
      }
      $xfer += $output->writeFieldBegin('status', TType::STRUCT, 1);
      $xfer += $this->status->write($output);
      $xfer += $output->writeFieldEnd();
    }
    $xfer += $output->writeFieldStop();
    $xfer += $output->writeStructEnd();
    return $xfer;
  }

}

