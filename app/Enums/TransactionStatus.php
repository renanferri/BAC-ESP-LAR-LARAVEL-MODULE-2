<?php

namespace App\Enums;

enum TransactionStatus : int
{
    case PAID = 1;
    CASE PENDING = 2;
    CASE FAILED = 3;
    CASE CANCELED = 0;
}