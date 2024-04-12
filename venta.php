<?php

include_once('moto.php');

class Venta
{

    // atributos
    private $nro;
    private $fecha;
    private $colCliente;
    private $colMoto;
    private $precioFinal;

    public function __construct($nro, $fecha, $colCliente, $colMoto, $precioFinal)
    {
        $this->nro = $nro;
        $this->fecha = $fecha;
        $this->colCliente = $colCliente;
        $this->colMoto = $colMoto;
        $this->precioFinal = $precioFinal;
    }

    /**
     * get y set de nro
     */
    public function getNro()
    {
        return $this->nro;
    }
    public function setNro($nro)
    {
        $this->nro = $nro;

        return $this;
    }

    /**
     * get y set de fecha
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    public function setFecha($fecha)
    {
        $this->fecha = $fecha;

        return $this;
    }

    /**
     * get y set de colCliente
     */
    public function getColCliente()
    {
        return $this->colCliente;
    }

    public function setColCliente($colCliente)
    {
        $this->colCliente = $colCliente;

        return $this;
    }

    /**
     * get y set de colMoto
     */
    public function getColMoto()
    {
        return $this->colMoto;
    }

    public function setColMoto($colMoto)
    {
        $this->colMoto = $colMoto;

        return $this;
    }

    /**
     * get y set de precio final
     */
    public function getPrecioFinal()
    {
        return $this->precioFinal;
    }

    public function setPrecioFinal($precioFinal)
    {
        $this->precioFinal = $precioFinal;

        return $this;
    }

    // para sumar moto
    public function incorporarMoto($objMoto)
    {
        if ($objMoto->getActiva()) {
            if ($objMoto->darPrecioVenta() >= 0) {
                $this->getColMoto()[] = $objMoto;
                $this->setPrecioFinal($objMoto->getCosto() + $this->getPrecioFinal());
            }
        }
    }

    public function __toString()
    {
        $msj = "Numero de venta: " . $this->getNro() . "\n";
        $msj .= "Fecha: " . $this->getFecha() . "\n";
        $msj .= "Cliente: " . $this->getColCliente() . "\n";
        $msj .= "Moto: " . $this->getColMoto() . "\n";
        $msj .= "Precio: " . $this->getPrecioFinal() . "\n";

        return $msj;
    }
}
