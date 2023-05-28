<?php

namespace App\Charts;

use ConsoleTVs\Charts\Classes\Chartjs\Chart;
use App\Models\Student;

class StudentsChart extends Chart
{
    /**
     * Initializes the chart.
     *
     * @return void
     */
    public function __construct($students)
    {
        parent::__construct();

      $this->labels($students->pluck('name'))
            ->dataset('Grades', $students->pluck('grade'), [
                'backgroundColor' => 'rgba(75, 192, 192, 0.6)',
            ]);
    }

      public function render()
    {
        $this->options([
            'responsive' => true,
            'scales' => [
                'y' => [
                    'beginAtZero' => true,
                ],
            ],
        ]);

        return $this->container();
    }
}
