<?php

class Ikaslea {
    private string $izena;
    private array $notak;

    public function __construct(string $izena) {
        $this->izena = $izena;
        $this->notak = [];
    }

    public function gehituNota($irakasgaia, $nota) {
        $this->notak[$irakasgaia] = $nota;
    }

    public function batazBeztekoa() {
        if (count($this->notak) == 0) {
            return 0;
        }
        $batura = 0;
        foreach ($this->notak as $nota) {
            $batura += $nota;
        }
        return $batura / count($this->notak);
    }

    public function erakutsiNotak() {
        echo "Ikasle: " . $this->izena . "<br>";
        foreach ($this->notak as $irakasgaia => $nota) {
            echo "- " . $irakasgaia . ": " . $nota . "<br>";
        }
        echo "Bataz bestekoa: " . $this->batazBeztekoa() . "<br>";
    }
}