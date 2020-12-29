<?php


namespace App\Http\Controllers;


use Digitec\Conekta\ConektaServiceInterface;
use Digitec\Conekta\Dto\Order\Request\Charges;
use Digitec\Conekta\Dto\Order\Request\CreateRequest;
use Digitec\Conekta\Dto\Order\Request\PaymentMethod;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use JsonMapper;
use JsonMapper_Exception;

/**
 * Class OrderController
 * @package App\Http\Controllers
 */
class OrderController extends Controller
{
    /**
     * @var ConektaServiceInterface
     */
    protected ConektaServiceInterface $conektaService;

    /**
     * @var JsonMapper
     */
    protected JsonMapper $jsonMapper;

    /**
     * OrderController constructor.
     * @param ConektaServiceInterface $conektaService
     * @param JsonMapper $jsonMapper
     */
    public function __construct(ConektaServiceInterface $conektaService, JsonMapper $jsonMapper)
    {
        $this->conektaService = $conektaService;
        $this->jsonMapper = $jsonMapper;
    }

    /**
     * @return JsonResponse
     */
    public function list(): JsonResponse
    {
        return response()->json($this->conektaService->list()->toArray());
    }

    /**
     * @param Request $request
     * @return JsonResponse
     * @throws JsonMapper_Exception
     */
    public function create(Request $request): JsonResponse
    {

        $json = $request->json()->all();

        /** @var  $orderCreateRequest CreateRequest */
        $orderCreateRequest = $this->jsonMapper->map($json, new CreateRequest());
        $orderCreateRequest->setCurrency('MXN');

        return response()->json($this->conektaService->createOrder($orderCreateRequest));
    }

}
