<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model
{
    // juka nama table nya jamak atau ada huruf s nya maka tidak perlu menggunakan nama table lagi

    // untuk memberi tahu model bahwa field ini di database yang bsa di isi
    protected $fillable = ['nama', 'nrp', 'email', 'jurusan'];

    // untuk memberi tahu model bahwa field ini di database tidak boleh di isi
    protected $guard = [];

    // menggunakan soft delete
    use SoftDeletes;
}
