<?php

namespace App\Enums;

enum RolesEnum: string {

    case CUSTOMER = "customer";
    case ADMIN = "admin";

    public function getName(): string
    {
        return match ($this)
        {
            self::CUSTOMER => 'Cliente',
            self::ADMIN => 'Administrador'
        };
    }
}
