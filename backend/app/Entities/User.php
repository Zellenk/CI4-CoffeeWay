<?php

namespace App\Entities;

use CodeIgniter\Entity\Entity;

class User extends Entity
{
    protected $datamap = [];

    // Use CI auto-handled timestamp fields
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    // Casts for status fields to ensure correct return types
    protected $casts = [
        'id'              => 'integer',
        'account_status'  => 'integer',
        'email_activated' => 'integer',
        'newsletter'      => 'integer',
    ];

    /** Custom Accessor: full name combination **/
    public function getFullName(): string
    {
        return trim($this->first_name . ' ' . ($this->middle_name ? $this->middle_name . ' ' : '') . $this->last_name);
    }

    /**Mutator: Hash password automatically when setting password_hash **/
    public function setPasswordHash(string $password)
    {
        $this->attributes['password_hash'] = password_hash($password, PASSWORD_DEFAULT);
        return $this;
    }

    /** Accessor: Fallback for profile images **/
    public function getProfileImage()
    {
        return $this->attributes['profile_image'] ?? '/assets/images/default-avatar.png';
    }
}
