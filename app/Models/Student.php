<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Attributes\Fillable;
    #[Fillable([
        'first_name',
        'last_name',
        'email',
        'student_numbers',
        'year_level',
        'course'
    ])]
class Student extends Model
{
    /**
     * Get available year levels
     */
    public static function yearLevels(): array
    {
        return [
            '1st' => 'Year 1',
            '2nd' => 'Year 2',
            '3rd' => 'Year 3',
            '4th' => 'Year 4',
        ];
    }

    /**
     * Get the label for the year level
     */
    public function getYearLevelLabelAttribute(): string
    {
        $levels = self::yearLevels();
        return $levels[$this->year_level] ?? $this->year_level;
    }
}
