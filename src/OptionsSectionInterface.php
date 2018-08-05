<?php
/**
 * Created by PhpStorm.
 * User: alpipego
 * Date: 26/07/16
 * Time: 12:10
 */
declare(strict_types = 1);

namespace Alpipego\AWP\Settings;

/**
 * Interface OptionsSectionInterface
 * @package Alpipego\WpLib
 */
interface OptionsSectionInterface
{

    /**
     * @return void
     */
    function run();

    /**
     * Wrapper for `add_settings_section`
     *
     * @return void
     */
    function addSection();

    /**
     * @return mixed
     */
    function callback();

}
