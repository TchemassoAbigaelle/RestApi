<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'price','description'];


    public function getId()
    {
    return $this->attributes['id'];
    }
    public function setId($id)
    {
    $this->attributes['id'] = $id;
    }
    public function getName()
    {
    return $this->attributes['name'];
    }
    public function setName($name)
    {
    $this->attributes['name'] = $name;
    }
    public function getPrice()
    {
    return $this->attributes['price'];
    }
    public function setEmail($email)
    {
    $this->attributes['price'] = $email;
    }
    public function getCreatedAt()
    {
    return $this->attributes['created_at'];
    }
    public function setCreatedAt($createdAt)
    {
    $this->attributes['created_at'] = $createdAt;
    }
    public function getUpdatedAt()
    {
    return $this->attributes['updated_at'];
    }
    public function setUpdatedAt($updatedAt)
    {
    $this->attributes['updated_at'] = $updatedAt;
    }
    public function getDescription()
    {
    return $this->attributes['description'];
    }
    public function setDescription($image)
    {
    $this->attributes['description'] = $image;
    }
}
