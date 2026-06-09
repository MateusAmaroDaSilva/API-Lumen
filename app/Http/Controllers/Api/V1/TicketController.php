<?php

namespace App\Http\Controllers\Api\V1;

use App\Application\DTOs\BuyTicketDTO;
use App\Application\UseCases\ListTicketsUseCase;
use App\Application\UseCases\RequestTicketUseCase;
use DomainException;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Laravel\Lumen\Routing\Controller;

class TicketController extends Controller
{
    public function __construct(
        private readonly RequestTicketUseCase $requestTicketUseCase,
        private readonly ListTicketsUseCase   $listTicketsUseCase,
    ) {}

    public function buy(Request $request): JsonResponse
    {
        $this->validate($request, [
            'event_id'       => 'required|integer|exists:events,id',
            'user_name'      => 'required|string|max:255',
            'user_email'     => 'required|email|max:255',
            'payment_method' => 'required|string|in:credit_card,pix,boleto',
        ]);

        try {
            $dto = BuyTicketDTO::fromArray($request->all());
            $result = $this->requestTicketUseCase->execute($dto);
            return response()->json($result, 202);
        } catch (DomainException $e) {
            return response()->json(['message' => $e->getMessage()], 422);
        } catch (\InvalidArgumentException $e) {
            return response()->json(['message' => $e->getMessage()], 404);
        }
    }

    public function index(): JsonResponse
    {
        $tickets = $this->listTicketsUseCase->execute();
        return response()->json(['data' => $tickets]);
    }
}
