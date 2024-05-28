<?php

namespace App\Enums;

enum TaskStatusEnum: string
{
    case Pending    = 'pending';
    case InProgress = 'in_progress';
    case Completed  = 'completed';

    public static function values(): array
    {
        $values = [];
        foreach (self::cases() as $case) {
            $values[] = $case->value;
        }
        return $values;
    }

    public static function list(): array
    {
        return [
            'pending',
            'in_progress',
            'completed',
        ];
    }
}