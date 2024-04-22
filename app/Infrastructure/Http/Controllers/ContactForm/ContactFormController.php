<?php

namespace App\Infrastructure\Http\Controllers\ContactForm;

use App\Domain\ContactForm\Application\Services\ContactFormService;
use App\Domain\ContactForm\Domain\Requests\ContactFormRequest;
use App\Domain\ContactForm\Infrastructure\Factories\StorageFactoryInterface;
use App\Infrastructure\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Mockery\Exception;

class ContactFormController extends Controller
{
    private StorageFactoryInterface $storageFactory;

    public function __construct(StorageFactoryInterface $storageFactory)
    {
        $this->storageFactory = $storageFactory;
    }

    /**
     * @param ContactFormRequest $request
     * @return JsonResponse
     */
    public function store(ContactFormRequest $request): JsonResponse
    {
        try {

            $storage = $this->storageFactory->create($request->type);

            //todo:DTO
            $storage->save($request->validated());


            //TODO: USE Resources. Chgitem, DDD structurayum kochvuma resource te urish ban
            return response()->json([
                'message' => 'Contact Form created successfully'
            ], 201);

        } catch (Exception $exception) {
            return response()->json([
                'error' => $exception->getMessage()
            ], 500);
        }
    }
}
