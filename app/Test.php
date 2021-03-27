<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    // secara default model akan menggunakan database dengan nama jamak
    // model test -> table tests (ada tambahan huruf s dibelakan tabel)

    // jika ingin menggunakan nama table yang diinginkan maka tambahkan protected $table
    protected $table = "test";
}
