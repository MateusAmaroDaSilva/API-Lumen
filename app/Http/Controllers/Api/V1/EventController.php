<?php

namespace App\Http\Controllers\Api\V1;

use App\Application\DTOs\CreateEventDTO;
use App\Application\UseCases\CreateEventUseCase;
use App\Application\UseCases\GetEventUseCase;
use App\Application\UseCases\ListEventsUseCase;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Laravel\Lumen\Routing\Controller;

class EventController extends Controller
{
    public function __construct(
        private readonly CreateEventUseCase $createEventUseCase,
        private readonly ListEventsUseCase  $listEventsUseCase,
        private readonly GetEventUseCase    $getEventUseCase,
    ) {}

    public function index(): JsonResponse
    {
        $events = $this->listEventsUseCase->execute();
        return response()->json(['data' => $events]);
    }

    public function show(int $id): JsonResponse
    {
        $event = $this->getEventUseCase->execute($id);

        if (!$event) {
            return response()->json(['message' => 'Evento não encontrado.'], 404);
        }

        return response()->json(['data' => $event->toArray()]);
    }

    public function store(Request $request): JsonResponse
    {
        $this->validate($request, [
            'name'        => 'required|string|max:255',
            'description' => 'required|string',
            'price'       => 'required|numeric|min:0',
            'event_date'  => 'required|date|after:now',
            'capacity'    => 'required|integer|min:1',
        ]);

        try {
            $dto   = CreateEventDTO::fromArray($request->all());
            $event = $this->createEventUseCase->execute($dto);

            return response()->json([
                'message' => 'Evento criado com sucesso.',
                'data'    => $event->toArray(),
            ], 201);
        } catch (\InvalidArgumentException $e) {
            return response()->json(['message' => $e->getMessage()], 422);
        }
    }
}
