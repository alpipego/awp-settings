<?php
/**
 * Created by PhpStorm.
 * User: alpipego
 * Date: 26/07/16
 * Time: 12:18
 */
declare(strict_types = 1);

namespace Alpipego\AWP\Settings;

/**
 * Interface OptionInterface
 * @package Alpipego\WpLib
 */
interface OptionInterface
{
    /**
     * @return mixed
     */
    public function run();

    /**
     * @return mixed
     */
    public function registerSetting();

    /**
     * @return mixed
     */
    public function addField();

    /**
     * @return mixed
     */
    public function callback();

    /**
     * @param $value
     *
     * @return mixed
     */
    public function sanitize($value);
}
