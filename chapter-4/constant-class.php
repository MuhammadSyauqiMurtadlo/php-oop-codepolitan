<?php

class Time
{
  public const DAY_IN_SEC = 60 * 60 * 24;

  public function tomorrow()
  {
    return time() + self::DAY_IN_SEC;
  }
}

echo Time::DAY_IN_SEC . "<br/>"; // Outputs: 86400

$clock = new Time;
echo $clock->tomorrow() . "<br/>"; // Outputs: (current time + 86400 seconds)