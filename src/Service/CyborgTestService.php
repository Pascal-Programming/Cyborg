<?php

namespace App\Service;


class CyborgTestService
{
    function cybortTest($cyborgFormData)
    {
        //dd($cyborgFormData);
        if (in_array(true, $cyborgFormData, true)) {
            //dd('true', $cyborgFormData);
            $result = 'Sie sind ein Cyborg';
            return $result;
        } else {
            //dd('false', $cyborgFormData);
            $result = 'Sie sind kein Cyborg';
            return $result;
        }
    }

}
