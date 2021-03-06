<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Http\Helper\ResponseBuilder;

class Province_Model extends Model
{
    protected $table = 'tbl_province';
    protected $primaryKey = 'prov_id';
    protected $dateFormat = 'Y-m-d H:i:s.uO';

    const CREATED_AT = 'prov_addon';
    const UPDATED_AT = 'prov_chgon';

    function __construct() {
        parent::__construct();
    }
}
