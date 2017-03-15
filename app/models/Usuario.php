<?php
use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class Usuario extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

  
  protected $connection  = 'universal';
  protected $table       = 'usuario';
	protected $primaryKey  = 'id';
	public    $timestamps  = false;

	protected $hidden = array('nombre', 'recordar_token');

	public function getAuthIdentifier()
  {
    return $this->getKey();
  }
  
  public function getAuthPassword()
  {
    return $this->clave;
  } 
  
  public function getRememberToken()
  {
    return $this->recordar_token;
  }
  
  public function setRememberToken($value)
  {
    $this->recordar_token = $value;
  }
  
  public function getRememberTokenName()
  {
    return "recordar_token";
  }
  
  public function getReminderEmail()
  {
    return $this->nombre;
  }
}
