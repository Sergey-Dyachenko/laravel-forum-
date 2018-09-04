<?php namespace Acme\Reporting;
/**
 * Created by PhpStorm.
 * User: d5sfn
 * Date: 30.08.18
 * Time: 12:37
 */

use Acme\Repositories\SalesRepository;

class SalesReporter {

    /***
     * @var SalesRepository
     */

    private $repo;

    public function __construct (SalesRepository $repo)
    {
        $this->repo = $repo;
    }

    public function between($startDate, $endDate, SalesOutputInterface $formatter)
    {
//        //perform authentification
//        if(! Auth::check()) throw  new Exception ('Authentification required for reporting');

        //get sales from db
        $sales = $this->repo->between($startDate, $endDate);

        return $formatter->output($sales);

//        var_dump($formatter);
//
//        die();

    }



}
