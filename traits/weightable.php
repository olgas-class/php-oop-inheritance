<?php

trait Weightable {
  private int $weightKg;

  /**
   * Get the value of weightKg
   */
  public function getWeightKg(): int {
    return $this->weightKg;
  }

  /**
   * Set the value of weightKg
   *
   */
  public function setWeightKg($weightKg): void {
    $this->weightKg = $weightKg;
  }

  public function getWeightInG(): int {
    return $this->weightKg * 1000;
  }
}
