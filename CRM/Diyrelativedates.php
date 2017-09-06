<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CRM_Diyrelativedates
 *
 * @author jon
 */
class CRM_Diyrelativedates {

  protected $fromBegins;
  protected $fromOffset;
  protected $fromUnit;
  protected $toBegins;
  protected $toOffset;
  protected $toUnit;

  /**
   * @var DateTimeImmutable The calculated "From" date.
   */
  protected $from;

  /**
   * @var DateTimeImmutable The calculated "To" date.
   */
  protected $to;

  /**
   * Class constructor.
   */
  public function __construct($filter) {
    foreach ($filter as $property => $value) {
      $this->$property = $value;
    }
  }

  /**
   *
   * @param DateTimeImmutable $date
   * @return type
   */
  public function calculate($date = NULL) {
    // In normal use, we'll always be calculating from the current date.
    // However, in preview mode we may want to calculate from an arbitrary date.
    if (!$date) {
      $date = new DateTimeImmutable();
    }
    $dateRange = array('from' => NULL, 'to' => NULL);

    if ($this->fromUnit) {
      $this->from = $date->modify($this->fromOffset . " " . $this->fromUnit);
      $dateRange['from'] = $this->from->format('YmdHis');
    }
    if ($this->toUnit) {
      $this->to = $date->modify($this->toOffset . " " . $this->toUnit);
      $dateRange['to'] = $this->to->format('YmdHis');
    }

    return $dateRange;
  }

}
