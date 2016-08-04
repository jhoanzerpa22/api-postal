<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CodPostal extends Model
{
    //
    public $table = "codigop";

    public $primaryKey = "codigo";

    public $fillable = [
            "codigo",
            "asenta",
            "tipo_asenta",
            "mnpio",
            "estado",
            "ciudad",
            "cp",
            "c_estado",
            "c_oficina",
            "c_cp",
            "c_tipo_asenta",
            "c_mnpio",
            "id_asenta_cpcons",
            "zona",
            "c_cve_ciudad"


    ];
}
