<?php

namespace SkolaVDF\Matematika\Telesa;

/** 
 * Rozhraní pro geometrická tělesa 
 */

interface ITeleso {

    /**
     * Vypočte a vrátí povrch tělesa
     *  
     * @return float
     */
    
    public function povrch(): float;
    
    /**Vypočte a vrátí objem tělesa
     * 
     * 
     * @return float
     */

    public function objem(): float;
    
    /**
     * Testuje, je-li objekt trojrozměrný
     * 
     * @return boolean true značí trojrozměrý, false jiný
     */
    
    public function is3D(): bool;
    
    /**
     * 
     * 
     * @return integer počet vrcholů, když je trojrozměrný, jinak 0
     */
    
    public function pocetVrcholu(): int;
    
    /**
     * Vygeneruje řetězec informující o tělesu (jeho název a rozměry)
     * 
     * @return string
     */
    
    public function info(): string;
}
