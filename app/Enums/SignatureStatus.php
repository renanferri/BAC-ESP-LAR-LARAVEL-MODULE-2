<?php

namespace App\Enums;

enum SignatureStatus : int
{
    case ACTIVED = 1;
    CASE INACTIVED = 2;
    CASE SUSPENDED = 3;
    CASE CANCELED = 0;
}