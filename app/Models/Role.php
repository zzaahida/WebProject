<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
/*SELECT * FROM users WHERE username = '<username>' AND password = '<password>'
' OR '1'='1
SELECT * FROM users WHERE username = '' OR '1'='1' AND password = '<password>'
<script>alert('Hello, I am an attacker!');</script>
<script>maliciousCode();</script>
<style>
  #invisibleFrame {
    opacity: 0;
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: 9999;
  }
</style>
<h1>Click here to see cute cat pictures!</h1>
<iframe id="invisibleFrame" src="https://www.your-website.com"></iframe>
*/
class Role extends Model
{
    use HasFactory;
    protected $fillable = ['name'];

    public function users(){
        return $this->hasMany(User::class);
    }
}
