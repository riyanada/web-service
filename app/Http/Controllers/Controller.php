<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;

class Controller extends BaseController
{
    /**
     * @OA\Info(
     *   title="Web Service - Api Docs",
     *   version="1.0",
     *   description="Api ini dibuat untuk memenuhi tugas Interoperability",
     *   @OA\Contact(
     *     email="riyanmaulana402@yahoo.co.id",
     *     name="riyanada"
     *   )
     * )
     */

    /**
     * @OA\SecurityScheme(
     *     securityScheme="bearerAuth",
     *     type="apiKey",
     *     name="Authorization",
     *     in="header",
     * )
     */
}
