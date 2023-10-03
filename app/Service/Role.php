<?php

namespace App\Service;

enum Role: int
{
    case Admin = 1;
    case Visitor = 2;

    public function getRoleName(): string
    {
        return match ($this) {
            Role::Admin => 'Администратор',
            Role::Visitor => 'Посетитель'
        };
    }
}
