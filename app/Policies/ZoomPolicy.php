<?php

namespace App\Policies;

use App\Zoom;
use Illuminate\Auth\Access\HandlesAuthorization;

class ZoomPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the update.
     *
     * @param  \App\Zoom  $zoom
     * @return mixed
     */
    public function view(Zoom $zoom)
    {
        return in_array($zoom->code, [
            'connecting',
        ]);
    }


}
