<?php


Class MigrationsController{

    private MigrationsService $migrationService;

    public function __construct(MigrationsService $migrationService){
        $this->migrationService = $migrationService;
    }

    public function index(){
        $this->migrationService->execute();
    }
}