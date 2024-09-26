<?php

namespace App\Http\Controllers;
use OpenApi\Annotations as OA;

/**
 * @OA\Info(
 *      version="1.0",
 *      title="Admin Control Panel", 
 *      description="For Admin Only",
 *      x={
 *          "logo": {
 *              "url": "https://miro.medium.com/v2/resize:fit:1200/1*J3G3akaMpUOLegw0p0qthA.png"
 *          }
 *      },
 *      @OA\Contact(
 *          name="Developer : Theodorus",
 *          email="theostevsetiawan@gmail.com"
 *      ),
 * )
 */
abstract class Controller
{

}