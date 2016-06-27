<?php

class App
{
    protected $basePath;
    protected $config;
    protected $db;
    protected $isBooted;
    protected $loadedProviders;
    protected $session;
    protected static $instance;

    public function __construct()
    {
        $this->session = new Session;
        static::setInstance( $this );
    }

    /*
     * Return the current session
     */
    public function session()
    {
        return $this->session;
    }

    /*
     * Return the current database handler
     */
    public function db()
    {
        return $this->db;
    }

    /*
     * Return the current configuration
     */
    public function config()
    {
        return $this->config;
    }

    /*
     * Return the application's base path
     */
    public function getBasePath()
    {
        return $this->basePath;
    }

    /*
     * Return the current instance of the application
     */
    public static function getInstance()
    {
        return static::$instance;
    }

    /*
     * Set the current instance of the application
     */
    public static function setInstance( $application )
    {
        static::$instance = $application;
    }
}