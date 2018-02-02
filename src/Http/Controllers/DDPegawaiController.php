<?php namespace Bantenprov\DDPegawai\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Bantenprov\DDPegawai\Facades\DDPegawai;
use Bantenprov\DDPegawai\Models\DDPegawaiModel;

/**
 * The DDPegawaiController class.
 *
 * @package Bantenprov\DDPegawai
 * @author  bantenprov <developer.bantenprov@gmail.com>
 */
class DDPegawaiController extends Controller
{
    public function demo()
    {
        return DDPegawai::welcome();
    }
}
