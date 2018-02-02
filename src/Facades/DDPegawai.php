<?php namespace Bantenprov\DDPegawai\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * The DDPegawai facade.
 *
 * @package Bantenprov\DDPegawai
 * @author  bantenprov <developer.bantenprov@gmail.com>
 */
class DDPegawai extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'dd-pegawai';
    }
}
