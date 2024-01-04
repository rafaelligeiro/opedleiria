<?php
namespace App\Enums;

use BenSampo\Enum\Enum;

final class tipo_pagamento extends Enum
{
    const Cartao = 'Cartão';
    const MBWay = 'MBWay';
    const Referencia = 'Referência';
}
