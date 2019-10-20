<?php

namespace SkolaVDF\Matematika\Telesa;

class Válec implements SkolaVDF\Matematika\Telesa\ITeleso {

    public $r = 10, $d = 5, $v = 20;

    public function povrch(): float {

        return 2 * pi() * ($this->r + $this->v);
    }

    public function objem(): float {

        return pi() * pow(r, r) * $this->v;
    }

    public function is3D(): bool {
        if ($this->r == 0 || $this->v == 0) {
            echo'True';
        } else {
            echo 'False';
        }
    }

    public function pocetVrcholu(): int {

        return 0;
    }

    public function info(): string {

        $info = "Válec má rozměry (d, r, v): $this->d . $this->r . $this->v";

        return $info;
    }

}
