<?php

namespace Emmanix2002\Moneywave\Enum;

class Endpoints
{
    const BANKS = 'banks';
    const DISBURSE = 'v1/disburse';
    const DISBURSE_BULK = 'v1/disburse/bulk';
    const DISBURSE_STATUS = 'v1/disburse/status';
    const GET_CHARGE = 'v1/get-charge';
    const MERCHANT_VERIFY = 'v1/merchant/verify';
    const RESOLVE_ACCOUNT = 'v1/resolve/account';
    const TRANSFER = 'v1/transfer';
    const TRANSFER_RETRY = 'v1/transfer/disburse/retry';
    const WALLET = 'v1/wallet';
}