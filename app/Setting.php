<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    Protected $fillable = ['site_name', 'contact_number', 'contact_email', 'address', 'about_site'];
}
