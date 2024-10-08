<?php

function peseta2euros($cantidad,$cotizacion=166.3):float{
    return $cantidad *$cotizacion;
}

function euros2pesetas($cantidad,$cotizacion=0.00601):float{
    return $cantidad *$cotizacion;
}