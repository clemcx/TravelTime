<?php
class TimeTravel
{
    private $start;
    private $end;
    public function __construct(DateTime $start, DateTime $end)
    {
        $this->start = $start;
        $this->end = $end;
    }
    public function getTravelInfo()
    {
        $diff = $this->start->diff($this->end);
        return $diff->format("Il y a %Y années, %M mois, %D jours, %h heures, %i minutes et %s secondes entre les deux dates");
    }
    public function findDate(int $interval)
    {
        $inte = new DateInterval("PT" . $interval . "S");
        $this->start->sub($inte);
        return $this->start->format("d/m/Y");
    }
    public function backToFutureStepByStep($step)
    {

        $periods = new DatePeriod($this->start, $step , $this->end);
        foreach ($periods as $date)
        {
          echo '<br>' .  $date->format("M,d,Y,");
        }

    }
}